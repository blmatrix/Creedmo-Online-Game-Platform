<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this -> load -> helper('url');
        $this -> load -> model('admin/user');
        $this -> load -> library('report_service');
        $data['address'] = $_SERVER['REMOTE_ADDR'];
        
        $sql = "SELECT count(*) AS count FROM user";
        $query = $this -> user -> raw_binding_query($sql);
        $data['total_user_count'] = $query[0] -> count;
        
        $sql = "
            SELECT 
                count(*) AS count
            FROM user 
            INNER JOIN deposit 
            ON 
                user.user_no = deposit.user_no";
        $query = $this -> user -> raw_binding_query($sql);        
        $data['active_user_count'] = $query[0] -> count;
        
        //Today Profit 조회 
        $option['start_time'] = strtotime(date("Y-m-d 00:00:00",time()));
        $option['end_time']   = strtotime(date('Y-m-d 00:00:00',time()));
        $data['today_summary'] = $this -> report_service -> profit_report_summary($option);
        
        //이번주 Profit 조회
        $today = time();
        $week = date("w");
        $week_first = $today-($week*86400);
        $week_last = $week_first+(6*86400);
        
        $data['week_summary'] = $this -> report_service -> profit_report_summary();
        $option['start_time'] = strtotime(date("Y-m-d",$week_first));
        $option['end_time']   = strtotime(date("Y-m-d",$week_last));
        $this -> load -> view('admin/index',$data) ;
    }
    
    public function index_a() {
        $this -> load -> helper('url');
        $this -> load -> model('admin/user');
        $this -> load -> library('report_service');
        $data['address'] = $_SERVER['REMOTE_ADDR'];
        
        $sql = "SELECT count(*) AS count FROM user";
        $query = $this -> user -> raw_binding_query($sql);
        $data['total_user_count'] = $query[0] -> count;
        
        $sql = "
            SELECT 
                count(*) AS count
            FROM user 
            INNER JOIN deposit 
            ON 
                user.user_no = deposit.user_no";
        $query = $this -> user -> raw_binding_query($sql);        
        $data['active_user_count'] = $query[0] -> count;
        
        //Today Profit 조회 
        $option['start_time'] = strtotime(date("Y-m-d 00:00:00",time()));
        $option['end_time']   = strtotime(date('Y-m-d 00:00:00',time()));
        $data['today_summary'] = $this -> report_service -> profit_report_summary($option);
        
        //이번주 Profit 조회
        $today = time();
        $week = date("w");
        $week_first = $today-($week*86400);
        $week_last = $week_first+(6*86400);
        
        $data['week_summary'] = $this -> report_service -> profit_report_summary();
        $option['start_time'] = strtotime(date("Y-m-d",$week_first));
        $option['end_time']   = strtotime(date("Y-m-d",$week_last));
        $this -> load -> view('admin/index2',$data) ;
    }
    
}
