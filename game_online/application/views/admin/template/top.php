<!doctype html>
<?php
$this -> load -> helper('url');
 $CI = & get_instance();
 $CI -> load -> model('admin/deposit'); 
 $CI -> load -> model('admin/withdraw'); 
 $CI -> load -> model('admin/game_money_transfer'); 
 $condition[WHERE_CONDITION] = array(
    'withdraw_status' => WITHDRAW_STATUS_CONFIRMED
 );
 $confirm_withdraw_count = $CI -> withdraw -> advanced_count_all_result($condition);
 
 $binding = array('1');
 $query = "select count(*) as count from withdraw where withdraw_status in (?)";
 $withdraw_request_count = $CI -> withdraw -> raw_binding_query($query , $binding)[0] -> count;
 $withdraw_request_count = !empty($withdraw_request_count)  ? $withdraw_request_count : '0';
 
 $condition[WHERE_CONDITION] = array(
    'deposit_status' => DEPOSIT_STATUS_CONFIRMED
 );
 $confirm_deposit_count = $CI -> deposit -> advanced_count_all_result($condition);
 $query = "select count(*) as count from deposit where deposit_status in (?)";
 $deposit_request_count = $CI -> deposit -> raw_binding_query($query , $binding)[0]-> count;
 $deposit_request_count =  !empty($deposit_request_count) ?  $deposit_request_count : '0';
 
 $condition[WHERE_CONDITION] = array(
    'transfer_status' => '2'
 );
 $tranfer_count = $CI -> game_money_transfer -> advanced_count_all_result($condition);
 
 ?>
<html class="fixed">
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Dashboard | BAOFA Admin -1.01</title>
        <meta name="keywords" content="BAOFA Admin" />
        <meta name="description" content="BAOFA Admin">
        <meta name="author" content="http://gobigchina.net/">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">-->

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="<?=base_url('assets/');?>/vendor/bootstrap-datepicker/css/datepicker3.css" />  

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/morris/morris.css" />
        
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/stylesheets/theme-custom.css">
		
        <!-- Head Libs -->
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/morris/morris.css" />
        <script src="<?=base_url('assets/'); ?>/vendor/jquery/jquery.js"></script>
        <script src="<?=base_url('assets/'); ?>/vendor/modernizr/modernizr.js"></script>
        <script src="<?=base_url('assets/'); ?>/baofa.js"></script>
        
        <!-- Include Required Prerequisites -->
        <script type="text/javascript" src="<?=base_url('assets/'); ?>/vendor/jsdelivr/moment.min.js"></script>
         
        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="<?=base_url('assets/'); ?>/vendor/jsdelivr/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/'); ?>/vendor/jsdelivr/daterangepicker-bs3.css" />
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/chartist/chartist.css" />

        <script type="text/javascript" src="<?=base_url('assets/');?>/vendor/chartist/chartist.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

        <script src="<?=base_url('assets/'); ?>/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
        <script src="<?=base_url('assets/'); ?>/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="<?=base_url('assets/'); ?>/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
        <script src="<?=base_url('assets/'); ?>/javascripts/tables/examples.datatables.default.js"></script>
         <script src="<?=base_url('assets/');?>/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

        <script>
        var intervalId = 0;
			$(document).ready(function() {
			    function play_alarm(obj, command){
			        if (command == "play"){
			            if (obj.prop('paused')){
			                obj.trigger(command);
			            }
			            return;
			        }else if (command == 'pause' ){
			            if (!obj.prop('paused')){
			                obj.trigger(command);
			            }
			            return;
			        }
                }
                
			    var withdraw_player = $('#withdraw_player');
                var deposit_player = $('#deposit_player');
                // 입출금 알림 서비스 , 실제 서비스 시 아래의 주석을 푼다.
                 intervalId = setInterval(function(){
                  $.getJSON( "<?= site_url('admin/ajax/check_noti')?>", function(data) {
                      var request_withdraw_count = data.withdraw.count;
                      var request_deposit_count  = data.deposit.count;
//                      
                      var deposit_request = $('#deposit_request');
                      var withdraw_request = $('#withdraw_request');
//                  
                      withdraw_request.html(request_withdraw_count);
                      deposit_request.html(request_deposit_count);
//                     
                      if (request_withdraw_count> 0){
                          play_alarm(withdraw_player, 'play');
                          $('#s_withdraw').removeClass('label-danger');
                          $('#s_withdraw').removeClass('label-primary');
                          $('#s_withdraw').addClass('label-danger');
                      }else {
                           play_alarm(withdraw_player, 'pause');
                           $('#s_withdraw').removeClass('label-danger');
                           $('#s_withdraw').removeClass('label-primary');
                           $('#s_withdraw').addClass('label-primary');
                       }
//                       
                      if(request_deposit_count > 0){
                           play_alarm(deposit_player, 'play');
                           $('#s_deposit').removeClass('label-danger');
                           $('#s_deposit').removeClass('label-primary');
                           $('#s_deposit').addClass('label-danger');
                      }else {
                           play_alarm(deposit_player, 'pause');
                           $('#s_deposit').removeClass('label-danger');
                           $('#s_deposit').removeClass('label-primary');
                           $('#s_deposit').addClass('label-primary');
                      } 
                  });
                },3000);
                
				$('input[name="daterange"]').daterangepicker({
	
					format : 'YYYY/MM/DD hh:mm:ss',
					timePicker : true,
					timePickerIncrement : 30,
					timePicker24Hour : true,
					timePickerSeconds : false,
					ranges : {
						'Today' : [moment(), moment()],
						'Yesterday' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						//'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						//'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						'Last Week' : [moment().startOf('month'), moment().endOf('month')], // 현재 계산 수식 적용안됨, 수정 예정
						'This Week' : [moment().startOf('month'), moment().endOf('month')], // 현재 계산 수식 적용안됨, 수정 예정
						'This Month' : [moment().startOf('month'), moment().endOf('month')],
						'Last Month' : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					}
				});
                
                $('#non_check_widraw').mouseover(function(){
                    $('#request_withdraw_container').html('');
                    $('#request_withdraw_container').load("<?= site_url('admin/ajax/check_noti_withdraw')?>");                
                })
                $('#non_check_deposit').mouseover(function(){
                   $('#request_withdraw_container').html('');
                   $('#request_deposit_container').load("<?= site_url('admin/ajax/check_noti_deposit')?>");
                })
				$('.search-date').click(function() {
					var search_data_p = $(this).attr('data-search').toLowerCase();

					switch(search_data_p) {
					case 'last month':
						var d1 = moment().subtract(1, 'month').startOf('month').format('YYYY/MM/DD 00:00:00');
						var d2 = moment().subtract(1, 'month').endOf('month').format('YYYY/MM/DD 23:59:59');
						$("#daterange").val(d1 + " - " + d2);
						break;

					case 'this month':
						var d1 = moment().startOf('month').format('YYYY/MM/DD 00:00:00');
						var d2 = moment().endOf('month').format('YYYY/MM/DD 23:59:59');
						$("#daterange").val(d1 + " - " + d2);
						break;
					case 'last week':
						var d1 = moment().weekday(-6).format('YYYY/MM/DD 00:00:00');
						var d2 = moment().weekday(-0).format('YYYY/MM/DD 23:59:59');
						$("#daterange").val(d1 + " - " + d2);
						break;
					case 'this week':
					    var d1 = moment().startOf('week').add(1,'day').format('YYYY/MM/DD 00:00:00');
                        var d2 = moment().endOf('week').add(1,'day').format('YYYY/MM/DD HH:mm:ss');
                        $("#daterange").val(d1 + " - " + d2);
						break;
					case 'today':
						var d1 = moment().format('YYYY/MM/DD 00:00:00');
						var d2 = moment().format('YYYY/MM/DD HH:mm:ss');
						$("#daterange").val(d1 + " - " + d2);
						break;
					case 'yesterday':
						var d1 = moment().subtract(1, 'days').format('YYYY/MM/DD 00:00:00');
						var d2 = moment().subtract(1, 'days').format('YYYY/MM/DD 23:59:59');
						$("#daterange").val(d1 + " - " + d2);
						break;
					case 'prev_month':
					   date_str = $('#daterange').val();
					   d_date = date_str.split('-')[0];
                       var d1 = moment(d_date).subtract(1, 'months').startOf('month').format('YYYY/MM/DD 00:00:00');
                       var d2 = moment(d1 ).endOf('month').format('YYYY/MM/DD 23:59:59');
                       $("#daterange").val(d1 + " - " + d2);
                       break;
                    case 'next_month':
                       date_str = $('#daterange').val();
                       d_date = date_str.split('-')[1];
                       var d1 = moment(d_date).add(1, 'months').startOf('month').format('YYYY/MM/DD 00:00:00');
                       var d2 = moment(d1).endOf('month').format('YYYY/MM/DD 23:59:59');
                       $("#daterange").val(d1 + " - " + d2);
                       break;
                    }
				});
			});

			function openCommonModal(requestType, requestNo, url) {
				$('div.modal').removeData('bs.modal');
				$('div.modal').find('.modal-content').empty();
				$('div.modal').modal({
					remote : url + '?requestType=' + requestType + '&requestNo=' + requestNo
				});
			}

			function openModal(url) {
				$('div.modal').removeData('bs.modal');
				$('div.modal').find('.modal-content').empty();
				$('div.modal').modal({
					remote : url
				});
			}
        </script>
    </head>
    <body>
        <section class="body">
            <!-- start: header -->
            <header class="header">
               <?php $this -> load -> helper('url');?>
               <audio  id ="deposit_player" src="<?= base_url('assets/mp3/depositAlarm.mp3')?>" loop> 
                HTML5 audio not supported
              </audio>
               <audio id ="withdraw_player" src="<?= base_url('assets/mp3/withdrawAlarm.mp3')?>" loop> 
                HTML5 audio not supported
              </audio>
                <div class="logo-container">
                    <a href="<?= site_url('admin/index/index'); ?>" class="logo">
                        <img src="<?=base_url('assets/'); ?>/images/logo.png" height="35" alt="Bao Fa Admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <span class="separator"></span>
            
                    <ul class="notifications">
                           <!-- withdraw noti -->
                           <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" title="Withdraw Request">
                                <i class="fa" id = "non_check_widraw">W</i>
                                <span class="badge" id ="withdraw_request">
                                    <?= $withdraw_request_count?>
                                </span>
                            </a>
                            <div class="dropdown-menu notification-menu">
                                <div class="content" id ="request_withdraw_container">
                                </div>
                            </div>
                        </li>
                              <!-- deposit noti -->
                           <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" title="Deposit Request">
                                <i class="fa" id = "non_check_deposit" >D</i>
                                 <span class="badge" id ="deposit_request">
                                   <?= $deposit_request_count?>
                                </span>
                            </a>            
                            <div class="dropdown-menu notification-menu">
                                <div class="content" id ="request_deposit_container">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <span class="separator"></span>
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="<?=base_url('assets/'); ?>/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="<?=base_url('assets/'); ?>/images/!logged-user.jpg" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                <span class="name"><?= $this -> session -> userdata(ADMIN_SESSION)[ID];?> - <?= $this -> session -> userdata(ADMIN_SESSION)[NAME];?> </span>
                                <span class="role">administrator</span>
                            </div>
                            <i class="fa custom-caret"></i>
                        </a>
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a href ="<?= site_url('admin/settings/manager_setting'); ?>" role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Set Manager</a>
                                </li>
                                <li>
                                    <a href ="<?= site_url('admin/adminauth/logout'); ?>" role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->
