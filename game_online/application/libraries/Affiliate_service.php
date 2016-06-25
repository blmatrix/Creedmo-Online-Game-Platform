<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$filter_like = '';
// Affiliate_agent 계층에서 자신이 root  가 아닌것을 filter 
function filter_baofa_ref($member){
    if ($member -> affiliate_ref = NULL || 
            $member -> affiliate_ref == 0 || 
            $member -> affiliate_ref == "baofa")
    {
        return FALSE;
     }else {
        return TRUE;
    }
}

function like_filter($agent_vo){
    global $filter_like; 
    if ($agent_vo -> user_id == $filter_like){
        return TRUE;
    }else {
        return FALSE;
    }
}

//Affiliate Agent 의 관리 및 정산 기능을 제공
class Affiliate_service {
    public $CI;
    public function __construct(){
        $this -> CI = & get_instance();
        $this -> CI -> load -> model('admin/affiliate_agent');    
        $this -> CI -> load -> model('admin/user');
        $this -> CI -> load -> model('admin/game_play');
        $this -> CI -> load -> model('admin/deposit');  
        $this -> CI -> load -> model('admin/deps1_commission_policy');
        $this -> CI -> load -> model('admin/deps2_commission_policy');  
        
        $this -> CI -> load -> database();
    }
    
    //파라미터로 주어진 조건을 기준으로 affiliate agent ssettlement 목록 작성
    public function generate_agent_commission_record($conditions = NULL, &$ret_message = ''){
       try{    
           $time_valid = FALSE;
           $start_time = NULL;
           $end_time = NULL;
           
           if ($conditions[DATE_CONDITION][START_TIME] && $conditions[DATE_CONDITION][END_TIME]) {
               $start_time = $conditions[DATE_CONDITION][START_TIME];
               $end_time   = $conditions[DATE_CONDITION][END_TIME];
               
               $start_time_type = gettype($start_time);
               $end_time_type   = gettype($end_time);
               if ($start_time_type == $end_time_type) {
                   if ($start_time_type == 'string') {
                       $start_time = strtotime($start_time);
                       $end_time = strtotime($end_time);
                   }
               
                   if ($start_time_type == 'integer'){}
                   $time_valid = TRUE; 
              }   
           }
           
           ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
           ///
           ///  활성 유저 리스트 
           ///  한번이라도 입금을 한 적이 있으면서 지정된 기간에 게임을 한 적이 있는 유저 
           ///
           ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
           /*
            *  Active User Query1 
            *  (지정된 기간에 입금을 하고 게임을 한 내역이 존재하는  user)
            * 
          
           $sql1 = "
               SELECT 
                   U1.user_no AS user_no,
                   U1.user_id AS user_id,
                   U1.affiliate_ref AS affiliate_ref,
                   U1.affiliate_code AS affiliate_code,
                   U1.login_status AS login_status,
                   P.game_play_no AS game_play_no,
                   P.player_name AS player_name,
                   P.game_type  AS game_type,
                   P.vender_code AS vender_code,
                   P.game_name AS game_name,
                   P.play_date_int AS play_date_int,
                   P.play_date_str AS play_date_str,
                   P.game_play_count AS game_play_count,
                   P.bet_amount AS bet_amount,
                   P.win_amount AS win_amount,
                   P.income_amount AS income_amount,
                   P.distribute_type AS distribute_type,
                   P.reg_date AS play_reg_date,
                   U2.user_no AS upper1_user_no,
                   U2.login_status AS upper1_user_login_status,
                   U2.affiliate_code AS upper1_affiliate_code,
                   U2.user_id AS upper1_user_id,
                   U2.deps1_child_count as upper1_deps1_child_count,
                   U2.deps2_child_count as upper1_deps2_child_count,
                   U3.user_no AS upper2_user_no,
                   U3.affiliate_code AS upper2_affiliate_code,
                   U3.user_id AS upper2_user_id,
                   U3.login_status AS upper2_user_login_status,
                   U3.deps1_child_count as upper2_deps1_child_count,
                   U3.deps2_child_count as upper2_deps2_child_count,
                   C.total_coupon_point as total_coupon_point,
                   D.total_deposit_bonus as total_deposit_bonus
               FROM game_play AS P
               INNER JOIN user AS U ON lcase(substr(P.player_name,5)) = lcase(U.user_id)
               INNER JOIN 
                   (SELECT D1.user_no ,sum(D1.deposit_bonus) as total_deposit_bonus FROM ((select * from deposit WHERE reg_date BETWEEN ? AND ?) AS D1) GROUP BY user_no ) AS D 
                   ON U.user_no = D.user_no 
               INNER JOIN user AS U1 ON D.user_no = U1.user_no
               LEFT OUTER JOIN user AS U2 on U1.affiliate_ref = U2.user_no
               LEFT OUTER JOIN user AS U3 on U2.affiliate_ref = U3.user_no
               LEFT OUTER JOIN 
                   (SELECT C1.user_no, sum(C1.coupon_point) AS total_coupon_point , reg_date FROM ((select * from coupon WHERE reg_date BETWEEN ? AND ?) AS C1) GROUP BY user_no ) AS C 
                   ON P.user_no = C.user_no
               WHERE U1.affiliate_ref NOT IN (?,?)
           ";
           */
           
           /*
            *  Active User Query 2
            *  (한번이라도 입금을 한 적이 있고, 지정된 기간에 게임을 한 내역이 존재하는 user )
            *  ==> 게임을 한 내역이 존재하면 입금을 한 적이 있는 사람임 
            */
           $sql = "
               SELECT 
                   U.user_no AS user_no,
                   U.user_id AS user_id,
                   U.affiliate_ref AS affiliate_ref,
                   U.affiliate_code AS affiliate_code,
                   U.login_status AS login_status,
                   
                   P.game_play_no AS game_play_no,
                   P.player_name AS player_name,
                   P.game_type  AS game_type,
                   P.vender_code AS vender_code,
                   P.game_name AS game_name,
                   P.play_date_int AS play_date_int,
                   P.play_date_str AS play_date_str,
                   P.game_play_count AS game_play_count,
                   P.bet_amount AS bet_amount, 
                   P.payout_amount AS payout_amount,
                   P.win_amount AS win_amount,
                   P.distribute_type AS distribute_type,
                   P.distribute_rate AS distribute_rate,
                   P.acc_comp_point AS acc_comp_point,
                   P.reg_date AS play_reg_date,
                   
                   U2.user_no AS upper1_user_no,
                   U2.login_status AS upper1_user_login_status,
                   U2.affiliate_code AS upper1_affiliate_code,
                   U2.user_id AS upper1_user_id,
                   U2.deps1_child_count as upper1_deps1_child_count,
                   U2.deps2_child_count as upper1_deps2_child_count,
                   
                   U3.user_no AS upper2_user_no,
                   U3.affiliate_code AS upper2_affiliate_code,
                   U3.user_id AS upper2_user_id,
                   U3.login_status AS upper2_user_login_status,
                   U3.deps1_child_count as upper2_deps1_child_count,
                   U3.deps2_child_count as upper2_deps2_child_count,
                   
                   C.user_no as coupon_user_no,
                   C.total_coupon_point as total_coupon_point,
                   D.user_no as deopsit_user_no,
                   D.total_deposit_bonus as total_deposit_bonus
                   
               FROM game_play AS P
               INNER JOIN user AS U ON lcase(substr(P.player_name,5)) = lcase(U.user_id)
               LEFT OUTER JOIN 
                   (SELECT D1.user_no ,sum(D1.deposit_bonus) as total_deposit_bonus FROM ((select * from deposit WHERE deposit_status = '3' AND reg_date BETWEEN ? AND ?) AS D1) GROUP BY D1.user_no ) AS D 
                   ON U.user_no = D.user_no 
               LEFT OUTER JOIN 
                   (SELECT C1.user_no, sum(C1.coupon_point) AS total_coupon_point , reg_date FROM ((select * from coupon WHERE reg_date BETWEEN ? AND ?) AS C1) GROUP BY C1.user_no ) AS C 
                   ON U.user_no = C.user_no
               LEFT OUTER JOIN user AS U2 on U.affiliate_ref = U2.user_no
               LEFT OUTER JOIN user AS U3 on U2.affiliate_ref = U3.user_no    
               WHERE U.affiliate_ref NOT IN (?,?)
           ";
           $bind_param = array();
           $bind_param[] = $start_time; 
           $bind_param[] = $end_time;
           $bind_param[] = $start_time;
           $bind_param[] = $end_time;
           $bind_param[] = 0;
           $bind_param[] = 'baofa';
           
           if ($time_valid == TRUE && $start_time != NULL && $end_time != NULL ){
               $sql .= " AND P.play_date_int between ? AND ? ";
               $bind_param[] = $start_time;
               $bind_param[] = $end_time;
           }
           
           if (!empty($conditions[LIKE_CONDITION])){
                 $sql .= " AND ( U2.user_id LIKE '%".$conditions[LIKE_CONDITION]['user_id']."%' OR U3.user_id LIKE '%".$conditions[LIKE_CONDITION]['user_id']."%')"; 
           }
           $sql .= " ORDER BY user_no DESC, play_date_int ASC";
          
           $datas  = NULL;
           $temp_datas = array();
           $rows = $this -> CI -> game_play -> raw_binding_query($sql, $bind_param);
           //log_message('error',"초기 그룹 및 인덱싱 쿼리 dump ===============================================================================>");       
           //log_message('error',print_r($rows,TRUE));
           //log_message('error', print_r($rows,TRUE));
           
           foreach($rows as $row){
               $datas[$row -> user_no] = array();
               $datas[$row -> user_no]['user_no'] = NULL;
               $datas[$row -> user_no]['user_id'] = NULL;  
               $datas[$row -> user_no]['total_non_slots']  = 0;    // 회원이 한 게임중에서 NON 슬롯게임으로 발생한 바오파 총 수익
               $datas[$row -> user_no]['total_slots'] = 0;         // 회원이 한 게임중에서 슬롯게임으로 발생한 바오파 총 수익
               $datas[$row -> user_no]['total_live'] = 0;          // 회원이 한 게임중에서 라이브 게임으로 발생한 바오파 총 수익
               $datas[$row -> user_no]['total_bet'] = 0;           // 회원의 총 배팅 총액
               $datas[$row -> user_no]['total_payout'] = 0;        // 회원의 베팅 후 돌려 받은 금액의 총합    
               $datas[$row -> user_no]['total_win'] = 0;           // 회원 수익 총합
               $datas[$row -> user_no]['total_income'] = 0;        // 바오파 수익 총합 
               $datas[$row -> user_no]['total_coupon_point'] = 0;   
               $datas[$row -> user_no]['total_deposit_bonus'] = 0;   
               $datas[$row -> user_no]['affiliate_ref'] = 0;   
               $datas[$row -> user_no]['affiliate_id'] = NULL;   
           }
           
           //log_message('error','데이타 구조 =======================>');
          // log_message('error', print_r($datas,TRUE));
           
           foreach($rows as $row){
               $datas[$row -> user_no]['user_no']          = $row -> user_no;
               $datas[$row -> user_no]['user_id']          = $row -> user_id;
               
               $datas[$row -> user_no]['total_non_slots']  = $row -> distribute_type == "NON SLOTS"  ? $datas[$row -> user_no]['total_non_slots'] + -($row -> win_amount) : $datas[$row -> user_no]['total_non_slots']; 
               $datas[$row -> user_no]['total_slots']      = $row -> distribute_type == "SLOTS"      ? $datas[$row -> user_no]['total_slots']     + -($row -> win_amount) : $datas[$row -> user_no]['total_slots'];
               $datas[$row -> user_no]['total_live']       = $row -> distribute_type == "LIVE"       ? $datas[$row -> user_no]['total_live']      + -($row -> win_amount) : $datas[$row -> user_no]['total_live'];
               
               $datas[$row -> user_no]['total_bet']        = $datas[$row -> user_no]['total_bet'] + $row -> bet_amount ;
               $datas[$row -> user_no]['total_payout']     = $datas[$row -> user_no]['total_payout'] + $row -> payout_amount;
               $datas[$row -> user_no]['total_win']        = $datas[$row -> user_no]['total_win'] + $row -> win_amount;
               $datas[$row -> user_no]['total_income']     = $datas[$row -> user_no]['total_income'] + (-$row -> win_amount);
               
               $datas[$row -> user_no]['total_coupon_point']   = $row -> total_coupon_point;   
               $datas[$row -> user_no]['total_deposit_bonus'] = $row -> total_deposit_bonus;  
               $datas[$row -> user_no]['affiliate_ref'] = $row -> upper1_user_no; 
               $datas[$row -> user_no]['affiliate_id'] = $row -> upper1_user_id; 
               
               //위에서 처리되지 않은 row 의 값을 key를 인덱스로 하여 배열에 추가 
               foreach($row as $key => $value){
                   $datas[$row -> user_no][$key] = $value;     
               }
           }
    
           //log_message('error',"초기 그필터 dump ===============================================================================>");       
           //log_message('error',print_r($datas,TRUE));
           
           
           $this -> CI -> load -> library('agent_settle_vo');
    
           $tmp = NULL;
           //$filter_like = !empty($conditions[LIKE_CONDITION]['user_id']) ? $conditions[LIKE_CONDITION]['user_id'] :  '';
           
           //정산받을 agent 를 필터링 
           $agent_settle_vo_arr = array();
      
           if(count($datas) > 0) {
               foreach($datas as $data){
                   if ($data['upper1_user_no']){
                       if (!$this -> is_inserted( $agent_settle_vo_arr, $data['upper1_user_no'])){
                           $tmp = new Agent_settle_vo;
                           $tmp -> user_no =  $data['upper1_user_no'];        
                           $tmp -> agent_code = $data['upper1_affiliate_code'];        
                           $tmp -> user_id =  $data['upper1_user_id'];        
                           $tmp -> deps1_child_count = $data['upper1_deps1_child_count'];        
                           $tmp -> deps2_child_count = $data['upper1_deps2_child_count'];        
                           $agent_settle_vo_arr[] = $tmp;   
                       }
                   }
                   
                   if ($data['upper2_user_no']){
                       if (!$this -> is_inserted($agent_settle_vo_arr, $data['upper2_user_no'])){
                           $tmp = new Agent_settle_vo;
                           $tmp -> user_no =  $data['upper2_user_no'];        
                           $tmp -> agent_code = $data['upper2_affiliate_code'];        
                           $tmp -> user_id =  $data['upper2_user_id'];        
                           $tmp -> deps1_child_count = $data['upper2_deps1_child_count'];        
                           $tmp -> deps2_child_count = $data['upper2_deps2_child_count'];   
                           $agent_settle_vo_arr[] = $tmp;   
                       }
                   }
               }
           }
           
           if (count($datas) > 0) {
               foreach($datas as $data){
                   $upper1_user_no = $data['upper1_user_no'];
                   $upper2_user_no = $data['upper2_user_no'];
                   
                   if ($upper1_user_no) {
                       foreach($agent_settle_vo_arr as $agent_vo){
                           if ($agent_vo -> user_no == $upper1_user_no){
                               $deps_info = new Deps_info;
                               
                               $deps_info -> user_no = $data['user_no']; 
                               $deps_info -> user_id = $data['user_id']; 
                               
                               $deps_info -> total_slots= $data['total_slots']; 
                               $deps_info -> total_non_slots = $data['total_non_slots']; 
                               $deps_info -> total_live = $data['total_live']; 
                               
                               $deps_info -> total_bet = $data['total_bet']; 
                               $deps_info -> total_payout = $data['total_payout']; 
                               $deps_info -> total_win = $data['total_win']; 
                               $deps_info -> total_income = $data['total_income']; 
                               
                               $deps_info -> total_deposit_bonus = $data['total_deposit_bonus']; 
                               $deps_info -> total_coupon_point  = $data['total_coupon_point']; 
                               $deps_info -> affiliate_ref = $data['affiliate_ref']; 
                               $deps_info -> affiliate_id = $data['affiliate_id']; 
                               
                               $agent_vo -> deps1_active_child_count += 1;
                               $agent_vo -> deps1_info_arr[] = $deps_info;
                           }
                       }
                   }
    
                   if ($upper2_user_no ){
                         foreach($agent_settle_vo_arr as $agent_vo){
                           if ($agent_vo -> user_no == $upper2_user_no){
                               $deps_info = new Deps_info;
                               
                               $deps_info -> user_no = $data['user_no']; 
                               $deps_info -> user_id = $data['user_id']; 
                               
                               $deps_info -> total_slots= $data['total_slots']; 
                               $deps_info -> total_non_slots = $data['total_non_slots']; 
                               $deps_info -> total_live = $data['total_live']; 
                               
                               $deps_info -> total_bet = $data['total_bet']; 
                               $deps_info -> total_payout = $data['total_payout']; 
                               $deps_info -> total_win = $data['total_win']; 
                               $deps_info -> total_income = $data['total_income']; 
                               
                               $deps_info -> total_deposit_bonus = $data['total_deposit_bonus']; 
                               $deps_info -> total_coupon_point  = $data['total_coupon_point']; 
                               $deps_info -> affiliate_ref = $data['affiliate_ref']; 
                               $deps_info -> affiliate_id = $data['affiliate_id']; 
                               
                               $agent_vo -> deps2_active_child_count += 1;
                               $agent_vo -> deps2_info_arr[] = $deps_info;
                           }
                       }
                    }
                 } 
           }
              
           $total_condition[ORDER_BY_CONDITION] = "deps1_commission_policy_no ASC";
           $deps1_policies = $this -> CI -> deps1_commission_policy -> advanced_search_result($total_condition);
           
           $total_condition[ORDER_BY_CONDITION] = "deps2_commission_policy_no ASC";
           $deps2_policies = $this -> CI -> deps2_commission_policy -> advanced_search_result($total_condition);
           
           global $filter_like;
            
           /*
            * 특정 agent 의 정산 수익의 검색일 경우, 검색한 agent 만 필터링
            * 
            * */
           $filter_like = !empty($conditions[LIKE_CONDITION]['user_id'])? $conditions[LIKE_CONDITION]['user_id'] : '';
           if ($filter_like){
               $agent_settle_vo_arr = array_values(array_filter($agent_settle_vo_arr,'like_filter'));
           }
           
            //* 2뎁스가 존재하지만 1뎁스가 존재하지 않는 경우 --> 즉 1뎁스 회원중에서 Activate user가 없는 경우 
           foreach($agent_settle_vo_arr as $agent_vo){
               $deps2_info_arr = $agent_vo->  deps2_info_arr;
               //Deps2 배열은 존재하지만 Deps1 배열은 존재하지 않는 경우, Deps2 배열의 각 요소의 부모를 생성해 추가 
               if (count($agent_vo -> deps1_info_arr) < 1){
                   foreach($deps2_info_arr as $deps2_info){
                       $deps1_info = new Deps_info;
                       $deps1_info -> user_no = $deps2_info -> affiliate_ref;
                       $deps1_info -> user_id = $deps2_info -> affiliate_id;
                       $agent_vo-> deps1_info_arr[] = $deps1_info;
                   }
               }else {
                   //뎁스2와 뎁스1에 모두 요소가 존재하는 경우 
                   //뎁스2의 부모가 뎁스1 배열에 존재하는지 여부를 검사하여, 존재하지 않는 경우 추가 
                   $is_deps1_existed = FALSE;
                   foreach($deps2_info_arr as $deps2_info){
                       foreach($agent_vo -> deps1_info_arr as $deps1_info){
                           if ($deps2_info -> affiliate_ref == $deps1_info -> user_no){
                               $is_deps1_existed = TRUE;
                           }
                       }
                       if (!$is_deps1_existed){
                           $deps1_info = new Deps_info;
                           $deps1_info -> user_no = $deps2_info -> affiliate_ref;
                           $deps1_info -> user_id = $deps2_info -> affiliate_id;
                           $agent_vo-> deps1_info_arr[] = $deps1_info;
                       }
                   }
               }
           }

           /*
            * 
            * Agent _settle_bo_arr 를 순회하며 각 agent 의 커미션을 계산 
            */
           foreach($agent_settle_vo_arr as $agent_vo){
               $agent_vo -> calculate_commission($deps1_policies, $deps2_policies);   
           }
           
           $g_deps1_total_commission = 0; 
           $g_deps2_total_commission = 0;
            
           foreach($agent_settle_vo_arr as $agent_vo){
               $g_deps1_total_commission += $agent_vo -> deps1_total_commission;
               $g_deps2_total_commission += $agent_vo -> deps2_total_commission;
           }
           
           $agent_result['agent_count'] = count($agent_settle_vo_arr);
           $agent_result['deps1_total_commssion'] = $g_deps1_total_commission;
           $agent_result['deps2_total_commssion'] = $g_deps2_total_commission;
           $agent_result['all_deps_total'] = $g_deps1_total_commission + $g_deps2_total_commission;
           $agent_result['agent_list'] = $agent_settle_vo_arr;
           return $agent_result;
       }catch(Exception $e){
           $ret_message = $e -> getMessage();
           return FALSE;    
       }
    }
    
   
    public function generate_monthly_agent_commission_record($conditions = NULL, &$ret_message = ''){
        try{    
            if (empty($condition))
                throw new Exception("Date must be passed");
            
            $result = $this -> generate_agent_commission_record($conditions,$ret_message);
            if (is_bool($result) || $result == FALSE){
                throw new Exception($ret_message);
            }
            
            if (count($agent_settle['agent_list']) < 1) {
                log_message('error', "정산 받을 agent 가 존재하지 않습니다");
                exit ;
            } else {
                foreach ($agent_settle['agent_list'] as $agent_settle_bo) {
                    echo "정산받을 agent  ==> " . $agent_settle_bo -> user_id . "</br>";
                }
            }

            $this -> load -> model('admin/agent_commission_record');
            $batch_arr = array();
            
            foreach($result['agent_list'] as $agent_settle_vo ){
                $batch_arr[] = array(
                    'user_no' => $agent_settle_vo -> user_no,
                    'deps1_apply_level      '  => $agent_settle_vo -> $deps1_apply_level -> deps1_commission_policy_no,
                    'deps2_apply_level      '  => $agent_settle_vo -> $deps2_apply_level -> deps2_commission_policy_no,
                    'deps1_total_child_count'  => $agent_settle_vo -> deps1_child_count,
                    'deps2_total_child_count'  => $agent_settle_vo -> deps2_child_count,
                    'deps1_active_child_count' => $agent_settle_vo -> deps1_active_child_count,
                    'deps2_active_child_count' => $agent_settle_vo -> deps2_active_child_count,
                    'deps1_total_commission'   => $agent_settle_vo -> deps1_total_commission,
                    'deps2_total_commission'   => $agent_settle_vo -> deps2_total_commission,
                    'deps1_apply_level'        => $agent_settle_vo -> deps2_total_commission,
                    'deps2_apply_level'        => $agent_settle_vo -> deps2_total_commission,
                    'total_commission'         => $agent_settle_vo -> total_commission,
                    'commission_month'         => strtotime($prev_month_start_date),
                    'commission_month_str'     => date("Y-m", $m),
                    'status'                   =>'Y',
                    'reg_date'                 => time()
                );
            }
            $this -> agent_commission_record -> insert_batch($batch_arr);
            $ret_message = "process_agent_commision_record is finished successfully ...........";
            return TRUE;    
        }catch(Exception $e){
            $ret_message = $e -> getMessage();
            return FALSE;
        }
    }
    
    public function is_inserted($haystacks, $agent_no){
        $result = FALSE;    
        foreach($haystacks as $haystack){
            if ($haystack -> user_no == $agent_no){
                $result = TRUE;
                break;
            }
        }
        return $result;
    }
    
    public function find_childs($datas, $ref){
        $tmp = array();
        foreach($datas as $data){
            if ($ref == $data['upper1_affiliate_ref']){
                $tmp[] = $data;
            }
        }
        return $tmp;
    }
    
    public function get_commission_rate($amount, $active_user_count,$distribute_type){
        global $distribute_types;
        foreach($distribute_types as $key => $value){
            if (in_array($distribute_type, $value)){
                $distribute_type = $key;
                break;
            }   
        }
        $rate = 0;
        switch($distribute_type){
            case "SLOTS":
                break;
            case "NOT_SLOTS":
                break;
            case "LIVE":
                break;
        }
        return $distribute_type;  
    }   
    
    //지정한 사용자의 affiliate 정산 데이타를 생성
    public function generate_affiliate_settlement($user_no, $date_condition = NULL){
        
    }
}
