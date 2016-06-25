<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


function is_mobile_access(){
    $CI = & get_instance();
    $CI -> load -> library('user_agent');
    
    if ($CI -> agent -> is_mobile()){
      return TRUE;
    }else {
     return FALSE;
    }
}

function set_view_name($view_name){
    if (is_mobile_access()){
        return Application::M_VIEW_PREFIX.$view_name;
    }else {
        return $view_name;
    }
}
?>