<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/application.php';

class Member extends Application{
    public function __construct() {
        parent::__construct();
        $this -> load -> library('template_generator');
        $this -> load -> library('user_agent');
        $this -> load -> library('session_manager');
        
        $this -> load -> helper('url');
        $this -> load -> helper('asset');
        $this -> load -> helper('time');
    }

    public function member_list(){
        $data = array();
        
        $user_no = $this -> check_session(); 	
		
		$this -> load -> model('admin/user');
		$user_condition[WHERE_CONDITION] = array('user_no' => $user_no);
		$user = $this -> user -> advanced_search_row($user_condition);
		
		$this -> load -> model('admin/user_level');
		$level_condition[ORDER_BY_CONDITION] = 'user_level_no ASC';
		$user_levels = $this -> user_level -> advanced_search_result($level_condition);
		
		$sql = "
			SELECT 
				U.user_no AS user_no,
				U.user_id AS user_id,
				U.deps1_child_count AS deps1_child_count,
				U.deps2_child_count AS deps2_child_count,
				U.affiliate_code AS affiliate_code,
				CASE 
					WHEN G.total_acc_comp_point >= ? AND G.total_acc_comp_point < ? THEN 'Bronze'  
					WHEN G.total_acc_comp_point >= ? AND G.total_acc_comp_point < ? THEN 'Silver'  
					WHEN G.total_acc_comp_point >= ? AND G.total_acc_comp_point < ? THEN 'Gold'  
					WHEN G.total_acc_comp_point >= ? THEN 'Platinum'  
					ELSE 'Bronze'
				END AS user_level_code_name,				
				U.join_date AS join_date,
				U.first_deposit AS first_deposit, 
				
				W.mg_casino_balance AS mg_casino_balance,
				W.pt_casino_balance AS pt_casino_balance,
				
				G.total_bet_amount AS total_bet_amount, 
				G.total_acc_comp_point AS total_acc_comp_point
			FROM 
				user AS U
			INNER JOIN 
				wallet AS W 
				ON U.user_no = W.user_no
			LEFT OUTER JOIN 
				(
					SELECT 
						upper(substr(player_name,5)) AS player_name,
						SUM(bet_amount) AS total_bet_amount, 
						SUM(acc_comp_point) AS total_acc_comp_point 
					FROM 
						db_offline.game_play 
					GROUP BY 
						upper(substr(player_name,5))
				) AS G
				ON U.user_id = G.player_name
			WHERE U.affiliate_ref = ?
			ORDER by U.join_date DESC 
		";
		
		$query_binding = array(
			$user_levels[0] -> promotion_level_point,$user_levels[1] -> promotion_level_point,
			$user_levels[1] -> promotion_level_point,$user_levels[2] -> promotion_level_point,
			$user_levels[2] -> promotion_level_point,$user_levels[3] -> promotion_level_point,
			$user_levels[3] -> promotion_level_point,
			$user_no
		);
		$data['deps1_rows'] = $this -> user -> raw_binding_query($sql, $query_binding);
		
		$deps2_rows = array();
		$total_deps2_count = 0;
		foreach($data['deps1_rows'] as $deps1_row){
			$upper_user_no = $deps1_row -> user_no;
			$query_binding[count($query_binding)-1] = $upper_user_no;
			$deps2_rows[$deps1_row-> affiliate_code] = $this -> user -> raw_binding_query($sql,$query_binding);	
			$total_deps2_count += count($deps2_rows[$deps1_row-> affiliate_code]);
		}
		$data['deps2_rows_ar'] = $deps2_rows;
		$data['total_deps2_count'] = $total_deps2_count;
		$data['total_deps1_count'] = count($data['deps1_rows']);
        $this -> __set_template_data($data);
        $this -> load -> view('brand/member/member_list',$data);
    }
    
    private function __set_template_data(&$data){
        $this -> template_generator -> set_top_user_data($data);
        $this -> template_generator -> set_footer_data($data); 
    }
}
