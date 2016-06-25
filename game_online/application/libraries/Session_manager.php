<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Session_manager {
    private $CI;
    public function __construct() {
        $this -> CI = &get_instance();
        $this -> CI -> load -> library('session');
        $this -> user_session_keys = 
            array(
                'user_no',
                'user_id', 
                'user_name', 
                'user_level', 
                'user_type', 
                'ip', 
                'login_time', 
                'login_status', 
                'lang',
                'pt_login_session',
                'mg_login_session',
                'session_id');

        $this -> admin_session_keys = 
            array(
                'admin_id',
                'admin_name', 
                'ip', 
                'login_time', 
                'login_status');
        
        $this -> game_session_keys = 
            array(
                'mg_session_status', 
                'pt_session_status');
        $this -> init();
    }

    public function init() {}
    public function is_user_login() {
        $is_login = FALSE;
        if ($this -> get_user_session('login_status') == 'Y') {
            $is_login = TRUE;
        }
        return $is_login;
    }
    
    
    public function set_user_session($sess_data) {
        foreach ($sess_data as $key => $value) {
            if (!$this -> is_valid_session_key('user', $key)) {
                throw new Exception('Invalid User Session ');
            }
        }
        $this -> CI -> session -> set_userdata(USER_SESSION, $sess_data);
    }
    
    public function add_user_session($key, $value) {
        if (!$this -> is_valid_session_key('user', $key)) {
            throw new Exception('Invalid User Session ');
        }

        $sess_data = $this -> get_user_session();
        $sess_data[$key] = $value;
        $this -> CI -> session -> set_userdata(USER_SESSION, $sess_data);
    }
    
    public function get_user_session($key = '') {
        if (empty($key) ) {
            $sess_data = $this -> CI -> session -> userdata(USER_SESSION);
            return $sess_data;
        } else {
            if ($this -> is_valid_session_key('user', $key)) {
                $data = $this -> CI -> session -> userdata(USER_SESSION);
                return $data[$key];
            } else {
                throw new Exception('Invalid User Session Key');
            }
        }
    }
       
    public function set_admin_session($sess_data) {
        foreach ($sess_data as $key => $value) {
            if (!$this -> is_valid_session_key('admin', $key)) {
                throw new Exception('Invalid User Session ');
            }
        }
        $this -> CI -> session -> set_userdata(ADMIN_SESSION, $sess_data);
    }

    public function add_admin_session($key, $value) {
        if (!$this -> is_valid_session_key('admin', $key)) {
            throw new Exception('Invalid User Session ');
        }
        $sess_data = $this -> get_admin_session();
        $sess_data[$key] = $value;
        $this -> CI -> session -> set_userdata(ADMIN_SESSION, $sess_data);
    }

    public function get_admin_sessino($key = '') {
        if (empty($key) ) {
            $data = $this -> CI -> session -> userdata(ADMIN_SESSION);
            return $data;
        } else {
            if ($this -> is_valid_session_key('admin', $key)) {
                $data = $this -> C -> session -> userdata(AdMIN_SESSION);
                return $data[$key];
            } else {
                throw new Exception('Invalid Admin Session Key');
            }
        }
    }
    
    public function set_game_session($sess_data) {
        foreach ($sess_data as $key => $value) {
            if (!$this -> is_valid_session_key('game', $key)) {
                throw new Exception('Invalid Game Session ');
            }
        }
        $this -> CI -> session -> set_userdata(GAME_SESSION, $sess_data);
    }

    public function add_game_session($key, $value) {
        if (!$this -> is_valid_session_key('game', $key)) {
            throw new Exception('Invalid Game Session ');
        }

        $sess_data = $this -> get_game_session();
        $sess_data[$key] = $value;
        $this -> CI -> session -> set_userdata(GAME_SESSION, $sess_data);
    }

    public function get_game_session($key = '') {
        if (empty($key)) {
            $data = $this -> CI -> session -> userdata(GAME_SESSION);
            return $data;
        } else {
            if ($this -> is_valid_session_key('game', $key)) {
                $data = $this -> CI -> session -> userdata(GAME_SESSION);
                return $data[$key];
            } else {
                throw new Exception('Invalid Game Session Key');
            }
        }
    }
    
    public function is_valid_session_key($session_type, $session_key) {
        $haystacks = NULL;
        if ($session_type == 'admin') {
            $haystacks = $this -> admin_session_keys;
        } else if ($session_type == 'user') {
            $haystacks = $this -> user_session_keys;
        } else if($session_type == 'game'){
            $haystacks = $this -> game_session_keys;
        }
        if (!in_array($session_key, $haystacks)) {
            return FALSE;
        }
        return TRUE;
    }
    
    
    public function destroy_user_session() {
        $this -> CI -> session -> unset_userdata(USER_SESSION);
    }

    public function destroy_admin_session() {
        $this -> CI -> session -> unset_userdata(ADMIN_SESSION);
    }
    
    public function destroy_game_session() {
        $this -> CI -> session -> unset_userdata(GAME_SESSION);
    }
    
    public function destroy_all_session() {
        $this -> destroy_admin_session();
        $this -> destroy_user_session();
        $this -> destroy_game_session();
    }

    /*
     * 유저 로그인 세션외의 기타 세션 setter
     */
    public function set_extra_session($key, $value) {
        $this -> CI -> session -> set_userdata($key, $value);
    }

    /*
     *유저 로그인 세션외의 기타 세션 getter
     */

    public function get_extra_session($key) {
        return $this -> CI -> session -> userdata($key);
    }

    /*
     *유저 로그인 세션외의 기타 세션 unset
     */
    public function destroy_extra_session($key) {
        $this -> CI -> session -> unset_userdata($key);

    }

}
