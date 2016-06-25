<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require (dirname(__FILE__) . '/' . 'Deps_info.php');

class Profit_report_vo {
    public $day;
    public $total_deposit_amount;
    public $total_withdraw_amount;
    public $total_deposit_bonus;
    public $total_coupon_point;
    public $total_acc_comp_point;
    public $total_settlement_amount;
        
    public function __construct() {
      $this -> day = '';
      $this -> total_deposit_amount = 0;
      $this -> total_withdraw_amount = 0;
      $this -> deposit_bonus = 0;
      $this -> total_coupon_point = 0;
      $this -> total_acc_comp_point = 0;
      $this -> total_affiliate_amount = 0;
    }
    
    public function profit(){
        return $this -> total_deposit_amount - 
                $this -> total_withdraw_amount -
                $this -> total_deposit_bonus -
                $this -> total_acc_comp_point -
                $this -> total_coupon_point -
                $this -> total_settlement_amount ;
    }
    
    public function margin(){
        if ($this -> total_deposit_amount == 0){
            return $this -> profit();
        }
        return ($this -> profit() / $this -> total_deposit_amount) * 100; 
    }
}
