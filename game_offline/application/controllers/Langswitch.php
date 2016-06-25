<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Langswitch extends Application {
    public $langs;

    public function __construct() {
        parent::__construct();
        $this -> langs = array(LANG_ENG, LANG_CHI);
        $this -> check_session();    
    }

    function switchLanguage($lang = "") {
        $this -> load -> library('session_manager');
        $this -> load -> helper(
            array(
                'location', 'url'
            )
         );
        
        $lang = ($lang != "") ? trim($lang) : LANG_ENG;
        $return_url = $this -> get_parameter('return_url','');
        if (!in_array($lang, $this -> langs)) {
            alert('요청하신 언어타입이 부적절합니다');
            exit ;
        }
        $lang_code = ($lang == 'english') ? 'en' : 'zh';
        $this -> session_manager -> set_extra_session(SESSION_KEY_LANG_CODE,$lang_code);
        $this -> session_manager -> set_extra_session(SESSION_KEY_LANG_NAME,$lang);
        historyGo(-1);
    }
}
