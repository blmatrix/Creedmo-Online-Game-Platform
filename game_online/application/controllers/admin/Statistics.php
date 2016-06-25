<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Statistics extends CI_Controller{
    public function __construct(){
        parent::__construct();           
    }
    
    public function game_stats(){
        if ($this -> input -> method(TRUE) == "GET") {
            $this -> load -> model('admin/game_play');
            $this -> load -> helper('time');
            $this -> load -> library('paging');
            
            $vpage = $this -> input -> get('vpage', TRUE) ? $this -> input -> get('vpage',TRUE) : 1;
            $data['search_keyword'] =  $this -> input -> get('search_keyword', TRUE);
            $data['daterange']      =  $this -> input -> get('daterange', TRUE);
            $data['vender_code']    =  $this -> input -> get('vender_code', TRUE);
            
            $condition = array();
            
            if ($data['search_keyword'] ){
                $condition[LIKE_CONDITION] = array('player_name' => $data['search_keyword']);
            }
            if ($data['daterange']){
                $date_arr = explode('-', $this -> input -> get('daterange'));
                $date_condition[DATE_CONDITION_COLUMN] = 'play_date_int';
                $date_condition[START_TIME] = trim($date_arr[0]);
                $date_condition[END_TIME] = trim($date_arr[1]);
                
                $data['start_date'] = $date_condition[START_TIME];
                $data['end_date']   = $date_condition[END_TIME];
                $condition[DATE_CONDITION] = $date_condition;
            }
            if ($data['vender_code'] ){
                $condition[WHERE_CONDITION] = array('vender_code' => $data['vender_code']);
            }
            $condition[ORDER_BY_CONDITION] ="play_date_int DESC";
            
            $data['row_count']  = $this -> game_play -> advanced_count_all_result($condition);
            $this -> paging -> SCALE = 20;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT =  $data['row_count'] ;
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage );
            
            $data['pagination'] =$this -> paging;
            
            $condition[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['rows'] = $this -> game_play -> advanced_search_result($condition);
            
            $this -> load -> view('admin/statistics/game_stats',$data);
        }else {
        }
    }

    public function average_profile_visit(){
        $this -> load -> helper('time');
        $this -> load -> library('paging');
        $this -> load -> model('admin/user_action_log');
       
        $condition = array();
        $vpage = $this -> input -> get('vpage', TRUE) ? $this -> input -> get('vpage',TRUE) : 1;
        $data['search_keyword']  = $this -> input -> get('search_keyword',TRUE);
        $data['daterange']       = $this -> input -> get('daterange',TRUE);
        
        $data['country_code'] = '';        
        if ($this -> input -> get('country_code', TRUE)){
            if ($this -> input-> get('country_code',TRUE) != 'all') {
                $data['country_code'] =  $this -> input -> get('country_code',TRUE);
            }     
        }
        
        $data['user_type'] = '';
        if ($this -> input -> get('user_type', TRUE)){
            if ($this -> input-> get('country_code',TRUE) !='all'){
                $data['user_type'] =  $this -> input -> get('user_type',TRUE);
            }
        } 
        
        $condition[SELECT_CONDITION] = "
            user.user_id AS user_id,
            user_action_log.*,
            CASE user_action_log.user_no
                WHEN 0  THEN '-'
                ELSE user_action_log.user_no
            END AS user_no_str,
            CASE user_action_log.user_type 
                WHEN 1  THEN 'MEMBER'
                WHEN 2 THEN 'ADMIN'
                WHEN 3 THEN 'NOT'
                ELSE '-'
            END AS user_type_str,
            CASE user_action_log.request_method 
                WHEN 1  THEN 'GET'
                WHEN 2 THEN 'POST'
                ELSE '-'
            END AS request_method_str,
            CASE user_action_log.request_type 
                WHEN 1  THEN 'COMMON'
                WHEN 2 THEN 'AJAX'
                ELSE '-'
            END AS request_type_str
        ";
        
        if ($data['daterange']){
           $date_arr = explode('-', $this -> input -> get('daterange'));
           $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
           $date_condition[START_TIME] = trim($date_arr[0]);
           $date_condition[END_TIME] = trim($date_arr[1]);
           
           $data['start_date'] = $date_condition[START_TIME];
           $data['end_date']   = $date_condition[END_TIME];
           $condition[DATE_CONDITION] = $date_condition;
        }
        
        if (!empty($data['search_keyword'])){
            $condition[LIKE_CONDITION] = array('user_id' => $data['search_keyword']);
        }
        
        if (!empty($data['country_code']) ){
            $condition[WHERE_CONDITION]['country_code'] = $data['country_code'];
        }
        
        if (!empty($data['user_type'])){
            if ($data['user_type']  == "not_member"){
                $condition[WHERE_CONDITION]['user_action_log.user_no'] = 0;
            }else {
                $condition[WHERE_CONDITION]['user_action_log.user_no !='] = 0;
            }
        }
        
        $join_condition[] = array(
           JOIN_CONDITION_TABLE => 'user', 
           JOIN_CONDITION_STATE => 'user_action_log.user_no = user.user_no', 
           JOIN_CONDITION_DIRECT => "left outer"
        );
        
        $condition[JOIN_CONDITION] = $join_condition;
        $condition[ORDER_BY_CONDITION] = 'user_action_log.reg_date DESC';
        $data['row_count'] = $this -> user_action_log -> advanced_count_all_result($condition);
        
        $this -> paging -> SCALE = 20;
        $this -> paging -> GROUP = 10;
        $this -> paging -> TOTAL_CNT =  $data['row_count'] ;
        $this -> paging -> setVariableFromGet($this -> input -> get());
        $this -> paging -> setPage($vpage );
        
        $condition[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
        $condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
        
        $data['pagination'] = $this -> paging;
        $query = $this -> db -> query("SELECT * FROM user_action_log LIMIT {$this->paging->START_ROW} , {$this->paging->SCALE}");
        $data['rows'] = $this -> user_action_log -> advanced_search_result($condition);
        $sql ="
            SELECT country_code, country FROM user_action_log GROUP BY country_code, country ORDER BY country 
        ";
        $data['country_arr'] = $this -> user_action_log -> raw_binding_query($sql);
        $this -> load -> view('admin/statistics/average_profile_visit',$data);
     }

    public function game_play_ajax_chart_data(){
        $this -> load -> model('admin/game_play');    
        $vender = $this -> input -> get('salesSelector', TRUE);
        $query_search_type = $this -> input -> get('querySearchType', TRUE);
        $start_time = $this -> input -> get('start_time', TRUE);
        $end_time   = $this -> input -> get('end_time', TRUE) ;
        
        $date_sql1 = '';
        $date_sql2 = '';
        if ($start_time && $end_time){
            $start_time = strtotime($start_time.' 00:00:00');
            $end_time   = strtotime($end_time.' 23:59:59');
            $date_sql1   = ' WHERE play_date_int >='.$start_time . ' AND play_date_int <='.$end_time;
            $date_sql2   = ' AND (play_date_int >='.$start_time . ' AND play_date_int <='.$end_time.' )';
        }
        
        $group_col = '';
        switch($query_search_type){
            case "monthly":
                $group_col = "%y-%m";
                break;
            case 'daily':
                $group_col = "%y-%m-%d";
                break;
        }
        
        $sql = "
             SELECT 
                DATE_FORMAT(FROM_UNIXTIME(play_date_int),'{$group_col}') AS day,
                SUM(win_amount) AS win_amount
             FROM game_play
             {$date_sql1} 
             GROUP BY DATE_FORMAT(FROM_UNIXTIME(play_date_int), '{$group_col}') 
             ORDER BY DATE_FORMAT(FROM_UNIXTIME(play_date_int), '{$group_col}') ASC
        ";
        
        $sql2 = "
             SELECT 
                DATE_FORMAT(FROM_UNIXTIME(play_date_int),'{$group_col}') AS day,
                SUM(win_amount) AS win_amount
             FROM game_play
             WHERE vender_code = ?  {$date_sql2} 
             GROUP BY DATE_FORMAT(FROM_UNIXTIME(play_date_int), '{$group_col}')
             ORDER BY DATE_FORMAT(FROM_UNIXTIME(play_date_int), '{$group_col}') ASC
        ";
        
        $data['total_profit'] = $this -> game_play -> raw_binding_query($sql);
        
        $query_binding = array('1');
        $data['pt_profit'] = $this -> game_play -> raw_binding_query($sql2, $query_binding);
        
        $query_binding = array('2');
        $data['mg_profit'] = $this -> game_play -> raw_binding_query($sql2, $query_binding);
        echo json_encode($data);
    }	

    
    public function deposit_withdraw_chart_data(){
        $this -> load -> model('admin/deposit');
        $this -> load -> model('admin/withdraw');
       
        $query_search_type = $this -> input -> get('querySearchType', TRUE);
        $start_time =  $this -> input -> get('start_time', TRUE);
        $end_time   = $this -> input -> get('end_time', TRUE);
        
        $date_sql = '';
        if ($start_time && $end_time){
            $start_time = strtotime($start_time.' 00:00:00');
            $end_time   = strtotime($end_time.' 23:59:59');
            $date_sql   = ' WHERE data_table.reg_date >='.$start_time . ' AND data_table.reg_date <='.$end_time;
            //log_message('error',date('y/m/d',$start_time));
            //log_message('error',date('y/m/d',$end_time   ));
        }
        
        $group_col ="%Y-%m-%d";
        switch($query_search_type){
            case "monthly":
                $group_col = "%y-%m";
                break;
            case 'daily':
                $group_col = "%y-%m-%d";
                break;
        }

        $sql = "
           SELECT 
                DATE_FORMAT(FROM_UNIXTIME(data_table.reg_date),'{$group_col}') AS day,
                SUM(CASE data_table.type WHEN 'D' THEN data_table.amount ELSE 0 END) AS deposit_total,
                SUM(CASE data_table.type WHEN 'D' THEN ROUND(data_table.bonus,2) ELSE 0 END) AS bonus_total,
                SUM(CASE data_table.type WHEN 'W' THEN data_table.amount ELSE 0 END) AS withdraw_total
           FROM 
               (
                  (
                    SELECT 
                        deposit_amount as amount,
                        deposit_bonus AS bonus,
                        'D' as type,
                        reg_date as reg_date
                    FROM deposit
                    ) 
                    UNION ALL
                  (
                    SELECT
                        withdraw_amount AS amount,
                        0 AS bonus,
                        'W' as type,
                        reg_date as reg_date
                    FROM withdraw
                  ) 
               ) as data_table
            {$date_sql}   
            GROUP BY DATE_FORMAT(FROM_UNIXTIME(data_table.reg_date), '{$group_col}')
            ORDER BY DATE_FORMAT(FROM_UNIXTIME(data_table.reg_date), '{$group_col}') ASC
        ";
        $rows = $this -> deposit -> raw_binding_query($sql);
        echo json_encode($rows);
    }
}
