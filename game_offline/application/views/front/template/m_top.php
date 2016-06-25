<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<link rel="icon" type="image/png" href="<?=base_url('assets/');?>/m_images/splash/android-chrome-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" sizes="196x196" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-196x196.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-180x180.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/');?>/m_images/splash/apple-touch-icon-57x57.png">  
<link rel="icon" type="image/png" href="<?=base_url('assets/');?>/m_images/splash/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?=base_url('assets/');?>/m_images/splash/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?=base_url('assets/');?>/m_images/splash/favicon-16x16.png" sizes="16x16">
<link rel="shortcut icon" href="<?=base_url('assets/');?>/m_images/splash/favicon.ico" type="image/x-icon" /> 
    
<title><?= lang('bao8bet_casino')?></title>

<link href="<?=base_url('assets/');?>/m_styles/style.css"           rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/');?>/m_styles/framework.css"       rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/');?>/m_styles/font-awesome.css"    rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/');?>/m_styles/animate.css"         rel="stylesheet" type="text/css">

<script type="text/javascript" src="<?=base_url('assets/');?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>/m_scripts/jqueryui.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>/m_scripts/framework-plugins.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>/m_scripts/custom.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>/js/TLE.js"></script>
<script src="<?=base_url('assets/');?>/js/jquery.number.min.js"></script>
<script src="<?=base_url('assets/');?>/js/jquery.form.js"></script>
<script>
    
    var ptGameWinCount = 0;
    var mgGameWinCount = 0;
    function loginAlert(){alert('You need to be logged in our web site !')}
    function openWindowAlert(m){ alert(m)}
    function launchGame(vender,game_code,game_type,sessionId,reserved ){
        var url;
        var title = vender == 'mg' ? "MG_Games_" + new Date().getTime() : 'PT_Games_'+ new Date().getTime();
        var option = 'width=1024,height=768,menubar=no,scrollbars=no,toolbar=no,location=no,directories=no,resizable=no';
        var url ="<?= site_url('game_launcher/launch')?>" + "/" + vender + "/" + game_code + "/"+ game_type + "?session_id="+ sessionId; 
        if (vender == 'mg'){
            mgGameWinCount++;
        }else if (vender == 'pt'){
            //pt 게임의 경우 1개의 게임만 가능 
            if (ptGameWinCount > 0) 
            {   
                alert('You can launch only 1 PT game');
                return false;
            }else {
                ptGameWinCount++;
            }
        }
        var g_vender = vender;
        var win = window.open(url,title,option);
        
        //크롬 unload 이벤트 -> beforeunload event
        if (win.addEventListener) {
            win.addEventListener('beforeunload', function(){
               if (vender == 'mg'){
                    mgGameWinCount--;
               }else if (vender == 'pt'){
                    ptGameWinCount--;
               }
               updateMoneyAfterClose(g_vender);
            }, false);
        }
        
        //IE 계열 unload 이벤트
        else if (win.attachEvent) {
            win.attachEvent('onunload', function(){
               if (vender == 'mg'){
                    mgGameWinCount--;
               }else if (vender == 'pt'){
                    ptGameWinCount--;
               }
               updateMoneyAfterClose(g_vender);
            });
        }
    }
    
    // 게임창을 닫은 후, 해당 게임머니를 업데이트한다
    function updateMoneyAfterClose(vender){
        if (vender == 'mg'){
                mgGameWinCount--;
            }else if (vender == 'pt'){
                ptGameWinCount--;
            }
            startAnim(vender);
            updateGameMoney(vender);    
    }
    
    var mgTimer,ptTimer,timer;
    //탑 템플릿의 게임 머니 업데이트 
    function updateGameMoney(vender){
        var url ='<?= site_url()?>ajax/update_game_money/' + vender + '?req_time='+ new Date().getTime();
        var param ={};
        var targetElement = "#"+ vender + "_casino_balance";
        $.ajax({
            type: "GET",
            url: url,
            data: "{}",
            dataType: "json",
            async: true,
            success: function (response) {
                if (response.errorCode == '0'){
                    $(targetElement).html(response.data.game_money);    
                }else {
                    $(targetElement).html(response.message);    
                }
                stopAnim(vender);
                $(targetElement).show();
            }
            ,
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert(textStatus);
            }
        });
    }
    
    function startAnim(vender){
        var targetElement = "#"+ vender + "_casino_balance";
        if (vender =='mg'){
            mgTimer  = setInterval(function(){
                $(targetElement).toggle();
             }, 600);      
        }else {
             ptTimer  = setInterval(function(){
                $(targetElement).toggle();
             }, 600);  
        }
    }
    
    function stopAnim(vender){
        if (vender == 'mg'){
          clearInterval(mgTimer);
        }else {
          clearInterval(ptTimer);
        }
    }
    
    $(document).ready(function(){
        if ($('#PushMessagingContainer').length > 0) {
	        $('#PushMessagingContainer').slideDown('slow',function(){
	          $('#close_noti').click(function(){
                var noti_param = {'target_notice_alert': "<?= !empty($notice_alert) ? $notice_alert -> board_no:''?> ", 'noti_state':1}
                var url = '<?=site_url('ajax/notice_alert_confirm')?>';
                $.post(url,noti_param, function(data){
                    if (data.errorCode == '0'){
                        $('#PushMessagingContainer').hide();                                
                    }else {
                        alert(data.message);
                    }
                },'json');
              });    
	        });
        }
    });
</script>
	</head>
	<body class="dual-sidebar">
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
var __lc = {};
__lc.license = 6676631;
__lc.visitor = {
	name : '<?= !empty($user)  ? $user -> user_id :''?>',
	email: '<?= !empty($user) ? $user -> user_email:''?>'
};
__lc.params = [
  { name: 'Account ID', value: '<?= !empty($user) ? $user -> user_id :''?>' },
  { name: 'User Name', value: '<?= !empty($user) ? $user -> user_name :''?>' },
];
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->

<div id="preloader">
	<div id="status">
        <div class="preloader-logo"></div>
        <h3 class="center-text">Welcome</h3>
        <p class="center-text smaller-text">
            We're loading the content, give us a second. This won't take long!
        </p>
    </div>
</div>

<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->

<div id="header-fixed">
    <a class="open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="#"><img src="<?=base_url('assets/');?>/m_images/top_logo.png" alt="img"></a>
    <a class="open-right-sidebar" href="#"><i class="fa fa-user"></i></a>
</div> 
<div class="all-elements">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">        
            <div class="sidebar-header">
                <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-phone"></i></a>
                <a href="#"><i class="fa fa-comment-o"></i></a> -->
                <a class="close-sidebar" href="#"><i class="fa fa-times"></i></a>
            </div>   
            <p class="sidebar-divider">Navigation</p>
            <div class="sidebar-menu">
                    <a class="menu-item" href="<?= site_url()?>">
                        <i class="fa fa-home"></i>
                        <em>Home</em>
                        <i class="fa fa-circle"></i>
                    </a> 
                    <a class="menu-item"  onclick ="<?=  generate_click_event(VENDER_MG,'MPBaccarat',GAME_TYPE_LIVE,$session_id);?>">
                        <i class="fa fa-camera"></i>
                        <em>Live Casino</em>
                        <i class="fa fa-circle"></i>
                    </a> 
                    <a class="menu-item" href="<?= site_url('m_slot_main?vender='.VENDER_MG)?>">
                        <i class="fa fa-rocket"></i>
                        <em>MG Slot</em>
                        <i class="fa fa-circle"></i>
                    </a> 
                    <!-- <a class="menu-item" href="<?= site_url('m_slot_main?vender='.VENDER_PT)?>">
                        <i class="fa fa-plane"></i>
                        <em>PT Slot</em>
                        <i class="fa fa-circle"></i>
                    </a>  -->
                <!-- <div class="has-submenu">
                    <a class="menu-item show-submenu" href="#">
                        <i class="fa fa-cog"></i>
                        <em>Features</em>
                        <strong>5</strong>
                    </a> 
                    <div class="submenu">
                        <a class="submenu-item" href="features-typography.html">    <i class="fa fa-angle-right"></i><em>   Typography    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-jquery.html">        <i class="fa fa-angle-right"></i><em>   jQuery    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-others.html">        <i class="fa fa-angle-right"></i><em>   Others    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-sliders.html">       <i class="fa fa-angle-right"></i><em>   Sliders    </em><i class="fa fa-circle"></i></a>
                        <a class="submenu-item" href="features-interactive.html">   <i class="fa fa-angle-right"></i><em>   Interactive    </em><i class="fa fa-circle"></i></a>                    
                    </div>
                </div>  -->              
            </div>
            <p class="sidebar-divider">Contact Us</p>
            <div class="sidebar-menu">
                <a class="menu-item" href="tel:<?= $customer_service -> call_center_num1 ?>">
                    <i class="fa fa-phone"></i>
                    <em>전화연결</em>
                </a>                   
                <a class="menu-item" href="sms:<?= $customer_service -> call_center_num1 ?>">
                    <i class="fa fa-comment-o"></i>
                    <em>문자보내기</em>
                </a>                                   
            </div>
            <p class="sidebar-footer">Copyright 2015. All rights reserved</p>
        </div>
        <!--Right Sidebar -->
        <div class="snap-drawer snap-drawer-right">
            <div class="sidebar-header">
                <a class="close-sidebar" href="#"><i class="fa fa-times"></i></a>
            </div>
            <div class="sidebar-logo">
            	<div class="member_id">
            		<a href="<?= site_url('profile')?>"><i class="fa fa-user"></i> <b><?= $user -> user_id?></b> 님</a> <a href="<?= site_url('member/logout')?>"><small><?= lang('log_out')?></small></a>
            		
            		
            	</div>
            </div>

            <div class="sidebar-menu">
                <a class="menu-item" href="<?= site_url('profile')?>">
                    <i class="fa fa-user"></i>
                    <em>내정보</em>
                </a>                   
                <a class="menu-item" href="<?= site_url('e_wallet') ?>">
                    <i class="fa fa-bank"></i>
                    <em>입/출금</em>
                </a>                 
                <a class="menu-item" href="<?= site_url('comp') ?>">
                    <i class="fa fa-database"></i>
                    <em>콤프포인트</em>
                </a>                    
                <a class="menu-item" href="<?= site_url('coupons') ?>">
                    <i class="fa fa-gift"></i>
                    <em>쿠폰</em>
                </a>
                <a class="menu-item" href="<?= site_url('affiliate') ?>">
                    <i class="fa fa-group"></i>
                    <em>추천인</em>
                </a>     
            </div>
            
            <p class="sidebar-divider">Contact Us</p>
            
            <div class="sidebar-menu">
                <a class="menu-item" href="tel:<?= $customer_service -> call_center_num1 ?>">
                    <i class="fa fa-phone"></i>
                    <em>전화연결</em>
                </a>                   
                <a class="menu-item" href="sms:<?= $customer_service -> call_center_num1 ?>">
                    <i class="fa fa-comment-o"></i>
                    <em>문자보내기</em>
                </a>                                   
            </div>
            <p class="sidebar-footer">Copyright 2015. All rights reserved</p>
        </div>
        <div id="content" class="snap-content">
            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
            