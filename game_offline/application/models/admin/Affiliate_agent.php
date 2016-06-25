<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

 class Affiliate_agent extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * 인수로 전달된 회원의 affiliate 자식중 지정한 뎁스의 affiliate 를 구함 
     * ex) get_child_affiliate(1,1) : 1번 회원의 1뎁스 회원 리스트 
     * ex) get_child_affiliate(1,2) : 1번 회원의 2뎁스 회원 리스트 
     * 
    */
    
    public function get_child_affiliates($condition, $parent_no, $deps = 1){
        
    }
    
    /*
     * 인수로 지정횐 회원의 , 특정 deps 의 자식 affiliate 의 수를 구한다 
    */
    
    public function count_child_affiliate($condition, $parent, $deps){
        
    }  
    
    /*
     * 인수로 지정된 히원의 특정 부모 를 구함 
     * ex) get_parent_affiliate(1,1) : 1번 회원의 바로 위의 affiliste  
     * ex) get_parent_affiliate(1,2) : 1번 회원의 2단계 위의 affiliate 
    */
    
    public function get_parent_affiliate($condition, $child, $deps){
        
    } 
    
    /*
     * 해당 회원  affiliate 회원 여부 
    */
    
    public function is_affiliate($user_no){
        
    }
    
    
}