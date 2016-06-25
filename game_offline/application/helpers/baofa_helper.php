<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function echoSelectedClassIfRequestMatches($requestUri) {
    $current_file_name = basename($_SERVER['REQUEST_URI']);
    if ($current_file_name == $requestUri) {
        return "nav-active";
    }
}

function selectedMatchArray($arr) {
    $current_file_name = basename($_SERVER['REQUEST_URI']);
    if (in_array($current_file_name, $arr)) {
        echo "nav-expanded nav-active";
    }

    if (is_numeric($current_file_name)) {

    }
}

function nullOrEmptyDefault($string, $default = "") {
    if ($string == NULL || $string == '') {
        return $default;
    } else {
        return $string;
    }
}

function cmp($a, $b) {
    if ($a['reg_date'] == $b['reg_date']) {
        return 0;
    }
    return ($a['reg_date'] < $b['reg_date']) ? -1 : 1;
}

//인자로 주어진 배열에서 인덱스에 대한 값이 없는 것을 필터링
function getVailidValueArray($var) {
    if ($var) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function get_query_string($vpage, $arr) {
    $query_string = '';
    if (!array_key_exists('vpage', $arr)) {
        $arr['vpage'] = $vpage;
    }
    foreach ($arr as $key => $value) {
        $query_string .= "$key=$val&";
    }
    return $query_string;
}

define("SET_VALUE_IF_GREATER", "1");
define("SET_VALUE_IF_LESS", "0");
define("SET_VALUE_IF_EQUAL", "-1");

function setValueIf($source_value, $option_value, $ret_value, $option = "1") {
    $ret = "";
    switch($option) {
        case SET_VALUE_IF_GREATER :
            if ($source_value > $option_value) {
                $ret = $ret_value;
            } else {
                $ret = $source_value;
            }
            break;
        case SET_VALUE_IF_LESS :
            if ($source_value < $option_value) {
                $ret = $ret_value;
            } else {
                $ret = $source_value;
            }
            break;
        case SET_VALUE_IF_EQUAL :
            if ($source_value == $option_value) {
                $ret = $ret_value;
            } else {
                $ret = $source_value;
            }
            break;
    }
    return $ret;
}

/*
 * 콤마가 포함된 문자열 숫자에서 콤마를 제거한 후 숫자 반환
 * int 형으로 캐스팅한 후 반환하기 때문에 콤마를 제거한 숫자 문자열이 int 형 범위를 넘어갈 경우 버퍼오버플러우 발생
 *
 * */
function get_number($str) {
    $str = trim($str);
    if (strpos($str, ",") !== FALSE) {
        return (int)trim(str_replace(",", "", $str));
    } else {
        return (int)$str;
    }
}

/*
 * 콤마가 포함된 문자열 숫자에서 콤마를 제거만 한 문자열을 반환
 * */
function get_number_string($str) {
    return preg_replace("/[^0-9]/", "", $str);
}

/*
 * 콤마가 포함된 문자열 숫자에서 콤마를 제거만 한 문자열을 반환
 * */
function get_number_int($str) {
    return (int)preg_replace("/[^0-9]/", "", $str);
}

function greater_than_or_equal($limit) {
    if ($limit >= CONVERT_COMP_MIN_LIMIT) {
        return TRUE;
    } else {
        $this -> form_validation -> set_message('greater_than_or_equal', "The %s field must be greater than or equal " . CONVERT_COMP_MIN_LIMIT);
        return FALSE;
    }
}

?>