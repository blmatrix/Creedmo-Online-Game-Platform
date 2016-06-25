 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        
                <form method = "post" id ="manage_form" target = "hiddenframe" >
                <input type = "hidden" name = "act_mode" id= "act_mode" value = ""/>    
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Manage Setting</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Setting</span></li>
								<li><span>Manage Setting</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
					<div class="row">
					
						<div class="col-md-6">
							<section class="panel-featured panel-featured-primary">
								<header class="panel-heading">
									<h2 class="panel-title">CUSTOMER SERVICE</h2>

									<p class="panel-subtitle">
										유저페이지에 노출되는 고객 센터 연락처 수정
									</p>
								</header>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Call Center Num1</label>
												<input type="text" name="call_center_num1" class="form-control input-sm" value = "<?= $customer_service->call_center_num1 ?>" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Call Center Num2</label>
												<input type="text" name="call_center_num2" class="form-control input-sm" value = "<?= $customer_service->call_center_num2?>" >
											</div>
										</div>
									</div>
									<hr style="margin:10px 0 10px 0">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Skype ID</label>
												<input type="text" name="skype_id" class="form-control input-sm" value = "<?= $customer_service-> skype_id?>" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">E-mail</label>
												<input type="text" name="email" class="form-control input-sm" value = "<?= $customer_service->email?>" >
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">QQ  Customer Service 1</label>
												<input type="text" name="qq_customer_service1" class="form-control input-sm" value = "<?= $customer_service-> qq_customer_service1 ?>" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">QQ  Customer Service 2</label>
												<input type="text" name="qq_customer_service2" class="form-control input-sm" value = "<?= $customer_service-> qq_customer_service2 ?>">
											</div>
										</div>
									</div>
									
									<hr>
									
										<div class="form-group">
											<label class="col-sm-4 control-label">Join Greeting Message</label>
											<div class="col-sm-8">
												<textarea name = "greeting_message" class="form-control input-sm" rows="4" id="textareaDefault"><?= $customer_service-> greeting_message ?></textarea>
											</div>
										</div>

								</div>
								<footer class="panel-footer">
									<button type = "button" class="mb-sm mt-sm mr-sm btn btn-primary btn-block manage-setting" data-request-type = "customer_service">Submit</button>
								</footer>
							</section>
						</div>

						<div class="col-md-6">
							     
								<section class="panel-featured panel-featured-primary">
									<header class="panel-heading">
										<h2 class="panel-title">CASINO BASIC POLICY</h2>
										<input type = "hidden" name = "casino_basic_policy_no" value = "<?= $casino_basic_policy -> casino_basic_policy_no?>">
										<p class="panel-subtitle">변경 즉시 유저 페이지에 반영 됩니다. 신중히 변경해 주세요.</p>
										
									</header>
									<div class="panel-body">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-5 control-label">Min per Deposit</label>
													<div class="input-group col-sm-6">
														<input type="text" class="form-control input-sm"  disabled value = "<?= $casino_basic_policy -> min_per_deposit?>">
														<span class="input-group-addon btn-warning">CNY</span>
													</div>
											</div>
											<div class="form-group">
												<label class="col-sm-5 control-label">Max per Deposit</label>
													<div class="input-group col-sm-6">
														<input type="text" class="form-control input-sm"  disabled value = "<?= $casino_basic_policy -> max_per_deposit?>">
														<span class="input-group-addon btn-warning">CNY</span>
													</div>
											</div>
											
													
											<div class="form-group">
												<label class="col-sm-5 control-label">Min per Withdrawals</label>
													<div class="input-group col-sm-6">
														<input type="text" class="form-control input-sm"  disabled value = "<?= $casino_basic_policy->min_per_withdrawals?>">
														<span class="input-group-addon btn-warning">CNY</span>
													</div>
											</div>
											<div class="form-group">
												<label class="col-sm-5 control-label">Max per Withdrawals</label>
													<div class="input-group col-sm-6">
														<input type="text" class="form-control input-sm"  disabled value = "<?= $casino_basic_policy->max_per_withdrawals?>">
														<span class="input-group-addon btn-warning">CNY</span>
													</div>
											</div>
											<hr>
											
											<div class="form-group">
												<label class="col-sm-5 control-label">1st Deposit Event</label>
													<div class="input-group col-sm-6">
														<div data-plugin-spinner data-plugin-options='{ "value":5, "min": 5, "max": 15 }'>
															<div class="input-group" style="width:150px;">
																<input type="text" class="spinner-input form-control" maxlength="3" readonly name = "first_deposit_event" value ="<?= $casino_basic_policy -> first_deposit_event?>">
																<div class="spinner-buttons input-group-btn">
																	<button type="button" class="btn btn-default spinner-up">
																		<i class="fa fa-angle-up"></i>
																	</button>
																	<button type="button" class="btn btn-default spinner-down">
																		<i class="fa fa-angle-down"></i>
																	</button>
																</div>
															</div>
														</div>
														
															value set  <code>min 5%</code> to  <code>max 15%</code>  
														
													</div>
											</div>
											<div class="form-group">
												<label class="col-sm-5 control-label">Max 1st Deposit Bonus</label>
													<div class="input-group col-sm-6">
														<input id ="max_1st_deposit_bonus" name = "max_1st_deposit_bonus" type="text" class="form-control input-sm" value = "<?= $casino_basic_policy->max_1st_deposit_bonus?>">
														<span class="input-group-addon btn-warning">CNY</span>
													</div>
											</div>
										</div>
									</div>
									<footer class="panel-footer">
										<button type = "button" class="mb-sm mt-sm mr-sm btn btn-primary btn-block manage-setting" data-request-type = "casino_policy" >Submit</button>
									</footer>
								</section>
							
						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<section class="panel-featured panel-featured-primary">
								<header class="panel-heading">
									<h2 class="panel-title">AFFILIATE INFORMATION</h2>
                                    <input type = "hidden" name = "affiliate_information_no" value = "<?= $affiliate_information -> affiliate_information_no?>">
									<p class="panel-subtitle">
										파트너페이지에 노출되는 고객 센터 연락처 수정
									</p>
								</header>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Call for Partner</label>
												<input type="text" name="call_for_partner" class="form-control input-sm" value ="<?= $affiliate_information -> call_for_partner ?>" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">QQ for Partner 2</label>
												<input type="text" name="qq_for_partner" class="form-control input-sm" value = "<?= $affiliate_information -> qq_for_partner ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">Skype ID for Partner</label>
												<input type="text" name="skype_id_for_partner" class="form-control input-sm" value = "<?= $affiliate_information -> skype_id_for_partner?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">E-mail for Partner</label>
												<input type="text" name="email_for_partner" class="form-control input-sm" value = "<?= $affiliate_information -> email_for_partner?>">
											</div>
										</div>
									</div>
									
								</div>
								<footer class="panel-footer">
									<button type = "button" class="mb-sm mt-sm mr-sm btn btn-primary btn-block manage-setting" data-request-type = "affiliate_information" >Submit</button>
								</footer>
							</section>
						</div>


						<div class="col-md-6">
							     
								<section class="panel-featured panel-featured-primary">
									<header class="panel-heading">
										<h2 class="panel-title">USER COMP POINT POLICY</h2>
										<p class="panel-subtitle">콤프포인트 적립율</p>
										
									</header>
									<div class="panel-body">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-5 control-label">Slots Conversion 1P</label>
													<div class="input-group col-sm-6">
														<input id ="slot_conversion_1p" name = "slot_conversion_1p" type="text" class="form-control input-sm"  value = "<?=!empty($comp_conversion_policy) ? $comp_conversion_policy ->slot_conversion_1p:''?>">
														<span class="input-group-addon btn-warning">%</span>
													</div>
											</div>
											<div class="form-group">
												<label class="col-sm-5 control-label">Non Slots Conversion 1P</label>
													<div class="input-group col-sm-6">
														<input id ="non_slot_conversion_1p" name = "non_slot_conversion_1p"  type="text" class="form-control input-sm"  value = "<?=!empty($comp_conversion_policy) ? $comp_conversion_policy ->non_slot_conversion_1p:''?>">
														<span class="input-group-addon btn-warning">%</span>
													</div>
											</div>
											
													
											<div class="form-group">
												<label class="col-sm-5 control-label">Live Conversion 1P</label>
													<div class="input-group col-sm-6">
														<input id ="live_conversion_1p" name = "live_conversion_1p"  type="text" class="form-control input-sm"  value = "<?=!empty($comp_conversion_policy) ? $comp_conversion_policy ->live_conversion_1p:''?>">
														<span class="input-group-addon btn-warning">%</span>
													</div>
											</div>

										</div>
									</div>
									<footer class="panel-footer">
										<button type = "button" class="mb-sm mt-sm mr-sm btn btn-primary btn-block manage-setting" data-request-type = "comp_conversion_policy" >Submit</button>
									</footer>
								</section>
							
						</div>


						<!-- <div class="col-md-6">
							<section class="panel-featured panel-featured-primary">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>

									<h2 class="panel-title">MEMBER JOIN MANAGEMENT</h2>

									<p class="panel-subtitle">
										회원가입 양식 폼 컨트롤 -  <a href="https://github.com/flatlogic/awesome-bootstrap-checkbox" target="_blank">Preview Official Join Page</a>
									</p>
								</header>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<p class="text-right"><span class="required"> *</span>  information is required</p>
										</div>
										<div class="col-md-6">
										
												<div class="checkbox-custom checkbox-primary">
														<input type="checkbox" id="ContactNumber"  checked="">
														<label for="ContactNumber"><span class="required">*</span> Contact Number</label>
												</div>
												<div class="checkbox-custom checkbox-primary">
														<input type="checkbox" id="Email">
														<label for="Email"><span class="required">*</span> Email Address</label>
												</div>												
												<div class="checkbox-custom checkbox-primary">
														<input type="checkbox" id="Gender" >
														<label for="Gender"><span class="required">*</span> Gender</label>
												</div>
										</div>
										
										<div class="col-md-6">
												<div class="checkbox-custom checkbox-primary">
															<input type="checkbox" id="UserRealName"  checked="">
															<label for="UserRealName"><span class="required">*</span> User Real Name</label>
												</div>
												<div class="checkbox-custom checkbox-primary">
														<input type="checkbox" id="QQ">
														<label for="QQ"><span class="required">*</span> QQ</label>
												</div>
											</div>
									</div>
									
								</div>
								<footer class="panel-footer">
									<button type = "button" class="mb-sm mt-sm mr-sm btn btn-primary btn-block">Submit</button>
								</footer>
							</section>
						</div> -->
					</div>

					<h3>ADVANCED SETTING</h3>
					<p class="mb-lg">최고 관리자만 수정 가능. <span class="text-danger">Only allow NUMERIC</span></p>


					<div class="row">

						<div class="col-md-12">
							<section class="panel-featured panel-featured-warning">
								<header class="panel-heading">
									<h2 class="panel-title">USER LEVEL POLICY</h2>

									<p class="panel-subtitle">
										User Level - <span class="text-danger">Only allow NUMERIC</span>
									</p>
								</header>
								<div class="panel-body">
								
										<div class="row">
											<div class="col-sm-12">
											
												<form class="">
												
												<h4>User Level</h4>
												<table class="table table-bordered table-striped  table-condensed mb-none">
													<thead>
													<tr>
														<th>Level</th>
														<th width="15%">Name</th>
														<th>Level Point</th>
														<th>Conversion 1CNY</th>
														<th>Promotion Bonus</th>
														<th>Deposit Bonus %</th>
														<th>Deposit Bonus Limit</th>
													</tr>
													</thead>
													<tbody>
<?php foreach($user_levels as $user_level):?>
    												
														<tr>
															<td><?= $user_level -> user_level_code ?></td>
															<td><strong><?= $user_level -> user_level_code_name ?></strong></td>
															<td><div class="input-group"><input type="text" name = "level[<?= $user_level -> user_level_no?>][promotion_level_point]"        class="form-control input-sm" value = "<?= $user_level -> promotion_level_point ?>" ><span class="input-group-addon btn-warning">P</span></div></td>
															<td><div class="input-group"><input type="text" name = "level[<?= $user_level -> user_level_no?>][conversion_1cny_rate]"    class="form-control input-sm" value = "<?= $user_level -> conversion_1cny_rate ?>" ><span class="input-group-addon btn-warning">P</span></div></td>
															<td><div class="input-group"><input type="text" name = "level[<?= $user_level -> user_level_no?>][promotion_bonus]"    class="form-control input-sm" value = "<?= $user_level -> promotion_bonus ?>"  ><span class="input-group-addon btn-warning"><i class="fa fa-rmb"></i></span></div></td>
															<td><div class="input-group"><input type="text" name = "level[<?= $user_level -> user_level_no?>][deposit_bonus_rate]" class="form-control input-sm" value = "<?= $user_level -> deposit_bonus_rate ?>" ><span class="input-group-addon btn-warning">%</span></div></td>
															<td><div class="input-group"><input type="text" name = "level[<?= $user_level -> user_level_no?>][deposit_bonus_limit]"    class="form-control input-sm" value = ""  ><span class="input-group-addon btn-warning"><i class="fa fa-rmb"></i></span></div></td>
														</tr>
<?php endforeach;?>														
													</tbody>
												</table>
												
											</div>								
										
										</form>
										</div>
										
										<div class="row">

										</div>
									
								</div>
								<footer class="panel-footer">
									<button type = "button" class="mb-sm mt-sm mr-sm btn btn-warning btn-block manage-setting" data-request-type = "user_level_policy" >Submit</button>
								</footer>
							</section>
						</div>

					</div>
					

					<div class="row">

						<div class="col-md-12">
							<section class="panel-featured panel-featured-danger">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>

									<h2 class="panel-title">AFFILIATE PROGRAM POLICY</h2>

									<p class="panel-subtitle">
										Affiliate Commission Payouts - <span class="text-danger">Only allow NUMERIC</span>
									</p>
								</header>
								<div class="panel-body">
								
										<div class="row">
											<div class="col-sm-12">
											
												
												<h4>1 Depth Commission Policy </h4>
												<table class="table table-bordered table-striped  table-condensed mb-none">
													<thead>
													<tr>
														<th>Level</th>
														<th>Monthly Win/Loss (CNY)</th>						
														<th>Active Members</th>
														<th>Slots %</th>
														<th>Non Slots %</th>
														<th>Live %</th>
													</tr>
													</thead>
													<tbody>
<?php foreach($deps1_polices as $policy):?>													    
														<tr>
															<td><?= $policy->commission_level?></td>
															<td>
																	  <div class="col-md-6 form-group mb-none">
																		<input type="text" name = "deps1[<?= $policy -> deps1_commission_policy_no?>][amount_range1]" class="form-control input-sm" id="Min" placeholder="Min" value ="<?= $policy->amount_range1?>">
																	  </div>
																	  <div class="col-md-6 form-group mb-none">
																		<input type="text" name = "deps1[<?= $policy -> deps1_commission_policy_no?>][amount_range2]" class="form-control input-sm" id="Max" placeholder="Max" value ="<?= $policy->amount_range2?>">
																	  </div>
															</td>
															<td>
																	<div class="col-md-6 form-group mb-none">
																		<input type="text" name = "deps1[<?= $policy -> deps1_commission_policy_no?>][activate_players1_count]"  class="form-control input-sm" id="Min" placeholder="Min" value ="<?= $policy->activate_players1_count?>">
																	  </div>
																	  <div class="col-md-6 form-group mb-none">
																		<input type="text" name = "deps1[<?= $policy -> deps1_commission_policy_no?>][activate_players2_count]" class="form-control input-sm" id="Max" placeholder="Max" value ="<?= $policy->activate_players2_count?>">
																	  </div>
															</td>
															<td><div class="col-md-12 form-group mb-none"><input name = "deps1[<?= $policy -> deps1_commission_policy_no?>][slot_percentage]" type="text" class="form-control input-sm" id="Slot" placeholder="Slot %" value ="<?= $policy->slot_percentage?>"></div></td>
															<td><div class="col-md-12 form-group mb-none"><input name = "deps1[<?= $policy -> deps1_commission_policy_no?>][non_slot_percentage]"  type="text" class="form-control input-sm" id="NonSlots" placeholder="Non Slots %" value ="<?= $policy->non_slot_percentage?>"></div></td>
															<td><div class="col-md-12 form-group mb-none"><input type="text" name = "deps1[<?= $policy -> deps1_commission_policy_no?>][live_percentage]"  class="form-control input-sm" id="Live" placeholder="Live %" value ="<?= $policy->live_percentage?>"></div></td>
														</tr>
<?php endforeach;?>														
													</tbody>
												</table>

                                                  <button type = "button" class="mb-sm mt-lg mr-sm btn btn-danger btn-block manage-setting" data-request-type ="deps1_policy">Submit</button>

												<hr>
												
												<h4>2 Depth Commission Policy</h4>
												<table class="table table-bordered table-striped  table-condensed mb-none">
													<thead>
													<tr>
														<th>Level</th>
														<th>Monthly Win/Loss (CNY)</th>
														<th>Active Members</th>
														<th>Slots %</th>
														<th>Non Slots %</th>
														<th>Live %</th>
													</tr>
													</thead>
													<tbody>
<?php foreach($deps2_polices as $policy):?>													    
														<tr>
															<td><?= $policy-> commission_level?></td>
															<td>
																	  <div class="col-md-6 form-group mb-none">
																		<input name = "deps2[<?= $policy -> deps2_commission_policy_no?>][amount_range1]" type="text" class="form-control input-sm" id="Min" placeholder="Min" value ="<?= $policy->amount_range1?>">
																	  </div>
																	  <div class="col-md-6 form-group mb-none">
																		<input name = "deps2[<?= $policy -> deps2_commission_policy_no?>][amount_range2]" type="text" class="form-control input-sm" id="Max" placeholder="Max" value ="<?= $policy->amount_range2?>" >
																	  </div>
															</td>
															<td>
																	<div class="col-md-6 form-group mb-none">
																		<input name = "deps2[<?= $policy -> deps2_commission_policy_no?>][activate_players1_count]"  type="text" class="form-control input-sm" id="Min" placeholder="Min" value ="<?= $policy->activate_players1_count?>">
																	  </div>
																	  <div class="col-md-6 form-group mb-none">
																		<input name = "deps2[<?= $policy -> deps2_commission_policy_no?>][activate_players2_count]" type="text" class="form-control input-sm" id="Max" placeholder="Max" value ="<?= $policy->activate_players2_count?>">
																	  </div>
															</td>
															<td><div class="col-md-12 form-group mb-none"><input name = "deps2[<?= $policy -> deps2_commission_policy_no?>][slot_percentage]" type="text" class="form-control input-sm" id="Slot" placeholder="Slot %" value ="<?= $policy->slot_percentage?>"></div></td>
															<td><div class="col-md-12 form-group mb-none"><input name = "deps2[<?= $policy -> deps2_commission_policy_no?>][non_slot_percentage]"  type="text" class="form-control input-sm" id="NonSlots" placeholder="Non Slots %" value ="<?= $policy->non_slot_percentage?>"></div></td>
															<td><div class="col-md-12 form-group mb-none"><input name = "deps2[<?= $policy -> deps2_commission_policy_no?>][live_percentage]"  type="text" class="form-control input-sm" id="Live" placeholder="Live %" value ="<?= $policy->live_percentage?>"></div></td>
														</tr>
<?php endforeach;?>												
													</tbody>
												</table>
												
											</div>								
										</div>
										<div class="row">
										</div>
									
								</div>
								<footer class="panel-footer">
									<button type = "button" class="mb-sm mt-sm mr-sm btn btn-danger btn-block manage-setting" data-request-type ="deps2_policy">Submit</button>
								</footer>
							</section>
						</div>

					</div>
						</section><!-- end: panel -->
					</form>
					<script>
                        $(document).ready(function(){
                            $('.manage-setting').click(function(e){
                                if (confirm('변경 즉시 게임에 반영됩니다. 진행하시겠습니까') == true){
                                    $('#act_mode').val($(this).attr('data-request-type'));
                                    $('#manage_form').submit();
                                }
                            });
                        });
                    </script>
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->	

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>