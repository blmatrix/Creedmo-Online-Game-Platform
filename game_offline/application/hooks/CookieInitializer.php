<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CookieInitializer {

    function initialize() {
        $CI = &get_instance();
        $CI -> load -> library('session_manager');
        $cookie_a_code = $CI -> input -> cookie(SESSION_KEY_A_CODE);
        $query_a_code = $CI -> input -> get(SESSION_KEY_A_CODE);

        if ($query_a_code) {
            $cookie_a_code = $query_a_code;
            $cookie = array(
                'name' => SESSION_KEY_A_CODE, 
                'value' => trim($query_a_code), 
                'expire' => COOKIE_A_CODE_EXPIRED
            );
            set_cookie($cookie);
            redirect(base_url());
            exit ;
        }
         
        if ($cookie_a_code) {
            $CI -> session_manager -> set_extra_session(SESSION_KEY_A_CODE, $cookie_a_code);
        }
    }

}
