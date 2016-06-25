<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAuth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this -> load -> model('admin/admin');
        $this -> load -> helper('url');
        $this -> load -> helper('location');
        $this -> load -> library('form_validation');
        $this -> load -> library('baofa_manager');
    }

    public function index() {
        $this -> signin();
    }

    /*
     * 아이디는 대문자로 저장되기 때문에 
     * 로그인이나 기타 폼에서 ID 는 대문자로 변환하여 로직 수행 
     * */
    public function signin() {
        //로그인 폼 요청
        if ($this -> input -> method(TRUE) != "POST") {
            $this -> load -> view('admin/auth/signin');
        }
        // 로그인 인증 요청
        else {
            $this -> form_validation -> set_rules('admin_id', 'Admin Id', 'trim|required');
            $this -> form_validation -> set_rules('admin_pass', 'Admin Pass', 'trim|required');

            if ($this -> form_validation -> run() == FALSE) {
                $this -> load -> view('admin/auth/signin');
            } else {

                //로그인 관련 세션 데이타 저장
                $admin_id = strtoupper(trim($this -> input -> post('admin_id', TRUE)));
                $admin_pass = $this -> input -> post('admin_pass', TRUE);
                $condition[WHERE_CONDITION] = array('admin_id' => $admin_id, "admin_pass" => md5($admin_pass));
                $result = $this -> admin -> advanced_search_row($condition);
                
                if ($result ) {
                    $condition = array('admin_no' => $result -> admin_no);
                    $data['login_status'] = LOGIN_STATUS_Y;
                    $this -> admin -> update($data, $condition);
                    
                    //관리자 세션 설정
                    $sess_data[NO] = $result -> admin_no;
                    $sess_data[ID] = strtoupper(trim($this -> input -> post('admin_id', TRUE)));
                    $sess_data[NAME] = $result -> admin_name;
                    $sess_data[LEVEL] = $result-> admin_level_no;
                    $sess_data[IP] = $this -> input -> ip_address();
                    $sess_data[LOGIN_TIME] = date('Y-m=d h:i:s', time());
                    $sess_data[LOGIN_STATUS] = LOGIN_STATUS_Y;

                    $this -> session -> set_userdata(ADMIN_SESSION, $sess_data);
                    redirect('admin/index/index');
                
                } else {
                    alert("입력하신 정보와 일치하는 사용자가 없습니다.", site_url('admin'));
                }
            }
        }
    }

    public function logout() {
        $admin_session = $this -> session -> userdata(ADMIN_SESSION);
        $admin_id = $admin_session[ID];
       
        $condition[WHERE_CONDITION] = array('admin_id' => $admin_id);
        $data['login_status'] = LOGIN_STATUS_N;
        $this -> admin -> update($data, $condition);        
        
        //*Session Data destory */
        $this -> session -> unset_userdata(ADMIN_SESSION);
        redirect('admin/adminauth/signin');
    } 
    
    //관리자에 의한 회원 추가 
    //아이디는 대문자로 저장. 
    public function create_member(){
        $this -> load -> helper('location');

        $this -> load -> model('admin/user');    
        $this -> load -> model('admin/wallet');
        $this -> load -> model('admin/mg_game_user');
        $this -> load -> model('admin/pt_game_user');
        
        $this -> load -> library('form_validation');
        $this -> load -> library("baofa_manager");
        $this -> load -> library('microgame');
        $this -> load -> library('playtech');
        
        $this -> load -> heler('string');
        
        $condition[WHERE_CONDITION] = array('user_id' =>  strtoupper(trim($this -> input -> post('user_id'))));
        $users = $this -> user -> advanced_search_result($condition);
        $add_user_data = array();
        if ($this -> input -> method(TRUE) == "POST") {
            if (count($users) > 0) {
                alert("inputed id already existed !! ");
            } else {
                $mg_password = $pt_password =  $game_password = random_string('alnum',10);
                $add_user_data['user_id']           = $this -> input -> post('user_id') ? strtoupper(trim($this -> input -> post('user_id'))) : NULL;
                $add_user_data['user_password']     = $this -> input -> post('user_password') ? md5($this -> input -> post('user_password'))  : NULL;
                $add_user_data['user_name']         = $this -> input -> post('user_name') ? $this -> input -> post('user_name')               : NULL;
                $add_user_data['user_phone']        = $this -> input -> post('user_phone') ? $this -> input -> post('user_phone')             : NULL;
                $add_user_data['user_email']        = $this -> input -> post('user_email') ? $this -> input -> post('user_email')             : NULL;
                $add_user_data['im_type']           = $this -> input -> post('im_type') ? $this -> input -> post('im_type')                   : NULL;
                $add_user_data['im_id']             = $this -> input -> post('im_id') ? $this -> input -> post('im_id')                       : NULL;
                $add_user_data['affiliate_code']    = $this -> baofa_manager -> generate_affiliate_code();
                $add_user_data['is_affiliate']      = IS_AFFILATE_Y;
                $add_user_data['mg_id']             = $this -> baofa_manager -> generate_mg_game_id($add_user_data['user_id']);
                $add_user_data['mg_password']       = $mg_password;
                $add_user_data['pt_id']             = $this -> baofa_manager -> generate_pt_game_id($add_user_data['user_id']);
                $add_user_data['pt_password']       = $pt_password;
                
                $add_user_data['user_gender']       = $this -> input -> post('user_gender') ? $this -> input -> post('user_gender')           : NULL;
                $add_user_data['language_no']       = (int)$this -> input -> post('language_no') ? $this -> input -> post('language_no')      : NULL;
                $add_user_data['user_level_no']     = (int)$this -> input -> post('user_level') ? $this -> input -> post('user_level')        : NULL;
                $add_user_data['reg_date']          = time();
                $add_user_data['join_date']         = time();
                $add_user_data['confirm_date']      = time();
                log_message('error',"affiliate_code =======> ".$add_user_data['affiliate_code'] );
                $insert_id = $this -> user -> insert($add_user_data);
                
                $condition[WHERE_CONDITION] = array(
                    'user_id' => ($this -> input -> post('user_id') ? strtoupper(trim($this -> input -> post('user_id'))) : NULL)
                );
                $user = $this -> user -> advanced_search_row($condition);
                
                /*
                 * 회원 생성 및 가입시 초기화된 Wallet 생성 
                */
                
                $wallet_insert_data['user_no'] = $user -> user_no;
                $wallet_insert_data['reg_date'] = time();
                $this -> wallet -> insert($wallet_insert_data);
                
                /*
                 * MG Game 게정 생성 
                */
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
                    $account_arr = $this -> microgame-> get_account_object($result, $insert_id, 8, $add_user_data['mg_id'],'N');
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
                 * PT Game 게정 생성 및 pt_game_user 테이블 등록  
                */
                $result = $this -> playtech -> create_account($add_user_data['pt_id'], $pt_password);
                //if (!$result['error']){
                    unset($account_arr);
                    $account_arr['user_no'] = $insert_id;
                    $account_arr['player_name'] = $add_user_data['pt_id'];
                    $account_arr['password'] = $pt_password;
                    $account_arr['reg_date'] = time();
                    $this -> pt_game_user -> insert($account_arr);                    
                    $pt_join_status = "Y";
                 
                 
                //}
                $update_data = array(
                    'mg_game_status' => "Y",
                    'pt_game_status' => "Y",
                );
                
                //PT 와 MG 게임의 가입 상태를 user table 갱신 
                $update_conditions[WHERE_CONDITION] = array('user_no' => $insert_id);
                $this -> user-> update($update_data, $update_conditions);
                locationReload('parent');
            }
        }else {
            exit;
        }
    }
}
