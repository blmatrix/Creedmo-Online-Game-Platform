<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Baofa_manager {

    public $CI;

    public function __construct() {
        $this -> CI = & get_instance();
        $this -> CI -> load -> helper('string');
    }

    /*
     * 대문자로 MG game id 생성
     */
    public function generate_mg_game_id($name) {
        $surfix = "MXMG";
        return $surfix.$name;
    }
    
    /*
     * PT 게임의 경우 아이디를 대문자로 처리하기 때문에, PT 아이디 생성시 대문자로 생성한다.
    */
    public function generate_pt_game_id($name) {
        $surfix = "MXPT";
        return strtoupper($surfix.$name);
    }
    /*
     * affiliate Member code 생성
     */
    public function generate_affiliate_code() {
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> helper('string');
        $prefix = "B";
        
        $code  = NULL;
        for (;;) {
           $code = $prefix . random_string('numeric',5);
           $condition[WHERE_CONDITION] = array('affiliate_code' => $code);
           $rows = $this -> CI -> user -> advanced_search_result($condition);
           
           if (count($rows) > 0){
               continue;
           }else {
               break;
           }
        }
         
        return $code;
    }

    /*
     * affiliate Member code 검증
     */
    public static function validate_affiliate_code($code) {

    }
}
