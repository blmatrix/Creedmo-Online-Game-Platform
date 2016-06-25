<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function get_banking_account() {
        if ($this -> input -> method(TRUE) == "POST") {

        } else {
            $this -> load -> model('admin/bank_account');
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/withdraw');
            $this -> load -> model('admin/wallet');

            $user_id = $this -> input -> get('user_id', TRUE);
            $transfer_from = $this -> input -> get('transfer_from', TRUE);
            $condition[WHERE_CONDITION] = array('user_id' => $user_id);
            $user_data = $this -> user -> advanced_search_row($condition);

            if (!$user_data) {
                echo "ERROR::<small class ='text-danger'>'{$user_id}' 님은 회원이 아닙니다. 확인하고 다시 시도해주세요</small>";
                exit ;
            }
            
            $condition[WHERE_CONDITION] = array('user_no' => $user_data -> user_no);
            $bank_accounts = $this -> bank_account -> advanced_search_result($condition);

            if (!$bank_accounts) {
                echo "ERROR::<small class ='text-danger'>잘못된 계좌 정보입니다. 확인하고 다시 시도해주세요</small>";
                exit ;
            }
            $wallet = $this -> wallet -> advanced_search_row($condition);
            if (!$wallet) {
                echo "ERROR::<small class ='text-danger'>시스템 에러. 관리자게에 문의해주세요</small>";
                exit ;
            }
            
            $this -> load -> library('transfer_service');
            $result = FALSE;
            if ($transfer_from == VENDER_PT){
                $result =  $this -> transfer_service -> update_pt_money($user_id);    
            }else if ($transfer_from == VENDER_MG){
                $result = $this ->  transfer_service -> update_mg_money($user_id);    
            }
            
            if (!$result){
                $message = $this -> transfer_service -> get_message();
                echo "ERROR::<small class ='text-danger'>{$message }</small>";
                exit ;
            }
            
            $available_withdraw = 0; 
            $wallet = $this -> wallet -> advanced_search_row($condition);
            
            if ($transfer_from == VENDER_PT){
                $available_withdraw = $wallet -> pt_casino_balance; 
            }else if ($transfer_from == VENDER_MG){
                $available_withdraw = $wallet -> mg_casino_balance; 
            }

            $data['bank_accounts'] = $bank_accounts;
            $return_data = 'SUCCESS::' . $this -> load -> view('admin/ajax/bank_account_template', $data, TRUE) . "::$user_id 님의 출금 가능금액은 <strong class ='text-danger'>$available_withdraw</strong> 입니다";
            echo $return_data;
        }
    }

    public function auth_user() {
    }
    
    // 해당 user id가 존재하는지 검사하고 해당 유저의 mg_balance 와 pt_balance 를 api 연동하여 가져오고, 그 정보로 디비 업데이트 한 후 
    // 클라이언트로 해당 정보 전달
    public function is_member() {
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/wallet');
        $this -> load -> library('microgame');
        $this -> load -> library('playtech');
        $this -> load -> library('transfer_service');

        $user_id = strtoupper($this -> input -> get('user_id'));
        
        $condition[WHERE_CONDITION] = array('user_id' => $user_id);
        $user_data = $this -> user -> advanced_search_row($condition);

        if (!$user_data) {
            echo "ERROR::not Member of Baofa membership..plaese check out";
            exit ;
        }else {
            $condition[WHERE_CONDITION] = array('user_no' => $user_data-> user_no);    
            
            $mg_casino_balance = 0; 
            $pt_casino_balance = 0; 
            
            $params = $this -> microgame -> set_params(array('loginName' => 'BAOFA174364', 'pinCode' => 'd05276'));
            $result = $this -> microgame -> invoke('IsAuthenticate', $params);
            
            if ($result -> IsAuthenticateResult -> ErrorCode == 0){
                //MG Game balance 를 갱신 
                $params = $this -> microgame -> set_params(
                    array(
                        'accountNumber' => $user_data -> mg_id 
                    )
                );
                $mg_result = $this -> microgame -> invoke('GetAccountDetails', $params);
               /*
                * MG API Call succeeded
                */
                if ($mg_result -> GetAccountDetailsResult -> ErrorCode == 0){
                   $mg_casino_balance = $mg_result -> GetAccountDetailsResult -> Balance;
                }
               /*
                * MG API Call failed 
                */
                else {
                    
                }    
            }
            //PT Game Balace 를 갱신
            
            $pt_result = $this -> playtech -> get_player_info($user_data -> pt_id);
            
            /*
             * PT API call Succeeded
             * */
            if (empty($pt_result -> error)){
                $pt_casino_balance = $pt_result -> result -> BALANCE;     
            }
            /*
             * PT API call falied
             * */
            else {
                
            }
            
            $this -> wallet -> update(
                array(
                    'mg_casino_balance' => $mg_casino_balance,
                    'pt_casino_balance' => $pt_casino_balance 
                ),
                $condition
            );
            
            $wallet = $this -> wallet -> advanced_search_row($condition);
            $wallet_balance = number_format($wallet->wallet_balance,2);
            $mg_casino_balance = number_format($wallet->mg_casino_balance,2);
            $pt_casino_balance = number_format($wallet->pt_casino_balance,2);
            echo "SUCCESS::{$wallet_balance}::{$mg_casino_balance}::{$pt_casino_balance}";
            exit;
        }
    }
    
    public function check_noti_withdraw(){
        $this -> load -> model('admin/withdraw');
        $this -> load -> helper('time');
  
        $condition[SELECT_CONDITION] = "
            user.user_no as user_no,
            user.user_id as user_id,
            withdraw.withdraw_no as withdraw_no,
            withdraw.withdraw_amount as withdraw_amount, 
            withdraw.reg_date as reg_date
         ";
        $condition[WHERE_CONDITION] = array('withdraw_status' => WITHDRAW_STATUS_NOT_CHECKED);
        $join_condition[] = array(
            JOIN_CONDITION_TABLE => 'user', 
            JOIN_CONDITION_STATE => 'user.user_no = withdraw.user_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $condition[ORDER_BY_CONDITION] = "withdraw.reg_date DESC";
        $condition[LIMIT_CONDITION][LIMIT] = 5;
        $condition[LIMIT_CONDITION][OFFSET] = 0;
        $data['withdraws'] =  $this -> withdraw -> advanced_search_result($condition);
        $this -> load -> view('admin/ajax/noti_withdraw', $data);
    }
    
    public function check_noti_deposit(){
        $this -> load -> model('admin/deposit');
        $this -> load -> helper('time');
        $condition[SELECT_CONDITION] = "
            user.user_no as user_no,
            user.user_id as user_id,
            deposit.deposit_no as deposit_no,
            deposit.deposit_amount as deposit_amount, 
            deposit.reg_date as reg_date
         ";
        $condition[WHERE_CONDITION] = array('deposit_status' => DEPOSIT_STATUS_NOT_CHECKED);
        $join_condition[] = array(
            JOIN_CONDITION_TABLE => 'user', 
            JOIN_CONDITION_STATE => 'user.user_no = deposit.user_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $condition[LIMIT_CONDITION][LIMIT] = 5;
        $condition[LIMIT_CONDITION][OFFSET] = 0;
        $condition[ORDER_BY_CONDITION] = "deposit.reg_date DESC";
        $data['deposits'] =  $this -> deposit -> advanced_search_result($condition);
        $this -> load -> view('admin/ajax/noti_deposit', $data);
    }
    
    public function check_noti(){
        $this -> load -> model('admin/deposit');
        $this -> load -> model('admin/withdraw');
        
        $condition[WHERE_CONDITION] = array('withdraw_status' => WITHDRAW_STATUS_NOT_CHECKED);
        $request_withdraws = $this -> withdraw -> advanced_search_result($condition);
        
        $condition[WHERE_CONDITION] = array('deposit_status' => DEPOSIT_STATUS_NOT_CHECKED);
        $request_deposits = $this -> deposit -> advanced_search_result($condition);
        
        $data['withdraw']['count'] = count($request_withdraws);
        $data['withdraw']['list'] = $request_withdraws;
        
        $data['deposit']['count'] = count($request_deposits);
        $data['deposit']['list'] = $request_deposits;
        echo json_encode($data);
    }
    
    public function get_user_level() {
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/user_level');
        $user_id = $this -> input -> get('user_id');

        $condition[WHERE_CONDITION] = array('user_id' => $user_id);
        $user_data = $this -> user -> advanced_search_row($condition);

        if (!$user_data) {
            echo "ERROR::<small class ='text-danger'> '{$user_id}' 님은 회원이 아닙니다. 확인하고 다시 시도해주세요</small>";
            exit ;
        }

        $condition[WHERE_CONDITION] = array('user_level_no' => $user_data -> user_level_no);
        $user_level = $this -> user_level -> advanced_search_row($condition);

        if ($user_level) {
            echo "SUCCESS::{$user_level-> user_level_no}::{$user_level -> user_level_code_name}";
            exit ;
        }
    }
}
