<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class promotion extends Application{
    public function __construct(){
        parent::__construct();           
    }
    
    private function __set_side_menu_index(&$data){
        $data['side_index'] = 'promotion';
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
        
        $this -> load -> view('front/promotion/promotion',$data);
    }
}
