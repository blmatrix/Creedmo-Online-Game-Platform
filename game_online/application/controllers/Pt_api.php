<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Pt_api extends Application {

    public function create_account() {
        $this -> load -> library('playtech');
        $this -> playtech -> create_account('topayc', '123455');
    }

    public function get_all_errors() {
        $this -> load -> library('playtech');
        $this -> playtech -> get_error_list();
    }

    public function get_player_info() {
        $this -> load -> library('playtech');
        $result  =  $this -> playtech -> get_player_info('BFPTTEST333');
        echo $result -> error;
    }
    
    public function get_all_players(){
        $this -> load -> library('playtech');
        $this -> playtech -> get_all_players(10,10);
    }
    
    //로그인은 Remote Api 호출이 아니라 자바스크립트를 통하여 진행
    //이미 소스에서 사용중인 함수로 절대 삭제 금지 
    public function login() {
        $this -> load -> library('playtech');
        $this -> load -> model('admin/pt_game_user');

        $game_id = $this -> input -> get('game_id');
        $user_no = $this -> input -> get('user_no');

        $condition[WHERE_CONDITION] = array('user_no' => $user_no);

        $pt_game_user = $this -> pt_game_user -> advanced_search_row($condition);
        $data['player_name'] = $pt_game_user -> player_name;
        $data['user_password'] = $pt_game_user -> password;
        $data['game_id'] = $game_id;

        $this -> load -> view('front/pt_api/pt_login', $data);
    }

    public function logout() {
        $this -> load -> library('playtech');
        $this -> playtech -> logout('topayc', '123455');
    }

    public function report($report_name) {
        $this -> load -> library('playtech');
        $start_date = '2015-06-06 00:00:00';
        $end_date   = '2015-08-18 23:59:59';
        $this -> playtech -> get_custom_report(
            $report_name, 
            urlencode(date('Y-m-d H:i:s', strtotime($start_date))), 
            urlencode(date('Y-m-d H:i:s', strtotime($end_date))));
    }
    
    public function players_games_count(){
        $this -> load -> library('playtech');
        $start_date = '2015-06-06 00:00:00';
        $end_date   = '2015-08-18 23:59:59';
        $this -> playtech -> report_players_games_count(
            'PlayerGamesCount', 
            'BFPTtest222', 
            100,
            urlencode(date('Y-m-d H:i:s', strtotime($start_date))), 
            urlencode(date('Y-m-d H:i:s', strtotime($end_date))));
    }
    
    public function players_online(){
        $this -> load -> library('playtech');
         $start_date = '2015-06-06 00:00:00';
        $end_date   = '2015-08-18 23:59:59';
        $this -> playtech -> report_players_online(
            'PlayersOnline',
            urlencode(date('Y-m-d H:i:s', strtotime($start_date))), 
            urlencode(date('Y-m-d H:i:s', strtotime($end_date))));
        
    }
    
	//최대 24시간 가능 - 모든 게임 뱃팅 내역이 나온다
     public function player_games(){
        $this -> load -> library('playtech');
        $start_date = '2015-10-31 10:00:00';
        $end_date   = '2015-10-31 23:59:59';
        $frozen = "all";
        echo $frozen;
        
        $this -> playtech -> report_player_games(
            'PlayerGames',
            $frozen, 
            urlencode(date('Y-m-d H:i:s', strtotime($start_date))), 
            urlencode(date('Y-m-d H:i:s', strtotime($end_date))));
        
    }

    public function get_player_bets(){
        $this -> load -> library('playtech');
        $start_date = '2015-08-01 00:00:00';
        $end_date   = '2015-08-18 23:59:59';
        
        $this -> playtech -> report_player_bets(
            'BFPTtest222', 
            urlencode(date('Y-m-d H:i:s', strtotime($start_date))), 
            urlencode(date('Y-m-d H:i:s', strtotime($end_date))));
    }

    public function get_report_type() {
        $this -> load -> library('playtech');
        $this -> playtech -> get_all_custom_reports();

    }

    public function is_online() {
        $this -> load -> library('playtech');
        $this -> playtech -> is_player_online('bigchina');
    }


    public function exports() {
        $this -> load -> library('playtech');
        $this -> playtech -> exports();

    }
    
     public function errors() {
        $this -> load -> library('playtech');
        $this -> playtech -> errors();

    }
     
	 //날짜에서 분과 초는 00:00으로 해야 정상 작동(날짜와 시간단위만 작성 할것)
     public function get_game_stats1(){
        $this -> load -> library('playtech');
        $start_date = '2015-08-01 00:00:00';
        $end_date   = '2015-08-31 23:00:00';
        //$player_name = "BFPTtopayc0011";
        //$player_name = strtoupper($player_name);
        $this -> playtech -> report_game_stats1(
           /* $player_name,*/ 
            'both',
            'games',
            urlencode(date('Y-m-d H:i:s', strtotime($start_date))), 
            urlencode(date('Y-m-d H:i:s', strtotime($end_date))));
     }
     
     public function get_game_stats2(){
        $this -> load -> library('playtech');
        $start_date = '2015-10-31 16:41:37';
        $end_date   = '2015-11-01 16:41:37';
        //$player_name = "BFPTtopayc0011";
        //$player_name = strtoupper($player_name);
        $this -> playtech -> report_game_stats2(
            /* $player_name,*/ 
            'both',
            'games',
            urlencode(date('Y-m-d H:i:s', strtotime($start_date))), 
            urlencode(date('Y-m-d H:i:s', strtotime($end_date))));
     }

}
