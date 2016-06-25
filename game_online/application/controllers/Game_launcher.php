<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Game_launcher extends Application{
    public function __construct() {
        parent::__construct();
        $this -> load -> library('baofa_manager');
        $this -> load -> model('admin/user');
        $this -> load -> helper(array('location', 'url', 'array', 'time', 'baofa'));
        $this -> check_session();         
    }
    
    public function launch($g_vender,$game_code,$game_type){
        $this -> load -> library('session_manager');
        if (!$this -> session_manager -> get_user_session()){
            alert('Wrong Access');
            exit;
        }
        
        $vender = $g_vender == 'mg' ? VENDER_MG : VENDER_PT;
        $user_id = $this -> session_manager -> get_user_session('user_id');
        $user_no = $this -> session_manager -> get_user_session('user_no');
        $session_id = $this -> session_manager -> get_user_session('session_id');
        $lang =  $this -> session_manager -> get_extra_session(SESSION_KEY_LANG_NAME);
        $req_session_id = $this -> input -> get('session_id',TRUE);

        if ($session_id != $req_session_id){
            alert('Wrong Access');
            exit;
        } 

        $m = $this -> get_parameter('m', '');
        if (!empty($m) && $m =='auth'){
            $this -> session_manager -> add_game_session('pt_session_status','Y');   
        }
                
        $sql = "SELECT 
                    user.*,
                    mg_game_user.account_number AS mg_game_id,
                    mg_game_user.pin_code AS mg_password,
                    pt_game_user.player_name AS pt_game_id,
                    pt_game_user.password AS pt_password
                FROM user 
                INNER JOIN mg_game_user ON user.user_no = mg_game_user.user_no
                INNER JOIN pt_game_user ON user.user_no = pt_game_user.user_no
                WHERE user.user_no = ?
        ";
        
        $binding = array($user_no);
        $query = $this -> user -> raw_binding_query($sql,$binding);
        $user = $query[0];
        
        $url = NULL;
        switch($vender){
            case VENDER_PT:
                $lang_code = ($lang == 'english') ? 'en' : 'zh';
                $url = "http://cache.download.banner.luckystar88.com/casinoclient.html?language={$lang_code}&game={$game_code}";
                if($this -> session_manager -> get_game_session('pt_session_status') == 'Y'){
                    $data['game_url'] = $url;
                    echo $this -> load ->view('front/game_launcher/game_launcher',$data,TRUE);
                    exit;
                }else {
                    $data['player_name']   = $user -> pt_game_id;
                    $data['user_password'] = $user -> pt_password;
                    $data['game_id']       = $game_code;
                    $data['session_id']    = $this -> session_manager -> get_user_session('session_id');
                    $data['vender']        = 'pt';
                    $data['game_type']     = $game_type;
                    $data['game_code']     = $game_code;
                    $this -> load -> view('front/pt_api/pt_login', $data);
                }
            break;
            case VENDER_MG:
                $lang_code = ($lang == 'english') ? 'en' : 'zh';
                $url = NULL;
                if ($game_type == GAME_TYPE_SLOT){
                    $url = "https://igaminga.gameassists.co.uk/aurora/?theme=igamingA&ul={$lang_code}&gameid={$game_code}&sEXT1={$user->mg_game_id}&sEXT2={$user->mg_password}";
                    //locationReplace($url);
                    //log_message('error','게임 실행4');
                    $data['game_url'] = $url;
                    echo $this -> load -> view('front/game_launcher/game_launcher',$data,TRUE);
                    exit;
                     
                    //POST 방식에 의한 게임 실행 
                    // $mg_launcher_data['action'] = "https://igaminga.gameassists.co.uk/aurora/?theme=igamingA";
                    // $mg_launcher_data['game_code'] = $game_code;
                    // $mg_launcher_data['lang_code'] = $lang_code;
                    // $mg_launcher_data['mg_game_id'] = $user -> mg_game_id;
                    // $mg_launcher_data['mg_password'] = $user -> mg_password;
                    // echo $this -> load -> view('front/game_launcher/mg_launcher_form',$mg_launcher_data,TRUE);
                    // exit;
                    
                }else if ($game_type == GAME_TYPE_LIVE){
                    $url = "https://livegames.gameassists.co.uk/ETILandingPage/?CasinoID=2635&LoginName={$user->mg_game_id}&Password={$user->mg_password}&ClientID=4&UL={$lang_code}&VideoQuality=auto6&BetProfileID=DesignStyleA&CustomLDParam=MultiTableMode^^1||LobbyMode^^C&StartingTab={$game_code}&ClientType=1&ModuleID=70004&UserType=0&ProductID=2&ActiveCurrency=Credits";
                    $data['game_url'] = $url;
                    echo $this -> load ->view('front/game_launcher/game_launcher',$data,TRUE);
                    exit;
                }
                exit;
            break;        
        }
    }
     
    public function auth_g_session(){
        $this -> load -> library('session_manager');
        $this -> session_manager -> set_game_session('pt_session_status', 'Y'); 
    }
}
