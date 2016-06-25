<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Game_play extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_comp_point($user_id){
        $search_user_id = strtoupper($user_id);
        $condition[WHERE_CONDITION] = array('substr(player_name,4)' => $search_user_id);
        $total_comp = $this ->  sum('acc_comp_point','total_comp_point',$condition);
        return $total_comp -> total_comp_point ? $total_comp -> total_comp_point: 0;
    }
    
    public function get_comp_point_by_user_no($user_no){
        $condition  = array('user_no' => $user_no);
        $user = $this -> advanced_search_row($condition);    
        return $this -> get_comp_point($user -> user_id);        
    }
}
