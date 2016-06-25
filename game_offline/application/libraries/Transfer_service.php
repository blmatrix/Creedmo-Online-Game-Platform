<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_service {
    public $CI;
    public $mg_login_status;
    public $message;
    public $resut;
    
    public function __construct() {
        $this -> CI = &get_instance();
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> model('admin/game_money_transfer');
        $this -> CI -> load -> model('admin/game_money_transfer_detail');
        
        $this -> CI -> load -> library('microgame');
        $this -> CI -> load -> library('playtech');
    }
    
    public function get_message(){
        return $this -> message;
    }
    
    public function mg_login(){
        $params = $this -> CI -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> CI -> microgame -> invoke('IsAuthenticate', $params);
        
        //MG 로그인
        if ($result -> IsAuthenticateResult -> ErrorCode != 0) {
            $this -> message  = "MG_LOGIN::FAILED::{$result->IsAuthenticateResult->ErrorMessage}";
            return FALSE;
        }else {
            return TRUE;
        }
    }
    
    //MG 로 바로 이동
    public function transfer_to_mg($data){
        $result = $this -> mg_login();
        if (!$result){
            return FALSE; 
        }else {
            $this -> mg_login_status = TRUE;
        }
        
        $params = $this -> CI -> microgame -> set_params(
            array(
                'accountNumber' => $data['mg_id'], 
                'amount' => $data['transfer_amount'], 
                'currency' => 8
                )
        );
        //MG  게임 머니 deposit 이동 
        $result = $this -> CI -> microgame -> invoke('Deposit',$params);
		log_message('error',"MG trans deposit");
        if ($result -> DepositResult -> ErrorCode != 0){
            $this -> message = $result -> DepositResult -> ErrorMessage;
            return FALSE;
        }
        
        return  $this -> process_after_mg_trans($data, $result, "Deposit");
    }
    
    public function transfer_from_mg($data){
    	$result = $this -> mg_login();
        if (!$result){
            return FALSE; 
        }else {
            $this -> mg_login_status = TRUE;
        }
		
		$params = $this -> CI -> microgame -> set_params(
            array(
                'accountNumber' => $data['mg_id'], 
                'amount' => $data['transfer_amount'], 
                )
        );
        // MG  게임 머니 Withdraw 이동 
        $result = $this -> CI -> microgame -> invoke('Withdrawal',$params);
		if ($result -> WithdrawalResult -> ErrorCode != 0){
            $this -> message = $result -> WithdrawalResult -> ErrorMessage;
            return FALSE;
        }
		return $this -> process_after_mg_trans($data, $result, "Withdrawal");;
    }
	
    
    public function process_after_mg_trans($data,$result,$command){
        $condition[WHERE_CONDITION] = array('user_no' => $data['user_no']);
        $wallet = $this -> CI -> wallet -> advanced_search_row($condition);
        
        //Game money Tranfer 테이블 등록
        $transfer_data = array(
           'user_no' => $data['user_no'],
           'vender_no' => VENDER_MG,
           'money_transfer_type' => $this -> get_transfer_type_code($data['transfer_from'], $data['transfer_to']),
           'from' => $data['transfer_from'],
           'to' => $data['transfer_to'],
           'transfer_amount' => $data['transfer_amount'],
           'transfer_status' => TRANSFER_STATUS_COMPLETED,
           'reg_date' => time()
        );
        $transfer_id = $this -> CI -> game_money_transfer -> insert($transfer_data);  
        
        //Game money Tranfer Details  테이블 등록
        $property = $command."Result";
        
        $transfer_detail_data = array(
          'game_money_transfer_no' => $transfer_id,
          'user_no' => $data['user_no'],
          'transaction_type' => $this -> get_transfer_type_code($data['transfer_from'], $data['transfer_to']),
          'transaction_id' => $result -> $property-> TransactionId,
          'transaction_amount' => $result -> $property -> TransactionAmount,
          'transaction_credit_amount' => $result -> $property -> TransactionCreditAmount,
          'balance'=>  $result -> $property -> Balance,
          'from' => $data['transfer_from'],
          'to' => $data['transfer_to'],
          'reg_date' => time()
         );
         $transfer_detail_id = $this -> CI -> game_money_transfer_detail -> insert($transfer_detail_data);
        
         //Wallet Table 갱신  테이블 등록
         
         $condition[WHERE_CONDITION] = array('wallet_no' => $wallet-> wallet_no);
         $wallet_update_data = array(
            'mg_casino_balance' => $result -> $property  -> Balance
         );
                        
         $this -> CI -> wallet -> update($wallet_update_data, $condition);
         return TRUE;
    }
    
	
    //Pt 로 바로 이동
    public function transfer_to_pt($data){
        $result = $this -> CI -> playtech -> deposit($data['pt_id'], $data['transfer_amount']);
        if (!empty($result -> error)){
            $this -> message  = "WALLET_TO_PT::FAILED::{$result->error}" ;
            return FALSE;           
        }
        return $result = $this -> process_after_pt_trans($data,$result,"Deposit");; 
    }
	
	public function tranfer_from_pt($data){
        $result = $this -> CI -> playtech -> withdraw($data['pt_id'], $data['transfer_amount']);
        if (!empty($result -> error)){
            log_message('error','pt 연동 에러');
            $this -> message = "PT_TO_WALLET::FAILED::$result -> error" ;
            return FALSe;           
        }
		return $this -> process_after_pt_trans($data,$result,"Withdrawal");		
	}
    
    
    public function process_after_pt_trans($data ,$result,$command){
        $condition[WHERE_CONDITION] = array('user_no' => $data['user_no']);
        $wallet = $this -> CI -> wallet -> advanced_search_row($condition);
                 
        //Game money Tranfer 테이블 등록
        $transfer_data = array(
           'user_no' => $data['user_no'],
           'vender_no' => VENDER_PT,
           'money_transfer_type' => $this -> get_transfer_type_code($data['transfer_from'], $data['transfer_to']),
           'from' => $data['transfer_from'],
           'to' => $data['transfer_to'],
           'transfer_amount' => $data['transfer_amount'],
           'transfer_status' => TRANSFER_STATUS_COMPLETED,
           'reg_date' => time()
        );
        $transfer_id = $this -> CI -> game_money_transfer -> insert($transfer_data); 

        //Game money Tranfer Details  테이블 등록
        $transfer_detail_data = array(
          'game_money_transfer_no' => $transfer_id,
          'user_no' => $data['user_no'],
          'transaction_type' => $this -> get_transfer_type_code($data['transfer_from'], $data['transfer_to']),
          'transaction_id' => $result -> result -> kiosktransactionid,
          'transaction_amount' => $result -> result -> amount,
          'transaction_credit_amount' => $result -> result -> amount,
          'balance'=>  $result -> result-> currentplayerbalance,
          'transaction_time' => $result -> result-> kiosktransactiontime,
          'from' => $data['transfer_from'],
          'to' => $data['transfer_to'],
          'reg_date' => time()
         );
         $transfer_detail_id = $this -> CI -> game_money_transfer_detail -> insert($transfer_detail_data);
         
         //Wallet Table 갱신  테이블 등록
         
         $condition[WHERE_CONDITION] = array('wallet_no' => $wallet-> wallet_no);
         $wallet_update_data = array(
            'pt_casino_balance' => $result -> result-> currentplayerbalance
         );
                        
         $this -> CI -> wallet -> update($wallet_update_data, $condition);
         return TRUE;
    }
    
     
    /*
     * Transfer 와 관련된 From 과 To 인자로 Transfer Type code 를 반환
    */

    public function get_transfer_type_code($from, $to) {
        $str = trim(strtoupper($from . '_TO_' . $to));
        $code = "";

        if ($str == 'MG_TO_WALLET')
            $code = MONEY_TRANSFER_TYPE_MG_TO_WALLET;
        if ($str == 'PT_TO_WALLET')
            $code = MONEY_TRANSFER_TYPE_PT_TO_WALLET;
        if ($str == 'WALLET_TO_MG')
            $code = MONEY_TRANSFER_TYPE_WALLET_TO_MG;
        if ($str == 'WALLET_TO_PT')
            $code = MONEY_TRANSFER_TYPE_WALLET_TO_PT;
        return $code;
    }
    
    public function filter_result($result){
        $filter_arr = explode("::", $result);
        if ($filter_arr[1] =="SUCCEED"){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    
    
    /*
     * 회원의 2개사  게임머니 일괄 업데이트 
     * MG, PT 게임사 api 를 통해 확인하고 내부 데이타베이스를 업데이트한다.
     * */
    public function check_user_game_money($user_id, &$ret_message =""){
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/wallet');
        $this -> load -> library('microgame');
        $this -> load -> library('playtech');
        
        $condition[SELECT_CONDITION] = "
            user.*,
            mg_game_user.account_number as mg_game_id,
            mg_game_user.pin_code as mg_game_password,
            pt_game_user.player_name as pt_game_id,
            pt_game_user.password as pt_game_password
        ";
        $condition[WHERE_CONDITION] = array('user_id' => $user_id);
        $join_condition[] = 
            array(
                JOIN_CONDITION_TABLE => 'mg_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = mg_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
        );
        $join_condition[] = 
            array(
                JOIN_CONDITION_TABLE => 'pt_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = pt_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $user_data = $this -> user -> advanced_search_row($condition);  
        
        $mg_casino_balance = 0; 
        $pt_casino_balance = 0;   
        
        $params = $this -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> microgame -> invoke('IsAuthenticate', $params);
        
        if ($result -> IsAuthenticateResult -> ErrorCode == 0){
              //MG Game balance 를 갱신 
              $params = $this -> microgame -> set_params(
                  array(
                      'accountNumber' => $user_data -> mg_game_id
                  )
              );
              $mg_result = $this -> microgame -> invoke('GetAccountDetails', $params);
              if ($mg_result -> GetAccountDetailsResult -> ErrorCode == 0){
                 $mg_casino_balance = $mg_result -> GetAccountDetailsResult -> Balance;
              }    
        }
        
        //PT Game Balace 를 갱신
        $pt_result = $this -> playtech -> get_player_info($user_data -> pt_game_id);
        $pt_casino_balance = $pt_result -> result -> BALANCE;
            
        $this -> wallet -> update(
            array(
               'mg_casino_balance' => $mg_casino_balance,
               'pt_casino_balance' => $pt_casino_balance 
            ),
            $condition
        );
        return TRUE;       
    }
    
    
    /*
     * MG 와 연동하여, MG 게임머니를 Baofa Wallet 으로 업데이트 
     */
    public function update_mg_money($user_id){
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> library('microgame');
        
        $condition[SELECT_CONDITION] = "
            user.*,
            mg_game_user.account_number as mg_game_id,
            mg_game_user.pin_code as mg_game_password,
            pt_game_user.player_name as pt_game_id,
            pt_game_user.password as pt_game_password
        ";
        
        $condition[WHERE_CONDITION] = array('user.user_id' => $user_id);
        $join_condition[] = 
            array(
                JOIN_CONDITION_TABLE => 'mg_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = mg_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
        );
        $join_condition[] = 
            array(
                JOIN_CONDITION_TABLE => 'pt_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = pt_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $user_data = $this -> CI -> user -> advanced_search_row($condition);  
        $mg_casino_balance = 0; 
        
        $params = $this -> CI -> microgame -> set_params(array('loginName' => 'MMCashier181029', 'pinCode' => 'ce6d8b'));
        $result = $this -> CI -> microgame -> invoke('IsAuthenticate', $params);
        if ($result -> IsAuthenticateResult -> ErrorCode == 0){
             //MG Game balance 를 갱신 
             $params = $this -> CI -> microgame -> set_params(
                 array(
                     'accountNumber' => $user_data -> mg_game_id 
                 )
             );
             $mg_result = $this -> CI -> microgame -> invoke('GetAccountDetails', $params);
             if ($mg_result -> GetAccountDetailsResult -> ErrorCode == 0){
                $mg_casino_balance = $mg_result -> GetAccountDetailsResult -> Balance;
                unset($condition);
                $condition[WHERE_CONDITION] = array('user_no' => $user_data -> user_no);
                $this -> CI -> wallet -> update(
                    array(
                       'mg_casino_balance' => $mg_casino_balance
                    ),
                    $condition
                ); 
                return TRUE;
             }
        }else{
            $this -> message  = "fail in updating MG Game money to BF Database";
            return FALSE;
        }
    }
    
    /*
     * PT와 연동하여, MG 게임머니를 Baofa Wallet 으로 업데이트 
     */
    public function update_pt_money($user_id){
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> library('playtech');
        
        $condition[SELECT_CONDITION] = "
            user.*,
            mg_game_user.account_number as mg_game_id,
            mg_game_user.pin_code as mg_game_password,
            pt_game_user.player_name as pt_game_id,
            pt_game_user.password as pt_game_password
        ";
        $condition[WHERE_CONDITION] = array('user.user_id' => $user_id);
        $join_condition[] = 
            array(
                JOIN_CONDITION_TABLE => 'mg_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = mg_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
        );
        $join_condition[] = 
            array(
                JOIN_CONDITION_TABLE => 'pt_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = pt_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $user_data = $this -> CI -> user -> advanced_search_row($condition);  
        $pt_casino_balance = 0;       
        
        //PT Game Balace 를 갱신
        $pt_result = $this -> CI -> playtech -> get_player_info($user_data -> pt_game_id);
        //log_message('error',print_r($pt_result,TRUE));
        
        if (!empty($pt_result -> error)){
            $this -> message  = $pt_result -> error;
            return FALSE;
        }else {
            unset($condition);
            $condition[WHERE_CONDITION] = array('user_no' => $user_data -> user_no);
            $pt_casino_balance = $pt_result -> result -> BALANCE;  
            $this -> CI -> wallet -> update(
                array(
                    'pt_casino_balance' => $pt_casino_balance 
                ),
                $condition
            );  
            return TRUE;   
        }
    }
    
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //아래의 메서드는 현재 사용하지 않음 
    //
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    /*
     *  머니 이동 진입 메서드 
    */
    public function transfer($data = NULL, &$ret_message ='') {
        log_message('error', 'transfer is starting');
        if (!$data){
            $data['user_no']         = trim($this -> CI -> input -> post('user_no',TRUE));
            $data['user_id']         = trim($this -> CI -> input -> post('user_id',TRUE));
            $data['transfer_amount'] = trim($this -> CI -> input -> post('transfer_amount',TRUE));
            $data['transfer_from']   = trim($this -> CI -> input -> post('transfer_from',TRUE));
            $data['transfer_to']     = trim($this -> CI -> input -> post('transfer_to',TRUE));
            $data['mg_id']           = trim($this -> CI -> input -> post('mg_id',TRUE));
            $data['pt_id']           = trim($this -> CI -> input -> post('pt_id',TRUE));
        }
        
        log_message('error',"user's transfer money detail");
        log_message('error',print_r($data,true));
        
        if ($data['transfer_from'] == "MG" ||  $data['transfer_to']  == "MG"){
            $message = $this -> mg_login();
            if (!$this -> filter_result($message)){
                return $message; 
            }else {
                $this -> mg_login_status = TRUE;
            }
        }
        
        switch( $data['transfer_from'] ) {
            case "WALLET" :
                switch($data['transfer_to'] ) {
                    //wallet to mg
                    case 'MG' :
                        $ret_message = $this -> transfer_wallet_to_mg($data);
                        break;
                    //wallet to pt
                    case 'PT' :
                        $ret_message = $this -> transfer_wallet_to_pt($data);
                        break;
                }
                break;

            case "MG" :
                switch($data['transfer_to']) {
                    //mg to wallet
                    case 'WALLET' :
                        log_message('error','sdfsdfsdfsdf');
                        $ret_message = $this -> transfer_mg_to_wallet($data);
                        break;
                    //mg to pt
                    case 'PT' :
                        $ret_message = $this -> transfer_mg_to_pt($data);
                        break;
                }
                break;

            case "PT" :
                switch($data['transfer_to']) {
                    //PT to wallet
                    case 'WALLET' :
                        $ret_message = $this -> transfer_pt_to_wallet($data);
                        break;
                    //pt_to_mg
                    case 'MG' :
                        $ret_message = $this -> transfer_pt_to_mg($data);
                        break;
                }
                break;
        }
        return $ret_message;
    }
  
    public function transfer_wallet_to_mg($data) {
        $params = $this -> CI -> microgame -> set_params(
            array(
                'accountNumber' => $data['mg_id'], 
                'amount' => $data['transfer_amount'], 
                'currency' => 8
                )
        );
        // MG  게임 머니 deposit 이동 
        $result = $this -> CI -> microgame -> invoke('Deposit',$params);
        if ($result -> DepositResult -> ErrorCode != 0){
            $message = "WALLET_TO_MG::FAILED::{$result->DepositResult->ErrorCode}--> {$result->DepositResult->ErrorMessage}";
            return $message;
        }
        $message = $this -> process_after_mg_trans($data, $result,"Deposit");
        return $message;
        
    }

    public function transfer_wallet_to_pt($data) {
        $result = $this -> CI -> playtech -> deposit($data['pt_id'], $data['transfer_amount']);
        if (!empty($result -> error)){
            $message = "WALLET_TO_PT::FAILED::{$result->error}" ;
            return $message;           
        }
        $message = $this -> process_after_pt_trans($data,$result,"Deposit");
        return $message;
    }

    public function transfer_mg_to_wallet($data) {
        $params = $this -> CI -> microgame -> set_params(
            array(
                'accountNumber' => $data['mg_id'], 
                'amount' => $data['transfer_amount'], 
                )
        );
        // MG  게임 머니 Withdraw 이동 
        $result = $this -> CI -> microgame -> invoke('Withdrawal',$params);
        if ($result -> WithdrawalResult-> ErrorCode != 0){
            $message = "MG_TO_WALLET::FAILED::{$result->WithdrawalResult->ErrorCode}--> {$result->WithdrawalResult->ErrorMessage}";
            return $message;
        }
        return $this -> process_after_mg_trans($data,$result,"Withdrawal");
        
    }

    public function transfer_mg_to_pt($data) {
        //게임머니간 이동은 내부적으로 Wallet 을 거쳐 이동하기 때문에 다음과 같이 변수를 설정
        $data['transfer_from'] = "MG";
        $data['transfer_to']   = "WALLET";
        $message  = $this -> transfer_mg_to_wallet($data);
        if (!$this -> filter_result($message)){
            return $message;
        }
        
        $data['transfer_from'] = "WALLET";
        $data['transfer_to']   = "PT";
        $message =   $this -> transfer_wallet_to_pt($data);
        if (!$this -> filter_result($message)){
            return $message;
        }
        
        $message = "MG_TO_PT::SUCCEED::transaction is completed";
        return $message;        
    }

    public function transfer_pt_to_wallet($data) {
        $message = '';    
        $result = $this -> CI -> playtech -> withdraw($data['pt_id'], $data['transfer_amount']);
        if (!empty($result -> error)){
            log_message('error','pt 연동 에러');
            $message = "PT_TO_WALLET::FAILED::$result -> error" ;
            return $message;           
        }
        return $this -> process_after_pt_trans($data,$result,"Withdrawal");
    }

    public function transfer_pt_to_mg($data) {
        //게임머니간 이동은 내부적으로 Wallet 을 거쳐 이동하기 때문에 다음과 같이 변수를 설정
        $data['transfer_from'] = "PT";
        $data['transfer_to']   = "WALLET";
        $message = $this -> transfer_pt_to_wallet($data);
        if (!$this -> filter_result($message)){
            return $message;
        }
        
        $data['transfer_from'] = "WALLET";
        $data['transfer_to']   = "MG";
        $message = $this -> transfer_wallet_to_mg($data);
        if (!$this -> filter_result($message)){
            return $message;
        }
        
        $message = "PT_TO_MG::SUCCEED::transaction is completed";
        return $message;   
    }
   
}
