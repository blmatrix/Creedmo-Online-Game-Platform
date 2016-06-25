<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//====================================================================================
//  메시지 출력 후 페이지 이동
//====================================================================================
function alert($msg = '이동합니다', $url = '') {
    echo "
        <script type='text/javascript'>
            alert('" . $msg . "');
            location.replace('" . $url . "');
        </script>
    ";
    exit ;
}


//====================================================================================
//  경고창 메시지마 출력
//====================================================================================
function alert_only($msg = '이동합니다') {
    echo "
        <script type='text/javascript'>
            alert('" . $msg . "');
        </script>
    ";
    
}

function parent_alert($msg) {
    echo "
        <script type='text/javascript'>
            alert('" . $msg . "');
            parent.location.reload();
        </script>
    ";
    exit ;
}


//====================================================================================
//  replace 를 이용하여 페이지 이동
//====================================================================================
function replace($url = '/') {
    echo "<script type='text/javascript'>";
    if ($url)
        echo "window.location.replace('" . $url . "');";
    echo "</script>";
    exit ;
}

//====================================================================================
//  function locationHref($location, $target = "") 자바스크립트 타겟 지정해서 페이지 이동
//====================================================================================
function locationHref($location = "", $target = "self") {
    $script = <<<EOF
            <SCRIPT type="text/javascript">
            <!--
                $target.document.location.href  =   "$location";
            //-->
            </SCRIPT>
EOF;
    echo $script;
}

//====================================================================================
//  function close() 자바스크립트 close()
//====================================================================================
function close($target = "self") {
    $script = <<<EOF
            <SCRIPT type="text/javascript">
            <!--
                $target.self.close();
            //-->
            </SCRIPT>
EOF;
    echo $script;
}

//====================================================================================
//  function locationReplace($location, $target = "") 자바스크립트 타겟 지정해서 페이지 이동
//====================================================================================
function locationReplace($location = "/", $target = "self") {
    $script = <<<EOF
            <SCRIPT type="text/javascript">
            <!--
                $target.document.location.replace("$location");
            //-->
            </SCRIPT>
EOF;
    echo $script;
}

//====================================================================================
//  function historyGo($no) 자바스크립트 history 페이지 이동
//====================================================================================
function historyGo($no) {
    $script = <<<EOF
            <SCRIPT type="text/javascript">
            <!--
                history.go($no);
            //-->
            </SCRIPT>
EOF;
    echo $script;
}

//====================================================================================
//  function locationReload($no) 자바스크립트 reload
//====================================================================================
function locationReload($target = "self") {
    $script = <<<EOF
            <SCRIPT type="text/javascript">
            <!--
                $target.document.location.reload();
            //-->
            </SCRIPT>
EOF;
    echo $script;
}

//====================================================================================
//  자바스크립트 reload
//====================================================================================
function jsScript($f_script) {
    $script = <<<EOF
            <SCRIPT type="text/javascript">
            <!--
                $f_script;
            //-->
            </SCRIPT>
EOF;
    echo $script;
}

//====================================================================================
//  자바스크립트 history.back()
//====================================================================================
function historyBack($target = "self") {
    $script = <<<EOF
            <SCRIPT type="text/javascript">
            <!--
                $target.history.back();
            //-->
            </SCRIPT>
EOF;
    echo $script;
}

/* End of file */
