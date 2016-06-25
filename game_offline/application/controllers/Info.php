<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Info extends Application{
    public function __construct() {
        parent::__construct();
        $this -> load -> library('baofa_manager');
        $this -> load -> helper(array('location', 'url', 'array', 'time', 'baofa'));
        $this -> check_session();    
    }
    
    /*
     *  사이드 메뉴 인덱스 설정
     * */
    private function __set_side_menu_index(&$data){
        $data['side_index'] = 'info';    
    }
    
    public function index(){
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
        $this -> load -> helper('time');
        
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/game');
        $this -> load -> model('admin/customer_service');
        
        $this -> load -> library('user_agent');
        $this -> load -> library('template_generator');
        
        $data = array();
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data);
        
        $tab =   $this -> session -> flashdata('tab');      
        $data['tab'] = !empty($tab) ? $tab : 'change_general';
        $this -> __set_side_menu_index($data);
        
        $view_name = $this -> set_view_name("info");        
        $this -> load -> view("front/info/{$view_name}",$data);
    }
    
    public function  modify(){
        $this -> load -> library('form_validation');
        if ($this -> input -> method(TRUE) == "POST") {
           $mod_type = $this -> input -> post('modify_type', TRUE);
           if (empty($mod_type)){
               show_error('Wrong Access');
               exit;   
           }
           switch($mod_type){
               case 'general':
                   $this -> __modify_general();
                   break;
               case 'bank_account':
                   $this -> __modify_account();
                   break;
               case 'password':
                   $this -> __modify_password();
                   break;
               case 'email':
                   $this -> __modify_email();
                   break;
               default :
                   show_error('Wrong Access');
           }   
        }else {
            show_error('Wrong Access');
        }
    }
    
    private function form_validation($form_arr){
        return FALSE;
    }
    
    private function __modify_general(){
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/country');
        $this -> load -> helper('location');
        
        $user_id = $this -> session_manager -> get_user_session('user_id');   
        $user_no = $this -> session_manager -> get_user_session('user_no');   
        
        $user_name     = $this -> input -> post('user_name') ? trim($this -> input -> post('user_name',TRUE)) : ''; 
        $im_type       = $this -> input -> post('im_type') ? trim($this -> input -> post('im_type',TRUE)) : ''; 
        $im_id         = $this -> input -> post('im_id') ? trim($this -> input -> post('im_id',TRUE)) : ''; 
        $phone_code    = $this -> input -> post('phone_code') ? trim($this -> input -> post('phone_code',TRUE)) : '';
        $phone_number  = $this -> input -> post('phone_number') ? trim($this -> input -> post('phone_number',TRUE)) : ''; 
        $user_gender   = $this -> input -> post('user_gender') ? trim($this -> input -> post('user_gender', TRUE)) : ''; 
       
        $country_no = 0;
        $condition[WHERE_CONDITION] = array(
            'phone_code' => $phone_code
        );
        
        $country = $this -> country -> advanced_search_row($condition);
        if(!empty($country)){
            $country_no = $country -> country_no;    
        }else {
            $country_no = 0;    
        }
        
        $condition[WHERE_CONDITION] = array(
            'user_id' => $user_id
        );
        $update_data = array(
            'user_name' => $user_name,
            'im_type' => $im_type,
            'im_id' => $im_id,
            'country_no' => $country_no,
            'user_phone' => $phone_number,
            'user_gender' => $user_gender 
        );
        $this -> user -> update($update_data, $condition);
        $this -> session -> set_flashdata('tab', 'change_general');
        locationReload('parent');
    }
    
    private function __modify_account(){
        $this -> load -> model('admin/bank_account');
        $this -> load -> helper('array');
        $this -> load -> helper('location');
        
        $user_id = $this -> session_manager -> get_user_session('user_id');   
        $user_no = $this -> session_manager -> get_user_session('user_no');   
        
        $this -> load -> library('form_validation');
        $this -> form_validation -> set_rules('holder', "Holder Name", 'required|trim');
        $this -> form_validation -> set_rules('bank_name', "Bank Name", 'required|trim');
        $this -> form_validation -> set_rules('bank_account', "Bank Account", 'required|trim');
        
        if ($this -> form_validation -> run() == FALSE) {
            log_message('error', validation_errors());
            alert_only("Wrong Input Request");
            exit ;
        }    
        
        $insert_data = elements(
            array(
                'holder', 'bank_name','bank_branch','bank_account'
            ), $this -> input -> post(NULL), NULL);      
        
        $insert_data['user_no'] = $user_no;
        $insert_data['reg_date'] = time(); 
        $this -> bank_account -> insert($insert_data);
        $this -> session -> set_flashdata('tab', 'change_bank_account');
        locationReload('parent');
    }
    
    private function __modify_password(){
        $this -> load -> helper('location');
        $this -> load -> model('admin/user');
        $user_id = $this -> session_manager -> get_user_session('user_id');
        
        $this -> load -> library('form_validation');
        $this -> form_validation -> set_rules('cur_password', "Old Password", 'required|trim');
        $this -> form_validation -> set_rules('new_password', "New Password", 'required|trim');
        $this -> form_validation -> set_rules('reset_password', "Reset Password", 'required|trim');
        
        if ($this -> form_validation -> run() == FALSE) {
            log_message('error', validation_errors());
            alert_only("Wrong Input Request");
            exit ;
        }    
          
        $cur_password  = $this -> input -> post('cur_password') ? trim($this -> input -> post('cur_password', TRUE)) : '';
        $new_password = $this -> input -> post('new_password') ? trim($this -> input -> post('new_password',TRUE)) :'';
       
        $condition[WHERE_CONDITION] = array('user_id' => $user_id, 'user_password' => md5($cur_password));
        $user = $this -> user -> advanced_search_row($condition);
        if (!$user){
            alert_only("비밀번호가 틀립니다. 다시 입력해주세요");
            exit;
        }
        
        $update_arr = array(
            'user_password' => md5(trim($new_password))
        );
        $condition[WHERE_CONDITION] = array('user_id' => $user_id);
        $this -> user -> update($update_arr, $condition);
        $this -> session -> set_flashdata('tab', 'change_password');
        locationReload('parent');
    }
    
    private function __modify_email(){
        $this -> load -> helper('location');
        $this -> load -> model('admin/user');
        
        $user_id = $this -> session_manager -> get_user_session('user_id'); 
        $user_password  = $this -> input -> post('user_password') ? trim($this -> input -> post('user_password', TRUE)) : '';
        $user_email  = $this -> input -> post('user_email') ? $this -> input -> post('user_email', TRUE) : '';
      
        $condition[WHERE_CONDITION] = array('user_id' => $user_id, 'user_password' => md5($user_password));
        $user = $this -> user -> advanced_search_row($condition);
        if (!$user){
            alert_only("Wrong Password");
            exit;
        }
        
        $update_arr = array(
            'user_email' => $user_email
        );
        $condition[WHERE_CONDITION] = array('user_id' => $user_id);
        $this -> user -> update($update_arr, $condition);
        $this -> session -> set_flashdata('tab', 'change_email');
        locationReload('parent');
    }
    
    /*
     *  Bank Account delete , Modify Ajax reqeust 
     * 
     */
     
    public function account_act(){
        $this -> load -> model('admin/bank_account');
        $user_id = $this -> session_manager -> get_user_session('user_id'); 
        $user_no = $this -> session_manager -> get_user_session('user_no'); 
        
        $data = array();
        $mode = $this -> input -> post('mode');
        $account_no = $this -> input -> post('account_no');
        if ($this -> input -> method(TRUE) != "POST") {
           
        }else {
            if ($mode == 'mod'){
                $this -> session -> set_flashdata('tab', 'change_account');
            }else if($mode == 'del'){
                $condition[WHERE_CONDITION] = array('bank_account_no' => $account_no);
                $this -> bank_account -> delete($condition);
                $data['result'] = 'success';
                log_message('error', print_r($data, TRUE));
                $this -> session -> set_flashdata('tab', 'change_bank_account');
                echo json_encode($data);
            }
        }
    }
}
