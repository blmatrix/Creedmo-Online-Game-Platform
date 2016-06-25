<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class slot_main extends Application{
    public function __construct(){
        parent::__construct();
        $this -> check_session();    
        $this -> load -> helper('game_launcher');           
    }
    
    private function __set_side_menu_index(&$data){
        $data['side_index'] = 'slot_main';    
    }
     
    public function index(){
        $this -> load -> library('session_manager');
        $this -> load -> library('user_agent');
        
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
        
        $this -> load -> model('admin/customer_service');
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/game');
        $this -> load -> library('template_generator');
        
        $data = array();
        /*
         * Game Vender Parameter setting
         * Default 'VENDER_MG'
         */
		$game_vender = $this -> get_parameter('g_vender',VENDER_MG );
        if ($game_vender == VENDER_MG){
            $data['slot_title'] ="MG SLOTS";
            $data['slot_sub_title'] ="Microgaming Slots";
			$data['slot_sub_img'] ="slot_spot_img2";
        }else {
            $data['slot_title'] ="PT SLOTS";
            $data['slot_sub_title'] ="Playtech Slots";
			$data['slot_sub_img'] ="slot_spot_img";
        }
        /*
         * Top, Footer 데이타 생성
         */
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        $this -> __set_side_menu_index($data);
        
        /*
         * query popular Game Category Info and Count for slot side menu 
         */
         
         $sql = "
            SELECT count(*) AS fearture_game_count FROM game WHERE vender_no = ?  AND service_status  = ? LIMIT 0,25  
         ";
         $query_binding = array($game_vender, GAME_SERVICE_STATUS_ON);
         $query =  $this -> game -> raw_binding_query($sql, $query_binding);
         $data['feature_game_count'] = count( $query[0] -> fearture_game_count) < 25 ? '25': $query[0] ->fearture_game_count ;
         
        /*
         * query Game Category Info and count for slot side menu 
         */
        $sql = "
            SELECT 
                GC.game_category1_no AS game_category1_no,
                GC.game_cate_code AS game_cate_code,
                GC.status AS status,
                GC.game_category1_name AS game_category1_name,
                count(G.game_category1_no) AS game_count
            FROM game AS G
            INNER JOIN game_category1 AS GC on G.game_category1_no = GC.game_category1_no   
            WHERE vender_no = ? AND service_status = ? 
            GROUP BY  
                GC.game_category1_no,
                GC.game_cate_code,
                GC.game_category1_name
        ";
        
        $data["cate_rows"] = $this -> game -> raw_binding_query($sql,$query_binding);
        $data['g_vender'] = $game_vender;
        
        $view_name = $this -> set_view_name("slot_main");
        $this -> load -> view("front/slot_main/{$view_name}",$data);
    }

    public function game_list($game_vender){
        $this -> load -> model('admin/user');    
        $this -> load -> library('session_manager');
        $this -> load -> helper('asset');
        $this -> load -> helper('time');
        
        //log_message('error','parameters');
        //log_message('error',print_r($this -> input -> get(NULL), TRUE));
        /*
         * ajax json array
         * */
        $res = array();
        $cate        = $this -> get_parameter('sel_cate', 'featured');
        $search_text = $this -> get_parameter('search_text','');
        $view        = $this -> get_parameter('view', 'grid');
        $page        = $this -> get_parameter('paging',1);
        $per_page    = $this -> get_parameter('perPage',20);
        $user_no = $this -> session_manager -> get_user_session('user_no'); 
       
        $sql = "select 
                    user.*,
                    mg_game_user.account_number as mg_game_id,
                    mg_game_user.pin_code as mg_password,
                    pt_game_user.player_name as pt_game_id,
                    pt_game_user.password as pt_password
                from user 
                inner join mg_game_user on user.user_no = mg_game_user.user_no
                inner join pt_game_user on user.user_no = pt_game_user.user_no
                where user.user_no = ?
        ";
        
        $binding = array($user_no);
        $query = $this -> user -> raw_binding_query($sql,$binding);
                
        $game_id = NULL;
        $game_password = NULL;
        $user_no = 0;
        if (count($query) == 1){
            $user = $query[0];
            if (!empty($user)){
                if ($game_vender == VENDER_MG){
                    $game_id = $user -> mg_game_id;
                    $game_password =  $user -> mg_password;    
                }else {
                    $game_id = $user -> pt_game_id;
                    $game_password =  $user -> pt_password; 
                }        
            }
        }
        $this -> load -> library('game_list_viewer',
            array(
                'vender' => $game_vender,
                'game_id' => $game_id,
                'game_password' => $game_password,
                'user_no' => !empty($user) ? $user-> user_no : 0,
                'template_type' => GAME_LIST_TEMPLATE_SLOT,
                'search_text' => $search_text,
                'per_page' => $per_page,
                'page' => $page,
                'sel_cate' => $cate,
                'view' => $view,
                'game_service_status' => GAME_SERVICE_STATUS_ON
            )
        );
        
        if(!$this -> game_list_viewer ->  canGetPage()){
           $res['result'] = 'success';
           $res['errorCode'] = 1;
           $res['message'] = 'not page';
           echo json_encode($res);
           exit; 
        }
                
        $res['result'] = 'success';
        $res['errorCode'] =  0 ;
        $res['message']  = '';
        $res['page'] = $page + 1;
        $this -> game_list_viewer -> generate_content();
        $res['data'] = $this -> game_list_viewer -> getOutput();
        //log_message('error',print_r($res, TRUE));
        echo json_encode($res);
        
        //$this -> output->set_output( $this -> game_list_viewer -> getOutput());
        //$this -> output->set_output('');
    }

    public function live(){
        $this -> load -> model('admin/game');
        $this -> load -> model('admin/user');
        $this -> load -> library('template_generator');
        $this -> load -> library('session_manager');
        $this -> load -> helper('asset');
        $data = array();
        
        /*
         * Top , footer 데이타 생성  
         */
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        $this -> __set_side_menu_index($data);
        
        $view_name = $this -> set_view_name("live_casino");
        $this -> load -> view("front/slot_main/{$view_name}",$data);
    }

    public function live_game_list(){
        $this -> load -> model('admin/game');
        $this -> load -> model('admin/user');
        $this -> load -> library('template_generator');
        $this -> load -> library('session_manager');
        $this -> load -> helper('asset');
        //log_message('error', print_r($this -> input -> get(NULL),TRUE));
        $search_text = $this -> get_parameter('search_text', '');
        $user_no = $this -> session_manager -> get_user_session('user_no'); 
        $sql = "select 
                    user.*,
                    mg_game_user.account_number as mg_game_id,
                    mg_game_user.pin_code as mg_password,
                    pt_game_user.player_name as pt_game_id,
                    pt_game_user.password as pt_password
                from user 
                inner join mg_game_user on user.user_no = mg_game_user.user_no
                inner join pt_game_user on user.user_no = pt_game_user.user_no
                where user.user_no = ?
        ";
        
        $binding = array($user_no);
        $query = $this -> user -> raw_binding_query($sql,$binding);
        
        $user =  NULL;
        if (count($query)){
            $user = $query[0];
        }

        $this -> load -> library('game_list_viewer',
            array(
                'mg_game_id' => !empty($user) ? $user-> mg_game_id : '',
                'pt_game_id' => !empty($user) ? $user-> pt_game_id : '',
                'mg_game_password' => !empty($user) ? $user-> mg_password : '',
                'pt_game_password' => !empty($user) ? $user-> pt_password : '',
                'user_no' => !empty($user) ? $user-> user_no : 0,
                'search_text' => $search_text,
                'template_type' => GAME_LIST_TEMPLATE_LIVE,
            )
        );
        
        $data = array();
        
        /*
         * Top , footer 데이타 생성  
         */
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        $this -> __set_side_menu_index($data);
        
        /*
         * ajax 요청 
         */
        $res['result'] = 'success';
        $res['errorCode'] =  0 ;
        $res['message']  = '';
        $this -> game_list_viewer -> generate_content();
        $res['data'] = $this -> game_list_viewer -> getOutput('mg_lives') .''. $this -> game_list_viewer -> getOutput('pt_lives');
        echo json_encode($res);        
    }
}
