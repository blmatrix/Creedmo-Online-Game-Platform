<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class M_slot_main extends Application{
    public function __construct(){
        parent::__construct();
        $this -> check_session();    
        $this -> load -> helper('game_launcher');
        $this -> load -> helper('asset');
        $this -> load -> library('session_manager');           
    }
    
    private function __set_side_menu_index(&$data){
        $data['side_index'] = 'slot_main';    
    }
     
    public function index(){
        $data['vender']   = $this -> input -> get('vender', TRUE)? $this -> input -> get('vender', TRUE) : VENDER_MG;
        $data['category'] = $this -> input -> get('cate', TRUE)? $this -> input -> get('cate', TRUE) : "all";
        $data['message'] = "";    
        $data['heading'] = "";    
        $data['games'] = array();
        
        $this -> load -> library('template_generator');
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
                
        //PT 는 모바일용 게임이 없기 때문에 함수 종료
        if ($data['vender']  == VENDER_PT){
            $data['heading'] = "PT Slot Mobile";    
            $data['message'] = "모바일 용 PT 게임은 현재 준비중입니다.";    
            $this -> load -> view('front/slot_main/m_slot_main', $data);
        }else {
            $data['heading'] = "MG Slot Mobile";   
            $this -> load -> model('admin/game');        
            $sql = "
                SELECT * FROM game WHERE vender_no = ? AND service_status = ? AND html5 = ? AND game_category1_no != ? ORDER BY count DESC, reg_date DESC
            ";
            $query_binding = array(
                $data['vender'],
                GAME_SERVICE_STATUS_ON,
                HTML_SUPPORT_OK,
                6
            );
            $games = $this -> game -> raw_binding_query($sql, $query_binding);
            foreach ($games as &$game){
                $category = $game -> game_category1_no;
                switch($category){
                    case 1:
                    $game -> class = "slot";
                    break;
                    
                    case 2:
                    $game -> class = "jackpot";
                    break;
                    
                    default:
                    $game -> class = "other";
                }
            }
        
        $data['games'] = $games;
        $data['session_id'] = $this -> session_manager -> get_user_session('session_id');
        $this -> load -> view('front/slot_main/m_slot_main', $data);
        }
    }
    
}
