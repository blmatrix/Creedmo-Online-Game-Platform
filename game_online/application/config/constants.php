<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 |--------------------------------------------------------------------------
 WHERE_CONDITION| File and Directory Modes
 |--------------------------------------------------------------------------
 |
 | These prefs are used when checking and setting modes when working
 | with the file system.  The defaults are fine on servers with proper
 | security, but you may wish (or even need) to change the values in
 | certain environments (Apache running a separate process for each
 | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
 | always be used to set the mode correctly.
 |
 */
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);

/*
 |--------------------------------------------------------------------------
 | File Stream Modes
 |--------------------------------------------------------------------------
 |
 | These modes are used when working with fopen()/popen()
 */

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb');
// truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b');
// truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

define('DS', DIRECTORY_SEPARATOR);
/*
 |--------------------------------------------------------------------------
 | Display Debug backtrace
 |--------------------------------------------------------------------------
 |
 | If set to TRUE, a backtrace will be displayed along with php errors. If
 | error_reporting is disabled, the backtrace will not display, regardless
 | of this setting
 |
 */
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
 |--------------------------------------------------------------------------
 | Exit Status Codes
 |--------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
define('EXIT_SUCCESS', 0);
// no errors
define('EXIT_ERROR', 1);
// generic error
define('EXIT_CONFIG', 3);
// configuration error
define('EXIT_UNKNOWN_FILE', 4);
// file not found
define('EXIT_UNKNOWN_CLASS', 5);
// unknown class
define('EXIT_UNKNOWN_METHOD', 6);
// unknown class member
define('EXIT_USER_INPUT', 7);
// invalid user input
define('EXIT_DATABASE', 8);
// database error
define('EXIT__AUTO_MIN', 9);
// lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125);
// highest automatically-assigned error code

/*
 |--------------------------------------------------------------------------
 | Creedmo Application constants;
 |--------------------------------------------------------------------------
 */
//User Level
define('BRONZE', '1');
define('BRONZE_STRING', 'Bronze');

define('SILVER', '2');
define('SIVER_STRING', 'Silver');

define('GOLD', '3');
define('GOLD_STRING', 'Gold');

define('PLATINUM', '4');
define('PLATINUM_STRING', 'Platinum');

//language use status
define("LANGUAGE_USE", 'Y');
define("LANGUAGE_NOT_USE", 'N');

//user Type
define('USER_TYPE_COMMON', '1');
define('USER_TYPE_AFFILATE', '2');

define('VENDER_PT', '1');
define('VENDER_MG', '2');

define('TRANSFER_STATUS_WAITING', '1');
define('TRANSFER_STATUS_COMPLETED', '2');
define('TRANSFER_STATUS_ERROR', '3');

//UserStatuc
//회원 가입 인증 상태 코드 상수
define('USER_STATUS_BEFORE_AUTH', '1');
define('USER_STATUS_COMPLETED_AUTH', '2');
define('USER_STATUS_LOCKED', '3');
define('USER_STATUS_UNLOCKED', '4');
define('USER_STATUS_WITHDRAWA', '5'); //회원 탈퇴 

//Money transfer type
define('MONEY_TRANSFER_TYPE_MG_TO_WALLET', '1');
define('MONEY_TRANSFER_TYPE_PT_TO_WALLET', '2');
define('MONEY_TRANSFER_TYPE_WALLET_TO_MG', '3');
define('MONEY_TRANSFER_TYPE_WALLET_TO_PT', '4');

//Money transfer status
define('MONEY_TRANSFER_STATUS_BEING', '1');
define('MONEY_TRANSFER_STATUS_COMPLETED', '2');

//withdraw status
define('WITHDRAW_STATUS_NOT_CHECKED', '1');
define('WITHDRAW_STATUS_BEFORE_CONFIRM', '2');
define('WITHDRAW_STATUS_CONFIRMED', '3');
define('WITHDRAW_STATUS_CANCLED', '4');
define('WITHDRAW_STATUS_CANCLED_BY_ADMIN', '5');

//deposit status
define('DEPOSIT_STATUS_NOT_CHECKED', '1');
define('DEPOSIT_STATUS_BEFORE_CONFIRM', '2');
define('DEPOSIT_STATUS_CONFIRMED', '3');
define('DEPOSIT_STATUS_CANCLED', '4');
define('DEPOSIT_STATUS_CANCLED_BY_ADMIN', '5');

define('DEPOSIT_TYPE_BANKING', '1');
// 통장 입금만 현재 제공

//admin type
define('ADMIN_TYPE_ADMIN', '1');
define('ADMIN_TYPE_SUPERVISOR', '2');
define('ADMIN_TYPE_OPERATOR', '3');
define('ADMIN_TYPE_OBSERVER', '4');

//commission info per Affiliage deps
define('AFFILATTE_COMMISSION_1DEPS', '1');
// affiliateion_commistion_1 deps info
define('AFFILATTE_COMMISSION_2DEPS', '2');
// affiliateion_commistion_2 deps info

define('IS_AFFILATTE_Y', 'Y');
// affiliateion_commistion_2 deps info
define('IS_AFFILATTE_N', 'N');
// affiliateion_commistion_2 deps info

//game image type
define('IMAGE_TYPE_ORIGINAL', '1');
define('IMAGE_TYPE_THUMBNAIL', '2');

define('LOGIN_STAUS_OK', 'Y');
define('LOGIN_STAUS_NOT', 'N');

//자바스크립트, 정적 이미지, css 등의 경로를 위한 상수
define('ASSET_PATH', 'assets/');

//다국어 language
define('SESSION_KEY_LANG_CODE','lang_code');
define('SESSION_KEY_LANG_NAME','lang_name');
define('SESSION_KEY_A_CODE','a_code');
define('LANGUAGE_ENGLISH', 'english');
define('LANGUAGE_CHINA', 'china');
define('LANGUAGE_FRENCH', 'french');

define('LANGUAGE_RESOURCE_NAME', 'message');

//-------------------------------------------------------------------------------------------------------------------------------
// 세션 관련 상수
//-------------------------------------------------------------------------------------------------------------------------------

//관리자 로그인 세션 변수
define('ADMIN_SESSION', 'admin_session');

//유저 로그인 세션 변수
define('USER_SESSION', 'user_session');
//게임 로그인 세션 변수
define('GAME_SESSION', 'game_session');

//게임 로그인 세션 변수
define('MG_SESSION', 'mg_session');
define('PT_SESSION', 'pt_session');

//게임 세션 인덱스
define('NO', 'no');       // 사용자 번호
define('ID', 'id');      // 사용자 아이디
define('NAME', 'name');   // 사용자 이름
define('LEVEL', 'level');  // 레벨
define('PASSWORD', 'password');  // 사용자 비밀번호
define('SESSION_GUID', 'sessionguid');  // 사용자 세션 아이디 
// MG 게임에서는 반드시 요구되나 PT 게임에서는 아님
define('IP', 'ip');
define('LOGIN_STATUS', 'status');
// 해당 게임에 로그인되어 있는 지 벼우 Y : 로그인 N : 로그인 안됨
define('LOGIN_TIME', 'LOGIN_time');
define('LANG','lang');

define('LANG_ENG','english');
define('LANG_CHI','china');
/*
 * 기본 세션 정보외에 별도의 정보를 저장할 필요가 있을 경우의 인덱스
 * 관리자 세션 및 유저 세션, 게임세션에 공통적으로 적용됨
 * 오브젝트, 배열 등의 객체를 저장함.
 */
define('SESS_DATA', 'sess_data');

//-------------------------------------------------------------------------------------------------------------------------------

//Coupon category table contants
define('SYSTEM_COUPON_CODE', '1');
define('ADMIN_COUPON_CODE', '2');
define('USER_COUPON_CODE', '1');

// 쿼리 검색을 위한 statement 상수
define('SELECT_CONDITION', 'select_condition');
define('WHERE_CONDITION', 'where_condition');
define('WHERE_IN_CONDITION', 'where_in_condition');
define('WHERE_IN_COLUMN', 'where_in_column');
define('WHERE_IN_DATAS', 'where_in_datas');

define('LIKE_CONDITION', 'like_condition');
define('ORDER_BY_CONDITION', 'order_by_conditon');

define('DATE_CONDITION', 'date_condition');
define('DATE_CONDITION_COLUMN', 'date_condition_column');

define("JOIN_CONDITION", 'join_condition');
define("JOIN_CONDITION_TABLE", 'join_condition_TABLE');
define("JOIN_CONDITION_STATE", 'join_condition_state');
define("JOIN_CONDITION_DIRECT", 'JOIN_CONDITION_DIRECT');

define('GROUP_BY_CONDITION', 'group_by_condition');

define('START_TIME', 'start_time');
define('END_TIME', 'end_time');
define('LIMIT_CONDITION', 'limt_condition');
define('LIMIT', 'limit');
define('OFFSET', 'offset');

//로그인 여부
define("LOGIN_STATUS_Y", 'Y');
// 로그인
define("LOGIN_STATUS_N", 'N');
// 로그아웃

define('MOBILE_SUPPORT',"1");
define('MOBILE_NOT_SUPPORT',"2");

define('AGREE_ADULT_Y',"Y");
define('AGREE_ADULT_N',"N");

//인증 여부
define("ADMIN_AUTH_WAITING", '1');
// 안중 대기중
define("ADMIN_AUTH_COMPLETE", '2');
// 인증 완료
define("ADMIN_AUTH_LOCKED", '3');
// 블럭
define("ADMIN_AUTH_UNLOCKED", '4');
// 블럭 해제HTL

define("HTML_SUPPORT_OK", '1');
define("HTML_SUPPORT_NOT", '2');

define("NEW_GAME", '1');
define("OLD_GAME", '2');

define("GAME_SERVICE_STATUS_OFF", '1');
define("GAME_SERVICE_STATUS_ON", '2');

define("PLAYTECK_GAME", '1');
define("MIRCO_GAME", '2');

// 엑셀 일괄 게임 업로드시 엑셀의 각 컬럼이름과 컬럼의 상수 정의
define('EXCEL_GAME_CATEGORY1_NO_INDEX', 0);
define('EXCEL_GAME_CATEGORY2_INDEX', 1);
define('EXCEL_GAME_CATEGORY3_INDEX', 2);
define('EXCEL_GAME_SUB_CATEGORY_INDEX', 3);
define('EXCEL_GAME_NAME_INDEX', 4);
define('EXCEL_GAME_IMAGE_FILE_NAME1_INDEX', 5);
define('EXCEL_GAME_IMAGE_FILE_NAME2_INDEX', 6);
define('EXCEL_GAME_CODE_INDEX', 7);
define('EXCEL_GAME_HTML_INDEX', 8);
define('EXCEL_SERVICE_STATUS_INDEX', 9);
define('EXCEL_BRAND_INDEX', 10);

define('COUPON_TYPE_SYSTEM', "SC");
define('COUPON_TYPE_POINT', "PC");
define('COUPON_TYPE_LEVEL', "LC");
define('COUPON_TYPE_USER', "UC");
define('COUPON_TYPE_SERVICE', "SC");
define('COUPON_TYPE_VIP', "VC");
define('COUPON_TYPE_EVENT', "UC");

// ** 쿠폰 관련 상수 ---------------------------------------------------------------
define('COUPON_USE_STATUS_USED', "1");
define('COUPON_USE_STATUS_NOT_USED', "2");
define('COUPON_USE_STATUS_CANCEL_BY_ADMIN', "3");

define('COUPON_PUBLISHER_SYSTEM', "system");
define('COUPON_PUBLISHER_ADMIN', "admin");

//쿠폰 생성 주체 여부
define('COUPON_CAN_DISCRETION', 'Y');
// 관리자가 생성할 수 있는 쿠폰
define('COUPON_NOT_DISCRETION', 'N');
// 관리자가 생성할 수 없는 쿠폰 ( 시스템에 의하여 자동으로 제공되는 쿠폰)

define('COUPON_AUTH_OK', 'Y');
// 관리자가 생성할 수 없는 쿠폰 ( 시스템에 의하여 자동으로 제공되는 쿠폰)
define('COUPON_AUTH_NOT', 'N');
// 관리자가 생성할 수 없는 쿠폰 ( 시스템에 의하여 자동으로 제공되는 쿠폰)
//-----------------------------------------------------------------------------------

define('FIRST_DEPOSIT_YES', 'Y');
define('FIRST_DEPOSIT_NO', 'N');

define('GENDER_MALE', 'M');
define('GENDER_FEMALE', 'F');

define("GAME_BRAND_Y", "Y");
define("GAME_BRAND_N", "N");

/* 제휴 코드 생성시 Prefix */
define('AFFILATE_CODE_PREFIX', 'TH');

/* 제휴 회원인지 여부*/
define('IS_AFFILATE_Y', 'Y');
// 제휴 회원
define('IS_AFFILATE_N', 'N');
// 제휴 회원 아님

define('SETTLEMENT_METHOD_WALLET', "1");
define('SETTLEMENT_METHOD_WIRE', "2");
define('WITHDRAW_METHOD_WALLET', "1");
define('WITHDRAW_METHOD_WIRE', "2");

define('SETTLEMENT_METHOD_WIRE_STRING', "Wire Transfer");
define('SETTLEMENT_METHOD_WALLET_STRING', "E-Wallet");
define('WITHDRAWMETHOD_WIRE_STRING', "Wire Transfer");
define('WITHDRAW_METHOD_WALLET_STRING', "E-Wallet");

//withdraw status
define('SETTLEMENT_STATUS_NOT_CHECKED', '1');
define('SETTLEMENT_STATUS_BEFORE_CONFIRM', '2');
define('SETTLEMENT_STATUS_CONFIRMED', '3');
define('SETTLEMENT_STATUS_CANCLED', '4');
define('SETTLEMENT_STATUS_CANCLED_BY_ADMIN', '5');


//comp convert status
define('CONVERT_COMP_STATUS_NOT_CHECKED', '1');
define('CONVERT_COMP_STATUS_BEFORE_CONFIRM', '2');
define('CONVERT_COMP_STATUS_CONFIRMED', '3');
define('CONVERT_COMP_STATUS_CANCLED', '4');
define('CONVERT_COMP_STATUS_CANCLED_BY_ADMIN', '5');


define('QUERY_SEARCH_TYPE_DAILY', "daily");
define('QUERY_SEARCH_TYPE_WEEKLY', "weekly");
define('QUERY_SEARCH_TYPE_MONTHLY', "monthly");
define('QUERY_SEARCH_TYPE_ANNUAL', "annual");

define('NOTICE_STATUS_NORMAL', '1');
// 게시물 상태 정상
define('NOTICE_STATUS_NOT_PUBLISH', '2');
// 게시물 게시 안함
define('NOTICE_STATUS_DELETE', '3');
// 게시물 삭제

define('NOTICE_TYPE_MANUAL', '1');
// 게시물 노출여부는 관리자가 설정
define('NOTICE_TYPE_AUTO', '2');
// 게시물 자동 게시 중지 (publish_end_time 값에 참조)

define('COMMISSION_PLUS', 'plus');
// 게시물 노출여부는 관리자가 설정
define('COMMISSION_MINUS', 'minus');
// 게시물 자동 게시 중지 (publish_end_time 값에 참조)

define('COMP_LIMIT', 100);
// 콤프포인트 지급 단위 100 위안당 1위안
/*
 *   End of application/config/constants.php
 */

define('_GAME_DISTRIBUTE_TYPE_', 
    var_export(
        array(
            "SLOTS" => array(
                '3 Reel Slot Games', '5 Reel Slot Games', 'Bonus Screen Slots', 'Progressive Slots', 'Progressive Games', /* MG Game */
                'Slot Machines', 'Progressive Slot Machines', 'Sidegames' /* PT Game */
                ), 
            "NON_SLOTS" => array(
                'BlackJack', 'Baccarat', 'Roulette', 'Table Games', 'Table Poker', 'Video Poker Games', 'Soft Game', 'Power Poker Games', /* MG Game */
                'Video Pokers', 'Mini games', 'Card Games', 'Scratchcards', 'Fixed Odds', 'Table Games', 'Keno', 'Progressive Video Pokers' /* PT Game */
                ), 
            "LIVE" => array(
                'Diamond LG Baccarat', 'Diamond LG Blackjack', 'Diamond LG Casino Holdem', 'Diamond LG Roulette', /* MG Game */
                'Live Games', 'VIP Live Games' /* PT Game */
                )
         ), TRUE)
  );

/* _GAME_DISTRIBUTE_TYPE_ 에 대한 Global Variable*/
$distribute_types = eval('return ' . _GAME_DISTRIBUTE_TYPE_ . ';');

define('_SUPPORTED_PHONE_CODES_', var_export(
    array( 'PHONE_CODES' => array('60','61','62','63','64','65','66','81','82','83','84','86','852','853','855','856','880','886'))
, TRUE));
$supported_phone_codes = eval('return ' . _SUPPORTED_PHONE_CODES_ . ';');

define('_SUPPORT_PHONE_CODE_AND_NAMES_',var_export(
    array(
       array('60','Malaysia'),
       array('61','Australia'),
       array('63','Philippines'),
       array('65','Singapore'),
       array('66','Thailand'),
       array('81','Japan'),
       array('82','Korea, Republic of'),
       array('84','China'),
       array('86','Hong Kong'),
    )
 ,TRUE));

$supported_phone_codes2 = eval('return ' ._SUPPORT_PHONE_CODE_AND_NAMES_. ';');
//18 이상 여부 상수
define("ADULT_YES","Y");
define("ADULT_NO","N");

define('SUCCESS', "999");
define('ERROR_NOT_EXISTED_ID', "not_existed_id");
define('ERROR_LOGIN_FAIL', "login_fail");
define('ERROR_WONG_PARAMETER', "wong_parameter");
define('ERROR_MG_GAME_CREATE', "error_mg_game_create");

define('ACCESS_TYPE_DESKTOP', 'DESKTOP');
define('ACCESS_TYPE_BROWSER', 'DESKTOP');

define('IM_TYPE_QQ', 'QQ');
define('IM_TYPE_SKYPE', 'Skype');
define('IM_TYPE_KAKAO', 'Kakao Talk');

define('BANNER_USE_STATUS_ENABLE', '1');
define('BANNER_USE_STATUS_DISABLE', '2');

define('GAME_LIST_TEMPLATE_SLOT', 'slot_list');
define('GAME_LIST_TEMPLATE_LIVE', 'live_list');

define('GAME_TYPE_SLOT', 'slot');
define('GAME_TYPE_LIVE', 'live');

define('GAME_CATEGORY_SLOT', '1');
define('GAME_CATEGORY_JACKPOTS', '2');
define('GAME_CATEGORY_CARD_TABLE', '3');
define('GAME_CATEGORY_VIDEO_POKER', '4');
define('GAME_CATEGORY_OTHERS', '5');
define('GAME_CATEGORY_LIVE', '6');

//공지를 읽었는지 여부 
define('COOKIE_READ_NOTICE_STATUS', 'notice_ad09123dgdsd');  // 공지를 읽었는지의 여부 
define('COOKIE_READ_NOTICE_NO', 'notice_no_ad09123dgdsd');  // 공지를 읽었을 때의 공지 번호 

//a_code 쿠키 소멸 기간
define('COOKIE_A_CODE_EXPIRED', '259200');  
define('COOKIE_NOTI_STATUS_EXPIRED', '259200');  

//게임사 회원 가입 처리 현황
define('GAME_JOIN_STATUS_SUCCESS','Y');
define('GAME_JOIN_STATUS_FAIL','N');

//최소 정산 요청 금액 제안
define('REQUEST_PAYMENT_MIN_LIMIT',100);

//게임타입별 콤프포인트 전환율 
define('CONVERT_COMP_RATE_SLOTS',100);  // 100 대 1 => 100 comp -> 1 CNY
define('CONVERT_COMP_RATE_NON_SLOTS',100);
define('CONVERT_COMP_RATE_LIVE',100);

define('CONVERT_COMP_MIN_LIMIT',100);


define('MG','mg');
define('PT','pt');

define('USER_TYPE_MEMBER', 1);
define('USER_TYPE_ADMIN', 2);
define('USER_TYPE_NOT_MEMBER', 3);

define('REQUEST_METHOD_GET',1);
define('REQUEST_METHOD_POST',2);

define('REQUEST_TYPE_COMMON',1);
define('REQUEST_TYPE_AJAX',2);







