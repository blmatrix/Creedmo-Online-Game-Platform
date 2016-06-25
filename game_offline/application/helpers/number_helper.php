<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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
