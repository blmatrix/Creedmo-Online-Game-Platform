<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this -> load -> helper('url');
        $this -> load -> helper('location');
        $this -> load -> helper('form');
        $this -> load -> helper('baofa');
      
    }
    
    public function manage_setting() {
        $this -> load -> model('admin/customer_service', 'CS');
        $this -> load -> model('admin/casino_basic_policy', 'CBP');
        $this -> load -> model('admin/affiliate_information', 'AI');
        $this -> load -> model('admin/user_level', 'UL');
        $this -> load -> model('admin/deps1_commission_policy', 'D1_P');
        $this -> load -> model('admin/deps2_commission_policy', 'D2_P');
        $this -> load -> model('admin/comp_conversion_policy', 'CCP');

        $act_mode = $this -> input -> post('act_mode', TRUE);
        if ($this -> input -> method(TRUE) == "POST") {
            if ($act_mode == 'customer_service') {
                $data['call_center_num1'] = $this -> input -> post('call_center_num1');
                $data['call_center_num2'] = $this -> input -> post('call_center_num2');
                $data['skype_id'] = $this -> input -> post('skype_id');
                $data['email'] = $this -> input -> post('email');
                $data['qq_customer_service1'] = $this -> input -> post('qq_customer_service1');
                $data['qq_customer_service2'] = $this -> input -> post('qq_customer_service2');
                $data['greeting_message'] = $this -> input -> post('greeting_message');

                $this -> CS -> deleteAll();
                $this -> CS -> insert($data);
                alert('Customer Service의  수정 사항이 잘 반영되었습니다');
                locationReload('parent');
            }

            if ($act_mode == 'casino_policy') {
                $condition = array('casino_basic_policy_no' => (int)$this -> input -> post('casino_basic_policy_no'));
                $data['first_deposit_event'] = $this -> input -> post('first_deposit_event');
                $data['max_1st_deposit_bonus'] = $this -> input -> post('max_1st_deposit_bonus');
                $this -> CBP -> update($data, $condition);

                alert('Casino Basic Policy의  수정 사항이 잘 반영되었습니다');
                locationReload('parent');
            }

            if ($act_mode == 'affiliate_information') {
                $condition = array('affiliate_information_no' => (int)$this -> input -> post('affiliate_information_no'));

                $data['call_for_partner'] = $this -> input -> post('call_for_partner');
                $data['qq_for_partner'] = $this -> input -> post('qq_for_partner');
                $data['skype_id_for_partner'] = $this -> input -> post('skype_id_for_partner');
                $data['email_for_partner'] = $this -> input -> post('email_for_partner');

                $this -> AI -> update($data, $condition);

                alert('affilate information 의  수정 사항이 잘 반영되었습니다');
                locationReload('parent');

            }

            if ($act_mode == 'user_level_policy') {
                $level_arrays = $this -> input -> post('level');
                foreach ($level_arrays as $key => $value) {
                    $user_level_no = $key;
                    foreach ($level_arrays[$key] as $index_key => $index_value) {
                        $data[$index_key] = $index_value;
                    }
                    $conditon[WHERE_CONDITION] = array('user_level_no' => $user_level_no);
                    $this -> UL -> update($data, $conditon);
                    unset($conditon, $data);
                }
                alert('User Level 의 수정 사항이 잘 반영되었습니다');
                locationReload('parent');
            }

            if ($act_mode == "deps1_policy") {
                $deps_array = $this -> input -> post('deps1');
                foreach ($deps_array as $key => $value) {
                    $deps1_commission_policy_no = $key;
                    foreach ($deps_array[$key] as $index_key => $index_value) {
                        $data[$index_key] = $index_value;
                    }
                    $conditon[WHERE_CONDITION] = array('deps1_commission_policy_no' => $deps1_commission_policy_no);
                    $this -> D1_P -> update($data, $conditon);
                    unset($conditon, $data);
                }
                alert('Affiliate 1 Deps policy 의 수정 사항이 잘 반영되었습니다');
                locationReload('parent');
            }

            if ($act_mode == "deps2_policy") {
                $deps_array = $this -> input -> post('deps2');
                foreach ($deps_array as $key => $value) {
                    $deps1_commission_policy_no = $key;
                    foreach ($deps_array[$key] as $index_key => $index_value) {
                        $data[$index_key] = $index_value;
                    }
                    $conditon[WHERE_CONDITION] = array('deps2_commission_policy_no' => $deps1_commission_policy_no);
                    $this -> D2_P -> update($data, $conditon);
                    unset($conditon, $data);
                }
                alert('Affiliate 2 Deps policy 의 수정 사항이 잘 반영되었습니다');
                locationReload('parent');
            }
            
            if ($act_mode == 'comp_conversion_policy'){
                $this -> CCP -> deleteAll();
                
                $data['slot_conversion_1p']     = $this -> input -> post('slot_conversion_1p');
                $data['non_slot_conversion_1p'] = $this -> input -> post('non_slot_conversion_1p');
                $data['live_conversion_1p']     = $this -> input -> post('live_conversion_1p');
                $data['reg_date']               = time();
                $this -> CCP -> insert($data);
                alert('수정 사항이 잘 반영되었습니다');
                locationReload('parent');
                
            }

        } else {
            $data['customer_service'] = $this -> CS -> advanced_search_row();
            $data['casino_basic_policy'] = $this -> CBP -> advanced_search_row();
            $data['affiliate_information'] = $this -> AI -> advanced_search_row();
            $data['user_levels'] = $this -> UL -> advanced_search_result();
            $data['comp_conversion_policy'] = $this -> CCP -> advanced_search_row();

            $condition[ORDER_BY_CONDITION] = "commission_level ASC";
            $data['deps1_polices'] = $this -> D1_P -> advanced_search_result($condition);
            $data['deps2_polices'] = $this -> D2_P -> advanced_search_result($condition);
            $this -> load -> view('admin/settings/set_manage', $data);
        }
    }

    public function manager_setting($request_type = '', $request_no = 0) {
        if ($this -> input -> method(TRUE) == "POST") {

        } else {
            $this -> load -> model('admin/admin_level');
            $this -> load -> model('admin/admin');
            $this -> load -> helper('time');
            $this -> load -> library('paging');
            
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            $data['admin_count'] = $this -> admin  -> advanced_count_all_result();
            
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $data['admin_count'] ;
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage );
            
            $condition[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['paging'] = $this -> paging;
            
            $admins = $this -> admin -> advanced_search_result($condition);
            $i = 0;
            foreach ($admins As $admin) {
                $admin_list[$i]['admin'] = $admin;
                $condition = array('admin_level_no' => $admin -> admin_level_no);
                $admin_list[$i]['admin_level'] = $this -> admin_level -> advanced_search_row($condition);
                unset($condition);
                $i++;
            }
            $data['admin_list'] = $admin_list;

            $this -> load -> view('admin/settings/set_manager', $data);
        }
    }

    public function m_game_code_update(){
        $this -> load -> model('admin/game');
        $sql ="update game set m_game_code = ? where game_name_en = ?";
        $file_path = "./uploads/excel/MG/mobile/m_game_code.xlsx";
        $this -> load -> library("PHPExcel");
        $objPHPExcel = new PHPExcel();
        $objPHPExcel = PHPExcel_IOFactory::load($file_path);
        $sheetsCount = $objPHPExcel -> getSheetCount();
        for ($i = 0; $i < $sheetsCount; $i++) {
            $objPHPExcel -> setActiveSheetIndex($i);
            $sheet = $objPHPExcel -> getActiveSheet();

            $highestRow = $sheet -> getHighestRow();
            $highestColumn = $sheet -> getHighestColumn();
            
             for ($row = 1; $row <= $highestRow; $row++) {
                  if ($row == 1) continue;
                  $rowData = $sheet -> rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);   
                  $game_name   =  trim($rowData[0][0]); 
                  $m_game_code =  trim($rowData[0][1]); 
                  log_message('error',$game_name . '==='.$m_game_code);
                  $query_binding = array($m_game_code, $game_name);
                  $this -> game -> raw_binding($sql, $query_binding);     
             }
        }
         echo "request Ok";
    }
    
    public function game_list($vender_no = 1, $select_cate = 1) {
        $this -> load -> model('admin/game');
        $this -> load -> model('admin/game_category1');
        $this -> load -> model('admin/vender');
        $this -> load -> model('admin/game_image');

        if ($this -> input -> method(TRUE) == "POST") {

            $game_vender = strtoupper($this -> input -> post('vender'));
            $config['upload_path'] = "./uploads/excel/{$game_vender}/";
            $config['allowed_types'] = 'xls|xlsx';
            $this -> load -> library('upload', $config);

            if (!$this -> upload -> do_upload()) {
                $error = array('error' => $this -> upload -> display_errors());
                echo var_dump($error);
            } else {
                $data = $this -> upload -> data();
                $ext = substr($data['file_name'], strrpos($data['file_name'], "."));
                $original_file = $data['file_path'] . $data['file_name'];
                $new_file = $data['file_path'] . strtoupper($game_vender) . '_' . uniqid(date("Ymd") . "_") . $ext;
                rename($original_file, $new_file);

                $this -> load -> library("PHPExcel");

                $objPHPExcel = new PHPExcel();
                $objPHPExcel = PHPExcel_IOFactory::load($new_file);
                $sheetsCount = $objPHPExcel -> getSheetCount();

                //* 쉬트별로 읽기 */
                for ($i = 0; $i < $sheetsCount; $i++) {
                    $objPHPExcel -> setActiveSheetIndex($i);
                    $sheet = $objPHPExcel -> getActiveSheet();

                    $highestRow = $sheet -> getHighestRow();
                    $highestColumn = $sheet -> getHighestColumn();
                    $game_batch_arr = array();
                    /* 한줄읽기 */
                    for ($row = 1; $row <= $highestRow; $row++) {
                        /* $rowData가 한줄의 데이터를 셀별로 배열처리 됩니다. */
                        if ($row == 1)
                            continue;
                        $rowData = $sheet -> rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                        
                        $brand =  trim($rowData[0][EXCEL_BRAND_INDEX]);
                        if (!$brand){
                            $brand = GAME_BRAND_Y;
                        }else {
                            $brand = GAME_BRAND_N;
                        }
                        //게임 데이타 삽입
                        $game_insert_data = array(
                            'game_code' => trim($rowData[0][EXCEL_GAME_CODE_INDEX]), 
                            'vender_no' => $game_vender == "PT" ? 1 : 2, 
                            'game_category1_no' => (int)$rowData[0][EXCEL_GAME_CATEGORY1_NO_INDEX], 
                            'game_category2' => trim($rowData[0][EXCEL_GAME_CATEGORY2_INDEX]), 
                            'game_category3' => trim($rowData[0][EXCEL_GAME_CATEGORY3_INDEX]), 
                            'game_sub_category' => trim($rowData[0][EXCEL_GAME_SUB_CATEGORY_INDEX]), 
                            'game_name_en' => trim($rowData[0][EXCEL_GAME_NAME_INDEX]), 
                            'html5' => nullOrEmptyDefault(trim($rowData[0][EXCEL_GAME_HTML_INDEX]), HTML_SUPPORT_NOT), 
                            'service_status' => nullOrEmptyDefault(trim($rowData[0][EXCEL_SERVICE_STATUS_INDEX]), GAME_SERVICE_STATUS_ON), 
                            'game_status' => OLD_GAME, 
                            'game_image1' => trim($rowData[0][EXCEL_GAME_IMAGE_FILE_NAME1_INDEX]), 
                            'game_image2' => trim($rowData[0][EXCEL_GAME_IMAGE_FILE_NAME2_INDEX]), 
                            'brand' => $brand,
                            'reg_date' => time()
                        );
                        $this -> game -> insert($game_insert_data);
                        $insert_id = $this -> db -> insert_id();

                        //게임 테이블에 게임 이미지 패스가 입력되지만, game_image 테이블에도 삽입한다./
                        $game_image_data[] = array(
                            'game_no' => $insert_id, 
                            'game_image_path' => trim($rowData[0][EXCEL_GAME_IMAGE_FILE_NAME1_INDEX])
                        );

                        $game_image_data[] = array(
                            'game_no' => $insert_id, 
                            'game_image_path' => trim($rowData[0][EXCEL_GAME_IMAGE_FILE_NAME2_INDEX])
                        );

                        $this -> game_image -> insert_batch($game_image_data);
                        unset($game_insert_data);
                        unset($game_image_data);
                        /*
                         * 배치 명령을 통한 Game Data insert ( 게임 번호를 쉽게 구할 수 없기 때문에 게임이미지를 별도의 게임이미지 테이블에 저장하기 어려움)
                         $game_batch_arr[] = array(
                         'game_code'          => trim($rowData[0][EXCEL_GAME_CODE_INDEX]),
                         'vender_no'          => $game_vender == "PT" ? 1:2,
                         'game_category1_no'  => (int)$rowData[0][EXCEL_GAME_CATEGORY1_NO_INDEX],
                         'game_category2'     => trim($rowData[0][EXCEL_GAME_CATEGORY2_INDEX]),
                         'game_category3'     => trim($rowData[0][EXCEL_GAME_CATEGORY3_INDEX]),
                         'game_sub_category'  => trim($rowData[0][EXCEL_GAME_SUB_CATEGORY_INDEX]),
                         'game_name_en'       => trim($rowData[0][EXCEL_GAME_NAME_INDEX]),
                         'html5'              => nullOrEmptyDefault(trim($rowData[0][EXCEL_GAME_HTML_INDEX]), HTML_SUPPORT_NOT ) ,
                         'game_status'        => nullOrEmptyDefault(trim($rowData[0][EXCEL_GAME_STATUS_INDEX]), GAME_SERVICE_ON ) ,
                         'reg_date'           => time()
                         );
                         this -> game -> insert_batch($game_batch_arr);
                         * */
                    }

                }

                locationReload("parent");
            }
        } else {
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            $this -> load -> library('paging');
            $this -> load -> helper('asset');
            $sort = $this -> input -> get('sort');
            $data = array();
            //PT 게임 수
            $condition[WHERE_CONDITION] = array('vender_no' => 1);
            $data['pt_game_count'] = $this -> game -> advanced_count_all_result($condition);
            unset($condition);

            //MG 게임 수
            $condition[WHERE_CONDITION] = array('vender_no' => 2);
            $data['mg_game_count'] = $this -> game -> advanced_count_all_result($condition);
            unset($condition);
            
            //벤더 정보
            $condition[WHERE_CONDITION] = array('vender_no' => $vender_no);
            $data['vender'] = $this -> vender -> advanced_search_row($condition);
            unset($condition);

            //게임 카테고리 1 정보
            $condition[ORDER_BY_CONDITION] = 'game_category1_no ASC';
            $data['game_categorys'] = $this -> game_category1 -> advanced_search_result($condition);
            unset($condition);

            //선택한 벤터 및 선택한 카테고리의 게임 리스트
            $condition[WHERE_CONDITION] = array('vender_no' => $vender_no, 'game_category1_no' => (int)$select_cate);
            $condition[ORDER_BY_CONDITION] = 'game_no ASC';
            
            if ($sort){
                $condition[ORDER_BY_CONDITION] = 'count DESC';
            }
            
            $data['game_count'] = $this -> game -> advanced_count_all_result($condition);
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT = $data['game_count'];
            $this -> paging -> setPage($vpage);
            $this -> paging -> setVariableFromGet($this -> input -> get());
            
            $condition[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['paging'] = $this -> paging;
            $games = $this -> game -> advanced_search_result($condition);
            
            unset($condition);
            
            $data['game_info_rows'] = array();
            foreach ($games as $game) {
                $game_category1_no = $game -> game_category1_no;

                $condition[WHERE_CONDITION] = array('game_category1_no' => $game_category1_no);
                $game_category1 = $this -> game_category1 -> advanced_search_row($condition);
                
                $data['game_info_rows'][] = array(
                    $game, 
                    $game_category1,
                    is_file(asset_absolute_path($game-> vender_no, 1, $game-> game_image1)),
                    is_file(asset_absolute_path($game-> vender_no, 2, $game-> game_image2)),
                );
                unset($condition);
            }

            $condition[WHERE_CONDITION] = array('game_category1_no' => $select_cate);
            $data['sort_yn'] = "y";
            
            $data['select_category'] = $this -> game_category1 -> advanced_search_row($condition);
            $data['select_cate'] = $select_cate;
            
            $data['vender_no'] = $vender_no;
            $this -> load -> view('admin/settings/game_list', $data);
        }
    }
    
    public function game_search(){
        $this -> load -> model('admin/game');
        $this -> load -> model('admin/game_category1');
        $this -> load -> model('admin/vender');
        $this -> load -> model('admin/game_image');
        $this -> load -> helper('asset');
        
         //게임 카테고리 1 정보
        $condition[ORDER_BY_CONDITION] = 'game_category1_no ASC';
        $data['game_categorys'] = $this -> game_category1 -> advanced_search_result($condition);
        
        $search_keyword =  $this -> input -> get('search_keyword', TRUE);
        $data['search_keyword'] = $search_keyword; 

        $sql = 'SELECT * FROM game WHERE game_name_en LIKE ? or game_name_zh LIKE ?';
        $query_binding[] = "%{$search_keyword}%";
        $query_binding[] = "%{$search_keyword}%";
        
        $games = $this -> game -> raw_binding_query($sql,$query_binding);    
        
        $data['game_info_rows'] = array();
        foreach ($games as $game) {
            $game_category1_no = $game -> game_category1_no;
            $condition[WHERE_CONDITION] = array('game_category1_no' => $game_category1_no);
            $game_category1 = $this -> game_category1 -> advanced_search_row($condition);
            $data['game_info_rows'][] = 
                array(
                    $game, 
                    $game_category1,
                    is_file(asset_absolute_path($game-> vender_no, 1, $game-> game_image1)),
                    is_file(asset_absolute_path($game-> vender_no, 2, $game-> game_image2)),
                );
            unset($condition);
        }
        $this -> load -> view('admin/settings/game_search_list', $data);           
    }
    
    public function event($act_mode = '') {
        $this -> load -> model('admin/event');
        $this -> load -> library('paging');
        $this -> load -> helper('time');
        $this -> load -> helper('asset');

        if ($this -> input -> method(TRUE) == "POST") {

        } else {
            $condition = NULL;
            $vpage = $this -> input -> get('vpage') ? $this -> input -> get('vpage') : 1;
            $data['event_count'] = $this -> event  -> advanced_count_all_result();
            
            $this -> paging -> SCALE = 15;
            $this -> paging -> GROUP = 10;
            $this -> paging -> TOTAL_CNT =  $data['event_count'] ;
            $this -> paging -> setVariableFromGet($this -> input -> get());
            $this -> paging -> setPage($vpage );
            
            $condition[LIMIT_CONDITION][LIMIT] =  $this -> paging -> SCALE;
            $condition[LIMIT_CONDITION][OFFSET] = $this -> paging -> START_ROW;
            $data['paging'] = $this -> paging;
            
            $data['events'] = $this -> event -> advanced_search_result($condition);
            $this -> load -> view('admin/settings/event', $data);
        }
    }

    public function form($request_form, $request_type =0, $request_no = 0) {
        $this -> load -> helper('asset');
        $this -> load -> helper('time');

        if ($this -> input -> method(TRUE) == "POST") {

            if ($request_form == "manager") {
                $this -> load -> model('admin/admin_level');
                $this -> load -> model('admin/admin');

                if ($request_type == "modify") {
                    $data['admin_level_no'] = (int)$this -> input -> post('admin_level_no');
                    $data['admin_id'] = $this -> input -> post('admin_id');
                    $data['admin_pass'] = md5($this -> input -> post('admin_pass'));
                    $data['admin_name'] = $this -> input -> post('admin_name');
                    $condition[WHERE_CONDITION] = array('admin_no' => $this -> input -> post('request_no'));
                    $this -> admin -> update($data, $condition);
                    locationReload('parent');
                    exit ;

                } else if ($request_type == "add") {
                    $data['admin_level_no'] = (int)$this -> input -> post('admin_level_no');
                    $data['admin_id'] = $this -> input -> post('admin_id');
                    $data['admin_pass'] = md5($this -> input -> post('admin_pass'));
                    $data['admin_name'] = $this -> input -> post('admin_name');
                    $data['reg_date'] = time();
                    $data['login_status'] = LOGIN_STATUS_N;
                    $data['admin_status'] = ADMIN_AUTH_COMPLETE;
                    $this -> admin -> insert($data);
                    locationReload('parent');
                    exit ;
                }

            } else if ($request_form == "game") {
                $this -> load -> model('admin/game');

                if ($request_type == "modify") {
                    $game_no = (int)$this -> input -> post('request_no');

                    $game_data['vender_no'] = $this -> input -> post('vender_no');
                    $game_data['game_code'] = $this -> input -> post('game_code');
                    $game_data['game_category1_no'] = $this -> input -> post('game_category1_no');
                    $game_data['game_category2'] = $this -> input -> post('game_category2');
                    $game_data['game_category3'] = $this -> input -> post('game_category3');
                    $game_data['game_sub_category'] = $this -> input -> post('game_sub_category');
                    $game_data['game_name_en'] = $this -> input -> post('game_name_en');
                    $game_data['game_name_zh'] = $this -> input -> post('game_name_zh');
                    $game_data['count'] = (int)$this -> input -> post('count');
                    
                    $game_data['html5'] = $this -> input -> post('html5') == FALSE ? HTML_SUPPORT_NOT : HTML_SUPPORT_OK; 
                    $game_data['game_status'] = $this -> input -> post('game_status') == FALSE? OLD_GAME : NEW_GAME;
                    $game_data['service_status'] = $this -> input -> post('service_status') == FALSE ? GAME_SERVICE_STATUS_OFF : GAME_SERVICE_STATUS_ON;
                    
                    $game_data['game_image1'] = $this -> input -> post('game_image1');
                    $game_data['game_image2'] = $this -> input -> post('game_image2');
                    $condition[WHERE_CONDITION] = array('game_no' => (int)$game_no);
                    $this -> game -> update($game_data, $condition);
                                        
                    $rVen = $this -> input ->post('vender_no'); 
                    $rCate = $this -> input ->post('select_cate'); 
                    locationReload('parent');
                    exit;

                } else if ($request_type == "add") {

                    $game_data['vender_no'] = $this -> input -> post('vender_no');
                    $game_data['game_code'] = $this -> input -> post('game_code');
                    $game_data['game_category1_no'] = $this -> input -> post('game_category1_no');
                    $game_data['game_category2'] = $this -> input -> post('game_category2');
                    $game_data['game_category3'] = $this -> input -> post('game_category3');
                    $game_data['game_sub_category'] = $this -> input -> post('game_sub_category');
                    $game_data['game_name_en'] = $this -> input -> post('game_name_en');
                    $game_data['game_name_zh'] = $this -> input -> post('game_name_zh');
                    $game_data['count'] = (int)$this -> input -> post('count');
                    $game_data['html5'] = $this -> input -> post('html5');
                    $game_data['game_status'] = $this -> input -> post('game_status');
                    $game_data['service_status'] = $this -> input -> post('service_status');
                    $game_data['game_image1'] = $this -> input -> post('game_image1');
                    $game_data['game_image2'] = $this -> input -> post('game_image2');
                    $game_data['reg_date'] = time();
                    $this -> game -> insert($game_data);
                    locationReload('parent');
                    exit;
                    
                } else if ($request_type = "delete"){
                    $this -> load -> model("admin/game");
                    $request_no = (int)$request_no;
                    $condition[WHERE_CONDITION] = array('game_no' => $request_no);
                    $this -> game -> delete($condition);

                    $rVen = $this -> input ->get('ret_ven'); 
                    $rCate = $this -> input ->get('ret_cate'); 
                    locationReload('parent');
                    exit;
                }

            } else if ($request_form == "event") {
                $this -> load -> model('admin/event');

                if ($request_type == "modify") {
                    $insert_data['event_title'] = $this -> input -> post('event_title');
                    $insert_data['event_content'] = $this -> input -> post('event_content');

                    $insert_data['open_direct'] = $this -> input -> post('open_direct') == FALSE ? 'N' : $this -> input -> post('open_direct');
                    $insert_data['event_status'] = $insert_data['open_direct'];
                    $insert_data['event_status_string'] = $insert_data['event_status'] == "Y" ? "OPEN" : "NOT OPEN";

                    $insert_data['start_date'] = string_to_time($this -> input -> post('start_date'));
                    $insert_data['end_date'] = string_to_time($this -> input -> post('end_date'));

                    $condition[WHERE_CONDITION] = array('event_no' => (int)$this -> input -> post('request_no'));
                    $this -> event -> update($insert_data, $condition);

                    locationReload('parent');

                } else if ($request_type == "add") {
                    $config['upload_path'] = './uploads/event/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $this -> load -> library('upload', $config);

                    if (!$this -> upload -> do_upload('event_file')) {
                        $error = array('error' => $this -> upload -> display_errors());
                        echo var_dump($error);

                    } else {
                        $upload_file_data = $this -> upload -> data();
                        $insert_data['event_file_name'] = $upload_file_data['file_name'];
                    }

                    $insert_data['event_title'] = $this -> input -> post('event_title');
                    $insert_data['event_content'] = $this -> input -> post('event_content');

                    $insert_data['open_direct'] = $this -> input -> post('open_direct') == FALSE ? 'N' : $this -> input -> post('open_direct');
                    $insert_data['event_status'] = $insert_data['open_direct'];
                    $insert_data['event_status_string'] = $insert_data['event_status'] == "Y" ? "OPEN" : "NOT OPEN";

                    $insert_data['start_date'] = string_to_time($this -> input -> post('start_date'));
                    $insert_data['end_date'] = string_to_time($this -> input -> post('end_date'));
                    $insert_data['reg_date'] = time();

                    $this -> event -> insert($insert_data);
                    locationReload('parent');
                } else if ($request_type == 'delete') {
                    $condition[WHERE_CONDITION] = array('event_no' => $request_no);
                    $this -> event -> delete($condition);
                    locationReload('parent');
                }
            }else if ($request_form == "game_banner"){
                /*
                 * Game Banner upload 
                 */
                if ($request_type =="add"){
                    $this -> load -> model('admin/affiliate_banner');
                    $config['upload_path'] = "./uploads/affiliate_banners/";
                    $config['allowed_types'] = 'jpg|gif|png';
                    $this -> load -> library('upload', $config); 
                    
                    if (!$this -> upload -> do_upload('banner_file')) {
                        $error = array('error' => $this -> upload -> display_errors());
                        alert_only($this -> upload -> display_errors());
                        exit;
                    } else {
                        
                        $upload_file_data = $this -> upload -> data();
                        
                        $insert_banner_data['banner_title'] = $this -> input -> post('banner_title',TRUE);
                        $insert_banner_data['banner_des'] = $this -> input -> post('banner_des',TRUE);
                        $insert_banner_data['file_name'] = $upload_file_data['file_name'];
                        $insert_banner_data['file_path'] = $upload_file_data['file_name'];
                        $insert_banner_data['file_size'] = $upload_file_data['file_size'];
                        $insert_banner_data['image_type'] = $upload_file_data['image_type'];
                        $insert_banner_data['image_width'] = $upload_file_data['image_width'];
                        $insert_banner_data['image_height'] = $upload_file_data['image_height'];
                        $insert_banner_data['image_size_str'] = $upload_file_data['image_size_str'];
                        $insert_banner_data['use_status'] = BANNER_USE_STATUS_ENABLE;
                        $insert_banner_data['reg_date'] = time();
                        $this -> affiliate_banner -> insert($insert_banner_data);
                        locationReload('parent');
                    }      
                }   
            }
        } else {
            $data = array();
            $data['request_type'] = $request_type;

            if ($request_form == "manager") {
                $request_no = (int)$request_no;
                $this -> load -> model('admin/admin_level');
                $this -> load -> model('admin/admin');

                $data['admin_levels'] = $this -> admin_level -> advanced_search_result();

                if ($request_type == "modify") {
                    $condition[WHERE_CONDITION] = array('admin_no' => $request_no);
                    $data['admin'] = $this -> admin -> advanced_search_row($condition);

                } else if ($request_type == "add") {
                    
                } else if ($request_type == "delete") {
                    $condition[WHERE_CONDITION] = array('admin_no' => $request_no);
                    $this -> admin -> delete($condition);
                    locationHref(site_url('admin/settings/manager_setting'));
                    exit ;
                }

            } else if ($request_form == "game") {
                if ($request_type == "add") {
                    $this -> load -> model('admin/vender');
                    $this -> load -> model('admin/game_category1');
                    $data['venders'] = $this -> vender -> advanced_search_result();
                    $data['game_category1s'] = $this -> game_category1 -> advanced_search_result();
                
                } else if ($request_type == "delete") {
                    $this -> load -> model("admin/game");
                    $request_no = (int)$request_no;
                    $condition[WHERE_CONDITION] = array('game_no' => $request_no);
                    $this -> game -> delete($condition);

                    $rVen = $this -> input ->get('ret_ven'); 
                    $rCate = $this -> input ->get('ret_cate'); 
                    redirect("admin/settings/game_list/{$rVen}/{$rCate}");
                    exit;
                }

            } else if ($request_form == "event") {
                $this -> load -> model('admin/event');
                $this -> load -> helper('asset');

                if ($request_type == "modify") {
                    $condition[WHERE_CONDITION] = array('event_no' => $request_no);
                    $data['event'] = $this -> event -> advanced_search_row($condition);

                } else if ($request_type == "add") {

                } else if ($request_type == "delete") {
                    $request_no = (int)$request_no;
                    $condition[WHERE_CONDITION] = array('event_no' => $request_no);
                    $this -> event -> delete($condition);
                    locationHref(site_url('admin/settings/event'));
                    exit ;

                }
            } else if ($request_form =="game_banner"){
                if ($request_type == "add") {

                }
                
            }
            $this -> load -> view("admin/settings/form/{$request_form}_form", $data);
        }
    }
    
     public function affiliate_banner(){
        $this -> load -> model('admin/affiliate_banner');
        $this -> load -> helper('asset');
        $data['rows'] = $this -> affiliate_banner -> advanced_search_result();
        $this -> load -> view('admin/settings/affiliate_banner', $data);
    }
     
    public function banner_action(){
        log_message('error', print_r($this -> input -> post(), TRUE));
        $this -> load -> model('admin/affiliate_banner');
        $mode = $this -> input -> post('mode', TRUE);
        $affiliate_banner_no = $this -> input -> post('req', TRUE);
        
        $data = array();
        $condition[WHERE_CONDITION]= array(
            'affiliate_banner_no' => $affiliate_banner_no 
        );
        
        if ($mode == 'modify'){
            
        }else if($mode == "delete"){
            $this -> affiliate_banner -> delete($condition);
            $data['result'] ="success";
            echo json_encode($data);
            exit;    
        }else if ($mode == 'status'){
            $target_status = $this -> input -> post('status', TRUE);
            $update_arr = array(
                'use_status' => $target_status
            );
            
            $this -> affiliate_banner -> update($update_arr,$condition);
            $data['result'] ="success";
            echo json_encode($data);
            exit;    
        }
    }
}
