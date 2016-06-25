<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title><?= lang('bao8bet_casino')?> | <?= $title ?></title>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<meta name="copyright" content="MAX Live,inc. Copyright (c) 2015"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/style.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>/stylesheets/baofagames.css" />  
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/flaticon.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/ie8.css" />
		<![endif]-->
		<script src="<?=base_url('assets/');?>/js/modernizr.js"></script>
		<script src="<?=base_url('assets/');?>/js/jquery-1.11.3.min.js"></script>
		<script src="<?=base_url('assets/');?>/js/jquery.form.js"></script>
		<script src="<?=base_url('assets/');?>/js/jquery.number.min.js"></script>
		<script src="<?=base_url('assets/');?>/js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/jquery.fancybox.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/tooltipify.css" />
		<script src="<?=base_url('assets/');?>/js/jquery-tooltipify.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/jquery.bxslider.css" />
		<script src="<?=base_url('assets/');?>/js/jquery.bxslider.min.js"></script>
		<script src="<?=base_url('assets/');?>/js/baofa.js"></script>
		<script src="<?=base_url('assets/');?>/js/TLE.js"></script>
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
	<body id ="scroll_target">
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
		<div id="wrap"  >
			<!-- header -->
			<div id="header">
				<div class="header_inr">
				
					<div class="sta_inr">
						<a href="<?= base_url()?>" alt="<?= lang('bao8bet_casino')?> Home"><?= lang('bao8bet_casino')?></a>
					</div>
					
					<div id="signin_dptim">
						<i class="flaticon-time44"></i> <span id="dpTime"></span>
					</div>
<?php if (!$login_status):?>
					<div id="LoginTop">
						<form role="form" name ="login_form" id ='login_form' method="POST" target ="hiddenframe" action ="<?= site_url('member/login')?>">
						    <input type ="hidden" name ="return_url" value ="<?= current_url()?>"/>
							<div class="inputBG">
								<label><span class="flaticon-network60"></span></label>
								<input id="l_user_id" type="text" class="" name="l_user_id"  required ="required" tabindex="1" value="" placeholder="User ID">
							</div>
							<div class="inputBG">
								<label><span class="flaticon-locked68"></span></label>
								<input id="l_user_password" type="password" tabindex="2" name="l_user_password" value="" placeholder="Password">
							</div>
							<div id="signInBtnHolder">
								<input type="submit" value="<?= lang('log_in')?>" tabindex="3" id="signInBtn"/>
								<button tabindex="4" id="joinBtn" class="PopSignUp fancybox.ajax" href ="<?= site_url('member/join/join')?>">
									<?= lang('join_now')?>
								</button>
							</div>
						</form>
						<div id="signin_bottom">
							<div id="signin_findpw">
								<a class="PopSignUp fancybox.ajax" href ="<?= site_url('member/password_reset/reset_password')?>"><?= lang('lost_login')?></a>
							</div>
						</div>
					</div>
    <script>
        $(document).ready(function(){
            $('#login_form').submit(function(){
                var id = $('#l_user_id').val();
                var pass = $('#l_user_password').val();
                if (id.length < 1 || id == '' || pass.length < 1 || pass == ''){
                    alert('id 와 password 를 입력해주세요');
                    return false;
                }
            });
        });
    </script>
<?php else:?>
					<div id="LoginTop" class="smallbox" >
						<div class="AfterLogin">
							<div class="icon_box">
								<i class="flaticon-network60"></i>&nbsp;<a href="<?= site_url('profile')?>"><?= $user -> user_id?></a>
							</div>
							<div class="logout">
								<a href="<?= site_url('member/logout')?>"><?= lang('log_out')?></a>
							</div>
							<div class="Balance">
								<div class="e-wallet_login">
									<b>보유금액</b>
										<!-- <?= number_format($user -> wallet_balance,2)?> <?= lang('cny')?> -->
										
									   <a class="PopSignUp T_small fancybox.ajax" href="<?=site_url('e_wallet/deposit')?>">   
									       <?= lang('deposit')?>
									   </a>
								</div>
								<?php if (MG_ENABLE == 'Y'):?>
								<div class="gamemoney_login">
									MG : <a href="<?= site_url('e_wallet')?>"><span id ="mg_casino_balance"><?= number_format($user -> mg_casino_balance,0)?> 원</span></a>
									<!-- MG : <span style="display:none" class ="casino_balance" id ="mg_casino_balance">Updating</span> -->
								</div> 
								<?php endif;?>
								<?php if(PT_ENABLE == 'Y'):?>
								<div class="gamemoney_login">
									PT : <span id ="pt_casino_balance"><?= number_format($user -> pt_casino_balance,0)?> 원</span>
									<!-- PT : <span style="display:none" class ="casino_balance" id ="pt_casino_balance">Updating</span> -->
								</div>
								<?php endif;?>
							</div>
						</div>
					</div>
<?php endif;?>
				</div>
				<!-- //header_inr -->
				<div class="Gnb">
					<div class="Gnb_inr">
						<nav>
							<ul class="navigation">
								<li id="home" class="nvselected">
									<a href="<?= base_url()?>"><i class="flaticon-home113"></i> 홈</a>
								</li>
								<li id="livecasino">
									<a href="<?= site_url('slot_main/live')?>"><?= lang('live_casino')?></a>
								</li>
								<?php if (MG_ENABLE == 'Y'):?>
								<li id="mgslot">
									<a href="<?= site_url('slot_main?g_vender='.VENDER_MG)?>">MG 슬롯</a>
								</li>
								<?php endif;?>
								<?php if(PT_ENABLE == 'Y'):?>
								<li id="ptslot">
									<a href="<?= site_url('slot_main?g_vender='.VENDER_PT)?>">PT 슬롯</a>
								</li>
								<?php endif;?>

							</ul>
						</nav>
						<div class="sub_menu">
							<ul>
								<li>
									<a 
									<?php if($login_status):?>
									   href="<?= site_url('profile')?>" 
									<?php else:?>
									   onclick ="loginAlert();" 
                                    <?php endif;?>
									    ><h3>내정보</h3></a>
								</li>
								<li>
									<a href="<?= site_url('promotion') ?>"><h3><?= lang('promotion')?></h3></a>
								</li>
								<li>
									<a href="<?= site_url('vip_club') ?>"><h3><?= lang('vip_club')?></h3></a>
								</li>
								<!-- <li>
									<a href="<?= site_url('help') ?>"><h3><?= lang('help')?></h3></a>
								</li> -->
								<!-- <li> 
								    <?php if($lang_name == LANG_ENG):?>
									   <a href="<?= site_url('langswitch/switchLanguage')?>/china"><h4><img src="<?=base_url('assets/'); ?>/images/flags/cn.gif" style="margin-top:3px;"> 简体中文</h4></a>
									<?php else:?>
									   <a href="<?= site_url('langswitch/switchLanguage')?>/english"><h4><img src="<?=base_url('assets/'); ?>/images/flags/us.gif" style="margin-top:3px;"> English</h4></a>
									<?php endif;?>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //header -->
		<?php include_once APPPATH . "views/front/template/notice_alert_template.php";?>