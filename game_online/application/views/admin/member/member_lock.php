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
								<li><span>Lock Members</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="./index.html"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">

						
								<h2 class="panel-title">Lock Members</h2>
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
												  <option>Unlock</option>
												  <option>Lock</option>
												  <option>Online</option>
												  <option>Offline</option>
												  <option>Amount DESC</option>
												  <option>Affiliate DESC</option>
												</select>
												<select id="State" class="form-control">
												  <option>Level</option>
												  <option>----------------</option>
												  <option>Bronze</option>
												  <option>Silver</option>
												  <option>Gold</option>
												  <option>Platinum</option>
												</select>
												<a href="#"  data-toggle="modal" data-target="#Manager-add" class="btn btn-primary  pull-right" role="button">Add  <i class="fa fa-plus"></i></a>
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

								<h5 class="text-weight-semibold text-dark text-uppercase">Member Total <span class="label label-default ">  2,121</span> </h5>
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">User ID</th>	
										<th>Name</th>
										<th>Level</th>	
										<th class="text-right hidden-xs hidden-sm">Deposit</th>
										<th class="text-right hidden-xs hidden-sm">Withdraw</th>
										<th class="text-right">Average</th>
										<th class="text-right">Amount</th>
										<th class="text-right hidden-xs hidden-sm">Affiliate</th>
										<th class="text-center">State</th>	
										<th class="text-right hidden-xs hidden-sm">Join Date</th>
									</tr>
									</thead>
									<tbody>
										<tr>
											<td>2</td>
											<td class="text-left"><span class="label label-default">On</span> <strong>Queenuser</strong></td>
											<td>中國人</td>
											<td>Gold</td>
											<td class="text-right hidden-xs hidden-sm">243,500,000</td>
											<td class="text-right hidden-xs hidden-sm">1,500,000</td>
											<td class="text-right text-primary"><strong>160,500,000</strong></td>
											<td class="text-right">500,000</td>
											<td class="text-right hidden-xs hidden-sm">0/0</td>
											<td class="text-center"><span class="label label-danger"><i class="fa fa-lock" title="Lock"></i></span></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
										</tr>
										<tr>
											<td>1</td>
											<td class="text-left"><span class="label label-default">On</span> <strong>prince</strong></td>
											<td>金房</td>
											<td>Gold</td>
											<td class="text-right hidden-xs hidden-sm">0</td>
											<td class="text-right hidden-xs hidden-sm">0</td>
											<td class="text-right text-default"><strong>0</strong></td>
											<td class="text-right">0</td>
											<td class="text-right hidden-xs hidden-sm">0/0</td>
											<td class="text-center"><span class="label label-danger"><i class="fa fa-lock" title="Lock"></i></span></td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30 21:18</small></td>
										</tr>
									</tbody>
								</table>
							
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

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>
		
<?php include_once APPPATH ."views/admin/template/footer.php"; ?>