<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Cron 및 Scheduler 에 의해 특정 시점에 실행되는 Batch Class
 * CodeIgniter 의 CLI 를 이용해서 Batch_process Controller 실행
 * */

class Batch_process extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    /*
     * MG, PT 게임 내역 일괄 업데이트 
     * Table : game_play 
     * cron 배치 작업에 의해 실행되는 함수,
     * 전날의 유저의 게임 기록을 API 연동하여 가공 후  game_play 테이블에 등록(default)
     * $param : Batch 할 시작날짜 및 종료 날짜
     */
     
    public function fetch_game_play() {
        set_time_limit(0);    
        $this -> load -> library('game_play_service');
        $option = NULL;
        
		$option[MG][START_TIME] =  "2015-08-01T00:00:00";
        $option[MG][END_TIME]   =  "2015-11-05T00:00:00";
        
        $option[PT][START_TIME] =  "2015-08-01 00:00:00";
        $option[PT][END_TIME]   =  "2015-11-05 00:00:00";
        
        $ret_message = '';
        $result = $this -> game_play_service -> fetch_mg_game_play($option,$ret_message);
         
        if (!$result){
            echo $ret_message;    
        }else {
            echo "MG Game Play Fetching is finished!!";
        }
        
        $result = $this -> game_play_service -> fetch_pt_game_play($option,$ret_message);
        if (!$result){
            echo $ret_message;    
        }else {
            echo "PT Game Play Fetching is finished!!";
        }
    }
    
      
    /*
     * PT 게임 내역 업데이트
     * 좀 서 세부적인 데이타를 획득할 수 있음
     * 시간 단위 업데이트 가능
     */
    public function fetch_mg_game_play(){
        set_time_limit(0);  
        $this -> load -> library('game_play_service');
        $option = NULL;
        $option[MG][START_TIME] =  "2015-11-04T12:00:00";
        $option[MG][END_TIME]   =  "2015-11-04T18:00:00";
        
        $ret_message = '';
        $result = $this -> game_play_service -> fetch_mg_game_play($option,$ret_message);
         
        if (!$result){
            echo $ret_message;    
        }else {
            echo "MG Game Play Fetching is finished!!";
        }
      }

     /*
     * PT 게임 내역 업데이트 
     */
     public function fetch_pt_game_play() {
         set_time_limit(0); 
         $this -> load -> library('game_play_service');
         $option = NULL; 
         $option[PT][START_TIME] =  "2015-11-03 13:00:00";
         $option[PT][END_TIME]   =  "2015-11-03 14:00:00";
         
         $result = $this -> game_play_service -> fetch_pt_game_play($option,$ret_message);
         if (!$result){
            echo $ret_message;    
         }else {
            echo "PT Game Play Fetching is finished!!";
         }
     }
    
    /* Table : agent_commission_record
     * cron 및 스케쥴러에 의해 실행되는 함수
     * 지난달의 agent의 월별 커미션 자료를 생성한 후 테이블에 등록(default)
     * $param : Batch 할 시작날짜 및 종료 날짜
     */

    public function process_agent_commission_record() {
        $this -> load -> library('affiliate_service');
        $d = mktime(0, 0, 0, date("m"), 1, date("Y"));
        // 이번달 1일
        $m = strtotime("-1 month", $d);
        //한달전
        
        $ret_message = '';
        $prev_month_start_date = date("Y-m-01 00:00:00", $m);
        $prev_month_end_date = date("Y-m-t 23:59:59", $m);
        
        //지난날 초에서 지난날 말일까지의 정산 자료 조회  
        $conditions[DATE_CONDITION][START_TIME] = $prev_month_start_date;
        $conditions[DATE_CONDITION][END_TIME]   = $prev_month_end_date;
        $result = $this -> affiliate_service -> generate_monthly_agent_commission_record($conditions,$ret_message);
        
        if (!$result){
            echo $ret_message;    
        }else {
            echo "PT Game Play Fetching is finished!!";
        }
    }     
    
    //MG 게임 내역을 가져오되 , 디비에 저장하지 않고 로그만 표시 
    public function mg_gamePlayReport(){
        $this  -> load -> library('microgame');
        $params = $this  -> microgame -> set_params(
            array(
                'loginName' => 'BAOFA174364', 
                'pinCode' => 'd05276'
            )
        );
        $result = $this ->  microgame -> invoke('IsAuthenticate', $params);
        
        $params = array(
            'reportName' => 'PlayerGamePlayReport',
            'parameters' => array(
                array('ParameterName' =>  'FromDate', 'ParameterValue' => "2015-11-04T12:00:00"),
                array('ParameterName' =>  'ToDate',   'ParameterValue' => "2015-11-04T18:00:00"),
                array('ParameterName' =>  'PlayerGrossWinSummaryLevel','ParameterValue' => 'Detailed'),
                array('ParameterName' =>  'TimeZoneType','ParameterValue' => 'parent'),
                array('ParameterName' =>  'EntityList_XML','ParameterValue' =>'')
            ),
            'maxNumRowsPage' =>  100 
        );
        
        $params = $this  -> microgame -> set_params($params);
        $result = $this  -> microgame -> invoke('GetReportByName', $params); 
        $params = $this ->  microgame -> set_params(
            array(
                'id' => $result -> GetReportByNameResult ->Id , 'nPage' => 1
            )
        );
        $result = $this ->  microgame -> invoke('GetReportResult', $params);               
    }
}
