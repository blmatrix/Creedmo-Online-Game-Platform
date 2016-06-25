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
            $data = array();    
            
            $this -> load -> model('admin/country');
            $ip = $this -> input -> ip_address();
            $ip_int = sprintf('%u',ip2long($ip));
            //log_message('error', $ip);
            //log_message('error', $ip_int);
    
            /*
             * 디비의 IP 문자열에 대한 정수 변환정보가  잘못되어 있는 관계로 
             * 현재 mysql 의 inet_aton 함수를 이용햐여 정수로 변환한 후, query함  
             * 차후 디비의 IP 정보를 일괄적으로 정수로 변경하고 인덱싱을 할 필요가 있음 
             */
            $sql = "
                 SELECT 
                    * 
                 FROM country 
                 WHERE  
                    ? >= INET_ATON(ip_scope1_str) AND ? <= INET_ATON(ip_scope2_str) 
            ";
            
            $query_binding = array($ip_int , $ip_int);
            $rows = $this -> country -> raw_binding_query($sql, $query_binding);

            $data['choosen_country'] = "";
            if(count($rows) > 0){
                //log_message('error',print_r($rows[0], TRUE));
                $country = $rows[0];
                $data['choosen_country'] = $country -> phone_code;
            }
            
            //-------------------------------------------------------------------------------------------------------
            //기본 국가 코드 설정한 후 사용자의 국가코드를 추가한 후 ASC 정렬
            //-------------------------------------------------------------------------------------------------------
            $default_country_codes = array(
                '60','61','62','63','64','65','66','81','82','83','84','86','852','853','855','956','880','886');
            sort($default_country_codes);    
            $data['default_country_codes'] = $default_country_codes;
            $this -> load -> view("front/member/form/{$form}_form", $data);
            
        } else {
            $this -> load -> model('admin/user');
            $this -> load -> model('admin/wallet');
            $this -> load -> model('admin/mg_game_user');
            $this -> load -> model('admin/pt_game_user');
            $this -> load -> model('admin/user_level');
            $this -> load -> model('admin/language');
            
            $this -> load -> library('form_validation');
            $this -> load -> library('microgame');
            $this -> load -> library('playtech');
            $this -> load -> library('user_agent');
            
            $this -> load -> helper('string');
            $this -> load -> helper('array');
            
            $permitted_params = array(
                'j_upper_code',
                'j_user_id',
                'j_user_password',
                'j_repeat_password',
                'j_country_phone_code_select',
                'j_country_phone_code_input',
                'j_phone_number',
                'j_user_email',
                'j_gender',
                'j_user_name',
                'j_im_type',
                'j_im_id',
                'agree_adult',
                'agree_term'
            );
            
            /*
             * Post 파라미터 검증
             */
            $this -> form_validation -> set_rules('j_user_id', "User Id", 'trim|required|min_length[6]|max_length[12]|alpha_numeric');
            $this -> form_validation -> set_rules('j_user_password', "User Password", 'trim|required|min_length[6]|max_length[25]|alpha_numeric');
            $this -> form_validation -> set_rules('j_repeat_password', "Password Confirm", 'required|matches[j_user_password]');
            
            if ($this -> post_parameter('j_country_phone_code_select')){
                $this -> form_validation -> set_rules('j_country_phone_code_input', "Phone Code", 'trim|required');
            }

            if ($this -> post_parameter('j_country_phone_code_input')){
                $this -> form_validation -> set_rules('j_country_phone_code_select', "Phone Code", 'trim|required');
            }
            
            $this -> form_validation -> set_rules('j_phone_number', "Phone Number", 'trim|required');
            $this -> form_validation -> set_rules('j_user_email', "Email", 'trim|required|valid_email');
            $this -> form_validation -> set_rules('j_gender', "Gender", 'trim|required');
            $this -> form_validation -> set_rules('j_user_name', "User Name", 'trim|required');
            $this -> form_validation -> set_rules('j_im_type', "Im", 'trim|required');
            $this -> form_validation -> set_rules('j_im_id', "Im Id", 'trim|required');
            $this -> form_validation -> set_rules('agree_adult', "Agree Adult", 'trim|required');
            $this -> form_validation -> set_rules('agree_term', "Agree Term", 'trim|required');
            
            if ($this -> form_validation -> run() == FALSE) {
                log_message('error', validation_errors());
                alert_only("Wrong Reqeust" );
                exit ;
            } 
            //---------->  파라미터 검증 끝 
            
            $params = elements($permitted_params, $this -> input -> post(NULL, TRUE));
            $condition[WHERE_CONDITION] = array('user_id' => $params['j_user_id']);
            $user = $this -> user -> advanced_search_row($condition);
            
            $condition[WHERE_CONDITION] = array(
                'user_level_code_name' => "Bronze"
            );
            $user_level = $this -> user_level -> advanced_search_row($condition);
            
            if ($user){
                alert_only("Requested ID already existed !!");
                exit;
            }else {
                /*트랜잭션 시작*/
                $this -> db -> trans_start(); 
                $mg_password = $pt_password =  $game_password = random_string('alnum', 10);
                $upper_agent_user = NULL;
                $affiliate_ref = 0;
                
                if (!empty($params['j_upper_code'])){
                    unset($condition);
                    $condition[WHERE_CONDITION] = array(
                        'affiliate_code' => trim($params['j_upper_code'])
                    );
                    $upper_agent_user = $this -> user -> advanced_search_row($condition);
                    if (empty($upper_agent_user)){
                        alert_only("Your upper agent not existed!.");
                        exit; 
                    }
                    $affiliate_ref = $upper_agent_user -> user_no;   
                }
                
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
                
                $this -> load -> model('admin/country');
                $country = NULL;
                if(count($rows) > 0){
                    $country = $rows[0];
                }
                
                $user_country_code = 0;
                if (!empty($params['j_country_phone_code_select'])){
                    $user_country_code =  $params['j_country_phone_code_select'];
                }
                
                if (!empty($params['j_country_phone_code_input'])){
                    $user_country_code =  $params['j_country_phone_code_input'];
                }
                
                $country = NULL;
                $condition[WHERE_CONDITION] = array('phone_code' => $user_country_code);
                $country = $this -> country -> advanced_search_row($condition);
                
                $add_user_data['user_id']           = strtoupper(trim($params['j_user_id']));
                $add_user_data['user_password']     = md5($params['j_user_password']);
                $add_user_data['user_name']         = $params['j_user_name'];
                $add_user_data['user_phone']        = $user_country_code.'-'.$params['j_phone_number'];
                $add_user_data['user_email']        = $params['j_user_email'];
                $add_user_data['im_type']           = $params['j_im_type'];
                $add_user_data['im_id']             = $params['j_im_id'];
                $add_user_data['affiliate_code']    = $this -> baofa_manager -> generate_affiliate_code();
                $add_user_data['affiliate_ref']     = $affiliate_ref;
                $add_user_data['is_affiliate']      = IS_AFFILATE_Y;
                $add_user_data['mg_id']             = $this -> baofa_manager -> generate_mg_game_id($add_user_data['user_id']);
                $add_user_data['mg_password']       = $mg_password;
                $add_user_data['pt_id']             = $this -> baofa_manager -> generate_pt_game_id($add_user_data['user_id']);
                $add_user_data['pt_password']       = $pt_password;
                
                $add_user_data['user_type']         = USER_TYPE_AFFILATE;
                $add_user_data['user_gender']       = $params['j_gender'];
                $add_user_data['language_no']       = $language -> language_no;
                $add_user_data['country_no']        = !empty($country) ? $country -> country_no : 0;
                $add_user_data['user_level_no']     = $user_level -> user_level_no;
                $add_user_data['agree_term']        = $params['agree_term'];
                $add_user_data['agree_adult']       = $params['agree_adult'];
                
                $add_user_data['reg_date']          = time();
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
                $params =  $this -> microgame-> set_params(array('loginName' => 'BAOFA174364','pinCode' =>'d05276'));
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
                $params['bettingProfileId']      = 4;  
                
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
                    $result = $this -> microgame -> invoke('AddProgressiveAccount', $params);
                   
                    $mg_join_status = "N";
                    $pt_join_status = "N";
                    
                    if ($result -> AddProgressiveAccountResult -> ErrorCode == 0){
                        $account_arr['is_progressive'] = 'Y';
                        $this -> mg_game_user -> insert($account_arr);
                        $mg_join_status = "Y";
                        
                    }
                    else {
                       $error_msg = $result->AddProgressiveAccountResult -> ErrorCode . " : " .$result-> AddProgressiveAccountResult  -> ErrorMessage;
                       log_message("error", "MG_AddProgressiveAccountResult  ===> ".$error_msg);
                    }
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
                        'lang' => !empty($language -> language_name) ? trim($language -> language_name) : LANG_ENG
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
                 * */
                if($affiliate_ref){
                    $this -> session_manger -> destroy_extra_session(SESSION_KEY_A_CODE);
                }
                
                /*
                 * 로그 기록
                 * */
                
                $this -> load -> library('log_service');
                $this -> log_service -> create_log($this -> class_name, $this -> method_name, $insert_user_id);
                $this->db->trans_complete(); /*트랜잭션 종료*/
                locationReload('parent');
            }
        }
    }

    public function login() {
        
        if ($this -> input -> method(TRUE) == "POST") {
           
            $this -> load  -> library('form_validation');
            $this -> load  -> model('admin/user'); 
            $this -> form_validation -> set_rules('l_user_id', 'User ID', 'trim|required');
            $this -> form_validation -> set_rules('l_user_password', 'User pawword', 'trim|required');

            if ($this -> form_validation -> run() == FALSE) {
               $this -> load -> view('front/signin');
            } else {
                //로그인 관련 세션 데이타 저장
                $user_id = strtoupper(trim($this -> input -> post('l_user_id', TRUE)));
                $user_password = trim($this -> input -> post('l_user_password', TRUE));
                $return_url = $this -> input -> get('return_url');
                if (!$return_url){
                    $return_url ='';    
                }
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
                    //$this -> session_manager -> set_extra_session(SESSION_KEY_LANG_CODE, $language -> language_code);
                    //$this -> session_manager -> set_extra_session(SESSION_KEY_LANG_NANE, $language -> language_name);
                    
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
                    locationReload('parent');
                    exit;
                } else {
                    alert_only("입력하신 정보와 일치하는 사용자가 없습니다.");
                    exit;
                }
            }
        } else {
            $this -> load -> view('front/signin');
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
                    $this->db->trans_start();
                    /*
                     * 사용자 정보가 일치하면, 해당 사용자 메일로 임시 비밀번호 발송
                     */
                    if ($result -> user_email == $user_email){
                        $this->load->library('email');
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
                        $this->email->from('admin@baofa.net', 'Administrator');
                        $this->email->to($user_email); 
                        //$this->email->cc('another@another-example.com'); 
                        //$this->email->bcc('them@their-example.com'); 
                        
                        $this->email->subject('Baofa 임시 비밀 번호 발급');
                        $this->email->message('new password :' . $tmp_password );  
                        $this->email->send();
                        parent_alert('해당 계정으로 임시 비밀번호를 전송하였습니다');
                    }else {
                        alert_only("입력하신 ID 와 EMAIL 정보가 일치하지 않습니다");
                    }
                  $this->db->trans_complete();
                } else {
                    alert_only("입력하신 정보와 일치하는 사용자가 없습니다.");
                }
            }
        } else {
            $this -> load -> view('front/member/form/reset_password_form');
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
