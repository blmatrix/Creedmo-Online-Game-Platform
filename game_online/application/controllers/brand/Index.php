<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Index extends Application{
    public function __construct(){
        parent::__construct();  
        
        $this -> load -> library('session_manager');
        $this -> load -> library('user_agent');
        $this -> load -> library('template_generator'); 
        $this -> load -> helper('url');
        $this -> load -> helper('asset');   
    }
     
    public function index(){
        $data = array();     
        $this -> __set_template_data($data);
        $this -> load -> view('brand/index',$data);
    }
    
    public function about_us(){
        $data = array();
        $this -> __set_template_data($data);
        $this -> load -> view('brand/about_us',$data);
    }
    
    public function commissions(){
        $data = array();
        $this -> __set_template_data($data);
        $this -> load -> view('brand/commissions',$data);
    }
    
    public function support(){
        $data = array();
        $this -> __set_template_data($data);
        $this -> load -> view('brand/support',$data);
    }
    
    private function __set_template_data(&$data){
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data); 
    }
}
