<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Playtech {

    public $base_url = 'https://kioskpublicapi.redhorse88.com';
	public $entity_key = "2a6daf11a3f104d8909b70913b08d2c28ca0a1d7f52183237a61432b05161ff5c043a7e9a8ef880159d02ba2925da5198ab989e7441be41b32902798ddedb1cc";

    public $admin_name = 'bigchina';  
    public $kiosk_name = 'BAOFA88';

    public function init_curl($url) {
        $curl_session = curl_init();
        $header = array();
        $header[] = "Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
        $header[] = "Cache-Control: max-age=0";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive:timeout=5, max=100";
        $header[] = "Accept-Charset:ISO-8859-1,utf-8;q=0.7,*;q=0.3";
        $header[] = "Accept-Language:es-ES,es;q=0.8";
        $header[] = "Pragma: ";
        $header[] = "X_ENTITY_KEY: " . $this -> entity_key;

        curl_setopt($curl_session, CURLOPT_URL, $url);
        curl_setopt($curl_session, CURLOPT_PORT, 443);
        curl_setopt($curl_session, CURLOPT_VERBOSE, 0);
        curl_setopt($curl_session, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl_session, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl_session, CURLOPT_SSLCERT, APPPATH . '/key/pt/GLOBALCNYTLE.pem');
        curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_session, CURLOPT_SSLKEY, APPPATH . '/key/pt/GLOBALCNYTLE.key');

        return $curl_session;
    }

    public function request($url, $post_data = NULL) {
        $curl_session = $this -> init_curl($url);
        //echo $url;
        $exec = curl_exec($curl_session);
        log_message('error' , "PT_request info");
        log_message('error' , $url);
        log_message('error' , $exec);
        curl_close($curl_session);
        $response = json_decode($exec);
        return $response;
    }

    //===================================================================================================================
    //  PLAYER.DOCX 문서 API 구현
    //
    //===================================================================================================================

    public function get_player_info($player_name) {
        $url = "{$this->base_url}/player/info/playername/{$player_name}/with3RDPData/1";
        return $this -> request($url);

    }

    public function create_account($player_name, $password) {
        $url = "{$this->base_url}/player/create/playername/{$player_name}/adminname/{$this->admin_name}/kioskname/{$this->kiosk_name}/password/{$password}";
        return $this -> request($url);
    }

    public function change_player_password() {}
    
    public function deposit($player_name, $amount) {
        $url = "{$this->base_url}/player/deposit/playername/{$player_name}/amount/{$amount}/adminname/{$this->admin_name}";
        return $this -> request($url);
    }

    public function withdraw($player_name, $amount) {
        $url = "{$this->base_url}/player/withdraw/playername/{$player_name}/amount/{$amount}/adminname/{$this->admin_name}";
        return $this -> request($url);
    }

    public function is_player_online($player_name) {
        $url = "{$this->base_url}/player/online/playername/{$player_name}";
        return $this -> request($url);
    }

    public function check_login_token($player_name, $token) {
        $url = "{$this->base_url}/player/checktoken/playername/{$player_name}/token/{$token}";
        return $this -> request($url);
    }

    public function logout($player_name, $password = NULL) {
        $url = "{$this->base_url}/player/logout/playername/{$player_name}";
        return $this -> request($url);
    }

    public function reset_failed_login_attempt($player_name) {
        $url = "{$this->base_url}/player/revertBrokenGame/playername/{$player_name}";
        return $this -> request($url);
    }

    public function revert_broken_game($player_name) {
        $url = "{$this->base_url}/player/resetFailedLogin/playername/{$player_name}";
        return $this -> request($url);
    }

    public function get_all_players($page, $per_page) {
       /*$url = "{$this->base_url}/player/list/adminname/{$this->admin_name}/kioskname/{$this->kiosk_name}/page/{$page}/perPage/{$per_page}";*/
        $url = "{$this->base_url}/player/list/adminname/{$this->admin_name}/kioskname/{$this->kiosk_name}";
        return $this -> request($url);
    }
    /*
     * api 상에서 제공안됨 (임의 구현한 상태로 사용 불가)
     * 
     * */
    public function login($player_name, $password) {
        $url = "{$this->base_url}/player/login/playername/{$player_name}";
        return $this -> request($url);
    }
    
    //===================================================================================================================
    //  HELPER.docx 구현
    //
    //===================================================================================================================
   
   //Get all API calls
   public function exports(){
       $url = "{$this->base_url}/help/export?type=json";
       return $this -> request($url);
   }
   
   //Get errors
   public function errors(){
        $url = "{$this->base_url}/help/errors?type=json";
       return $this -> request($url);
   }
   
    //===================================================================================================================
    //  CUSTOMREPORT.docx 구현
    //
    //===================================================================================================================
    
    // 몇몇 리포스 를 위한 공통 리포트 api 호출 함수
    // 아래의 공통 함수로 호출이 가능한 리포트 목록을 확인  
    // 단 리포트 별로 추가 파라미터가 필요한 경우는 별도의 개별적인 리포트 함수를 호출 
    public function get_custom_report($report_name, $start_date, $end_date) {
        $url = "{$this->base_url}/customreport/getdata/reportname/{$report_name}/startdate/{$start_date}/enddate/{$end_date}";
        return $this -> request($url);
    }
    
    //PT 에서 제공되는 리포트 종류의 이름을 반환
    // 반환된 리포트 이름으로 위의 get_custom_report 를 호출하여 실제 Report를 구함.
    public function get_all_custom_reports(){
        $url = "{$this->base_url}/customreport/getallreports";
        return $this -> request($url);
    }
    
    public function report_players_games_count($report_name, $player_name, $last_games_count,$start_date, $end_date){
        $url = "{$this->base_url}/customreport/getdata/reportname/{$report_name}/playername/{$player_name}/lastgamescount/{$last_games_count}";
        return $this -> request($url);
    }
    
    public function report_players_online($report_name,$start_date, $end_date){
        $url = "{$this->base_url}/customreport/getdata/reportname/{$report_name}/";
        return $this -> request($url);
    }
    
    public function report_player_games($report_name, $frozen, $start_date, $end_date){
        $url = "{$this->base_url}/customreport/getdata/reportname/{$report_name}/frozen/{$frozen}/startdate/{$start_date}/enddate/{$end_date}";
        return $this -> request($url);
    }
    
    public function report_player_bets($player_name, $start_date, $end_date){
        $report_name = "PlayerBets";
        $url = "{$this->base_url}/customreport/getdata/reportname/{$report_name}/playername/{$player_name}/startdate/{$start_date}/enddate/{$end_date}";
        return $this -> request($url);   
    }
    
    //지정된 기간의 해당 게임의 결과를 반환(1일 단위 정산시 사용한다) 
    public function report_game_stats1($game_type, $sort_by, $start_date, $end_date){
        $report_name = "GameStats";
        $url = "{$this->base_url}/customreport/getdata/reportname/{$report_name}/gametype/{$game_type}/sortby/{$sort_by}/startdate/{$start_date}/enddate/{$end_date}";
        return $this -> request($url);
     }
     
     //지정된 기간의 해당 플레이어의 게임 플레이 상태 및 결과를 반환
     public function report_game_stats2($player_name, $game_type, $sort_by, $start_date, $end_date){
        $report_name = "GameStats";
        $url = "{$this->base_url}/customreport/getdata/reportname/{$report_name}/playername/{$player_name}/gametype/{$game_type}/sortby/{$sort_by}/startdate/{$start_date}/enddate/{$end_date}";
        return $this -> request($url);
     }
}
