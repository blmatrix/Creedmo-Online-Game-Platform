
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<title>BaoFa | 爆财网</title>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<meta name="copyright" content="BaoFa 爆财网,inc. Copyright (c) 2015"/>
		<link rel="stylesheet" type="text/css" href="http://gobigchina.net/assets/stylesheets/style.css"/>
		<link rel="stylesheet" type="text/css" href="http://gobigchina.net/assets/stylesheets/flaticon.css">
		<script src="http://gobigchina.net/assets/js/modernizr.js"></script>
		<script src="http://gobigchina.net/assets/js/jquery-1.11.3.min.js"></script>
		<script src="http://gobigchina.net/assets/js/jquery.number.min.js"></script>
		<script src="http://gobigchina.net/assets/js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="http://gobigchina.net/assets/stylesheets/jquery.fancybox.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="http://gobigchina.net/assets/stylesheets/tooltipify.css">
		<script src="http://gobigchina.net/assets/js/jquery-tooltipify.js"></script>
		<script src="http://gobigchina.net/assets/js/baofa.js"></script>
        
        <!-- font libs -->
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
        
        <!-- demo page styles -->
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.demo-pages.min.css" rel="stylesheet" type="text/css" />  
        
        <!-- jPList core js and css  -->
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.core.min.css" rel="stylesheet" type="text/css" />        
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.core.min.js"></script>
        
        <!-- sort bundle -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.sort-bundle.min.js"></script>
        
        <!-- textbox filter control -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.textbox-filter.min.js"></script>
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.textbox-filter.min.css" rel="stylesheet" type="text/css" />
        
        <!-- jplist pagination bundle -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.pagination-bundle.min.js"></script>
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />       
        
        <!-- jplist history bundle -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.history-bundle.min.js"></script>
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.history-bundle.min.css" rel="stylesheet" type="text/css" />
        
        <!-- jplist toggle bundle -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.filter-toggle-bundle.min.js"></script>
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />
        
        <!-- jplist views control -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.views-control.min.js"></script>
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.views-control.min.css" rel="stylesheet" type="text/css" />
        
        <!-- filter dropdown control -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.filter-dropdown-bundle.min.js"></script>
        
        <!-- preloader -->
        <script src="http://gobigchina.net/assets/front/jplist/js/jplist.preloader-control.min.js"></script>
        <link href="http://gobigchina.net/assets/front/jplist/css/jplist.preloader-control.min.css" rel="stylesheet" type="text/css" />
		
		<script>
		    function loginAlert(){
		        alert('You need to be logged in site');
		        return false;
		    }
		    function openWindowAlert(m){ alert(m)}
		    function launchGame(t,c,i,p,n ){
		        var url;
		        var title;
		        var option = ''
		        if (t == 'mg'){
		            title = "MG games";
		            option = 'width=800,height=600,menubar=no,scrollbars=no,toolbar=no,location=no,directories=no,resizable=no';
		            url = "https://igaminga.gameassists.co.uk/aurora/?theme=igamingA&ul=en&gameid="+c+"&sEXT1="+i+"&sEXT2="+p;
		            //url = "https://lanuch88.gameassists.co.uk/aurora/?theme=igamingA&ul=en&gameid="+c+"&sEXT1="+i+"&sEXT2="+p;
		        }else if(t == 'pt') {
		            title = "PT games";
		            url ="http://gobigchina.net/index.php/pt_api/login?game_id="+ c + "&user_no=" + n;
		            option = 'width=800,height=600,menubar=no,scrollbars=no,toolbar=no,location=no,directories=no,resizable=no';
		        }else {
		            openWindowAlert('Wrong Access');
		            return;
		        }
		        window.open(url,title,option);
		    }
		    function launchLiveGame(t,c,i,p,n){}
		    function createElement(type){
		        if (type == 'direct'){
		            var str ='';
		            str = '<label>Mobile Number</label>';
                    str +=       '<input required ="required" id="j_country_phone_code" name="j_country_phone_code"  style="width: 15%; display: inline-block; vertical-align: middle;" placeholder="P Code"/>';
                    str +=        '<input required ="required" id="j_phone_number_d" name="j_phone_number"  style="width: 29.5%; display: inline-block; vertical-align: middle;" placeholder="Enter your Mobile Number" type="text" title="Enter your Mobile Number">';
		            $('#phone_container').html( str);
		        }else if(type == 'select'){
		            var str ='';
		            str ='<label>Mobile Number</label>';
                    str+=            '<div class="row tooltip-left">';
                    str+=                '<select id = "j_country_phone_code"  name="j_country_phone_code" style="width: 15%; display: inline-block; vertical-align: middle;">';
                    str+=                '<option value="60">+60</option>';
                    str+=                    '<option value="61">+61</option>';
                    str+=                    '<option value="62">+62</option>';
                    str+=                    '<option value="63">+63</option>';
                    str+=                    '<option value="64">+64</option>';
                    str+=                    '<option value="65">+65</option>';
                    str+=                    '<option value="66">+66</option>';
                    str+=                    '<option value="81">+81</option>';
                    str+=                    '<option value="82">+82</option>';
                    str+=                    '<option value="83">+83</option>';
                    str+=                    '<option value="84">+84</option>';
                    str+=                    '<option value="86">+86</option>';
                    str+=                    '<option value="852">+852</option>';
                    str+=                    '<option value="853">+853</option>';
                    str+=                    '<option value="855">+855</option>';
                    str+=                    '<option value="856">+856</option>';
                    str+=                    '<option value="880">+880</option>';
                    str+=                    '<option value="886">+886</option>';
                     str+=               '</select>';
                      str+=              '<input required ="required" id="j_phone_number" name="j_phone_number"  style="width: 29.5%; display: inline-block; vertical-align: middle;" placeholder="Mobile" type="text" title="Enter your Mobile Number">';
		            
		            $('#phone_container').html( str);
		        }
		    }
		    
		    $(document).ready(function(){
		        $('#joinBtn').click(function(){
		             $.getJSON(
                        "http://gobigchina.net/index.php/ajax/get_phone_code",
                        function(data){
                            d_input = $('#direct_input');
                            s_input = $('#select_input');
                            d_input.hide();s_input.hide();
                            
                            if (data.result == 'ok'){
                                  $('#phone_container').html('');
                                 if (data.data){
                                    createElement('select');
                                    $('#j_country_phone_code').val(data.data.phone_code);
                                 }else {
                                    createElement('direct');
                                 }
                            }else if (data.result == 'error'){
                                alert('Temporarily Server Error');
                        }
                     });
		        });
		    });
		</script>
	</head>
	<body>
		<div id="wrap">
			<!-- header -->
			<div id="header">
				<div class="header_inr">
					<div id="signin_dptim">
						<i class="flaticon-time44"></i> <span id="dpTime"></span>
					</div>
					<div id="LoginTop" class="smallbox" >
						<div class="AfterLogin">
							<div class="icon_box">
								<i class="flaticon-network60"></i>&nbsp;<a href="http://gobigchina.net/index.php/info">TEST333</a>
							</div>
							<div class="logout">
								<a href="http://gobigchina.net/index.php/member/logout">Log Out</a>
							</div>
							<div class="Balance">
								<div class="e-wallet_login">
									<b>E-Wallet : </b><span><a href="http://gobigchina.net/index.php/e_wallet">52,792.00 CNY</a></span>
									<a href="#Deposit_app" class="PopSignUp T_small">DEPOSIT</a>
								</div>
								<div class="gamemoney_login">
									MG : <span>100.00</span>
								</div>
								<div class="gamemoney_login">
									PT : <span>100.00</span>
								</div>
							</div>
						</div>

					</div>
					<div class="sta_inr">
						<a href="http://gobigchina.net/"><img src="http://gobigchina.net/assets/images/baofa8-logo.png" alt="Baofa"></a>
					</div>
				</div>
				<!-- //header_inr -->
				<div class="Gnb">
					<div class="Gnb_inr">
						<nav>
							<ul class="navigation">
								<li id="home" class="nvselected">
									<a href="http://gobigchina.net/"><i class="flaticon-home113"></i></a>
								</li>
								<li id="livecasino">
									<a href="#livecasino">LIVE CASIONO</a>
								</li>
								<li id="mgslot">
									<a href="http://gobigchina.net/index.php/slot_main?g_vender=2">MG SLOT</a>
								</li>
								<li id="ptslot">
									<a href="http://gobigchina.net/index.php/slot_main?g_vender=1">PT SLOT</a>
								</li>
							</ul>
						</nav>
						<div class="sub_menu">
							<ul>
								<li>
									<a 
																		   href="http://gobigchina.net/index.php/info" 
																		    ><h3>Member</h3></a>
								</li>
								<li>
									<a href="#"><h3>Promotion</h3></a>
								</li>
								<li>
									<a href="#"><h3>VIP Club</h3></a>
								</li>
								<li>
									<a href="#"><h3>help</h3></a>
								</li>
								<li> 
								    									   <a href="http://gobigchina.net/index.php/langswitch/switchLanguage/china"><h4><img src="http://gobigchina.net/assets/images/flags/cn.gif" style="margin-top:3px;"> 简体中文</h4></a>
																	</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //header -->
    <!-- container -->
    <div id="container" class="main">
        <div id="Sub_title_inr">
            <div class="container_inr">
                <div class="Sub_title"><h1>MG SLOT <span>Microgaming Slots</span></h1></div>
            </div>
        </div>
        <!-- content -->
        <div id="content">
        
            <div class="content_main_section">
                <!-- Column 160px -->
				<div class="column160px">
					<div class="Sub_Vmenu">
						<ul>
							<li  class="cate " data-target="#cate_featured">
								<a href="http://gobigchina.net/index.php/slot_main">Featured</a>
							</li>
							<li  class="cate " data-target="#cate_slots">
								<a href="http://gobigchina.net/index.php/slot_main">Slots</a>
							</li>
							<li  class="cate " data-target="#cate_cardtable">
								<a href="http://gobigchina.net/index.php/slot_main">Card &amp; Table</a>
							</li>
							<li  class="cate " data-target="#cate_videopoker">
								<a href="http://gobigchina.net/index.php/slot_main">Video Poker</a>
							</li>
							<li class="cate " data-target="#cate_others">
								<a href="http://gobigchina.net/index.php/slot_main">Others</a>
							</li>
							<li class="cate " data-target="#cate_jackpots"> 
								<a href="http://gobigchina.net/index.php/slot_main">Jackpots</a>
							</li>
						</ul>
					</div>
				</div>

				<script>
					$(document).ready(function(){
						$('#game_list').jplist({
									itemsBox: '.list'
									, itemPath: '.list-item'
									, panelPath: '.jplist-panel'
									//data source
									, dataSource: {
										type: 'server'
										, server: {
											//ajax settings
											ajax: {
												url: 'http://gobigchina.net/index.php/slot_main/game_list' + "/" + "2"
												, dataType: 'html'
												, type: 'POST'
											}
										}
									}
								});
								
						$('.cate').click(function(e){
							e.preventDefault();
							$('#filter_text').val('');
							var target = $(this).attr('data-target');
							$(target).trigger('click');
						});
					});
				</script>                <!-- Column 840px -->
                <div class="column840px">
					
					<!-- Slot List -->
				    <!-- main content -->
                        
                <div id="game_list" class="jplist">
                    <!-- ios button: show/hide panel -->
                    <div class="jplist-ios-button">
                        <i class="fa fa-sort"></i>
                        jPList Actions
                    </div>
                                        
                    <!-- panel -->
                    <div class="jplist-panel panel-top">                        
                        <!-- filter by title -->
                        <div class="text-filter-box">
                                                                            
                            <!--[if lt IE 10]>
                            <div class="jplist-label">Filter by Title:</div>
                            <![endif]-->
                                                
                            <input 
                                id ='filter_text'
                                data-path=".title" 
                                data-button="#title-search-button"
                                type="text" 
                                value="" 
                                placeholder="Search" 
                                data-control-type="textbox" 
                                data-control-name="title-filter" 
                                data-control-action="filter"/>
                                                
                            <button type="button" id="title-search-button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                      
                        <div
                            style ="display:none" 
                            class="jplist-drop-down" 
                            data-control-type="filter-drop-down" 
                            data-control-name="category-dropdown-filter" 
                            data-control-action="filter">
                            
                            <ul>
                                <li><span data-path="default">Filter by category</span></li>
                                <li id ="cate_featured"><span data-path=".0">Featured</span></li>
                                <li id ="cate_slots"><span data-path=".1">Slots</span></li>
                                <li id ="cate_jackpots"><span data-path=".2">Jackpots</span></li>
                                <li id ="cate_cardtable"><span data-path=".3">Card & Table</span></li>
                                <li id ="cate_videopoker"><span data-path=".4">Video & Poker</span></li>
                                <li id ="cate_others" ><span data-path=".5">Others</span></li>
                                <li id ="cate_lives"><span data-path=".6">Lives</span></li>
                            </ul>
                        </div>
 
                        <!-- views -->
                        <div class="jplist-views" data-control-type="views" data-control-name="views" data-control-action="views" data-default="jplist-grid-view">
                                               
                            <button type="button" class="jplist-view jplist-grid-view" data-type="jplist-grid-view"></button>
							<button type="button" class="jplist-view jplist-list-view" data-type="jplist-list-view"></button>
                            
                        </div>
                                            
                        <!-- pagination results -->
                        <!--
                        <div 
                            class="jplist-label" 
                            data-type="Page {current} of {pages}" 
                            data-control-type="pagination-info" 
                            data-control-name="paging" 
                            data-control-action="paging">
                        </div>
                         -->                       
                        
                        <!-- pagination -->
                        <!--
                        <div 
                            class="jplist-pagination" 
                            data-control-type="pagination" 
                            data-control-name="paging" 
                            data-control-action="paging">
                        </div>  
                        -->
                        
                        <!-- preloader for data sources -->
                        <div class="jplist-hide-preloader jplist-preloader" data-control-type="preloader" data-control-name="preloader" data-control-action="preloader">
                            <img src="http://gobigchina.net/assets/front/jplist/img/common/ajax-loader-line.gif" alt="Loading..." title="Loading..." />
                        </div>

                    </div>
                    <!-- ajax content here -->   
                    <div class="list box text-shadow"></div>
                                        
                    <!-- no result found -->
                    <div class="box jplist-no-results text-shadow align-center jplist-hidden">
                        <p>No results found</p>
                    </div>
                                        
                    <!-- ios button: show/hide panel -->
                    <div class="jplist-ios-button">
                        <i class="fa fa-sort"></i>
                        jPList Actions
                    </div>
                                        
                    <!-- panel -->
                    <!--
                    <div class="jplist-panel box panel-bottom" style="margin: 0 0 20px 0">                      
                                                                    
                        <div 
                            class="jplist-drop-down left" 
                            data-control-type="items-per-page-drop-down" 
                            data-control-name="paging" 
                            data-control-action="paging"
                            data-control-animate-to-top="true">
                                                
                            <ul>
                                <li><span data-number="3"> 3 per page </span></li>
                                <li><span data-number="5"> 5 per page </span></li>
                                <li><span data-number="10" data-default="true"> 10 per page </span></li>
                                <li><span data-number="all"> View All </span></li>
                            </ul>
                        </div>
                        <div 
                            class="jplist-drop-down left" 
                            data-control-type="sort-drop-down" 
                            data-control-name="sort" 
                            data-control-action="sort"
                            data-control-animate-to-top="true">
                                                
                            <ul>
                                <li><span data-path="default">Sort by</span></li>
                                <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                <li><span data-path=".like" data-order="asc" data-type="number">Likes asc</span></li>
                                <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                            </ul>
                        </div>
                        -->                    
                        <!-- pagination results -->
                        <!--
                        <div 
                            class="jplist-label" 
                            data-type="{start} - {end} of {all}" 
                            data-control-type="pagination-info" 
                            data-control-name="paging" 
                            data-control-action="paging">
                        </div>
                                                
                        <!-- pagination -->
                        <!--
                        <div 
                            class="jplist-pagination" 
                            data-control-type="pagination" 
                            data-control-name="paging" 
                            data-control-action="paging"
                            data-control-animate-to-top="true">
                        </div>                  
                    </div>
					-->
                </div>
					<!-- //Slot List -->
         
            </div>
			<!-- //Column 840px -->
        </div>  
		<!-- //content_main_section -->

            
        </div>
        <!-- //content -->
    </div>
    <!-- //container -->

<!-- footer -->
<div id="footer">
	<div class="footer_inr">

		<div class="footer_cs">
			<h4>NEED HELP?? <span class="small">CALL US 24/7:</span></h4>

			<ul class="menu-icon">
				<li>
					<span class="icon flaticon-phone403"></span><span class="numcs">+83 547-1111 / +83 547-2222</span>
				</li>
				<li>
					<span class="icon flaticon-qq3"></span>QQ : <b>123343</b>
				</li>
				<li>
					<span class="icon flaticon-skype12"></span>SKYPE : <b>Baofa.cs1</b>
				</li>
				<li>
					<span class="icon flaticon-speech117"></span><a href="#">LIVE CHAT</a>
				</li>
			</ul>
		</div>

		<div class="copy_menu footer_sub">
			<ul>
				<li>
					<a href="#">About Us</a>
				</li>
				<li>
					<a href="#">Banking</a>
				</li>
				<li>
					<a href="#">Affiliate Program</a>
				</li>
				<li>
					<a href="#">Contact Us</a>
				</li>
			</ul>
			<div class="logo"><img src="http://gobigchina.net/assets/images/footer_logo.png">
			</div>
			<div class="brand"><img src="http://gobigchina.net/assets/images/microgaming.png" style="margin-right:15px"><img src="http://gobigchina.net/assets/images/playtech.png" style="margin-top:3px">
			</div>
		</div>

	</div>
	<div id="footer_copy">
		<div class="copy_area">
			<div class="copyright">
				Copyright © <strong>Baofa Corp.</strong> All Rights Reserved.			</div>
			<div class="copy_menu">
				<ul>
					<li>
						<a href="#">Terms of Service</a>
					</li>
					<li>
						<a href="#"></a>
					</li>
					<li>
						<a href="#">Site Map</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //footer -->
</div>
<!-- //wrap #######################################################################-->
<a href="#" class="scrollToTop"></a>

<!-- Deposit Modal -->
<div id="Deposit_app" style="display: none;">
	<div id="Deposit_app">
		<div class="modal-header"><h1>Deposit</h1></div>
		<div class="modal-container">
			<div class="form-container">
			    <form id ="deposit_form" name =" deposit_form" method ="POST" target ="hiddenframe" action ="http://gobigchina.net/index.php/e_wallet/deposit">
				<section>
					<h2 class="title">Bank Transfer</h2>
					신청 후 입금하실 계좌를 전송해 드립니다.
					<hr>                
						<div class="row">
							<label>Sender Name</label>
							<input id="user_no" name = "user_no"  type="hidden" value="655" >
							<input id="user_name" name="sender_name" placeholder="Sender Name" type="text" value="asas">
						</div>
						<div class="row">
							<label>Amount</label>
							<div class="amount_btn">
								<button type ="button" data-amount ="100" class ="deposit_amount_button"_>100</button>
								<button type ="button" data-amount ="500" class ="deposit_amount_button">500</button>
								<button type ="button" data-amount ="1000" class ="deposit_amount_button">1,000</button>
								<button type ="button" data-amount ="5000" class ="deposit_amount_button">5,000</button>
								<button type ="button" data-amount ="10000" class ="deposit_amount_button">10,000</button>
								<button type ="button" data-amount ="50000" class ="deposit_amount_button">50,000</button>
								<button type ="button" data-amount ="100000" class ="deposit_amount_button">100,000</button>
								<button type ="button" class ="deposit_amount_button">Reset</button>
							</div>
						</div>                                      
						<div class="row" style="margin-top:5px;margin-bottom:10px">
							<label></label>
							<input class="invalid amount_input" id="deposit_amount" name="deposit_amount" placeholder="Amount" type="text" value="" > <b>CNY</b>
						</div>
					<hr>
					<script>
					    $(document).ready(function(){
					        $('.deposit_amount_button').click(function(){
                                var sel_amount = parseInt($(this).attr('data-amount'));
                                var cur_amount = $('#deposit_amount').val();
                                if (cur_amount  == ''){
                                    cur_amount = 0;
                                }else {
                                    cur_amount  = parseInt(cur_amount.replace(',',''));
                                }
                                if (sel_amount == 'Reset'){
                                   $('#deposit_amount').val('');
                                }else {
                                    var total_deposit = sel_amount + cur_amount;
                                   $('#deposit_amount').val(total_deposit);
                                    $('#deposit_amount').trigger('change');
                                }
                            });
                            
                            $('#deposit_amount').change(function(){
                                $(this).val($.number($(this).val()));
                            });
					    });
					</script>
					<div class="row">
						<label></label>
						  <input type ="submit" class="joinbutton lostloginbutton2" value ="Deposit Now">
					</div>
				</section>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //Deposit Modal -->

<!-- Withdrawal Modal -->
<div id="Withdrawal_app" style="display: none;">
	<div id="Withdrawal_app">
		<div class="modal-header"><h1>Withdrawal</h1></div>
		<div class="modal-container">
			<div class="form-container">
				<h2 class="title">Bank Transfer</h2>
				출금자 명은 입금자 명과 동일해야 합니다.
				<hr>
				 <form id ="withdraw_form" name ="withdraw_form" method ="POST" target ="hiddenframe" action ="http://gobigchina.net/index.php/e_wallet/withdraw">
				<section>
									
						<div class="row">
							<label><b>Bank Account</b></label>
								 <select id="bank_account_req" name="bank_account_req" style="width:75%">
									<option value="0">Direct Input</option>
    									
									<option value="21" >
									    1  -  test | test bank | rerere | 212121212									</option>
    									
								</select>
						</div>
						
						<div class="row">
							<label>Holder Name</label>
							<input id="holder_name" name="holder_name" placeholder="User Name" type="text" value=""> 가입시 성명과 같아야 합니다.
						</div>
						<div class="row">
							<label>Bank Name</label>
							<input id="bank_name" name="bank_name" placeholder="Bank Name" type="text" value="" >
						</div>
						<div class="row">
							<label>Branch Name</label>
							<input id="bank_branch" name="bank_branch" placeholder="Branch Name" type="text" value="" >
						</div>
						<div class="row">
							<label>Account Num</label>
							<input id="bank_account" name="bank_account" placeholder="Account Number" type="text" value="" >
						</div>
						<div class="row">
							<label>e-Wallet</label>
							<div class="e_Balance" >Balance : <strong id ="wallet_balance" data-balance ="52792">52,792.00 CNY </strong> </div>
						</div>
						<div class="row" style="margin-bottom:10px">
							<label>Amount</label>
							<input class="invalid amount_input" id="withdraw-amount-input" name="withdraw_amount_input" placeholder="Amount" type="text" value="" > <b>CNY</b>
						</div>
					<hr>
					<div class="row">
						<label></label>
						<div class="joinbutton lostloginbutton2" id ="withdraw_now">
						 Withdrawal Now
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<script>
    
    $(document).ready(function(){
        $('#bank_account_req').change(function(){
            if ($('#bank_account_req').val() == '0'){
                $('#holder_name').val(""); 
                $('#bank_name').val(""); 
                $('#bank_branch').val(""); 
                $('#bank_account').val(""); 
            }
            var str = $('#bank_account_req option:selected').text();
            $('#holder_name').val(trim(str.split('|')[0].split('-')[1])); 
            $('#bank_name').val(trim(str.split('|')[1])); 
            $('#bank_branch').val(trim(str.split('|')[2])); 
            $('#bank_account').val(trim(str.split('|')[3])); 
        });
        
        $('#withdraw_now').click(function(){
            var el = $('#withdraw-amount-input');
            var withdraw_amount_str = $("#withdraw-amount-input").val().replace(/,/gi,'');
            if (withdraw_amount_str.length < 1) {
                alertAndclearElement("출금하실 금액을 입력해주세요",el);
                return false;
            }
            if (!$.isNumeric(withdraw_amount_str)) {
                alertAndclearElement("숫자만 입력해 주세요",el);
                return false;
            }
            var wallet_balance = parseInt($('#wallet_balance').attr('data-balance'));
            var withdraw_amount =  parseInt(withdraw_amount_str);
            
            if (withdraw_amount > wallet_balance ){
                alertAndclearElement('출금금액이 현재 잔액를 초과했습니다',el);
                return false;
            }
            
            if (withdraw_amount >= withdraw_limit.min_limit && withdraw_amount <= withdraw_limit.max_limit){
                document.withdraw_form.submit();
            }else {
                var alertMes = '출금 금액은 ' + $.number(withdraw_limit.min_limit) + " 이상 " +  $.number(withdraw_limit.max_limit) + " 이하여야 합니다";
                alertAndclearElement(alertMes,el);
                return false;   
            }
        });
        
        $('#withdraw-amount-input').change(function(){$(this).val($.number($(this).val()));});
        $('#withdraw-amount-input').keyup(function(){$('#withdraw-amount-input').trigger('change');});
    });
    
    function alertAndclearElement(m,el){
        alert(m);
        el.val('');
        el.focus();
    }
    
    function trim(str){
         return str.replace(/(^\s*)|(\s*$)/gi, "");
    }
</script>            
<!-- //Withdrawal Modal -->

<!-- Transfer To Game Modal -->
<div id="TransferToGame" style="display: none;">
	<div id="Deposit_app">
		<div class="modal-header"><h1>Transfer To Game</h1></div>
		<div class="modal-container">
			<div class="form-container">
				<section>
					<h2 class="title" id ="transfer_game_title"></h2>
					<h4 class ="title2" id ="transfer_game_title"></h4>
					<hr>            
					
						<div class="row">
							<label>e-Wallet</label>
							<div class="e_Balance">Balance : <strong>52,792 CNY </strong> </div>
						</div>
						<div class="row">
							<label>Game Select</label>
								 <select id="GameSelect" name="GameSelect">
									<option value="">Choice Game</option>
									<option value="MGcasino" selected="selected">MG Live / Slot</option>
									<option value="PTcasino">PT Live / Slot</option>
								</select>
						</div>                            
						<div class="row" style="margin-bottom:10px">
							<label>Transfer Amount</label>
							<input class="invalid amount_input transfer_amount" id="transfer_amount" name="transfer_amount" placeholder="Amount" type="text" value="" > <b>CNY</b>
						</div>
					<hr>
					<div class="row">
						<label></label>
						<div class="joinbutton lostloginbutton2">
						 Transfer Now
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<!-- //Transfer To Game Modal -->

<!-- Transfer To Wallet Modal -->
<div id="TransferToWallet" style="display: none;">
	<div id="Deposit_app">
		<div class="modal-header"><h1>Transfer To e-Wallet</h1></div>
		<div class="modal-container">
			<div class="form-container">
				<section>
					<h2 class="title" id ="transfer_wallet_title"></h2>
                    <h4 class ="title2" id ="transfer_wallet_title2"></h4>
					<hr>                
						<div class="row money mg_money" style ="display:none">
							<label id ="mg_game_vender">MG Casino</label>
							<div id = "mg_game_money" class="game_Balance">100.00 元</div>
						</div>
						<div class="row money pt_money" style ="display:none">
                            <label id ="pt_game_vender">PT Casino</label>
                            <div id = "pt_game_money" class="game_Balance">100.00 元</div>
                        </div>
						<div class="row" style="margin-bottom:10px">
							<label>Transfer Amount</label>
							<input class="invalid amount_input transfer_amount" id="transfer_amount" name="transfer_amount" placeholder="Amount" type="text" value="" > <b>CNY</b>
						</div>
					<hr>
					<div class="row">
						<label></label>
						<div class="joinbutton lostloginbutton2">
						 Transfer Now
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<!-- //Transfer To Game Modal -->

<!-- Lost Login Modal -->
<div id="LostLogin" style="display: none;">
	<div id="lostlogin">
		<div class="modal-header">
			<h1>Lost Login?</h1>
		</div>
		<form role="form" target ="hiddenframe" name ="search_password_form" id ='search_password_form' method="POST" action ="http://gobigchina.net/index.php/member/password_reset">
			<div class="modal-container">
				<div class="form-container">
					<div>
						If you have forgotten your password, then please fill out the following form.
						<br>
						A temporary password will be forwarded to your e-mail which you can use for resetting your password.
						<hr>

						<section>
							<div class="row">
								<label>User ID</label>
								<input id="s_user_id" required ="required" name="s_user_id" placeholder="User ID" type="text" class="invalid" title="Please provide your User ID">
							</div>
							<div class="row">
								<label>Email</label>
								<input id="s_user_email" required ="required" name="s_user_email" placeholder="Email" type="text" title="Enter your email address">
							</div>
							<div class="row">
								<label></label>
								<p>
									You will be sent a temporary password to your email
								</p>
							</div>
						</section>

						<hr>
						<div class="row">
							<label></label>
							<button class="joinbutton lostloginbutton2" type ="submit" />Send New Password</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- //Lost Login Modal -->

<!-- Sign Up Modal -->
<div id="PopSignUp" style="display: none;">
	<div id="signup">
		<div class="modal-header">
			<h1>Create a new account</h1>
		</div>
		<div class="modal-container">
			<div class="banner-container"><img src="http://gobigchina.net/assets/images/join_promotion.jpg">
			</div>
			<form role="form" name ="join_form" id ='join_form' method="POST" target ="hiddenframe" action="http://gobigchina.net/index.php/member/join" >
				<div class="form-container" >
					
						<h2 class="title">Get started for free</h2>
						<hr>
						<section>
						    							<div class="row">
								<label>User ID</label>
								<input required ="required" id="j_user_id" name="j_user_id" placeholder="User ID" type="text" class="invalid" title="This must be 6-14 characters long using letters, numbers and underscores only">
							</div>
							<div class="row">
								<label>Password</label>
								<input required ="required" id="j_user_password" name="j_user_password" autocomplete="off" placeholder="Password" type="password" title="Your password has to be at least 6 characters long and must contain at least an uppercase letter and a digit">
							</div>
							<div class="row">
								<label>Repeat Password</label>
								<input required ="required" id="j_repeat_password" name="j_repeat_password" autocomplete="off" placeholder="Repeat Password" type="password" title="Please re-enter your password">
							</div>
							<div class="row">
								<label>Email</label>
								<input required ="required" id="j_user_email" name="j_user_email" placeholder="Email" type="text" title="Enter your email address">
							</div>
							<div class="row label-container">
								<label style="margin-top:0">Gender</label>
								<input autocomplete="off" checked="checked" id="j_gender_male" name="j_gender" type="radio" value="M" />
								Male
								<input autocomplete="off" id="j_gender_femail" name="j_gender" type="radio" value="F" />
								Female
							</div>
							<div class="row">
								<label>User Name</label>
								<input required ="required" id="j_user_name" name="j_user_name" placeholder="User Name" type="text" title="Enter your Name">
							</div>
                            <div class="row" >
                                <label>Messenger</label>
                                    <select id="j_im_type" name="j_im_type" style="width: 15%; display: inline-block; vertical-align: middle;">
                                        <option value="QQ" selected="selected">QQ</option>
                                        <option value="SKYPE">Skype</option>
                                        <option value="KAKAO">Kakao</option>
                                        <option value="Not">Not</option>
                                    </select>
                                    <input required ="required" id="j_im_id" name="j_im_id" style="width: 29.5%; display: inline-block; vertical-align: middle;" placeholder="Messenger ID" type="text" title="Enter your Mobile Number">
                            </div>
                            
                             <div class ="row" id ="phone_container">
                                 
                             </div>
                        
                		      <div class="opt-ins">
                                    <div class="row">
                                         <div class="AgreeCheck">
                                            <input required ="required" id="agree_adult" value ="Y" name ="agree_adult" type="checkbox" name="is_adult" atocomplete="off" checked="checked">
                                             Yes, confirm that I am over 18 years old
                                         </div>
                                    </div>
                              <div class="row">
                                   <div class="AgreeCheck">
                                       <input required ="required" id="agree_term" autocomplete="off" name="agree_term" type="checkbox" value ="Y">
                                        I accept the
                                       <a href="#" id="terms" class="white">Terms & Conditions</a>, <a href="#" id="Cookie" class="white">Cookie Policy</a>
                                   </div>
								</div>
							</div>
                                    <hr>
                               <div class="row">
                                   <label></label>
                                   <button class="joinbutton joinbutton2"  type ="submit" />Open Account</button>
                                </div>

                          </section>
					</div>
					<!-- //form-container -->
				</form>
			</div>
	</div>
</div>
<!-- //Sign Up Modal -->
<!-- 폼 전송을 위한 히든 프레임-->
<iframe name="hiddenframe"  border="1" frameborder="1" width="100%" height="500" style="display:none"></iframe>


</body>
</html>
