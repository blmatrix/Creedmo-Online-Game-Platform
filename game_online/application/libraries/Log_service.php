<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Log_service {
    public $CI;

    public function __construct() {
        $this -> CI = &get_instance();
    }

    public function log($user_no, $track_type ="login") {
        $this -> CI -> load -> model('admin/user_track');
        $this -> CI -> load -> library('user_agent');
        $access_type = '';
        $browser = '';
        
        if ($this-> CI -> agent -> is_mobile()){
            $access_type =  "mobile";
        }else {
            $access_type = "desktop";
        }
        
        if ($this -> CI -> agent -> is_browser()) {
            $browser = $this -> CI -> agent -> browser() . ' ' . $this -> CI -> agent -> version();
        } elseif ($this -> CI -> agent -> is_robot()){
            $browser = $this -> CI -> agent -> robot();
        } elseif ($this -> agent -> is_mobile()) {
            $browser = $this -> CI -> agent -> mobile();
        } else {
            $browser = 'Unidentified User Agent';
        }
        $user_track_data = array(
            'user_no'  => $user_no, 
            'user_ip'  => $this -> CI -> input -> ip_address(), 
            'platform' => $this -> CI -> agent -> platform(),
            'access_type' => $access_type,
            'browser' => $browser,
            'track_type' => $track_type,
            'reg_date' => time() 
        );
        
        $insert_user_track_id = $this -> CI -> user_track-> insert($user_track_data);
        return $insert_user_track_id;
    }

    public function create_log($class='', $method='', $user_no = 0){
        /*
        if ($this -> input -> is_ajax_request()){
            return;
        }
        */
        
        $this -> CI -> load -> model('admin/user_action_log');
        $this -> CI -> load -> library('user_agent');
        $this -> CI -> load -> library('session_manager');
        
        $action_class = $class;
        $action_function = $method;
        $request_method = $this -> CI -> input -> method(TRUE) == "POST" ? REQUEST_METHOD_POST : REQUEST_METHOD_GET;
        $request_type = $this -> CI -> input -> is_ajax_request() ? REQUEST_TYPE_AJAX: REQUEST_TYPE_COMMON;
        $action_url = $this -> CI -> uri -> uri_string();
        $action_query = '';
        $ip = $this -> CI -> input -> ip_address();
        
        $req_parameter = '';
        if ($this -> CI -> input -> method(TRUE) == "POST" ){
            $req_parameter = json_encode($this -> CI -> input -> post(NULL, TRUE));    
        }else {
            $req_parameter = json_encode($this -> CI -> input -> get(NULL, TRUE));    
        }
         
        $device = '';
        if ($this -> CI -> agent -> is_mobile()){
            $device = "MOBILE";    
        }else {
            $device= "DESKTOP";
        }
        
        $platform = $this -> CI -> agent -> platform();
        
        $browser = '';
        $browser_version = '';
        if ($this ->  CI -> agent -> is_browser()) {
            $browser = $this  -> CI -> agent -> browser();
            $browser_version = $this -> CI -> agent -> version();
        } elseif ($this -> CI -> agent -> is_robot()){
            $browser = $this -> CI -> agent -> robot();
        } elseif ($this -> CI -> agent -> is_mobile()) {
            $browser = $this -> CI -> agent -> mobile();
        } else {
            $browser = 'Unidentified User Agent';
        }
        
        $is_referer = '';
        $referer = '';
        if ($this -> CI -> agent -> is_referral()){
            $is_referer =  "Y";
        }else {
            $is_referer = "N";
        }
        $referer =  $this -> CI -> agent -> referrer();
        
        $user_type = USER_TYPE_NOT_MEMBER; 
        if (!$user_no){
            if ($this -> CI ->  session_manager -> is_user_login()){
                $user_no = $this -> CI -> session_manager -> get_user_session('user_no');
                $user_type = USER_TYPE_MEMBER;
            }        
        }else {
             $user_type = USER_TYPE_MEMBER; 
        }
        $user_agent = $this -> CI -> agent -> agent_string();
        
        $robot = '';
        if ($this -> CI -> agent -> is_robot()){
            $robot =  $this -> CI -> agent -> robot();
        }
        $this -> CI -> load -> model('admin/country');
        $country = $this -> CI -> country -> get_country_by_ip($ip);
        
        $access_country = (!empty($country) ? $country -> country_name : 'unknown');
        $accesss_country_code  = (!empty($country) ? $country -> country_code : 'FF');;
         
        $data = array(
            'user_no' => $user_no,
            'action_class' => $action_class,
            'action_function' => $action_function,
            'request_method' => $request_method,
            'request_type' => $request_type,
            'action_url' =>   "http://". $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
            'action_uri' =>  $this -> CI -> uri -> uri_string(),
            'action_query' => "",
            'ip' => $ip,
            'country' => $access_country ,
            'country_code' => $accesss_country_code,
            'req_parameter' => $req_parameter,
            'device' => $device,
            'platform' => $platform,
            'browser' => $browser,
            'browser_version' => $browser_version,
            'is_referer' => $is_referer,
            'referer' => $referer,
            'user_type' => $user_type,
            'user_agent' => $user_agent,
            'robot' => $robot,
            'reg_date' => time()
        );
        $this -> CI -> user_action_log -> insert($data);
    }
}
