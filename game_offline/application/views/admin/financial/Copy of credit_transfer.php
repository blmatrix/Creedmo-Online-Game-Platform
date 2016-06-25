 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        


				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Financial Reports</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Financial Reports</span></li>
								<li><span>Credit Transfer</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">

						
								<h2 class="panel-title">Credit Transfer</h2>
							</header>
							
							<div class="panel-body">
								
								<div class="well well-sm">
									<div class="row">
										<div class="col-md-12">
										
											<form class="form-inline">
												<div class="input-group">
												  <input type="text" class="form-control" placeholder="Search for...">
												  <span class="input-group-btn">
													<button class="btn btn-primary" type="button">Find</button>
												  </span>
												</div><!-- /input-group -->
											  
												<div class="visible-sm clearfix mt-sm mb-sm"></div>
												<select id="State" class="form-control">
												  <option>State</option>
												  <option>----------------</option>
												  <option>Total</option>
												  <option>Wire Transfer</option>
												  <option>Coupon</option>
												  <option>Point</option>
												  <option>Affiliate</option>
												</select>
												<select id="State" class="form-control">
												  <option>Level</option>
												  <option>----------------</option>
												  <option>Bronze</option>
												  <option>Silver</option>
												  <option>Gold</option>
												  <option>Platinum</option>
												</select>
											</form>
											
										</div>	
										
									</div>								
									<hr class="dotted short">	
									<div class="row">
											<form class="form-inline">
												<div class="form-group">
													<div class="col-md-12">
														<div class="input-daterange input-group" data-plugin-datepicker>
															<span class="input-group-addon">
																<i class="fa fa-calendar"></i>
															</span>
															<input type="text" class="form-control" name="start">
															<span class="input-group-addon">to</span>
															<input type="text" class="form-control" name="end">
														</div>
													</div>
												</div>
												<button type="submit" class="btn btn-sm btn-default">Last Month</button>
												<button type="submit" class="btn btn-sm btn-default">This Month</button>
												<button type="submit" class="btn btn-sm btn-default">Last Week</button>
												<button type="submit" class="btn btn-sm btn-default">This Week</button>
												<button type="submit" class="btn btn-sm btn-default">Today</button>
											</form>
									</div>	
								</div>
								
								<h4 class="text-weight-bold text-dark text-uppercase">Summary <small> 2015-06-30 00:01 ~ 2015-06-30 24:00</small></h4>

								<table class="table table-striped table-bordered table-condensed">
									<thead>
									<tr  style="background:#f5f5f5; ">
										<th class="text-right">Deposit</th>
										<th class="text-right">Withdraw</th>
										<th class="text-right">Bonus</th>	
										<th class="text-right">Coupon</th>
										<th class="text-right">Point</th>										
										<th class="text-right">Comn</th>
										<th class="text-right">Affiliate</th>
										<th class="text-right">Margin(%)</th>
										<th class="text-right">Profit</th>
									</tr>
									</thead>
									<tbody>
										<tr style="background:#FDF5E6">
											<td class="text-right"><strong>9,031,500,000</strong></td>
											<td class="text-right"><strong>135,200,000</strong></td>
											<td class="text-right"><strong>400,000</strong></td>
											<td class="text-right"><strong>8,150,000</strong></td>
											<td class="text-right"><strong>3,650,000</strong></td>
											<td class="text-right"><strong>5,100,000</strong></td>
											<td class="text-right"><strong>6,600,000</strong></td>
											<td class="text-right">15%</td>
											<td class="text-right text-primary"><strong>3,020,000,000</strong></td>
										</tr>
									</tbody>
								</table>
								 
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">User ID</th>
										<th>Type</th>
										<th width="110px" class="text-right">Deposit</th>
										<th width="75px" class="text-right">Bonus</th>	
										<th width="110px" class="text-right">Withdraw</th>
										<th width="110px" class="text-right">Affiliate</th>
										<th class="text-right hidden-xs hidden-sm">Date</th>
										<th class="text-right hidden-xs hidden-sm">Confirm Date</th>
										<th class="text-right">Confirm By</th>
									</tr>
									</thead>
									<tbody>
										<tr>
											<td>BT200125</td>
											<td class="text-left"><span class="label label-success">On</span> <strong><a href="member-view.html">princess</a></strong></td>
											<td>Wire Transfer</td>
											<td class="text-right"><strong>1500,000</strong></td>
											<td class="text-right"><strong>2,000</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 22:18</small></td>
											<td class="text-right">Operator01</td>
										</tr>
										<tr>
											<td>BT200125</td>
											<td class="text-left"><span class="label label-success">On</span> <strong><a href="member-view.html">princess</a></strong></td>
											<td>Wire Transfer</td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>125,000</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 22:18</small></td>
											<td class="text-right">Operator02</td>
										</tr>
										<tr>
											<td>CO200125</td>
											<td class="text-left"><span class="label label-success">On</span> <strong><a href="member-view.html">princess</a></strong></td>
											<td>Coupon</td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>50,000</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right hidden-xs hidden-sm"><small></small></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
											<td class="text-right">User</td>
										</tr>
										<tr>
											<td>PO200125</td>
											<td class="text-left"><span class="label label-default">On</span> <strong><a href="member-view.html">princess</a></strong></td>
											<td>Point (Silver)</td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>2,000</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right hidden-xs hidden-sm"><small></small></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
											<td class="text-right">User</td>
										</tr>
										<tr>
											<td>PO200125</td>
											<td class="text-left"><span class="label label-default">On</span> <strong><a href="member-view.html">kinguser</a></strong></td>
											<td>Affiliate</td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>0</strong></td>
											<td class="text-right"><strong>400,000</strong></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
											<td class="text-right">User</td>
										</tr>
									</tbody>
								</table>
								
								<p class="text-right">1 - 30 of 30 items</p>
								
								<div class="row">
								<nav class="text-center">
								  <ul class="pagination">
									<li class="disabled">
									  <a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									  </a>
									</li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li>
									  <a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									  </a>
									</li>
								  </ul>
								</nav>
								</div>
								
							</div>

							
							<!-- Modal -->
							<div class="modal fade " id="Manager-add" tabindex="-1" role="dialog" aria-hidden="true">
							  <div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header header-primary">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Add User</h4>
								  </div>
								  <div class="modal-body">
									
									  <div class="col-md-12">
															<fieldset>
															<div class="form-group">
																<label class="col-md-3 control-label"><span class="required">*</span>User ID</label>
																<div class="col-md-8">
																	<div class="input-group input-group-icon">
																		<span class="input-group-addon">
																			<span class="icon"><i class="fa fa-user"></i></span>
																		</span>
																		<input type="text" class="form-control" placeholder="User ID">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label"><span class="required">*</span>Password</label>
																<div class="col-md-8">
																	<div class="input-group input-group-icon">
																		<span class="input-group-addon">
																			<span class="icon"><i class="fa fa-key"></i></span>
																		</span>
																		<input type="password" class="form-control" placeholder="User Password">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label"><span class="required">*</span>Repeat Password</label>
																<div class="col-md-8">
																	<div class="input-group input-group-icon">
																		<span class="input-group-addon">
																			<span class="icon"><i class="fa fa-key"></i></span>
																		</span>
																		<input type="password" class="form-control" placeholder="Repeat Password">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label"><span class="required">*</span>User Name</label>
																<div class="col-md-8">
																	<div class="input-group input-group-icon">
																		<span class="input-group-addon">
																			<span class="icon"><i class="fa fa-user"></i></span>
																		</span>
																		<input type="text" class="form-control" placeholder="User Name">
																	</div>
																</div>
															</div>											
															<div class="form-group">
																<label class="col-md-3 control-label">Phone Number</label>
																<div class="col-md-8">
																	<div class="input-group input-group-icon">
																		<span class="input-group-addon">
																			<span class="icon"><i class="fa fa-mobile"></i></span>
																		</span>
																		<input type="text" class="form-control" placeholder="Phone Number">
																	</div>
																</div>
															</div>											
															<div class="form-group">
																<label class="col-md-3 control-label">E-mail</label>
																<div class="col-md-8">
																	<div class="input-group input-group-icon">
																		<span class="input-group-addon">
																			<span class="icon"><i class="fa fa-envelope"></i></span>
																		</span>
																		<input type="text" class="form-control" placeholder="E-mail">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label">QQ</label>
																<div class="col-md-8">
																	<div class="input-group input-group-icon">
																		<span class="input-group-addon">
																			<span class="icon"><i class="fa fa-qq"></i></span>
																		</span>
																		<input type="text" class="form-control" placeholder="QQ">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class=" col-md-3 control-label">Gender</label>
																<div class="col-lg-8">
																	<select id="Gender" class="form-control">
																	  <option>Male</option>
																	  <option>Female</option>
																	</select>
																</div>
															</div>
															</fieldset>
										
									  </div>
									  
									  <div class="clearfix"></div>

								
								  </div>
								  <div class="modal-footer">                    
									<button type="button" class="btn btn-primary">Add Manager</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  </div>
								</div>
							  </div>
							</div>

						  <!-- End Modal Code -->
							
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>