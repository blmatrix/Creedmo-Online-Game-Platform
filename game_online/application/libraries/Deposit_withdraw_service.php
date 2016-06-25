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
        
        $deposit_bonus = 0; 
        $deposit_flag = 0;
        
        /*
         * 처음 입금 상태일 경우, 해당 입금에 입금 플래그 설정
         * */
        if ($user -> first_deposit == FIRST_DEPOSIT_YES){
            $deposit_flag = 1;
        }
        
        $insert_data = array(
            'user_no' => $user_no, 
            'sender_name' => $user_no, 
            'deposit_amount' => $deposit_amount,
            'deposit_total_amount' => $deposit_amount,
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
