<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Microgame {
    public $url = "https://entservices.totalegame.net?wsdl";
    public $client;
    public $is_set_header;
    public $sessionGUID;
    public $remote_addr;
    public $CI;

    public $error_code;
    public $result;
    public $exception;
    public $params; 
    public $agent_accunt;
    public static $microgame;
    
    public function get_instance(){
        if(!isset(Microgame::$microgameo)) 
            Microgame::$microgameo = new Microgame();
        return Microgame::$microgame;
        
    }
    
    public function __construct($sessionGUID = NULL, $remote_addr = NULL) {
        $this -> CI = & get_instance();
        $this -> CI -> load -> library('session');
        $this -> is_set_header = FALSE;
        $this -> client = new SoapClient(
            $this -> url, array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP)
        );

        $this -> agent_account = array();
        $this -> agent_account[] = array(
            'loginName' => 'MMCashier181029','pinCode' =>'ce6d8b'
        );
        $this -> params = array();
    }

    /*
     * Soap 공동 인증헤더를 설정
     */
    public function set_auth_header() {
        $xml = '
              <AgentSession xmlns="https://entservices.totalegame.net">
                  <SessionGUID>' . $this -> sessionGUID . '</SessionGUID>
                  <IPAddress>' . $this -> remote_addr . '</IPAddress>
              </AgentSession>';

        $this -> is_set_header = TRUE;
        $xmlvar = new SoapVar($xml, XSD_ANYXML);
        $header = new SoapHeader('https://entservices.totalegame.net', 'AgentSession', $xmlvar);
        $this -> client -> __setSoapHeaders($header);
    }
     
    /*
     * call_user_func_array 를 통한  Soap Api 호출
    */
    public function invoke($method_name, $params) {
        $result = NULL;    
        try {
            $result = call_user_func_array(array($this -> client, $method_name), $params);
            log_message('error', "MG Request {$method_name} ===> " . print_r($result,true));
            /* 로그인 성공시 공통 인증 헤더값을 설정*/
            if ($method_name == "IsAuthenticate") {
                if ($this -> error_code == 0) {
                    $this -> sessionGUID = $result -> IsAuthenticateResult -> SessionGUID;
                    //$this -> remote_addr = $_SERVER['REMOTE_ADDR'];
                    $this -> remote_addr = "52.69.174.246";
                    $this -> set_auth_header();
                }
            }
        }catch (Exception $e){
            log_message('error', "Exception.method_name => {$method_name} ===>". var_dump($e));
            log_message('error', "Exception.method_name => {$method_name} ===>". print_r($result,true));
            log_message('error', "Exception.method_name => {$method_name} ===>". print_r($e,true));
        }
        return $result;
    }
        
    /*
     * call_user_func_array 를 통한  Soap Api 호출, 세션 만료시 세션 메서드 호출을 먼저함 
    */
    public function invoke2($method_name, $params = array()) {
        $result = NULL;    
        try {
            if ($method_name = "IsAuthenticate"){
                for ($i =0; $i < 5; $i++){
                    $result = call_user_func_array(array($this -> client, $method_name), $this -> agent_accunt);
                    if ($result -> IsAuthenticateResult -> ErrorCode == 0){
                        $this -> sessionGUID = $result -> IsAuthenticateResult -> SessionGUID;
                        $this -> remote_addr = $_SERVER['REMOTE_ADDR'];
                        $this -> set_auth_header();
                        break;
                    }
                    sleep(1);
                }
            }
            else {
                $result = call_user_func_array(array($this -> client, $method_name), $params);
                $property = $method_name.'Result';
               
                if ($result -> $property -> ErrorCode == 62){
                    $is_authenticate = FALSE;
                    for ($i =0; $i < 5; $i++){
                        $result = call_user_func_array(array($this -> client, $method_name), $this -> agent_accunt);
                        if ($result -> IsAuthenticateResult -> ErrorCode == 0){
                            $this -> sessionGUID = $result -> IsAuthenticateResult -> SessionGUID;
                            $this -> remote_addr = $_SERVER['REMOTE_ADDR'];
                            $this -> set_auth_header();
                            $is_authenticate = TRUE;
                            break;
                        }
                        sleep(1);
                    }
                    $result = call_user_func_array(array($this -> client, $method_name), $params);
                }
            }             
           
        }catch (Exception $e){
            log_message('error', "Exception ===>". var_dump($e));
        }
        return $result;
    }
    
    /*
     * call_user_func_array 에 적합하게 파라미터 인자를 변환
    */
    public function set_params($arr){
        unset($this -> params);
        $this -> params = array();
        $this -> params[] = $arr;
        return $this -> params;
    }
    
    public function get_account_object($result, $user_no, $currency_id, $account_name, $is_progressive= NULL){
        $result = $result -> AddStationAccountResult;
        $account_arr = array(
            'user_no'                => $user_no,
            'account_name'           => $account_name,
            'account_number'         => $result -> AccountNumber,
            'currency_id'            => $currency_id,
            'betting_profile_id'     => $result -> ProfileId,
            'is_progressive'         => $is_progressive,
            'customer_id'            => $result -> CustomerId,
            'lock_account_status'    => $result -> LockAccountStatus,
            'suspend_account_status' => $result -> SuspendAccountStatus,
            'casino_id'              => $result -> CasinoId,
            'pin_code'               => $result -> PinCode,
            'nick_name'              => $result -> NickName,
            'reg_date'               => time()
        );
        return $account_arr;
    }
}
