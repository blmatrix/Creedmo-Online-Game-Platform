<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LanguageInitializer{

    function initialize() {
        $CI = & get_instance();
        $CI -> load -> library('session_manager');
        $CI -> load -> library('user_agent');
        $CI -> load -> helper('language');
        
        $lang_code = $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_CODE);
        $lang_name = $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME);

        if ($lang_code && $lang_name) {
            $CI -> lang -> load('message', $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME));
			$CI -> lang -> load('terms_of_service', $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME));
        } else {
            if ($CI -> agent -> accept_lang('zh') || $CI -> agent -> accept_lang('zh-cn')){
                $CI -> session_manager -> set_extra_session(SESSION_KEY_LANG_CODE,'zh');
                $CI -> session_manager -> set_extra_session(SESSION_KEY_LANG_NAME,'china');
                $CI -> lang -> load('message', $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME));
				$CI -> lang -> load('terms_of_service', $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME));
            }else {
                $CI -> session_manager -> set_extra_session(SESSION_KEY_LANG_CODE,'en');
                $CI -> session_manager -> set_extra_session(SESSION_KEY_LANG_NAME,"english");
                $CI -> lang -> load('message', $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME));
				$CI -> lang -> load('terms_of_service', $CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME));
            }
        }
    }

}
