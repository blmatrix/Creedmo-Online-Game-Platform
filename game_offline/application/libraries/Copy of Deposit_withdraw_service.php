<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit_withdraw_service {
    public $CI;

    public function __construct() {
        $this -> CI = &get_instance();
        $this -> CI -> load -> database();
    }

    public function deposit($user_no, $sender_name,$deposit_amount,&$ret_message) {
        $this -> CI -> load -> model('admin/user_level');
        $this -> CI -> load -> model('admin/deposit');
        $this -> CI -> load -> model('admin/casino_basic_policy');
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> library('session_manager');
        $this -> CI -> load -> model('admin/game_play');
          
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $user = $this -> CI -> user -> advanced_search_row($condition);
        
        //처음 입금일 경우 first Bonus 
        //처음 입금이 아닐경우 레벨별 입급 보너스 적용 
        $deposit_bonus = 0; 
        $deposit_flag = 0;
        
        if ($user -> first_deposit == FIRST_DEPOSIT_YES){
            $casino_policy = $this -> CI -> casino_basic_policy -> advanced_search_row();
            $first_deposit_bonus = number_format($deposit_amount * ( $casino_policy -> first_deposit_event / 100),2); 
            $deposit_bonus  = $first_deposit_bonus;
            $deposit_flag = 1;
            
            if ($deposit_bonus >  $casino_policy -> max_1st_deposit_bonus) {
                $deposit_bonus =  $casino_policy -> max_1st_deposit_bonus;
            }
            
        }else {
            $user_id = $this -> CI -> session_manager -> get_user_session('user_id');
            $user_levels = $this -> CI -> user_level -> get_user_level_by_comp(
                $this -> CI -> game_play -> get_comp_point($user_id)
            );
            $deposit_bonus_rate = $user_levels[0] -> deposit_bonus_rate;
            $deposit_bonus = $deposit_amount * ($deposit_bonus_rate / 100);
        }
        
        $insert_data = array(
            'user_no' => $user_no, 
            'sender_name' => $user_no, 
            'deposit_amount' => $deposit_amount,
            'deposit_bonus' => $deposit_bonus, 
            'deposit_total_amount' => ($deposit_amount + $deposit_bonus),
            'deposit_flag' => $deposit_flag, 
            'reg_date' => time());
        $this -> CI -> deposit -> insert($insert_data);
        
        return TRUE;
    }

    public function withdraw($user_no, $bank_account_no, $req_withdraw_amount, &$ret_message) {
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/withdraw');
        $this -> CI -> load -> model('admin/wallet');

        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $wallet = $this -> CI -> wallet -> advanced_search_row($condition);
        if (!$wallet) {
            $ret_message = 'There is no Wallet. it may be test environmnent';
            return FALSE;
        }

        //출금 가능 금액을 계산
        $available_withdraw = $wallet -> wallet_balance;
        if ($req_withdraw_amount > $available_withdraw) {
            $ret_message = "{$user_id}님의 현재 출금 가능 금액은 {$available_withdraw} 입니다";
            return FALSE;
        } else {
            
            /*
             * 출금이 가능할 경후 withdraw 테이블 등록
             */
            $withdraw_insert_data = array(
                'user_no' => $user_no,
                'bank_account_no' => $bank_account_no,
                'withdraw_amount' => $req_withdraw_amount,
                'withdraw_method' => WITHDRAW_METHOD_WIRE,
                'reg_date' => time()
            );
            $this -> CI -> withdraw -> insert($withdraw_insert_data);
            
            /*
             * 출금금액을 Wallet balance에 차감
             * Total withdraw amount , 및 average 적용
             */
            $wallet_update_arr = array(
                'wallet_balance' => $wallet -> wallet_balance - $withdraw_insert_data['withdraw_amount'], 
                'total_withdraw_amount' => $wallet -> total_withdraw_amount + $withdraw_insert_data['withdraw_amount'], 
                'average' => $wallet -> total_deposit_amount - ($wallet -> total_withdraw_amount + $withdraw_insert_data['withdraw_amount'])
            );
                
            $condition[WHERE_CONDITION] = array('wallet_no' => $wallet -> wallet_no);
            $this -> CI -> wallet -> update($wallet_update_arr, $condition);
            return TRUE;
        }
    }

    public function cancel_withdraw($user_no, $withdraw_no, &$ret_message){
        $this -> CI -> load -> model('admin/withdraw');
        $this -> CI -> load -> model('admin/wallet');
        
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $wallet = $this -> CI -> wallet -> advanced_search_row($condition);
        
        $condition[WHERE_CONDITION] = array('withdraw_no' => $withdraw_no);
        $cancel_withdraw = $this -> CI -> withdraw -> advanced_search_row($condition);
        
        /*
         * 출금 취소 금액을 Wallet balance에 증감
         * Total withdraw amount , 및 average 적용
         */
         $wallet_update_arr = array(
                'wallet_balance' => $wallet -> wallet_balance + $cancel_withdraw -> withdraw_amount,
                'total_withdraw_amount' => $wallet -> total_withdraw_amount -  $cancel_withdraw -> withdraw_amount,
                'average' => $wallet -> total_deposit_amount - ($wallet -> total_withdraw_amount - $cancel_withdraw -> withdraw_amount)
         );
         
         $condition[WHERE_CONDITION] = array('wallet_no' => $wallet -> wallet_no);
         $this -> CI -> wallet -> update($wallet_update_arr, $condition);
         
         /*
         * 해당 출금 요청에 대하여 플래그를 'WITHDRAW_STATUS_CANCLED' 변경
         */
         $condition[WHERE_CONDITION] = array('withdraw_no' => $withdraw_no);
         $withdraw_update_arr = array(
            'withdraw_status' => WITHDRAW_STATUS_CANCLED
         );
         $this -> CI -> withdraw -> update($withdraw_update_arr,$condition);
         return TRUE;
    }
    
    public function cancel_deposit($deposit_no){
        
    }
}
