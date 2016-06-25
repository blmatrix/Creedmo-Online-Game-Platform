<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class affiliate extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function agents() {
        if ($this -> input -> method(TRUE) == "POST") {
            
        } else {
            $this -> load -> helper("time");
            $this -> load -> helper('baofa');
            $this -> load -> helper('location');
            
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/affiliate_agent');
            $this -> load -> model('admin/deposit');
            $this -> load -> model('admin/game_play');
            $this -> load -> model('admin/deps1_commission_policy', 'D1C');  // 1deps 커미션 policy 
            $this -> load -> model('admin/deps2_commission_policy', 'D2C');  // 2deps 커미션 policy 
            $this -> load -> library('affiliate_service');
            
            $total_conditions = array();
            $where_condition = array();
            $like_condition  = array();
            $date_condition  = array();
            $join_condition  = array();
            
            if ($this -> input -> get('search_keyword')){
                $data['search_keyword'] = $this -> input -> get('search_keyword');
                $like_condition['user_id'] = trim($this -> input -> get('search_keyword'));
                $total_conditions[LIKE_CONDITION] = $like_condition;
            }
            
            if ($this -> input -> get('daterange')){
                $date_arr = explode('-', $this -> input -> get('daterange'));
                $data['search_date_string'] = "SUMMARY";
                $data['search_date_start'] = trim($date_arr[0]);
                $data['search_date_end'] = trim($date_arr[1]);
                
            }else {
                $d = mktime(0,0,0, date("m"), 1, date("Y"));
                $month_start = date("Y/m/d 00:00:00",$d);
                $month_end =  date('Y/m/d h:i:s', time());

                $data['search_date_string'] = "SUMMARY";
                $data['search_date_start'] = $month_start;
                $data['search_date_end'] = $month_end;
            }

            $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
            $date_condition[START_TIME] =  $data['search_date_start'];
            $date_condition[END_TIME] = $data['search_date_end'];
            $total_conditions[DATE_CONDITION] = $date_condition;            
            
            //지정한 조건에 따른 affiliate 정산 목록을 작성한다.
            $ret_message ='';
            $data['agent_settle'] = $this -> affiliate_service-> generate_agent_commission_record($total_conditions,$ret_message);     
            //log_message('error',"agent_settle ----------------------------------------------------->");
            //log_message('error',print_r($data['agent_settle'] , TRUE));      
            
            //$this -> load -> view('admin/affiliate/agents_origin');
            $data['daterange']      = $data['search_date_start'] .' - '.$data['search_date_end']; 
            $this -> load -> view('admin/affiliate/agents', $data);
        }
    }

    public function agent_detail($user_no) {
        if ($this -> input -> method(TRUE) == "POST") {
        } else {
            $this -> load -> model('admin/user');
            $this -> load -> library('affiliate_service');
            $total_conditions = array();
            $where_condition = array();
            $like_condition  = array();
            $date_condition  = array();
            
            $total_conditions[WHERE_CONDITION] = array('user_no' => $user_no);
            //log_message('error', "agent_detail ================> " . $user_no);
            $user = $this -> user -> advanced_search_row($total_conditions);
            $data['user'] = $user;
            
            $like_condition['user_id'] = trim($user-> user_id);
            $total_conditions[LIKE_CONDITION] = $like_condition;
                
            if ($this -> input -> get('daterange')){
                $date_arr = explode('-', $this -> input -> get('daterange'));
                $data['search_date_string'] = "SUMMARY";
                $data['search_date_start'] = trim($date_arr[0]);
                $data['search_date_end'] = trim($date_arr[1]);
                
            }else {
                $d = mktime(0,0,0, date("m"), 1, date("Y"));
                $month_start = date("Y/m/d 00:00:00",$d);
                $month_end =  date('Y/m/d h:i:s', time());

                $data['search_date_string'] = "SUMMARY";
                $data['search_date_start'] = $month_start;
                $data['search_date_end'] = $month_end;
            }
            
            $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
            $date_condition[START_TIME] =  $data['search_date_start'];
            $date_condition[END_TIME] = $data['search_date_end'];
            $total_conditions[DATE_CONDITION] = $date_condition;   
            
            $data['daterange'] = $this -> input -> get('daterange');
            if (!$data['daterange']){
            	$data['daterange'] = '';
            }
            $data['act_mode'] = $this -> input -> get('act_mode');
            if (!$data['act_mode']){
            	$data['act_mode'] = '';
            }
            $data['agent_settle'] = $this -> affiliate_service-> generate_agent_commission_record($total_conditions);
            
            //log_message('error',"agent_settle ----------------------------------------------------->");
            //log_message('error',print_r($data['agent_settle'] , TRUE));
            $this -> load -> view('admin/affiliate/agent_detail', $data);
        }
    }
    
    public function settle_account() {
        if ($this -> input -> method(TRUE) == "POST") {
            $this -> load -> model('admin/agent_settlement');
            $this -> load -> helper('location');
            
            $act_mode = $this -> input -> post('act_mode');
            $this->db->trans_start();
            
            $agent_settlement_no = (int)$this -> input -> post('agent_settlement_no');
            $change_status = $this -> input -> post('change_status');
            $cur_status = $this -> input -> post('cur_status');
            $conditions[WHERE_CONDITION] = array('agent_settlement_no' => $agent_settlement_no);
          
            $update_data = array('settlement_status' => $change_status); 
            if ($change_status == DEPOSIT_STATUS_CONFIRMED){
                $update_data['confirm_date'] = time();
            } 
            $this -> agent_settlement -> update($update_data,$conditions); 
            $this->db->trans_complete();
            
            locationReload('parent');     
            
        } else {
            $this -> load -> model('admin/agent_settlement');
            $this -> load -> helper('time');
            $this -> load -> library('paging');
            
            $data['search_keyword'] = $this -> input -> get('search_keyword');
            if (!$data['search_keyword'] ){
            	$data['search_keyword']  = '';
            }
            
            $data['daterange'] = $this -> input -> get('daterange');
            if (!$data['daterange'] ){
            	$data['daterange']  = '';
            }
            $data['search_date_start'] = '';
            $data['search_date_end'] = '';
            
            $where_condition = array();
            $like_condition  = array();
            $date_condition  = array();
            $join_condition  = array();
            $total_conditions = array();
            
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1; 
            $total_conditions[SELECT_CONDITION] = "
                user.user_id as user_id,
                user.login_status as login_status,
                user.user_id as affiliate_code,
                user.user_name as user_name,
                agent_settlement.*
            ";
            
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'user',
                JOIN_CONDITION_STATE => 'agent_settlement.agent_no = user.user_no',
                JOIN_CONDITION_DIRECT => 'inner',
            );
            $total_conditions[JOIN_CONDITION] = $join_condition;
            
            if ($data['search_keyword']) {
                $like_condition['user_id'] = $data['search_keyword'];
                $total_conditions[LIKE_CONDITION] = $like_condition;
            }
            
            if ($data['daterange']) {
                $date_arr = explode('-', $this -> input -> get('daterange'));
                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($date_arr[0]);
                $date_condition[END_TIME] = trim($date_arr[1]);
                $total_conditions[DATE_CONDITION] = $date_condition;
            }
            
            $data['agent_settlements_count'] = $this -> agent_settlement -> advanced_count_all_result($total_conditions);
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $data['agent_settlements_count'];
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage);
            
            $total_conditions[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $total_conditions[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            
            $data['paging'] = $this -> paging;
            $data['agent_settlements'] = $this -> agent_settlement -> advanced_search_result($total_conditions);
            
            //해당 기간동한 출금 완료된 금액의 총합 
            $total_conditions[WHERE_CONDITION] = array(
                'settlement_status' => WITHDRAW_STATUS_CONFIRMED
            );
            $data['complete_amount'] = 
                $this -> agent_settlement -> sum('settlement_amount','complete_withdraw_amount', $total_conditions);
            
            //해당 기간동한 출금 완료되지 금액의 총합 
            $sql ="
                SELECT SUM(settlement_amount) AS request_withdraw_amount 
                FROM agent_settlement 
                WHERE settlement_status IN('".WITHDRAW_STATUS_BEFORE_CONFIRM."','".WITHDRAW_STATUS_NOT_CHECKED."')
            ";
            
            if (!empty($date_condition)){
                $sql .=" AND (reg_date >= ".string_to_time( $date_condition[START_TIME])." AND reg_date <= ".string_to_time($date_condition[START_TIME]).")";
            }
            $data['request_amount'] = $this -> agent_settlement -> raw_binding_query($sql)[0];
            $this -> load -> view('admin/affiliate/settle_account', $data);
            
        }
    }

    public function agent_commission_record(){
        if ($this -> input -> method(TRUE) == "POST") {
        } else {
            $this -> load -> model('admin/agent_commission_record');
            $this -> load -> helper('time');
            $data['search_keyword'] = '';
            $data['daterange'] = '';
            $data['search_date_start'] = '';
            $data['search_date_end'] = '';
            $data['act_mode'] = $this -> input -> get('act_mode');
            if (!$data['act_mode']){
            	$data['act_mode'] = 'all';
            }
            $data['view_type'] = '';  
            
            if ($this -> input -> get('search_keyword')){
                $data['search_keyword'] = $this -> input -> get('search_keyword');
            }
            
            if ($data['act_mode'] != 'one'){
                if ($this -> input -> get('daterange', TRUE)){
                    $data['daterange'] = $this -> input -> get('daterange');
                    $date_arr = explode('-', $this -> input -> get('daterange'));
                    $data['search_date_string'] = "SUMMARY";
                    $data['search_date_start'] = trim($date_arr[0]);
                    $data['search_date_end'] = trim($date_arr[1]);
                    
                }else {
                    $d = mktime(0,0,0, date("m"), 1, date("Y")); //이번달 1일
                    $m = strtotime("-1 month", $d); //한달전
                    
                    $prev_month_start_date = date("Y/m/01 00:00:00", $m); // 지난달 1일 
                    $prev_month_end_date = date("Y/m/t 23:59:59", $m); // 지난달 말일
    
                    $data['search_date_string'] = "SUMMARY";
                    $data['search_date_start'] = $prev_month_start_date ;
                    $data['search_date_end'] = $prev_month_end_date;
                    $data['daterange'] =  $data['search_date_start'].' - '. $data['search_date_end'];
                }
            }else {
                $data['daterange'] = '';
                $data['search_date_start'] = '';
                $data['search_date_end'] = '';
            }
            
            if ($this -> input -> get('view_type', TRUE)){
                $data['daterange'] = '';
                $data['search_date_start'] = '';
                $data['search_date_end'] = '';
                $data['view_type'] = $this -> input -> get('view_type');
            }
            $sql = "
                SELECT 
                    AC.*,
                    U.affiliate_code AS affiliate_code,
                    U.user_name AS user_name,
                    U.user_id AS user_id,
                    U.login_status AS login_status,
                    E.total_write_off as total_write_off
                FROM 
                    agent_commission_record as AC
                JOIN user AS U 
                    on AC.user_no = U.user_no
                LEFT OUTER JOIN (SELECT agent_commission_record_no, sum(write_Off_amount) as total_write_off FROM agent_commission_record_detail group by agent_commission_record_no ) AS E 
                    on AC.agent_commission_record_no = E.agent_commission_record_no 
            ";
            
            if ($data['search_keyword']){
               $sql .= " WHERE U.user_id LIKE '%".$data['search_keyword']."%'"; 
            }
            
            if ($data['daterange']){
                if ($data['search_keyword']){
                    $sql .=" AND AC.commission_month >=".string_to_time( $data['search_date_start'])." AND AC.commission_month <=".string_to_time( $data['search_date_end']);
                }else {
                     $sql .=" WHERE AC.commission_month >=".string_to_time( $data['search_date_start'])." AND AC.commission_month <=".string_to_time( $data['search_date_end']);
                }
            }
            
            $sql .="  ORDER BY AC.commission_month ASC";
            $data['commission_records'] = $this -> agent_commission_record-> raw_binding_query($sql);
            //log_message('error',print_r($data,TRUE));
            $this -> load -> view('admin/affiliate/agent_commission_record', $data);
        }
    }
    
    public function form(){
        $this -> load -> model('admin/wallet');
        $this -> load -> model('admin/agent_commission_record', 'ACR');
        $this -> load -> model('admin/agent_commission_record_detail', 'ACRD');
        
        if ($this -> input -> method(TRUE) == "POST") {
            $this -> load -> helper('location');    
            $act_mode = $this -> input ->post('act_mode');
            
            if ($act_mode == "create_write_off"){
                $user_no = $this -> input -> post('user_no');
                $write_off_amount = (float)$this -> input -> post('write_off_amount');
                $commission_change = $this -> input -> post('commission_change');
                
                $condition[WHERE_CONDITION] = array('user_no' => $user_no);
                $wallet = $this -> wallet -> advanced_search_row($condition);
                
                //차감할 것인지 증액할 것인지에 대한 라디오버튼 값
                if ($write_off_amount <=0){
                    alert('차감 또는 증액하려는 금액은 0보다 커야 합니다');
                    exit;
                }
               
                if ($commission_change == COMMISSION_MINUS){
                    if ($write_off_amount > $wallet -> agent_settlement_balance){
                        alert('차감하려는 금액이 보유 금액을 초과하였습니다.\n확인하고 다시 시도해주세요');
                        exit;
                    }
                }
                                   
                if ($commission_change == COMMISSION_MINUS){
                    $write_off_amount = -$write_off_amount;    
                }
                             
                $this->db->trans_start();
                
                /*
                 * admin/agent_commission_record_detail 에 탕감감 내역을 기록
                 * 증감의 금액 범위 제한은 없음
                 * */
                $insert_arr = array(
                    'agent_commission_record_no' => $agent_commission_record -> agent_commission_record_no,
                    'user_no' => $user_no,
                    'write_off_amount' => $write_off_amount,
                    'prev_balance' =>  $wallet -> agent_settlement_balance,
                    'cur_balance' => $wallet -> agent_settlement_balance + $write_off_amount,  
                    'act_admin_no' =>  $this -> session -> userdata(ADMIN_SESSION)[NO],
                    'reg_date' => time()
                );
                
                //log_message('error', 'insert_arr --------------------------');
                //log_message('error', print_r($insert_arr, TRUE));
                $this -> ACRD -> insert($insert_arr);
                
                /*
                 * Wallet 테이블의 agent_settlement_amount 필드 갱신
                 * */
                unset($condition);
                $sql = "
                    UPDATE wallet SET agent_settlement_balance = agent_settlement_balance + ? WHERE user_no = ? 
                ";
                $binding_arr = array(
                    $write_off_amount, $user_no
                );
                $this -> wallet -> raw_binding($sql, $binding_arr);               
                $this->db->trans_complete();
                locationReload('parent');   
            }
            //Wirte Off 등록 폼 요청 
        } else {
            $this -> load -> helper('url');  
            $this -> load -> helper('time');
            $this -> load -> helper('location');
            $this -> load -> model('admin/wallet');
            $this -> load -> library('paging');
            
            $agent_no = $this -> input -> get('agent');
            $user_no =  $agent_no;
            $vpage = $this -> input -> get('vpage');
            if (!$vpage){
            	$vpage = 1;
            }
          
            $condition[WHERE_CONDITION] = array('user_no' => $user_no);            
            $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
            
            $agent_commission_record_no = $this -> input -> get('commission');
            $request_form     = $this -> input -> get('request_form');
            //-------------------------------------------------------------------------------------------
            
            $sql = "select sum(write_off_amount) as total_write_off_amount from agent_commission_record_detail where user_no = ?";
            $bind_param = array($user_no);
            
            $data['total_write_off_amount'] = $this -> ACRD -> raw_binding_query($sql, $bind_param)[0];
            
            //-------------------------------------------------------------------------------------------
            $conditions[SELECT_CONDITION] = "
                admin.admin_id as admin_id,
                agent_commission_record_detail.*
            ";
            $conditions[WHERE_CONDITION] = array(
                "user_no" => $user_no
            );
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'admin',
                JOIN_CONDITION_STATE => 'agent_commission_record_detail.act_admin_no = admin.admin_no',
                JOIN_CONDITION_DIRECT => 'inner',
            );
            $conditions[JOIN_CONDITION] = $join_condition;
            $conditions[ORDER_BY_CONDITION] = "agent_commission_record_detail.reg_date DESC";
            
            $data['write_off_list_count'] = $this -> ACRD -> advanced_count_all_result($conditions);
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $data['write_off_list_count'] ;
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage);
            
            $condition[LIMIT_CONDITION][LIMIT] = $this -> paging -> SCALE;
            $condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['write_off_list'] = $this -> ACRD -> advanced_search_result($conditions);
            $data['pagination'] = $this -> paging;
            $data['user_no'] = $user_no;
            
            $this -> load -> view("admin/affiliate/form/{$request_form}_form", $data);
        }
    }
    
    public function all_write_off_list(){
        $this -> load -> helper('url');  
        $this -> load -> helper('time');
        $this -> load -> helper('location');
        $this -> load -> library('paging');
        $this -> load -> model('admin/wallet');
        $this -> load -> model('admin/agent_commission_record_detail');
        
        $vpage = $this -> input -> get('vpage');
        if (!$vpage){
        	$vpage = 1;
        }
        $sql = "
            SELECT 
                U.user_id as user_id,
                A.admin_id as admin_id,
                ACR.*
            FROM agent_commission_record_detail AS ACR
            INNER JOIN user AS U on ACR.user_no = U.user_no
            INNER JOIN admin AS A on ACR.act_admin_no = A.admin_no 
            ORDER BY ACR.reg_date DESC
        ";
        
        $result = $this -> agent_commission_record_detail -> raw_binding_query($sql);
        $row_count = count($result);
                
        $this -> paging -> SCALE = 15;
        $this -> paging -> GROUP = 10;
        $this -> paging -> TOTAL_CNT = $row_count;
        $this -> paging -> setVariableFromGet($this -> input -> get());
        $this -> paging -> setPage($vpage);
        
        $sql .= " LIMIT ".$this -> paging -> START_ROW.",".$this -> paging -> SCALE;
        $data['rows'] = $this -> agent_commission_record_detail-> raw_binding_query($sql);
        $data['pagination'] = $this -> paging;
        $this -> load -> view ('admin/affiliate/form/all_write_off_list', $data);
        
    }
    
    
    public function agents_list(){
        if ($this -> input -> method(TRUE) == "GET") {
            $this -> load -> helper("time");
            $this -> load -> helper('baofa');
            $this -> load -> helper('location');
            $this -> load -> model('admin/user');
            $this -> load -> library('paging');
            // 이번달 1일
            $d = mktime(0, 0, 0, date("m"), 1, date("Y"));
            
            //한달전
            $m = strtotime("-1 month", $d);
            
            $date =strtotime(date("Y-m-t 23:59:59", $m));
        
            $data['search_keyword'] ='';
            $data['order_by'] ='';
            $data['page'] ='';
            
            if ($this -> input -> get('search_keyword')) {
                $data['search_keyword'] = strtoupper($this -> input -> get('search_keyword'));
            }
            
            if ($this -> input -> get('order_by')) {
                $data['order_by'] = $this -> input -> get('order_by');
            }else {
                $data['order_by'] = "agent_settlement_balance DESC";
            }
            
            if ($this -> input -> get('page')) {
                $data['vpage'] = $this -> input -> get('vpage');
            }else {
                $data['vpage'] = 1;
            }
            
            $sql = "
                SELECT 
                    count(*) AS row_count 
                FROM 
                (
                    SELECT 
                    U.user_no AS user_no,
                    U.user_id AS user_id,
                    U.login_status AS login_status,
                    U.deps1_child_count AS deps1_child_count,
                    U.deps2_child_count AS deps2_child_count,
                    U.reg_date as reg_date,
                    W.agent_settlement_balance AS agent_settlement_balance,
                    S.subtract_total AS subtract_total,
                    C.commission_total AS commission_total,
                    C.commission_count AS commission_count,
                    C.deps1_active_child_count AS deps1_active_child_count,
                    C.deps2_active_child_count AS deps2_active_child_count
                    FROM 
                       user AS U 
                    INNER JOIN wallet as W 
                       on U.user_no = W.user_no
                    INNER JOIN (
                       SELECT 
                           user_no,
                           sum(total_commission) AS commission_total, 
                           count(user_no) AS commission_count, 
                           count(deps1_active_child_count) AS deps1_active_child_count, 
                           count(deps2_active_child_count) AS deps2_active_child_count
                       FROM agent_commission_record where commission_month <= ? GROUP BY user_no 
                    ) AS C
                       on U.user_no = C.user_no
                    LEFT OUTER join (SELECT user_no, sum(write_off_amount) AS subtract_total FROM agent_commission_record_detail GROUP BY user_no) AS  S 
                       on U.user_no = S.user_no    
               ) AS T
            ";
            $query_binding = array($date);
            if (!empty($data['search_keyword'])){
               $sql .= " WHERE user_id like '%".$data['search_keyword']."%'";
               $sql .= " ORDER BY ".$data['order_by'];
            }else {
               $sql .= " ORDER BY ".$data['order_by'];
            }
            
            $query = $this -> user -> raw_binding_query($sql,$query_binding);
            $row_count = $query[0] -> row_count;
            
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $row_count;
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($data['vpage']);
            
            $sql ="
                SELECT 
                    U.user_no AS user_no,
                    U.user_id AS user_id,
                    U.login_status AS login_status,
                    U.deps1_child_count AS deps1_child_count,
                    U.deps2_child_count AS deps2_child_count,
                    U.reg_date as reg_date,
                    W.agent_settlement_balance AS agent_settlement_balance,
                    S.subtract_total AS subtract_total,
                    C.commission_total AS commission_total,
                    C.commission_count AS commission_count,
                    C.deps1_active_child_count AS deps1_active_child_count,
                    C.deps2_active_child_count AS deps2_active_child_count
               FROM 
                   user AS U 
               INNER JOIN wallet as W 
                   on U.user_no = W.user_no
               INNER JOIN (
                   SELECT 
                       user_no,sum(total_commission) AS commission_total, 
                       count(user_no) AS commission_count, 
                       count(deps1_active_child_count) AS deps1_active_child_count, 
                       count(deps2_active_child_count) AS deps2_active_child_count
                   FROM agent_commission_record where commission_month <= ? GROUP BY user_no 
               ) AS C
                   on U.user_no = C.user_no
               LEFT OUTER join (SELECT user_no, sum(write_off_amount) AS subtract_total FROM agent_commission_record_detail GROUP BY user_no) AS  S 
                   on U.user_no = S.user_no    
            ";
            
            $query_binding = array($date);
            if (!empty($data['search_keyword'])){
               $sql .= " WHERE user_id like '%".$data['search_keyword']."%'";
               $sql .= " ORDER BY ".$data['order_by'];
            }else {
               $sql .= " ORDER BY ".$data['order_by'];
            }
            $sql .= " LIMIT ".$this -> paging -> START_ROW.",".$this -> paging -> SCALE;
            
            $data['pagination']  = $this -> paging;
            $data['rows']  = $this -> user -> raw_binding_query($sql,$query_binding);
            $this -> load -> view('admin/affiliate/agents_list',$data);
        }
    }
}
