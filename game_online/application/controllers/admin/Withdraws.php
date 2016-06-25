<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraws extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this -> withdraw_list();
    }

    public function withdraw_list() {
        if ($this -> input -> method(TRUE) == "POST") {
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/wallet');
            $this -> load -> model('admin/withdraw');
            $this -> load -> helper('location');
            
            $act_mode = $this -> input -> post('act_mode');
            if ($act_mode == "withdraw_create"){
                $user_id = $this-> input-> post('user_id');
                $req_withdraw_amount = (int)$this-> input-> post('withdraw_amount');
                $bank_account_no = (int)$this-> input-> post('bank_account_no');
                
                $condition[WHERE_CONDITION] = array('user_id'=> $user_id);
                $user = $this -> user -> advanced_search_row($condition);
            
                if (!$user){
                    alert("The user is not member of Baofa Membership");
                    exit;
                }
                
                $condition[WHERE_CONDITION] = array('user_no' => $user-> user_no);
                $wallet = $this -> wallet -> advanced_search_row($condition);
                
                if (!$wallet){
                    alert('system error. it may be test environmnent');
                    exit;
                }
           
                //출금 가능 금액을 계산
                $available_withdraw = $wallet-> wallet_balance;
                
                if ($req_withdraw_amount > $available_withdraw ) {
                    $ret_str = "{$user_id}님의 현재 출금 가능 금액은 {$available_withdraw} 입니다";
                    alert($ret_str);
                    exit;
                     
                } else {
                    /*
                     * 출금이 가능할 경후 withdraw 테이블 등록
                     */
                    $withdraw_insert_data['user_no']         = $user -> user_no;
                    $withdraw_insert_data['bank_account_no'] = $bank_account_no;
                    $withdraw_insert_data['withdraw_amount'] = $req_withdraw_amount;
                    $withdraw_insert_data['reg_date']        = time();
                    
                    $this -> withdraw -> insert($withdraw_insert_data);
                    
                    /*
                     * 출금금액을 Wallet balance에 차감
                     * Total withdraw amount , 및 average 적용 
                     */
                    $wallet_update_arr = array(
                        'wallet_balance' => $wallet -> wallet_balance - $withdraw_insert_data['withdraw_amount'], 
                        'total_withdraw_amount' => $wallet -> total_withdraw_amount +  $withdraw_insert_data['withdraw_amount'],
                        'average' => $wallet -> total_deposit_amount - ($wallet -> total_withdraw_amount +  $withdraw_insert_data['withdraw_amount'])
                    ); 
                    $condition[WHERE_CONDITION] = array('wallet_no' => $wallet -> wallet_no);
                    $this -> wallet -> update($wallet_update_arr,$condition);
                    locationReload('parent');
                    exit;
                }
            }

            if ($act_mode == "change_deposit_status"){
                
                /* 트랜잭션 시작 */ 
                $this->db->trans_start();
                
                $withdraw_no = (int)$this -> input -> post('withdraw_no');
                $change_status = $this -> input -> post('change_status');
                $cur_status = $this -> input -> post('cur_status');
          
                // 해당 출금 로우 구함         
                $condition[WHERE_CONDITION] = array('withdraw_no' => $withdraw_no);
                $withdraw = $this -> withdraw -> advanced_search_row($condition);
                //출금 로우로 부터 유저 번호 구함 
                $user_no = $withdraw -> user_no;
               
                //출금 상태 변경        
                $conditions[WHERE_CONDITION] = array(  'withdraw_no' => $withdraw_no);
                $update_data = array('withdraw_status' => $change_status);
                if ($change_status == WITHDRAW_STATUS_CONFIRMED){
                    $update_data['confirm_date'] = time();
                } 
                $this -> withdraw -> update($update_data,$conditions); 
                    
                //출금 상태가 취소인 경우 월렛의 관련 필드도 조정한다.         
                if ($change_status == WITHDRAW_STATUS_CANCLED || $change_status == WITHDRAW_STATUS_CANCLED_BY_ADMIN){
                    $sql = "
                        UPDATE 
                            wallet 
                        SET
                            wallet_balance = wallet_balance + ?,                 
                            total_withdraw_amount =  total_withdraw_amount - ?,
                            average =  average + ? 
                        WHERE 
                            user_no = ?         
                    ";
                    $query_binding = array(
                        $withdraw -> withdraw_amount,
                        $withdraw -> withdraw_amount,
                        $withdraw -> withdraw_amount,
                        $user_no
                    );
                    
                    $this -> wallet -> raw_binding($sql, $query_binding);                        
                }
                /* 트랜잭션 종료 */ 
                $this->db->trans_complete();
                                   
                locationReload('parent');  
            }
            
        } else {
            $this -> load -> helper('time');
            $this -> load -> model('admin/withdraw');
           
            $data['search_keyword'] = '';
            $data['user_level'] = '';
            $data['daterange'] = '';
            $data['withdraw_status'] = '';
            $data['daterange'] ='';
            
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
                'user.user_no as  user_no,
                 user.user_id as user_id, 
                 user.login_status as login_status,
                 user.user_name as user_name,
                 user.login_status,
                
                 user_level.user_level_no as user_level_no,
                 user_level.user_level_code_name as user_level_code_name,
                 user_level.deposit_bonus_rate as deposit_bonus_rate,
                
                 withdraw.withdraw_no as withdraw_no,
                 withdraw.withdraw_amount as withdraw_amount,
                 withdraw.confirm_date as withdraw_date,
                 withdraw.reg_date as reg_date,
                 withdraw.confirm_date as confirm_date,
                 withdraw.withdraw_status as withdraw_status,
                
                 bank_account.bank_account_no,
                 bank_account.bank_name,
                 bank_account.bank_account
                                                 ';
            $join_condition[] = 
                array(
                  JOIN_CONDITION_TABLE => 'user', 
                  JOIN_CONDITION_STATE => 'withdraw.user_no = user.user_no', 
                  JOIN_CONDITION_DIRECT => "inner"
                );
                
            $join_condition[] = array(
                 JOIN_CONDITION_TABLE => 'user_level', 
                 JOIN_CONDITION_STATE => 'user.user_level_no = user_level.user_level_no', 
                 JOIN_CONDITION_DIRECT => "inner"
            );
            
            $join_condition[] = array(
                 JOIN_CONDITION_TABLE => 'bank_account', 
                 JOIN_CONDITION_STATE => 'bank_account.bank_account_no = withdraw.bank_account_no', 
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
            
            if ($this -> input -> get('withdraw_status')) {
                $data['withdraw_status'] = (int)$this -> input -> get('withdraw_status');
                $where_condition['withdraw.withdraw_status'] = $this -> input -> get('withdraw_status');
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
            $total_conditions[ORDER_BY_CONDITION] = 'withdraw.reg_date DESC';
            
            //페이징 처리 
            $this -> load -> library('paging');
            $vpage = $this -> input -> get('vpage', TRUE) ? $this -> input -> get('vpage',TRUE) : 1;
            $data['withdraw_count'] = $this -> withdraw  -> advanced_count_all_result($total_conditions);
            
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT =  $data['withdraw_count'];
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage );
            
            $total_conditions[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $total_conditions[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['withdraws'] =  $this -> withdraw -> advanced_search_result($total_conditions);
            
            $data['paging'] = $this -> paging;
            
            //검색조건에 해당하는 query 질의   
            //withdraw 의 출금 총액 쿼리
            
            if ($this -> input -> get('daterange')){
                $data['search_date_string'] = 'Withdraw Total (' . $this -> input -> get('daterange').') ';
            }else {
                $today_start_time = date("Y").'/'.date("m").'/'.date("d").'/'.'00:'.'00:'.'00';
                $today_end_time   = date("Y").'/'.date("m").'/'.date("d").'/'.'23:'.'59:'.'59';
                $today_time_string = $today_end_time.' - '.$today_end_time;
                
                $data['search_date_string'] = "Totay Withdraw Total" ;
                
                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($today_start_time);
                $date_condition[END_TIME] = trim($today_end_time);
                
                $total_conditions[DATE_CONDITION] = $date_condition;
            } 
            $where_condition['withdraw_status'] = WITHDRAW_STATUS_CONFIRMED; 
            $total_conditions[WHERE_CONDITION] = $where_condition; 
            
            //log_message('error','출금 총액 계산');
            $total_conditions[SELECT_CONDITION] = "sum(withdraw_amount) as total_withdraw_amount";
            $data['withdraw_sum_result'] = $this -> withdraw -> advanced_search_row($total_conditions); 
            $this -> load -> view('admin/withdraw/withdraw_list',$data);
        }
    }

    public function form() {
        $this -> load -> helper('location');
        $request_form = $this -> input -> get('request_form');
        $request_type = $this -> input -> get('request_type');

        if ($request_form == 'deposit') {
            if ($request_type == "create") {
            }
        }
        $this -> load -> view("admin/withdraw/form/{$request_form}_form");
    }

}
