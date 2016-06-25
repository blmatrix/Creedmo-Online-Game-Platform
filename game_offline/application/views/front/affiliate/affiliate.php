<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="main">
        <div id="Sub_title_inr">
            <div class="container_inr">
                <div class="Sub_title"><h1><?= lang('member') ?> <span><?= lang('affiliate') ?></span></h1></div>
            </div>
        </div>
        <!-- content -->
        <div id="content">
        
            <div class="content_main_section">
                <!-- Column 250px -->
<?php
include_once APPPATH . "views/front/template/side.php";
?>
                <!-- Column 750px -->
                <div class="column750px Mainform-container">

                    <div id="member_container">
                        
                        <ul class="MemberTabs">
                            <li class="MemberTabs-link current" data-tab="tab-1"><?= lang('affiliate') ?> Detail</li>
							<!-- <li class="MemberTabs-link" data-tab="tab-2">Reports</li>
                            <li class="MemberTabs-link" data-tab="tab-2">Request Payment</li>
							<li class="MemberTabs-link" data-tab="tab-2"><?= lang('history') ?></li> -->
                        </ul>
                        <hr class="style-1">
                        <div id="tab-1" class="MemberTabs-content current">
                        
							<div class="box">
								<div class="user-info_avatar">
									<div class="avatar-wrapper">
										<img alt="no-thumbnail" class="" height="80" src="<?=base_url('assets/'); ?>/images/default-user.jpg" width="80">
									</div>
								</div>							
								<div class="user-info_details">
									<h2 class="user-info_username"><?= $user -> user_id?></h2>
									<div class="user-info_badges">
										<ul class="badges">
											<li><?= lang('affiliate') ?> CODE : <b><?= $user -> affiliate_code?></b></li>
										</ul>
									</div>
								</div>
								<div class="user-info_btn">
                                    <a href="<?=site_url('brand')?>" target="_blank" class="button_black banking PopSignUp">파트너 정산내역</a>                             
                                </div>
                                
                                
								<div class="URL_thru"> <i class="flaticon-star174"></i> 회원님의 추천인 코드 : 
								    <strong><?= $user -> affiliate_code?></strong> 
								</div>
								
							</div>
							
                            <h4>맥스라이브는 추천인 코드가 없으면 가입이 되지 않습니다.</h4>
                            <h4>친구분들께 상단 파트너 Code를 알려주세요.</h4>
                            <p class="info">- 소개받은 회원은 물론 그 회원이 소개한 회원까지 정산됩니다.</p>
                            <p class="info">- 온라인을 통한 홍보 또는 무작위 다수를 향한 홍보는 어떠한 경우에도 허가되지 않습니다. <br>발견즉시 회원님의 계정과 코드가 회수 됨을 유념해 주시기 바랍니다.</p>


                        </div>
                        <!-- //tab-1 -->
                        <div id="tab-2" class="MemberTabs-content "> 
                        
                            <h4>Coupon <?= lang('history') ?></h4>
                            <p class="info"> - 사용하신 쿠폰 리스트입니다.</p>
                            
								<div class="table-responsive">
									<table class="table invoice-items">
										<thead>
											<tr class="h5 text-dark">
												<th class="text-weight-semibold">User ID</th>
												<th class="text-right  text-weight-semibold">Slots </th>
												<th class="text-right  text-weight-semibold">Non Slots</th>
												<th class="text-right text-weight-semibold">Live </th>
												<th class="text-right text-weight-semibold">Total</th>
												<th class="text-right text-weight-semibold">Bonus</th>
												<th class="text-right text-weight-semibold">Coupon</th>
												<th class="text-right text-weight-bold">Total Commission</th>
											</tr>
										</thead>
										<tbody>
   										    
											<tr>
												<td> <strong>TOPAYC0011</strong></td>
												<td class="text-right text-weight-bold text-primary h5">1.47 (0.1)</td>
												<td class="text-right text-weight-bold text-primary h5">25.2  (0.05) </td>
												<td class="text-right text-weight-bold text-primary h5">6.25 (0.1) </td>
												<td class="text-right text-weight-semibold text-primary h4">32.92 </td>
												<td class="text-right text-weight-semibold text-danger h5">2120.97 (0.1)</td>
												<td class="text-right text-weight-semibold text-danger h5">1000.00 (0.1)</td>
												<td class="text-right text-weight-semibold text-primary h4">-310.065</td>
											</tr>
            											<tr  style="background:#f5f5f5; ">
												<td style="padding-left:20px"><i class="fa fa-angle-right"></i>  <strong>TEST222</strong></td>
												<td class="text-right text-weight-semibold text-primary">0 (0.05)</td>
												<td class="text-right text-weight-semibold text-primary">-2.5 (0.02)</td>
												<td class="text-right text-weight-semibold text-primary">0 (0.05)</td>
												<td class="text-right text-weight-bold text-primary"><h5 style="margin:0">-2.5</h5></td>
												<td class="text-right text-weight-semibold text-danger">21.00 (0.05)</td>
												<td class="text-right text-weight-semibold text-danger">0 (0.05)</td>
												<td class="text-right text-weight-bold text-primary"><h5 style="margin:0">-1.1</h5></td>
											</tr>
        											
    											
     											

										</tbody>
									</table>
								</div>


                        </div>
                        <!-- //tab-2 -->
                        <div id="tab-3" class="MemberTabs-content">
                            <h4>Cancel Withdrawal</h4>
                            <p class="info"> - 아직 출금되지 않은 출금내역을 취소하시면 다시 e-Wallet으로 출금 금액이 반환 됩니다.</p>
                            
                            <div class="box">
                                <div class="table-responsive">                              
                                    <table class="table mb-none">
                                        <thead>
                                            <tr height="30px">
                                                <th>#</th>
                                                <th>Type</th>
                                                <th class="text-right">Withdrawal</th>
                                                <th class="text-right">Date</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2</td>
                                                <td>Withdrawal</td>
                                                <td class="text-right tred">
                                                    <strong>400,000.00</strong>    
                                                </td>
                                                <td class="text-right"><small>15-08-07 09:53</small></td>
                                                <td class="text-right"><a href="#" class="button_small rightbtn"><i class="flaticon-delete30"></i> Cancel Withdrawal </a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Withdrawal</td>
                                                <td class="text-right tred">
                                                    <strong>400,000.00</strong>    
                                                </td>
                                                <td class="text-right"><small>15-08-07 09:53</small></td>
                                                <td class="text-right"><a href="#" class="button_small rightbtn"><i class="flaticon-delete30"></i> Cancel Withdrawal </a></td>
                                            </tr>                                           
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                            
                        </div>
                        <!-- //tab-3 -->
                            
                    </div>
                    <!-- //member_container -->
                
                </div>
            </div>

            
        </div>
        <!-- //content -->
    </div>
    <!-- //container -->

<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
