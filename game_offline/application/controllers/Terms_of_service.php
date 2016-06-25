<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class terms_of_service extends Application{
    public function __construct(){
        parent::__construct(); 
        $this -> check_session();              
    }
	
    private function __set_side_menu_index(&$data){
        $data['side_index'] = 'terms_of_service';    
    }
	
    public function index(){
        $this -> load -> library('session_manager');
        $this -> load -> library('user_agent');
        
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
        
        $this -> load -> model('admin/customer_service');
        $this -> load -> model('/admin/user');
        $this -> load -> library('template_generator');
        
        $data = array();
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        $this -> __set_side_menu_index($data);
        
        $view_name = $this -> set_view_name("terms_of_service");
        $this -> load -> view("front/terms_of_service/{$view_name}",$data);
    }
}
