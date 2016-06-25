 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Affiliate Reports</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Affiliate Reports</span></li>
								<li><span>Agent</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">						
								<h2 class="panel-title">Agent</h2>
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
												<button type="submit" class="btn btn-sm btn-default">Annual</button>
												<button type="submit" class="btn btn-sm btn-default">Monthly</button>
												<button type="submit" class="btn btn-sm btn-default">Weekly</button>
												<button type="submit" class="btn btn-sm btn-default">Daily</button>
											</form>
									</div>	
								</div>
								
								<h4 class="text-weight-bold text-dark text-uppercase">Summary <small> 2015-06-01 ~ 2015-06-30</small></h4>

								<table class="table table-striped table-bordered table-condensed">
									<thead>
									<tr  style="background:#f5f5f5; ">
										<th class="text-right">Agent</th>
										<th class="text-right">1 Depth Commission</th>
										<th class="text-right">2 Depth Commission</th>	
										<th class="text-right">Total Commission</th>
									</tr>
									</thead>
									<tbody>
										<tr style="background:#FDF5E6">
											<td class="text-right"><strong>142 名</strong></td>
											<td class="text-right"><strong>135,200,000</strong></td>
											<td class="text-right"><strong>8,400,000</strong></td>
											<td class="text-right text-danger"><strong>231,500,000</strong></td>
										</tr>
									</tbody>
								</table>
								 
								 
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>no</th>
										<th>Agent</th>
										<th>Code</th>
										<th class="text-right">Month</th>
										<th class="text-right">Depth</th>
										<th class="text-right">User</th>
										<th class="text-right">Commission</th>
										<th class="text-right">Depth Level</th>										
										<th class="text-right">Total</th>
										<th class="text-right">Payment</th>
									</tr>
									</thead>
									<tbody>
										<tr>
											<td style="vertical-align: middle;">32</td>
											<td style="vertical-align: middle;"><span class="label label-success">On</span> <strong><a href="<?= site_url('admin/member/member_view');?>">Kinguser</a></strong></td>
											<td style="vertical-align: middle;"><a href="<?= site_url('admin/affiliate/agent_detail');?>" class="btn btn-sm btn-primary"><i class="fa fa-th-list"></i> TH00212</a></td>
											<td class="text-right"  style="vertical-align: middle;"><strong>2015-06</strong></td>
											<td class="text-right"><strong>1 Depth<br>2 Depth</strong></td>
											<td class="text-right"><strong>10/100<br>63/360</strong></td>
											<td class="text-right text-primary"><strong>852,000<br>631,000</strong></td>
											<td class="text-right">1 Level<br>2 Level</td>											
											<td style="vertical-align: middle;" class="text-right text-weight-semibold text-primary h4">950,000</td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30<br>Wire Transfer</small></td>
										</tr>
										<tr>
											<td style="vertical-align: middle;">31</td>
											<td style="vertical-align: middle;"><span class="label label-success">On</span> <strong><a href="<?= site_url('admin/member/member_view');?>">queenuser</a></strong></td>
											<td style="vertical-align: middle;"><a href="<?= site_url('admin/affiliate/agent_detail');?>" class="btn btn-sm btn-primary"><i class="fa fa-th-list"></i> TH00211</a></td>
											<td class="text-right"  style="vertical-align: middle;"><strong>2015-06</strong></td>
											<td class="text-right"><strong>1 Depth<br>2 Depth</strong></td>
											<td class="text-right"><strong>10/100<br>63/360</strong></td>
											<td class="text-right text-primary"><strong>852,000<br>631,000</strong></td>
											<td class="text-right">1 Level<br>2 Level</td>											
											<td style="vertical-align: middle;" class="text-right text-weight-semibold text-primary h4">1,500,000</td>
											<td class="text-right hidden-xs hidden-sm"><small>2015-06-30<br>Wire Transfer</small></td>
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