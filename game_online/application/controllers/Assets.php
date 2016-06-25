<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Assets extends Application{
    public function __construct(){
        parent::__construct();
        $this -> check_session();           
    }
    
    public function asset($asset){
        $this-> output-> set_output($this -> load -> view("asset/{$asset}"));
    }
   
}
