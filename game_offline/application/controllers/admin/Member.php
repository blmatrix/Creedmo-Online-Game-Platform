<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function members() {
        if ($this -> input -> method(TRUE) == "POST") {

        } else {
            $this -> load -> helper("time");
            $this -> load -> helper('baofa');
            $this -> load -> helper('location');
            $this -> load -> model('admin/user');
            $this -> load -> library('paging');

            $where_condition = array();
            $like_condition  = array();
            $date_condition  = array();
            $join_condition  = array();
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1; 
            
            $total_conditions = array();
            
            $total_conditions[SELECT_CONDITION] = '
                user.user_no as  user_no,
                user.user_id as user_id, 
                user.user_status as user_status,
                user.login_status as login_status,
                user.user_name as user_name,
                user.affiliate_code as affiliate_code,
                user_level.user_level_no as user_level_no,
                user_level.user_level_code_name as user_level_code_name,
                user.deps1_child_count as deps1_child_count,
                user.deps2_child_count as deps2_child_count,
                user.reg_date,
                user.join_date as join_date,
                wallet.wallet_balance as wallet_balance,
                wallet.total_deposit_amount as total_deposit_amount,
                wallet.total_withdraw_amount as total_withdraw_amount,
                wallet.wallet_balance as wallet_balance,
                wallet.average as average';
                                                   
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'user_level', 
                JOIN_CONDITION_STATE => 'user.user_level_no = user_level.user_level_no', 
                JOIN_CONDITION_DIRECT => "left outer"
            );
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'wallet', 
                JOIN_CONDITION_STATE => 'user.user_no = wallet.user_no', 
                JOIN_CONDITION_DIRECT => "left outer"
            );
            $total_conditions[JOIN_CONDITION] = $join_condition;
            
            $data['search_keyword'] ='';
            $data['user_status'] ='';
            $data['user_level'] ='';
            $data['login_status'] ='';
            $data['daterange'] ='';
            $data['order'] ='';
            if ($this-> input-> get('user_status')){
                 $data['user_status'] = $this-> input-> get('user_status');
            }else {
                 $data['user_status'] = USER_STATUS_UNLOCKED;
                
            }
           
            if ($this -> input -> get('search_keyword')) {
                $data['search_keyword'] = $this -> input -> get('search_keyword');
                $like_condition['user_id'] = $this -> input -> get('search_keyword');
                $total_conditions[LIKE_CONDITION] = $like_condition;
            }
                
            if ( $data['user_status']  != 'all') {
                $where_condition['user.user_status'] = $data['user_status'];
            }
        
            if ($this -> input -> get('user_level')) {
                $data['user_level'] = $this -> input -> get('user_level');
                $where_condition['user.user_level_no'] = (int)$this -> input -> get('user_level');
            }

            if ($this -> input -> get('login_status')) {
                $data['login_status'] = $this -> input -> get('login_status');
                $where_condition['user.login_status'] = $this -> input -> get('login_status');
            }

            $total_conditions[WHERE_CONDITION] = $where_condition;

            if ($this -> input -> get('daterange')) {
                $data['daterange'] = $this -> input -> get('daterange');
                $date_arr = explode('-', $this -> input -> get('daterange'));
               
                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($date_arr[0]);
                $date_condition[END_TIME] = trim($date_arr[1]);
                $total_conditions[DATE_CONDITION] = $date_condition;
            }

            if ($this -> input -> get('order')) {
                $data['order'] = $this -> input -> get('order');
                if ($this -> input -> get('order') == 'amount DESC') {
                    $order_by_condition = 'wallet.wallet_balance DESC';
                } elseif ($this -> input -> get('order') == 'affiliate DESC') {
                    $order_by_condition = 'user.deps1_child_count DESC';

                }else {
                      $order_by_condition = 'user.reg_date DESC';
                }
                $total_conditions[ORDER_BY_CONDITION] = $order_by_condition;
            }
                
            $data['users_count'] =  $this -> user -> advanced_count_all_result($total_conditions);
            
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $data['users_count'];
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage);
            
            $total_conditions[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $total_conditions[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['paging'] = $this -> paging;
            $data['users'] =  $this -> user -> advanced_search_result($total_conditions);
            $this -> load -> view('admin/member/member_list', $data);
        }
    }
    
    public function member_view_id($id){
        $this -> load -> model('admin/user');
        $this -> load -> helper('url');

        $condition[WHERE_CONDITION] = array('user_id' => strtoupper(substr(trim($id),4)));
        $user = $this -> user -> advanced_search_row($condition);
        
        log_message('error',print_r($user, TRUE));
        log_message('error',strtoupper(substr($id,4)));
        
        redirect(site_url("admin/member/member_view")."/". $user -> user_no);           
    }
    
    public function member_view($user_no){
        $this -> load -> helper('location');
        $this -> load -> helper('time');
        $this -> load -> helper('string');
        $this -> load -> helper('url');
        $this -> load -> helper('time');
        
        $this -> load -> model('admin/user_level');
        $this -> load -> model('admin/wallet');
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/comp_point_record');
        $this -> load -> model('admin/user_track');
        $this -> load -> model('admin/game_play');
        $this -> load -> model('admin/user_action_log');
        $this -> load -> model('admin/country');
        $this -> load -> model('admin/mg_game_user');
        $this -> load -> model('admin/pt_game_user');
        
        // User Tracking Info 
        $user_track_query = "
            SELECT * FROM user_track WHERE user_no = ? ORDER BY reg_date ASC
        ";
        $user_tracks = $this -> user_track -> raw_binding_query($user_track_query, (int)$user_no);
        $data['user_track'] = NULL;
        if ($user_tracks){
            $data['user_track'] =  $user_tracks[0];
        }
        
        // User  
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $user = $this -> user -> advanced_search_row($condition);
        $data['user']   = $user;
        
        //User Country 
        $condition[WHERE_CONDITION] = array('country_no' => $user -> country_no);
        $data['country'] = $this -> country -> advanced_search_row($condition);
        
        // User Level , Pomotion Point  
        $condition[WHERE_CONDITION] = array('substr(player_name,5)' => $user -> user_id);
        $total_comp = $this -> game_play -> sum('acc_comp_point','total_comp_point',$condition);
        $data['total_comp_point'] = !empty($total_comp -> total_comp_point) ? $total_comp -> total_comp_point : 0;
        
        $user_levels_info  = $this -> user_level -> get_user_level_by_comp($data['total_comp_point']); 
        $data['cur_user_level']  = $user_levels_info[0];
        $data['next_user_level'] = $user_levels_info[1];
        $data['promotion_needed_level_point'] =  
            !empty($user_levels_info[1]) ? 
                $user_levels_info[1] -> promotion_level_point: '';
        
        //Last Login 
        $condition[WHERE_CONDITION] = array(
            'user_no' => $user -> user_no,
            'action_function' => 'login',
            'request_method'  => 2
        );
        $condition[ORDER_BY_CONDITION] = 'reg_date DESC';
        $results = $this -> user_action_log -> advanced_search_result($condition);
        $user_action_log = NULL;
        if (count($results)> 0){
            $user_action_log = $results[0];
        }
        $data['last_login_log'] = $user_action_log;
        
        // Join Info 
        $condition[WHERE_CONDITION] = array(
            'user_no' => $user -> user_no,
            'action_function' => 'join',
            'request_method'  => 2
        );
        $condition[ORDER_BY_CONDITION] = 'reg_date DESC';
        $results = $this -> user_action_log -> advanced_search_result($condition);
        $data['join_log']  = '';
        if (count($results)> 0){
            $data['join_log']  = $results[0];
        }
        
        //Wallet
        unset($condition); 
        $condition[WHERE_CONDITION] = array('user_no' => $user -> user_no);        
        $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
        
        $condition[WHERE_CONDITION] = array('user_level_no' => $user-> user_level_no);
        $data['user_level'] = $this -> user_level -> advanced_search_row($condition);
        
        $condition[WHERE_CONDITION] = array('user_no' =>  $user_no);
        $data['accumulate_comp_point'] = $this -> comp_point_record-> sum('acc_comp_point', 'comp_point', $condition);
        
        $next_user_level_no = (int)$data['user_level'] -> user_level_no + 1;
        
        unset($condition);
        
        $condition[WHERE_CONDITION] = array('user_level_no' => $next_user_level_no);
        $next_user_level = $this -> user_level ->  advanced_search_row($condition);
        $next_level_point = (int)$next_user_level -> promotion_level_point;
        
        $current_up_per = (int)$data['accumulate_comp_point'] -> comp_point  / $next_level_point * 100;
        $data['current_up_per'] = $current_up_per;
        $data['cur_tab'] = $this -> input -> get('cur_tab') ? $this -> input -> get('cur_tab') : "overview"; 
        
        $attrs = array(
              'width'      => '800',
              'height'     => '600',
              'scrollbars' => 'yes',
              'status'     => 'yes',
              'resizable'  => 'yes',
              'screenx'    => '0',
              'screeny'    => '0'
            );
        $data['pop_up_attrs'] = $attrs;
        
        //각 게임사 게임 플레이 조회를 위한 URL 획득
        unset($condition);
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $mg_user = $this -> mg_game_user -> advanced_search_row($condition);
        $pt_user = $this -> pt_game_user -> advanced_search_row($condition);
        
        //MicronGame URL 획득
        $this -> load -> library('microgame');
        $params = $this -> microgame -> set_params(
            array(
                'loginName' => 'MMCashier181029', 
                'pinCode' => 'ce6d8b'
            )
        );
        
        $mg_play_check_url = "";
        $pt_play_check_url = "";
        
        $result = $this ->  microgame -> invoke('IsAuthenticate', $params);
        if ($result -> IsAuthenticateResult -> ErrorCode == 0){
            $params = $this -> microgame -> set_params(
                array(
                    'accountNumber' => $mg_user -> account_number,
                    'password' => $mg_user -> pin_code,
                    'playCheckType' => "Station",
                    'language' =>"ko"
                )
            ); 
            $result = $this -> microgame -> invoke('GetPlaycheckUrl', $params);
            $mg_play_check_url = $result -> GetPlaycheckUrlResult;
            log_message('error',"MG_play_check_url");        
            log_message('error',$mg_play_check_url);        
        }
        
        //PlayTech  URL 획득(관련 PT API 조사중))
        $data['mg_play_check_url'] = $mg_play_check_url;
        $data['pt_play_check_url'] = $pt_play_check_url;
        $this -> load -> view('admin/member/member_view',$data);
        
    }

   public function member_modify(){
       $this->load->helper('array');
       $this -> load -> helper('baofa');
       $this -> load -> helper('location');
       $this -> load -> model('admin/user');
       $this -> load -> model('admin/user_notice');
    
       
       if ($this -> input -> method(TRUE) == "POST") {
           $user_no = $this -> input -> post('user_no');     
           
           if ($this -> input -> post('modify_target') == 'overview'){
               $permitted_params = array(
                   'user_name','user_phone','user_password','user_email','im_type','im_id','user_gender','user_status');
               $update_arr = array_filter(elements($permitted_params , $this -> input-> post()),'getVailidValueArray');
               
               if ($update_arr['user_password']){
                    $update_arr = md5($update_arr['user_password']);   
               }
               
               $condition[WHERE_CONDITION] = array('user_no' => $user_no);
               $this -> user -> update($update_arr, $condition);
               
               if ($this -> input -> post('user_notice')){
                   if ($this -> input -> post('user_notice_content')){
                       $notice_arr = array('user_notice_content' => $this -> input -> post('user_notice_content'));
                       $condition[WHERE_CONDITION] = array('user_notice_no' => $this -> input -> post('user_notice'));
                       $this -> user_notice -> update($notice_arr, $condition);
                   }
               }else {
                   if ($this -> input -> post('user_notice_content')){
                       $notice_arr = array(
                            'user_no' => $user_no,
                            'user_notice_content' => $this -> input -> post('user_notice_content'),
                            'reg_date' => time()
                       );
                       $this -> user_notice -> insert($notice_arr);
                   }
               }
           }else if ($this -> input -> post('modify_target') == 'affiliate'){
               $this -> load -> model ('admin/country');
               $country_no = 0;
               if($this -> input -> post('phone_code', TRUE)){
                   $condition[WHERE_CONDITION] = array('phone_code', $this -> input -> post('phone_code', TRUE));
                   $country = $this -> country -> advanced_search_row($condition);
                   $country_no = $country -> country_no;
               }
               $permitted_params = array(
                   'user_email','city','user_phone','im_type','im_id','affiliate_des'
               );
               
               $update_arr = array_filter(elements($permitted_params , $this -> input-> post(NULL, TRUE)),'getVailidValueArray');
               $update_arr['country_no'] = $country_no;
               
               $condition[WHERE_CONDITION] = array('user_no' => $user_no);
               $this -> user -> update($update_arr, $condition);
           }
           
           alert('Successfully modified');
           locationReload('parent');
       } else {
           echo "Wrong Access"; 
       }
   }
   
   public function member_tab_view($user_no, $tab){
       
       $this -> load -> helper('location');
       $this -> load -> helper('time');
       $this -> load -> helper('string');
       $this -> load -> helper('url');
       $this -> load -> library('playtech'); 
       //ini_set('memory_limit','-1');
       $data = array();
       if ($this -> input -> is_ajax_request()){
           if ($tab =="overview"){
               $this -> load -> model('admin/wallet');
               $this -> load -> model('admin/user');
               $this -> load -> model('admin/user_notice');
               $this -> load -> model('admin/mg_game_user');
               $this -> load -> model('admin/pt_game_user');
               
               $condition[WHERE_CONDITION] = array('user_no' => $user_no);
               $user = $this -> user -> advanced_search_row($condition);
               $data['user']   = $user;
               $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
               
               $condition[WHERE_CONDITION] = array('user_no' => $user-> user_no);
               $data['user_notice'] = $this -> user_notice -> advanced_search_row($condition);
               
               $condition[WHERE_CONDITION] = array('user_no' => $user_no);
               
               if ($user -> mg_game_status == "Y" ){
                  $data['mg_game_user'] = $this -> mg_game_user -> advanced_search_row($condition); 
               }

               if ($user -> pt_game_status == "Y" ){
                    $data['pt_game_user'] = $this -> pt_game_user -> advanced_search_row($condition); 
               }
               
               //플레이텍 로그아웃 
               //$this -> playtech -> logout($user -> pt_id);
              
           }
           
           if ($tab =="account"){
               $this -> load -> model ('admin/bank_account');
               $this -> load -> model ('admin/deposit');
               $this -> load -> model ('admin/withdraw');
               $this -> load -> model ('admin/game_money_transfer');
               $this -> load -> model ('admin/comp_point_convert', 'CPT');
               
               $condition[WHERE_CONDITION] = array('user_no' => (int)$user_no);
               $data['bank_accounts'] = $this -> bank_account -> advanced_search_result($condition);
               
               //$condition[LIMIT_CONDITION][LIMIT] = 10;
               //$condition[LIMIT_CONDITION][OFFSET] = 0;
               
               $comps = $this -> CPT -> advanced_search_result($condition);
               $money_transfers = $this -> game_money_transfer -> advanced_search_result($condition);
               
               $condition[WHERE_CONDITION] = array(
                            'user_no' => (int)$user_no, 
                            'deposit_status' => DEPOSIT_STATUS_CONFIRMED);
               $deposits = $this -> deposit -> advanced_search_result($condition);
               
               $condition[WHERE_CONDITION] = array(
                    'user_no' => (int)$user_no,
                    'withdraw_status' => WITHDRAW_STATUS_CONFIRMED);
               $withdraws = $this -> withdraw -> advanced_search_result($condition);
               
               unset($condition[WHERE_CONDITION]);
               $datas = array();
               foreach($deposits as $deposit){
                   $tmp = array();
                   $tmp['reg_date'] = $deposit-> reg_date;
                   $tmp['type'] = 'Deposit';
                   $tmp['des']  = 'Wallet';
                   $tmp['deposit'] = number_format($deposit-> deposit_amount,2);
                   $tmp['withdraw'] = '';
                   $tmp['transfer'] = '';
                   $datas[] = $tmp;
                   unset($tmp);
               }
               
               foreach($withdraws as $withdraw){
                   $tmp = array();
                   $tmp['reg_date'] = $withdraw-> reg_date;
                   $tmp['type'] = 'Withdraw';
                   $tmp['des']  = $withdraw -> withdraw_method == "1" ? 'Wallet' : "Wire Transfer";
                   $tmp['deposit'] = '';
                   $tmp['withdraw'] = number_format($withdraw-> withdraw_amount,2);
                   $tmp['transfer'] = '';
                   $datas[] = $tmp;
                   unset($tmp);
               }
               
               foreach($comps as $comp){
                   $tmp = array();
                   $tmp['reg_date'] = $comp -> reg_date;
                   $tmp['type'] = 'Comp';
                   $tmp['des']  = 'Comp to Wallet';
                   $tmp['deposit'] = '';
                   $tmp['withdraw'] = '';
                   $tmp['transfer'] = number_format($comp-> convert_comp_point,2);
                   $datas[] = $tmp;
                   unset($tmp);
               }
               
               foreach($money_transfers as $transfer){
                   $tmp = array();
                   $tmp['reg_date'] = $transfer-> reg_date;
                   $tmp['type'] = 'Transfer';
                  
				   
                   
                   switch($transfer -> money_transfer_type){
                       case MONEY_TRANSFER_TYPE_MG_TO_WALLET:
                           $tmp['des'] = 'MG to Wallet';
                       	   break; 
                  
				       case MONEY_TRANSFER_TYPE_PT_TO_WALLET:
                           $tmp['des'] = 'PT to Wallet';
                           break; 
                  
				       case MONEY_TRANSFER_TYPE_WALLET_TO_MG:
                           $tmp['des'] = 'Wallet to MG';
                           break; 
                  
				       case MONEY_TRANSFER_TYPE_WALLET_TO_PT:
                           $tmp['des'] = 'Wallet to PT';
                       	   break;
					   default:
                           $tmp['des'] = '-';
						    
                   }
                   $tmp['withdraw'] = '';
                   $tmp['deposit'] =  '';
                   $tmp['transfer'] = number_format($transfer -> transfer_amount);
                   $datas[] = $tmp;
                   unset($tmp);
               }
           
               usort($datas, 'cmp');
               $data['datas'] = $datas; 
           }
            
           if ($tab =="affiliate"){
               global $supported_phone_codes2;
               $this -> load -> model('admin/user');
               $this -> load -> model('admin/country');
               
               $condition[WHERE_CONDITION] = array('user_no' => $user_no);
               $user = $this -> user -> advanced_search_row($condition);
               $data['user'] = $user;
               
               $ref_agent_no = $user -> affiliate_ref;
               $ref_agent = NULL;
               if ($ref_agent_no != 0){
                   $condition[WHERE_CONDITION] = array('user_no' => $ref_agent_no);
                   $ref_agent = $this -> user -> advanced_search_row($condition);
               }
               $data['country_phone_codes']  =$supported_phone_codes2;
               $data['upper_agent']  = $ref_agent ;
               
               $condition[WHERE_CONDITION] = array('country_no' => $user -> country_no);
               $data['country'] = $this -> country -> advanced_search_row($condition);
               
               //$data['countries'] = $this -> country -> advanced_search_result();
           }
             
           if ($tab =="affiliate_payment"){
               $this -> load -> model('admin/bank_account');
               $this -> load -> model('admin/agent_settlement');
               $this -> load -> model('admin/user');
               
               $condition[WHERE_CONDITION] = array('user_no' => (int)$user_no);
               $data['bank_accounts'] = $this -> bank_account -> advanced_search_result($condition);
               $data['user'] = $this -> user -> advanced_search_result($condition);

               $condition[WHERE_CONDITION] = array('agent_no' => (int)$user_no);
               $condition[ORDER_BY_CONDITION] ="reg_date DESC";
               $data['settlements'] = $this -> agent_settlement -> advanced_search_result($condition);
           }

           $data['member_tab'] = $tab;
           $this -> load -> view('admin/member/member_view_tab',$data);
       }
       else {
           echo "잘못된 요청입니다";
       }
   }

    public function coupon() {
       if ($this -> input -> method(TRUE) == "POST") {
            if ($this -> input -> post('act_mode') == 'create'){

                $this -> load -> model('admin/user');
                $this -> load -> model('admin/coupon');
                $this -> load -> model('admin/user_level');
                $this -> load -> model('admin/game_play');
                $this -> load -> helper('location');
                                
                $user_id = $this ->input -> post ('user_id');                
                $coupon_point = (int)$this ->input -> post ('coupon_point');                
                $coupont_type = (int)$this ->input -> post ('coupon_type');   
                
                $conditions[WHERE_CONDITION] = array('user_id' => $user_id);     
                $user = $this -> user -> advanced_search_row($conditions);
                
                if (!$user){
                    alert('해당 사용자가 없습니다');
                    exit;
                }
                
                // 회원 아이디는 가입시 자동으로 대문자로 변환되기 때문에 , 전송된 유저 아이디를 대문자로 변환한 후 검사 
                if ($user -> user_id != strtoupper($user_id)){
                    alert('잘못된 요청입니다');
                    exit;
                }
                //쿠폰을 제공할 회원의 레벨 qeury 
                $user_levels = $this -> user_level -> get_user_level_by_comp($this -> game_play -> get_comp_point($user -> user_id));              
                $user_level = $user_levels[0];
                $insert_coupon_data['user_no'] = $user-> user_no;
                $insert_coupon_data['apply_level'] = $user_level -> user_level_no;
                $insert_coupon_data['coupon_point'] = $coupon_point;
                $insert_coupon_data['coupon_type_no'] =  $coupont_type; 
                $insert_coupon_data['reg_date'] = time();
                $insert_coupon_data['publisher'] = $this -> session -> userdata[ADMIN_SESSION][ID].
                                                    '-'.
                                                   $this -> session -> userdata[ADMIN_SESSION][NAME];
                $this -> coupon -> insert($insert_coupon_data);
                locationReload('parent');
                exit;
            }else {
                exit;
            }
       }else {
          $this -> load -> library('paging');
          $this -> load -> model('admin/coupon_type');
          $this -> load -> model('admin/coupon');
          $this -> load -> helper('time');
          
          $conditions[WHERE_CONDITION] = array('is_discretion' => COUPON_CAN_DISCRETION);
          $conditions[ORDER_BY_CONDITION] = "coupon_type_no ASC";
          $data['coupon_types'] = $this -> coupon_type -> advanced_search_result($conditions);
          
          unset($conditions);
          $data['search_keyword'] ='';
          $data['user_level'] ='';
          $data['daterange'] ='';
          $data['order'] ='';
          $data['coupon_type'] ='';
          $data['coupon_use_status'] ='';
          $data['start_date'] ='';
          $data['end_date'] ='';
          
          $where_condition = array();
          $like_condition  = array();
          $date_condition  = array();
          $join_condition  = array();      
          $total_conditions = array();   
          
          /*
          |---------------------------------------------------------------------------------------------------------    
          | select qquery 구성 
          |---------------------------------------------------------------------------------------------------------    
          */
          $total_conditions[SELECT_CONDITION] = 
             'user.user_no as  user_no,
              user.user_id as user_id, 
              user.user_status as user_status,
              user.login_status as login_status,
              user.user_name as user_name,
              user_level.user_level_no as user_level_no,
              user_level.user_level_code_name as user_level_code_name,
              
              coupon_type.coupon_type_no as coupon_type_no,
              coupon_type.coupon_type_name as coupon_type_name,
              coupon_type.publisher as coupon_type_publisher,
              
              coupon.coupon_no as coupon_no,
              coupon.coupon_point as coupon_point,
              coupon.coupon_use_status,
              coupon.publisher as publisher, 
              coupon.use_date as use_date,
              coupon.reg_date as reg_date';
                                                 
         $join_condition[] = array(
              JOIN_CONDITION_TABLE => 'user', 
              JOIN_CONDITION_STATE => 'user.user_no = coupon.user_no', 
              JOIN_CONDITION_DIRECT => "inner"
              );

         $join_condition[] = array(
             JOIN_CONDITION_TABLE => 'user_level', 
             JOIN_CONDITION_STATE => 'user.user_level_no = user_level.user_level_no', 
             JOIN_CONDITION_DIRECT => "inner"
             );       
                                      
         $join_condition[] = array(
             JOIN_CONDITION_TABLE => 'coupon_type', 
             JOIN_CONDITION_STATE => 'coupon_type.coupon_type_no = coupon.coupon_type_no', 
             JOIN_CONDITION_DIRECT => "inner"
             );                             
                                          
         $total_conditions[JOIN_CONDITION] = $join_condition;   
             
         if ($this -> input -> get('search_keyword')) {
                $data['search_keyword'] = $this -> input -> get('search_keyword');
                //$like_condition['user_name'] = $this -> input -> get('search_keyword');
                $like_condition['user_id'] = $this -> input -> get('search_keyword');
                //$like_condition['user_email'] = $this -> input -> get('search_keyword');
                $total_conditions[LIKE_CONDITION] = $like_condition;
            }
            
            if ($this -> input -> get('coupon_type')) {
                $data['coupon_type'] = (int)$this -> input -> get('coupon_type');
                $where_condition['coupon_type.coupon_type_no'] = (int)$this -> input -> get('coupon_type');
            }

            if ($this -> input -> get('user_level')) {
                $data['user_level'] = (int)$this -> input -> get('user_level');
                $where_condition['user.user_level_no'] = (int)$this -> input -> get('user_level');
            }

            if ($this -> input -> get('coupon_use_status')) {
                $data['coupon_use_status'] = $this -> input -> get('coupon_use_status');
                $where_condition['coupon.coupon_use_status'] = $this -> input -> get('coupon_use_status');
            }

            $total_conditions[WHERE_CONDITION] = $where_condition;

            if ($this -> input -> get('daterange')) {
                $data['daterange'] = $this -> input -> get('daterange');
                $date_arr = explode('-', $this -> input -> get('daterange'));
                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($date_arr[0]);
                $date_condition[END_TIME] = trim($date_arr[1]);
                
                $data['start_date'] = $date_condition[START_TIME];
                $data['end_date'] = $date_condition[START_TIME];

                $total_conditions[DATE_CONDITION] = $date_condition;
            }
            $total_conditions[ORDER_BY_CONDITION] = 'coupon.reg_date DESC';

            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            $data['coupon_count'] = $this -> coupon  -> advanced_count_all_result();
           
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT =  $data['coupon_count'];
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage );
            
            $total_condition[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $total_condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['paging'] = $this -> paging;
            
          //검색조건에 해당하는 query 질의   
          $data['coupons'] =  $this -> coupon -> advanced_search_result($total_conditions);
          
          // 발급됨 쿠폰 포인트 총계 
          $total_conditions[SELECT_CONDITION] = 'sum(coupon_point) as total_coupon_point';
          $data['coupon_total'] = $this -> coupon -> advanced_search_row($total_conditions);
          
          /*
          |---------------------------------------------------------------------------------------------------------    
          | 쿠폰 타입별 통계를 위한 group 절 추가 
          |---------------------------------------------------------------------------------------------------------    
          */
          unset($total_conditions);
           
          $sum_conditions[SELECT_CONDITION] = 
              "coupon_type.coupon_type_no as coupon_type_no,
               coupon_type.coupon_type_name as coupon_type_name,
               sum(coupon_point) as coupon_point_sum
              ";
          
          $sum_join_condition[] = array(
             JOIN_CONDITION_TABLE => 'coupon_type', 
             JOIN_CONDITION_STATE => 'coupon_type.coupon_type_no = coupon.coupon_type_no', 
             JOIN_CONDITION_DIRECT => 'right outer'
          );
                                      
          $sum_conditions[JOIN_CONDITION] = $sum_join_condition;                                        
          $sum_conditions[GROUP_BY_CONDITION] = array('coupon_type.coupon_type_no','coupon_type.coupon_type_name');
          
          // 쿠폰 타입별 총계 
          $data['coupon_types_sum'] = $this -> coupon -> advanced_search_result($sum_conditions);
          $this -> load -> view('admin/member/coupon',$data); 
          
       }
    }

    public function member_lock() {
        if ($_POST) {

        } else {
            $this -> load -> view('admin/member/member_lock');
        }
    }

    public function form() {
        $request_form = $this -> input -> get('request_form');
        $request_type = $this -> input -> get('request_type');
        $request_no   = $this -> input -> get('request_no');
       
        $data = array();
        if ($request_form == 'coupon'){
            if ($request_type =="create"){
                if ($request_no){
                    $this -> load -> model('admin/user');
                    $condition[WHERE_CONDITION] = array('user_no' => $request_no);
                    $data['request_no'] = $request_no;
                    $data['user'] = $this -> user -> advanced_search_row($condition);    
                }
                
                $this -> load -> model('admin/coupon_type');
                $conditions[WHERE_CONDITION] = array('is_discretion' => COUPON_CAN_DISCRETION);
                $conditions[ORDER_BY_CONDITION] = "coupon_type_no ASC";
                $data['coupon_types'] = $this -> coupon_type -> advanced_search_result($conditions);
                $data['act_mode'] = $request_type;
            }
        }
        
        if ($request_form == "member"){
            //$this -> load -> model("admin/country");
            $this -> load -> model("admin/language");
            $data['languages'] = $this -> language -> advanced_search_result();
            //$data['countries'] = $this -> country -> advanced_search_result();
            $data['act_mode'] = $request_type;
        }
        $this -> load -> view("admin/member/form/{$request_form}_form", $data);
    }


}
