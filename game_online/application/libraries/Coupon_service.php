<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Coupon_service {
    public $CI;
    public function __construct(){
        $this -> CI  = & get_instance();
    }

   /*
    * 쿠폰을 통한 입금 처리
    */
    public function coupon_deposit($user_no, $coupon_no, $target_status,&$ret_message) {
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> model('admin/coupon');
      
        $condition[WHERE_CONDITION] = array('coupon_no' => $coupon_no);
        $coupon = $this -> CI -> coupon -> advanced_search_row($condition);
       
        /*
         * 쿠폰 입금과 관련하여 Wallet을 적용한다.
         * 쿠폰으로 입금하는 경우, wallet balance 만 갱신함
         */
        $sql ="
            UPDATE wallet 
            SET 
                wallet_balance = wallet_balance + ?
            WHERE 
                user_no = ? 
        ";
        $wallet_binding = array( $coupon -> coupon_point , $user_no);
        $this -> CI -> wallet -> raw_binding($sql, $wallet_binding); 
       
        /*
         * 해당 쿠폰의 상태를   $target_status로 변경하고, 사용시간을 갱신
         */
        $coupon_update_arr = array(
            'coupon_use_status' => $target_status, 
            'use_date' => time()
        );
        $this -> CI -> coupon -> update($coupon_update_arr, $condition);
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
