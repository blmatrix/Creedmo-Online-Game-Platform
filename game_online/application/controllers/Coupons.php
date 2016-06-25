<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Coupons extends Application{
    public function __construct(){
        parent::__construct();  
        $this -> check_session();         
    }
    
    private function __set_side_menu_index(&$data){
        $data['side_index'] = 'coupons';    
    }
     
    public function index(){
        $this -> load -> library('session_manager');
        $this -> load -> library('user_agent');
        $this -> load -> library('template_generator');
        
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
        $this -> load -> helper('time');
        
        $this -> load -> model('admin/customer_service');
        $this -> load -> model('/admin/user');
        $this -> load -> model('/admin/coupon');
        
        $data = array();
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        $this -> __set_side_menu_index($data);
        
        $user_id = $this -> session_manager -> get_user_session('user_id');
        $user_no = $this -> session_manager -> get_user_session('user_no');
        
        $condition[SELECT_CONDITION] = "
            user.user_no as user_no,
            user.user_id as user_id,
            user_level.user_level_code_name,
            
            coupon.coupon_no as coupon_no,
            coupon.coupon_uuid as coupon_uuid,
            coupon.coupon_point as coupon_point,
            coupon.coupon_use_status as coupon_use_status,
            coupon.publisher as coupon_publisher,
            coupon.auth_required as auth_required,
            coupon.reg_date as reg_date,
            coupon.use_date as use_date,
            
            coupon_type.coupon_type_no as coupon_type_no,
            coupon_type.coupon_type_code as coupon_type_code,
            coupon_type.coupon_des as coupon_des,
            coupon_type.publisher as coupon_type_publisher,
            coupon_type.coupon_type_name as coupon_type_name
        ";   
        
        $condition[WHERE_CONDITION] = array(
            'user.user_no' => $user_no
            
        );

        $condition[JOIN_CONDITION][] = array(
            JOIN_CONDITION_TABLE => "user",
            JOIN_CONDITION_STATE => 'coupon.user_no = user.user_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION][] = array(
            JOIN_CONDITION_TABLE => "coupon_type",
            JOIN_CONDITION_STATE => 'coupon.coupon_type_no = coupon_type.coupon_type_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION][] = array(
            JOIN_CONDITION_TABLE => "user_level",
            JOIN_CONDITION_STATE => 'user.user_level_no = user_level.user_level_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[ORDER_BY_CONDITION] = "reg_date DESC";
        
       // $data['rows'] = $this -> coupon -> advanced_search_result($condition);
        $this -> load -> view('front/coupon/coupons',$data);
    }
    
    /*
     * 쿠폰의 상태를 변경 (Call by Ajax request)
     */
     
    public function change_coupon_status(){
      $this -> load -> helper('location');
      $this -> load -> model('admin/coupon');
      $this -> load -> library('coupon_service');
      
      $user_id = $this -> session_manager -> get_user_session('user_id');
      $user_no = $this -> session_manager -> get_user_session('user_no');
        
      $coupon_no = $this -> input -> post('coupon');
      $target_status = $this -> input -> post('target_status', TRUE);
      
      $condition[WHERE_CONDITION] = array(
        'coupon_no' => $coupon_no
      );
      
      $data = array();
      $row = $this -> coupon -> advanced_search_row($condition);
      $ret_message = '';
      
      if (empty($row)){
          $data['result']  = 'fail';
          $data['message'] = 'Wrong Access';
      }else {
          $res = $this -> coupon_service -> coupon_deposit($user_no, $coupon_no,$target_status, $ret_message);
          if ($res){
             $data['result']  = 'success'; 
          }else {
             $data['result']  = 'fail'; 
             $data['message']  = $ret_message; 
          }
      }
      $this -> session -> set_flashdata('tab', 'coupons');
      echo json_encode($data);
    }
}
