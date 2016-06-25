<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class financial extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function profit_report() {
        if ($this -> input -> method(TRUE) == "POST") {
        } else {
            $this -> load  -> model('admin/wallet');
            $this -> load  -> model('admin/deposit');
            $this -> load  -> model('admin/withdraw');
            $this -> load  -> model('admin/comp_point_record');
            $this -> load  -> model('admin/agent_settlement');
            $this -> load  -> model('admin/coupon');
            $this -> load -> library('affiliate_service');
            
            $date_condition  = array();
            $join_condition  = array();
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1; 
            $total_conditions = array();
            $data['daterange'] ='';
            $query_search_type = $this -> input -> get('query_search_type', TRUE);
            
            if ($this -> input -> get('daterange') != FALSE) {
                $data['daterange'] = $this -> input -> get('daterange');
                $date_arr = explode('-', $this -> input -> get('daterange'));
                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($date_arr[0]);
                $date_condition[END_TIME] = trim($date_arr[1]);
                $total_conditions[DATE_CONDITION] = $date_condition;
            }
            
            $tables = array(
                // 테이블 이름, 컬럼이름, 생성될 임시 테이블 이름
                array('deposit','deposit_amount','deposit'),
                array('withdraw','withdraw_amount','withdraw'),
                array('deposit','deposit_bonus','bonus'),
                array('coupon','coupon_point','coupon'),
                array('agent_settlement','settlement_amount','agent_settlement'),
                array('comp_point_record','acc_comp_point','comp_point_record'),
            );
            $query_date_sql = '';
            switch($query_search_type){
                case QUERY_SEARCH_TYPE_DAILY:
                    $query_date_sql = "%Y-%m-%d";
                    break;
                case QUERY_SEARCH_TYPE_WEEKLY:
                    $query_date_sql = "%Y-%m-%d";
                    break;
                case QUERY_SEARCH_TYPE_MONTHLY:
                    $query_date_sql = "%Y-%m";
                    break;
                case QUERY_SEARCH_TYPE_ANNUAL:
                    $query_date_sql = "%Y";
                    break;
                default : 
                    $query_date_sql = "%Y-%m-%d";
                    break;
            }
            
            $date_sql = '';
            if ($data['daterange']){
                $date_sql = "reg_date >= ".strtotime($date_condition[START_TIME])." AND reg_date <= ".strtotime($date_condition[END_TIME]);
            }
            
            foreach($tables as  $table){
               $where_statement = '';
               $query_date = $date_sql;
               switch($table[0]){
                case 'deposit':
                    $where_statement = 'WHERE deposit_status = '.DEPOSIT_STATUS_CONFIRMED;
                    if ($date_sql)
                         $query_date = "AND ".$query_date;
                    break;
                case 'withdraw':
                    $where_statement = 'WHERE withdraw_status = '.WITHDRAW_STATUS_CONFIRMED;
                    if ($date_sql)
                         $query_date = "AND ".$query_date;
                    break;
                case 'coupon':
                    $where_statement = 'WHERE coupon_use_status = '.COUPON_USE_STATUS_USED;
                    if ($date_sql)
                         $query_date = "AND ".$query_date;
                    break;
                case 'agent_settlement':
                    $where_statement = 'WHERE settlement_status = '.WITHDRAW_STATUS_CONFIRMED;
                    if ($date_sql)
                         $query_date ="AND ".$query_date;
                    break;
                case 'comp_point_record':
                default : 
                    $where_statement  = '';
                     if ($date_sql)
                         $query_date = "WHERE ".$query_date;
                    break;
               } 
               $sql = "
                CREATE TEMPORARY TABLE {$table[2]}_sum_temp
                SELECT 
                    DATE_FORMAT(FROM_UNIXTIME(reg_date),'{$query_date_sql}') AS day,
                    sum({$table[1]}) AS total_{$table[1]}
                    FROM {$table[0]} {$where_statement} {$query_date}
                    GROUP BY DATE_FORMAT(FROM_UNIXTIME(reg_date), '{$query_date_sql}')
                    ORDER BY DATE_FORMAT(FROM_UNIXTIME(reg_date), '{$query_date_sql}') DESC
                "; 
                //log_message('error',$table[2]."sql1 ------------------------------------------------------------------------------------------------------");
                //log_message('error',$sql);
                $this -> db -> query($sql);
                $where_statement ='';
            }
            
            $profit_reports = array();
            $this -> load -> library('profit_report_vo');
            foreach($tables as  $table){
               $sql = " 
                SELECT 
                    day,
                    total_{$table[1]}
                    FROM {$table[2]}_sum_temp 
                    ORDER BY day DESC
                "; 
                $query = $this -> db -> query($sql);
                foreach($query -> result() as $row){
                    $day = $row -> day;
                    $propery = "total_{$table[1]}";
                    if (empty($profit_reports[$day])){
                        $profit_reports[$day] = new Profit_report_vo;                       
                    }
                    $profit_reports[$day] -> $propery = $row -> $propery; 
                    $profit_reports[$day] -> day = $row -> day; 
                }
            }
            $data['t_deposit_amount'] = 0;
            $data['t_deposit_bonus_amount']  = 0;
            $data['t_withdraw_amount']  = 0;
            $data['t_coupon_amount']  = 0;
            $data['t_comp_amount']  = 0;
            $data['t_agent_settlement']  = 0;
            
            foreach($profit_reports as $report){
                $data['t_deposit_amount']       += $report -> total_deposit_amount;
                $data['t_deposit_bonus_amount'] += $report -> total_deposit_bonus;
                $data['t_withdraw_amount']      += $report -> total_withdraw_amount;
                $data['t_coupon_amount']        += $report -> total_coupon_point;
                $data['t_comp_amount']          += $report -> total_acc_comp_point;
                $data['t_agent_settlement']     += $report -> total_settlement_amount;      
            }
            $data['profit'] = 
                $data['t_deposit_amount']  - 
                $data['t_deposit_bonus_amount'] -
                $data['t_withdraw_amount'] -
                $data['t_coupon_amount'] -
                $data['t_comp_amount'] - 
                $data['t_agent_settlement'];
                                
            $data['margin'] = $data['t_deposit_amount'] == 0 ? $data['profit'] : $data['profit'] / $data['t_deposit_amount'] * 100; 
            $data['profit_reports'] = $profit_reports;
            $this -> load -> view('admin/financial/profit_report', $data);
        }
    }

    public function credit_transfer(){
       if ($this -> input -> method(TRUE) == "POST") {
        } else {
            $this -> load  -> model('admin/wallet');
            $this -> load  -> helper('time');
            $this -> load  -> helper('url'); 
            $data['search_keyword'] = $this -> input -> get('search_keyword');
            if (!$data['search_keyword']) {
                $data['search_keyword'] = '';
            }
            $data['daterange'] = $this -> input -> get('daterange', TRUE);
            
            $where_condition = array();
            $like_condition  = array();
            $date_condition  = array();
            $join_condition  = array();
            $total_conditions = array();
            
            if (!empty($data['daterange'])) {
                $date_arr = explode('-', $this -> input -> get('daterange'));
                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($date_arr[0]);
                $date_condition[END_TIME] = trim($date_arr[1]);
                $total_conditions[DATE_CONDITION] = $date_condition;
            }
            
            $tables = array(
                // 테이블 이름, 컬럼이름, 생성될 임시 테이블 이름
                array('deposit','deposit_amount','deposit'),
                array('withdraw','withdraw_amount','withdraw'),
                array('deposit','deposit_bonus','bonus'),
                array('coupon','coupon_point','coupon'),
                array('agent_settlement','settlement_amount','agent_settlement'),
                array('comp_point_record','acc_comp_point','comp_point_record'),
            );
            
            $date_sql = '';
            $is_date_search = FALSE;
            if (!empty($data['daterange'])){
                $is_date_search = TRUE;
            }
            
            $like_sql = ''; 
            if (!empty($data['search_keyword'])){
                $like_sql = "user.user_id like '%".$data['search_keyword']."%'";
            }
            
            foreach($tables as  $table){
               $like_sql1 = $like_sql;
               $where_statement = '';
               $join_key = 'user_no';
               if ($is_date_search){
                   $date_sql = "{$table[0]}.reg_date >= ".strtotime($date_condition[START_TIME])." AND {$table[0]}.reg_date <= ".strtotime($date_condition[END_TIME]);
               }   
                
               switch($table[0]){
                case 'deposit':
                    $where_statement = 'WHERE deposit_status = '.DEPOSIT_STATUS_CONFIRMED;
                    if ($date_sql){
                        $date_sql = "AND ".$date_sql;
                    }
                    if ( $like_sql1)
                          $like_sql1 = "AND ".$like_sql1;
                    break;
                case 'withdraw':
                    $where_statement = 'WHERE withdraw_status = '.WITHDRAW_STATUS_CONFIRMED;
                    if ($date_sql)
                         $date_sql = "AND ".$date_sql;
                    if ( $like_sql1)
                          $like_sql1 = "AND ".$like_sql1;
                    break;
                case 'coupon':
                    $where_statement = 'WHERE coupon_use_status = '.COUPON_USE_STATUS_USED;
                    if ($date_sql)
                         $date_sql = "AND ".$date_sql;
                    if ( $like_sql1)
                          $like_sql1 = "AND ".$like_sql1;
                    break;
                case 'agent_settlement':
                    $where_statement = 'WHERE settlement_status = '.WITHDRAW_STATUS_CONFIRMED;
                    if ($date_sql)
                         $date_sql ="AND ".$date_sql;
                    if ( $like_sql1)
                          $like_sql1 = "AND ".$like_sql1;
                    $join_key = 'agent_no';
                    break;
                case 'comp_point_record':
                default : 
                    $where_statement  = '';
                     if ($date_sql){
                         $date_sql = "WHERE ".$date_sql;
                         if( $like_sql1) {
                             $like_sql1 = "AND ". $like_sql1;
                         }
                     }else {
                        if( $like_sql1) {
                             $like_sql1 = "AND ". $like_sql1;
                         }
                     }
                    break;
               } 
               $sql = "
                CREATE TEMPORARY TABLE {$table[2]}_temp
                SELECT 
                    {$table[0]}.*,
                    user.user_no as user_no1,
                    user.user_id,
                    user.user_name,
                    user.login_status
                FROM {$table[0]} 
                JOIN user ON user.user_no = {$table[0]}.{$join_key}
                {$where_statement} {$date_sql} ${like_sql1}
                "; 
               $this -> db -> query($sql);
               $where_statement ='';
               
               //log_message('error',$table[2]."sql2 ------------------------------------------------------------------------------------------------------");
               //log_message('error',$sql);
            }
            
            $this -> load -> library('profit_detail_report_vo');    
            $data['t_deposit_amount'] = 0;
            $data['t_deposit_bonus_amount']  = 0;
            $data['t_withdraw_amount']  = 0;
            $data['t_coupon_amount']  = 0;
            $data['t_comp_amount']  = 0;
            $data['t_agent_settlement']  = 0;
            
            foreach($tables as  $table){
               $sql = " 
                   SELECT *
                   FROM {$table[2]}_temp 
                "; 
                $query = $this -> db -> query($sql);
                foreach($query -> result() as $row){
                    switch($table[2]){
                        case 'deposit':
                             $data['t_deposit_amount'] += $row -> deposit_amount;
                            break;
                        case 'withdraw':
                            $data['t_withdraw_amount'] += $row -> withdraw_amount;
                            break;
                        case 'bonus':
                            $data['t_deposit_bonus_amount'] += $row -> deposit_bonus;
                            break;
                        case 'coupon':
                            $data['t_coupon_amount'] += $row -> coupon_point;
                            break;
                        case 'agent_settlement':
                            $data['t_agent_settlement'] += $row -> settlement_amount;
                            break;
                        case 'comp_point_record':
                            $data['t_comp_amount'] += $row -> acc_comp_point;
                            break;
                    }
                }
            }
            $data['profit'] = 
                $data['t_deposit_amount']  - 
                $data['t_deposit_bonus_amount'] -
                $data['t_withdraw_amount'] -
                $data['t_coupon_amount'] -
                $data['t_comp_amount'] - 
                $data['t_agent_settlement'];
            $data['margin'] = $data['t_deposit_amount'] == 0 ? $data['profit'] : $data['profit'] / $data['t_deposit_amount'] * 100; 
            
            //UNINO ALL 결과 집합 생성 
            $sql= "
                (
                    SELECT 
                        user_no1,
                        user_id AS user_id, 
                        login_status AS login_status,
                        'Wire Transfer' AS type, 
                        deposit_amount AS amount1,
                        deposit_bonus AS amount2, 
                        0 AS amount3, 
                        0 AS amount4,
                        confirm_date AS confirm_date,
                        reg_date AS reg_date
                    FROM deposit_temp
                ) 
                UNION ALL
                (
                    SELECT
                        user_no1,
                        user_id AS user_id, 
                        login_status AS login_status,
                        CASE withdraw_method WHEN 1 THEN 'E-Wallet' ELSE 'Wire Transfer' END AS type, 
                        0 AS amount1,
                        0 as amount2, 
                        withdraw_amount AS amount3, 
                        0 AS amount4,
                        confirm_date AS confirm_date,
                        reg_date AS reg_date
                    FROM withdraw_temp
                ) 
                UNION ALL
                (
                    SELECT
                        user_no1,
                        user_id AS user_id, 
                        login_status AS login_status,
                        'Coupon' AS type, 
                        0 AS amount1,
                        coupon_point as amount2, 
                        0 AS amount3, 
                        0 AS amount4,
                        reg_date AS confirm_date,
                        reg_date AS reg_date
                    FROM coupon_temp
                ) 
                UNION ALL
                (
                    SELECT
                        user_no1,
                        user_id AS user_id, 
                        login_status AS login_status,
                        concat('Affiliate' , CASE settlement_method WHEN 1 THEN '(EW)' ELSE '(WT)' END) AS type, 
                        0 AS amount1,
                        0 as amount2, 
                        0 AS amount3, 
                        settlement_amount AS amount4,
                        reg_date AS confirm_date,
                        reg_date AS reg_date
                    FROM agent_settlement_temp
                )
                UNION ALL
                (
                    SELECT
                        user_no1,
                        user_id AS user_id, 
                        login_status AS login_status,
                        'Comp' AS type, 
                        0 AS amount1,
                        acc_comp_point as amount2, 
                        0 AS amount3, 
                        0 AS amount4,
                        reg_date AS confirm_date,
                        reg_date AS reg_date
                    FROM comp_point_record_temp
                )  
                ORDER BY confirm_date ASC, reg_date ASC              
            ";
            
            $query  = $this -> db -> query($sql);
            $data['action_list'] = $query -> result();
            $this -> load -> view('admin/financial/credit_transfer', $data);
        }
    }
}
