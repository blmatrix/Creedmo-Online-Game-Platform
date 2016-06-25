<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_service {
    public $CI;
    public function __construct() {
        $this -> CI = &get_instance();
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> model('admin/mg_game_user');
        $this -> CI -> load -> model('admin/pt_game_user');
        $this -> CI -> load -> model('admin/user_level');
        $this -> CI -> load -> model('admin/language');

        $this -> CI -> load -> library('microgame');
        $this -> CI -> load -> library('playtech');
        $this -> CI -> load -> library('user_agent');
        $this -> CI -> load -> library('session_manager');

        $this -> CI -> load -> helper('string');
        $this -> CI -> load -> helper('array');
    }

    /*
     * 로그인
     */
    public function sign_in() {

    }

    /*
     * 회원 가입
     */
    public function sign_up() {

    }

    /*
     * 회원  탈퇴
     */
    public function leave() {

    }

    /*
     * 로그아웃
     */
    public function log_out(&$message) {
        try {    
            $condition[WHERE_CONDITION] = array('user_id' => $user_id);
            $data['login_status'] = LOGIN_STATUS_N;
            $this -> CI -> user -> update($data, $condition);
    
            $this -> CI -> session -> sess_destroy();
            $this -> CI -> session_manager -> destroy_all_session();
            return TRUE;
        }catch(Exception $e){
            $ret_message = $e -> getMessage();
            return FALSE;
        }
    }

    /*
     * 패스워드 리셋
     */
    public function reset_password() {

    }

    /*
     * 아이디 중복 체크
     */
    public function id_duplicated($id, &$ret_message = '') {
        $condition[WHERE_CONDITION] = array('user_id' => $id);
        $user = $this -> CI -> user -> advanced_search_row($condition);
        if ($user) {
            $ret_message = "이미 사용중인 아이디입니다!";
            return FALSE;
        } else {
            $ret_message = "사용가능한 아이디";
            return TRUE;
        }
    }

}
