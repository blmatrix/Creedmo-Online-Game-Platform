<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Coupon_service {
    public $CI;
    public $message; 
    public function __construct(){
        $this -> CI  = & get_instance();
    }
    
    public function get_message(){
        return $this -> message;
    }
   /*
    * 쿠폰을 통한 입금 처리
    */
    public function coupon_deposit($user_no,$coupon_no,$transfer_to, $target_status) {
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> model('admin/coupon');
        $this -> CI -> load -> library('transfer_service');
      
        $coupon_cond[WHERE_CONDITION] = array('coupon_no' => $coupon_no);
        $coupon = $this -> CI -> coupon -> advanced_search_row($coupon_cond);
        
        $user_cond[WHERE_CONDITION] = array('user_no' => $user_no);
        $user = $this -> CI -> user -> advanced_search_row($user_cond);        
        
        $data = array(
            'user_no' => $user -> user_no,
            'transfer_amount' => $coupon -> coupon_point,
            'transfer_from'  => 'WALLET',
            'transfer_to' => ($transfer_to == VENDER_MG ? "MG":"PT"),
            'mg_id' => $user -> mg_id,
            'pt_id' => $user -> pt_id
        );
        
        $result = FALSE;
        if ($transfer_to == VENDER_PT){
            $result  = $this -> CI ->  transfer_service -> transfer_to_pt($data);  
        }else if ($transfer_to == VENDER_MG){
            $result  = $this -> CI -> transfer_service -> transfer_to_mg($data);
        }
        if (!$result){
            $this -> message  = $this -> CI -> transfer_service -> get_message();
            return FALSE;
        }
        
        /*
         * 해당 쿠폰의 상태를   $target_status로 변경하고, 사용시간을 갱신
         */
        $coupon_update_arr = array(
            'transfer_to' => $transfer_to,
            'coupon_use_status' => $target_status, 
            'use_date' => time()
        );
        $this -> CI -> coupon -> update($coupon_update_arr, $coupon_cond);
        return TRUE;
    }

   /*
    * 쿠폰 코드 생성 
    */
    public function generate_coupon_uuid() {}

   /*
    * 쿠폰 코드 유효성 검증 
    */
    public function validate_counpon_uuid() {}
    
}
