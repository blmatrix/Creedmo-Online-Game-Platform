<?php
include_once APPPATH . "views/brand/template/top.php";
?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/brand/template/side_bar.php";
	?>
	<section role="main" class="content-body">
		<header class="page-header">
                        <h2>Request Payment</h2>
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Request Payment</span></li>
                            </ol>
                            <a class="sidebar-right-toggle"  href="<?= site_url('brand'); ?>"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
               <h2 class="panel-title">Request Payment</h2>
           </header>

							<div class="panel-body">
								 
								 <div class="row">
								 
									<div class="col-md-6">
										<section class="panel">
											<div class="panel-body bg-secondary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fa fa-money"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Complete Payment</h4>
															<div class="info">
																<strong class="amount"><?= number_format($total_compllete_payment -> sum,2 )?> CNY</strong>
															</div>
														</div>
														<div class="summary-footer">
															수익금 정산 완료 금액
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
										
									<div class="col-md-6">
										<section class="panel">
											<div class="panel-body bg-tertiary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fa fa-bank"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Your Balance</h4>
															<div class="info">
																<strong class="amount"><?= number_format($wallet -> agent_settlement_balance,2)?> CNY</strong>
															</div>
														</div>
														<div class="summary-footer">
															현재 출금 가능 금액
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-12">
									<a  id ="request_payment" data-url="<?= site_url('brand/reports/form/request_payment') ?>" class="btn btn-primary pull-right" role="button">
									    Request Payment <i class="fa fa-plus"></i>
									</a>
									</div>
								</div>							


								<h4 class="text-weight-bold text-dark"></h4>
								<hr class="mt-md mb-md">
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th class="hidden-xs">#</th>
										<th>Type</th>
										<th class="hidden-xs hidden-sm">Name</th>
										<th class="hidden-xs hidden-sm">Bank Name</th>
										<th class="hidden-xs hidden-sm">Bank Account</th>
										<th width="110px" class="text-right">Withdraw</th>
										<th class="text-right hidden-xs">Request Date</th>
										<th class="text-right">Confirm Date</th>
										<th class="text-right">State</th>	
										<th class="text-right">cancel</th>	
									</tr>
									</thead>
									<tbody>
<?php foreach($request_payments as $request_payment):?>									    
										<tr  class ="">
											<td class="hidden-xs"><?= $request_payment -> agent_settlement_no?></td>
											<td><?= $request_payment -> withdraw_type_str?></td>
											<td class="hidden-xs hidden-sm"><?= $request_payment -> user_name?></td>
											<td class="hidden-xs hidden-sm"><?= $request_payment -> bank_name ? $request_payment -> bank_name : "-"?></td>
											<td class="hidden-xs hidden-sm"><?= $request_payment -> bank_account?  $request_payment -> bank_account : '-'?></td>
											<td class="text-right text-danger"><h4 class="text-weight-bold" style="margin:0"><?= number_format($request_payment -> settlement_amount,2)?></h4></td>
											<td class="text-right hidden-xs"><small><?= time_to_string($request_payment -> reg_date)?></small></td>
											<td class="text-right"><small><?= !empty($request_payment -> confirm_date) ? time_to_string($request_payment -> confirm_date):'-'?></small></td>
											<td class="text-right">
											    <span class="text-right  text-weight-semibold text-primary"><?= $request_payment -> settlement_status_str?></span>
											</td>
											<td class="text-right">
											    <?php if ($request_payment -> settlement_status == SETTLEMENT_STATUS_BEFORE_CONFIRM || $request_payment -> settlement_status == SETTLEMENT_STATUS_NOT_CHECKED):?>
                                                 <button type="button" class="btn btn-xs btn-dark" onclick = "changeAgentSettleState('<?=$request_payment-> settlement_status?>','<?= SETTLEMENT_STATUS_CANCLED ?>','<?=$request_payment-> agent_settlement_no?>');"><i class="fa fa-trash-o"></i></button></td>
                                                <?php else:?>
                                                    -
                                                <?php endif;?>
											</td>
										</tr>
<?php endforeach;?>										
									</tbody>
								</table>
								<form target = "hiddenframe" name = "change_form" id = "change_form" action = "<?= site_url('brand/reports/action/delete')?>" method ="POST">
                                     <input type ="hidden" id = "act_mode" name = 'act_mode' value =""/>              
                                     <input type ="hidden" id = "cur_status" name = 'cur_status' value =""/>              
                                     <input type ="hidden" id = "change_status" name = 'change_status' value =""/>              
                                     <input type ="hidden" id = "agent_settlement_no" name = 'agent_settlement_no' value =""/>   
                                 </form>
							
								<div class="row">
                                    <nav class="text-center">
                                       <?= $paging -> getBoardPage()?>                                  
                                    </nav>
                                </div>  
								
							</div>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#request_payment').click(function(){
                                        openModal($(this).attr('data-url'));
                                    });    
                                });
                                
                                function changeAgentSettleState(curStatus,changeStatus,e){
                                    $('#act_mode').val('delete');
                                    $('#cur_status').val(curStatus);
                                    $('#change_status').val(changeStatus);
                                    $('#agent_settlement_no').val(e);
                                    $('#change_form').submit();
                                }
                          </script>
						  <!-- End Modal Code -->
						  
						</section><!-- end: panel -->

<!-- end: page -->
</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->

<?php
include_once APPPATH . "views/brand/template/footer.php";
?>