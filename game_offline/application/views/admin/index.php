
 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
 <script>
 child_win = null;
 count = 1;
     function openWindow(){
         child_win = window.open('http://www.naver.com','window팝업','width=300, height=300, menubar=no, status=no, toolbar=no');
         //child_win.onunload = function() {  $('#ahn').html('Window closed'); }
         $(child_win).bind('beforeunload', function(){
             count ++;
             $('#ahn').html('Window closed --> '  + count);
         });
       
     }
 </script>
			<div class="inner-wrapper">
			 <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>    

				<section role="main" class="content-body">
					<header class="page-header">
						<h2 id ="ahn">Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= site_url('admin/index/index');?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span> <span><?=$address?></span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					   <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-primary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-primary">
                                                        <i class="fa fa-money"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">오늘수익</h4>
                                                        <div class="info">
                                                            <strong class="amount"><?= number_format($today_summary['total_profit'],0)?> 원</strong>
                                                            <span class="text-primary"></span>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <!-- <a class="text-muted text-uppercase">(Bank Report)</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-secondary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-secondary">
                                                        <i class="fa fa-bar-chart"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">이번주 수익</h4>
                                                        <div class="info">
                                                           <strong class="amount"><?= number_format($week_summary['total_profit'],0)?> 원</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <!-- <a class="text-muted text-uppercase">(Report)</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-tertiary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-tertiary">
                                                        <i class="fa fa-group"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">회원 - 활성유저/가입유저</h4>
                                                        <div class="info">
                                                            <strong class="amount"><?= number_format($active_user_count)?>/<?= number_format($total_user_count)?></strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <!-- <a class="text-muted text-uppercase">(Report)</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6">
                                    <section class="panel panel-featured-left panel-featured-quartenary">
                                        <div class="panel-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-quartenary">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Today's Visitors / Now</h4>
                                                        <div class="info">
                                                            <strong class="amount">3765/36</strong>
                                                        </div>
                                                    </div>
                                                    <div class="summary-footer">
                                                        <!-- <a class="text-muted text-uppercase">(report)</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-md-12 col-lg-12 col-xl-12">
							<section class="panel">
							    <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                            
                                    <h2 class="panel-title"><strong>Game Play Profit</strong></h2>
                                </header>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<div class="chart-data-selector" id="salesSelectorWrapper">
												<!-- <h2> -->
												    <!-- Profit:  -->
												       <div class="input-daterange input-group" id="datepicker1">
                                                            <input type="text"  size="15" class="input-sm form-control" name="start_time1" id ="start_time1" />
                                                            <span class="input-group-addon">to</span>
                                                            <input type="text"  size="15" class="input-sm form-control" name="end_time1" id ="end_time1"/>
                                                        </div>
												    </br>
														<select class="form-control" id="querySearchType" name ="querySearchType">
                                                            <option value="monthly" selected>Monthly</option>
                                                            <option value="daily">Daily</option>
                                                        </select>
														<select class="form-control" id="salesSelector" name ="salesSelector">
															<option value="99" selected= "selected"><small></small>Total Profit</option>
															<option value="<?= VENDER_MG?>" >Microgaming</option>
															<option value="<?= VENDER_PT?>" >Playtech</option>
														</select>
												<!-- </h2> -->
												</br>
												<div id="salesSelectorItems" class="chart-data-selector-items mt-sm" >
													<div class="chart chart-md" data-sales-rel="99" id="flotDashSales1" class="chart-active"></div>
													<div class="chart chart-md" data-sales-rel="<?= VENDER_MG?>" id="flotDashSales2" class="chart-hidden"></div>
													<div class="chart chart-md" data-sales-rel="<?= VENDER_PT?>" id="flotDashSales3" class="chart-hidden"></div>
												</div>
                                        
											</div>
										</div>
									
									</div>
								</div>
							</section>
						</div>
					</div>
					<div class="row">
    					<div class="col-md-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                                     <h2 class="panel-title"><strong>Deposit - Withdraw</strong></h2>
                                </header>
                                <div class="panel-body">
                                    <div class="chart-data-selector" id="salesSelectorWrapper2">
                                        <!-- <h2> -->
                                         <div class="input-daterange input-group" id="datepicker2">
                                            <input type="text" size="15" class="input-sm form-control" name="start_time2" id ="start_time2" />
                                            <span class="input-group-addon">to</span>
                                            <input type="text" size="15" class="input-sm form-control" name="end_time" id ="end_time2" />
                                        </div>
                                        <script>
                                            $('.input-daterange').datepicker({format:'yyyy/mm/dd'});
                                        </script>
                                        </br>
                                            <select class="form-control" id="querySearchType2" name ="querySearchType2">
                                            <option value="monthly" selected>Monthly</option>
                                            <option value="daily">Daily</option>
                                        </select>
                                        <!-- </h2> -->
                                    </div>
                                    </br>
                                    <div class="chart chart-md" id="morrisBar" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);height:400px">
                                    </div>
                                </div>
                              </div>
                        </section>
                     </div>
			   </div>
                                    </div>
                                </section>
                    </div>
			     </div>  

					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->
			
 <?php include_once  APPPATH ."views/admin/template/footer.php"; ?>
		<!-- Specific Page Vendor -->
		<script src="<?=base_url('assets/');?>/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?=base_url('assets/');?>/vendor/flot/jquery.flot.js"></script>
		<script src="<?=base_url('assets/');?>/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?=base_url('assets/');?>/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?=base_url('assets/');?>/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?=base_url('assets/');?>/vendor/snap-svg/snap.svg.js"></script>
		<script src="<?=base_url('assets/');?>/vendor/liquid-meter/liquid.meter.js"></script>
        <script>
            var host = "<?= site_url()?>"
        </script>
		<script src="<?=base_url('assets/');?>/javascripts/dashboard/examples.dashboard.js"></script>
		 