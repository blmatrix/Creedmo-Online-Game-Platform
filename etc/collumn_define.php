<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
* ADMIN Table
*/
define('ADMIN','admin');
define('ADMIN_ADMIN_NO','admin_no');
define('ADMIN_ADMIN_LEVEL_NO','admin_level_no');
define('ADMIN_ADMIN_PASS','admin_pass');
define('ADMIN_ADMIN_ID','admin_id');
define('ADMIN_LOGIN_STATUS','login_status');
define('ADMIN_ADMIN_STATUS','admin_status');
define('ADMIN_ADMIN_NAME','admin_name');
define('ADMIN_ADMIN_PHONE','admin_phone');
define('ADMIN_REG_DATE','reg_date');

/*
* ADMIN_ACTION_LOG Table
*/
define('ADMIN_ACTION_LOG','admin_action_log');
define('ADMIN_ACTION_LOG_ADMIN_ACTION_LOG_NO','admin_action_log_no');
define('ADMIN_ACTION_LOG_ADMIN_NO','admin_no');
define('ADMIN_ACTION_LOG_ACTION_TYPE','action_type');
define('ADMIN_ACTION_LOG_ACTION_DESC','action_desc');
define('ADMIN_ACTION_LOG_ACTIOIN_IP','actioin_ip');
define('ADMIN_ACTION_LOG_TIMESPAN','timespan');
define('ADMIN_ACTION_LOG_REG_DATE','reg_date');

/*
* ADMIN_LEVEL Table
*/
define('ADMIN_LEVEL','admin_level');
define('ADMIN_LEVEL_ADMIN_LEVEL_NO','admin_level_no');
define('ADMIN_LEVEL_ADMIN_LEVEL_CODE','admin_level_code');
define('ADMIN_LEVEL_ADMIN_LEVEL_CODE_NAME','admin_level_code_name');
define('ADMIN_LEVEL_ADMIN_LEVEL_DESC','admin_level_desc');
define('ADMIN_LEVEL_REG_DATE','reg_date');

/*
* AFFILIATE_AGENT Table
*/
define('AFFILIATE_AGENT','affiliate_agent');
define('AFFILIATE_AGENT_AFFILIATE_AGENT_NO','affiliate_agent_no');
define('AFFILIATE_AGENT_USER_NO','user_no');
define('AFFILIATE_AGENT_AFFILIATE_REF','affiliate_ref');
define('AFFILIATE_AGENT_AFFILIATE_CODE','affiliate_code');
define('AFFILIATE_AGENT_AFFILIATE_DES','affiliate_des');
define('AFFILIATE_AGENT_WITHDRAWAL_METHOD','withdrawal_method');
define('AFFILIATE_AGENT_DEPS1_COMMISTIOIN_POLICY_NO','deps1_commistioin_policy_no');
define('AFFILIATE_AGENT_DEPS2_COMMISTIOIN_POLICY_NO','deps2_commistioin_policy_no');
define('AFFILIATE_AGENT_DEPS1_CHILD_COUNT','deps1_child_count');
define('AFFILIATE_AGENT_DEPS2_CHILD_COUNT','deps2_child_count');
define('AFFILIATE_AGENT_REG_DATE','reg_date');

/*
* AFFILIATE_INFORMATION Table
*/
define('AFFILIATE_INFORMATION','affiliate_information');
define('AFFILIATE_INFORMATION_AFFILIATE_INFORMATION_NO','affiliate_information_no');
define('AFFILIATE_INFORMATION_CALL_FOR_PARTNER','call_for_partner');
define('AFFILIATE_INFORMATION_QQ_FOR_PARTNER','qq_for_partner');
define('AFFILIATE_INFORMATION_SKYPE_ID_FOR_PARTNER','skype_id_for_partner');
define('AFFILIATE_INFORMATION_EMAIL_FOR_PARTNER','email_for_partner');
define('AFFILIATE_INFORMATION_REG_DATE','reg_date');

/*
* AGENT_COMMISSION_RECORD Table
*/
define('AGENT_COMMISSION_RECORD','agent_commission_record');
define('AGENT_COMMISSION_RECORD_AGENT_COMMISSION_RECORD_NO','agent_commission_record_no');
define('AGENT_COMMISSION_RECORD_USER_NO','user_no');
define('AGENT_COMMISSION_RECORD_DEPS1_COMMSSION_POLICY_NO','deps1_commssion_policy_no');
define('AGENT_COMMISSION_RECORD_DEPS2_COMMSSION_POLICY_NO','deps2_commssion_policy_no');
define('AGENT_COMMISSION_RECORD_DEPS1_TOTAL_CHILD_COUNT','deps1_total_child_count');
define('AGENT_COMMISSION_RECORD_DEPS1_ACTIVE_CHILD_COUNT','deps1_active_child_count');
define('AGENT_COMMISSION_RECORD_DEPS1_TOTAL_COMMISSION','deps1_total_commission');
define('AGENT_COMMISSION_RECORD_DEPS2_TOTAL_CHILD_COUNT','deps2_total_child_count');
define('AGENT_COMMISSION_RECORD_DEPS2_ACTIVE_CHILD_COUNT','deps2_active_child_count');
define('AGENT_COMMISSION_RECORD_DEPS2_TOTAL_COMMISSION','deps2_total_commission');
define('AGENT_COMMISSION_RECORD_TOTAL_COMMISSION','total_commission');
define('AGENT_COMMISSION_RECORD_COMMISSION_MONTH','commission_month');
define('AGENT_COMMISSION_RECORD_COMMISSION_MONTH_STR','commission_month_str');
define('AGENT_COMMISSION_RECORD_STATUS','status');
define('AGENT_COMMISSION_RECORD_REG_DATE','reg_date');

/*
* AGENT_COMMISSION_RECORD_DETAIL Table
*/
define('AGENT_COMMISSION_RECORD_DETAIL','agent_commission_record_detail');
define('AGENT_COMMISSION_RECORD_DETAIL_AGENT_COMMISSION_RECORD_DETAIL_NO','agent_commission_record_detail_no');
define('AGENT_COMMISSION_RECORD_DETAIL_AGENT_COMMISSION_RECORD_NO','agent_commission_record_no');
define('AGENT_COMMISSION_RECORD_DETAIL_WRITE_OFF_AMOUNT','write_off_amount');
define('AGENT_COMMISSION_RECORD_DETAIL_PREV_BALANCE','prev_balance');
define('AGENT_COMMISSION_RECORD_DETAIL_CUR_BALANCE','cur_balance');
define('AGENT_COMMISSION_RECORD_DETAIL_ACT_ADMIN_NO','act_admin_no');
define('AGENT_COMMISSION_RECORD_DETAIL_REG_DATE','reg_date');

/*
* AGENT_SETTLEMENT Table
*/
define('AGENT_SETTLEMENT','agent_settlement');
define('AGENT_SETTLEMENT_AGENT_SETTLEMENT_NO','agent_settlement_no');
define('AGENT_SETTLEMENT_AGENT_NO','agent_no');
define('AGENT_SETTLEMENT_SETTLEMENT_METHOD','settlement_method');
define('AGENT_SETTLEMENT_SETTLEMENT_AMOUNT','settlement_amount');
define('AGENT_SETTLEMENT_SETTLEMENT_STATUS','settlement_status');
define('AGENT_SETTLEMENT_SETTLEMENT_MONTH','settlement_month');
define('AGENT_SETTLEMENT_BANK_ACCOUNT_NO','bank_account_no');
define('AGENT_SETTLEMENT_BANK_NAME','bank_name');
define('AGENT_SETTLEMENT_BANK_ACCOUNT','bank_account');
define('AGENT_SETTLEMENT_CONFIRM_DATE','confirm_date');
define('AGENT_SETTLEMENT_REG_DATE','reg_date');

/*
* AUTHORIZATION Table
*/
define('AUTHORIZATION','authorization');
define('AUTHORIZATION_AUTHORIZATION_NO','authorization_no');
define('AUTHORIZATION_AUTHORIZATION_NAME','authorization_name');
define('AUTHORIZATION_AUTHORIZATION_DESC','authorization_desc');
define('AUTHORIZATION_REG_DATE','reg_date');

/*
* BANK_ACCOUNT Table
*/
define('BANK_ACCOUNT','bank_account');
define('BANK_ACCOUNT_BANK_ACCOUNT_NO','bank_account_no');
define('BANK_ACCOUNT_USER_NO','user_no');
define('BANK_ACCOUNT_HOLDER','holder');
define('BANK_ACCOUNT_BANK_COUNTRY','bank_country');
define('BANK_ACCOUNT_BANK_NAME','bank_name');
define('BANK_ACCOUNT_BANK_BRANCH','bank_branch');
define('BANK_ACCOUNT_BANK_ACCOUNT','bank_account');
define('BANK_ACCOUNT_REG_DATE','reg_date');

/*
* CASINO_BASIC_POLICY Table
*/
define('CASINO_BASIC_POLICY','casino_basic_policy');
define('CASINO_BASIC_POLICY_CASINO_BASIC_POLICY_NO','casino_basic_policy_no');
define('CASINO_BASIC_POLICY_MIN_PER_DEPOSIT','min_per_deposit');
define('CASINO_BASIC_POLICY_MAX_PER_DEPOSIT','max_per_deposit');
define('CASINO_BASIC_POLICY_MIN_PER_WITHDRAWALS','min_per_withdrawals');
define('CASINO_BASIC_POLICY_MAX_PER_WITHDRAWALS','max_per_withdrawals');
define('CASINO_BASIC_POLICY_FIRST_DEPOSIT_EVENT','first_deposit_event');
define('CASINO_BASIC_POLICY_REG_DATE','reg_date');

/*
* CHATTING_LOG Table
*/
define('CHATTING_LOG','chatting_log');
define('CHATTING_LOG_CHATTING_LOG_NO','chatting_log_no');
define('CHATTING_LOG_CHANTTING_FROM','chantting_from');
define('CHATTING_LOG_CHATTING_TO','chatting_to');
define('CHATTING_LOG_REG_DATE','reg_date');

/*
* COMMISSIOIN_SETTLEMENT Table
*/
define('COMMISSIOIN_SETTLEMENT','commissioin_settlement');
define('COMMISSIOIN_SETTLEMENT_COMMISSIOIN_SETTLEMENT_NO','commissioin_settlement_no');
define('COMMISSIOIN_SETTLEMENT_AFFILIATE_NO','affiliate_no');
define('COMMISSIOIN_SETTLEMENT_DEPS1_COMMSSION_NO','deps1_commssion_no');
define('COMMISSIOIN_SETTLEMENT_DEPS2_COMMSSION_NO','deps2_commssion_no');
define('COMMISSIOIN_SETTLEMENT_DEPS1_TOTAL_USER_COUNT','deps1_total_user_count');
define('COMMISSIOIN_SETTLEMENT_DEPS1_ACTIVE_USER_COUNT','deps1_active_user_count');
define('COMMISSIOIN_SETTLEMENT_DEPS2_TOTAL_USER_COUNT','deps2_total_user_count');
define('COMMISSIOIN_SETTLEMENT_DEPS2_ACTIVE_USER_COUNT','deps2_active_user_count');
define('COMMISSIOIN_SETTLEMENT_DEPS1_COMMISSION_AMOUNT','deps1_commission_amount');
define('COMMISSIOIN_SETTLEMENT_DEPS2_COMMISSION_AMOUNT','deps2_commission_amount');
define('COMMISSIOIN_SETTLEMENT_SETTLEMENT_STATUS','settlement_status');
define('COMMISSIOIN_SETTLEMENT_REG_DATE','reg_date');

/*
* COMP_POINT_RECORD Table
*/
define('COMP_POINT_RECORD','comp_point_record');
define('COMP_POINT_RECORD_COMPOINT_RECORD_NO','compoint_record_no');
define('COMP_POINT_RECORD_USER_NO','user_no');
define('COMP_POINT_RECORD_BETTING_AMOUNT','betting_amount');
define('COMP_POINT_RECORD_ACC_COMP_POINT','acc_comp_point');
define('COMP_POINT_RECORD_TRANSFER_RATE','transfer_rate');
define('COMP_POINT_RECORD_REAL_TRANSFER_AMOUNT','real_transfer_amount');
define('COMP_POINT_RECORD_REG_DATE','reg_date');

/*
* COMP_POINT_TRANSFER Table
*/
define('COMP_POINT_TRANSFER','comp_point_transfer');
define('COMP_POINT_TRANSFER_COMP_POINT_TRANSFER_NO','comp_point_transfer_no');
define('COMP_POINT_TRANSFER_USER_NO','user_no');
define('COMP_POINT_TRANSFER_COMP_TO_TRANSFER','comp_to_transfer');
define('COMP_POINT_TRANSFER_TRANSFER_STATUS','transfer_status');
define('COMP_POINT_TRANSFER_TRANSFER_RATE','transfer_rate');
define('COMP_POINT_TRANSFER_MONEY_TO_TRANSFER','money_to_transfer');
define('COMP_POINT_TRANSFER_REG_DATE','reg_date');

/*
* COUNTRY Table
*/
define('COUNTRY','country');
define('COUNTRY_COUNTRY_NO','country_no');
define('COUNTRY_COUNTRY_CODE','country_code');
define('COUNTRY_COUNTRY_NAME','country_name');
define('COUNTRY_COUNTRY_IMAGE_PATH','country_image_path');
define('COUNTRY_REG_DATE','reg_date');

/*
* COUPON Table
*/
define('COUPON','coupon');
define('COUPON_COUPON_NO','coupon_no');
define('COUPON_COUPON_TYPE_NO','coupon_type_no');
define('COUPON_COUPON_UUID','coupon_uuid');
define('COUPON_USER_NO','user_no');
define('COUPON_COUPON_POINT','coupon_point');
define('COUPON_COUPON_USE_STATUS','coupon_use_status');
define('COUPON_PUBLISHER','publisher');
define('COUPON_AUTH_REQURIED','auth_requried');
define('COUPON_USE_DATE','use_date');
define('COUPON_REG_DATE','reg_date');

/*
* COUPON_TYPE Table
*/
define('COUPON_TYPE','coupon_type');
define('COUPON_TYPE_COUPON_TYPE_NO','coupon_type_no');
define('COUPON_TYPE_COUPON_TYPE_CODE','coupon_type_code');
define('COUPON_TYPE_COUPON_TYPE_NAME','coupon_type_name');
define('COUPON_TYPE_COUPON_DES_DES','coupon_des_des');
define('COUPON_TYPE_PUBLISHER','publisher');
define('COUPON_TYPE_IS_DISCRETION','is_discretion');
define('COUPON_TYPE_REG_DATE','reg_date');

/*
* CUSTOMER_SERVICE Table
*/
define('CUSTOMER_SERVICE','customer_service');
define('CUSTOMER_SERVICE_CUSTOMER_SERVICE_NO','customer_service_no');
define('CUSTOMER_SERVICE_CALL_CENTER_NUM1','call_center_num1');
define('CUSTOMER_SERVICE_CALL_CENTER_NUM2','call_center_num2');
define('CUSTOMER_SERVICE_SKYPE_ID','skype_id');
define('CUSTOMER_SERVICE_EMAIL','email');
define('CUSTOMER_SERVICE_QQ_CUSTOMER_SERVICE1','qq_customer_service1');
define('CUSTOMER_SERVICE_QQ_CUSTOMER_SERVICE2','qq_customer_service2');
define('CUSTOMER_SERVICE_GREETING_MESSAGE','greeting_message');
define('CUSTOMER_SERVICE_REG_DATE','reg_date');

/*
* DEPOSIT Table
*/
define('DEPOSIT','deposit');
define('DEPOSIT_DEPOSIT_NO','deposit_no');
define('DEPOSIT_USER_NO','user_no');
define('DEPOSIT_DEPOSIT_AMOUNT','deposit_amount');
define('DEPOSIT_DEPOSIT_BONUS','deposit_bonus');
define('DEPOSIT_DEPOSIT_TOTAL_AMOUNT','deposit_total_amount');
define('DEPOSIT_DEPOSIT_STATUS','deposit_status');
define('DEPOSIT_DEPOSIT_TYPE','deposit_type');
define('DEPOSIT_CONFIRM_DATE','confirm_date');
define('DEPOSIT_REG_DATE','reg_date');

/*
* DEPS1_COMMISSION_POLICY Table
*/
define('DEPS1_COMMISSION_POLICY','deps1_commission_policy');
define('DEPS1_COMMISSION_POLICY_DEPS1_COMMISSION_POLICY_NO','deps1_commission_policy_no');
define('DEPS1_COMMISSION_POLICY_COMMISSION_LEVEL','commission_level');
define('DEPS1_COMMISSION_POLICY_AMOUNT_RANGE1','amount_range1');
define('DEPS1_COMMISSION_POLICY_AMOUNT_RANGE2','amount_range2');
define('DEPS1_COMMISSION_POLICY_ACTIVATE_PLAYERS1_COUNT','activate_players1_count');
define('DEPS1_COMMISSION_POLICY_ACTIVATE_PLAYERS2_COUNT','activate_players2_count');
define('DEPS1_COMMISSION_POLICY_SLOT_PERCENTAGE','slot_percentage');
define('DEPS1_COMMISSION_POLICY_NON_SLOT_PERCENTAGE','non_slot_percentage');
define('DEPS1_COMMISSION_POLICY_LIVE_PERCENTAGE','live_percentage');
define('DEPS1_COMMISSION_POLICY_REG_DATE','reg_date');

/*
* DEPS2_COMMISSION_POLICY Table
*/
define('DEPS2_COMMISSION_POLICY','deps2_commission_policy');
define('DEPS2_COMMISSION_POLICY_DEPS2_COMMISSION_POLICY_NO','deps2_commission_policy_no');
define('DEPS2_COMMISSION_POLICY_COMMISSION_LEVEL','commission_level');
define('DEPS2_COMMISSION_POLICY_AMOUNT_RANGE1','amount_range1');
define('DEPS2_COMMISSION_POLICY_AMOUNT_RANGE2','amount_range2');
define('DEPS2_COMMISSION_POLICY_ACTIVATE_PLAYERS1_COUNT','activate_players1_count');
define('DEPS2_COMMISSION_POLICY_ACTIVATE_PLAYERS2_COUNT','activate_players2_count');
define('DEPS2_COMMISSION_POLICY_SLOT_PERCENTAGE','slot_percentage');
define('DEPS2_COMMISSION_POLICY_NON_SLOT_PERCENTAGE','non_slot_percentage');
define('DEPS2_COMMISSION_POLICY_LIVE_PERCENTAGE','live_percentage');
define('DEPS2_COMMISSION_POLICY_REG_DATE','reg_date');

/*
* EVENT Table
*/
define('EVENT','event');
define('EVENT_EVENT_NO','event_no');
define('EVENT_EVENT_TITLE','event_title');
define('EVENT_EVENT_CONTENT','event_content');
define('EVENT_OPEN_DIRECT','open_direct');
define('EVENT_EVENT_FILE_NAME','event_file_name');
define('EVENT_EVENT_STATUS_STRING','event_status_string');
define('EVENT_EVENT_STATUS','event_status');
define('EVENT_REG_DATE','reg_date');
define('EVENT_START_DATE','start_date');
define('EVENT_END_DATE','end_date');

/*
* GAME Table
*/
define('GAME','game');
define('GAME_GAME_NO','game_no');
define('GAME_VENDER_NO','vender_no');
define('GAME_GAME_CODE','game_code');
define('GAME_GAME_CATEGORY1_NO','game_category1_no');
define('GAME_GAME_CATEGORY2','game_category2');
define('GAME_GAME_CATEGORY3','game_category3');
define('GAME_GAME_SUB_CATEGORY','game_sub_category');
define('GAME_GAME_NAME_EN','game_name_en');
define('GAME_GAME_NAME_ZH','game_name_zh');
define('GAME_GAME_DESC_EN','game_desc_en');
define('GAME_GAME_DESC_ZH','game_desc_zh');
define('GAME_COUNT','count');
define('GAME_HTML5','html5');
define('GAME_GAME_STATUS','game_status');
define('GAME_SERVICE_STATUS','service_status');
define('GAME_GAME_IMAGE1','game_image1');
define('GAME_GAME_IMAGE2','game_image2');
define('GAME_REG_DATE','reg_date');
define('GAME_BRAND','brand');

/*
* GAME_CATEGORY1 Table
*/
define('GAME_CATEGORY1','game_category1');
define('GAME_CATEGORY1_GAME_CATEGORY1_NO','game_category1_no');
define('GAME_CATEGORY1_GAME_CATEGORY1_NAME','game_category1_name');
define('GAME_CATEGORY1_GAME_CATEGORY1_DESC','game_category1_desc');
define('GAME_CATEGORY1_CATEGORY_COMMISSION','category_commission');
define('GAME_CATEGORY1_REG_DATE','reg_date');

/*
* GAME_IMAGE Table
*/
define('GAME_IMAGE','game_image');
define('GAME_IMAGE_GAME_IMAGE_NO','game_image_no');
define('GAME_IMAGE_GAME_NO','game_no');
define('GAME_IMAGE_GAME_IMAGE_TYPE','game_image_type');
define('GAME_IMAGE_GAME_IMAGE_PATH','game_image_path');
define('GAME_IMAGE_REG_DATE','reg_date');

/*
* GAME_MONEY Table
*/
define('GAME_MONEY','game_money');
define('GAME_MONEY_GAME_MONEY_NO','game_money_no');
define('GAME_MONEY_USER_NO','user_no');
define('GAME_MONEY_VENDOR_NO','vendor_no');
define('GAME_MONEY_GAME_MONEY_AMOUNT','game_money_amount');
define('GAME_MONEY_REG_DATE','reg_date');
define('GAME_MONEY_UPDATE_DATE','update_date');

/*
* GAME_MONEY_TRANSFER Table
*/
define('GAME_MONEY_TRANSFER','game_money_transfer');
define('GAME_MONEY_TRANSFER_GAME_MONEY_TRANSFER_NO','game_money_transfer_no');
define('GAME_MONEY_TRANSFER_USER_NO','user_no');
define('GAME_MONEY_TRANSFER_VENDER_NO','vender_no');
define('GAME_MONEY_TRANSFER_MONEY_TRANSFER_TYPE','money_transfer_type');
define('GAME_MONEY_TRANSFER_FROM','from');
define('GAME_MONEY_TRANSFER_TO','to');
define('GAME_MONEY_TRANSFER_TRANSFER_AMOUNT','transfer_amount');
define('GAME_MONEY_TRANSFER_TRANSFER_STATUS','transfer_status');
define('GAME_MONEY_TRANSFER_WALLET_BALANCE_TRACKING','wallet_balance_tracking');
define('GAME_MONEY_TRANSFER_REG_DATE','reg_date');

/*
* GAME_MONEY_TRANSFER_DETAIL Table
*/
define('GAME_MONEY_TRANSFER_DETAIL','game_money_transfer_detail');
define('GAME_MONEY_TRANSFER_DETAIL_GAME_MONEY_TRANSFER_DETAIL_NO','game_money_transfer_detail_no');
define('GAME_MONEY_TRANSFER_DETAIL_GAME_MONEY_TRANSFER_NO','game_money_transfer_no');
define('GAME_MONEY_TRANSFER_DETAIL_USER_NO','user_no');
define('GAME_MONEY_TRANSFER_DETAIL_TRANSACTION_TYPE','transaction_type');
define('GAME_MONEY_TRANSFER_DETAIL_TRANSACTION_ID','transaction_id');
define('GAME_MONEY_TRANSFER_DETAIL_CREDIT_BALANCE','credit_balance');
define('GAME_MONEY_TRANSFER_DETAIL_TRANSACTION_AMOUNT','transaction_amount');
define('GAME_MONEY_TRANSFER_DETAIL_TRANSACTION_CREDIT_AMOUNT','transaction_credit_amount');
define('GAME_MONEY_TRANSFER_DETAIL_BALANCE','balance');
define('GAME_MONEY_TRANSFER_DETAIL_TRANSACTION_TIME','transaction_time');
define('GAME_MONEY_TRANSFER_DETAIL_FROM','from');
define('GAME_MONEY_TRANSFER_DETAIL_TO','to');
define('GAME_MONEY_TRANSFER_DETAIL_REG_DATE','reg_date');

/*
* GAME_PLAY Table
*/
define('GAME_PLAY','game_play');
define('GAME_PLAY_GAME_PLAY_NO','game_play_no');
define('GAME_PLAY_USER_NO','user_no');
define('GAME_PLAY_PLAYER_NAME','player_name');
define('GAME_PLAY_VENDER_CODE','vender_code');
define('GAME_PLAY_GAME_TYPE','game_type');
define('GAME_PLAY_GAME_NAME','game_name');
define('GAME_PLAY_PLAY_DATE_INT','play_date_int');
define('GAME_PLAY_PLAY_DATE_STR','play_date_str');
define('GAME_PLAY_GAME_PLAY_COUNT','game_play_count');
define('GAME_PLAY_BET_AMOUNT','bet_amount');
define('GAME_PLAY_WIN_AMOUNT','win_amount');
define('GAME_PLAY_INCOME_AMOUNT','income_amount');
define('GAME_PLAY_DISTRIBUTE_TYPE','distribute_type');
define('GAME_PLAY_DISTRIBUTE_RATE','distribute_rate');
define('GAME_PLAY_REG_DATE','reg_date');

/*
* LANGUAGE Table
*/
define('LANGUAGE','language');
define('LANGUAGE_LANGUAGE_NO','language_no');
define('LANGUAGE_LANGUAGE_CODE','language_code');
define('LANGUAGE_LANGUAGE_ENAME','language_ename');
define('LANGUAGE_LANGUAGE_FULL_ENAME','language_full_ename');
define('LANGUAGE_LANGUAGE_NAME','language_name');
define('LANGUAGE_LANGUAGE_FULL_NAME','language_full_name');
define('LANGUAGE_USE_STATUS','use_status');
define('LANGUAGE_LANGUAGE_IMAGE_PATH','language_image_path');
define('LANGUAGE_REG_DATE','reg_date');

/*
* MG_GAME_USER Table
*/
define('MG_GAME_USER','mg_game_user');
define('MG_GAME_USER_MG_GAME_USER_NO','mg_game_user_no');
define('MG_GAME_USER_USER_NO','user_no');
define('MG_GAME_USER_ACCOUNT_NAME','account_name');
define('MG_GAME_USER_ACCOUNT_NUMBER','account_number');
define('MG_GAME_USER_PIN_CODE','pin_code');
define('MG_GAME_USER_STATUS','status');
define('MG_GAME_USER_CURRENCY_ID','currency_id');
define('MG_GAME_USER_BETTING_PROFILE_ID','betting_profile_id');
define('MG_GAME_USER_IS_PROGRESSIVE','is_progressive');
define('MG_GAME_USER_CUSTOMER_ID','customer_id');
define('MG_GAME_USER_LOCK_ACCOUNT_STATUS','lock_account_status');
define('MG_GAME_USER_SUSPEND_ACCOUNT_STATUS','suspend_account_status');
define('MG_GAME_USER_CASINO_ID','casino_id');
define('MG_GAME_USER_NICK_NAME','nick_name');
define('MG_GAME_USER_REG_DATE','reg_date');

/*
* NOTICE_BOARD Table
*/
define('NOTICE_BOARD','notice_board');
define('NOTICE_BOARD_NOTICE_BOARD_NO','notice_board_no');
define('NOTICE_BOARD_NOTICE_CODE','notice_code');
define('NOTICE_BOARD_WRITER_ADMIN_NO','writer_admin_no');
define('NOTICE_BOARD_NOTICE_TITLE','notice_title');
define('NOTICE_BOARD_NOTICE_CONTENT','notice_content');
define('NOTICE_BOARD_NOTICE_STATUS','notice_status');
define('NOTICE_BOARD_ATTATCHMENT_PATH','attatchment_path');
define('NOTICE_BOARD_NOTICE_TYPE','notice_type');
define('NOTICE_BOARD_PUBLISH_END_TIME','publish_end_time');
define('NOTICE_BOARD_REG_DATE','reg_date');

/*
* NOTICE_CODE Table
*/
define('NOTICE_CODE','notice_code');
define('NOTICE_CODE_NOTICE_CODE_NO','notice_code_no');
define('NOTICE_CODE_NOTICE_CODE','notice_code');
define('NOTICE_CODE_NOTICE_CODE_NAME','notice_code_name');
define('NOTICE_CODE_NOTICE_COD_DESC','notice_cod_desc');
define('NOTICE_CODE_USE_STATUS','use_status');
define('NOTICE_CODE_REG_DATE','reg_date');

/*
* PT_GAME_USER Table
*/
define('PT_GAME_USER','pt_game_user');
define('PT_GAME_USER_IMG_PT_USER_NO','img_pt_user_no');
define('PT_GAME_USER_USER_NO','user_no');
define('PT_GAME_USER_PLAYER_NAME','player_name');
define('PT_GAME_USER_PASSWORD','password');
define('PT_GAME_USER_REG_DATE','reg_date');

/*
* USER Table
*/
define('USER','user');
define('USER_USER_NO','user_no');
define('USER_LANGUAGE_NO','language_no');
define('USER_COUNTRY_NO','country_no');
define('USER_USER_NICK','user_nick');
define('USER_USER_LEVEL_NO','user_level_no');
define('USER_USER_ID','user_id');
define('USER_USER_PASSWORD','user_password');
define('USER_USER_NAME','user_name');
define('USER_USER_EMAIL','user_email');
define('USER_USER_PHONE','user_phone');
define('USER_USER_TYPE','user_type');
define('USER_AFFILIATE_CODE','affiliate_code');
define('USER_AFFILIATE_REF','affiliate_ref');
define('USER_IS_AFFILIATE','is_affiliate');
define('USER_VIA_URL','via_url');
define('USER_JOIN_URL','join_url');
define('USER_USER_LOCALE','user_locale');
define('USER_LOGIN_STATUS','login_status');
define('USER_USER_GENDER','user_gender');
define('USER_USER_STATUS','user_status');
define('USER_DEPS1_CHILD_COUNT','deps1_child_count');
define('USER_DEPS2_CHILD_COUNT','deps2_child_count');
define('USER_IM_TYPE','im_type');
define('USER_IM_ID','im_id');
define('USER_CITY','city');
define('USER_USER_DES','user_des');
define('USER_AFFILIATE_DES','affiliate_des');
define('USER_LFT','lft');
define('USER_RGT','rgt');
define('USER_MG_ID','mg_id');
define('USER_MG_GAME_STATUS','mg_game_status');
define('USER_PT_ID','pt_id');
define('USER_PT_GAME_STATUS','pt_game_status');
define('USER_FIRST_DEPOSIT','first_deposit');
define('USER_JOIN_IP','join_ip');
define('USER_JOIN_DATE','join_date');
define('USER_REG_DATE','reg_date');
define('USER_CONFIRM_DATE','confirm_date');

/*
* USER_LEVEL Table
*/
define('USER_LEVEL','user_level');
define('USER_LEVEL_USER_LEVEL_NO','user_level_no');
define('USER_LEVEL_USER_LEVEL_CODE','user_level_code');
define('USER_LEVEL_USER_LEVEL_CODE_NAME','user_level_code_name');
define('USER_LEVEL_PROMOTION_LEVEL_POINT','promotion_level_point');
define('USER_LEVEL_CONVERSION_1CNY_RATE','conversion_1cny_rate');
define('USER_LEVEL_PROMOTION_BONUS','promotion_bonus');
define('USER_LEVEL_DEPOSIT_BONUS_RATE','deposit_bonus_rate');
define('USER_LEVEL_REG_DATE','reg_date');

/*
* USER_NOTICE Table
*/
define('USER_NOTICE','user_notice');
define('USER_NOTICE_USER_NOTICE_NO','user_notice_no');
define('USER_NOTICE_USER_NO','user_no');
define('USER_NOTICE_USER_NOTICE_CONTENT','user_notice_content');
define('USER_NOTICE_REG_DATE','reg_date');

/*
* USER_TRACK Table
*/
define('USER_TRACK','user_track');
define('USER_TRACK_USER_TRACK_NO','user_track_no');
define('USER_TRACK_USER_NO','user_no');
define('USER_TRACK_USER_IP','user_ip');
define('USER_TRACK_PLATFORM','platform');
define('USER_TRACK_BROWSER','browser');
define('USER_TRACK_REG_DATE','reg_date');

/*
* VENDER Table
*/
define('VENDER','vender');
define('VENDER_VENDER_NO','vender_no');
define('VENDER_VENDER_CODE','vender_code');
define('VENDER_VENDER_NAME','vender_name');
define('VENDER_GAME_REMOTE_URL','game_remote_url');
define('VENDER_VENDOR_COMMISSION','vendor_commission');
define('VENDER_REG_DATE','reg_date');

/*
* WALLET Table
*/
define('WALLET','wallet');
define('WALLET_WALLET_NO','wallet_no');
define('WALLET_USER_NO','user_no');
define('WALLET_WALLET_BALANCE','wallet_balance');
define('WALLET_COMP_POINT','comp_point');
define('WALLET_TOTAL_DEPOSIT_AMOUNT','total_deposit_amount');
define('WALLET_TOTAL_WITHDRAW_AMOUNT','total_withdraw_amount');
define('WALLET_AVERAGE','average');
define('WALLET_MG_CASINO_BALANCE','mg_casino_balance');
define('WALLET_PT_CASINO_BALANCE','pt_casino_balance');
define('WALLET_AGENT_SETTLEMENT_BALANCE','agent_settlement_balance');
define('WALLET_REG_DATE','reg_date');

/*
* WITHDRAW Table
*/
define('WITHDRAW','withdraw');
define('WITHDRAW_WITHDRAW_NO','withdraw_no');
define('WITHDRAW_USER_NO','user_no');
define('WITHDRAW_BANK_ACCOUNT_NO','bank_account_no');
define('WITHDRAW_WITHDRAW_AMOUNT','withdraw_amount');
define('WITHDRAW_WITHDRAW_STATUS','withdraw_status');
define('WITHDRAW_CONFIRM_DATE','confirm_date');
define('WITHDRAW_WITHDRAW_METHOD','withdraw_method');
define('WITHDRAW_REG_DATE','reg_date');

