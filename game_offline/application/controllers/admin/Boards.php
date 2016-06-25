<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boards extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this -> load -> helper(array(
            'url','location','asset','time'
        ));
    }
    
    /*
     * 카테고리에 해당하는 board_list query  
     */    
    public function board_list($board_category){
        $this -> load -> model('admin/board');
        $this -> load -> model('admin/board_category');
        
        $condition[SELECT_CONDITION] = "
            board.*,
            board_category.board_category_code,  
            board_category.board_category_name  
        ";
        $condition[WHERE_CONDITION] = array(
            'board.board_category_no' => $board_category
        );
        $join_condition[] = array(
            JOIN_CONDITION_TABLE  => 'board_category', 
            JOIN_CONDITION_STATE  => 'board.board_category_no = board_category.board_category_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $condition[ORDER_BY_CONDITION] = 'board.reg_date DESC';
        $data['boards'] = $this -> board -> advanced_search_result($condition);
        $data['cur_board_category'] = $board_category == '1' ? 'User Notice' : 'Admin Notice';
        $data['board_category'] = $board_category;
        
        unset($condition);
        $condition[ORDER_BY_CONDITION] ="reg_date ASC";
        $data['board_cates'] = $this -> board_category -> advanced_search_result($condition);
        $this -> load -> view ('admin/board/board_list', $data);
    }
    
    public function view($board_no){
        $this -> load -> model('admin/board');
        $condition[SELECT_CONDITION] = "
            board.*,
            board.board_category_no,  
            board.board_category_code,  
            board.board_category_name  
        ";
        $condition[WHERE_CONDITION] = array(
            'board_no' => $board_no
        );
        $join_condition[] = array(
            JOIN_CONDITION_TABLE  => 'board_category', 
            JOIN_CONDITION_STATE  => 'board.board_category_no = board_category.board_category_no', 
            JOIN_CONDITION_DIRECT => "inner"
        );
        $condition[JOIN_CONDITION] = $join_condition;
        $data['board'] = $this -> board -> advaced_search_row($condition);
    }
    
    public function write($board_type ="1"){
        $this -> load -> model('admin/board');    
        if ($this -> input -> method(TRUE) == "POST") {
            $this->load->helper('array');
            
            $permitted_params = array(
                'board_category_no',
                'board_title_en','board_content_en',
                'board_title_zh','board_content_zh'
            );    
            
            $params = elements($permitted_params,$this -> input ->post(NULL),NULL);  
            
            /*
             * 기존 글이 표시 상태를 N 으로 모두 변환
             */
            $update_data = array('displayable' => 'N');
            $condition[WHERE_CONDITION] = array('board_category_no' => $params['board_category_no'] );
            $this -> board -> update($update_data,$condition);
            
            /*
             * 신규 공지글 등록
             */
            
            $params['board_writer'] = $this -> session -> userdata(ADMIN_SESSION)[ID];
            $params['displayable'] = "Y";
            $params['reg_date'] = time();
            
            $this -> board -> insert($params);
            locationReload('parent');
            
        }else if($this -> input -> method(TRUE) == "GET") {
            $data['action'] = site_url('admin/boards/write');
            $data['form_title'] = "Add Board";
            $data['submit_title'] = "Add board";
            $data['board_type'] = $board_type;
            $this -> load -> view('admin/board/form/board_update_form',$data);
        }
    }
    
    public function modify($board_no=""){
        $this -> load -> model('admin/board');    
        if ($this -> input -> method(TRUE) == "POST") {
             $this->load->helper('array');
            
            $board_no = $this -> input -> post('board_no');
            $board_category_no = $this -> input -> post('board_category_no');
            $permitted_params = array(
                'board_title_en','board_content_en',
                'board_title_zh','board_content_zh'
            );
            $params = elements($permitted_params,$this -> input ->post(NULL),NULL);    
            
            /*
             * 기존 글이 표시 상태를 N 으로 모두 변환
             */
            $update_data = array('displayable' => 'N');
            $condition[WHERE_CONDITION] = array('board_category_no' => $board_category_no);
            $this -> board -> update($update_data,$condition);
            
           
            $params['board_writer'] = $this -> session -> userdata(ADMIN_SESSION)[ID];
            $params['displayable'] = "Y";
            
            unset($condition);
            $condition[WHERE_CONDITION] = array('board_no' => $board_no);
            $this -> board -> update($params,$condition);
            locationReload('parent');
                   
        }else if($this -> input -> method(TRUE) == "GET") {
            $condition[WHERE_CONDITION]= array('board_no' => $board_no);
            $data['form_title'] = "Modify Board";
            $data['board'] = $this -> board -> advanced_search_row($condition);    
            $data['action'] = site_url('admin/boards/modify');
            $data['board_no'] = $board_no;
            $data['submit_title'] = "Modify board";
            $this -> load -> view('admin/board/form/board_update_form',$data);
        }
    }
    
    public function delete($board_no = ""){
        $this -> load -> helper('location');
        $this -> load -> model('admin/board');
        $condition[WHERE_CONDITION] = array('board_no' => $board_no);
        $this -> board -> delete($condition);
        $res['result'] = 'success';
        $res['errorCode'] = '0';
        echo json_encode($res);   
    }
}
