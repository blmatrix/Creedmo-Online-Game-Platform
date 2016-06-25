<?php
include_once APPPATH . "views/brand/template/top.php";
?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/brand/template/side_bar.php";
	?>
	<section role="main" class="content-body">
		<header class="page-header">
                        <h2>Detail record</h2>
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Affiliate Reports</span></li>
								 <li><span>Detail record</span></li>
                            </ol>
                            <a class="sidebar-right-toggle"  href="<?= site_url('brand'); ?>"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
		<!-- start: page -->
					
					<section class="panel">
						<div class="panel-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-7 mt-md">
											<h2 class="h3 mt-none mb-sm text-dark text-weight-bold">KINGUSER[BF85046721] <small>Commission Detail</small></h3>
											<h4 class="h4 m-none text-danger text-weight-bold">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-arrow-left"></i> </button>
												2015/10/01 12:00:00  -  2015/10/20 03:18:37
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-default" disabled><i class="fa fa-arrow-right"></i> </button>
											</h4>
											
										</div>
										<div class="col-sm-5 text-right mt-md">
											<address class="ib ">
												<strong>KINGUSER</strong>
												<br/>
												Agent CODE : <strong>BF85046721</strong>
												<br/>
												Phone: <strong> 121212 </strong>
												<br/>
												QQ :  <strong>sdfsdfsdf </strong>
											</address>
										</div>
									</div>
								</header>
    
								<div class="bill-info">
									<div class="row">
										<div class="col-md-3">
										 </div>
									
												<div class="col-sm-4 col-sm-offset-5">
													<table class="table h5 text-dark">
														<tbody>
															<tr class="b-top-none">
																<td>1 Depth Subtotal</td>
																<td class="text-right">-910.065 CNY</td>
															</tr>
															<tr>
																<td>2 Depth Subtotal</td>
																<td class="text-right">-1.1 CNY</td>
															</tr>
															<tr class="h4">
																<td>Total Commission</td>
																<td class="text-right text-weight-bold  text-primary">
																    -911.165 CNY
																</td>
															</tr>
															<tr class="h4">
																<td>Total Amount</td>
                                                                <td class="text-right text-weight-bold  text-primary">
                                                                    30.42 CNY
                                                                </td>
																
															</tr>
														</tbody>
													</table>
												</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table invoice-items">
										<thead>
											<tr class="h5 text-dark">
												<th class="text-weight-semibold">User ID</th>
												<th class="text-right  text-weight-semibold">Slots </th>
												<th class="text-right  text-weight-semibold">Non Slots</th>
												<th class="text-right text-weight-semibold">Live </th>
												<th class="text-right text-weight-semibold">Total</th>
												<th class="text-right text-weight-semibold hidden-xs hidden-sm">Bonus</th>
												<th class="text-right text-weight-semibold hidden-xs hidden-sm">Coupon</th>
												<th class="text-right text-weight-bold">Commission</th>
											</tr>
										</thead>
										<tbody>
   										    
											<tr>
												<td class="text-weight-bold text-success">TO***</td>
												<td class="text-right text-weight-bold text-primary h5">1.47</td>
												<td class="text-right text-weight-bold text-primary h5">25.2 </td>
												<td class="text-right text-weight-bold text-primary h5">6.25</td>
												<td class="text-right text-weight-semibold text-primary h4">32.92 </td>
												<td class="text-right text-weight-semibold text-danger h5 hidden-xs hidden-sm">2120.97</td>
												<td class="text-right text-weight-semibold text-danger h5 hidden-xs hidden-sm">7000.00</td>
												<td class="text-right text-weight-semibold text-primary h4">-910.065</td>
											</tr>
            								<tr  style="background:#f5f5f5; ">
												<td class="text-weight-bold text-success" style="padding-left:20px"><i class="fa fa-angle-right"></i> TE***</td>
												<td class="text-right text-weight-semibold text-primary">0</td>
												<td class="text-right text-weight-semibold text-primary">-2.5</td>
												<td class="text-right text-weight-semibold text-primary">0</td>
												<td class="text-right text-weight-bold text-primary"><h5 style="margin:0">-2.5</h5></td>
												<td class="text-right text-weight-semibold text-danger hidden-xs hidden-sm">21.00</td>
												<td class="text-right text-weight-semibold text-danger hidden-xs hidden-sm">0</td>
												<td class="text-right text-weight-bold text-primary"><h5 style="margin:0">-1.1</h5></td>
											</tr>
        											
    											
     											

										</tbody>
									</table>
								</div>
							
								<div class="invoice-summary">
									<div class="row">
										<div class="col-sm-4 col-sm-offset-8">
											<table class="table h5 text-dark">
												<tbody>
													<tr class="b-top-none">
														<td>1 Depth Subtotal</td>
														<td class="text-right">-910.065 CNY</td>
													</tr>
													<tr>
														<td>2 Depth Subtotal</td>
														<td class="text-right">-1.1 CNY</td>
													</tr>
													<tr class="h4">
														<td>Total Commission</td>
														<td class="text-right text-weight-bold  text-primary">
														     -911.165 CNY
														    
														</td>
													</tr>
													
													<tr class="h4">
                                                        <td>Total Amount</td>
                                                        <td class="text-right text-weight-bold  text-primary">
                                                             30.42 CNY
                                                            
                                                        </td>
                                                    </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<!--<div class="text-right mr-lg">
								<a href="#" class="btn btn-default">Submit Invoice</a>
								<a href="pages-invoice-print.html" target="_blank" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Print</a>
							</div>-->
						</div>
						  
						</section><!-- end: panel -->

<!-- end: page -->
</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->

<?php
include_once APPPATH . "views/brand/template/footer.php";
?>