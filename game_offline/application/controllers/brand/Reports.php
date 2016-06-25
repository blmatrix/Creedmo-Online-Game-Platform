<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Reports extends Application{
    public function __construct() {
        parent::__construct();
        $this -> load -> library('template_generator');
        $this -> load -> library('user_agent');
        $this -> load -> library('session_manager');
        
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
    }

    public function tool() {
        $this -> load -> model('admin/affiliate_banner');
        $data = array();  
        $this -> __set_template_data($data);
        
        $sql = "SELECT * FROM affiliate_banner WHERE use_status = ? ORDER BY reg_date ASC";
        $bind_query = array(BANNER_USE_STATUS_ENABLE);
        $data['banners'] = $this -> affiliate_banner -> raw_binding_query($sql, $bind_query);
        $this -> load -> view('brand/reports/tool',$data);
    }

    public function statistical_records() {
        $this -> load -> helper('location');
        if ($this -> input -> method(TRUE) == "POST") {
        } else {
        	$this -> load -> library('paging');
            $user_no = $this -> check_session();
            $this -> load -> model('admin/agent_commission_record');
            $this -> load -> helper('time');
            $data['daterange'] = '';
            $data['search_date_start'] = '';
            $data['search_date_end'] = '';
            $data['view_type'] = 'monthly';
			$vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1; 
            
            
            if ($this -> input -> get('daterange')){
                $data['daterange'] = $this -> input -> get('daterange');
                $data['search_date_start'] = strtotime(date($data['daterange'].'/01/01 00:00:00'));
                $data['search_date_end'] = strtotime(date($data['daterange'].'/12/31 23:59:59'));
                log_message('error',$data['search_date_end']);
            }else {
                $data['search_date_start'] = strtotime(date('Y/01/01 00:00:00' , time()));
                $data['search_date_end'] = strtotime(date('Y/12/31 23:59:59' , time()));
                $data['daterange'] = date('Y' , time());
				
				$this -> paging -> addVariable('daterange', $data['daterange']);
            }
          
            $sql = "
                SELECT 
                    AC.*,
                    U.affiliate_code AS affiliate_code,
                    U.user_name AS user_name,
                    U.user_id AS user_id,
                    U.login_status AS login_status,
                    E.total_write_off as total_write_off
                FROM 
                    agent_commission_record as AC
                JOIN user AS U 
                    on AC.user_no = U.user_no
                LEFT OUTER JOIN (SELECT agent_commission_record_no, sum(write_Off_amount) as total_write_off FROM agent_commission_record_detail group by agent_commission_record_no ) AS E 
                    on AC.agent_commission_record_no = E.agent_commission_record_no
                WHERE AC.user_no = {$user_no}
            ";
            
            if ($data['daterange']){
                $sql .=" AND AC.commission_month >=".$data['search_date_start']." AND AC.commission_month <=".$data['search_date_end'];
            }
            
            $sql .="  ORDER BY AC.commission_month ASC";
            
            $results = $this -> agent_commission_record-> raw_binding_query($sql);
            $record_count = count($results);
          
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $record_count;
            $this -> paging -> setVariableFromGet($this -> input -> get(NULL));
            $this -> paging -> setPage($vpage);
            
            $sql .= " LIMIT {$this->paging->START_ROW} , {$this->paging->SCALE}";
            $data['commission_records'] = $this -> agent_commission_record-> raw_binding_query($sql);
        	$data['paging'] = $this -> paging;
	        
	        $g_deps1_commission = 0;
	        $g_deps2_commission = 0;
	        
	        foreach( $data['commission_records'] as $commission_record){
	           $g_deps1_commission += $commission_record -> deps1_total_commission;  
	           $g_deps2_commission += $commission_record -> deps2_total_commission;  
	        }
	        $data['g_deps1_commission'] = $g_deps1_commission;
	        $data['g_deps2_commission'] = $g_deps2_commission;
	        $this -> __set_template_data($data);
	        $this -> load -> view('brand/reports/statistical_records', $data);
        }
    }

    public function agent_detail() {
        $this -> load -> library('affiliate_service');
        $this -> check_session();
        $user_id = $this -> session_manager -> get_user_session('user_id');
        $data = array();  
        
        if ($this -> input -> get('daterange')){
             $data['daterange'] = $this -> input -> get('daterange');
             $date_arr = explode('-', $this -> input -> get('daterange'));
             $data['search_date_string'] = "SUMMARY";
             $data['search_date_start'] = trim($date_arr[0]);
             $data['search_date_end'] = trim($date_arr[1]);
        }else {
                
            $Date = date('Y-m-d');
                $YY   = date("Y" , strtotime($Date)); 
                $MM   = date("m" , strtotime($Date)); 
                $DD   = date("d" , strtotime($Date)); 
                $Day  = date("w" , strtotime($Date)); 
                
            $this_week_start = date("Y/m/d 00:00:00",strtotime($YY."-".$MM."-".$DD." -".$Day." day")); 
            $this_week_end   = date("Y/m/d 23:59:59",strtotime($this_week_start." +6 day")); 
            $m_this_week_start = date('Y/m/d 00:00:00',strtotime($this_week_start .' +1 day'));
            $m_this_week_end   = date('Y/m/d 23:59:59',strtotime($this_week_end .' +1 day'));
    
            $data['search_date_string'] = "SUMMARY";
            $data['search_date_start'] = $m_this_week_start;
            $data['search_date_end'] = $m_this_week_end;
            $data['daterange'] =  $data['search_date_start'].' - '. $data['search_date_end'];
        }
        
        $date_condition[DATE_CONDITION_COLUMN] = 'reg_date';
        $date_condition[START_TIME] =  $data['search_date_start'];
        $date_condition[END_TIME] = $data['search_date_end'];
        $total_conditions[DATE_CONDITION] = $date_condition;   
        
        $like_condition['user_id'] = trim($user_id);
        $total_conditions[LIKE_CONDITION] = $like_condition;   
        
        $data['act_mode'] = $this -> input -> get('act_mode');
        if (!$data['act_mode']){
            $data['act_mode'] = ''; 
        }
        $data['agent_settle'] = $this -> affiliate_service-> generate_agent_commission_record($total_conditions);
        $this -> __set_template_data($data);
        $this -> load -> view('brand/reports/agent_detail', $data);  
    }
     /*
     * 콤마가 포함된 문자열 숫자에서 콤마를 제거한 후 숫자 반환
     * */
    public function get_number($str) {
        $str = trim($str);
        if (strpos($str, ",") !== FALSE) {
            return (int)trim(str_replace(",", "", $str));
        } else {
            return (int)$str;
        }
    }
    
    public function request_payment() {
        $user_no = $this -> check_session();
        $this -> load -> helper('time');
        $this -> load -> helper('location');
        
        $user_no = $this -> check_session();
		$this -> load -> model('admin/user');
		$user_cond[WHERE_CONDITION] = array('user_no' => $user_no);
		$user = $this -> user -> advanced_search_row($user_cond);
		
		
		$this -> load -> model('admin/wallet');
        $wallet = $this -> wallet -> advanced_search_row($user_cond);
        
        if ($this -> input -> method(TRUE) == "POST") {
            $this -> load -> library('form_validation');
            
            //100 이상 출금 허용
            $this -> form_validation -> set_rules('settlement_amount', 'Settlement Amount', 'trim|required|callback_get_number|greater_than[99]');  
            $this -> form_validation -> set_rules('settlement_method', 'Settlement Method', 'trim|required');  
            
            if ($this -> form_validation -> run() == FALSE) {
                //자세한 에러 메시지 응답 요규됨 
                alert_only("입력 양식이 잘못되었습니다");
            } else {
            	$this -> load -> model('admin/agent_settlement');
                /* 
                 * agent_code 검증 코드 주석 처리                
                $user = $this -> user -> advanced_search_row($condition);
                $req_agent_code = $this -> input -> post('agent_code');
                if ($user -> affiliate_code !=  $req_agent_code){
                    alert_only('Wrong Access');
                }
                */
                
               
                if ($this -> input -> post('settlement_amount') > $wallet -> agent_settlement_balance ){
                    alert_only('출금 요청 금액이 출금 가능금액을 초과했습니다. 확인하고 다시 시도해 주세요');
                    locationReload('parent');
                    exit;
                }
				
				$this -> load -> helper('array');                
                $permited_params = array(
                    'settlement_amount','settlement_method'
                );
                $insert_data = elements($permited_params, $this -> input -> post(NULL),NULL);
                $insert_data['agent_no'] = $user_no;
                $insert_data['reg_date'] = time();
                
                if ($insert_data['settlement_method'] == SETTLEMENT_METHOD_WIRE){
                    $this -> load -> model('admin/bank_account');
                    $bank_account_no = $this -> input -> post ('bank_account_no');
                    
                    $bank_cond[WHERE_CONDITION] = array('bank_account_no' => $bank_account_no);
                    $bank_account = $this -> bank_account -> advanced_search_row($bank_cond);
                    
                    $insert_data['bank_account_no'] = $this -> input -> post ('bank_account_no');
                    $insert_data['bank_name'] = $bank_account -> bank_name;
                    $insert_data['bank_account'] = $bank_account -> bank_account;
					$this -> agent_settlement -> insert($insert_data);
                }else {
                	$this -> load -> library('transfer_service');
					$data = array(
			            'user_no' => $user -> user_no,
			            'transfer_amount' => $insert_data['settlement_amount'],
			            'transfer_from'  => 'Agent Settlement',
			            'mg_id' => $user -> mg_id,
			            'pt_id' => $user -> pt_id
			        );
					
					$result ='';
                    if ($insert_data['settlement_method'] == SETTLEMENT_METHOD_MG_MONEY){
						$data['transfer_to'] = "MG";  
						$result  = $this -> transfer_service -> transfer_to_mg($data);                  	
                    }
					
					if ($insert_data['settlement_method'] == SETTLEMENT_METHOD_PT_MONEY){
						$data['transfer_to'] = "PT"; 
						$result  = $this -> transfer_service -> transfer_to_pt($data);   
					}
					
					if (!$result){
			            alert_only($this -> transfer_service -> get_message());
			            exit;
			        }
					
					//에이젼트 수익을 게임머니로 입금할 경우, 바로 승인처리
                    $insert_data['settlement_status'] = SETTLEMENT_STATUS_CONFIRMED;
                    $insert_data['confirm_date'] = time();
					$this -> agent_settlement -> insert($insert_data);
                }
                                
                /*
                 *  출금 요청한 금액만큼 월렛의 agent_settlement_balance를 차감
                 */
                $wallet_cond[WHERE_CONDITION] = array('user_no' => $user_no);
                $walet_update_arr = array(
                    'agent_settlement_balance' => ( $wallet -> agent_settlement_balance - $insert_data['settlement_amount'])
                );
                //출금방식이 월렛일 경우 wallet 발란스를  출금한 금액만큼 증감시킴
                //if ($insert_data['settlement_method'] == SETTLEMENT_METHOD_WALLET){
                  //  $walet_update_arr['wallet_balance'] = $wallet-> wallet_balance +  $insert_data['settlement_amount'];
                //}
                $this -> wallet -> update($walet_update_arr,$wallet_cond);
				alert_only('요청이 잘 처리되었습니다.');
                locationReload('parent');
            }
            return;
        } else {
            $this -> load -> model('admin/agent_settlement');
            $this -> load -> model('admin/wallet');
            $data = array();      
            $this -> __set_template_data($data);
            
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            $this -> load -> library('paging');
            
            
            $condition[WHERE_CONDITION] = array('agent_no' => $user_no);
            $condition[ORDER_BY_CONDITION] = 'reg_date DESC';
            $data['settlements_count'] = $this -> agent_settlement -> advanced_count_all_result($condition);
            
            $this -> paging -> SCALE = 20;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $data['settlements_count'];
            $this -> paging -> setPage($vpage);
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $data['paging'] = $this -> paging;
            
            unset($condition);
            $condition[WHERE_CONDITION] = array('user_no' => $user_no);
            $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
            
            $sql = "
                SELECT 
                    agent_settlement.*,
                    user.user_name,
                    CASE settlement_method 
                            WHEN 1 
                                THEN 'E-Wallet' 
                            WHEN 2 
                                THEN 'Wire Transfer' 
                            WHEN 3 
                                THEN 'MG' 
                            WHEN 4 
                                THEN 'PT' 
                            ELSE '' 
                        END AS withdraw_type_str,
                    
                    CASE settlement_status 
                            WHEN 1 
                                THEN 'Not Checked' 
                            WHEN 2 
                                THEN 'Before comfirmed' 
                            WHEN 3 
                                THEN 'Confirmed'
                            WHEN 4 
                                THEN 'Canceled By You'
                            WHEN 5 
                                THEN 'Canceled By Admin'
                            ELSE '' 
                        END AS settlement_status_str
                FROM 
                    agent_settlement
                INNER JOIN 
                    user ON user.user_no = agent_settlement.agent_no    
                WHERE 
                    agent_settlement.agent_no = ?
                ORDER BY reg_date DESC
                LIMIT ?,?
                ";
            $binding = array($user_no,$this -> paging -> START_ROW,$this -> paging -> SCALE);            
            
            $data['request_payments'] = $this -> agent_settlement -> raw_binding_query($sql,$binding);
            unset($condition);
            $condition[WHERE_CONDITION] = array(
                'agent_no' => $user_no,
                'settlement_status' => SETTLEMENT_STATUS_CONFIRMED
                
            );
            $data['total_compllete_payment']  = $this -> agent_settlement-> sum('settlement_amount','sum',$condition);
            $this -> load -> view('brand/reports/request_payment',$data);
        }
    }
    
    private function __set_template_data(&$data){
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data); 
    }
    
    public function form($form_name){
        $user_no = $this -> check_session();
        $this -> load -> model('admin/wallet');
        $this -> load -> model('admin/bank_account');
        
        if ($form_name == 'request_payment'){
            $condition[WHERE_CONDITION] = array('user_no' => $user_no);
            $data['wallet'] = $this -> wallet -> advanced_search_row($condition);
            $data['banks'] =  $this -> bank_account -> advanced_search_result($condition);
            $this -> load -> view("brand/reports/form/{$form_name}_form",$data);
        }
    }

    public function action($action){
        $user_no = $this -> check_session();
        $this -> load -> helper('array');
        $this -> load -> helper('location');
        
        if ($action == 'delete'){
            $this -> load -> model('admin/agent_settlement');
            $permitted_params = array(
                'act_mode', 'cur_status','change_status','agent_settlement_no'
            );
            
            $params = elements($permitted_params,$this -> input -> post(NULL),NULL);
            $update_arr = array(
                'settlement_status' => $params['change_status']
            );
            
            $condition[WHERE_CONDITION] = array('agent_settlement_no' => $params['agent_settlement_no']);
            $this -> agent_settlement -> update($update_arr,$condition);
            
            /*
             * 사용자가 취소한 것이라면, 취소된 금액만큼 월렛의 agent_settlement_balance 를 증액한다
             */
            if ($params['change_status'] == SETTLEMENT_STATUS_CANCLED){
                $agent_settlement = $this -> agent_settlement -> advanced_search_row($condition);
                
                $this -> load -> model('admin/wallet');
                $condition[WHERE_CONDITION] = array('user_no' => $user_no);
                $wallet = $this -> wallet -> advanced_search_row($condition);
                $wallet_update = array(
                    'agent_settlement_balance' => ($wallet -> agent_settlement_balance + $agent_settlement -> settlement_amount)
                );
                
                unset($condition);
                $condition[WHERE_CONDITION] = array('user_no' => $user_no);
                $this -> wallet -> update($wallet_update,$condition);
            }
            locationReload('parent');        
        }
    } 
   
}
