<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Index extends Application{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
        $this -> load -> helper('string');
        $this -> load -> helper('game_launcher');
        
        $this -> load -> library('session_manager');
        $this -> load -> library('user_agent');
        $this -> load -> library('user_agent');
        
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/game');
        $this -> load -> model('admin/customer_service');
        $this -> load -> library('template_generator');
        $this -> load -> library('form_validation');
        
        $data = array();
        
        $u_code = $this -> input -> get('u_code');
        if ($this -> session_manager -> is_user_login()){
            
            $view_name = $this -> set_view_name('main');
            /*
             * Top, Footer 데이타 생성 
             */ 
            $data = array();
            $this -> template_generator -> set_top_user_data($data);
            $this -> template_generator -> set_footer_data($data);
            //-----> Top, Footer 데이타 생성 완료
            
            unset($condition);
            $condition[LIMIT_CONDITION][LIMIT] =  3;
            $condition[LIMIT_CONDITION][OFFSET] = 0;
            $condition[WHERE_CONDITION] = array('vender_no' => VENDER_PT);
            $data['pt_games'] = $this -> game -> advanced_search_result($condition);
    
            $condition[WHERE_CONDITION] = array('vender_no' => VENDER_MG);
            $data['mg_games'] = $this -> game -> advanced_search_result($condition);
            
            $data['customer_service'] = $this -> customer_service -> advanced_search_row();
            $this -> load -> view("front/{$view_name}", $data);
        }else {
            $this -> load -> view('front/index', $data);
        }
    }
}
