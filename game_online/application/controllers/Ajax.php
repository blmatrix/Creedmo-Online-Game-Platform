<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';
/*
 * User 의 Ajax 요청 통합 controller
 */
 
class Ajax extends Application{
        
    public function __construct(){
        parent::__construct();   
    }
    
    /*
     * 접속한 유저의 IP 를 기준으로 국가 및 국가와 관련한 국가 전화번호 코드 반환 
     */
    public function get_phone_code(){
        global $supported_phone_codes;
        $this -> load -> model('admin/country');
        $ip = $this -> input -> ip_address();
        $ip_int = ip2long($ip);
        //$ip_int = 16781311;
        $sql = "
            SELECT * FROM country WHERE ? between ip_scope1_int and ip_scope2_int 
        ";
        $data['result'] = 'ok';
        $data['data'] = NULL;
        $rows = $this -> country -> raw_binding_query($sql, array($ip_int));
        
        if (count($rows) > 0 ){
            if (in_array($rows[0] -> phone_code, $supported_phone_codes)){
                $data['data'] = $rows[0];
            }
        }else {
            $data['data'] = NULL;
        }
        echo json_encode($data);
    }
    
    public function notice_alert_confirm(){
        $this -> load -> model('admin/board');
        $this -> load -> library('session_manager');
        $user_no = $this -> session_manager -> get_user_session('user_no');
        $target_notice_alert = trim($this -> input -> post('target_notice_alert'));
        $cookie = 
            array(
                'name'   => COOKIE_READ_NOTICE_NO,
                'value'  => $target_notice_alert,
                'expire' => '259200'
        );
        set_cookie($cookie);
        $res['result']  = 'success';
        $res['errorCode']  = '0';
        $res['message'] = ''; 
        echo json_encode($res);
        exit;
        
        $notice = $this -> board -> get_notice_by_notice_no((int)$target_notice_alert);
        $read_ms = json_decode($notice-> read_ms);

        $res = array();
        if (!empty($read_ms)){
            if (in_array($user_no, $read_ms)){
                $res['result']  = 'success';
                $res['errorCode']  = '1';
                $res['message'] = 'aleady added';    
            }else {
                $read_ms[] = $user_no;
                $update_arr = array(
                    'read_ms' => json_encode($read_ms)
                );    
                $condition[WHERE_CONDITION] = array('board_no' => $target_notice_alert);
                $this -> board -> update($update_arr,$condition);
                $res['result']  = 'success';
                $res['errorCode']  = '0';
                $res['message'] = ''; 
            }
        }else {
            $read_ms[] = $user_no;
                $update_arr = array(
                    'read_ms' => json_encode($read_ms)
                );    
                $condition[WHERE_CONDITION] = array('board_no' => $target_notice_alert);
                $this -> board -> update($update_arr,$condition);
                $res['result']  = 'success';
                $res['errorCode']  = '0';
                $res['message'] = ''; 
        }
        echo json_encode($res);
    }
    
    /*
     * 게임사 게임머니 정보를  Boafa 에 없데이트 
     * */
    public function update_game_money($vender){
        $ret_message ='';
        $res['result']="success";
        $res['errorCode']="0";
        $res['message']="";
            
        $this -> load -> library('session_manager');
        $this -> load -> library('transfer_service');
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/wallet');
        
        try{
            $user_id = $this -> session_manager -> get_user_session('user_id');     
            $user_no = $this -> session_manager -> get_user_session('user_no');     
            
            if (empty ($user_id)) throw new Exception("Wrong Access : not session", 1);
            $condition[WHERE_CONDITION] = array('user_no' => $user_no);        
            
            switch($vender){
                case 'mg':
                    $result = $this -> transfer_service -> update_mg_money($user_id,$ret_message );
                    if (!$result) {
                        throw new Exception($ret_message,1);
                    }
                    $wallet = $this -> wallet -> advanced_search_row($condition);
                    $res['data']['game_money'] = number_format($wallet -> mg_casino_balance,2);  
                    break;
                    
                case 'pt':
                    $result = $this -> transfer_service -> update_pt_money($user_id,$ret_message );
                    if (!$result){
                        throw new Exception($ret_message);
                    }
                    $wallet = $this -> wallet -> advanced_search_row($condition);
                    $res['data']['game_money'] = number_format($wallet -> pt_casino_balance,2);  
                    break;
            }
        }catch(Exception $e){
           $res['result'] = 'failed';
           $res['errorCode'] = '100';
           $res['message']= $e -> getMessage();;
        }
        echo json_encode($res);
                    
    }
    
    public function update_all_game_money(){
        log_message('error','api 연동 시작');
        $ret_message ='';
        
        $res = array();
        $res['result']='faield';
        $res['resultCode']='0';
            
        $this -> load -> library('session_manager');
        $this -> load -> library('transfer_service');
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/wallet');
        
        $mg_result = FALSE;
        $pt_result = FALSE;
        
        try{
            $user_id = $this -> session_manager -> get_user_session('user_id');     
            $user_no = $this -> session_manager -> get_user_session('user_no');     
            
            if (empty ($user_id)) throw new Exception('Wrong Access : not session', 1);
            $condition[WHERE_CONDITION] = array('user_no' => $user_no);  
            
            $result = $this -> transfer_service -> update_mg_money($user_id,$ret_message );  
            
            if (!$result) {
                $res['mg_game']['errorCode'] = 1;
                $res['mg_game']['message'] = $ret_message;
            }else {
                $res['result']='success';
                $res['mg_game']['errorCode'] = '0';
                $res['mg_game']['message'] = 'ok';
                $mg_result = TRUE;
            }
            
            $result = $this -> transfer_service -> update_pt_money($user_id,$ret_message );
            if (!$result) {
                $res['pt_game']['errorCode'] = '1';
                $res['pt_game']['message'] = $ret_message;
            }else {
                $res['result']="success";
                $res['pt_game']['errorCode'] = '0';
                $res['pt_game']['message'] = 'ok';
                $pt_result = TRUE;
            }
            
            $wallet = $this -> wallet -> advanced_search_row($condition);
            $res['mg_game']['game_money'] = $mg_result ? number_format($wallet -> mg_casino_balance,2) : '0';
            //$res['pt_game']['game_money'] = $pt_result ? number_format($wallet -> pt_casino_balance,2) : '0';
            echo json_encode($res);
           
        }catch(Exception $e){
           log_message('erroe',"익셉션==============================================");
           $res['result'] = 'failed';
           $res['resultCode'] = '100';
           echo json_encode($res);
        }
        
        
       
    }
    
    
    public function cancel_withdraw(){
        
    }
    
}
 