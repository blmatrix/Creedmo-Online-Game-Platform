<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    function index(){
        echo 'admin 관리자 메인입니다';
        echo "</br>";
        
        echo $this->uri->total_segments()."</br>";
        echo $this->uri->segment(1)."</br>";
        echo $this->uri->segment(2)."</br>";
        echo $this->uri->segment(3)."</br>";
        echo "</br>";
        echo $param1."</br>";
        echo $param2."</br>";
        echo $param3."</br>";
        echo $param4."</br>";
        $this->load->view('admin/main/admin_main');
    }
    
    function login(){
        echo '로그인 폼을 표시합니다';
    }
}
