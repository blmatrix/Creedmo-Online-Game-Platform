<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paging {
    var $SCALE;
    var $GROUP;
    var $TOTAL_CNT;
    var $VARIABLE;
    var $NOW_PAGE;
    var $PAGE_AR;
    var $START_ROW;
    var $VNO;
    var $START_PAGE;
    var $TOTAL_PAGE;
    var $END_PAGE;
    var $CI;
    var $BOARD_TYPE;

    //====================================================================================
    // 생성자
    //====================================================================================
    function M_PageClass() {
        $this -> Ci = &get_instance();
        $this -> SCALE = 10;
        $this -> GROUP = 10;
        $this -> TOTAL_CNT = 0;
        $this -> VARIABLE = "";
        $this -> NOW_PAGE = 0;
        // 현재 페이지
        $this -> PAGE_AR = array();
        // 페이지정보
        $this -> START_ROW = 0;
        // 디비 시작 번호
        $this -> VNO = 0;
        // 가상번호
        $this -> START_PAGE = 0;
        $this -> TOTAL_PAGE = 0;
        $this -> END_PAGE = 0;
    }

    //====================================================================================
    //  function setPage() 페이지 계산
    //====================================================================================
    function setPage($vpage) {
        if (!$vpage) {
            $vpage = 1;
        }
        $this -> NOW_PAGE = $vpage;
        $this -> START_PAGE = $this -> NOW_PAGE - ($this -> NOW_PAGE - 1) % $this -> GROUP;
        $this -> TOTAL_PAGE = ceil($this -> TOTAL_CNT / $this -> SCALE);
        $this -> START_ROW = ($this -> NOW_PAGE * $this -> SCALE) - $this -> SCALE;
        $this -> END_PAGE = $this -> START_PAGE + $this -> GROUP - 1;
        if ($this -> END_PAGE > $this -> TOTAL_PAGE) {
            $this -> END_PAGE = $this -> TOTAL_PAGE;
        }
        for ($i = $this -> START_PAGE; $i <= $this -> END_PAGE; $i++) {
            $this -> PAGE_AR[] = $i;
        }
        $this -> VNO = $this -> TOTAL_CNT - ($this -> NOW_PAGE - 1) * $this -> SCALE;
    }

    function setVariableFromGet($get) {
        if (array_key_exists("vpage", $get)) {
            unset($get['vpage']);
        }
        $ret = "";
        foreach ($get as $key => $value) {
            $ret .= "$key=$value&";
        }
        $this -> VARIABLE = $ret;
    }

    //
    // //====================================================================================
    // // 게시판 페이징
    // //====================================================================================
    //
    // function getBoardPage() {
    // $returnData = "";
    // if ($this -> START_PAGE > $this -> GROUP) {
    // $pre_group_page = $this -> START_PAGE - 1;
    // $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=1&" . $this -> VARIABLE . "'><span class='page_button'>[처음]</span></a>";
    // $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $pre_group_page . $this -> VARIABLE . "' style='margin-right:20px;'><span class='page_button'>[이전]</span></a>";
    // }
    // foreach ($this->PAGE_AR as $key => $pageNO) {
    // if ($pageNO == $this -> NOW_PAGE) {
    // $returnData .= "<span class='page_button page_select'>" . $pageNO . "</span>";
    // } else {
    // $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $pageNO . $this -> VARIABLE . "'><span class='page_button'>" . $pageNO . "</span></a>";
    // }
    // }
    // if ($this -> TOTAL_PAGE > $this -> END_PAGE) {
    // $next_group_page = $this -> START_PAGE + $this -> GROUP;
    // $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $next_group_page . $this -> VARIABLE . "' style='margin-left:15px;'><span class='page_button'>[다음]</span></a>";
    // $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $this -> TOTAL_PAGE . $this -> VARIABLE . "'><span class='page_button'>[마지막]</span></a>";
    // }
    // return $returnData;
    // }

    //====================================================================================
    // 게시판 페이징
    //====================================================================================

    function getBoardPage() {
        if ($this -> TOTAL_CNT > 0){
            $returnData = "<ul class='pagination'>";
            if ($this -> START_PAGE > $this -> GROUP) {
                $pre_group_page = $this -> START_PAGE - 1;
                //$returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=1&" . $this -> VARIABLE . "'><span class='page_button'>[처음]</span></a>";
    
                $returnData .= "<li>";
                $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $pre_group_page . $this -> VARIABLE . "' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a>";
                $returnData .= "</li>";
            }
    
            foreach ($this->PAGE_AR as $key => $pageNO) {
    
                if ($pageNO == $this -> NOW_PAGE) {
                    $returnData .= "<li class ='active'>";
                    $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $pageNO .'&'.$this -> VARIABLE . "'>" . $pageNO . "</a>";
                    $returnData .= "</li>";
                } else {
                    $returnData .= "<li>";
                    $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $pageNO .'&'. $this -> VARIABLE . "'>" . $pageNO . "</a>";
                    $returnData .= "</li>";
                }
            }
            if ($this -> TOTAL_PAGE > $this -> END_PAGE) {
                $returnData .= "<li>";
                $next_group_page = $this -> START_PAGE + $this -> GROUP;
                $returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $next_group_page . $this -> VARIABLE . "' aria-label='Next'> <span aria-hidden='true'>&raquo;</span> </a>";
                //$returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $this -> TOTAL_PAGE . $this -> VARIABLE . "'><span class='page_button'>[마지막]</span></a>";
                $returnData .= "</li>";
            }
            $returnData .= "</ul>";
            return $returnData;
        }
    }
    
     // ajax 사용하는 페이지
    function getPageAjax() {
        if ($this -> TOTAL_CNT > 0){
            $returnData = "<div class='paging'><ul class='pagination'>";
             
             if ($this -> START_PAGE > $this -> GROUP) {
                $pre_group_page = $this -> START_PAGE - 1;
                //$returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=1&" . $this -> VARIABLE . "'><span class='page_button'>[처음]</span></a>";
    
                $returnData .= "<li>";
                $returnData .= "<a  onclick=\"loadAjaxPage('".$this-> BOARD_TYPE."','".$pre_group_page ."')\" aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a>";
                $returnData .= "</li>";
            }
            foreach ($this->PAGE_AR as $key => $pageNO) {
                if ($pageNO == $this -> NOW_PAGE) {
                    $returnData .= "<li  class ='active'>";
                    $returnData .= "<a href='#'>" . $pageNO . "</a>";
                    $returnData .= "</li>";
                } else {
                    $returnData .= "<li >";
                    $returnData .= "<a  onclick=\"loadAjaxPage('".$this-> BOARD_TYPE."','".$pageNO ."')\">" . $pageNO . "</a>";
                    $returnData .= "</li>";
                }
            }
            if ($this -> TOTAL_PAGE > $this -> END_PAGE) {
                $returnData .= "<li>";
                $next_group_page = $this -> START_PAGE + $this -> GROUP;
                $returnData .= "<a  onclick=\"loadAjaxPage('".$this-> BOARD_TYPE."','".$next_group_page ."')\" aria-label=''Next'><span aria-hidden='true'>&raquo;</span></a>";
                //$returnData .= "<a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $this -> TOTAL_PAGE . $this -> VARIABLE . "'><span class='page_button'>[마지막]</span></a>";
                $returnData .= "</li>";
            }
            $returnData .= "</ul></div>";
            return $returnData;
        }
    }

    // 게시판 모바일 페이징
    function getBoardPageMobile() {
        $returnData = "<table cellpadding=0 cellspacing=0 bordercolor=red border=0 align=center>";
        $returnData .= "<tr>";
        if ($this -> START_PAGE > $this -> GROUP) {
            $pre_group_page = $this -> START_PAGE - 1;
            $returnData .= "<td><a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $pre_group_page . $this -> VARIABLE . "' ><div class=\"btn_type3\" style=\"background-color:#336699;width:40px;\">이전</div></a></td>";
        }
        $returnData .= "<td width=70 align=center>";
        $returnData .= $this -> NOW_PAGE . " / " . $this -> TOTAL_PAGE;
        $returnData .= "</td>";
        if ($this -> TOTAL_PAGE > $this -> END_PAGE) {
            $next_group_page = $this -> START_PAGE + $this -> GROUP;
            $returnData .= "<td><a href='" . $_SERVER["PHP_SELF"] . "?vpage=" . $next_group_page . $this -> VARIABLE . "' ><div class=\"btn_type3\" style=\"background-color:#336699;width:40px;\">다음</div></a></td>";
        }
        $returnData .= "</tr>";
        $returnData .= "</table>";
        return $returnData;
    }
    

    // ajax 사용하는 페이지
    function getPageAjax1($f_gubun) {
        $returnData = "";
        if ($this -> START_PAGE > $this -> GROUP) {
            $pre_group_page = $this -> START_PAGE - 1;
            $returnData .= "<a href='javascript:void(0)'><span class='page_button' onclick=\"ajaxPage(this, '" . $f_gubun . "')\" paramiter='vpage=1&" . $this -> VARIABLE . "'>[처음]</span></a>";
            $returnData .= "<a href='javascript:void(0)' style='margin-right:20px;'><span class='page_button' onclick=\"ajaxPage(this, '" . $f_gubun . "')\" paramiter='vpage=" . $pre_group_page . $this -> VARIABLE . "'>[이전]</span></a>";
        }
        foreach ($this->PAGE_AR as $key => $pageNO) {
            if ($pageNO == $this -> NOW_PAGE) {
                $returnData .= "<span class='page_button page_select'>" . $pageNO . "</span>";
            } else {
                $returnData .= "<a href='javascript:void(0)'><span class='page_button' onclick=\"ajaxPage(this, '" . $f_gubun . "')\" paramiter='vpage=" . $pageNO . $this -> VARIABLE . "'>" . $pageNO . "</span></a>";
            }
        }
        if ($this -> TOTAL_PAGE > $this -> END_PAGE) {
            $next_group_page = $this -> START_PAGE + $this -> GROUP;
            $returnData .= "<a href='javascript:void(0)' style='margin-left:15px;'><span class='page_button' onclick=\"ajaxPage(this, '" . $f_gubun . "')\" paramiter='vpage=" . $next_group_page . $this -> VARIABLE . "'>[다음]</span></a>";
            $returnData .= "<a href='javascript:void(0)'><span class='page_button' onclick=\"ajaxPage(this, '" . $f_gubun . "')\" paramiter='vpage=" . $this -> TOTAL_PAGE . $this -> VARIABLE . "'>[마지막]</span></a>";
        }
        return $returnData;
    }

}
