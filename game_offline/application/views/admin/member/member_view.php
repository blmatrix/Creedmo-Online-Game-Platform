 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Members</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Members</span></li>
								<li><span>Member view</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="<?=base_url('assets/');?>/images/user-bg.jpg" class="rounded img-responsive" alt="Kinguser">
										<div class="thumb-info-title">
											<span class="thumb-info-inner"><?= $user -> user_id?></span>
											<?php if ($user -> login_status  == 'Y'):?>
											     <span class="thumb-info-type"><strong>Online</strong></span>
											<?php else:?>
											       <span class="thumb-info-type"><strong>Offline</strong></span>
											<?php endif;?>
										</div>
									</div>

									<div class="widget-toggle-expand mb-md">
										<div class="widget-header">
											<h6>승급 레벨 완성도</h6>
											<div class="widget-toggle"></div>
										</div>
										<div class="widget-content-collapsed">
											<div class="progress progress-sm light">
												<div id ="progress-bar" class="progress-bar" role="progressbar" 
												    aria-valuenow="<?=$total_comp_point / $next_user_level -> promotion_level_point * 100?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$total_comp_point / $next_user_level -> promotion_level_point * 100?>%;">
													<?=number_format($total_comp_point / $next_user_level -> promotion_level_point * 100)?> &nbsp;%
												</div>
											</div>
										</div>
									
										<div class="widget-content-expanded">
											<h5>Level  <span class="label label-primary "><?= $cur_user_level-> user_level_code_name?></span> </h5>
											
											<ul class="simple-todo-list">
												<li class="completed">Level Point : <a href="#"><strong><?= number_format($total_comp_point)?></strong></a></li>
												<li class="completed">Comp Point : <a href="#"><strong><?= number_format($wallet -> comp_point,2)?></strong></a></li>
											</ul>
										</div>
									</div>

									<hr class="dotted short">

									
									<div class="clearfix">
									    <a href="#"  data-url = "<?= site_url('admin/member/form')?>?request_no=<?=$user-> user_no?>&request_form=coupon&request_type=create" class="mb-xs mt-xs mr-xs btn btn-primary btn-sm btn-block coupon-create" role="button">Bounus Coupon  <i class="fa fa-plus"></i></a>
									</div>

									<hr class="dotted short">

									<div class="social-icons-list">
										<!-- <div class="text-center">
											<button type="submit" class="btn btn-warning">1:1 Chat</button>
											<button type="submit" class="btn btn-warning">SMS</button>
											<button type="submit" class="btn btn-warning">E-mail</button>
										</div> -->
									</div>

								</div>
							</section>

							<h4 class="mb-md">평균 입/출 <small><a class=" pull-right" href="#">View Report</a></small></h4>
							
							<ul class="simple-card-list mb-xlg text-right">
								<li class="success">
									<h3><?= number_format($wallet -> average)?> 원</h3>
									<p>입금 - 출금</p>
								</li>
								<li class="primary">
									<h3><?= number_format($wallet -> total_deposit_amount)?> 원</h3>
									<p>입금 총액</p>
								</li>
								<li class="danger">
									<h3><?= number_format($wallet -> total_withdraw_amount)?> 원</h3>
									<p>출금 총액</p>
								</li>
							</ul>
						</div>
						
						
						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li <?php if ($cur_tab == 'overview'):?> class="active" <?php endif;?> >
										<a href="<?= site_url('admin/member/member_tab_view'); ?>/<?= $user-> user_no?>/overview"  data-target="#overview" id="overview_tab" data-toggle="tabajax">기본정보</a>
									</li>
									<li <?php if ($cur_tab == 'account'):?> class="active" <?php endif;?>  >
										  <a href="<?= site_url('admin/member/member_tab_view'); ?>/<?= $user-> user_no?>/account"  data-target="#account" id="account_tab" data-toggle="tabajax">출금통장</a>
									</li>
									<li <?php if ($cur_tab == 'affiliate'):?>class="active" <?php endif;?> >
									   <a href="<?= site_url('admin/member/member_tab_view'); ?>/<?= $user-> user_no?>/affiliate"  data-target="#affiliate" id="affiliate_tab" data-toggle="tabajax">파트너정보</a>
									</li>
									<!-- <li <?php if ($cur_tab == 'affiliate_payment'):?>class="active" <?php endif;?> >
										     <a href="<?= site_url('admin/member/member_tab_view'); ?>/<?= $user-> user_no?>/affiliate_payment"  data-target="#affiliate_payment" id="affiliate_payment_tab" data-toggle="tabajax">파트너 정산</a>
									</li> -->
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane <?= $cur_tab == 'overview' ? 'active':''?>">
									</div>
									<div id="account" class="tab-pane <?= $cur_tab == 'account' ? 'active':''?>">
									</div>
									<div id="affiliate" class="tab-pane <?= $cur_tab == 'affiliate' ? 'active':''?>">
									</div>
									<div id="affiliate_payment" class="tab-pane <?= $cur_tab == 'affiliate_payment' ? 'active':''?>">
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-3">

							<h4 class="mb-md">파트너 <small><a class=" pull-right" href="#">View Report</a></small></h4>
							<ul class="simple-card-list mb-xlg">
								<li class="dark">
									<h3><?= number_format($user -> deps1_child_count)?>/<?= number_format($user -> deps1_child_count)?></h3>
									<p>1 차 회원 / 2 차 회원</p>
								</li>
								<li class="dark">
									<h3>189,000 원</h3>
									<p>이번달 정산액 ing...</p>
								</li>
								<li class="dark">
									<h3>389,000 원</h3>
									<p>지난달 정산액</p>
								</li>
							</ul>

							<h4 class="mb-md">User Stats <small><a class=" pull-right" href="<?= site_url('admin/statistics/average_profile_visit')?>?search_keyword=<?=$user-> user_id?>">View Report</a></small></h4>
							<ul class=" mb-xlg">
								<li>
									OS : <?= $last_login_log  ? $last_login_log -> platform:''?><br>
								    BROWSER : <?= $last_login_log ? $last_login_log -> browser:''?> <?= $last_login_log ? $last_login_log -> browser_version:''?>
								</li>
								<li>가입시간 : <?= $user ? time_to_string($user -> join_date):''?><br>
									가입 IP  : <strong><?= $user ? $user-> join_ip:''?></strong>  
									<?php if (!empty($country)):?>
                                    <img src="<?=base_url('assets/');?>/images/flags/<?=strtolower($country -> country_code)?>.gif" alt="<?= $country -> country_name?>" height="13px"></li>
                                    <?php endif;?>
								</li>
								<li>최근 로그인 : <?= $last_login_log ? time_to_string($last_login_log -> reg_date) : ''?><br>
									최근 로그인 IP : <strong> <?= $last_login_log ? $last_login_log -> ip: ''?> </strong> 
									<?php if (!empty($last_login_log)):?>
									<img src="<?=base_url('assets/');?>/images/flags/<?= strtolower($last_login_log -> country_code)?>.gif" alt="<?= $last_login_log -> country?>" height="13px"></li>
									<?php endif;?>
									
							</ul>

							<!-- <h4 class="mb-md">1:1 Chat Log <small><a class=" pull-right" href="#">View Report</a></small></h4>
							<ul class="simple-bullet-list mb-xlg">
								<li class="green">
									<span class="title">Joseph Junior</span>
									<span class="message">进入游戏界面 游戏界面 戏界面 游戏界面 戏界面 游戏界面....</span>
								</li>
								<li class="green">
									<span class="title">Joe Junior</span>
									<span class="message">进入游戏界面 戏界面 游戏界面</span>
								</li>
								<li class="green">
									<span class="title">Joseph Doe Junior</span>
									<span class="message">进入游戏界面 戏界面 游戏界面</span>
								</li>
							</ul> -->
						</div>

					</div>
					
					   <script>
					        var mg_play_check_url = "<?=$mg_play_check_url?>";
					        var pt_play_check_url = "<?=$pt_play_check_url?>";
					        var selected_tab = 'overview';
                                $(document).ready(function() {
                                    $('[data-toggle="tabajax"]').click(function(e) {
                                        var $this = $(this),
                                        loadurl = $this.attr('href'),
                                        targ = $this.attr('data-target');
                                        selected_tab  = targ.substring(1);
                                        $.get(loadurl, function(data) {
                                            $(targ).html(data);
                                        });
                                    
                                        $this.tab('show');
                                        return false;
                                    });
                                    
                                    $('#overview_tab').click();
                                                                        
                                    $('.coupon-create').click(function() {
                                        openModal($(this).attr('data-url'));    
                                    });
                                }); 
                          </script>
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>
