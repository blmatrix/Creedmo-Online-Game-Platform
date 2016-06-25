<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 하루 단위로 Cron 등의 스케쥴러에서 실행되는 클래스로 
// MG 와 PT 의 게임내역을 가져와 저장한다.
class Game_play_service {
    
    public $CI;
    public $message;
    public $update_row_count ; 
    public function __construct(){
        $this -> CI = & get_instance();    
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/game_play');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> model('admin/comp_conversion_policy', 'CCP');
        $this -> update_row_count = 0;
        $this -> comp_conversion_policy = $this -> CI -> CCP -> advanced_search_row();
    }
    
    public function get_message(){
        return $this -> message;
    }
    
    public function get_update_row_count(){
        return $this -> update_row_count;
    }
    
    public function pt_error_handle($result){
        $message = '';
        $is_error = FALSE;
        if (!empty($result -> error)){
            $message = $result -> error;
            $is_error = TRUE;
        }
        
        if ($is_error){
            throw new Exception($message);
        }
    }
        
    // 일반 요청에 대한 에러 핸들러
    private function mg_error_handle($result, $obj_property){
        $message =""; 
        $is_error = FALSE;
        
        if (empty($result -> $obj_property)){
            $message ="Server Error. No Response Object";
            $is_error = TRUE;
        }else {
            if ($result -> $obj_property -> ErrorCode != 0){
                $message = $result -> $obj_property -> ErrorMessage;
                $is_error = TRUE;
            }
        }
        if ($is_error){
            throw new Exception($message);
        }
    }
   
   private function mg_report_error_handle($obj, $property){
        $re_code = "";
        if($obj -> $property -> Status == 'Error'){
            //캐시에 리포트 저장 시간이 만료되었음. 해당 리포트의 Guid 를 다시 요청,획득하고 다시 요청해야 함 
            if ($obj -> $property -> SourceStatus == "NotInCache"){
                $re_code = "NotInCache";
            }
            
            //파라미터 유효성 에러 등의 일반적인 요청 에러 
            if ($obj -> $property -> SourceStatus == "GeneralError"){
                $re_code = "GeneralError";
            }
           
        // 정상 처리 완료 
        }else if ($obj -> $property -> Status == "Complete"){
            if ($obj -> $property -> SourceStatus == "Normal"){
                $re_code = "Normal";
            }
        }else if ($obj -> $property -> Status == "Pending"){
            $recode = "Pending";   
        }
        return $re_code;
    }
   
   
    // 게임타입으로 affiliate agent 의 정산을 위한 타입을 구함 
    public function get_distribute_type($game_type){
        global $distribute_types;
        $distribute_type ="NON_SLOTS";
        
        foreach($distribute_types as $key => $value){
            if (in_array($game_type, $value)){
                $distribute_type = $key;
                break;
            }   
        }
        return $distribute_type;
    }
   
    public function get_distribute_rate($game_type){
        $rate = '';    
        switch($game_type){
            case 'SLOTS':
                $rate = (float)$this -> comp_conversion_policy -> slot_conversion_1p / 100;
                break;
            case 'NON_SLOTS':
                $rate = (float)$this -> comp_conversion_policy -> non_slot_conversion_1p /100;
                break;
            case 'LIVE':
                $rate = (float)$this -> comp_conversion_policy -> live_conversion_1p /100;
                break;
        }
        return $rate;
    }
    
  
   /*
    * 조회 기간은 3일 이내여야 함 
    * ex) 11-01  00:00:00 가 시작시간이라면  최대 11-04 23:59:59 
    * 조회 기간이 3일 이상일 경우 
    * CL_INPUT_PARAMETERS_INVALID , Date Range is more than 3 Days for detailed data 에러 발생
    * 페이지 정보가 반환되기 때문에, 이 정보를 바탕으로 추가 정보를 요청할 지 말지를 결정
    * 주의 사항 
    * 데이타 요청 후에 응답은 성공으로 나오지만(IsSucceed = 1,ErrorCode = 0,ErrorValue =  SUCCESS)  
    *  SourceStatus = > NotInCache , Status => Error 인 경우 리포트 캐시가 준비되지 않은 상태로 중분한 sleep 이나 재요청을 하여서 
    *  하여야 함  
    */
    public function fetch_mg_game_play($condition = NULL, $act_type = "log"){
        $this -> CI -> load -> library('microgame');
        log_message("error", "Game_play_service:: MG_FETCH  porcessing .........");
        $this-> CI -> db -> trans_start();    
      
        $dateFrom = '';
        $dateTo   = '';
        $batch_arr = array();
        $comp_arr = array();
                
        if (!empty($condition)){
            $dateFrom = $condition[MG][START_TIME];
            $dateTo   = $condition[MG][END_TIME];
        }else {
            //기간이 지정되지 않았을 경우 전달 1일부터 전달 말일 까지를 수행
            $dateFrom = date('Y-m-d\T00:00:00', strtotime('-1 day', time()));
            $dateTo   = date('Y-m-m\T23:59:59', strtotime('-1 day', time()));
        }
                
        log_message('error', 'MG start_date ===> '.$dateFrom );
        log_message('error', 'MG end_date ===> '.$dateFrom );
        
        $params = $this -> CI -> microgame -> set_params(
            array(
                'loginName' => 'MMCashier181029', 
                'pinCode' => 'ce6d8b'
            )
        );
        
        try {
            $result = $this -> CI -> microgame -> invoke('IsAuthenticate', $params);
            $this -> mg_error_handle($result,'IsAuthenticateResult');
            
            retry_by_not_in_cache : 
            $params = array(
                'reportName' => 'PlayerGamePlayReport',
                'parameters' => array(
                    array('ParameterName' =>  'FromDate', 'ParameterValue' => $dateFrom),
                    array('ParameterName' =>  'ToDate', 'ParameterValue' => $dateTo),
                    array('ParameterName' =>  'PlayerGrossWinSummaryLevel','ParameterValue' => 'Detailed'),
                    array('ParameterName' =>  'TimeZoneType','ParameterValue' => 'parent'),
                    array('ParameterName' =>  'EntityList_XML','ParameterValue' =>'')
                ),
                'maxNumRowsPage' =>  100 
            );
            $params = $this  -> CI -> microgame -> set_params($params);
            $result = $this  -> CI -> microgame -> invoke('GetReportByName', $params);     
            $this -> mg_error_handle($result, "GetReportByNameResult");
                
            if (!empty($result -> GetReportByNameResult)) {
                $Guid = $result -> GetReportByNameResult -> Id;
                $total_page = 0;
                $total_row = 0; 
                $rows_per_page = 0;
                $rows_in_current_page = 0;
                $cur_req_page = 1;
                
                $params = '';
                $result = '';
                $xml = '';
                
                do {
                    retry_by_pending:
                    $params = $this -> CI -> microgame -> set_params(array('id' => $Guid, 'nPage' => $cur_req_page));
                    $result = $this -> CI -> microgame -> invoke('GetReportResult', $params);
                    
                    $code  = $this -> mg_report_error_handle($result , 'GetReportResultResult');
                    log_message('error',"Response Code  : ".$code);
                    switch($code){
                        case "NotInCache":
                            goto retry_by_not_in_cache;
                            break;
                            
                        case "GeneralError":
                            $err_msg  = date('yy-m-d h:i:s')."  :: GeneralError!  Check your Reqeust Paramter </br>";
                            $err_msg .= '[ErrorValue] '.$result -> GetReportResultResult -> ErrorValue .' :: '. '[Des] '.$result -> GetReportResultResult -> Description;
                            throw new Exception($err_msg);
                            break;
                            
                        case "Pendnig":
                            echo "Request Pending. Try it again";
                            sleep(1);
                            goto retry_by_pending;
                            break;    
                            
                        case "Complete":
                    }
                    
                    $paging = $result -> GetReportResultResult -> Paging;
                    $total_page           = $paging -> TotalPage;
                    $total_row            = $paging -> TotalRow;
                    $rows_per_page        = $paging -> RowsPerPage;
                    $rows_in_current_page = $paging -> RowsInCurrentPage;
                    $page_number          = $paging -> PageNumber;
                    
                    $this -> update_row_count = $total_row;
                    $cur_req_page += $cur_req_page ;
                    
                    //DB 에 저장하지 않고 로그데아타 적용 
                    if ($act_type == "log"){
                        continue;    
                    }
                    
                    $xml = simplexml_load_string('<DataSet>'.$result -> GetReportResultResult -> CurrentPageData -> any . '</DataSet>');
                    $result = $xml -> xpath('//Table');
                    while (list(, $node) = each($result)) {
                        $distribute_type = $this -> get_distribute_type((string)$node -> GameCategory);
                        $distribute_rate = $this -> get_distribute_rate($distribute_type);
                        $acc_comp_point  = (float)$node -> BetAmount * $distribute_rate;
                        
                        $batch_arr[] = array(
                            'player_name'       => (string)$node -> Label_Player,
                            'vender_code'       => VENDER_MG,
                            'game_type'         => (string)$node -> GameCategory,
                            'game_name'         => (string)$node -> GameName, 
                            'play_date_int'     => strtotime((string)$node -> Date),
                            'play_date_str'     => (string)$node -> Date,
                            'game_play_count'   => -1, /* 해당 필드의 값이 없음을 의미 */
                            'bet_amount'        => (float)$node -> BetAmount,
                            'payout_amount'     => (float)$node -> PayoutAmount,
                            'win_amount'        => -((float)$node -> BetAmount - (float)$node -> PayoutAmount),  
                            'distribute_type'   => $distribute_type,
                            'distribute_rate'   => $distribute_rate,
                            'acc_comp_point'    => $acc_comp_point,
                            'reg_date'          => time()
                        );   
                        
                        if (empty($comp_arr[(string)$node -> Label_Player])){
                            $comp_arr[(string)$node -> Label_Player]['total_acc_comp_point'] = 0;
                        }
                        $comp_arr[(string)$node -> Label_Player]['total_acc_comp_point'] += $acc_comp_point;
                     }
                     log_message('error','cur_page');
                     log_message('error',$cur_req_page);
                }while($cur_req_page <= $total_page );
                
                if (!empty($batch_arr)){
                    log_message('error','MG Game fetch .....11111');
                    log_message('error',print_r($batch_arr,TRUE));
                    $this -> CI -> game_play -> insert_batch($batch_arr);    
                }
                if (!empty($comp_arr)){
                    $this -> update_wallet_comp($comp_arr);
                }
            }else {
                $this -> message = 'unknown error';
                return FALSE;
            }  
        }catch(exception $e){
            log_message('error','MG API error -------------------------------------------------------------------------------------->');
            log_message('error',$e-> getMessage());
            $this -> message = $e-> getMessage();
            return FALSE;
        }
        $this-> CI -> db -> trans_complete();
        log_message("error", "Game_play_service:: MG_FETCH  finished");
        return TRUE;
    }
    
    /*
    * 조회 기간은 현재 제한없는 것으로 보임 
    * 페이지 정보가 반환되지만, 실제 한번 요청으로 모든 기간 조회 데이타를 제공하기 때문에 
    * 이 파라미터를 사용하여 추가 요청 여부를 결정할 필요가 없음 
    */
    public function fetch_pt_game_play($condition = NULL,$act_type = "log"){
        $this -> CI -> load -> library('playtech');
        $this-> CI -> db -> trans_start();
        
        $start_time = '';
        $end_time = '';
        try {
            if (!empty($condition)){
                $start_time = urlencode($condition[PT][START_TIME]);
                $end_time   = urlencode($condition[PT][END_TIME]);
            }else {
                // 검색 기간이 정해지지 않을 경우 전일의 게임 기록을 가져온다.
                $start_time  = urlencode(date('Y-m-d 00:00:00', strtotime('-1 day', time())));
                $end_time    = urlencode(date('Y-m-d 00:00:00'));
            }
            
            $game_type = "both"; 
            $sort_by = "games"; 
            
            $batch_arr = array();
            $comp_arr = array();
            
            $res = $this -> CI -> playtech -> report_game_stats1($game_type, $sort_by,$start_time , $end_time);
            $this -> pt_error_handle($res);
            //처음 읽었을 때 totalCount 가 0 이면 return , erro가 존재하면 리턴
            if ($res -> pagination -> totalCount == 0 ) {
                $this -> message = 'Page not found';
                return FALSE;
            }
            
             //DB 에 저장하지 않고 로그데아타 적용 
             if ($act_type = "log"){
                continue;    
             }
                    
            foreach ($res-> result as $obj){
                $distribute_type = $this -> get_distribute_type($obj -> GAMETYPE);
                $distribute_rate = $this -> get_distribute_rate($distribute_type);
                $acc_comp_point  = (float)$node -> BetAmount * $distribute_rate;
                
                $batch_arr[] = array(
                    'player_name'       => $obj -> PLAYERNAME,
                    'vender_code'       => VENDER_PT,
                    'game_type'         => $obj -> GAMETYPE,
                    'game_name'         => $obj -> GAMENAME,
                    'play_date_int'     => strtotime($obj ->  DAY),
                    'play_date_str'     => $obj -> DAY,
                    'game_play_count'   => $obj -> GAMES,
                    'bet_amount'        => $obj -> BETS,
                    'payout_amount'     => $obj -> WINS,
                    'win_amount'        => -($obj -> BETS - $obj ->  WINS),
                    'distribute_type'   => $distribute_type,
                    'distribute_rate'   => $distribute_rate,
                    'acc_comp_point'    => $acc_comp_point,
                    'reg_date'          => time()
                );
                
                if (empty($comp_arr[$obj-> PLAYERNAME]['total_acc_comp_point'])){
                    $comp_arr[$obj-> PLAYERNAME]['total_acc_comp_point'] = 0;
                }
                $comp_arr[$obj-> PLAYERNAME]['total_acc_comp_point']  += $acc_comp_point;
            }
            if (!empty($batch_arr)){
                $this -> CI -> game_play -> insert_batch($batch_arr); 
                $this -> update_row_count = $res -> pagination -> totalCount;   
            }
            if (!empty($comp_arr)){
                $this -> update_wallet_comp($comp_arr);
                log_message('error','PT game play fetch =====================================================================================');
                log_message('error','PT game play fetch =====================================================================================');
                log_message('error',print_r($batch_arr,TRUE));
                log_message('error',print_r($comp_arr,TRUE));
            }
        }catch(Exception $e){
            log_message('error','PT API error -------------------------------------------------------------------------------------->');
            log_message('error',$e-> getMessage());
            $this -> message = $e-> getMessage();
            return FALSE;
        }

        log_message("error", "Game_play_service:: PT_FETCH  finished");       
        $this-> CI -> db -> trans_complete();
        return TRUE;
    }
   
    public function update_wallet_comp($arr){
        $in_arr = array();
        foreach($arr as $key => $value){
            $in_arr[] = strtoupper(substr($key, 4));            
        }
        $conditions[WHERE_IN_CONDITION] = array(
            WHERE_IN_COLUMN => 'user_id',
            WHERE_IN_DATAS  => $in_arr
        );
        
        $users = $this -> CI -> user -> advanced_search_result($conditions);
        foreach($arr as $key => $value){
             log_message('error' ,"key ====> " . $key); 
            foreach($users as  $user){
                log_message('error' ,"변환 -------   ". strtoupper(substr($key, 4))); 
                if (strtoupper(substr($key, 4)) == $user -> user_id){
                    $arr[$key]['user_no'] = $user -> user_no;
                    $arr[$key]['user_id'] = $user -> user_id;
                    break;
                }
            }
        }
        log_message('error' , print_r($arr, TRUE));
        $sql = "";
        $i = 0;
        $in_sql = " WHERE user_no in (";
        if (count($arr)){
            $arr_length = count($arr);
            log_message('error' , "arr_length ------> ".$arr_length);
            $sql = "UPDATE wallet SET comp_point = CASE";
            foreach($arr as $key => $value){
                $tmp_user_no =  $value['user_no'];
                $tmp_comp = $value['total_acc_comp_point']; 
                log_message('error', "tmp_amount ------------------>" . $tmp_comp);
                log_message('error', "tmp_comp ------------------>" . $tmp_comp);
                
                if ($tmp_comp > 0){
                    $sql .=" WHEN user_no = {$tmp_user_no} THEN comp_point + {$tmp_comp}";
                    $in_sql .= $tmp_user_no;
                    if($i != $arr_length -1)
                        $in_sql .=",";
                }    
                $i++;
            }
            
            $sql .= " ELSE comp_point END";
            $in_sql .= ")";
            $sql .= $in_sql;
            
            log_message('error', "comp point update batch query");
            log_message('error', $sql);
        }

        if (!empty($sql)){
            $this -> CI -> db -> query($sql);
        }
    }   
}