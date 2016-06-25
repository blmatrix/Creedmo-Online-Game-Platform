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
		//if (!$this->input->is_cli_request()) show_error('Direct access is not allowed');
    }

    /*
     * MG, PT 게임 내역 일괄 업데이트  
     * Table : game_play 
     * cron 배치 작업에 의해 실행되는 함수,
     * 전날의 유저의 게임 기록을 API 연동하여 가공 후  game_play 테이블에 등록(default)
     * $param : Batch 할 시작날짜 및 종료 날짜]
     * 날짜 포맷 주의 : 시 분 초 지정 가능
     */
     
    public function fetch_game_play() {
        log_message('error',"[CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>");	
        echo "[CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>";
		echo "\n";
        $this -> load -> model('admin/game_play_update_log');
        $this -> load -> library('game_play_service');
                
        $mg_fetch_result = "";
        $pt_fetch_result = "";
        $mg_count = 1;
        $pt_count = 1;
        
        $option[MG][START_TIME] = date('Y-m-d\TH:00:00', strtotime("-6 hour"));
        $option[MG][END_TIME]   = date('Y-m-d\TH:00:00', strtotime("-4 hour"));
        
        $option[PT][START_TIME] = date('Y-m-d H:00:00', strtotime("-6 hour"));
        $option[PT][END_TIME]   = date('Y-m-d H:00:00', strtotime("-3 hour"));
        log_message('error','게임플레이 업데이트 기간 ======>=======   '.print_r($option, TRUE));
        echo '게임플레이 업데이트 기간 ======>'.print_r($option, TRUE);
		echo "\n";
        if (MG_ENABLE == 'Y'){
             $mg_fetch_result = $this -> game_play_service -> fetch_mg_game_play($option,"db");
             if (!$mg_fetch_result){
                $mg_count++;     
                while($count <= API_RETRY_COUNT){
                     sleep(API_SLEEP_TIME);     
                     $mg_fetch_result = $this -> game_play_service -> fetch_mg_game_play($option,"db");
                     if (!$mg_fetch_result) {
                         $mg_count++;  
                         continue;
                     }else {
                         break;
                     }
                }        
             }
            $mg_game_play_data = array(
                'game_vender'           => VENDER_MG,
                'game_vender_name'      => "MG",
                'update_start_time'     => strtotime($option[MG][START_TIME]),
                'update_end_time'       => strtotime($option[MG][END_TIME]),
                'update_status'         => ($mg_fetch_result ? GAME_PLAY_UPDATE_STATUS_SUCCESS : GAME_PLAY_UPDATE_STATUS_FAIL),
                'auto_attempt_count'    => $mg_count,
                'manual_attempt_count'  => 0,
                'message'               => ($mg_fetch_result ? "success" : $this -> game_play_sercvie -> get_message()),
                'update_row_count'      => $this -> game_play_service -> get_update_row_count(),
                'complete_time'         => ($mg_fetch_result ? time() : NULL),
                'reg_date'              => time()
             );
            $this -> game_play_update_log -> insert($mg_game_play_data);
            log_message('error',"MG Game play update result");
            log_message('error',print_r($mg_game_play_data, TRUE));
        }
        
        if (PT_ENABLE == 'Y'){
             $pt_fetch_result = $this -> game_play_service -> fetch_pt_game_play($option,"db");
             if (!$mg_fetch_result){
                $pt_count++;
                while($count <= API_RETRY_COUNT){
                     sleep(API_SLEEP_TIME);     
                     $pt_fetch_result = $this -> game_play_service -> fetch_pt_game_play($option,"db");
                     if (!$mg_fetch_result) {
                         $mg_count++;    
                         continue;
                     }else {
                         break;
                     }
                }        
             }
             
             $pt_game_play_data = array(
                 'game_vender'          => VENDER_PT,
                 'game_vender_name'     => "PT",
                 'update_start_time'    => strtotime($option[PT][START_TIME]),
                 'update_end_time'      => strtotime($option[PT][END_TIME]),
                 'update_status'        => ($pt_fetch_result ? GAME_PLAY_UPDATE_STATUS_SUCCESS : GAME_PLAY_UPDATE_STATUS_FAIL),
                 'auto_attempt_count'   => $pt_count,
                 'manual_attempt_count' => 0,
                 'message'              => ($pt_fetch_result ? "success" : $this -> game_play_sercvie -> get_message()),
                 'update_row_count'     => $this -> game_play_service -> get_update_row_count(),
                  'complete_time'       => ($pt_fetch_result ? time() : NULL),
                 'reg_date'             => time()
                );
             $this -> game_play_update_log -> insert($pt_game_play_data);
             log_message('error',"PT Game play update result");
             log_message('error',print_r($pt_game_play_data, TRUE));
			 log_message('error',"[CRON1] 게임 플레이 내역의 업데이트 작업이 종료되었습니다. ===========================================================>");	
			 echo "[CRON1] 게임 플레이 내역의 업데이트 작업이 종료되었습니다. ===========================================================>";	
			 echo "\n";
        }
    }
    
      
    /*
     * PT 게임 내역 업데이트, 
     * 좀 서 세부적인 데이타를 획득할 수 있음
     * 시간 단위 업데이트 가능
     */
    public function fetch_mg_game_play(){
        set_time_limit(0);  
        $this -> load -> library('game_play_service');
        $option[MG][START_TIME] =  "2015-11-04T12:00:00";
        $option[MG][END_TIME]   =  "2015-11-04T18:00:00";
        
        $ret_message = '';
        $result = $this -> game_play_service -> fetch_mg_game_play($option,"db");
         
        if (!$result){
            echo $ret_message;    
        }else {
            echo "MG Game Play Fetching is finished!!";
        }
      }

       
   /*
    * PT 게임 내역을 가져오되 , 디비에 저장하지 않고 로그만 표시 
    * 시간대별 검색 가능 
    *시간 포맷 주의 ( 아래 소스 참조),YYYY-MM-DD HH:00:00 포맷을 Urlencoding 함 (분, 초는 지정 불가)
    */ 
     public function fetch_pt_game_play() {
         set_time_limit(0); 
         $this -> load -> library('game_play_service');
         $option[PT][START_TIME] =  "2015-11-03 13:00:00";
         $option[PT][END_TIME]   =  "2015-11-03 14:00:00";
         
         $result = $this -> game_play_service -> fetch_pt_game_play($option,'db');
         if (!$result){
            echo $this -> game_play_service -> get_message();    
         }else {
            echo "PT Game Play Fetching is finished!!";
         }
     }
    
    /* Table : agent_commission_record
     * cron 및 스케쥴러에 의해 실행되는 함수
     * 지난달의 agent의 월별 커미션 자료를 생성한 후 테이블에 등록(default)
     * $param : Batch 할 시작날짜 및 종료 날짜
	 * 정산 기간 : 전주 월요일을 시작으로 일요일까지 정산 
     */

    public function process_agent_commission_record() {
    	log_message('error',"[CRON2] 에이젼트 정산 작업의 배치를 시작합니다. ===========================================================>");
    	echo "[CRON2] 에이젼트 정산 작업의 배치를 시작합니다. ===========================================================>";
		echo "\n";
        set_time_limit(0); 
        $this -> load -> library('affiliate_service');
        
        $Date = date('Y-m-d');
		$YY   = date("Y" , strtotime($Date)); 
		$MM   = date("m" , strtotime($Date)); 
		$DD   = date("d" , strtotime($Date)); 
		$Day  = date("w" , strtotime($Date)); 
        
		$this_week_start = date("Y-m-d",strtotime($YY."-".$MM."-".$DD." -".$Day." day")); 
		$this_week_end   = date("Y-m-d",strtotime($this_week_start." +6 day")); 
		
		//우선 전주 일요일을 시작으로 토요일까지를 구함 
		$ago_week_start = date("Y-m-d" , strtotime($this_week_start." -1 week")); 
		$ago_week_end   = date("Y-m-d" , strtotime($this_week_end." -1 week")); 
		
		//전주 기간을 월요일부터, 일요일로 변경 
		$ago_week_start = date('Y-m-d 00:00:00',strtotime($ago_week_start .' +1 day'));
		$ago_week_end   = date('Y-m-d 23:59:59',strtotime($ago_week_end .' +1 day')); 
		
        $conditions[DATE_CONDITION][START_TIME] = $ago_week_start;
        $conditions[DATE_CONDITION][END_TIME]   = $ago_week_end;
        log_message('error','정산시간 ======>  '.print_r($option, TRUE));
        $result = $this -> affiliate_service -> generate_weekly_agent_commission_record($conditions);
        
        if (!$result){
            echo $this -> affiliate_service -> get_message();    
        }else {
        	echo '[정산 조회 기간] : '. $ago_week_start .' ~ '. $ago_week_end;
			echo '<br/>';
			echo '[처리 결과] : '.$this -> affiliate_service -> get_message();;
            //echo "process agent commision record isㄴsuccessfully finished!!";
        }
		
		log_message('error',"[CRON2] 에이젼트 정산 작업의 배치가 종료되었습니다. ===========================================================>");
		echo "[CRON2] 에이젼트 정산 작업의 배치가 종료되었습니다. ===========================================================>";
		echo "\n";
    }     
	
	//날짜 계산 테스트 메서드 
	//호출되지 않음 
	public function date_test() {
        $Date = date('Y-m-d');
		$YY = date("Y",strtotime($Date)); 
		$MM = date("m",strtotime($Date)); 
		$DD = date("d",strtotime($Date)); 
		$Day = date("w",strtotime($Date)); 
		
		$this_week_start = date("Y-m-d",strtotime($YY."-".$MM."-".$DD." -".$Day." day")); 
		$this_week_end = date("Y-m-d",strtotime($this_week_start." +6 day")); 
		
		$ago_week_start = date("Y-m-d",strtotime($this_week_start." -1 week")); 
		$ago_week_end = date("Y-m-d",strtotime($this_week_end." -1 week")); 
		
		$next_week_start = date("Y-m-d",strtotime($this_week_start." +1 week")); 
		$next_week_end = date("Y-m-d",strtotime($this_week_end." +1 week")); 
		
		//한주는 월요일~ 일요일로 정함 
		echo("전주 시작일 : ". date('Y-m-d 00:00:00',strtotime($ago_week_start .' +1 day'))."<br>"); 
		echo("전주 종료일 : ". date('Y-m-d 23:59:59',strtotime($ago_week_end .' +1 day'))."<br>"); 
		echo("이번주 시작일 : ".$this_week_start."<br>"); 
		echo("이번주 종료일 : ".$this_week_end."<br>"); 
		echo("다음주 시작일 : ".$next_week_start."<br>"); 
		echo("다음주 종료일 : ".$next_week_end."<br>");
        
    }   
    
    /*
    * MG 게임 내역을 가져오되 , 디비에 저장하지 않고 로그만 표시 
    * 시간대별 검색 가능 
    * 시간 포맷 주의 ( 아래 소스 참조)
    */ 
    public function mg_gamePlayLog(){
        set_time_limit(0); 
        $this -> load -> library('game_play_service');
        $ret_message ="";
        
        //$option[MG][START_TIME] = date('Y-m-d\TH:i:s');
        //$option[MG][END_TIME]   = "2015-12-04T\23:59:59";
        //echo $option[MG][START_TIME] ;
        //exit;
         
        $option[MG][START_TIME] = "2015-12-01T00:00:00";
        $option[MG][END_TIME]   = "2015-12-04T23:59:59";
        
        $this -> game_play_service -> fetch_mg_game_play($option, $ret_message, "log"); 
        echo $ret_message;
    }
    
   /*
    * PT 게임 내역을 가져오되 , 디비에 저장하지 않고 로그만 표시 
    * 시간대별 검색 가능 
    *시간 포맷 주의 ( 아래 소스 참조),YYYY-MM-DD HH:00:00 포맷을 Urlencoding 함 (분, 초는 지정 불가)
    */ 
    public  function pt_gamePlayLog(){
        set_time_limit(0); 
        $this -> load -> library('game_play_service');
        $ret_message =''; 
        
        //$option[PT][START_TIME]  = urlencode("2015-06-01 00:00:00");
        //$option[PT][END_TIME]    = urlencode("2015-11-30 23:00:00");
        //exit;
        
        $option[PT][START_TIME]  = urlencode("2015-06-01 00:00:00");
        $option[PT][END_TIME]    = urlencode("2015-11-30 23:00:00");
        $this -> game_play_servcie -> fetch_pt_game_play($option, $ret_message, "log"); 
        
        echo $ret_message;
    }
    
}
