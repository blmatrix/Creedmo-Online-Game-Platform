<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

 class User_level extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * comp point 에 따른 cunnent User Level object 과 Next User Level Object 반환
     * return 
     * array [0] => current user level 
     * array [1] => next user level 
     */
     
    public function get_user_level_by_comp($comp_point = 0){
        $condition[ORDER_BY_CONDITION] ="user_level_no ASC";
        $user_levels = $this -> advanced_search_result($condition);
        $user_levels_count = count($user_levels);
        $i = 0; 
        $return_arr = array();
        for($i= 0; $i < $user_levels_count ; $i++){
            if ($i < $user_levels_count-1){
                if ($comp_point >= $user_levels[$i] -> promotion_level_point && $comp_point < $user_levels[$i+1] -> promotion_level_point){
                    $return_arr[] =   $user_levels[$i];
                    $return_arr[] =   $user_levels[$i+1];
                    return $return_arr; 
                }
            }else if ($i == $user_levels_count-1){
                IF ($comp_point >=  $user_levels[$i] -> promotion_level_point ){
                    $return_arr[] =   $user_levels[$i];
                    return $return_arr;  
                }
            }
        }
    }
}