<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Super Controller
 */
class Application extends CI_Controller {
    const M_VIEW_PREFIX ="m_";   
    
    public function __construct() {
        parent::__construct();
        $this -> load -> library('session_manager');
        $this -> load -> library('user_agent');
        $this -> load -> helper('url');
        $this -> load -> helper('location');
        $this -> load -> helper('time');
        $this -> load -> helper('util');
        
        //모바일 실행일 경우, 좌측 사이드 메뉴에서 라이브 게임을 바로 실행할 수 있기 때문에 
        //game_launcher helper 를 로딩한다.
        if ($this -> is_mobile_access()){
            $this -> load -> helper('game_launcher');
        }
       
		//$this -> check_session();
    }
    
    public function is_mobile_access(){
        if ($this -> agent -> is_mobile()){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    
    public function set_view_name($view_name){
        if ($this -> is_mobile_access()){
            return Application::M_VIEW_PREFIX.$view_name;           
        }else {
            return $view_name;
        }        
        
    }
    
    public function _remap($method, $params = array()) {
        //log_message('error','remap log');
        $r_type = $this -> input -> method(TRUE);
        $this -> class_name = get_class($this);
        $this -> method_name = $method;
                
        //POST 방식에 대한 로그는 해당 컨트롤러의 메서드에서 직접 로그를 생성한다.
        if ($r_type !="POST") {
            $this -> load -> library('log_service');
            $this -> log_service -> create_log(get_class($this), $method);
        }
        call_user_func_array(array($this, $method), $params);
    }
     
    //----------------------------------------------------------------------------------
    // 세션 체크, 존재하는 세션이 없을 경우 지정된 페이지로 이동
    //----------------------------------------------------------------------------------
    public function check_session($redirect_url = '') {
        $redirect_url = !empty($redirect_url) ? $redirect_url : "/";
        if (!$this -> session_manager -> is_user_login()) {
            redirect(base_url($redirect_url));
            exit ;
        } else {
            return $this -> session_manager -> get_user_session('user_no');
        }
    }

    //----------------------------------------------------------------------------------
    // referer 체크,referer 없을 경우 지정된 페이지로 이동
    //----------------------------------------------------------------------------------
    public function check_referer($redirect_url = ''){}
    
    //----------------------------------------------------------------------------------
    // 세션별로 부여된 세션아이디의 유효성 검증
    //----------------------------------------------------------------------------------
    
    public function check_session_id(){}
    
    //----------------------------------------------------------------------------------
    // 다국어 메시지 처리
    //----------------------------------------------------------------------------------
    public function get_message($message_key){}
    
    public function get_parameter($key, $default = FALSE){
        $paramter = $this -> input -> get($key, TRUE);
        if (!empty($paramter)){
            return $paramter;
        }else {
            return $default;
        }
    }
    
    public function post_parameter($key, $default = FALSE){
        $paramter = $this -> input -> post($key, TRUE);
        if ($paramter){
            return $paramter;
        }else {
            return $default;
        }
    }
}
