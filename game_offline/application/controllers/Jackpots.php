<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Jackpots extends Application{
    public function __construct(){
        parent::__construct();
        $this -> check_session();    
    }
    
    public function index(){
        $this -> load -> helper('game_launcher');
        $this -> load -> library('session_manager');
        $data['session_id'] = $this -> session_manager -> get_user_session('session_id');
        $this -> load -> view('front/template/jackpots_iframe', $data);
    }
}
