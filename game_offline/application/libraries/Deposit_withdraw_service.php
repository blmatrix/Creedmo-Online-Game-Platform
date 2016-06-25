<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit_withdraw_service {
    public $CI;
    public $message;
    

    public function __construct() {
        $this -> CI = &get_instance();
        $this -> CI -> load -> database();
    }

    public function get_message(){
        return $this -> message;
    }
    
    public function deposit($user_no, $transfer_to, $sender_name, $deposit_amount, &$ret_message) {
        $this -> CI -> load -> model('admin/user_level');
        $this -> CI -> load -> model('admin/deposit');
        $this -> CI -> load -> model('admin/casino_basic_policy');
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/game_play');
        $this -> CI -> load -> library('session_manager');
        $this -> CI -> load -> model('admin/game_play');
        $this -> CI -> load -> helper('location');
          
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $user = $this -> CI -> user -> advanced_search_row($condition);
        
        $deposit_bonus = 0; 
        $deposit_flag  = 0;
        
		$casino_policy = $this -> CI -> casino_basic_policy -> advanced_search_row();
        /*
         * 처음 입금 상태일 경우, 해당 입금에 입금 플래그 설정
         * */
        if ($user -> first_deposit == FIRST_DEPOSIT_YES){
            $first_deposit_bonus = $deposit_amount * ( $casino_policy -> first_deposit_event / 100); 
            $deposit_bonus  = $first_deposit_bonus;
        }else {
            $user_levels = $this -> CI -> user_level -> get_user_level_by_comp(
                $this -> CI -> game_play -> get_comp_point($user -> user_id)
            ); 
            $deposit_bonus_rate = $user_levels[0] -> deposit_bonus_rate;
            $deposit_bonus =  $deposit_amount * ($deposit_bonus_rate / 100);
        }
        
        $insert_data = array(
            'user_no' => $user_no,
            'transfer_to' => $transfer_to, 
            'sender_name' => $sender_name, 
            'deposit_amount' => $deposit_amount,
            'deposit_bonus' => $deposit_bonus ,
            'deposit_total_amount' => $deposit_amount + $deposit_bonus,
            'reg_date' => time());
            
        $this -> CI -> deposit -> insert($insert_data);
        return TRUE;
    }

    public function withdraw($user_no, $bank_account_no,$transfer_from, $req_withdraw_amount) {
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/withdraw');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> library('transfer_service');
        
        $user_condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $user = $this -> CI -> user -> advanced_search_row($user_condition);
        
        $result = FALSE;
        if ($transfer_from == VENDER_PT){
            $result =  $this -> CI -> transfer_service -> update_pt_money($user -> user_id);    
        }else if ($transfer_from == VENDER_MG){
            $result = $this -> CI -> transfer_service -> update_mg_money($user -> user_id);    
        }
        
        if (!$result){
            $this -> message = $this -> CI -> transfer_service -> get_message();
            return FALSE;
        }
        
        $cur_game_balance = 0;
        $wallet = $this -> CI -> wallet -> advanced_search_row($user_condition);
       
        if (!$wallet) {
            $$this -> message  = '현재 생성된 전자지갑이 없습니다. 고객센터로 문의해주세요';
            return FALSE;
        }
         
        if ($transfer_from == VENDER_PT){
            $cur_game_balance = $wallet -> pt_casino_balance; 
        }else if ($transfer_from == VENDER_MG){
            $cur_game_balance = $wallet -> mg_casino_balance; 
        }
        
        if ($req_withdraw_amount > $cur_game_balance) {
            $this -> message = "{$user->user_id}님의 현재 출금 가능 금액은 {$cur_game_balance} 입니다";
            return FALSE;
        } else {
            // 출금요청은 요청 즉시 게임머니에서 출금을 진행한다.            
            $this -> CI -> load -> library('transfer_service');     
            $result = '';
            $data = array(
                'user_no' => $user -> user_no,
                'transfer_amount' => $req_withdraw_amount,
                'transfer_from'  => ($transfer_from == VENDER_MG ? "MG":"PT"),
                'transfer_to' => 'WALLET',
                'mg_id' => $user -> mg_id,
                'pt_id' => $user -> pt_id
            );
            
            if ($transfer_from == VENDER_PT){
                $result  = $this -> CI ->  transfer_service -> transfer_from_pt($data);    
            }else if ($transfer_from == VENDER_MG){
                $result  = $this -> CI -> transfer_service -> transfer_from_mg($data);
            }
            if (!$result){
                $this -> message = $this -> CI -> transfer_service -> get_message();
                return FALSE;
            }
                    
            /*
             * 출금이 가능할 경후 withdraw 테이블 등록
             */
            $withdraw_insert_data = array(
                'user_no' => $user_no,
                'bank_account_no' => $bank_account_no,
                'transfer_from'   => $transfer_from,
                'withdraw_amount' => $req_withdraw_amount,
                'withdraw_method' => WITHDRAW_METHOD_WIRE,
                'reg_date' => time()
            );
            $this -> CI -> withdraw -> insert($withdraw_insert_data);
            return TRUE;
        }
    }
    
    public function get_balance($user_id){
        
    }

    public function cancel_withdraw($user_no, $withdraw_no){
        $this -> CI -> load -> model('admin/withdraw');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> library('transfer_service');
        
        $condition[WHERE_CONDITION] = array('withdraw_no' => $withdraw_no);
        $cancel_withdraw = $this -> CI -> withdraw -> advanced_search_row($condition);
        
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $wallet = $this -> CI -> wallet -> advanced_search_row($condition);
        $user  = $this -> CI -> user -> advanced_search_row($condition);

        $result = '';
        $data = array(
            'user_no' => $user_no,
            'transfer_amount' => $cancel_withdraw -> withdraw_amount,
            'transfer_from'  => "WALLET",
            'transfer_to' => ($cancel_withdraw -> transfer_from == VENDER_MG ? "MG":"PT"),
            'mg_id' => $user -> mg_id,
            'pt_id' => $user -> pt_id
        );
        
        if ($cancel_withdraw  -> transfer_from == VENDER_PT){
            $result  = $this -> CI ->  transfer_service -> transfer_to_pt($data);    
        }else if ($cancel_withdraw  -> transfer_from == VENDER_MG){
            $result  = $this -> CI -> transfer_service -> transfer_to_mg($data);
        }
        if (!$result){
            $this -> message = $this -> CI -> transfer_service -> get_message();
            return FALSE;
        }
        
        /*
         * 출금 취소 금액을 Wallet balance에 증감
         * Total withdraw amount , 및 average 적용
         */
         /*
         $wallet_update_arr = array(
                'wallet_balance' => $wallet -> wallet_balance + $cancel_withdraw -> withdraw_amount,
                'total_withdraw_amount' => $wallet -> total_withdraw_amount -  $cancel_withdraw -> withdraw_amount,
                'average' => $wallet -> total_deposit_amount - ($wallet -> total_withdraw_amount - $cancel_withdraw -> withdraw_amount)
         );
         */
         
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
