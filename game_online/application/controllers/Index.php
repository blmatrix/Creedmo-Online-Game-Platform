<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Index extends Application{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        
        $this -> load -> helper('url');
        $this -> load -> helper('game_launcher');
        $this -> load -> library('template_generator');
        $this -> load -> model('admin/game');
        $data['login_status'] = FALSE;
        $data['lang_code'] = $this -> session_manager -> get_extra_session(SESSION_KEY_LANG_CODE);
        $data['lang_name'] = $this -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME);
        
        
        $p_code= $this -> input -> get('p_code'); 
        if ($p_code != '1111'){
          show_404();
          exit;
        }
        
        /*
         * 쿠키 a_code  
         */
        $a_code_cookie = get_cookie(SESSION_KEY_A_CODE);
        if ($a_code_cookie){
            $this -> session_manager-> set_extra_session(SESSION_KEY_A_CODE, $a_code_cookie);
        }
        
        //다른 agent 의 링크를 통해 왔을 경우, via agent의 affiliate_code 를 세션에 저장
        //회원 가입시에 세션에 저장된 affiliate_code 를 이용하여, 가입 절차 진행
        $a_code_param = $this -> input -> get(SESSION_KEY_A_CODE);
        
        if ($a_code_param) {
            delete_cookie(SESSION_KEY_A_CODE);
            $cookie = array(
                'name' => SESSION_KEY_A_CODE,
                'value' => $a_code_param,
                'expire' => 604,800 
            );
            set_cookie($cookie);
            $this -> session_manager-> set_extra_session(SESSION_KEY_A_CODE, $a_code_param);
            redirect(base_url());
            exit;    
        }
        
        /*
         * Top, Footer 데이타 생성 
         */ 
        $data = array();
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        //-> Top, Footer 데이타 생성 완료
        
        unset($condition);
        $condition[LIMIT_CONDITION][LIMIT] =  3;
        $condition[LIMIT_CONDITION][OFFSET] = 0;
        $condition[WHERE_CONDITION] = array('vender_no' => VENDER_PT);
        $data['pt_games'] = $this -> game -> advanced_search_result($condition);

        $condition[WHERE_CONDITION] = array('vender_no' => VENDER_MG);
        $data['mg_games'] = $this -> game -> advanced_search_result($condition);
        
        $data['customer_service'] = $this -> customer_service -> advanced_search_row();
        $this -> load -> view('front/index.php', $data);
    }

}
