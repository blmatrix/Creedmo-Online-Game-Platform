<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deps_info {
    public $user_no;
    public $user_id;
    
    public $total_slots;    
    public $total_non_slots; 
    public $total_live; 
    
    public $total_bet;
    public $total_payout;
    public $total_win;
    public $total_income;

    public $total_coupon_point;
    public $total_deposit_bonus;
    public $affiliate_ref;
    public $affiliate_id;
    public $rate_arr;
     
    public function __construct(){
        $this -> user_no= 0;
        $this -> user_id = NULL;
        
        $this -> total_slots = 0;
        $this -> total_non_slots = 0;
        $this -> total_live = 0;
        
        $this -> total_bet = 0;
        $this -> total_payout = 0;
        $this -> total_win = 0;
        $this -> total_income = 0;
        
        $this -> total_coupon_point  = 0;
        $this -> total_deposit_bonus = 0;
        $this -> affiliate_ref = 0; 
        $this -> affiliate_id = 0; 
        $this -> rate_arr = NULL;
        $this -> bonus_rate = 0; 
    }
    
    public function total(){
        return ($this -> total_slots + $this -> total_non_slots +
               $this -> total_live) ;
               
    }
    
    public function total_commission(){
        return ($this -> total_slots * $this-> rate_arr['slots_trans_rate'] + 
            $this -> total_non_slots * $this-> rate_arr['non_slots_trans_rate'] + 
            $this -> total_live * $this-> rate_arr['live_trans_rate']) -
            (($this -> total_coupon_point + $this -> total_deposit_bonus ) * $this-> rate_arr['bonus_trans_rate'] );
    }
    
    public function total_commission_by_game(){
        return ($this -> total_slots * $this-> rate_arr['slots_trans_rate'] + 
            $this -> total_non_slots * $this-> rate_arr['non_slots_trans_rate'] + 
            $this -> total_live * $this-> rate_arr['live_trans_rate']);
        
    }
    
}
