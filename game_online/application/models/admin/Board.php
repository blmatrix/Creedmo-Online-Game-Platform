<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class Board extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_recent_notice_alert(){
        $this -> load -> model('admin/board_category');
        
        $condition[SELECT_CONDITION] = "
            board.*,
            board_category.board_category_code,  
            board_category.board_category_name  
        ";
        $condition[WHERE_CONDITION] = array(
            'board.board_category_no' => 1,
            'board.displayable' => 'Y'
        );
        $join_condition[] = array(
            JOIN_CONDITION_TABLE  => 'board_category', 
            JOIN_CONDITION_STATE  => 'board.board_category_no = board_category.board_category_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $condition[ORDER_BY_CONDITION] = 'board.reg_date DESC';
        return  $this -> advanced_search_row($condition);
    }
    
    public function get_notice_by_notice_no($notice_no){
        $condition[WHERE_CONDITION] = array('board_no' => $notice_no);
        return $this ->  advanced_search_row($condition);
    }
}