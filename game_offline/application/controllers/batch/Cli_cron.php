<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cli_cron extends CI_Controller {
    public function __construct() {
        parent::__construct();
		if (!$this -> input -> is_cli_request()) show_error('Direct access is not allowed');
    }

   public function cron_test(){
   	   log_message('error','['.date('Y-m-d H:i:s', time()).'] '."Execute Cron Test ");
   	   echo "Cli cron 테스트가 시작되었습니다";
	   echo "\n";
   	  
   }

}
