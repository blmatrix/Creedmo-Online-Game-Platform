
 <?php include_once  APPPATH ."views/brand/template/top.php"; ?>

			<div class="inner-wrapper">
			 <?php include_once  APPPATH ."views/brand/template/side_bar.php"; ?>    

				<section role="main" class="content-body">
					<header class="page-header">
						<h2 id ="ahn">Welcome</h2>
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= site_url('brand');?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
							</ol>					
							<a class="sidebar-right-toggle"  href="<?= site_url('brand');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<div class="search-content">
						<div class="row mainimg">
							<h1 class="text-dark">PROMOTE FIRST-CLASS BRANDS</h1>
							<p class="lead">BaoFa Affiliate is the official affiliate program for BaoFa88.com<br>
							and <span class="alternative-font">your No. 1 partner</span> for success.</p>
							<?php if(!$login_status):?>
							<button type="button" class="mb-xs mt-xs mr-xs btn btn-lg btn-primary"><i class="fa fa-user-secret"></i> REGISTER NOW </button>							
							<?php endif;?>
						</div>
							<div class="row main_contents">
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-pie-chart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">BaoFa Affiliates</h4>
														<div class="info">
															The official BaoFa affiliate programme boasts quality products across Casino, Slot, Live game, Mobile.&nbsp; 
															Personal account managers and 24/7 support.
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(About us)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-line-chart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Earn Top Commissions </h4>
														<div class="info">
															We offer generous, customized commissions to maximise your earning potential.&nbsp; 
															Enjoy share models, our flexibility to discuss any other business model.
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(Commissions)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-4 col-xl-4">
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
														<h4 class="title">The Best Affiliate Tools</h4>
														<div class="info">
															Partner with us to get access to excellent creative and industry leading player values along with the tools and reports to manage your business.
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(Report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								
							</div>
					</div>
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->
 <?php include_once  APPPATH ."views/brand/template/footer.php"; ?>
