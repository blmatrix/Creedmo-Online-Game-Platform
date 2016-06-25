<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 *  Genergate The link for launching the game by given paramter
 */

function generate_click_event($vender,$game_code,$game_type,$sessionId){
     $t1 = "You need to be logged in";
     if (empty($sessionId)){
         $str = "openWindowAlert('You need to be logged on the site')";
     }else {
         if ($vender == VENDER_MG){
             $str ="launchGame('mg','$game_code','$game_type','$sessionId',0)"; 
         }else {
             $str ="launchGame('pt','$game_code','$game_type','$sessionId',0)"; 
         }
     }
     return $str;    
 }

