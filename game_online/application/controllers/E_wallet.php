<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class E_wallet extends Application{
    public function __construct() {
        parent::__construct();
        $this -> load -> helper(array('location', 'url','form','time'));
        $this -> load -> library('session_manager');
        $this -> check_session();
    }

    private function __set_side_menu_index(&$data) {
        $data['side_index'] = 'e_wallet';
    }

    public function index() {
        $this -> load -> library('user_agent');
        $this -> load -> library('template_generator');
        
        $this -> load -> library('session_manager');
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
        $this -> load -> helper('baofa');

        $this -> load -> model('admin/customer_service');
        $this -> load -> model('/admin/user');
        $this -> load -> model('/admin/withdraw');
        $this -> load -> model('admin/bank_account');
        $this -> load -> model('admin/casino_basic_policy',"CBP");

        $user_id = $this -> session_manager -> get_user_session('user_id');
        $user_no = $this -> session_manager -> get_user_session('user_no');
        
        $data = array();
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        
        
        $sql = "
            SELECT 
                withdraw_no AS withdraw_no,
                user_no AS user_no,
                bank_account_no AS bank_account_no,
                withdraw_amount AS withdraw_amount,
                CASE withdraw_status 
                        WHEN 1 
                            THEN 'Pending' 
                        WHEN 2 
                            THEN 'Confirm' 
                        WHEN 3 
                            THEN '<span class=complete>Complete</span>'
                        WHEN 4 
                            THEN 'Canceled By You'
                        WHEN 5 
                            THEN 'Canceled By Admin'
                        ELSE '' 
                    END AS withdraw_status,
                reg_date AS reg_date
            FROM 
                withdraw 
            WHERE
                user_no = ? AND   
                (withdraw_status IN (?,?)) 
            ORDER BY reg_date DESC";
        
        $binding = array($user_no,WITHDRAW_STATUS_NOT_CHECKED,WITHDRAW_STATUS_BEFORE_CONFIRM);
        $data['cancelable_withdraws'] = $this -> withdraw -> raw_binding_query($sql,$binding);
        
        $sql ="
            (
                select 
                    'Deposit' AS type,
                    deposit_no AS no,
                    deposit_amount AS amount1,
                    deposit_bonus AS bonus,
                    0 AS amount2,
                    reg_date AS reg_date,
                    CASE deposit_status 
                        WHEN 1 
                            THEN 'Pending' 
                        WHEN 2 
                            THEN 'Confirm' 
                        WHEN 3 
                            THEN '<span class=complete>Complete</span>'
                        WHEN 4 
                            THEN 'Canceled By You'
                        WHEN 5 
                            THEN 'Canceled By Admin'
                        ELSE '' 
                    END AS status
                FROM deposit
                WHERE user_no= ? 
            )
            UNION ALL 
            (
                select 
                    'Withdraw' AS type,
                    Withdraw_no AS no,
                    0 AS amount1,
                    0 AS bonus,
                    withdraw_amount AS amount2,
                    reg_date AS reg_date,
                    CASE withdraw_status 
                        WHEN 1 
                            THEN 'Pending' 
                        WHEN 2 
                            THEN 'Confirm' 
                        WHEN 3 
                            THEN '<span class=complete>Complete</span>'
                        WHEN 4 
                            THEN 'Canceled By You'
                        WHEN 5 
                            THEN 'Canceled By Admin'
                        ELSE '' 
                    END  AS status
                FROM withdraw 
                WHERE user_no= ?
            )
            ORDER BY reg_date DESC LIMIT ?, ?       
        ";
        
        $binding = array($user_no , $user_no,0,10);
        $data['histories']  = $this -> user -> raw_binding_query($sql,$binding);
        
        $this -> load -> model('admin/game_money_transfer');
        $sql = "
            SELECT * FROM game_money_transfer WHERE user_no = ? ORDER BY reg_date DESC LIMIT 0, 10
        ";
        $query_binding = array($user_no);
        $data['transfers'] = $this -> game_money_transfer -> raw_binding_query($sql,$query_binding);
        
        $this -> session -> set_flashdata('tab', 'e_wallet');
        $this -> __set_side_menu_index($data);
        
        if (!$this -> session -> set_flashdata('tab') || $this -> session -> set_flashdata('tab') != 'cancel_withdraw'){
            $data['tab'] = 'e_wallet';    
        }else {
            $data['tab'] = $this -> session -> flashdata('tab');            
        }
        
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $data['bank_accounts'] = $this -> bank_account -> advanced_search_result($condition);
        $data['casino_policy'] = $this -> CBP -> advanced_search_row();
        $this -> load -> view('front/e_wallet/e_wallet', $data);
    }

    public function deposit() {
        if ($this -> input -> method(TRUE) == "GET") {
            $this -> load -> model('/admin/user');
            $this -> load -> model('admin/casino_basic_policy',"CBP");
            
            $user_id = $this -> session_manager -> get_user_session('user_id');
            $user_no = $this -> session_manager -> get_user_session('user_no');
            
            $condition[WHERE_CONDITION] = array('user_no' => $user_no);
            $data['user'] = $this -> user -> advanced_search_row($condition);
            $data['casino_policy'] = $this -> CBP -> advanced_search_row();
            
            $this -> load -> view('front/e_wallet/form/deposit_form',$data);
        }else {    
            $this -> load -> library('form_validation');
            $this -> load -> library('deposit_withdraw_service');
            $this -> load -> model('admin/casino_basic_policy',"CBP");
            $this -> load -> model('admin/game_play');
            $this -> load -> model('admin/user_level');
            $this -> load -> model('admin/user');
            
            $casino_policy = $this -> CBP -> advanced_search_row();
            
            $this -> min_amount = $casino_policy -> min_per_deposit;
            $this -> max_amount = $casino_policy -> max_per_deposit;
            $this -> max_1st_deposit_bonuse = $casino_policy -> max_1st_deposit_bonus;
           
            $this -> form_validation -> set_rules('sender_name', "Sender Name", 'required');
            $this -> form_validation -> set_rules(
                'deposit_amount', 
                "Deposit Amount", 
                "required|callback_get_number|numeric|callback_greater_than_or_equal|callback_less_than_or_equal");
    
            if ($this -> form_validation -> run() == FALSE) {
                log_message('error', validation_errors());
                alert_only("Wrong Reqeust" );
                exit ;
            } 
            
            $user_no = $this -> session_manager -> get_user_session('user_no');
            $user_id = $this -> session_manager -> get_user_session('user_id');
            $condition[WHERE_CONDITION] = array('user_id'=> $user_id);
            $user = $this -> user -> advanced_search_row($condition);
            if (!$user){
                alert("The user is not member of Baofa Membership");
                exit;
            }
            
            $deposit_amount = (int)$this -> input -> post('deposit_amount');
            $ret_message = '';
            $result = $this -> deposit_withdraw_service -> deposit(
                $user_no, $this -> input -> post('sender_name', TRUE),$deposit_amount,$ret_message
            );
           
            if ($result){
                locationReload('parent');
                exit;
            }else {
                alert_only("Server Error");
                exit;
            } 
        }
       
    }

    public function withdraw() {
        if ($this -> input -> method(TRUE) == "GET") {
            $this -> load -> model('/admin/user');
            $this -> load -> model('/admin/wallet');
            $this -> load -> model('/admin/withdraw');
            $this -> load -> model('admin/bank_account');
            $this -> load -> model('admin/casino_basic_policy',"CBP");
            
            $user_id = $this -> session_manager -> get_user_session('user_id');
            $user_no = $this -> session_manager -> get_user_session('user_no');
            
            $condition[WHERE_CONDITION] = array('user_no' => $user_no);
            $data['user'] = $this -> user-> advanced_search_row($condition);
            $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
            
            $data['bank_accounts'] = $this -> bank_account -> advanced_search_result($condition);
            $data['casino_policy'] = $this -> CBP -> advanced_search_row();
            
            $this -> load -> view('front/e_wallet/form/withdraw_form',$data);
        }else {  
            $this -> load -> library('form_validation');
            $this -> load -> model('admin/bank_account');
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/casino_basic_policy',"CBP");
                
            
            $bank_account_req = $this -> input -> post('bank_account_req', TRUE);
            if (!$bank_account_req){
                $bank_account_req  = 0;
            }
            $casino_policy = $this -> CBP -> advanced_search_row();
            
            $this -> min_amount = $casino_policy -> min_per_withdrawals;
            $this -> max_amount = $casino_policy -> min_per_withdrawals;
            
            log_message('error','bank_account_no');
            log_message('error',$bank_account_req);
         
            if ($bank_account_req == '0'){
                $this -> form_validation -> set_rules('holder_name', "Holder Name", 'required|trim');
                $this -> form_validation -> set_rules('bank_name', "Bank Name", 'required|trim');
                $this -> form_validation -> set_rules('bank_branch', "Branch Name", 'required|trim');
                $this -> form_validation -> set_rules('bank_account', "Bank Account", 'required|trim');
                $this -> form_validation -> set_rules(
                    'withdraw_amount_input', 
                    "Withdraw Amount", 
                    "required|callback_get_number|numeric|callback_greater_than_or_equal|callback_less_than_or_equal"
                );
                
                if ($this -> form_validation -> run() == FALSE) {
                    log_message('error', validation_errors());
                    alert_only("Wrong Input Request");
                    exit ;
                }     
            }
            
            $user_no = $this -> session_manager -> get_user_session('user_no');
            $user_id = $this -> session_manager -> get_user_session('user_id');
            $condition[WHERE_CONDITION] = array('user_id'=> $user_id);
            $user = $this -> user -> advanced_search_row($condition);
            
            if (!$user){
                alert("The user is not member of Baofa Membership");
                exit;
            }
            
            if ($bank_account_req == '0'){
                $bank_arr = array(
                    'user_no' => $user_no,
                    'holder' => $this -> input -> post('holder_name', TRUE),
                    'bank_name' => $this -> input -> post('bank_name',TRUE),
                    'bank_branch' => $this -> input -> post('bank_branch', TRUE),
                    'bank_account' => $this -> input -> post('bank_account', TRUE),
                    'reg_date' => time()
                );
                $bank_account_req = $this -> bank_account -> insert($bank_arr);
            }
            $this -> load -> library('deposit_withdraw_service');
            $ret_message = '';
            $result = $this -> deposit_withdraw_service -> withdraw(
                $user_no, $bank_account_req, $this -> get_number($this -> input -> post('withdraw_amount_input', TRUE)),$ret_message
            );
            
            if ($result){
                locationReload('parent');
                exit;            
            }else {
                alert_only($ret_message);
                exit;
            }    
        }
    }

    public function cancel_withdraw(){
        $data = array();
        if (! $this -> input -> is_ajax_request()  && $this -> input -> method(TRUE) != "POST"){
            $data['result'] = 'falied';
            $data['message'] = 'wrong Access';
            echo json_encode($data);
            exit;
        } 
        
        $user_no = $this -> session_manager -> get_user_session('user_no');
        $user_id = $this -> session_manager -> get_user_session('user_id');

        $withdraw_no = $this -> input -> post('withdraw', TRUE);
        $this -> load -> library('deposit_withdraw_service');
        $ret_message ="";
        $result = $this -> deposit_withdraw_service -> cancel_withdraw($user_no, $withdraw_no,$ret_message);
        $this -> session -> set_flashdata('tab', 'cancel_withdraw');
        
        if ($result){
            $data['result'] ="success";
            $data['message'] ="successfully your request has been finished";
            echo json_encode($data);
            exit;
        }else {
            $data['result'] ="failed";
            $data['message'] =$ret_message;
            echo json_encode($data);
            exit;
        }
    }
    
    public function transfer_money() {

    }

    /*
     * 콤마가 포함된 문자열 숫자에서 콤마를 제거한 후 숫자 반환
     * */
    public function get_number($str) {
        $str = trim($str);
        if (strpos($str, ",") !== FALSE) {
            return (int)trim(str_replace(",", "", $str));
        } else {
            return (int)$str;
        }
    }
    
    public function greater_than_or_equal($limit){
        if ($limit >= $this -> min_amount){
            return TRUE;   
        }else {
            $this -> form_validation-> set_message(
                'greater_than_or_equal', 
                "The %s field must be greater than or equal {$this->min_amount}");
            return FALSE;
        }
    }
    
    public function less_than_or_equal($limit){
        if ($limit <= $this -> max_amount){
            return TRUE;   
        }else {
            $this -> form_validation -> set_message(
                'less_than_or_equal', 
                "The %s field must be less than or equal {$this->max_amount}");
            return FALSE;
        }
    }

    /*
     *  월렛에서 게임사로 머니 이동 폼 
     * */
     
    public function transfer_money_form(){
        $this -> load -> model('admin/wallet');
        $user_no = $this -> session_manager -> get_user_session('user_no');
        $user_id = $this -> session_manager -> get_user_session('user_id');
        $request_form = $this -> input -> get("request_form",TRUE);
        $target = $this -> input -> get("target_v",TRUE);
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        
        $data['source'] ="E-WALLET";
        $data['target'] = $target ;
        $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
        $this -> load -> view('front/e_wallet/form/transfer_money_form',$data);
    }
    
    /*
     * 게임머니 에서 월렛으로 머니 이동 폼 
     * */
    public function transfer_wallet_form(){
        $this -> load -> model('admin/wallet');
        
        $this -> load -> helper('location');
        $ret_message ="";
        $user_no = $this -> session_manager -> get_user_session('user_no');
        $user_id = $this -> session_manager -> get_user_session('user_id');

        /*
         * 실제 게임사를 통한 게임머니 확인은 아이피 등록후 함 
        $this -> load -> library('transfer_service');
        $result = $this -> transfer_service -> check_user_game_money($user_no);
        if ($result == FALSE){
            alert_only($ret_message);
            exit;
        }
        */
        
        $reques_form = $this -> input -> get('request_form');
        $target = $this -> input -> get('target_v',TRUE);
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        
        $data['source'] = $target ;
        $data['target'] = "WALLET";
        $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
        
        $this -> load -> view('front/e_wallet/form/transfer_wallet_form',$data);
    }    
    
    public function create_transfer(){
        if ($this -> input -> method(TRUE) != "POST") {
            alert_only("Wrong Access");
            exit;
        }
        log_message('error',print_r($this -> input -> post(),TRUE))    ;
        $this -> load -> library('form_validation');
        $this -> load -> library('transfer_service');
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/wallet');
        
        $this -> form_validation -> set_rules(
            'transfer_amount', "Transfer Amount", "required|callback_get_number|numeric");

        if ($this -> form_validation -> run() == FALSE) {
            log_message('error', 'validation Error');
            log_message('error', validation_errors());
            alert_only(validation_errors());
            exit ;
        } 
        
        $user_no = $this -> session_manager -> get_user_session('user_no');
        $user_id = $this -> session_manager -> get_user_session('user_id');
        
        $data['user_no'] = $user_no;
        $data['user_id'] = $user_id;
        $data['transfer_amount'] = $this -> input -> post('transfer_amount');
        $data['transfer_from'] = $this -> input -> post('transfer_from');
        $data['transfer_to'] = $this -> input -> post('transfer_to');
        
        $condition[WHERE_CONDITION] = array('user_no' => $user_no);
        $user = $this -> user -> advanced_search_row($condition);
        if (!$user){
            alert_only("There is no memeber" );    
            exit;
        }
        $message ='';
        $data['mg_id']   = $user -> mg_id;
        $data['pt_id']   = $user -> pt_id;
        
        $result = $this -> transfer_service -> transfer($data,$message);
        
        if ($result == FALSE){
            alert_only($message );
            exit;
        }
        
        if (!$this -> transfer_service -> filter_result($result)){
            alert_only($message );
            exit;
        }
        
        locationReload('parent');
    }
}
