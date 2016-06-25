<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 페이지내에서 자주 사용되는 공통 템플릿 데이타를 생성
 * 
 */
 
class Template_generator {

    private $CI;
    public function __construct() {
        $this -> CI = & get_instance();
        $this -> CI -> load -> helper('time');
    }
    
    /*
     * 상단 탑 메뉴에 사용되는 회원 요약 정보
     */
     
    public function set_top_user_data(&$data){
        $this -> CI -> load -> library('session_manager');
        $this -> CI -> load -> model('admin/bank_account');
        $this -> CI -> load -> model('admin/user_track');
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/game');
		$this -> CI -> load -> helper('language');
        $this -> CI -> load -> model('admin/customer_service');  
        $data['title'] = !empty ($this -> CI -> uri -> segment(1,"") ) ? lang( $this -> CI -> uri -> segment(1,"") . '_category_title'  ) : "Main";
        
        $data['login_status'] = FALSE;
        $data['lang_code'] = $this -> CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_CODE);
        $data['lang_name'] = $this -> CI -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME);
        
        $session_id = $this -> CI -> session_manager -> get_user_session('session_id');
        $data['session_id'] = !empty($session_id) ? $session_id : NULL;
        
        if ($this -> CI -> session_manager -> is_user_login()){
            $data['login_status'] = TRUE;
            $user_id = $this -> CI ->  session_manager -> get_user_session('user_id');
            $condition[SELECT_CONDITION] = '
                user.user_no as user_no,
                user.user_id as user_id, 
                user.user_status as user_status,
                user.login_status as login_status,
                user.affiliate_code as affiliate_code,
                user.user_name as user_name,
                user.user_gender as user_gender,
                user.user_email as user_email,
                user_level.user_level_no as user_level_no,
                user.im_type as im_type ,
                user.user_phone as user_phone,
                user.im_id as im_id,
                user_level.user_level_code_name as user_level_code_name,
                user.deps1_child_count as deps1_child_count,
                user.deps2_child_count as deps2_child_count,
                user.reg_date,
                user.join_date as join_date,
                
                country.country_code as country_code,
                country.country_name as country_name,
                country.phone_code as phone_code,
                
                mg_game_user.account_number as mg_game_id,
                mg_game_user.pin_code as mg_game_password,
                pt_game_user.player_name as pt_game_id,
                pt_game_user.password pt_game_password,
                
                wallet.wallet_balance as wallet_balance,
                wallet.total_deposit_amount as total_deposit_amount,
                wallet.total_withdraw_amount as total_withdraw_amount,
                wallet.wallet_balance as wallet_balance,
                wallet.average as average,
                wallet.comp_point as comp_point,
                wallet.mg_casino_balance as mg_casino_balance,
                wallet.pt_casino_balance as pt_casino_balance,
                wallet.agent_settlement_balance as agent_settlement_balance';  
            
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'wallet', 
                JOIN_CONDITION_STATE => 'user.user_no = wallet.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
            );
            
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'mg_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = mg_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
            );
            
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'pt_game_user', 
                JOIN_CONDITION_STATE => 'user.user_no = pt_game_user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
            );
            
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'user_level', 
                JOIN_CONDITION_STATE => 'user.user_level_no = user_level.user_level_no', 
                JOIN_CONDITION_DIRECT => "inner"
            );

            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'country', 
                JOIN_CONDITION_STATE => 'user.country_no = country.country_no', 
                JOIN_CONDITION_DIRECT => "left outer"
            );
      
            $condition[JOIN_CONDITION] = $join_condition;
            $condition[WHERE_CONDITION] = array('user_id' => $user_id);    
            $data['user'] = $this -> CI -> user -> advanced_search_row($condition);
            
            unset($condition);
            $condition[WHERE_CONDITION] = array(
                'user_no' => $data['user'] -> user_no
            );
            $data['bank_accounts'] = $this -> CI -> bank_account -> advanced_search_result($condition);
            
            $condition[ORDER_BY_CONDITION] = 'reg_date DESC';
            $user_tracks = $this -> CI -> user_track -> advanced_search_result($condition);
            if ((count($user_tracks)> 1)){
                $data['user_track'] = $this -> CI -> user_track -> advanced_search_result($condition)[0];
            }
        }
        
         $data['customer_service'] = $this -> CI -> customer_service -> advanced_search_row();
         
        /*
         * Notice Data 생성 
         */
        $this -> CI -> load -> model('admin/board');
        $read_notice_no = get_cookie(COOKIE_READ_NOTICE_NO);
        $notice_alert = $this -> CI -> board -> get_recent_notice_alert();
        
        $cookie = 
            array(
                'name'   => COOKIE_READ_NOTICE_NO,
                'value'  => $notice_alert -> board_no,
                'expire' => COOKIE_NOTI_STATUS_EXPIRED
        );
        
        if (!empty($notice_alert) && !$read_notice_no){
             $data['notice_alert'] = $notice_alert ;
             return;
        }
        if (!empty($notice_alert)){
            if ($notice_alert -> board_no == (int)$read_notice_no){
            }else {
               set_cookie($cookie);
               $data['notice_alert'] = $notice_alert ;
            }
        }else {
            $cookie['expire'] = '';
            set_cookie($cookie); 
        }
        
        
		
    }
    
    public function set_footer_data(&$data){
         $this -> CI -> load -> model('admin/customer_service');
         $data['customer_service'] = $this -> CI ->  customer_service -> advanced_search_row();
    }

    /*
     * View 에 돌려주는 Response data 에 특정 키로 데이타 삽입 
     */
     
    public function set_response_data(&$data,$key,$value){
        $data[$key] = $value;
    }
}
