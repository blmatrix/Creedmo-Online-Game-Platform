<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';
/*
 * User 의 Ajax 요청 통합 controller
 */
 
class Ba_contents extends Application{
        
    public function __construct(){
        parent::__construct();   
        $this -> load -> library('paging');
        $this -> load -> helper('time');
        $this -> check_session();    
    }
    
    
    public function list_contents($content_type ='',$page = 1){
        $this -> user_no = $this -> check_session();
        $data = '';
        //log_message('error',$content_type );
        //log_message('error',$page);
        switch($content_type){
            /*
             *적림된 comp point list
             */ 
            case "acc_comp_list":
                $data = $this -> __get_acc_comp_list($page);
                break;

            /*
             *Convert comp point list
             */ 
            case "convert_comp_list":
                $data = $this -> __get_convert_comp_list($page);
                break;
                
           /*
            *Convert comp point list
            */ 
            case "coupon_list":
                $data = $this -> __get_coupon_list($page);
                break;
                
           /*
            *Convert comp point list
            */ 
            case "used_coupon_list":
                $data = $this -> __get_used_coupon_list($page);
                break;
            
        }
        $this->output->set_output($data);
    }
    
    private function __get_acc_comp_list($page){
        $this -> load -> model('admin/game_play');
        $user_id = $this -> session_manager -> get_user_session('user_id');
        $search_user_id = strtolower($user_id);
        $sql = "
            SELECT 
                COUNT(DISTINCT DATE_FORMAT(FROM_UNIXTIME(play_date_int), '%Y-%m-%d')) as list_total_count 
            FROM 
                game_play
            where 
                substr(player_name,5) = ? 
        ";
        $query_binding = array($search_user_id);
        $query  = $this -> game_play-> raw_binding_query($sql,$query_binding);        
        $data['list_count'] = $query[0] -> list_total_count;
        
        $this -> paging -> SCALE = 10;
        $this -> paging -> GROUP = 10;
        $this -> paging -> TOTAL_CNT =  $data['list_count'];
        $this -> paging -> setVariableFromGet($this -> input -> get());
        $this -> paging -> BOARD_TYPE ="acc_comp_list";
        
        $this -> paging -> setPage($page);
        $data['pagination'] = $this -> paging;
         
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
            LIMIT ?,?
        ";
        $query_binding = array($search_user_id , $this -> paging -> START_ROW, $this -> paging -> SCALE );         
        $data['rows']  = $this -> game_play -> raw_binding_query($sql, $query_binding);       
        //log_message('error',print_r($data, TRUE));
        $view_name = $this -> set_view_name('accumulate_comp_list');
        return $this -> load -> view("front/template/board/{$view_name}",$data, TRUE);
        
    }
    
    private function __get_convert_comp_list($page){
        $this -> load -> model('admin/user_level');
        $this -> load -> model('/admin/comp_point_convert');
        
        /*
         * Comp point convert History
         * */
         
        $sql = "
            SELECT 
                count(*) AS list_total_count
            FROM 
                comp_point_convert
            INNER JOIN user_level ON user_level.user_level_no = comp_point_convert.apply_user_level
            WHERE comp_point_convert.user_no = ? 
            ORDER BY comp_point_convert.reg_date DESC
        ";
        $query_binding = array($this -> user_no);
        $query = $this -> comp_point_convert -> raw_binding_query($sql,$query_binding);
        $data['list_count'] = $query[0] -> list_total_count;
        
        $this -> paging -> SCALE = 10;
        $this -> paging -> GROUP = 10;
        $this -> paging -> TOTAL_CNT =  $data['list_count'];
        $this -> paging -> setVariableFromGet($this -> input -> get());
        $this -> paging -> BOARD_TYPE ="convert_comp_list";
        $this -> paging -> setPage($page);
        
        $data['pagination'] = $this -> paging;
         
        $sql = "
            SELECT 
                user_level.user_level_code_name AS user_level_code_name,
                user_level.conversion_1cny_rate AS convert_rate,
                comp_point_convert.*
            FROM 
                comp_point_convert
            INNER JOIN user_level ON user_level.user_level_no = comp_point_convert.apply_user_level
            WHERE user_no = ? 
            ORDER BY comp_point_convert.reg_date DESC
            LIMIT ?,?
        ";
        $query_binding = array($this -> user_no,$this -> paging -> START_ROW,$this -> paging -> SCALE);
        $data['rows'] = $this -> comp_point_convert -> raw_binding_query($sql,$query_binding);
        
        //log_message('error',print_r($data, TRUE));
        $view_name = $this -> set_view_name('convert_comp_list');
        return $this -> load -> view("front/template/board/{$view_name}",$data, TRUE);
        
    }
    
    public function __get_coupon_list($page){
         $this -> load -> library('session_manager');
         $this -> load -> model('admin/coupon');
         $user_id = $this -> session_manager -> get_user_session('user_id');
         $user_no = $this -> session_manager -> get_user_session('user_no');
   
         $sql = "
            SELECT 
                count(*) as coupon_list_count
            FROM 
                coupon 
            INNER JOIN user 
                on coupon.user_no = user.user_no 
            INNER JOIN coupon_type 
                on coupon.coupon_type_no = coupon_type.coupon_type_no
            INNER JOIN user_level 
                on coupon.apply_level = user_level.user_level_no
            WHERE 
                coupon.user_no = ? AND coupon.coupon_use_status NOT IN (?)
            ORDER BY 
                coupon.reg_date DESC;
         "
         ;
        $query_binding = array(
           $user_no, COUPON_USE_STATUS_USED
        );
        $query = $this -> coupon -> raw_binding_query($sql, $query_binding);
        $row_count = $query[0] -> coupon_list_count;
        //log_message('error',$row_count);
        $this -> paging -> SCALE = 10;
        $this -> paging -> GROUP = 10;
        $this -> paging -> TOTAL_CNT =  $row_count;
        $this -> paging -> setVariableFromGet($this -> input -> get());
        $this -> paging -> BOARD_TYPE = 'coupon_list';
        $this -> paging -> setPage($page);
        
        $sql = "
            SELECT 
                coupon.*, 
                coupon_type.coupon_type_name AS coupon_type_name, 
                coupon_type.coupon_type_code AS coupon_type_code, 
                coupon_type.coupon_des AS coupon_des 
            FROM coupon 
            INNER JOIN user on coupon.user_no = user.user_no 
            INNER JOIN coupon_type on coupon.coupon_type_no = coupon_type.coupon_type_no
            INNER JOIN user_level on coupon.apply_level = user_level.user_level_no
            WHERE coupon.user_no = ? AND coupon.coupon_use_status NOT IN  ( ? )
            ORDER BY coupon.reg_date DESC
            LIMIT ?, ?
         "
         ;
        
        $query_binding[] = $this -> paging -> START_ROW;
        $query_binding[] = $this -> paging -> SCALE;
        $data['pagination'] = $this -> paging;
        
        $data['rows'] = $this -> coupon -> raw_binding_query($sql, $query_binding);
        $view_name = $this -> set_view_name("coupon_list");
        return $this -> load -> view("front/template/board/{$view_name}",$data, TRUE);
    }
    
    public function __get_used_coupon_list($page){
         $this -> load -> library('session_manager');
         $this -> load -> model('admin/coupon');
         $user_id = $this -> session_manager -> get_user_session('user_id');
         $user_no = $this -> session_manager -> get_user_session('user_no');
   
         $sql = "
            SELECT count(*) as coupon_list_count
            FROM coupon 
            INNER JOIN user on coupon.user_no = user.user_no 
            INNER JOIN coupon_type on coupon.coupon_type_no = coupon_type.coupon_type_no
            INNER JOIN user_level on coupon.apply_level = user_level.user_level_no
            WHERE coupon.user_no = ? AND coupon.coupon_use_status IN  ( ? )
            ORDER BY coupon.reg_date DESC
         "
         ;
        $query_binding = array(
           $user_no, COUPON_USE_STATUS_USED
        );
        $query = $this -> coupon -> raw_binding_query($sql, $query_binding);
        $row_count = $query[0] -> coupon_list_count;
        //log_message('error',$row_count);
        $this -> paging -> SCALE = 10;
        $this -> paging -> GROUP = 10;
        $this -> paging -> TOTAL_CNT =  $row_count;
        $this -> paging -> setVariableFromGet($this -> input -> get());
        $this -> paging -> BOARD_TYPE = 'used_coupon_list';
        $this -> paging -> setPage($page);
        
        $sql = "
            SELECT 
                coupon.*,
                coupon_type.coupon_type_name AS coupon_type_name, 
                coupon_type.coupon_type_code AS coupon_type_code, 
                coupon_type.coupon_des AS coupon_des,
                user_level.user_level_code_name AS user_level_code_name
            FROM coupon 
            INNER JOIN user on coupon.user_no = user.user_no 
            INNER JOIN coupon_type on coupon.coupon_type_no = coupon_type.coupon_type_no
            INNER JOIN user_level on coupon.apply_level = user_level.user_level_no
            WHERE coupon.user_no = ? AND coupon.coupon_use_status  IN  ( ? )
            ORDER BY coupon.reg_date DESC
            LIMIT ?, ?
         "
         ;
         
        $query_binding[] = $this -> paging -> START_ROW;
        $query_binding[] = $this -> paging -> SCALE;
        $data['pagination'] = $this -> paging;
        
        $data['rows'] = $this -> coupon -> raw_binding_query($sql, $query_binding);
        $view_name = $this -> set_view_name("used_coupon_list");
        return $this -> load -> view("front/template/board/{$view_name}",$data, TRUE);
    }
}
 