<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_history extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this -> load -> helper(array(
            'url','location','asset','time'
        ));
    }
    
    public function game_play_update_history(){
        if ($this -> input -> method(TRUE) =='GET'){
            $this -> load -> model('admin/game_play_update_log');       
            $this -> load -> library('paging');
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            
            $game_cond[ORDER_BY_CONDITION] = 'reg_date DESC';
            $rows_count = $this -> game_play_update_log -> advanced_count_all_result($game_cond);
            
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $rows_count;
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage);
            
            $game_cond[LIMIT_CONDITION][LIMIT]  = $this -> paging -> SCALE;
            $game_cond[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['pagination'] = $this -> paging;
            $data['game_play_update_rows'] = $this -> game_play_update_log -> advanced_search_result($game_cond);
            $data['game_play_update_rows_count'] = $rows_count;
            
            unset($game_cond);
            $game_cond[WHERE_CONDITION] = array('update_status' => GAME_PLAY_UPDATE_STATUS_FAIL);
            $data['faild_update_rows_count'] = $this -> game_play_update_log -> advanced_count_all_result($game_cond);
            
            $this -> load -> view ('admin/update_history/update_hisotry', $data);
        }else {
            $this -> load -> helper('array');
            $this -> load -> library('form_validation');
            $this -> form_validation -> set_rules('vender', "Vender", 'trim|required');
            $this -> form_validation -> set_rules('update_start_time', "Update Start Date", 'trim|required');
            $this -> form_validation -> set_rules('update_end_time', "Update End Date", 'trim|required');
    
            if ($this -> form_validation -> run() == FALSE) {
                log_message('error', validation_errors());
                alert_only("Wrong Reqeust" );
                exit ;
            } 
            
            $params = elements(array('vender','update_start_time','update_end_time'), $this -> input-> post(NULL));
            $this -> load -> library('game_play_service');
            $result = FALSE;
            log_message('error', print_r($this -> input -> post(NULL), TRUE));
            if ($params['vender'] == VENDER_MG){
                $option[MG][START_TIME] = date('Y-m-d\TH:i:s', strtotime($params['update_start_time']));       
                $option[MG][END_TIME]   = date('Y-m-d\TH:i:s', strtotime($params['update_end_time']));   
                $result = $this -> game_play_service -> fetch_mg_game_play($option,"db");  
                
            }else if ($params['vender'] == VENDER_PT){
                $option[PT][START_TIME] = date('Y-m-d H:i:s', strtotime($params['update_start_time']));       
                $option[PT][END_TIME]   = date('Y-m-d H:i:s', strtotime($params['update_end_time']));   
                $result  = $this -> game_play_service -> fetch_pt_game_play($option,"db");  
            
            }else {
                alert_only('잘못된 업데이트 요청입니다.\n관리자에게 문의해주세요');
                exit;
            }
            
            if (!$result){
                $alert_message = "업데이트가 실패했습니다.\n".'[ERROR]'.$this -> game_play_service -> get_message();
                alert_only($alert_message);
                exit;
            }else {
                alert_only('요청한 게임 플레이 업데이트가 성공적으로 수행되었습니다');
                locationReload('parent');
                exit;
            }
            
        }
    }
    
    public function manual_game_play_update(){
        $update_row_no = $this -> input -> post('update_play', TRUE);
        if ($this -> input -> method(TRUE) != "POST" || !$update_row_no){
            alert_only('잘못된 접근입니다. 관리자에게 문의해주세요');    
            exit;
        }
        
        $this -> load -> model('admin/game_play_update_log');    
        $condition[WHERE_CONDITION] = array(
            'game_play_update_log_no'=> $update_row_no
        );
        
        $game_play_update_log = $this -> game_play_update_log -> advanced_search_row($condition);
        if (empty($game_play_update_log)){
            alert_only('잘못된 접근입니다. 관리자에게 문의해주세요');    
            exit;
        }
        
        $this -> load -> library('game_play_service');
        $option = '';
        $call_result = FALSE;
       
        if ($game_play_update_log -> game_vender == VENDER_MG){
            $option[MG][START_TIME] = date('Y-m-d\TH:00:00', $game_play_update_log -> update_start_time);       
            $option[MG][END_TIME]   = date('Y-m-d\TH:00:00', $game_play_update_log -> update_start_time); 
            $call_result = $this -> game_play_service -> fetch_mg_game_play($option,"db");
        }
        
        else if ($game_play_update_log -> game_vender == VENDER_PT){
            $option[PT][START_TIME] = date('Y-m-d H:00:00', $game_play_update_log -> update_start_time);        
            $option[PT][END_TIME]   = date('Y-m-d H:00:00', $game_play_update_log -> update_start_time); 
            $call_result = $this -> game_play_service -> fetch_pt_game_play($option,"db");  
        }
        
        $update_play_cond[WHERE_CONDITION] = array(
            'game_play_update_log_no'=> $update_row_no
        );
        
        if ($call_result){
            $update_play_data = array(
                'update_status' => GAME_PLAY_UPDATE_STATUS_SUCCESS,
                'manual_attempt_count' => $game_play_update_log -> manual_attempt_count + 1,
                'message' => 'Manual update is succeeded',
                'complete_time'       => time(),
                'update_row_count' => $this -> game_play_service -> get_update_row_count
            );
            
            $this -> game_play_update_log -> update($update_play_data,$update_play_cond);
            alert_only('게임 내역 업데이트가 잘 처리되었습니다');
            locationReload('parent');
            exit;
            
        }else {
            $update_play_data = array(
                'update_status' => GAME_PLAY_UPDATE_STATUS_FAIL,
                'manual_attempt_count' => $game_play_update_log -> manual_attempt_count + 1,
                'message' => $this -> game_play_service -> get_update_row_count -> get_message(),
                'update_row_count' => 0
            );
            
            $this -> game_play_update_log -> update($update_play_data,$update_play_cond);
            alert_only('게임 내역 실패하였습니다. 다시 시도하시거나 관리자에게 문의해주세요');
            locationReload('parent');
        }
        
    }
}
