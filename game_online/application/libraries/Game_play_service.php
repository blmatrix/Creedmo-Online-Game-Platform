<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 하루 단위로 Cron 등의 스케쥴러에서 실행되는 클래스로 
// MG 와 PT 의 게임내역을 가져와 저장한다.
class Game_play_service {
    
    public $CI;
    public function __construct(){
        $this -> CI = & get_instance();    
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/game_play');
        $this -> CI -> load -> model('admin/wallet');
        $this -> CI -> load -> model('admin/comp_conversion_policy', 'CCP');
        $this -> comp_conversion_policy = $this -> CI -> CCP -> advanced_search_row();
    }
    
    // 게임타입으로 affiliate agent 의 정산을 위한 타입을 구함 
    public function get_distribute_type($game_type){
        global $distribute_types;
        $distribute_type ="NON_ SLOTS";
        
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
                $rate = $this -> comp_conversion_policy -> slot_conversion_1p / 100;
                break;
            case 'NON_SLOTS':
                $rate = $this -> comp_conversion_policy -> non_slot_conversion_1p / 100;
                break;
            case 'LIVE':
                $rate = $this -> comp_conversion_policy -> live_conversion_1p / 100;
                break;
        }
        return $rate;
    }
    
    // 일반 요청에 대한 에러 핸들러
    public function mg_common_error_handle($result, $obj_property , $match_property ='', $match_str =''){
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
    
    // 리포트 요청에 대한 에러 핸들러
    public function mg_report_error_handle($result, $obj_property , $match_property ='', $match_str =''){
        $message =""; 
        $is_error = FALSE;
        if (empty($result -> $obj_property)){
            $message ="Server Error. No Response Object";
            $is_error = TRUE;
        }else {
            if ($result -> $obj_property -> ErrorCode != 0) {
                $message = $result -> $obj_property -> ErrorMessage;
                $is_error = TRUE;
            }else if ($result -> $obj_property -> ErrorCode == 0 && $result -> $obj_property-> $match_property != $match_str){
                $message = $result -> $obj_property -> Description;
                $is_error = TRUE;
            }
        }
        
        if ($is_error){
            throw new Exception($message);
        }
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

    public function fetch_mg_game_play($condition = NULL,&$ret_message = ''){
        $this -> CI -> load -> library('microgame');
        log_message("error", "Game_play_service:: MG_FETCH  porcessing .........");
        $this-> CI -> db -> trans_start();    
      
        $ret_message = '';    
        $dateFrom = '';
        $dateTo   = '';
        $batch_arr = array();
        $comp_arr = array();
                
        if (!empty($condition)){
            $dateFrom = $condition[MG][START_TIME];
            $dateTo   = $condition[MG][END_TIME];
        }else {
            //기간이 지정되지 않았을 경우 전달 1일부터 전달 말일 까지를 수행
            $dateFrom = date('YYYY-MM-DDT00:00:00', strtotime('-1 day', time()));
            $dateTo   = date('YYYY-MM-DDT23:59:59', strtotime('-1 day', time()));
        }
                
        log_message('error', 'MG start_date ===> '.$dateFrom -> format('c'));
        log_message('error', 'MG end_date ===> '.$dateTo -> format('c'));
        
        $params = $this -> CI -> microgame -> set_params(
            array(
                'loginName' => 'BAOFA174364', 
                'pinCode' => 'd05276'
            )
        );
        
        try {
            $result = $this -> CI -> microgame -> invoke('IsAuthenticate', $params);
            $this -> mg_common_error_handle($result,'IsAuthenticateResult');
            
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
            $params = $this  -> microgame -> set_params($params);
            $result = $this  -> microgame -> invoke('GetReportByName', $params);     
            $this -> mg_common_error_handle($result, "GetReportByNameResult");
                
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
                    $params = $this -> CI -> microgame -> set_params(array('id' => $Guid, 'nPage' => $cur_req_page));
                    $result = $this -> CI -> microgame -> invoke('GetReportResult', $params);
                    $this -> mg_report_error_handle($result , 'GetReportResultResult','Status','Complete');
                    
                    $paging = $result -> GetReportResultResult -> Paging;
                    $total_page           = $paging -> TotalPage;
                    $total_row            = $paging -> TotalRow;
                    $rows_per_page        = $paging -> RowsPerPage;
                    $rows_in_current_page = $paging -> RowsInCurrentPage;
                    
                    $xml = simplexml_load_string('<DataSet>'.$result -> GetReportResultResult -> CurrentPageData -> any . '</DataSet>');
                    $result = $xml -> xpath('//Table');
                    
                    while (list(, $node) = each($result)) {
                        $distribute_type = $this -> get_distribute_type((string)$node -> GameCategory);
                        $distribute_rate = $this -> get_distribute_rate($distribute_type);
                        $acc_comp_point  = $distribute_rate * (int)$node -> Income;
                        
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
                        
                        if (empty($comp_arr[(string)$node -> AccountNumber])){
                            $comp_arr[(string)$node -> AccountNumber]['total_acc_comp_point'] = 0;
                        }
                        $comp_arr[(string)$node -> AccountNumber]['total_acc_comp_point'] += $acc_comp_point;
                     }
                     $cur_req_page += $cur_req_page ;
                     log_message('error','cur_page');
                     log_message('error',$cur_req_page);
                }while($cur_req_page <= $total_page );
                
                if (!empty($batch_arr))
                    log_message('error','MG Game fetch .....');
                    log_message('error',print_r($batch_arr,TRUE));
                    $this -> CI -> game_play -> insert_batch($batch_arr);    
                if (!empty($comp_arr))
                    $this -> update_wallet_comp($comp_arr);
            }else {
                $ret_message = 'unknown error';
                return FALSE;
            }  
        }catch(exception $e){
            log_message('error','MG API error -------------------------------------------------------------------------------------->');
            log_message('error',$e-> getMessage());
            $ret_message  = $e-> getMessage();
            return FALSE;
        }
        $this-> CI -> db -> trans_complete();
        log_message("error", "Game_play_service:: MG_FETCH  finished");
        return TRUE;
    }
    
    
    public function fetch_pt_game_play($condition = NULL,&$ret_message = ''){
        $this -> CI -> load -> library('playtech');
        log_message("error", "Game_play_service:: PT_FETCH  processing .........");
        $this-> CI -> db -> trans_start();
        
        $start_time = '';
        $end_time = '';
        try {
            if (!empty($condition)){
                $start_time = urlencode($condition[PT][START_TIME]);
                $end_time   = urlencode($condition[PT][END_TIME]);
            }else {
                $start_time  = urlencode(date('YYYY-MM-DD 00:00:00', strtotime('-1 day', time())));
                $end_time    = urlencode(date('YYYY-MM-DD 23:59:59', strtotime('-1 day', time())));
            }
            
            $game_type = "both"; 
            $sort_by = "games"; 
            
            $batch_arr = array();
            $comp_arr = array();
            
            $res = $this -> CI -> playtech -> report_game_stats1($game_type, $sort_by,$start_time , $end_time);
            $this -> pt_error_handle($res);
            //처음 읽었을 때 totalCount 가 0 이면 return , erro가 존재하면 리턴
            if ($res -> pagination -> totalCount == 0 ) {
                $ret_message = 'Page not found';
                return FALSE;
            }
            
            foreach ($res-> result as $obj){
                $distribute_type = $this -> get_distribute_type($obj -> GAMETYPE);
                $distribute_rate = $this -> get_distribute_rate($distribute_type);
                $acc_comp_point  = $distribute_rate * (int)$obj -> BETS;
                
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
            if (!empty($batch_arr))
                $this -> CI -> game_play -> insert_batch($batch_arr);    
            if (!empty($comp_arr))
                $this -> update_wallet_comp($comp_arr);
            log_message('error','PT game play fetch =====================================================================================');
            log_message('error',print_r($batch_arr,TRUE));
            log_message('error',print_r($comp_arr,TRUE));
        }catch(Exception $e){
            log_message('error','PT API error -------------------------------------------------------------------------------------->');
            log_message('error',$e-> getMessage());
            $ret_message  = $e-> getMessage();
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
        log_message('error' ,count($users)); 
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
            
            log_message('error', "batch_query");
            log_message('error', $sql);
        }

        if (!empty($sql)){
            $this -> CI -> db -> query($sql);
        }
    }   
}