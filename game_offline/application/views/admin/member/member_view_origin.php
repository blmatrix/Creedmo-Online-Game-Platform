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
											<h6>Level 점수 완성도</h6>
											<div class="widget-toggle"></div>
										</div>
										<div class="widget-content-collapsed">
											<div class="progress progress-sm light">
												<div id ="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="<?=$current_up_per?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$current_up_per?>%;">
													<?= $current_up_per?> &nbsp;%
												</div>
											</div>
										</div>
										<div class="widget-content-expanded">
											<h5>Level  <span class="label label-primary "><?= $user_level-> user_level_code_name?></span> </h5>
											
											<ul class="simple-todo-list">
												<li class="completed">Level Point : <a href="#"><strong><?= number_format($accumulate_comp_point -> comp_point)?></strong></a></li>
												<li class="completed">Comp Point : <a href="#"><strong><?= number_format($wallet -> comp_point)?></strong></a></li>
											</ul>
										</div>
									</div>

									<hr class="dotted short">

									
									<div class="clearfix">
									    <a href="#"  data-url = "<?= site_url('admin/member/form')?>?request_no=<?=$user-> user_no?>&request_form=coupon&request_type=create" class="mb-xs mt-xs mr-xs btn btn-primary btn-sm btn-block coupon-create" role="button">Bounus 쿠폰  <i class="fa fa-plus"></i></a>
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

							<h4 class="mb-md">평균 <small><a class=" pull-right" href="#">View Report</a></small></h4>
							
							<ul class="simple-card-list mb-xlg text-right">
								<li class="success">
									<h3><?= number_format($wallet -> average)?> CNY</h3>
									<p>입금 - 출금</p>
								</li>
								<li class="primary">
									<h3><?= number_format($wallet -> total_deposit_amount)?> CNY</h3>
									<p>총 입금액</p>
								</li>
								<li class="danger">
									<h3><?= number_format($wallet -> total_withdraw_amount)?> CNY</h3>
									<p>총 출금액</p>
								</li>
							</ul>
						</div>
						
						
						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li <?php if ($cur_tab == 'overview'):?> class="active" <?php endif;?> >
										<a href="#overview" data-toggle="ajax">기본정보</a>
									</li>
									<li <?php if ($cur_tab == 'account'):?> class="active" <?php endif;?>  >
										<a href="#account" data-toggle="tab">출금통장</a>
									</li>
									<li <?php if ($cur_tab == 'affiliate'):?>class="active" <?php endif;?> >
										<a href="#affiliate" data-toggle="tab">파트너</a>
									</li>
									<li <?php if ($cur_tab == 'affiliate_payment'):?>class="active" <?php endif;?> >
										<a href="#affiliate-payment" data-toggle="tab">파트너 정산</a>
									</li>
								</ul>
								<div class="tab-content">
									
									<div id="overview" class="tab-pane <?= $cur_tab == 'overview' ? 'active':''?>">

										<div class="well well-sm">
											<div class="table-responsive">
												<table class="table mb-none">
													<thead>
														<tr>
															<th>현재 회원 보유 총액</th>
															<th class="text-right"><?= number_format($wallet-> wallet_balance + $wallet -> pt_casino + $wallet -> mg_casino)?></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>E-Wallet</td>
															<td class="text-right"><strong><?= number_format($wallet-> wallet_balance);?> CNY</strong></td>
														</tr>
														<tr>
															<td>MG Casino</td>
															<td class="text-right"><strong><?= number_format($wallet-> mg_casino);?>  CNY</strong></td>
														</tr>
														<tr>
															<td>PT Casino</td>
															<td class="text-right"><strong><?= number_format($wallet-> pt_casino);?>  CNY</strong></td>
														</tr>
														<tr>
															<td>Comp Point</td>
															<td class="text-right"><strong><?= number_format($wallet-> comp_point);?>  P</strong></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<hr class="dotted short">
									
										<h4 class="mb-xlg">회원 가입 정보</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label">User ID</label>
													<div class="col-md-8">
														<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-user"></i></span>
															</span>
															<input type="text" class="form-control" placeholder="Left icon" value="<?= $user-> user_id?>" readonly>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">이름</label>
													<div class="col-md-8">
														<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-user"></i></span>
															</span>
															<input type="text" class="form-control" placeholder="Left icon" value="<?= $user-> user_name?>">
														</div>
													</div>
												</div>											
												<div class="form-group">
													<label class="col-md-3 control-label">전호번호</label>
													<div class="col-md-8">
														<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-mobile"></i></span>
															</span>
															<input type="text" class="form-control" placeholder="Left icon" value="<?= $user -> user_phone?>">
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
															<input type="text" class="form-control" placeholder="Left icon" value="<?= $user-> user_email?>">
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
															<input type="text" class="form-control" placeholder="Left icon" value="<?= $user-> qq?>">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class=" col-md-3 control-label">Gender</label>
													<div class="col-lg-8">
														<select id="Gender" class="form-control">
														  <option value ="<?= GENDER_MALE?>" <?php if ($user-> user_gender == GENDER_MALE):?>"selected"<?php endif;?> >Male</option>
														  <option value ="<?= GENDER_FEMALE?>" <?php if ($user-> user_gender == GENDER_FEMALE):?>"selected"<?php endif;?>>Female</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class=" col-md-3 control-label">State</label>
													<div class="col-lg-8">
														<select id="State" class="form-control">
														  <option value ="<?= USER_STATUS_UNLOCKED?>" <?php if ($user-> user_status == USER_STATUS_UNLOCKED):?>"selected"<?php endif;?> >Unlock</option>
														  <option value ="<?= USER_STATUS_LOCKED?>" <?php if ($user-> user_status == USER_STATUS_LOCKED):?>"selected"<?php endif;?> >Lock</option>
														</select>
													</div>
												</div>											
												<div class="form-group">
													<label class=" col-md-3 control-label">Game ID</label>
													<div class="col-lg-8">
														<span class="label label-success">MG ID</span> <?= $user-> mg_id?> 
														<span class="label label-success">PT ID</span> <?= $user-> pt_id?>
													</div>
												</div>
											
											</fieldset>
											
											<hr class="dotted">
											<h4 class="mb-xlg">Change Password</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label">New Password</label>
													<div class="col-md-8">
														<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-key"></i></span>
															</span>
															<input type="password" class="form-control" placeholder="New Password">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Repeat New Password</label>
													<div class="col-md-8">
														<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-key"></i></span>
															</span>
															<input type="password" class="form-control" placeholder="Repeat New Password">
														</div>
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>
									</div>
									
									
									<div id="account" class="tab-pane <?= $cur_tab == 'account' ? 'active':''?>">
										<h4 class="mb-xlg">Account Information</h4>
											<div class="well well-sm">
											<div class="table-responsive">
												<table class="table mb-none">
													<thead>
														<tr>
															<th>#</th>
															<th>Holders</th>
															<th>Bank Name</th>
															<th>Branch Name</th>
															<th>Account Num</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>2</td>
															<td>銀大廈</td>
															<td>上海中銀</td>
															<td>上海</td>
															<td>2545551242</td>
															<td class="actions">
																<a href=""><i class="fa fa-pencil"></i></a>
																<a href="" class="delete-row" data-toggle="modal" data-target="#modalBootstrap"><i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
														<tr>
															<td>1</td>
															<td>銀大廈</td>
															<td>上海中銀</td>
															<td>上海</td>
															<td>2545551242</td>
															<td class="actions">
																<a href=""><i class="fa fa-pencil"></i></a>
																<a href="" class="delete-row" data-toggle="modal" data-target="#modalBootstrap"><i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
											
											<hr class="dotted">
											<h4 class="mb-xlg">E-Wallet Statement</h4>
											<div class="table-responsive">
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>Date</th>
															<th>Type</th>
															<th>Description</th>
															<th class="text-right">Deposit</th>
															<th class="text-right">Withdraw</th>
															<th class="text-right">Amount</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><small>06/27/2015</small></td>
															<td>Deposit</td>
															<td>Wallet</td>
															<td class="text-right text-primary ">300,000</td>
															<td class="text-right text-danger">0</td>
															<td class="text-right">300,000</td>
														</tr>
														<tr>
															<td><small>06/27/2015</small></td>
															<td>Withdraw</td>
															<td>Wallet</td>
															<td class="text-right text-primary ">0</td>
															<td class="text-right  text-danger">300,000</td>
															<td class="text-right">0</td>
														</tr>
														<tr>
															<td><small>06/27/2015</small></td>
															<td>Coupon</td>
															<td>Wallet</td>
															<td class="text-right text-primary ">3,000</td>
															<td class="text-right  text-danger">0</td>
															<td class="text-right">0</td>
														</tr>
														<tr>
															<td><small>06/27/2015</small></td>
															<td>Transfer</td>
															<td>Wallet to PT</td>
															<td class="text-right text-primary ">30,000</td>
															<td class="text-right  text-danger">0</td>
															<td class="text-right">30,000</td>
														</tr>
														<tr>
															<td><small>06/27/2015</small></td>
															<td>Transfer</td>
															<td>MG to Wallet</td>
															<td class="text-right text-primary ">300,000</td>
															<td class="text-right  text-danger">0</td>
															<td class="text-right">300,000</td>
														</tr>
														<tr>
															<td><small>06/27/2015</small></td>
															<td>Comp</td>
															<td>Comp to Wallet</td>
															<td class="text-right text-primary ">50,000</td>
															<td class="text-right  text-danger">0</td>
															<td class="text-right">350,000</td>
														</tr>
													</tbody>
												</table>
												</div>

												<div class="row">
													<div class="col-md-12 text-center">
														<button type="submit" class="btn btn-primary">View All Statement</button>
													</div>
												</div>
											
									</div>
									
									
									
									<div id="affiliate" class="tab-pane <?= $cur_tab == 'affiliate' ? 'active':''?>">
										<form class="form-horizontal" method="get">										
										<h4 class="mb-xlg">Assigned Agent</h4>
											<fieldset>
											<div class="form-group has-warning">
												<label class="col-md-3 control-label">Upper Agent Code</label>
												<div class="col-md-8">
													<div class="input-group input-group-icon">
														<span class="input-group-addon">
															<span class="icon"><i class="fa fa-user-secret"></i></span>
														</span>
														<input type="text" class="form-control" placeholder="Left icon" value="baofa88" readonly>
													</div>
												</div>
											</div>
											</fieldset>
											
											<hr class="dotted">
											<h4 class="mb-xlg">Affiliate Information</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Affiliate ID</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileFirstName" value="CN888888888" readonly>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName"><span class="required">*</span>  Email Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="Email" value="kinguser@gmail.com">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="City"><span class="required">*</span>  City</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="City" value="鑛動">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany"><span class="required">*</span>  Country</label>
													<div class="col-md-8">
													
														<select name="CountryList" class="form-control" id="CountryList">
															<option value="">Please select</option>
															<option selected value="1">China</option>
															<option value="108">Thailand</option>
															<option value="124">Cambodia</option>
															<option value="4">Philippines</option>
															<option value="107">Taiwan</option>															
															<option value="2">Indonesia</option>
															<option value="3">Japan</option>															
															<option value="5">Malaysia</option>
															<option value="6">Singapore</option>
															<option value="7">Vietnam</option>
															<option value="8">Afghanistan</option>
															<option value="9">Albania</option>
															<option value="10">Algeria</option>
															<option value="12">Argentina</option>
															<option value="13">Armenia</option>
															<option value="14">Australia</option>
															<option value="15">Austria</option>
															<option value="16">Azerbaijan</option>
															<option value="17">Bahrain</option>
															<option value="18">Belarus</option>
															<option value="19">Belgium</option>
															<option value="20">Belize</option>
															<option value="21">Bolivia</option>
															<option value="22">Bosnia and Herzegovina</option>
															<option value="23">Brazil</option>
															<option value="24">Brunei Darussalam</option>
															<option value="25">Canada</option>
															<option value="26">Chile</option>
															<option value="28">Colombia</option>
															<option value="29">Costa Rica</option>
															<option value="30">Croatia</option>
															<option value="31">Czech Republic</option>
															<option value="32">Denmark</option>
															<option value="33">Dominican Republic</option>
															<option value="34">Ecuador</option>
															<option value="35">Egypt</option>
															<option value="36">El Salvador</option>
															<option value="37">Faroe Islands</option>
															<option value="38">Finland</option>
															<option value="39">France</option>
															<option value="40">Georgia</option>
															<option value="41">Germany</option>
															<option value="42">Greece</option>
															<option value="43">Grenada</option>
															<option value="44">Guatemala</option>
															<option value="45">Honduras</option>
															<option value="46">Hungary</option>
															<option value="47">Iceland</option>
															<option value="48">India</option>
															<option value="50">Iran</option>
															<option value="51">Iraq</option>
															<option value="53">Ireland</option>
															<option value="54">Islamic Republic of Pakistan</option>
															<option value="55">Italy</option>
															<option value="57">Jamaica</option>
															<option value="59">Jordan</option>
															<option value="60">Kazakhstan</option>
															<option value="61">Kenya</option>
															<option value="63">Kuwait</option>
															<option value="64">Kyrgyzstan</option>
															<option value="65">Latvia</option>
															<option value="66">Lebanon</option>
															<option value="67">Libya</option>
															<option value="68">Liechtenstein</option>
															<option value="69">Lithuania</option>
															<option value="70">Luxembourg</option>
															<option value="71">Macao S.A.R.</option>
															<option value="72">Macedonia (FYROM)</option>
															<option value="74">Maldives</option>
															<option value="75">Malta</option>
															<option value="77">Mexico</option>
															<option value="78">Mongolia</option>
															<option value="80">Morocco</option>
															<option value="81">Nepal</option>
															<option value="82">New Zealand</option>
															<option value="83">Nicaragua</option>
															<option value="84">Norway</option>
															<option value="85">Oman</option>
															<option value="86">Panama</option>
															<option value="87">Paraguay</option>
															<option value="88">Peru</option>
															<option value="89">Poland</option>
															<option value="90">Portugal</option>
															<option value="92">Principality of Monaco</option>
															<option value="93">Puerto Rico</option>
															<option value="94">Qatar</option>
															<option value="95">Romania</option>
															<option value="96">Russia</option>
															<option value="97">Saudi Arabia</option>
															<option value="98">Serbia</option>
															<option value="100">Slovakia</option>
															<option value="101">Slovenia</option>
															<option value="102">South Africa</option>
															<option value="103">Spain</option>
															<option value="104">Sweden</option>
															<option value="105">Switzerland</option>
															<option value="106">Syria</option>															
															<option value="109">Trinidad and Tobago</option>
															<option value="110">Tunisia</option>
															<option value="111">Turkey</option>
															<option value="112">U.A.E.</option>
															<option value="113">Ukraine</option>
															<option value="115">United Kingdom</option>
															<option value="116">Uruguay</option>
															<option value="118">Uzbekistan</option>
															<option value="119">Venezuela</option>
															<option value="121">Yemen</option>
															<option value="122">Zimbabwe</option>
															<option value="123">Bulgaria</option>															
															<option value="125">Netherlands</option>
															<option value="126">Cyprus</option>
															<option value="127">Andorra</option>
															<option value="128">Anguilla</option>
															<option value="129">Uganda</option>

														</select>

													</div>
												</div>													
												<div class="form-group">
													<label class="col-md-3 control-label" for="Phone"><span class="required">*</span>  Phone</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="Phone" value="+83 02154555445">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="Phone">  IM Type</label>
													<div class="col-md-8">
														<select id="Gender" class="form-control">
													  <option>QQ</option>
													  <option>Skype</option>
													  <option>Kakao Talk</option>
													</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="Phone">  IM Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="Phone" value="kinguser">
													</div>
												</div>
											</fieldset>
											
											<hr class="dotted short">
											<h4 class="mb-xlg">Description</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Affiliate Info</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" id="profileBio"></textarea>
													</div>
												</div>
											</fieldset>

											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>
									
									<div id="affiliate-payment" class="tab-pane <?= $cur_tab == 'affiliate_payment' ? 'active':''?>">
										<form class="form-horizontal" method="get">
											<h4 class="mb-xlg">Affiliate Payment Account</h4>
											
											<div class="well well-sm">
											<div class="table-responsive">
												<table class="table mb-none">
													<thead>
														<tr>
															<th>#</th>
															<th>Holders</th>
															<th>Bank Name</th>
															<th>Branch Name</th>
															<th>Account Num</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>2</td>
															<td>銀大廈</td>
															<td>上海中銀</td>
															<td>上海</td>
															<td>2545551242</td>
															<td class="actions">
																<a href=""><i class="fa fa-pencil"></i></a>
																<a href="" class="delete-row" data-toggle="modal" data-target="#modalBootstrap"><i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
														<tr>
															<td>1</td>
															<td>銀大廈</td>
															<td>上海中銀</td>
															<td>上海</td>
															<td>2545551242</td>
															<td class="actions">
																<a href=""><i class="fa fa-pencil"></i></a>
																<a href="" class="delete-row" data-toggle="modal" data-target="#modalBootstrap"><i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											</div>
											
											<hr class="dotted">
											<h4 class="mb-xlg">Affiliate Statement</h4>
											<div class="table-responsive">
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>Date</th>
															<th>Level</th>
															<th>Type</th>
															<th>Account</th>
															<th class="text-right">Withdraw</th>
															<th class="text-right">State</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><small>06/01/2015 ~ <br>06/31/2015</small></td>
															<td>Level 2</td>
															<td>Transfer</td>
															<td>Wallet</td>
															<td class="text-right text-danger">300,000</td>
															<td class="text-right">Ready</td>
														</tr>
														<tr>
															<td><small>05/01/2015 ~ <br>05/30/2015</small></td>
															<td>Level 1</td>
															<td>Wire Transfer</td>
															<td>上海中銀 - 1242</td>
															<td class="text-right  text-danger">300,000</td>
															<td class="text-right text-primary"><strong>Complete</strong></td>
														</tr>
													</tbody>
												</table>												
											</div>
											
											<div class="row">
													<div class="col-md-12 text-center">
														<button type="submit" class="btn btn-primary">View All Statement</button>
													</div>
												</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-3">

							<h4 class="mb-md">Affiliate <small><a class=" pull-right" href="#">View Report</a></small></h4>
							<ul class="simple-card-list mb-xlg">
								<li class="dark">
									<h3><?= number_format($user -> deps1_child_count)?>/<?= number_format($user -> deps1_child_count)?></h3>
									<p>1 Depth / 2 Depth</p>
								</li>
								<li class="dark">
									<h3>189,000 CNY</h3>
									<p>This Month</p>
								</li>
								<li class="dark">
									<h3>389,000 CNY</h3>
									<p>Last Month</p>
								</li>
							</ul>

							<h4 class="mb-md">User Stats <small><a class=" pull-right" href="#">View Report</a></small></h4>
							<ul class=" mb-xlg">
								<li>
									OS : <?= $user_track ? $user_track -> platform:''?><br>
								    BROWSER : <?= $user_track ? $user_track -> browser:''?>
								</li>
								<li>Join Time : <?= $user_track ? time_to_string($user-> join_date):''?><br>
									Join IP  : <strong><?= $user_track ? $user-> join_ip:''?></strong>  <img src="<?=base_url('assets/');?>/flags/China.png" alt="China" height="13px">
								</li>
								<li>Last Login Time : <?= $user_track ? time_to_string($user-> reg_date):''?><br>
									Last Login IP : <strong><?= $user_track ? $user_track-> user_ip:''?> </strong> <img src="<?=base_url('assets/');?>/flags/China.png" alt="China" height="13px"></li>
							</ul>

							<h4 class="mb-md">1:1 Chat Log <small><a class=" pull-right" href="#">View Report</a></small></h4>
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
							</ul>
						</div>

					</div>
					
					   <script>
                                $(document).ready(function() {
                                    $('[data-toggle="tabajax"]').click(function(e) {
                                        alert('탭 클릭');
                                        var $this = $(this);
                                        loadurl = $this.attr('href');
                                        targ = $this.attr('data-target');
                                    
                                        $.get(loadurl, function(data) {
                                            $(targ).html(data);
                                        });
                                    
                                        $this.tab('show');
                                        return false;
                                    });
                                    
                                    $('.coupon-create').click(function() {
                                        //alert($(this).attr('data-url'));    
                                        openModal($(this).attr('data-url'));    
                                    });
                                }); 
                          </script>
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>
