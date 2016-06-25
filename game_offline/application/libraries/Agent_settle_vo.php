<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require (dirname(__FILE__) . '/' . 'Deps_info.php');
/*
 * 
 *  정산받을 AGENT 를 의미하며, 각 Agent_settle_vo는 멤버로 1뎁스, 2뎁스 회원들의 수익 목록을 
 *  가지게 되며, 이 목록을 통하여, 실제 Agent 가 정산받을 금액을 계산하게 된다.
 * 
 * */
class Agent_settle_vo {
    public $user_no;
    public $user_id;
    public $agent_code;
    public $deps1_child_count;
    public $deps2_child_count;
    
    public $deps1_apply_level;
    public $deps2_apply_level;
    public $login_status;
    
    //1뎁스 액티브 유저 수 
    public $deps1_active_child_count;
    //2뎁스 액티브 유저 수 
    public $deps2_active_child_count;

    public $month;
    //1뎁스 회원들의 모든 게임 타입의 토탈 커미션
    public $deps1_total_commission;
    //2뎁스 회원들의 모든 게임 타입의 토탈커미션 
    public $deps2_total_commission;
    
    //1뎁스 와 2뎁스의 토탈 커미션을 합한 금액
    public $total_commission;

    //1뎁스의 슬롯 게임 수수료율
    public $deps1_slots_trans_rate;    
    //1뎁스의 넌슬롯 게임 수수료율
    public $deps1_non_slots_trans_rate;    
    //1뎁스별 라이브게임 수수료율
    public $deps1_live_trans_rate;    
    
    //위와 동일
    public $deps2_slots_trans_rate;    
    public $deps2_non_slots_trans_rate;    
    public $deps2_live_trans_rate;  
    
    //1뎁스 회원들의 모든 게임 타입 수익 총액
    public $deps1_total_amount;
    //2뎁스 회원들의 모든 게임 타입 총액
    public $deps2_total_amount;
    
    //뎁스별 게임 정보 배열
    public $deps1_info_arr;
    public $deps2_info_arr;
        
    public function __construct() {
        $this -> user_no = 0;
        $this -> user_id = NULL;
        $this -> agent_code = NULL;
        $this -> deps1_child_count = 0;
        $this -> deps2_child_count = 0;
        
        $this -> deps1_active_child_count = 0;
        $this -> deps2_active_child_count = 0;
        $this -> deps1_info_arr = array();
        $this -> deps2_info_arr = array();
        
        $this -> month = NULL;
        $this -> commission = 0;
        $this -> deps1_total_commission = 0; 
        $this -> deps2_total_commission = 0;
        $this -> total_commission = 0; 
        $this -> deps1_slots_trans_rate = 0;
        $this -> deps1_non_slots_trans_rate = 0;
        $this -> deps1_live_trans_rate = 0;
        $this -> deps2_slots_trans_rate = 0;
        $this -> deps2_non_slots_trans_rate = 0;
        $this -> deps2_live_trans_rate = 0;
        $this -> deps1_total_amount = 0;
        $this -> deps2_total_amount = 0;
        $this -> login_status = LOGIN_STATUS_N;
    }
    
    public function calculate_commission($deps1_policies,$deps2_policies ){
        $d1_slots_total = 0;
        $d1_non_slots_total= 0;
        $d1_live_total = 0;
        $d1_income_total = 0; 
        $d1_coupon = 0; 
        $d1_bonus = 0; 
        
        $d2_slots_total = 0;
        $d2_non_slots_total= 0;
        $d2_live_total = 0;
        $d2_income_total = 0; 
        $d2_coupon = 0; 
        $d2_bonus = 0;  

        /*
         * 1 deps 게임 별 총액을 구함
         * */
        foreach($this -> deps1_info_arr as &$deps1_info){
            $d1_slots_total     +=  $deps1_info -> total_slots;    
            $d1_non_slots_total +=  $deps1_info -> total_non_slots;    
            $d1_live_total      +=  $deps1_info -> total_live;
            $d1_income_total    +=  $deps1_info -> total_income;
            $d1_coupon          +=  $deps1_info -> total_coupon_point;
            $d1_bonus           +=  $deps1_info -> total_deposit_bonus;
        }
        $this -> deps1_total_amount =   $d1_slots_total + $d1_non_slots_total + $d1_live_total;     
        
        /*
         * 2 deps 게임 별 총액을 구함
         * 
         */
        foreach($this -> deps2_info_arr as &$deps2_info){
            $d2_slots_total     +=  $deps2_info -> total_slots;    
            $d2_non_slots_total +=  $deps2_info -> total_non_slots;    
            $d2_live_total      +=  $deps2_info -> total_live;    
            $d2_income_total    +=  $deps2_info -> total_income;
            $d2_coupon          +=  $deps2_info -> total_coupon_point;
            $d2_bonus           +=  $deps2_info -> total_deposit_bonus;
        }
        $this -> deps2_total_amount =   $d2_slots_total + $d2_non_slots_total + $d2_live_total ;   
        
        //뎁스별 총액을 기준으로 뎁스별에서 게임타입별 수수료을 계산 
        $this -> set_trans_rate1($deps1_policies);
        $this -> set_trans_rate2($deps2_policies);
        
        foreach($this -> deps1_info_arr as &$deps1_info){
            $deps1_info -> rate_arr = array(
                'slots_trans_rate'     => $this -> deps1_slots_trans_rate,
                'non_slots_trans_rate' => $this -> deps1_non_slots_trans_rate,
                'live_trans_rate'      => $this -> deps1_live_trans_rate,
                'bonus_trans_rate'     => $this -> get_bonus_rate(1)
            );
        }
        
        foreach($this -> deps2_info_arr as $deps2_info){
            $deps2_info -> rate_arr = array(
                'slots_trans_rate'     => $this -> deps2_slots_trans_rate,
                'non_slots_trans_rate' => $this -> deps2_non_slots_trans_rate,
                'live_trans_rate'      => $this -> deps2_live_trans_rate,
                'bonus_trans_rate'     => $this -> get_bonus_rate(2)
            );
        }

        /*
         * 1 deps 게임 별 총액에 수수료율을 적용하여 1뎁스 최종 커미션 구함 
         * */
        $this -> deps1_total_commission = 
            ($d1_slots_total * $this -> deps1_slots_trans_rate) + 
            ($d1_non_slots_total * $this -> deps1_non_slots_trans_rate) + 
            ($d1_live_total * $this -> deps1_live_trans_rate ) -
            (($d1_coupon + $d1_bonus) * $this -> get_bonus_rate(1));
        
        /*
         * 2 deps 게임 별 총액에 수수료율을 적용하여 2뎁스 최종 커미션 구함 
         * */
        $this -> deps2_total_commission = 
            ($d2_slots_total * $this -> deps2_slots_trans_rate) + 
            ($d2_non_slots_total * $this -> deps2_non_slots_trans_rate) + 
            ($d2_live_total * $this -> deps2_live_trans_rate)-
            (($d2_coupon + $d2_bonus) * $this -> get_bonus_rate(2) );

        $this -> total_commission = $this -> deps1_total_commission + $this -> deps2_total_commission;
    }
    
    public function set_trans_rate1($deps_policies){
        //1deps 의 각 타입별 게임 수수료를 구함
        $is_select   = FALSE;
        $select_deps = NULL;
        $deps_count = count($deps_policies); 
        for($i = 0 ; $i < $deps_count ; $i++ ){
            if ($i == $deps_count - 1){
                if ($this -> deps1_active_child_count >= $deps_policies[$i] -> activate_players1_count && 
                        $this -> deps1_total_amount >= $deps_policies[$i] -> amount_range1){
                   $choose_deps = TRUE;
                   $select_deps = $deps_policies[$i];
                   break;  
                }
            }else {
                if (
                     (
                         $this -> deps1_active_child_count >= $deps_policies[$i] -> activate_players1_count &&
                         $this -> deps1_active_child_count <= $deps_policies[$i] -> activate_players2_count  
                     )
                        &&
                     (
                        $this -> deps1_total_amount >= $deps_policies[$i] -> amount_range1 &&   
                        $this -> deps1_total_amount <= $deps_policies[$i] -> amount_range2   
                     )     
                   )
                {
                    $choose_deps = TRUE;
                    $select_deps = $deps_policies[$i];
                    break;                   
                }    
            }
        }
        
        if ($is_select){
            $this -> deps1_apply_level = $select_deps ;
            $this -> deps1_slots_trans_rate      = $select_deps -> slot_percentage / 100; 
            $this -> deps1_non_slots_trans_rate  = $select_deps -> non_slot_percentage / 100; 
            $this -> deps1_live_trans_rate       = $select_deps -> live_percentage / 100; 
            return;
        }
       
        $s_deps_by_amount = NULL;
        $s_deps_by_user   = NULL;
        
        //금액 기준으로 뎁스를 추출
        for($i = 0 ; $i < $deps_count; $i++ ){
            if ($i == $deps_count - 1){
                if ($this -> deps1_total_amount >= $deps_policies[$i] -> amount_range1){
                  $s_deps_by_amount = $deps_policies[$i];
                  break;    
                }
            }else {
                if($this -> deps1_total_amount >= $deps_policies[$i] -> amount_range1 &&  
                    $this -> deps1_total_amount <= $deps_policies[$i] -> amount_range2){
                    $s_deps_by_amount = $deps_policies[$i];
                    break;          
                }    
            }    
        }
        
        //액티브 유저 기준으로 뎁스를 추출
        for($i = 0 ; $i < $deps_count; $i++ ){
            if ($i == $deps_count - 1){
                if ($this -> deps1_active_child_count >= $deps_policies[$i] -> activate_players1_count){
                    $s_deps_by_amount = $deps_policies[$i];
                    break;    
                }
            }else {
                if( $this -> deps1_active_child_count >= $deps_policies[$i] -> activate_players1_count &&
                    $this -> deps1_active_child_count <= $deps_policies[$i] -> activate_players2_count){
                    $s_deps_by_user = $deps_policies[$i];
                    break;          
                }    
            }       
        }
        
        if (!$s_deps_by_amount){
            $select_deps = $deps_policies[0] ;
            $this -> deps1_apply_level = $select_deps ;
        }else {
            if ($s_deps_by_amount -> deps1_commission_policy_no  <   $s_deps_by_user -> deps1_commission_policy_no){
                $select_deps = $s_deps_by_amount;
                $this -> deps1_apply_level = $select_deps ;
            }else {
                $select_deps = $s_deps_by_user;
                $this -> deps1_apply_level = $select_deps ;
            }
        }
        
        $this -> deps1_slots_trans_rate      = $select_deps -> slot_percentage / 100; 
        $this -> deps1_non_slots_trans_rate  = $select_deps -> non_slot_percentage / 100; 
        $this -> deps1_live_trans_rate       = $select_deps -> live_percentage / 100; 
        return;
    }

    public function set_trans_rate2($deps_policies){
        //1deps 의 각 타입별 게임 수수료를 구함
        $is_select   = FALSE;
        $select_deps = NULL;
        $deps_count = count($deps_policies); 
        for($i = 0 ; $i < $deps_count ; $i++ ){
            if ($i == $deps_count - 1){
                if ($this -> deps2_active_child_count >= $deps_policies[$i] -> activate_players1_count && 
                        $this -> deps2_total_amount >= $deps_policies[$i] -> amount_range1){
                   $choose_deps = TRUE;
                   $select_deps = $deps_policies[$i];
                   break;  
                }
            }else {
                if (
                     (
                         $this -> deps2_active_child_count >= $deps_policies[$i] -> activate_players1_count &&
                         $this -> deps2_active_child_count <= $deps_policies[$i] -> activate_players2_count  
                     )
                        &&
                     (
                        $this -> deps2_total_amount >= $deps_policies[$i] -> amount_range1 &&   
                        $this -> deps2_total_amount <= $deps_policies[$i] -> amount_range2   
                     )     
                   )
                {
                    $choose_deps = TRUE;
                    $select_deps = $deps_policies[$i];
                    break;                   
                }    
            }
        }
        
        if ($is_select){
            $this -> deps2_apply_level = $select_deps ;
            $this -> deps2_slots_trans_rate      = $select_deps -> slot_percentage / 100; 
            $this -> deps2_non_slots_trans_rate  = $select_deps -> non_slot_percentage / 100; 
            $this -> deps2_live_trans_rate       = $select_deps -> live_percentage / 100; 
            return;
        }
       
        $s_deps_by_amount = NULL;
        $s_deps_by_user   = NULL;
        
        //금액 기준으로 뎁스를 추출
        for($i = 0 ; $i < $deps_count; $i++ ){
            if ($i == $deps_count - 1){
                if ($this -> deps2_total_amount >= $deps_policies[$i] -> amount_range1){
                  $s_deps_by_amount = $deps_policies[$i];
                  break;    
                }
            }else {
                if($this -> deps2_total_amount >= $deps_policies[$i] -> amount_range1 &&  
                    $this -> deps2_total_amount <= $deps_policies[$i] -> amount_range2){
                    $s_deps_by_amount = $deps_policies[$i];
                    break;          
                }    
            }    
        }
        
        //액티브 유저 기준으로 뎁스를 추출
        for($i = 0 ; $i < $deps_count; $i++ ){
            if ($i == $deps_count - 1){
                if ($this -> deps2_active_child_count >= $deps_policies[$i] -> activate_players1_count){
                    $s_deps_by_amount = $deps_policies[$i];
                    break;    
                }
            }else {
                if( $this -> deps2_active_child_count >= $deps_policies[$i] -> activate_players1_count &&
                    $this -> deps2_active_child_count <= $deps_policies[$i] -> activate_players2_count){
                    $s_deps_by_user = $deps_policies[$i];
                    break;          
                }    
            }       
        }
        
        if (!$s_deps_by_amount){
            $select_deps = $deps_policies[0] ;
            $this -> deps2_apply_level = $select_deps ;
        }else {
            if ($s_deps_by_amount -> deps2_commission_policy_no  <   $s_deps_by_user -> deps2_commission_policy_no){
                $select_deps = $s_deps_by_amount;
                $this -> deps2_apply_level = $select_deps ;
            }else {
                $select_deps = $s_deps_by_user;
                $this -> deps2_apply_level = $select_deps ;
            }
        }
        
        $this -> deps2_slots_trans_rate      = $select_deps -> slot_percentage / 100; 
        $this -> deps2_non_slots_trans_rate  = $select_deps -> non_slot_percentage / 100; 
        $this -> deps2_live_trans_rate       = $select_deps -> live_percentage / 100; 
        return;
    }

    public function get_bonus_rate($deps){
        $deps1_temp = array(
            $this -> deps1_slots_trans_rate,
            $this -> deps1_non_slots_trans_rate,
            $this -> deps1_live_trans_rate 
        );
        
        $deps2_temp = array(
            $this -> deps2_slots_trans_rate,
            $this -> deps2_non_slots_trans_rate,
            $this -> deps2_live_trans_rate 
        );
        
        if ($deps == 1){
            return max($deps1_temp);
            
        }else {
           return max($deps2_temp);
        }
    }
    
     /*
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this -> $property;
        }
    }
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this -> $property = $value;
        }
        return $this;
    }
     * 
     * * */
}
