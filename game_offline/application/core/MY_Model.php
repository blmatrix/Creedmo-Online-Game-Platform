<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 | -------------------------------------------------------------------
 | GENERIC MODEL CLASS DEALING WITH ALL TABLE
 | -------------------------------------------------------------------
 |
 */

class MY_Model extends CI_Model {

    public $table;
    public function __construct() {
        parent::__construct();
        $this -> table = strtolower(get_Class($this));
        $this -> load -> database();
    }

    //====================================================================================
    // 인자 배열중에서 테이블의 고유 키 필드가 있는지 조사하여
    //insert 와 update를 선택하여 실행함
    //====================================================================================

    public function save($data, $table_name = "") {
        if ($table_name == "") {
            $table_name = $this -> table;
        }
        $op = 'update';
        $keyExists = FALSE;
        $fields = $this -> db -> field_data($table_name);

        foreach ($fields as $field) {
            if ($field -> primary_key == 1) {
                $keyExists = TRUE;
                if (isset($data[$field -> name])) {
                    $this -> db -> where($field -> name, $data[$field -> name]);
                } else {
                    $op = 'insert';
                }
            }
        }

        if ($keyExists && $op == 'update') {
            $this -> db -> set($data);
            $this -> db -> update($table_name);
            if ($this -> db -> affected_rows() == 1) {
                return $this -> db -> affected_rows();
            }
        }

        $this -> db -> insert($table_name, $data);
        return $this -> db -> affected_rows();
    }

    function search_result($conditions = NULL, $table_name = "", $limit = 20, $offset = 0) {
        if ($table_name == "") {
            $table_name = $this -> table;
        }

        if ($conditions != NULL)
            $this -> db -> where($conditions);
        $query = $this -> db -> get($table_name, $limit, $offset = 0);
        return $query -> result();
    }

    function search_row($conditions = NULL, $table_name = "", $limit = 20, $offset = 0) {
        if ($table_name == "") {
            $table_name = $this -> table;
        }

        if ($conditions != NULL)
            $this -> db -> where($conditions);
        $query = $this -> db -> get($table_name, $limit, $offset = 0);
        return $query -> row();
    }

    //====================================================================================
    // Search Method with more detail option
    // 다수 행의 결과셋을 구함
    //====================================================================================

    function advanced_search_result($condition = NULL, $table_name = '') {
        $this->db->stop_cache();    
        $this->db->cache_off();
        $this->db->cache_delete();
        
        if ($table_name == "") {
            $table_name = $this -> table;
        }

        $this -> db -> from($table_name);

        if ($condition == NULL) {
            $query = $this -> db -> get();
            return $query -> result();
        }
        
        $date_col_prefix= '';
        if (isset($condition[JOIN_CONDITION]) && $condition[JOIN_CONDITION] != NULL) {
            $date_col_prefix = $table_name.'.';
            
            $join_conditions = $condition[JOIN_CONDITION];
            foreach($join_conditions as $join_condition){
                $this -> db -> join($join_condition[JOIN_CONDITION_TABLE],
                                    $join_condition[JOIN_CONDITION_STATE],
                                    $join_condition[JOIN_CONDITION_DIRECT]
                                    );
            }
        }
        if (isset($condition[SELECT_CONDITION]) && $condition[SELECT_CONDITION] != NULL) {
            $this -> db -> select($condition[SELECT_CONDITION]);
        }
        if (isset($condition[WHERE_CONDITION]) && $condition[WHERE_CONDITION] != NULL) {
            $this -> db -> where($condition[WHERE_CONDITION]);
        }
        if (isset($condition[WHERE_IN_CONDITION]) && $condition[WHERE_IN_CONDITION] != NULL) {
            $this -> db -> where_in($condition[WHERE_IN_CONDITION][WHERE_IN_COLUMN],$condition[WHERE_IN_CONDITION][WHERE_IN_DATAS]);
        }
        if (isset($condition[LIKE_CONDITION]) && $condition[LIKE_CONDITION] != NULL) {
            $this -> db -> like($condition[LIKE_CONDITION]);
        }
        if (isset($condition[LIMIT_CONDITION]) && $condition[LIMIT_CONDITION] != NULL) {
            $this -> db -> limit($condition[LIMIT_CONDITION][LIMIT], $condition[LIMIT_CONDITION][OFFSET]);
        }
        if (isset($condition[DATE_CONDITION]) && $condition[DATE_CONDITION] != NULL) {
            $start_time_type = gettype($condition[DATE_CONDITION][START_TIME]);
            $end_time_type = gettype($condition[DATE_CONDITION][END_TIME]);
            $date_col_prfix =  $date_col_prefix.$condition[DATE_CONDITION][DATE_CONDITION_COLUMN];
            if ($start_time_type == $end_time_type) {
                if ($start_time_type == 'integer') {
                    if ($condition[DATE_CONDITION][END_TIME] > $condition[DATE_CONDITION][START_TIME]) {
                        $this -> db -> where( $date_col_prfix. " >=", $condition[DATE_CONDITION][START_TIME]);
                        $this -> db -> where( $date_col_prfix. " <=", $condition[DATE_CONDITION][END_TIME]);
                    }
                } else if ($start_time_type == 'string') {
                    if (strtotime($condition[DATE_CONDITION][END_TIME]) > strtotime($condition[DATE_CONDITION][START_TIME])) {
                        $this -> db -> where( $date_col_prfix. " >=", strtotime($condition[DATE_CONDITION][START_TIME]));
                        $this -> db -> where( $date_col_prfix. " <=", strtotime($condition[DATE_CONDITION][END_TIME]));
                    }
                }
            }
        }
        
       
        if (isset($condition[ORDER_BY_CONDITION]) && $condition[ORDER_BY_CONDITION] != NULL) {
            $this -> db -> order_by($condition[ORDER_BY_CONDITION]);
        }else {
             $this -> db -> order_by(strtolower($table_name).'.'.'reg_date DESC');     
        }
        
        if (isset($condition[GROUP_BY_CONDITION]) && $condition[GROUP_BY_CONDITION] != NULL) {
            $this -> db -> group_by($condition[GROUP_BY_CONDITION]);
        }
        
        $query = $this -> db -> get();
        //log_message("error", "\n 쿼리 ====> \n". $this -> db -> last_query());
        return $query -> result();
    }

    //====================================================================================
    // Search Method with more detail option
    // 1 행의 결과 row  구함(고유키로 조회)
    //====================================================================================

    function advanced_search_row($condition = NULL, $table_name = '') {
        $this -> db -> stop_cache();    
        $this -> db -> cache_off();
        $this -> db -> cache_delete();
        if ($table_name == "") {
            $table_name = $this -> table;
        }
        
        $this -> db -> from($table_name);
         
        if ($condition == NULL) {
            $query = $this -> db -> get();
            return $query -> row();
        }
        
        $date_col_prefix= '';
        if (isset($condition[JOIN_CONDITION]) && $condition[JOIN_CONDITION] != NULL) {
            $date_col_prefix = $table_name.'.';
            
            $join_conditions = $condition[JOIN_CONDITION];
            foreach($join_conditions as $join_condition){
                $this -> db -> join(
                    $join_condition[JOIN_CONDITION_TABLE],
                    $join_condition[JOIN_CONDITION_STATE],
                    $join_condition[JOIN_CONDITION_DIRECT]
                );
            }
        }
        if (isset($condition[SELECT_CONDITION]) && $condition[SELECT_CONDITION] != NULL) {
            $this -> db -> select($condition[SELECT_CONDITION]);
        }
        if (isset($condition[WHERE_CONDITION]) && $condition[WHERE_CONDITION] != NULL) {
            $this -> db -> where($condition[WHERE_CONDITION]);
        }
        if (isset($condition[WHERE_IN_CONDITION]) && $condition[WHERE_IN_CONDITION] != NULL) {
            $this -> db -> where_in($condition[WHERE_IN_CONDITION][WHERE_IN_COLUMN],$condition[WHERE_IN_CONDITION][WHERE_IN_DATAS]);
        }
        if (isset($condition[LIKE_CONDITION]) && $condition[LIKE_CONDITION] != NULL) {
            $this -> db -> like($condition[LIKE_CONDITION]);
        }
        if (isset($condition[LIMIT_CONDITION]) && $condition[LIMIT_CONDITION] != NULL) {
            $this -> db -> limit($condition[LIMIT_CONDITION][LIMIT], $condition[LIMIT_CONDITION][OFFSET]);
        }
        if (isset($condition[DATE_CONDITION]) && $condition[DATE_CONDITION] != NULL) {
            $start_time_type = gettype($condition[DATE_CONDITION][START_TIME]);
            $end_time_type = gettype($condition[DATE_CONDITION][END_TIME]);
            $date_col_prfix =  $date_col_prefix.$condition[DATE_CONDITION][DATE_CONDITION_COLUMN];
            if ($start_time_type == $end_time_type) {
                if ($start_time_type == 'integer') {
                    if ($condition[DATE_CONDITION][END_TIME] > $condition[DATE_CONDITION][START_TIME]) {
                        $this -> db -> where( $date_col_prfix. " >=", $condition[DATE_CONDITION][START_TIME]);
                        $this -> db -> where( $date_col_prfix. " <=", $condition[DATE_CONDITION][END_TIME]);
                    }
                } else if ($start_time_type == 'string') {
                    if (strtotime($condition[DATE_CONDITION][END_TIME]) > strtotime($condition[DATE_CONDITION][START_TIME])) {
                        $this -> db -> where( $date_col_prfix. " >=", strtotime($condition[DATE_CONDITION][START_TIME]));
                        $this -> db -> where( $date_col_prfix. " <=", strtotime($condition[DATE_CONDITION][END_TIME]));
                    }
                }
            }
        }
        if (isset($condition[GROUP_BY_CONDITION]) && $condition[GROUP_BY_CONDITION] != NULL) {
            $this -> db -> group_by($condition[GROUP_BY_CONDITION]);
        }
        if (isset($condition[ORDER_BY_CONDITION]) && $condition[ORDER_BY_CONDITION] != NULL) {
            $this -> db -> order_by($condition[ORDER_BY_CONDITION]);
        }
        $query = $this -> db -> get();
        //log_message("error", "\n 쿼리 ====> \n". $this -> db -> last_query());
        return $query -> row();
    }

    //====================================================================================
    // Search Method with more detail option
    // 1 행의 결과 row  구함(고유키로 조회)
    //====================================================================================

    function advanced_count_all_result($condition = NULL, $table_name = '') {
        if ($table_name == "") {
            $table_name = $this -> table;
        }
        
        $this -> db -> from($table_name);
        $date_col_prefix= '';
        if (isset($condition[JOIN_CONDITION]) && $condition[JOIN_CONDITION] != NULL) {
            $date_col_prefix = $table_name.'.';
            
            $join_conditions = $condition[JOIN_CONDITION];
            foreach($join_conditions as $join_condition){
                $this -> db -> join(
                    $join_condition[JOIN_CONDITION_TABLE],
                    $join_condition[JOIN_CONDITION_STATE],
                    $join_condition[JOIN_CONDITION_DIRECT]
                );
            }
        }
        if (isset($condition[SELECT_CONDITION]) && $condition[SELECT_CONDITION] != NULL) {
            $this -> db -> select($condition[SELECT_CONDITION]);
        }
        if (isset($condition[WHERE_CONDITION]) && $condition[WHERE_CONDITION] != NULL) {
            $this -> db -> where($condition[WHERE_CONDITION]);
        }
        if (isset($condition[WHERE_IN_CONDITION]) && $condition[WHERE_IN_CONDITION] != NULL) {
            $this -> db -> where_in($condition[WHERE_IN_CONDITION][WHERE_IN_COLUMN],$condition[WHERE_IN_CONDITION][WHERE_IN_DATAS]);
        }
        if (isset($condition[LIKE_CONDITION]) && $condition[LIKE_CONDITION] != NULL) {
            $this -> db -> like($condition[LIKE_CONDITION]);
        }
        if (isset($condition[LIMIT_CONDITION]) && $condition[LIMIT_CONDITION] != NULL) {
            $this -> db -> limit($condition[LIMIT_CONDITION][LIMIT], $condition[LIMIT_CONDITION][OFFSET]);
        }
        if (isset($condition[DATE_CONDITION]) && $condition[DATE_CONDITION] != NULL) {
            $start_time_type = gettype($condition[DATE_CONDITION][START_TIME]);
            $end_time_type = gettype($condition[DATE_CONDITION][END_TIME]);
            $date_col_prfix =  $date_col_prefix.$condition[DATE_CONDITION][DATE_CONDITION_COLUMN];
            if ($start_time_type == $end_time_type) {
                if ($start_time_type == 'integer') {
                    if ($condition[DATE_CONDITION][END_TIME] > $condition[DATE_CONDITION][START_TIME]) {
                        $this -> db -> where( $date_col_prfix. " >=", $condition[DATE_CONDITION][START_TIME]);
                        $this -> db -> where( $date_col_prfix. " <=", $condition[DATE_CONDITION][END_TIME]);
                    }
                } else if ($start_time_type == 'string') {
                    if (strtotime($condition[DATE_CONDITION][END_TIME]) > strtotime($condition[DATE_CONDITION][START_TIME])) {
                        $this -> db -> where( $date_col_prfix. " >=", strtotime($condition[DATE_CONDITION][START_TIME]));
                        $this -> db -> where( $date_col_prfix. " <=", strtotime($condition[DATE_CONDITION][END_TIME]));
                    }
                }
            }
        }
        if (isset($condition[GROUP_BY_CONDITION]) && $condition[GROUP_BY_CONDITION] != NULL) {
            $this -> db -> group_by($condition[GROUP_BY_CONDITION]);
        }
        if (isset($condition[ORDER_BY_CONDITION]) && $condition[ORDER_BY_CONDITION] != NULL) {
            $this -> db -> order_by($condition[ORDER_BY_CONDITION]);
        }
        return $this -> db -> count_all_results();
    }
    
    function insert($data, $table_name = "") {
        if ($table_name == "")
            $table_name = $this -> table;
        $this -> db -> insert($table_name, $data);
        //log_message("error", "\n 쿼리 ====> \n". $this -> db -> last_query());
        return $this -> db -> insert_id();
    }

    function insert_batch($batch_data_array, $table_name = '') {
        if ($table_name == "")
            $table_name = $this -> table;
        
        if (count($batch_data_array[0]) < 0) {
            return $this -> insert($batch_data_array);

        }
        //log_message("error", "\n 쿼리 ====> \n". $this -> db -> last_query());
        $this -> db -> insert_batch($table_name, $batch_data_array);
    }

    function update($data, $conditions, $table_name = "") {
        if ($table_name == "")
            $table_name = $this -> table;

        if (isset($conditions[WHERE_CONDITION]) && $conditions[WHERE_CONDITION] != NULL) {
            $this -> db -> where($conditions[WHERE_CONDITION]);
        }

        $this -> db -> update($table_name, $data);
        //log_message("error", "\n 쿼리 ====> \n". $this -> db -> last_query());
        return $this -> db -> affected_rows();
    }
    
    function update_batch($data, $where_key, $table_name =""){
        if ($table_name == "")
            $table_name = $this -> table;
        $this -> db -> update_batch($table_name, $data, $where_key); 
        return $this -> db -> affected_rows();
    }

    function delete($conditions, $table_name = "") {
        if ($table_name == "")
            $table_name = $this -> table;

        if (isset($conditions[WHERE_CONDITION]) && $conditions[WHERE_CONDITION] != NULL) {
            $this -> db -> where($conditions[WHERE_CONDITION]);
        }

        $this -> db -> delete($table_name);
          //log_message("error", "\n 쿼리 ====> \n". $this -> db -> last_query());
        return $this -> db -> affected_rows();
    }

    function deleteAll($table_name = '') {
        if ($table_name == "")
            $table_name = $this -> table;
        $this -> db -> empty_table($table_name);
    }
    
    function sum($column,$alias, $condition = NULL,$table_name = ""){
            
        $this->db->stop_cache();    
        $this->db->cache_off();
        $this->db->cache_delete();
      
        if ($table_name == "")
            $table_name = $this -> table;
        
        $this -> db -> from($table_name);
        $this -> db -> select_sum($column, $alias);

        if ($condition == NULL) {
            $query = $this -> db -> get();
            return $query -> result();
        }
        
        $date_col_prefix= '';
        if (isset($condition[JOIN_CONDITION]) && $condition[JOIN_CONDITION] != NULL) {
            $date_col_prefix = $table_name.'.';
            
            $join_conditions = $condition[JOIN_CONDITION];
            foreach($join_conditions as $join_condition){
                $this -> db -> join(
                    $join_condition[JOIN_CONDITION_TABLE],
                    $join_condition[JOIN_CONDITION_STATE],
                    $join_condition[JOIN_CONDITION_DIRECT]
                );
            }
        }
        if (isset($condition[WHERE_CONDITION]) && $condition[WHERE_CONDITION] != NULL) {
            $this -> db -> where($condition[WHERE_CONDITION]);
        }
        if (isset($condition[LIKE_CONDITION]) && $condition[LIKE_CONDITION] != NULL) {
            $this -> db -> like($condition[LIKE_CONDITION]);
        }
        if (isset($condition[DATE_CONDITION]) && $condition[DATE_CONDITION] != NULL) {
            $start_time_type = gettype($condition[DATE_CONDITION][START_TIME]);
            $end_time_type = gettype($condition[DATE_CONDITION][END_TIME]);
            $date_col_prfix =  $date_col_prefix.$condition[DATE_CONDITION][DATE_CONDITION_COLUMN];
            if ($start_time_type == $end_time_type) {
                if ($start_time_type == 'integer') {
                    if ($condition[DATE_CONDITION][END_TIME] > $condition[DATE_CONDITION][START_TIME]) {
                        $this -> db -> where( $date_col_prfix. " >=", $condition[DATE_CONDITION][START_TIME]);
                        $this -> db -> where( $date_col_prfix. " <=", $condition[DATE_CONDITION][END_TIME]);
                    }
                } else if ($start_time_type == 'string') {
                    if (strtotime($condition[DATE_CONDITION][END_TIME]) > strtotime($condition[DATE_CONDITION][START_TIME])) {
                        $this -> db -> where( $date_col_prfix. " >=", strtotime($condition[DATE_CONDITION][START_TIME]));
                        $this -> db -> where( $date_col_prfix. " <=", strtotime($condition[DATE_CONDITION][END_TIME]));
                    }
                }
            }
        }
        $query = $this -> db -> get();
        //$this -> log_query($table_name);
        return $query -> row();
    }
    
    public function log_query($table_name){
        log_message('error',$table_name.' query start ##########################################################');
        log_message('error',$this -> db -> last_query());
        log_message('error',$table_name.' query finished ##################################################################');
    }
    
    /* sql 쿼리를 사용하는 질의문 select */
    function raw_binding_query($query_str, $arr = NULL){
        $query = NULL;    
        if ($arr == NULL){
            $query = $this -> db -> query($query_str);
        }else {
            $query = $this -> db -> query($query_str, $arr);
        }
        $query = $this -> db -> query($query_str, $arr);
        //log_message('error', $this -> db -> last_query());
        return $query -> result();
    }
    
       /* sql 쿼리를 사용하는 질의문 select */
    function raw_binding_query_array($query_str, $arr = NULL){
        $query = NULL;    
        if ($arr == NULL){
            $query = $this -> db -> query($query_str);
        }else {
            $query = $this -> db -> query($query_str, $arr);
        }
        $query = $this -> db -> query($query_str, $arr);
        //log_message('error', $this -> db -> last_query());
        return $query -> result_array();
    }
    
    /* sql 쿼리를 사용하는 질의문 insert, update, delete 에 사용 */
    function raw_binding($query_str, $arr){
        $query = $this -> db -> query($query_str, $arr);
    }
}
