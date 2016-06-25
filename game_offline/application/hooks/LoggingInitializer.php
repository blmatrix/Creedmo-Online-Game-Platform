<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoggingInitializer {
    function initialize() {
        $CI = &get_instance();
        //log_message('error','LoggingInitializer called');  
        //log_message('error',$CI -> uri -> uri_string());  
        //log_message('error',$CI ->input -> ip_address());  
    }
}
