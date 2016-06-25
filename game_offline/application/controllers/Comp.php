<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Comp extends Application{
    public function __construct(){
        parent::__construct();
        $this -> load -> helper(array('url','asset','time','location','baofa'));           
        $this -> load -> library('session_manager');
        $this -> check_session();    
    }
    
    private function __set_side_menu_index(&$data){
        $data['side_index'] = 'comp';    
    }
     
    public function index(){
        $this -> load -> model('admin/customer_service');
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/user_level');
        $this -> load -> model('/admin/game_play');
        $this -> load -> model('/admin/comp_point_convert');
        $this -> load -> library('template_generator');
        $this -> load -> library('session_manager');
        
        $user_no = $this -> check_session();
        $user_id = $this -> session_manager -> get_user_session('user_id');
        
        $data = array();
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        $this -> __set_side_menu_index($data);
        
        /*
         * Comp point conver History
         * */
        $condition[SELECT_CONDITION] = "
            user_level.user_level_code_name AS user_level_code_name,
            user_level.conversion_1cny_rate AS convert_rate,
            comp_point_convert.*
        ";
        
        $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'user_level', 
                JOIN_CONDITION_STATE => 'user_level.user_level_no = comp_point_convert.apply_user_level', 
                JOIN_CONDITION_DIRECT => "INNER JOIN"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $condition[ORDER_BY_CONDITION] = '`comp_point_convert.reg_date DESC';
        $data['comp_point_converts'] = $this -> comp_point_convert -> advanced_search_result($condition);
        
        
        /*
         * 획득한 Comp pont 총액을 구하고 이를 통하여 유저 레벨을 구함 
         */
        unset($condition);
        $search_user_id = strtolower($user_id);

        $condition[WHERE_CONDITION] = array('substr(player_name,5)' => $search_user_id);
        $total_comp = $this -> game_play -> sum('acc_comp_point','total_comp_point',$condition);
        
        $data['total_comp_point'] = !empty($total_comp -> total_comp_point) ? $total_comp -> total_comp_point : 0;
        $user_levels_info  = $this -> user_level -> get_user_level_by_comp($data['total_comp_point']); 
        
        $data['cur_user_level'] = $user_levels_info[0];
        $data['next_user_level'] = $user_levels_info[1];
        
        $data['promotion_needed_level_point'] =  
            !empty($user_levels_info[1]) ? 
                $user_levels_info[1] -> promotion_level_point: '';
        
        /*
         * Comp point 획득 통계 리스트 작성 (default 일별 통계)
         */
        
        $sql = "
            SELECT 
                DATE_FORMAT(FROM_UNIXTIME(play_date_int),'%Y-%m-%d') AS period,
                SUM(CASE distribute_type WHEN 'SLOTS' THEN bet_amount ELSE 0 END) AS slot_total,
                SUM(CASE distribute_type WHEN 'NON_SLOTS' THEN bet_amount ELSE 0 END) AS non_slot_total,
                SUM(CASE distribute_type WHEN 'LIVE' THEN bet_amount ELSE 0 END) AS live_total,
                SUM(acc_comp_point) as total_comp_point
            FROM game_play
            WHERE 
                substr(player_name,5) = ? 
            GROUP BY DATE_FORMAT(FROM_UNIXTIME(play_date_int), '%Y-%m-%d')
            ORDER BY DATE_FORMAT(FROM_UNIXTIME(play_date_int), '%Y-%m-%d') DESC
        ";
        $query_binding = array($search_user_id);
        $data['accumulate_comp_history'] = $this -> game_play -> raw_binding_query($sql,$query_binding);
        
        $view_name = $this -> set_view_name('comp');
        $this -> load -> view("front/comp/{$view_name}",$data);
    }
    
    /*
     *  covert comp Point 를 위한 폼 요청과 등록 처리 
     *  ajax request 만 허용 
     */
    public function convert_comp(){
         $user_no = $this -> check_session();
         $this -> load -> model('admin/game_play');
         $this -> load -> model('admin/user_level');
         $this -> load -> model('admin/wallet');
         $this -> load -> helper('location');
         $this -> load -> library('template_generator');
        
         $data = array();
         $this -> template_generator -> set_top_user_data($data);
         $this -> template_generator -> set_footer_data($data);
         
         $condition[WHERE_CONDITION] = array('user_no' => $user_no);
         $total_comp = $this -> game_play -> sum('acc_comp_point','total_comp_point',$condition);
         $data['total_comp_point'] = !empty($total_comp -> total_comp_point) ? $total_comp -> total_comp_point : 0;
         
                   
         $user_levels_info  = $this -> user_level -> get_user_level_by_comp($data['total_comp_point']); 
         $data['cur_user_level'] = $user_levels_info[0];
         $data['next_user_level'] = $user_levels_info[1]; 
         
         if ($this -> input -> method(TRUE) == "POST") {
             $res = array();
             $this -> load -> library('form_validation');        
             $this -> form_validation -> set_rules('convert_amount','Convert Comp Amount','trim|required|callback_get_number|numeric');    
             
             if ($this -> form_validation -> run() == FALSE) {
                $res['result']   = "fail";
                $res['errorCode'] = "1";
                $res['message'] =  validation_errors();
                echo json_encode($res);
                exit;
             }
             
             $this -> load -> model('admin/user'); 
             $this -> load -> model('admin/wallet');
             $this -> load -> model('admin/comp_point_convert');
              
             $req_convert_comp_amount = $this -> input -> post('convert_amount', TRUE);
             $transfer_to = $this -> input -> post('transfer_to', TRUE);
             $convert_money = $req_convert_comp_amount / $user_levels_info[0] -> conversion_1cny_rate;
             
             $condition[WHERE_CONDITION] = array('user_no' => $user_no);
             $this -> load -> model('admin/user');
             $user = $this -> user -> advanced_search_row($condition);
             
             /*
              * 전환금액이 레벨에 따차 최저 금액을 만족하는지 체크 
              */
              
              if ($req_convert_comp_amount < CONVERT_COMP_MIN_LIMIT ){
                $res['result']   = "fail";
                $res['errorCode'] = "1";
                $res['message'] =  '전환 가능한 최저 금액은' . CONVERT_COMP_MIN_LIMIT .' 이상입니다.\n확인하고 다시 시도해주세요';
                echo json_encode($res);
                exit; 
              }
             
             /*
              * 전환금액이 보유 콤프 포인트를 초과햇는지 체크 
              */
             $wallet = $this -> wallet -> advanced_search_row($condition);
             if ($req_convert_comp_amount > $wallet -> comp_point) {
                $res['result']   = "fail";
                $res['errorCode'] = "1";
                $res['message'] =  '전환 가능한 콤프 포인트를 초과하였습니다. \n확인하고 다시 시도해주세요.';
                echo json_encode($res);
                exit; 
             }           
             /*
              * comp 포인트 게임 칩 중전 
              */
              $this -> load -> library('transfer_service');              
              $data = array(
                  'user_no' => $user -> user_no,
                  'transfer_amount' => $convert_money,
                  'transfer_from'  => 'WALLET',
                  'transfer_to' => ($transfer_to == VENDER_MG ? "MG":"PT"),
                  'mg_id' => $user -> mg_id,
                  'pt_id' => $user -> pt_id
              );
              
              log_message('error',print_r($data, TRUE));
              
              $result = FALSE;
              if ($transfer_to == VENDER_PT){
                  $result = $this -> transfer_service -> transfer_to_pt($data);  
              }else if ($transfer_to == VENDER_MG){
                  $result = $this -> transfer_service -> transfer_to_mg($data);
              }
              
              if (!$result){
                  $res['result']   = "fail";
                  $res['errorCode'] = "1";
                  $res['message'] =  $this -> transfer_service -> get_message();
                  echo json_encode($res);
                  exit;
              }
              
             /*
              * comp point 전환을 테이블에 등록
              */
             
             $this -> load -> model('admin/comp_point_convert');
             $convert_insert_arr = array(
                'user_no' => $user_no,
                'transfer_to' => $transfer_to,
                'apply_user_level' => $user_levels_info[0] -> user_level_no,
                'convert_comp_point' => $req_convert_comp_amount ,
                'convert_money' => $req_convert_comp_amount / $user_levels_info[0] -> conversion_1cny_rate,
                'convert_rate' => $user_levels_info[0] -> conversion_1cny_rate,
                'convert_status' => CONVERT_COMP_STATUS_CONFIRMED,
                'reg_date' => time()
             );
             
             $this -> comp_point_convert -> insert($convert_insert_arr);
             
             /*
              * comp point 전환에 따른 wallet 해당 필드 업데이트  
              */
             $wallet_update_arr = array(
                'comp_point' => $wallet -> comp_point - $convert_insert_arr['convert_comp_point']
             ); 
             $this -> wallet -> update($wallet_update_arr,$condition);             
             
             $res['result'] = "success";
             $res['errorCode'] = "0";
             $res['message'] =  '요청이 성공적으로 처리되었습니다.';
             echo json_encode($res);
             exit;
         }else {
             $condition[WHERE_CONDITION] = array('user_no' => $user_no);
             $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
             $view_name = $this -> set_view_name('convert_comp_form');            
             $this -> load -> view("front/comp/form/{$view_name}",$data);
         }
    }

  public function check_session($redirect_url = ''){
        if (!$this -> session_manager -> is_user_login()){
            redirect(base_url($redirect_url));
            exit;
        }else {
            return $this -> session_manager-> get_user_session('user_no');
        }
    }
    
    /*
     * 콤마가 포함된 문자열 숫자에서 콤마를 제거한 후 숫자 반환
     * int 형으로 캐스팅한 후 반환하기 때문에 콤마를 제거한 숫자 문자열이 int 형 범위를 넘어갈 경우 버퍼오버플러우 발생
     *
     * */ 
    public function get_number($str) {
        $str = trim($str);
        if (strpos($str, ",") !== FALSE) {
            return (int)trim(str_replace(",", "", $str));
        } else {
            return (int)$str;
        }
    }
    
     /*
     * 콤마가 포함된 문자열 숫자에서 콤마를 제거만 한 문자열을 반환
     * */
    public function get_number_string($str) {
       return  preg_replace("/[^0-9]/", "",$str);
    }
    
     /*
     * 콤마가 포함된 문자열 숫자에서 콤마를 제거만 한 문자열을 반환
     * */
    public function get_number_int($str) {
       return  (int)preg_replace("/[^0-9]/", "",$str);
    }
    
    public function greater_than_or_equal($limit){
        if ($limit >= CONVERT_COMP_MIN_LIMIT){
            return TRUE;   
        }else {
            $this -> form_validation-> set_message(
                'greater_than_or_equal', 
                "The %s field must be greater than or equal ".CONVERT_COMP_MIN_LIMIT);
            return FALSE;
        }
    }
    
    public function less_than_or_equal($limit){
        if ($limit <= $limit){
            return TRUE;   
        }else {
            $this -> form_validation -> set_message(
                'less_than_or_equal', 
                "The %s field must be less than or equal {$this->max_amount}");
            return FALSE;
        }
    }
    
	

}
