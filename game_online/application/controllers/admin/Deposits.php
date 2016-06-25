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
            
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/user_level');
            $this -> load -> model('admin/deposit');
            $this -> load -> model('admin/wallet');
            $act_mode = $this -> input -> post('act_mode');
            
            // Deposit 생성 
            if ($act_mode == "deposit_create"){
                $user_id = $this-> input-> post('user_id');
                $deposit_amount = (int)$this -> input -> post('deposit_amount');
         
                $condition[WHERE_CONDITION] = array('user_id'=> $user_id);
                $user = $this -> user -> advanced_search_row($condition);
                if (!$user){
                    alert("The user is not member of Baofa Membership");
                    exit;
                }
                
                $condition[WHERE_CONDITION] = array('user_level_no' => $user-> user_level_no);
                $user_level = $this -> user_level -> advanced_search_row($condition);
                
                $deposit_bonuse_rate = $user_level -> deposit_bonus_rate;
                $deposit_bonus = $deposit_amount * ( $deposit_bonuse_rate  / 100);
                
                $insert_data = array(
                    'user_no' => $user-> user_no,
                    'deposit_amount' => $deposit_amount,
                    'deposit_bonus' => $deposit_bonus,
                    'deposit_total_amount' => ($deposit_amount + $deposit_bonus),
                    'reg_date' => time()
                );
                $this -> deposit -> insert($insert_data);
                locationReload('parent');
                exit;
                
            }else if($act_mode == 'change_deposit_status') {
                /* 트랜잭션 시작 */ 
                $this -> db -> trans_start();
                $deposit_no     = (int)$this -> input -> post('deposit_no', TRUE);
                $change_status  = $this -> input -> post('change_status', TRUE);
                $cur_status     = $this -> input -> post('cur_status', TRUE);
                
                $condition[WHERE_CONDITION] = array('deposit_no' => $deposit_no);
                $deposit = $this -> deposit -> advanced_search_row($condition);
                
                $user_no = $deposit -> user_no;
                $condition[WHERE_CONDITION] = array('user_no' => $user_no);
                $user  = $this -> user -> advanced_search_row($condition);
                
                $update_data = array('deposit_status' => $change_status); 
                
                //처음 입금일 경우 first Bonus 
                //처음 입금이 아닐경우 레벨별 입급 보너스 적용 
                $deposit_bonus = 0; 
        
                if ($change_status == DEPOSIT_STATUS_CONFIRMED){
                    $this -> load -> model('admin/casino_basic_policy');
                    $casino_policy = $this -> casino_basic_policy -> advanced_search_row();
                   
                    if ($user -> first_deposit == FIRST_DEPOSIT_YES){
                        $first_deposit_bonus = $deposit -> deposit_amount * ( $casino_policy -> first_deposit_event / 100); 
                        $deposit_bonus  = $first_deposit_bonus;
                        
                        if ($deposit_bonus >  $casino_policy -> max_1st_deposit_bonus) {
                            $deposit_bonus =  $casino_policy -> max_1st_deposit_bonus;
                        }
                        $update_data['deposit_bonus'] = $deposit_bonus;
                    }else {
                        $this -> load -> model('admin/user_level');
                        $this -> load -> model('admin/game_play');
                        $user_levels = $this -> user_level -> get_user_level_by_comp(
                            $this -> game_play -> get_comp_point($user -> user_id)
                        );
                        $deposit_bonus_rate = $user_levels[0] -> deposit_bonus_rate;
                        $deposit_bonus = $deposit -> deposit_amount * ($deposit_bonus_rate / 100);
                        $update_data['deposit_bonus'] = $deposit_bonus;
                    }
                    $update_data['deposit_total_amount'] = $deposit  -> deposit_amount + $update_data['deposit_bonus'] ;
                    $update_data['confirm_date'] = time();
                }
                $condition[WHERE_CONDITION] = array('deposit_no' => $deposit -> deposit_no);
                $this -> deposit -> update($update_data,$condition); 
                
                /*
                 * 입금 상태의 변화가 관리자에 의한 출금 confirm  일 경우 
                 * 1.wallte 의 보유머니에서 입금 금액을 더한다.
                 * 2.wallet 의 total_deposit_amount 필드 에 입금 금액을 더한다. (누적 출금 함계) 를 갱신한다.
                 * 3.wallet 의 average 컬럼을 갱신한다( 총 입금 금액 - 총 출금금액);
                */
                
                if ($change_status == DEPOSIT_STATUS_CONFIRMED){
                    
                    $ondition[WHERE_CONDITION] = array('deposit_no' => $deposit_no);
                    $result = $this -> deposit -> advanced_search_row($ondition);
                    $change_deposit_amount = (int)$result-> deposit_amount;
                        
                    $query = 
                        "UPDATE 
                           wallet 
                         SET 
                           wallet_balance = wallet_balance + ? , 
                           total_deposit_amount = total_deposit_amount + ?, 
                           average = total_deposit_amount  -  total_withdraw_amount
                         WHERE 
                           user_no = ? "  ;
                    $query_binding_arr = array($change_deposit_amount,$change_deposit_amount,$result->user_no);
                    $this -> wallet -> raw_binding($query, $query_binding_arr); 
                    
                    if ($user -> first_deposit == FIRST_DEPOSIT_YES){
                       /*
                        * 첫입금일 경우 유저 테이블의 첫입금 플래그 변경
                        */   
                        $condition[WHERE_CONDITION] = array('user_no' => $user -> user_no);
                        $user_update_arr = array(
                            'first_deposit' => FIRST_DEPOSIT_NO
                        ); 
                        $this -> user -> update($user_update_arr, $condition);
                        
                        $deposit_update_arr = array('deposit_flag' => 0);
                        $this -> deposit -> update($deposit_update_arr); 
                    }   
                }
                /* 트랜잭션 종료 */ 
                $this->db->trans_complete();
                locationReload('parent');             
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
