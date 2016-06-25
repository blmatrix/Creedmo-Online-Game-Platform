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
								<li><span>Agent Commission Detail</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
					<section class="panel">
						<div class="panel-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-7 mt-md">
											<h2 class="h3 mt-none mb-sm text-dark text-weight-bold"><?= $user -> user_id ?>[<?= $user-> affiliate_code?>] <small>Commission Detail</small></h3>
											<h4 class="h4 m-none text-danger text-weight-bold">
												<!-- <button type="button" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-arrow-left"></i> </button> -->
												<?= $daterange ?>
												<!-- <button type="button" class="mb-xs mt-xs mr-xs btn btn-default" disabled><i class="fa fa-arrow-right"></i> </button> -->
											</h4>
											
										</div>
										<div class="col-sm-5 text-right mt-md">
											<address class="ib ">
												<span class="label label-success">On</span> <strong><a href="<?= site_url('admin/member/member_view');?>/<?= $user-> user_no?>"><?= $user -> user_id ?></a></strong>
												<br/>
												Agent CODE : <a href="<?= site_url('admin/affiliate/agent_detail');?>"><strong><?= $user-> affiliate_code?></strong></a>
												<br/>
												Phone: <strong> <?= $user-> user_phone?> </strong>
												<br/>
												<?= $user-> im_type?> :  <strong><?= $user-> im_id?> </strong>
											</address>
										</div>
									</div>
								</header>
<?php if (!empty($agent_settle['agent_list'][0])):?>    
								<div class="bill-info">
									<div class="row">
										<div class="col-md-3">
										    <?php if($act_mode != "report"):?>
													<table class="table h5 text-dark">
														<tbody>
															<tr class="b-top-none">
																<td>Status</td>
																<td class="text-right text-weight-bold text-success">Ready</td>
															</tr>
															<tr>
																<td>Settlement Agent</td>
																<td class="text-right text-weight-bold">Not Yet</td>
															</tr>
															<tr class="h5">
																<td>Payment</td>
																<td class="text-right text-weight-bold  text-primary">Not Yet</td>
															</tr>
														</tbody>
													</table>
										    <?php endif;?>
										</div>
									     <div class="col-sm-4 col-sm-offset-5">
                                            <table class="table h5 text-dark">
                                                <tbody>
                                                    <tr class="b-top-none">
                                                        <td>1 Depth Subtotal</td>
                                                        <td class="text-right"><?= number_format($agent_settle['agent_list'][0] ->  deps1_total_commission,4);?> CNY</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2 Depth Subtotal</td>
                                                        <td class="text-right"><?= number_format($agent_settle['agent_list'][0] -> deps2_total_commission,4) ;?> CNY</td>
                                                    </tr>
                                                    <tr class="h4">
                                                        <td>Total Commission</td>
                                                        <td class="text-right text-weight-bold  text-primary">
                                                            <?= number_format($agent_settle['agent_list'][0] -> deps1_total_commission + 
                                                                $agent_settle['agent_list'][0] -> deps2_total_commission,4) ?> CNY
                                                        </td>
                                                    </tr>
                                                    <tr class="h4">
                                                        <td>Total Amount</td>
                                                            <td class="text-right text-weight-bold  text-primary">
                                                                <?= number_format($agent_settle['agent_list'][0] -> deps1_total_amount + 
                                                                    $agent_settle['agent_list'][0] -> deps2_total_amount,4) ?> CNY
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
												<th class="text-right text-weight-semibold">Bonus</th>
												<th class="text-right text-weight-semibold">Coupon</th>
												<th class="text-right text-weight-bold">Total Commission</th>
											</tr>
										</thead>
										<tbody>
<?php 
    $agent_settle_vo = $agent_settle['agent_list'][0];
    foreach($agent_settle_vo -> deps1_info_arr as $deps1_info):?>                                               
                                            <tr>
                                                <td> 
                                                    <strong>
                                                        <!-- <a href="<?= site_url('admin/member/member_view');?>/<?= $deps1_info -> user_no?>"> -->
                                                            <?= $deps1_info -> user_id?>
                                                        <!-- </a> -->
                                                    </strong>
                                                </td>
                                                <td class="text-right text-weight-bold text-primary h5">
                                                    <?= number_format($deps1_info -> total_slots? $deps1_info -> total_slots *  $deps1_info -> rate_arr['slots_trans_rate']: 0,4) ?> 
                                                    (<?= $deps1_info -> rate_arr['slots_trans_rate']?>%)
                                                </td>
                                                <td class="text-right text-weight-bold text-primary h5">
                                                    <?= number_format($deps1_info -> total_non_slots? $deps1_info -> total_non_slots * $deps1_info -> rate_arr['non_slots_trans_rate']:0,4)?> 
                                                    (<?= $deps1_info -> rate_arr['non_slots_trans_rate']?>%) 
                                                </td>
                                                <td class="text-right text-weight-bold text-primary h5">
                                                    <?= number_format($deps1_info -> total_live?  $deps1_info -> total_live * $deps1_info -> rate_arr['live_trans_rate']:0,4)?> 
                                                    (<?= $deps1_info -> rate_arr['live_trans_rate']?>%) 
                                                </td>
                                                <td class="text-right text-weight-semibold text-primary h4">
                                                    <?= number_format($deps1_info -> total_commission_by_game(),4)?> 
                                                </td>
                                                <td class="text-right text-weight-semibold text-danger h5">
                                                    <?= number_format($deps1_info -> total_deposit_bonus? $deps1_info -> total_deposit_bonus * $deps1_info -> rate_arr['bonus_trans_rate'] : 0,4)?> 
                                                    (<?= $deps1_info -> rate_arr['bonus_trans_rate']?>%)
                                                </td>
                                                <td class="text-right text-weight-semibold text-danger h5">
                                                    <?= number_format($deps1_info -> total_coupon_point? $deps1_info -> total_coupon_point * $deps1_info -> rate_arr['bonus_trans_rate']: 0,4)?> 
                                                    (<?= $deps1_info -> rate_arr['bonus_trans_rate']?>%)
                                                 </td>
                                                <td class="text-right text-weight-semibold text-primary h4">
                                                    <?= number_format($deps1_info -> total_commission(),4)?>
                                                 </td>
                                            </tr>
    <?php foreach($agent_settle_vo -> deps2_info_arr as $deps2_info):?>
        <?php if ($deps2_info -> affiliate_ref == $deps1_info -> user_no):?>
                                            <tr  style="background:#f5f5f5; ">
                                                <td style="padding-left:20px">
                                                    <i class="fa fa-angle-right"></i><strong><a href="<?= site_url('admin/member/member_view');?>/<?= $deps2_info -> user_no?>"><?= $deps2_info -> user_id?></a></strong>
                                                </td>
                                                <td class="text-right text-weight-semibold text-primary">
                                                    <?= number_format($deps2_info -> total_slots? $deps2_info -> total_slots *  $deps2_info -> rate_arr['slots_trans_rate']: 0,4) ?> 
                                                    (<?= $deps2_info -> rate_arr['slots_trans_rate']?>%)
                                                </td>
                                                <td class="text-right text-weight-semibold text-primary">
                                                    <?= number_format($deps2_info -> total_non_slots? $deps2_info -> total_non_slots * $deps2_info -> rate_arr['non_slots_trans_rate']:0,4)?>  
                                                    (<?= $deps2_info -> rate_arr['non_slots_trans_rate']?>%)</td>
                                                <td class="text-right text-weight-semibold text-primary">
                                                    <?= number_format($deps2_info -> total_live?  $deps2_info -> total_live * $deps2_info -> rate_arr['live_trans_rate']:0,4)?> 
                                                    (<?= $deps2_info -> rate_arr['live_trans_rate']?>%)
                                                </td>
                                                <td class="text-right text-weight-bold text-primary"><h5 style="margin:0">
                                                    <?= number_format($deps2_info -> total(),4)?></h5>
                                                 </td>
                                                <td class="text-right text-weight-semibold text-danger">
                                                    <?= number_format($deps2_info -> total_deposit_bonus? $deps2_info -> total_deposit_bonus * $deps2_info -> rate_arr['bonus_trans_rate']: 0,4)?> 
                                                    (<?= $deps2_info -> rate_arr['bonus_trans_rate']?>%)
                                                </td>
                                                <td class="text-right text-weight-semibold text-danger">
                                                    <?= number_format($deps2_info -> total_coupon_point? $deps2_info -> total_coupon_point * $deps2_info -> rate_arr['bonus_trans_rate']: 0,4)?> 
                                                    (<?= $deps2_info -> rate_arr['bonus_trans_rate']?>%)
                                                </td>
                                                <td class="text-right text-weight-bold text-primary"><h5 style="margin:0"><?= number_format($deps2_info -> total_commission(),4)?></h5>
                                                </td>
                                            </tr>
        <?php endif;?>                                          
    <?php endforeach;?>                                         
<?php endforeach;?>      										

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
                                                        <td class="text-right"><?= number_format($agent_settle['agent_list'][0] ->  deps1_total_commission,4);?> CNY</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2 Depth Subtotal</td>
                                                        <td class="text-right"><?= number_format($agent_settle['agent_list'][0] -> deps2_total_commission,4) ;?> CNY</td>
                                                    </tr>
                                                    <tr class="h4">
                                                        <td>Total Commission</td>
                                                        <td class="text-right text-weight-bold  text-primary">
                                                            <?= number_format($agent_settle['agent_list'][0] -> deps1_total_commission + 
                                                                $agent_settle['agent_list'][0] -> deps2_total_commission,4) ?> CNY
                                                        </td>
                                                    </tr>
                                                    <tr class="h4">
                                                        <td>Total Amount</td>
                                                            <td class="text-right text-weight-bold  text-primary">
                                                                <?= number_format($agent_settle['agent_list'][0] -> deps1_total_amount + 
                                                                    $agent_settle['agent_list'][0] -> deps2_total_amount,4) ?> CNY
                                                            </td>
                                                    </tr>
                                                </tbody>
                                            </table>
										</div>
									</div>
								</div>
<?php else:?>
    No Data 
<?php endif;?>
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

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>