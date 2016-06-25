<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function time_to_string($time){
    if (empty($time)) return '-';
    return date('Y-m-d H:i:s', $time);
}

function string_to_time($time_string){
    return strtotime($time_string);
}
