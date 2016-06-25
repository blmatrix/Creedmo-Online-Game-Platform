<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Game_list_viewer  {

    /**
     * get html for one item
     * @param {Object} $item
     * @return {string} html
     */
     
    public $output;
	public $game_id;
    public $game_password;
    public $user_no;
    public $CI;
    public $items;
    public $ouput;
    public $featured_games;
    public $sel_game_category;
    public $template_type;
    
    public $vender;
    public $sel_cate;
    public $view;
    public $search_text;
    public $page;
    public $total_row_count;
    public $total_page_count;
    public $per_page ;  
    public $game_service_status;  
      /**
     * constructor
     */
    public function __construct($data) {
        $this -> CI = &get_instance();
        $this -> CI -> load -> database();
        $this -> CI -> load -> model('admin/game');
        $this -> CI -> load -> library('session_manager');
        $this -> CI -> load -> helper('game_launcher');
        $this -> CI -> load -> helper('util');
        
        try {
            switch($data['template_type']){
                case GAME_LIST_TEMPLATE_SLOT:
                    $this -> vender = $data['vender'];
                    $this -> game_id = $data['game_id'];
                    $this -> game_password = $data['game_password'];
                    $this -> user_no = $data['user_no'];
                    $this -> template_type = $data['template_type'];
                    $this -> search_text = !empty($data['search_text'])?$data['search_text'] : '';
                    $this -> per_page = !empty($data['per_page'])?$data['per_page'] : 20;
                    $this -> page =!empty($data['page'])?$data['page'] : 1;
                    $this -> sel_cate =!empty($data['sel_cate'])?$data['sel_cate'] : 'featured';
                    $this -> view =!empty($data['view'])? $data['view'] : 'grid';
                    $this -> game_service_status =!empty($data['game_service_status'])?$data['game_service_status'] : GAME_SERVICE_STATUS_ON;;
                    break;
                    
                case GAME_LIST_TEMPLATE_LIVE:
                    $this -> game_id['mg_game_id'] = $data['mg_game_id'];
                    $this -> game_id['pt_game_id'] = $data['pt_game_id'];
                    $this -> game_password['mg_game_password'] = $data['mg_game_password'];
                    $this -> game_password['pt_game_password'] = $data['pt_game_password'];
                    $this -> user_no = $data['user_no'];
                    $this -> template_type = $data['template_type'];
                    $this -> search_text = $data['search_text'];
                    $this -> init_live_games();
                    break;
        }
         
        } catch(PDOException $ex) {
            print "Exception: " . $ex -> getMessage();
        }
    }

   public function generate_content(){
       if ($this -> template_type == GAME_LIST_TEMPLATE_LIVE){
           $this -> init_live_games();
       }else if ($this -> template_type == GAME_LIST_TEMPLATE_SLOT) {
           $this -> init_slot_games();
       }    
       
       $data = array();
       $data['session_id'] = $this -> CI -> session_manager -> get_user_session('session_id');
       if (!$data['session_id']){
       	  $data['session_id']  = '';
       }
       
       if ($this -> template_type == GAME_LIST_TEMPLATE_LIVE){
           $data['game_type'] = GAME_TYPE_LIVE;
           $data['mg_lives'] = $this -> items['mg_lives'];
           $data['pt_lives'] = $this -> items['pt_lives'];
           $data['mg_game_id'] = $this -> game_id['mg_game_id'];
           $data['pt_game_id'] = $this -> game_id['pt_game_id'];
           $data['mg_game_password'] = $this -> game_password['mg_game_password'];
           $data['pt_game_password'] = $this -> game_password['pt_game_password'];
           $data['user_no'] =  $this -> user_no;     
           
		   if (count($data['mg_lives']) > 0){
	           $view_name = set_view_name('mg_live_game_list_template');     
	           $this -> output['mg_lives'] = $this -> CI -> load -> view("front/template/{$view_name}",$data,true);   
           }

 		   if (count($data['pt_lives']) > 0){
	           $view_name = set_view_name('pt_live_game_list_template');   
	           $this -> output['pt_lives'] = $this -> CI -> load -> view("front/template/{$view_name}",$data,true);   
		   }
            
       }else if ($this -> template_type == GAME_LIST_TEMPLATE_SLOT){
           $data['sel_cate'] = $this -> sel_game_category;
           $data['game_type'] = GAME_TYPE_SLOT;
           $data['items'] = $this -> items;
           $data['vender'] =  $this -> vender; 
           $data['game_id'] =  $this -> game_id; 
           $data['game_password'] =  $this -> game_password; 
           $data['user_no'] =  $this -> user_no;     
           
           $view_name = set_view_name('game_list_template');   
           $this -> output = $this -> CI -> load -> view("front/template/{$view_name}",$data,true);   
        }
    }

    public function init_live_games(){
        $is_mobile_access = is_mobile_access();
        
        /*
         * query MG Live Game List
         */
        if(MG_ENABLE == 'Y'){
	        $sql = "SELECT * FROM game WHERE vender_no = ? AND service_status  = ? AND game_category1_no = ?";
	        $query_binding = array(VENDER_MG,GAME_SERVICE_STATUS_ON,6);
	        
	        if ($is_mobile_access){
	            $sql .= " AND html5 = ?";    
	            $query_binding[] = HTML_SUPPROT_OK;
	        }
	        
	        if (!empty($this -> search_text)){
	            $sql .=" AND ( game_name_en like ?";
	            $sql .=" OR game_name_zh like ?";
	            $sql .=" OR game_desc_en like ?";
	            $sql .=" OR game_desc_zh like ? )";
	            $query_binding[] = "%{$this->search_text}%";    
	            $query_binding[] = "%{$this->search_text}%";    
	            $query_binding[] = "%{$this->search_text}%";    
	            $query_binding[] = "%{$this->search_text}%";    
	        }
	        $sql .= " ORDER BY count DESC";
	        $this -> items['mg_lives'] = $this -> CI -> game -> raw_binding_query($sql,$query_binding);   
		}else {
			$this -> items['mg_lives'] = array(); 
		}
        /*
         * query PT Live Game List
         */
        if(PT_ENABLE == 'Y'){
	        $sql = "SELECT * FROM game WHERE vender_no = ? AND service_status  = ? AND game_category1_no = ?";
	        $query_binding = array(VENDER_PT,GAME_SERVICE_STATUS_ON,6);
	        if (!empty($this -> search_text)){
	            $sql .=" AND ( game_name_en like ?";
	            $sql .=" OR game_name_zh like ?";
	            $sql .=" OR game_desc_en like ?";
	            $sql .=" OR game_desc_zh like ? )";
	            $query_binding[] = "%{$this->search_text}%";    
	            $query_binding[] = "%{$this->search_text}%";    
	            $query_binding[] = "%{$this->search_text}%";    
	            $query_binding[] = "%{$this->search_text}%";    
	        }
	        $sql .= " ORDER BY count DESC";
	        $this -> items['pt_lives'] = $this -> CI -> game -> raw_binding_query($sql,$query_binding);            
		}else {
			$this -> items['pt_lives'] = array(); 
		}
    }
    
    public function init_slot_games(){
        $query_binding = array($this -> vender, $this -> game_service_status); 
       
       /*
        * 게임 검색시 검색 리스트만 작성한 후 반환한다.
        */
        if (!empty($this -> search_text)){
            $sql = "SELECT * FROM game WHERE vender_no = ? AND service_status  = ?";
            $sql .=" AND ( game_name_en like ?";
            $sql .=" OR game_name_zh like ?";
            $sql .=" OR game_desc_en like ?";
            $sql .=" OR game_desc_zh like ? )";
            
            $query_binding[] = "%{$this->search_text}%";    
            $query_binding[] = "%{$this->search_text}%";    
            $query_binding[] = "%{$this->search_text}%";    
            $query_binding[] = "%{$this->search_text}%";
            $this -> items = $this -> CI -> game -> raw_binding_query($sql, $query_binding);     
            return;
        }  
        
        /*
         *  Query Featured Games for marking 
         */
        $sql = "SELECT * FROM game WHERE vender_no = ? AND service_status  = ? ORDER BY count DESC LIMIT 0,25";
        $featured_games = $this -> CI -> game -> raw_binding_query($sql, $query_binding);
        
        $this -> sel_game_category = $this -> sel_cate;      
        if ($this -> sel_cate =='featured'){
            $this -> CI -> load -> model('admin/game_category1');
            $cate_condition[WHERE_CONDITION] = array('status' => CATEGORY_STATUS_Y);
            $n_categories = $this -> CI -> game_category1 -> advanced_search_result($cate_condition);    
            
            $condition[WHERE_CONDITION] = array(
                'vender_no' => $this -> vender,
                'service_status' => $this -> game_service_status
            );
            
            if(count($n_categories) > 0) {
               $where_in_condition[WHERE_IN_COLUMN] ='game_category1_no';
               $where_in_condition[WHERE_IN_DATAS] = array();
               foreach($n_categories as $cate){
                   $where_in_condition[WHERE_IN_DATAS][] = $cate -> game_category1_no;    
               }
               $condition[WHERE_IN_CONDITION] = $where_in_condition;
            }
            $condition[ORDER_BY_CONDITION] = 'count DESC';
            $condition[LIMIT_CONDITION][OFFSET] = 0;
            $condition[LIMIT_CONDITION][LIMIT] = 25;
             
            $this -> items = $this -> CI -> game -> advanced_search_result($condition);
            return;
        }else {
            $sql = " SELECT * FROM game WHERE vender_no =? AND service_status  = ?";
            $sql .=" AND game_category1_no = ? ORDER BY count DESC LIMIT ? ,?";
            $query_binding[] = $this -> sel_cate;
            $query_binding[] = ($this ->  page - 1)  *  $this -> per_page;
            $query_binding[] = (int)$this -> per_page ;
            
            $this -> items = $this -> CI -> game -> raw_binding_query($sql, $query_binding); 
            $this -> checkFeaturedGame($featured_games);
            return;
        }
    }

    private function checkFeaturedGame($featured_games){
        foreach($featured_games as $featured_game){
            $game_count = count($this -> items);
            for($i = 0; $i < $game_count; $i++){
                if ($this -> items[$i] -> game_no == $featured_game -> game_no){
                    $this -> items[$i] -> reserved1 = "Y";
                }
            }
        }
    }
    
    private function generater_click_event($game_code){
        $t1 = "You need to be logged in";
        if (empty($this -> game_id)){
            $str = "openWindowAlert('You need to be logged in site')";
        }else {
            if ($this -> vender == VENDER_MG){
                $str ="launchGame('mg','$game_code','{$this->game_id}','{$this->game_password}',0)"; 
            }else {
                $str ="launchGame('pt','$game_code','{$this->game_id}','{$this->game_password}','{$this->user_no}')"; 
            }
        }
        return $str;    
    }
    
    public function canGetpage(){return TRUE;}
    public function setPaginationInfo(){
        $query_binding = array($this -> vender, $this -> game_service_status ,$this -> sel_cate);
        $sql ="SELECT count(*) AS rows_count FROM game WHERE vender_no = ? AND service_status = ? AND game_category1_no = ?";
        if (!empty($this -> search_text)){
            $sql .=" AND ( game_name_en like ?";
            $sql .=" OR game_name_zh like ?";
            $sql .=" OR game_desc_en like ?";
            $sql .=" OR game_desc_zh like ? )";
            $query_binding[] = "%{$this->search_text}%";    
            $query_binding[] = "%{$this->search_text}%";    
            $query_binding[] = "%{$this->search_text}%";    
            $query_binding[] = "%{$this->search_text}%";       
        }
        $sql .= ' ORDER BY count DESC';
        $query = $this -> CI -> game -> raw_binding_query($sql,$query_binding); 
        $this -> total_row_count =  $query[0] -> rows_count;
        $this -> total_page_count =  ceil($this -> total_row_count  / $this -> per_page);
    }
    
    public function getGamesListByVender($vender, $service_status ,$cate,$search_text ='', $offset = 0 , $limt = 25){
        $query_binding = array($vender, $service_status);    
        $sql ="SELECT * AS total_rows_count FROM game WHERE vender_no = ? AND service_status = ?";
        if($cate ='featured'){
            if (!empty($search_text)){
              $sql .=" AND game_name_en like ?";
              $query_binding[] = "%$search_text%";    
            }
            $sql .=  " ORDER BY count DESC LIMIT 0,25";
            $this -> items = $this -> CI -> game -> raw_binding_query($sql, $query_binding); 
        }else {
            $sql .= ' AND game_category1_no = ?'; 
            $query_binding[] = $cate;     
            if (!empty($search_text)){
              $sql .=" AND game_name_en like ?";
              $query_binding[] = "%$search_text%";     
            }
            $sql = " LIMIT ? ,?";
            $query_binding[] = $offset;     
            $query_binding[] = $limit;     
            $this -> items = $this -> CI -> game -> raw_binding_query($sql, $query_binding); 
        }
    }
    
    public function getOutput($option =""){
        if (!$option){
             return $this -> output;
        }
        
        if ($option =='mg_lives'){
        	if (MG_ENABLE == 'Y'){
            	return $this -> output['mg_lives'];     
			}
        }
        
        if ($option =='pt_lives'){
            if (PT_ENABLE == 'Y'){	
            	return $this -> output['pt_lives'];     
			}
        }
    }

}
