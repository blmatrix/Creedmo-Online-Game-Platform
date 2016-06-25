<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {
    public $money_transfer_type_arr;

    public function __construct() {
        parent::__construct();

        $this -> money_tranfser_type_arr = array();
        $this -> money_tranfser_type_arr[MONEY_TRANSFER_TYPE_MG_TO_WALLET] = 'MG_TO_WALLET';
        $this -> money_tranfser_type_arr[MONEY_TRANSFER_TYPE_PT_TO_WALLET] = 'PT_TO_WALLET';
        $this -> money_tranfser_type_arr[MONEY_TRANSFER_TYPE_WALLET_TO_MG] = 'WALLET_TO_MG';
        $this -> money_tranfser_type_arr[MONEY_TRANSFER_TYPE_WALLET_TO_PT] = 'WALLET_TO_PT';
    }

    public function transfer_record() {
        if ($this -> input -> method(TRUE) == "POST") {

        } else {
            $this -> load -> helper('time');
            $this -> load -> model('admin/game_money_transfer', 'GMT');

            $data['search_keyword'] = '';
            $data['user_level'] = '';
            $data['daterange'] = '';
            $data['transfer_type'] = '';

            $where_condition = array();
            $like_condition = array();
            $date_condition = array();
            $join_condition = array();

            $total_conditions[SELECT_CONDITION] = 
               'user.user_no as  user_no,
                user.user_id as user_id, 
                user.login_status as login_status,
                user.user_name as user_name,
                user.login_status,
                
                user_level.user_level_no as user_level_no,
                user_level.user_level_code_name as user_level_code_name,
                user_level.deposit_bonus_rate as deposit_bonus_rate,
                
                game_money_transfer.game_money_transfer_no as game_money_transfer_no,
                game_money_transfer.money_transfer_type as money_transfer_type,
                game_money_transfer.transfer_amount as transfer_amount,
                game_money_transfer.wallet_balance_tracking as wallet_balance_tracking,
                game_money_transfer.reg_date as reg_date,
                
                wallet.wallet_balance as wallet_balance  
            ';
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'user', 
                JOIN_CONDITION_STATE => 'game_money_transfer.user_no = user.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
            );
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'wallet', 
                JOIN_CONDITION_STATE => 'user.user_no = wallet.user_no', 
                JOIN_CONDITION_DIRECT => "inner"
            );
            $join_condition[] = array(
                JOIN_CONDITION_TABLE => 'user_level', 
                JOIN_CONDITION_STATE => 'user.user_level_no = user_level.user_level_no', 
                JOIN_CONDITION_DIRECT => "inner"
            );

            $total_conditions[JOIN_CONDITION] = $join_condition;

            if ($this -> input -> get('search_keyword')) {
                $data['search_keyword'] = $this -> input -> get('search_keyword');
                $like_condition['user_id'] = $this -> input -> get('search_keyword');
                $total_conditions[LIKE_CONDITION] = $like_condition;
            }

            if ($this -> input -> get('user_level')) {
                $data['user_level'] = (int)$this -> input -> get('user_level');
                $where_condition['user.user_level_no'] = (int)$this -> input -> get('user_level');
            }

            if ($this -> input -> get('transfer_type')) {
                $data['transfer_type'] = (int)$this -> input -> get('transfer_type');
                $where_condition['game_money_transfer.money_transfer_type'] = $this -> input -> get('transfer_type');
            }

            $total_conditions[WHERE_CONDITION] = $where_condition;

            $date_arr = NULL;
            // 검색할 기간을 관리자가 선택한 경우
            if ($this -> input -> get('daterange')) {
                $data['daterange'] = $this -> input -> get('daterange');
                $date_arr = explode('-', $this -> input -> get('daterange'));

                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($date_arr[0]);
                $date_condition[END_TIME] = trim($date_arr[1]);

                $data['start_date'] = $date_condition[START_TIME];
                $data['end_date'] = $date_condition[START_TIME];

                $data['search_date_string'] = 'Game Money Summary';
                $data['search_date_start'] = $date_arr[0];
                $data['search_date_end'] = $date_arr[1];

                $total_conditions[DATE_CONDITION] = $date_condition;

            } else {
                $today_start_time = date("Y") . '/' . date("m") . '/' . date("d") . '/' . '00:' . '00:' . '00';
                $today_end_time = date("Y") . '/' . date("m") . '/' . date("d") . '/' . '23:' . '59:' . '59';
                $today_time_string = $today_end_time . ' - ' . $today_end_time;

                $data['search_date_string'] = "Totay Game Money Summary";
                $data['search_date_start'] = $today_start_time;
                $data['search_date_end'] = $today_end_time;

                $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
                $date_condition[START_TIME] = trim($today_start_time);
                $date_condition[END_TIME] = trim($today_end_time);

                $total_conditions[DATE_CONDITION] = $date_condition;
            }
            $total_conditions[ORDER_BY_CONDITION] = 'game_money_transfer.reg_date DESC';

            //페이징 처리
            $this -> load -> library('paging');
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            $data['transfer_record_count'] = $this -> GMT -> advanced_count_all_result($total_conditions);

            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $data['transfer_record_count'];
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage);

            $total_condition[LIMIT_CONDITION][LIMIT] = $this -> paging -> SCALE;
            $total_condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['paging'] = $this -> paging;

            $data['game_transfer_records'] = $this -> GMT -> advanced_search_result($total_conditions);

            $total_conditions[SELECT_CONDITION] = NULL;

            $total_conditions[WHERE_CONDITION]['game_money_transfer.money_transfer_type'] = MONEY_TRANSFER_TYPE_WALLET_TO_MG;
            $data['W_TO_MG'] = $this -> GMT -> sum('game_money_transfer.transfer_amount', 'transfer_amount_total', $total_conditions);

            $total_conditions[WHERE_CONDITION]['game_money_transfer.money_transfer_type'] = MONEY_TRANSFER_TYPE_MG_TO_WALLET;
            $data['MG_TO_W'] = $this -> GMT -> sum('game_money_transfer.transfer_amount', 'transfer_amount_total', $total_conditions);

            $total_conditions[WHERE_CONDITION]['game_money_transfer.money_transfer_type'] = MONEY_TRANSFER_TYPE_WALLET_TO_PT;
            $data['W_TO_PT'] = $this -> GMT -> sum('game_money_transfer.transfer_amount', 'transfer_amount_total', $total_conditions);

            $total_conditions[WHERE_CONDITION]['game_money_transfer.money_transfer_type'] = MONEY_TRANSFER_TYPE_PT_TO_WALLET;
            $data['PT_TO_W'] = $this -> GMT -> sum('game_money_transfer.transfer_amount', 'transfer_amount_total', $total_conditions);

            $this -> load -> view('admin/transfer/transfer_record', $data);
        }
    }

    public function create_transfer(){
       
        $this -> load -> helper('location');
        $this -> load -> helper('url');
        $this -> load -> library('microgame');
        $this -> load -> library('playtech');
        $this -> load -> library('transfer_service');
        $this -> load -> model('admin/game_money_transfer');
        $this -> load -> model('admin/game_money_transfer_detail');
        
        $this -> load -> model('admin/user');
        $this -> load -> model('admin/wallet');
        
        //트랜잭션 시작
        //$this->db->trans_start(); 
        
        $data['user_id'] = strtoupper($this -> input -> post('user_id'));
        $data['transfer_amount'] = $this -> input -> post('transfer_amount');
        $data['transfer_from'] = $this -> input -> post('transfer_from');
        $data['transfer_to'] = $this -> input -> post('transfer_to');
        
        $user_id = $data['user_id'];
        $condition[WHERE_CONDITION] = array('user_id' => $data['user_id']);
        $user = $this -> user -> advanced_search_row($condition);
        if (!$user){
            alert_only("ID of {$user_id} is not exist.. check the user id" );    
            exit;
        }
        
        if ($data['transfer_from'] == $data['transfer_to']){
            alert_only("Wrong Transfer !!" );    
            exit;
        }
        
        $data['user_no'] = $user -> user_no;
        $data['mg_id']   = $user -> mg_id;
        $data['pt_id']   = $user -> pt_id;
        
        $message = $this -> transfer_service -> transfer($data);
        
        //트랜잭션 종료
        //$this->db->trans_complete();
        
        if (!$this -> transfer_service -> filter_result($message)){
            alert_only($message);
            exit;
        }
        locationReload('parent');       
    }
    
    public function form(){
        $request_form = $this -> input -> get('request_form');
        $request_type = $this -> input -> get('request_type');
        $this -> load -> view("admin/transfer/form/{$request_form}_form");
    }

}
