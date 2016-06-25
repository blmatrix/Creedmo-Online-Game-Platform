<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report_service {
    private $CI;
    public function __construct() {
        $this -> CI = &get_instance();
    }
    
    public function profit_report_summary($option = NULL){
        $this -> CI -> load -> model('admin/user');
        $start_time = $option['start_time'];
        $end_time = $option['end_time'];
        
        $deposit_sum_sql  = "
            SELECT 
                sum(deposit_amount) as total_deposit, sum(deposit_bonus) as total_bonus
            FROM 
                deposit
            WHERE deposit_status = ? AND ( reg_date >= ? AND reg_date <=? )";
            
        $withdraw_sum_sql  = "
            SELECT 
                sum(withdraw_amount) as total_withdraw
            FROM 
                withdraw
            WHERE withdraw_status = ? AND ( reg_date >= ? AND reg_date <=? )";
        
        $coupon_sum_sql  = "
            SELECT 
                sum(coupon_point) as total_coupon_point
            FROM 
                coupon
            WHERE coupon_use_status = ? AND ( reg_date >= ? AND reg_date <=? )";
        $comp_sum_sql  = "
            SELECT 
                sum(acc_comp_point) as total_comp_point
            FROM 
                game_play 
            WHERE play_date_int >= ? AND play_date_int <=? ";
        
        $affiliate_sum_sql  = "
            SELECT 
                sum(total_commission) as total_commission
            FROM 
                agent_commission_record
            WHERE reg_date >= ? AND reg_date<=? ";
            
            
        $query_binding = array(DEPOSIT_STATUS_CONFIRMED,$start_time, $end_time);        
        $data['deposit_summary'] = $this -> CI -> user -> raw_binding_query($deposit_sum_sql,$query_binding)[0]; 
        $data['total_deposit'] = $data['deposit_summary'] -> total_deposit;
        $data['total_bonus'] = $data['deposit_summary'] -> total_bonus;
        
        $query_binding = array(WITHDRAW_STATUS_CONFIRMED,$start_time, $end_time);        
        $data['total_withdraw'] = $this -> CI -> user -> raw_binding_query($withdraw_sum_sql, $query_binding)[0] -> total_withdraw; 
        
        
        $query_binding = array(COUPON_USE_STATUS_USED,$start_time, $end_time);        
        $data['total_coupon']   = $this -> CI -> user -> raw_binding_query($coupon_sum_sql, $query_binding)[0]   -> total_coupon_point; 
        
        $query_binding = array($start_time, $end_time);        
        $data['total_comp']     = $this -> CI -> user -> raw_binding_query($comp_sum_sql,$query_binding)[0]     -> total_comp_point; 
        $data['total_affiliate'] = $this -> CI -> user -> raw_binding_query($affiliate_sum_sql,$query_binding)[0] -> total_commission; 
        
        $data['total_profit'] = 
            $data['total_deposit'] -
            $data['total_coupon'] -
            $data['total_bonus'] -
            $data['total_comp']  -
            $data['total_affiliate'];
         return $data;
    }
    
    public function profit_report(){
        $this -> CI -> load  -> model('admin/wallet');
        $this -> CI -> load  -> model('admin/deposit');
        $this -> CI -> load  -> model('admin/withdraw');
        $this -> CI -> load  -> model('admin/comp_point_record');
        $this -> CI -> load  -> model('admin/agent_settlement');
        $this -> CI -> load  -> model('admin/coupon');
        $this -> CI -> load -> library('affiliate_service');
        
        $date_condition  = array();
        $join_condition  = array();
        $vpage = $this -> CI ->  input -> get('vpage') ? $this -> CI -> input -> get('vpage') : 1; 
        $total_conditions = array();
        $data['daterange'] ='';
        $query_search_type =  $this -> CI -> input -> get('query_search_type');
        if (!$query_search_type){
            $query_search_type = '';
        }
        if ($this -> CI -> input -> get('daterange')) {
            $data['daterange'] = $this -> CI -> input -> get('daterange');
            $date_arr = explode('-', $this -> CI -> input -> get('daterange'));
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
            log_message('error',$table[2]."sql1 ------------------------------------------------------------------------------------------------------");
            log_message('error',$sql);
            $this -> CI ->  db -> query($sql);
            $where_statement ='';
        }
        
        $profit_reports = array();
        $this -> CI -> load -> library('profit_report_vo');
        foreach($tables as  $table){
           $sql = " 
            SELECT 
                day,
                total_{$table[1]}
                FROM {$table[2]}_sum_temp 
                ORDER BY day DESC
            "; 
            $query = $this -> CI -> db -> query($sql);
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
        return $data;
    }
}
