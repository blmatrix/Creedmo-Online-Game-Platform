<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposits extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this -> deposit_list();
    }
    
    public function deposit_list() {
            
        if ($this -> input -> method(TRUE) == "POST") {
            $this -> load -> helper('location');
            $this -> load -> helper('url');
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/user_level');
            $this -> load -> model('admin/deposit');
            $this -> load -> model('admin/wallet');
            $act_mode = $this -> input -> post('act_mode');
            
            // Deposit 생성 
            if ($act_mode == "deposit_create"){
                $user_id = $this-> input-> post('user_id', TRUE);
                $deposit_amount = (int)$this -> input -> post('deposit_amount', TRUE);
                $transfer_to = $this -> input -> post('transfer_to', TRUE);
                
                $condition[WHERE_CONDITION] = array('user_id'=> $user_id);
                $user = $this -> user -> advanced_search_row($condition);
                if (!$user){
                    alert("{$usser_id} 님은 멤버가 아닙니다.\n확인하고 다시 시도해주세요");
                    exit;
                }
                
                $condition[WHERE_CONDITION] = array('user_level_no' => $user-> user_level_no);
                $user_level = $this -> user_level -> advanced_search_row($condition);
                
                $deposit_bonuse_rate = $user_level -> deposit_bonus_rate;
                $deposit_bonus = $deposit_amount * ( $deposit_bonuse_rate  / 100);
                
                $insert_data = array(
                    'user_no' => $user-> user_no,
                    'deposit_amount' => $deposit_amount,
                    'transfer_to' => $transfer_to,
                    'deposit_bonus' => $deposit_bonus,
                    'deposit_total_amount' => ($deposit_amount + $deposit_bonus),
                    'reg_date' => time()
                );
                $this -> deposit -> insert($insert_data);
                locationReload('parent');
                exit;
                
            }else if($act_mode == 'change_deposit_status'){
                /* 트랜잭션 시작 */ 
                $this -> db -> trans_start();
                $deposit_no     = (int)$this -> input -> post('deposit_no', TRUE);
                $change_status  = $this -> input -> post('change_status', TRUE);
                $cur_status     = $this -> input -> post('cur_status', TRUE);
                $transfer_to    = $this -> input -> post('transfer_to', TRUE);
				
                $condition[WHERE_CONDITION] = array('deposit_no' => $deposit_no);
                $deposit = $this -> deposit -> advanced_search_row($condition);
                
                $user_no = $deposit -> user_no;
                $user_condition[WHERE_CONDITION] = array('user_no' => $user_no);
                $user  = $this -> user -> advanced_search_row($user_condition);
        
                if ($change_status == DEPOSIT_STATUS_CONFIRMED){
                    $this -> load -> library('transfer_service');		
					$api_result = FALSE;
					$data = array(
						'user_no' => $user -> user_no,
                        'transfer_amount' => $deposit -> deposit_total_amount,
                        'transfer_from'  => 'WALLET',
                        'transfer_to' => ($transfer_to == VENDER_MG ? "MG":"PT"),
                        'mg_id' => $user -> mg_id,
                        'pt_id' => $user -> pt_id
					);
                   
					if ($transfer_to == VENDER_PT){
						$api_result  = $this -> transfer_service -> transfer_to_pt($data);	
					}else if ($transfer_to == VENDER_MG){
						$api_result  = $this -> transfer_service -> transfer_to_mg($data);
					}
					if (!$api_result){
						alert_only($this -> transfer_service -> get_message());
						exit;
					}
                    
                    $update_data = array(
                		'deposit_status' => $change_status,
                		'confirm_date' => time()
					);
					$this -> deposit-> update($update_data, $condition);
                    $this -> load -> model('admin/wallet');
                    $query = 
                       "UPDATE 
                          wallet 
                        SET 
                          total_deposit_amount = total_deposit_amount + ?, 
                          average = ( total_deposit_amount +  ? )  -  total_withdraw_amount
                        WHERE 
                          user_no = ? ";
                    $query_binding_arr = array($deposit -> deposit_amount,$deposit -> deposit_amount, $user -> user_no);
                    $this -> wallet -> raw_binding($query, $query_binding_arr); 
                    
                    if ($user -> first_deposit == FIRST_DEPOSIT_YES){
                        /*
                         * 첫입금일 경우 유저 테이블의 첫입금 플래그 변경
                         */   
                         $user_update_arr = array(
                             'first_deposit' => FIRST_DEPOSIT_NO
                         ); 
                         $this -> user -> update($user_update_arr, $user_condition);
                    }    
                    $this -> db -> trans_complete();
                    locationReload('parent');
                }else {
                	$update_data = array(
                		'deposit_status' => $change_status,
					);
                    $this -> deposit -> update($update_data,$condition); 
                    $this -> db -> trans_complete();
                    locationReload('parent');
                    exit;
                }   
            }
        } else {
            $this -> load -> helper('time');
            $this -> load -> model('admin/deposit');
            $data['search_keyword'] = '';
            $data['user_level'] = '';
            $data['daterange'] = '';
            $data['deposit_status'] = '';

            $where_condition = array();
            $like_condition = array();
            $date_condition = array();
            $join_condition = array();
            
            /*
            |---------------------------------------------------------------------------------------------------------    
            | select qquery 구성 
            |---------------------------------------------------------------------------------------------------------    
            */
            
            $total_conditions[SELECT_CONDITION] = 
                'user.user_no AS user_no,
                 user.user_id AS user_id, 
                 user.login_status AS login_status,
                 user.user_name AS user_name,
                 user.login_status,
                 
                 user_level.user_level_no AS user_level_no,
                 user_level.user_level_code_name AS user_level_code_name,
                 user_level.deposit_bonus_rate AS deposit_bonus_rate,
                 
                 deposit.deposit_no AS deposit_no,
                 deposit.deposit_amount AS deposit_amount,
                 deposit.deposit_bonus AS deposit_bonus,
                 deposit.transfer_to AS transfer_to,
                 deposit.confirm_date AS confirm_date,
                 deposit.reg_date AS reg_date,
                 deposit.deposit_status AS deposit_status
                                                 ';
            $join_condition[] = array(
                 JOIN_CONDITION_TABLE => 'user', 
                 JOIN_CONDITION_STATE => 'deposit.user_no = user.user_no', 
                 JOIN_CONDITION_DIRECT => "inner"
            );
            
            $join_condition[] = array(
                 JOIN_CONDITION_TABLE => 'user_level', 
                 JOIN_CONDITION_STATE => 'user.user_level_no = user_level.user_level_no', 
                 JOIN_CONDITION_DIRECT => "inner"
            );
            
            $total_conditions[JOIN_CONDITION] = $join_condition;   

            if ($this -> input -> get('search_keyword')) {
                $data['search_keyword'] = $this -> input -> get('search_keyword');
                $like_condition['user_id'] = $this -> input -> get('search_keyword');
                $total_conditions[LIKE_CONDITION] = $like_condition;
            }

            if ($this -> input -> get('user_level')) {
                $data['user_level'] = (int)$this -> input -> get('user_level');
                $where_condition['user.user_level_no'] = (int)$this -> input -> get('user_level');
            }
            
            if ($this -> input -> get('deposit_status')) {
                $data['deposit_status'] = (int)$this -> input -> get('deposit_status');
                $where_condition['deposit.deposit_status'] = $this -> input -> get('deposit_status');
            }
            
            $total_conditions[WHERE_CONDITION] = $where_condition;
            
            // 검색할 기간을 관리자가 선택한 경우 
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
            
            $total_conditions[ORDER_BY_CONDITION] = 'deposit.reg_date DESC';
            
            //페이징 처리 
            $this -> load -> library('paging');
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            $data['deposit_count'] = $this -> deposit  -> advanced_count_all_result($total_conditions);
           
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT =  $data['deposit_count'];
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage );
            
            $total_conditions[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $total_conditions[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['paging'] = $this -> paging;
            
            //검색조건에 해당하는 query 질의   
            $data['deposits'] =  $this -> deposit -> advanced_search_result($total_conditions);
            
            //deposit 의 실제 입금 총액과 보너스 총액, 및 합계 쿼리 
            if ($this -> input -> get('daterange')){
                $data['search_date_string'] = 'Deposit Total (' . $this -> input -> get('daterange').')';
            }else {
                $today_start_time = date("Y").'/'.date("m").'/'.date("d").'/'.'00:'.'00:'.'00';
                $today_end_time   = date("Y").'/'.date("m").'/'.date("d").'/'.'23:'.'59:'.'59';
                $today_time_string = $today_end_time.' - '.$today_end_time;
                
                $data['search_date_string'] = "Today deposit Total" ;
                
                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($today_start_time);
                $date_condition[END_TIME] = trim($today_end_time);
                
                $total_conditions[DATE_CONDITION] = $date_condition;
            } 
            
            $total_conditions[ORDER_BY_CONDITION] = NULL;
            $where_condition['deposit_status'] = DEPOSIT_STATUS_CONFIRMED; 
            $total_conditions[WHERE_CONDITION] = $where_condition; 
            
            $total_conditions[SELECT_CONDITION] = 
                "SUM(deposit_amount) AS total_deposit_real_amount,
                 SUM(deposit_bonus) AS total_deposit_bonus_amount
                ";
            $data['deposit_sum_result'] = $this -> deposit -> advanced_search_row($total_conditions);
            $this -> load -> view('admin/deposit/deposit_list',$data);
        }
    }

    public function form() {
        $this -> load -> helper('location');
        $request_form = $this -> input -> get('request_form');
        $request_type = $this -> input -> get('request_type');
        
        if ($request_form == 'deposit'){
            if ($request_type =="create"){
            }
        }
        $this -> load -> view("admin/deposit/form/{$request_form}_form");
    }

}
