<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Member extends Application {
    public function __construct() {
        parent::__construct();
        $this -> load -> library('baofa_manager','user_service');
        $this -> load -> helper(array('location', 'url', 'array', 'time', 'baofa','string'));
    }
    
    public function join($form = "") {
        if ($this -> input -> method(TRUE) == "GET") {
            $view_name = $this -> set_view_name("sign_up");     
            $this -> load -> view("front/member/sign_up");
            
        } else {
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/wallet');
            $this -> load -> model('admin/mg_game_user');
            $this -> load -> model('admin/pt_game_user');
            $this -> load -> model('admin/user_level');
            $this -> load -> model('admin/language');
			
            $this -> load -> library('form_validation');
            $this -> load -> library('session_manager');
            $this -> load -> library('microgame');
            $this -> load -> library('playtech');
            $this -> load -> library('user_agent');
            
            $this -> load -> helper('string');
            $this -> load -> helper('array');
      		
            $permitted_params = array(
                'upper_code',
                'user_id',
                'user_password',
                'password_confirm',
                'phone_number',
                'user_name'
            );
            
            /*
             * Post 파라미터 검증
             */
            $this -> form_validation -> set_rules('upper_code', "Upper Code", 'trim|required');
            $this -> form_validation -> set_rules('user_id', "User Id", 'trim|required|min_length[6]|max_length[12]|alpha_numeric');
            $this -> form_validation -> set_rules('user_password', "User Password", 'trim|required|min_length[6]|max_length[25]|alpha_numeric');
            $this -> form_validation -> set_rules('password_confirm', "Password Confirm", 'required|matches[user_password]');
            $this -> form_validation -> set_rules('user_name', "User Name", 'trim|required');
            $this -> form_validation -> set_rules('phone_number', "Phone Number", 'trim|required');
       		
            if ($this -> form_validation -> run() == FALSE) {
                alert_only("회원 가입 내역이 잘못되었습니다. 다시 확인해주세요" );
                exit ;
            } 
            //---------->  파라미터 검증 끝 
            
            $params = elements($permitted_params, $this -> input -> post(NULL, TRUE));
            $condition[WHERE_CONDITION] = array('user_id' => $params['user_id']);
            $user = $this -> user -> advanced_search_row($condition);
            
            $condition[WHERE_CONDITION] = array(
                'user_level_code_name' => "Bronze"
            );
            $user_level = $this -> user_level -> advanced_search_row($condition);
            
            if ($user){
                alert_only("이미 존재하는 아이디입니다");
                exit;
            }else {
                /*트랜잭션 시작*/
                $this -> db -> trans_start(); 
                $mg_password = $pt_password =  $game_password = random_string('alnum', 10);
                
                unset($condition);
                $condition[WHERE_CONDITION] = array(
                    'affiliate_code' => trim(strtoupper($params['upper_code']))
                );
                $upper_agent_user = $this -> user -> advanced_search_row($condition);
                if (empty($upper_agent_user)){
                    alert_only("에이젼트 코드가 잘못되었습니다.확인후 다시 가입해주세요.");
                    exit; 
                }
                $affiliate_ref = $upper_agent_user -> user_no;   
                
                $language_code = ''; 
                if ($this -> agent -> accept_lang('zh') || $this -> agent -> accept_lang('zh-cn')){
                    $language_code = "zh";
                }else {
                    $language_code = "en";
                }
                unset($condition);
                $condition[WHERE_CONDITION] = array(
                    'language_code' => $language_code
                );
                $language = $this -> language -> advanced_search_row($condition);
                
                //접속한 아이피로 국가코드를 생성
                $country = '';
                $ip = $this -> input -> ip_address();
                $ip_int = sprintf('%u',ip2long($ip));
                $sql = "
                 SELECT 
                    * 
                 FROM country 
                 WHERE  
                    ? >= INET_ATON(ip_scope1_str) AND ? <= INET_ATON(ip_scope2_str) 
                ";
				$this -> load -> model('admin/country');
                $query_binding = array($ip_int , $ip_int);
                $rows = $this -> country -> raw_binding_query($sql, $query_binding);
                
                if(count($rows) > 0){
                    $country = $rows[0];
                }
                
                $add_user_data['user_id']           = strtoupper(trim($params['user_id']));
                $add_user_data['user_password']     = md5($params['user_password']);
                $add_user_data['user_name']         = $params['user_name'];
                $add_user_data['user_phone']        = $params['phone_number'];
                $add_user_data['affiliate_code']    = $this -> baofa_manager -> generate_affiliate_code();
                $add_user_data['affiliate_ref']     = $affiliate_ref;
                $add_user_data['is_affiliate']      = IS_AFFILATE_Y;
                $add_user_data['mg_id']             = $this -> baofa_manager -> generate_mg_game_id($add_user_data['user_id']);
                $add_user_data['mg_password']       = $mg_password;
                $add_user_data['pt_id']             = $this -> baofa_manager -> generate_pt_game_id($add_user_data['user_id']);
                $add_user_data['pt_password']       = $pt_password;
                
                $add_user_data['user_type']         = USER_TYPE_AFFILATE;
                $add_user_data['language_no']       = $language -> language_no;
                $add_user_data['user_level_no']     = $user_level -> user_level_no;
                $add_user_data['agree_term']        = 'Y';
                $add_user_data['agree_adult']       = 'Y';
                $add_user_data['country_no']        = !empty($country) ? $country -> country_no : 0;
                $add_user_data['reg_date']          = time();
                $add_user_data['join_ip']           = $this -> input -> ip_address();
                $add_user_data['join_date']         = time();
                $add_user_data['confirm_date']      = time();
                
                $insert_user_id = $this -> user -> insert($add_user_data);
                
                /*
                 * 1뎁스 상위 에이전트 존재시 상위 에이전트의 deps1_child_count 증가
                 * */                
                if ($affiliate_ref){
                    unset($condition);
                    $condition[WHERE_CONDITION] = array(
                        'user_no' => $affiliate_ref
                    );
                    $update_data = array(
                        'deps1_child_count' => ($upper_agent_user -> deps1_child_count + 1)
                    );
                    $this -> user -> update($update_data,$condition);
                }
				
                
               /*
                * 2뎁스 상위 에이전트 존재시 상위 에이전트의 deps2_child_count 증가
                * */   
                if (!empty($upper_agent_user-> affiliate_ref)){
                    $upper2_agent_user = NULL;
                    unset($condition);
                    $condition[WHERE_CONDITION] = array(
                        'user_no' => $upper_agent_user-> affiliate_ref
                    );
                    $upper2_agent_user = $this -> user -> advanced_search_row($condition);
                    $update_data= array(
                        'deps2_child_count' => ($upper2_agent_user -> deps2_child_count + 1)
                    );
                    $this -> user -> update($update_data,$condition);
                }
                
                /*
                 * Wallet 생성 
                 * */
                 
                $wallet_insert_data['user_no'] = $insert_user_id;
                $wallet_insert_data['reg_date'] = time();
                $this -> wallet -> insert($wallet_insert_data);
                 
                /*
                 * MG Game account 생성 
                 */
                unset($parms);
                $params =  $this -> microgame-> set_params(array('loginName' => 'MMCashier181029','pinCode' =>'ce6d8b'));
                $result = $this -> microgame -> invoke('IsAuthenticate',$params);
                if ($result->IsAuthenticateResult->ErrorCode != 0) {
                    $error_msg = $result->IsAuthenticateResult->ErrorCode . " : " .$result->IsAuthenticateResult -> ErrorMessage;
                    log_message("error", $error_msg);
                    exit;
                }
                
                unset($params);
               // $params['accountNumber']         = $add_user_data['mg_id'];
                $params['isGeneratePassword']    = FALSE;
                $params['password']              = $mg_password;
                $params['nickName']              = $add_user_data['mg_id'];  // MG 게임의 경우 nickName 필드를 ID 와 같이 사용한다. 
                $params['currency']              = 8;
                $params['bettingProfileId']      = 234;
                
                $params = $this -> microgame -> set_params($params);
                $result = $this -> microgame -> invoke('AddStationAccount', $params);
                
                if ($result -> AddStationAccountResult -> ErrorCode != 0){
                    $error_msg = $result->AddStationAccountResult -> ErrorCode . " : " .$result-> AddStationAccountResult  -> ErrorMessage;
                    log_message("error", "MG_RESULT ===> ".$error_msg);
                }else {
                    //계정 생성후 해당 계정의 Progrssive status 변경 및 mg_game_user 테이블 등록
                    //$account_arr = $this -> microgame-> get_account_object($result, $insert_id, $params[0]['currency'], $add_user_data['mg_id'],'N');
                    unset($params);
                    $account_arr = $this -> microgame-> get_account_object($result, $insert_user_id, 8, $add_user_data['mg_id'],'N');
                    $params = $this -> microgame -> set_params(
                        array(
                            'casinoAccountNumber' => $result -> AddStationAccountResult -> AccountNumber
                        )
                    );
					$this -> mg_game_user -> insert($account_arr);
					
                    $mg_join_status = "N";
                    $pt_join_status = "N";
					
					//한국 계정은 Progressive 가 제공되지 않는다. 
				    /*
					 * Progressive 요청은 주석 처리한다.
                    $result = $this -> microgame -> invoke('AddProgressiveAccount', $params);
                    if ($result -> AddProgressiveAccountResult -> ErrorCode == 0){
                        $account_arr['is_progressive'] = 'Y';
                        $this -> mg_game_user -> insert($account_arr);
                        $mg_join_status = "Y";
                        
                    }
                    else {
                       $error_msg = $result->AddProgressiveAccountResult -> ErrorCode . " : " .$result-> AddProgressiveAccountResult  -> ErrorMessage;
                       log_message("error", "MG_AddProgressiveAccountResult  ===> ".$error_msg);
                    }
					* */
                }
                 
                /*
                 * PT Game 게정 생성  생성 
                 * */
                $result = $this -> playtech -> create_account($add_user_data['pt_id'], $pt_password);
                //if (!$result['error']){
                    unset($account_arr);
                    $account_arr['user_no'] = $insert_user_id;
                    $account_arr['player_name'] = $add_user_data['pt_id'];
                    $account_arr['password'] = $pt_password;
                    $account_arr['reg_date'] = time();
                    $this -> pt_game_user -> insert($account_arr);                    
                    $pt_join_status = "Y";
                //}
                
                /*
                 * PT 및 MG 게임 상태에 대하여 User Table 갱신
                 * */
                $update_data = array(
                    'mg_game_status' => "Y",
                    'pt_game_status' => "Y",
                );
                $update_conditions[WHERE_CONDITION] = array('user_no' => $insert_user_id);
                $this -> user-> update($update_data, $update_conditions); 
                
               
                /*
                 * 세션 설정(회원 가입후 바로 로그인 처리)
                 * */
                $sess_data = array(
                        'user_no' => $insert_user_id,
                        'user_id' => $add_user_data['user_id'],
                        'user_name' => $add_user_data['user_name'],
                        'user_level' => $add_user_data['user_level_no'],
                        'user_type'  => $add_user_data['user_type'],
                        'ip' => $this -> input -> ip_address(),
                        'login_time' => date('Y-m=d h:i:s', time()),
                        'login_status' => LOGIN_STATUS_Y,
                        'session_id' => random_string('unique'), // 32자의  MD5 와 uniqid()를 이용한 고정된 문자열 생성
                        'lang' =>$language -> language_name ? trim($language -> language_name) : LANG_ENG
                );
                $this -> session_manager -> set_user_session($sess_data);
                //$this -> session_manager -> set_extra_session(SESSION_KEY_LANG_CODE, $language -> language_code);
                //$this -> session_manager -> set_extra_session(SESSION_KEY_LANG_NANE, $language -> language_name);
                
                $game_sess_data = array(
                    'mg_session_status' => 'Y',
                    'pt_session_status' => 'N'
                );
                
                $this -> session_manager -> set_game_session($game_sess_data);
                /*
                 * 처리 완료 후 uppper agent 코드를 세션에서 제거
                 * 오프라인 가입은 반드시 agent code 를 기입해야 하며, 세션에 임시 저장하지 않기 때문에 아래의 코드는
                 * 주석 처리 
                if($affiliate_ref){
                    $this -> session_manager -> destroy_extra_session(SESSION_KEY_A_CODE);
                }
                */
                /*
                 * 로그 기록
                 * */
                
                $this -> load -> library('log_service');
                $this -> log_service -> create_log($this -> class_name, $this -> method_name, $insert_user_id);
                
                $this->db->trans_complete(); /*트랜잭션 종료*/
                locationHref(base_url(),'parent');
            }
        }
    }

    public function login() {
        if ($this -> input -> method(TRUE) == "POST") {
            
            $this -> load -> library('user_agent');
            $this -> load -> library('form_validation');
            $this -> load -> helper('location');
            $this -> load -> model('admin/user'); 
            
            $this -> form_validation -> set_rules('user_id', 'User ID', 'trim|required');
            $this -> form_validation -> set_rules('user_password', 'User pawword', 'trim|required');

            if ($this -> form_validation -> run() == FALSE) {
               alert_only("아이디와 비밀번호의 입력양식이 잘못되었습니다. 다시 확인하고 로그인해주세요");
               exit;
            } else {
                //로그인 관련 세션 데이타 저장
                $user_id = strtoupper(trim($this -> input -> post('user_id', TRUE)));
                $user_password = trim($this -> input -> post('user_password', TRUE));
                
                $condition[WHERE_CONDITION] = array('user_id' => $user_id, "user_password" => md5($user_password));
                $result = $this -> user -> advanced_search_row($condition);
                
                if ($result) {
                    $this -> load -> model('admin/language');
                    $lang_condition = array('language_no' => $result -> language_no);
                    $language = $this -> language -> advanced_search_row($lang_condition);
                    
                    $data['login_status'] = LOGIN_STATUS_Y;
                    $this -> user -> update($data, $condition);
                    
                   /*
                    * User Session 설정
                    */                    
                    $this -> load -> library('session_manager');
                    $sess_data = array(
                        'user_no' => $result -> user_no,
                        'user_id' => $result -> user_id,
                        'user_name' => $result -> user_name,
                        'user_level' => $result  -> user_level_no,
                        'user_type'  => $result -> user_type,
                        'ip' => $this -> input -> ip_address(),
                        'login_time' => date('Y-m=d h:i:s', time()),
                        'login_status' => LOGIN_STATUS_Y,
                        'session_id' => random_string('unique'), // 32자의  MD5 와 uniqid()를 이용한 고정된 문자열 생성
                        'lang' => $language -> language_name ? trim($language -> language_name) : LANG_ENG
                    );
                    $this -> session_manager -> set_user_session($sess_data);
                    
                   /*
                    * Game Session 설정
                    */  
                    $game_sess_data = array(
                        'mg_session_status' => 'Y',
                        'pt_session_status' => 'N'
                    );
                    
                    $this -> session_manager -> set_game_session($game_sess_data);
                    
                    /*
                     * 게임사 게임 머니 업데이트 
                     */
                    $this -> load -> library('transfer_service');
                    $ret_message = "";
                    $result = $this -> transfer_service -> update_mg_money($user_id,$ret_message);
                    if (!$result){
                        
                    }
                    
                    $ret_message = "";
                    $result = $this -> transfer_service -> update_pt_money($user_id,$ret_message );
                    //-------> 게임사 게임 머니 업데이트 끝 
                    
                    $this -> load -> library('log_service');
                    $this -> log_service -> create_log($this -> class_name, $this -> method_name, $result -> user_no);
                    locationHref(base_url(),'parent');
                    exit;
                } else {
                    alert_only("입력하신 정보와 일치하는 사용자가 없습니다.");
                    exit;
                }
            }
        } else {
        }
    }
    
    public function logout() {
        $this -> load -> helper('location');
        $this -> load -> model('admin/user');
        $this -> load -> library('session_manager');
       
        $user_id = $this -> session_manager -> get_user_session('user_id');
        $condition[WHERE_CONDITION] = array('user_id' => $user_id);
        $data['login_status'] = LOGIN_STATUS_N;
        $this -> user -> update($data, $condition);        
        
        //*Session Data destory */
        $this -> session_manager -> destroy_user_session();
        redirect(base_url());
    }

    public function password_reset($form) {
        $this->load->library('form_validation');
        $this -> load -> model('admin/user');
        
        /*
         * 차후 메일 서버 구축 혹은 SendMail 설치시 진행
         * */    
       // parent_alert('해당 계정으로 임시 비밀번호를 전송하였습니다'); 
       // exit;
        
        if ($this -> input -> method(TRUE) == "POST") {
            $this -> form_validation -> set_rules('s_user_id', 'User ID', 'trim|required');
            $this -> form_validation -> set_rules('s_user_email', 'User Email', 'trim|required');

            if ($this -> form_validation -> run() == FALSE) {
               $this -> load -> view('front/reset_password');
                exit;
            } else {
                $user_id = strtoupper(trim($this -> input -> post('s_user_id', TRUE)));
                $user_email = trim($this -> input -> post('s_user_email', TRUE));
                $condition[WHERE_CONDITION] = array('user_id' => $user_id);
                $result = $this -> user -> advanced_search_row($condition);
                
                if ($result) {
                    $this -> db -> trans_start();
                    /*
                     * 사용자 정보가 일치하면, 해당 사용자 메일로 임시 비밀번호 발송
                     */
                    if ($result -> user_email == $user_email){
                        $this -> load -> library('email');
                        $this -> load -> helper('string');
                        
                        /*
                         * 임시 비빌헌호 생성 및 DB 등록
                         * */  
                        $tmp_password = random_string('alnum', 16);
                        $update_arr = array('user_password' => MD5($tmp_password));
                        $this -> user -> update($update_arr,$condition);
                        
                        /*
                         * 임시 비밀번호 이메일 발송
                         * */  
                        $this -> email -> from('admin@baofa.net', 'Administrator');
                        $this -> email -> to($user_email); 
                        //$this->email->cc('another@another-example.com'); 
                        //$this->email->bcc('them@their-example.com'); 
                        
                        $this -> email -> subject('Baofa 임시 비밀 번호 발급');
                        $this -> email -> message('new password :' . $tmp_password );  
                        $this -> email -> send();
                        parent_alert('해당 계정으로 임시 비밀번호를 전송하였습니다');
                    }else {
                        alert_only("입력하신 ID 와 EMAIL 정보가 일치하지 않습니다");
                    }
                  $this -> db -> trans_complete();
                } else {
                    alert_only("입력하신 정보와 일치하는 사용자가 없습니다.");
                }
            }
        } else {
            $view_name = $this -> set_view_name("reset_password_form");
            $this -> load -> view("front/member/form/{$view_name}");
        }
    }

    public function check_id_duplicated(){
        $this -> load -> library('user_service');
        $res = array();
        $ret_message = "";
        
        $check_id = $this -> get_parameter('checkId','');
        if (!$check_id){
            $res['result'] = "error";
            $res['errorCode'] = "1";
            $res['message'] = "Wrong Reqeust Paramter!";
            echo json_encode($res);
            exit;
        }
        
        $result = $this -> user_service -> id_duplicated($check_id,$ret_message);
        if (!$result){
            $res['result'] = "error";
            $res['errorCode'] = "1";
            $res['message'] = $ret_message;
            echo json_encode($res);
            exit;
        }else {
            $res['result'] = "success";
            $res['errorCode'] = "0";
            $res['message'] =$ret_message;
            echo json_encode($res);
            exit;
        }        
    } 
}
