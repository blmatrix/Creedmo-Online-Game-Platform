<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

/*세션 체크를 위한 훅킹 
* post_controller_constructor는 해당 컨트롤러의 생성자가 호출된 후, 다른 메서드가 호출되기 전에 
* 가장 먼저 호출된다.(컨트롤러 호출이 완료된 후에 호출되는 것이 아님을 주의);
*/
$hook['post_controller_constructor'][] = array(
    'class'    => 'SessionInitializer',
    'function' => 'initialize',
    'filename' => 'SessionInitializer.php',
    'filepath' => 'hooks',
    );
              
//다국어 지원을 위한 언어파일 자동 로딩 훅킹 
$hook['post_controller_constructor'][] = array(
    'class' => 'LanguageInitializer',
    'function' => 'initialize',
    'filename' => 'LanguageInitializer.php',
    'filepath' => 'hooks'
);

//제휴 코드와 관련한 a_code 쿠기 hook
$hook['post_controller_constructor'][] = array(
    'class' => 'CookieInitializer',
    'function' => 'initialize',
    'filename' => 'CookieInitializer.php',
    'filepath' => 'hooks'
);  

//제휴 코드와 관련한 a_code 쿠기 hook
$hook['post_controller_constructor'][] = array(
    'class' => 'LoggingInitializer',
    'function' => 'initialize',
    'filename' => 'LoggingInitializer.php',
    'filepath' => 'hooks'
);                            