 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Withdraw</h2>
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Withdraw</span></li>
								<li><span>Withdraw List</span></li>
							</ol>
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Withdraw List</h2>
							</header>
							<div class="panel-body">
								<div class="well well-sm">
								     <form class="form-inline" id = "w_serarch_form" name = "w_search_form" method ="GET">
									<div class="row">
										<div class="col-md-12">
											  <form class="form-inline" id = "w_serarch_form" name = "w_search_form" method ="GET">
												<div class="input-group">
												  <input type="text" name = "search_keyword" id ="search_keyword" class="form-control" value = "<?= $search_keyword?>" placeholder="Search for...">
												  <span class="input-group-btn">
													<button class="btn btn-primary" type="submit">Find</button>
												  </span>
												</div><!-- /input-group -->
												<div class="visible-sm clearfix mt-sm mb-sm"></div>
												<select id="user_level" name ="user_level" class="form-control">
                                                  <option value ="">Level</option>
                                                  <option value ="">----------------</option>
                                                  <option value ="1" <?= $user_level == 1 ?'selected':''?> >Bronze</option>
                                                  <option value ="2" <?= $user_level == 2 ?'selected':''?>>Silver</option>
                                                  <option value ="3" <?= $user_level == 3 ?'selected':''?>>Gold</option>
                                                  <option value ="4" <?= $user_level == 4 ?'selected':''?>>Platinum</option>
                                                </select>
											    <select id="withdraw_status" name ="withdraw_status" class="form-control">
                                                  <option value ="">Withdraw Status</option>
                                                  <option value ="">----------------</option>
                                                  <option value ="<?=WITHDRAW_STATUS_NOT_CHECKED?>"  <?= $withdraw_status == WITHDRAW_STATUS_NOT_CHECKED?'selected':''?> >Not Checked</option>
                                                  <option value ="<?=WITHDRAW_STATUS_BEFORE_CONFIRM?>" <?= $withdraw_status == WITHDRAW_STATUS_BEFORE_CONFIRM ?'selected':''?> >Before Confirm</option>
                                                  <option value ="<?=WITHDRAW_STATUS_CONFIRMED?>" <?= $withdraw_status == WITHDRAW_STATUS_CONFIRMED ?'selected':''?> >Confirmed</option>
                                                  <option value ="<?=WITHDRAW_STATUS_CANCLED?>"  <?= $withdraw_status == WITHDRAW_STATUS_CANCLED ?'selected':''?>>Cancelled by User</option>
                                                  <option value ="<?=WITHDRAW_STATUS_CANCLED_BY_ADMIN?>" <?= $withdraw_status == WITHDRAW_STATUS_CANCLED_BY_ADMIN ?'selected':''?> >Cancelled</option>
                                                </select>
												  <a href="#"  data-url = "<?= site_url('admin/withdraws/form') ?>?request_form=withdraw&request_type=create" class="btn btn-primary  pull-right withdraw-create" role="button">Add <i class="fa fa-plus"></i></a>
										</div>	
									</div>								
									<hr class="dotted short">	
								        <div class="row">
                                         <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group" style = "width : 420px">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                        <input type="text" class="form-control" id = "daterange" name="daterange" value = "<?= $daterange?>">
                                                    </div>
                                                </div>                                            
                                            <button style = "margin-left : 10px" data-search = "last month"  type="button" class="btn btn-sm btn-default search-date">
                                            Last Month
                                            </button>
                                            <button data-search = "this month" type="button" class="btn btn-sm btn-default search-date">
                                                This Month
                                            </button>
                                            <button data-search = "last week" type="button" class="btn btn-sm btn-default search-date">
                                                Last Week
                                            </button>
                                            <button data-search = "this week" type="button" class="btn btn-sm btn-default search-date">
                                                This Week
                                            </button>                                           
                                            <button data-search = "yesterday" type="button" class="btn btn-sm btn-default search-date">
                                                Yesterday
                                            </button> 
											 <button data-search = "today" type="button" class="btn btn-sm btn-default search-date">
                                                Today
                                            </button> 
											<button type = "submit" class="btn btn-sm btn-primary" >Find</button>
										</div>  
									</div>
                                    </form>
								</div>

								<h4 class="text-weight-bold text-dark text-uppercase">
								   <?= $search_date_string?> = 
								   <?= !empty($withdraw_sum_result -> total_withdraw_amount) ? number_format($withdraw_sum_result -> total_withdraw_amount) : 0 ?>
								</h4>
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">User ID</th>	
										<th>Name</th>
										<th>Bank Name</th>
										<th>Bank Account</th>
										<th width="110px" class="text-right">Withdraw</th>
										<th class="text-right hidden-xs hidden-sm">Date</th>
										<th class="text-right hidden-xs hidden-sm">Confirm Date</th>
										<th class="text-right">State</th>	
									</tr>
									</thead>
									<tbody>
<?php foreach($withdraws as $withdraw):?>									    
										<tr class ="<?= $withdraw-> withdraw_status == WITHDRAW_STATUS_NOT_CHECKED?'warning': ''?>" >
										    <td><?= $withdraw-> withdraw_no?></td>
                                            <td class="text-left">
                                                <?php if ($withdraw->login_status == 'Y'):?>
                                                     <span class="label label-success">On</span>
                                                <?php else:?>
                                                     <span class="label label-default">On</span>
                                                <?php endif?>
                                                <strong>
                                                    <a href="<?= site_url('admin/member/member_view')?>/<?=$withdraw-> user_no ?>">&nbsp;<?= $withdraw-> user_id?></a>
                                                </strong>         
                                            </td>
											<td><?= $withdraw -> user_name?></td>
											<td><?= $withdraw -> bank_name?></td>
											<td><?= $withdraw -> bank_account?></td>
											<td class="text-right"><strong><?= number_format($withdraw -> withdraw_amount)?></strong></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($withdraw -> reg_date)?></small></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= $withdraw -> confirm_date != NULL ? time_to_string($withdraw -> confirm_date):'-'?></small></td>
											<td class="text-right">
                                                <?php if ($withdraw-> withdraw_status ==  WITHDRAW_STATUS_NOT_CHECKED):?>
                                                <button type="button" class="btn btn-xs btn-danger"  onclick= "changeWithdrawState('<?=$withdraw-> withdraw_status?>','<?=WITHDRAW_STATUS_BEFORE_CONFIRM?>','<?= $withdraw-> withdraw_no?>');" > <i class="fa fa-bell-slash-o"></i> Check</button>
                                                <?php endif;?>
                                                <?php if ($withdraw-> withdraw_status ==  WITHDRAW_STATUS_BEFORE_CONFIRM):?>
                                                <button type="button" class="btn btn-xs btn-primary" data-toggle="confirmation" onclick = "changeWithdrawState('<?=$withdraw-> withdraw_status?>','<?= WITHDRAW_STATUS_CONFIRMED?>','<?= $withdraw -> withdraw_no?>');" >Confirm</button>
                                                <button type="button" class="btn btn-xs btn-dark" onclick = "changeWithdrawState('<?=$withdraw-> withdraw_status?>','<?= WITHDRAW_STATUS_CANCLED_BY_ADMIN?>','<?= $withdraw-> withdraw_no?>');"><i class="fa fa-trash-o"></i></button></td>
                                                <?php endif;?>
                                                <?php if ($withdraw-> withdraw_status ==  WITHDRAW_STATUS_CONFIRMED):?>
                                                <span class="text-right text-weight-semibold text-primary">Complete</span>
                                                <?php endif;?>
                                                <?php if ($withdraw-> withdraw_status ==  WITHDRAW_STATUS_CANCLED):?>
                                                <span class="text-right text-warning">Cancelled by User</span>
                                                <?php endif;?>
                                                <?php if ($withdraw-> withdraw_status ==  WITHDRAW_STATUS_CANCLED_BY_ADMIN):?>
                                                <span class="text-right text-warning">Cancelled</span>
                                                <?php endif;?>
                                            </td>
										</tr>
<?php endforeach;?>										

									</tbody>
								</table>
							     <form target = "hiddenframe" name = "w_change_form" id = "w_change_form" action = "<?= site_url('admin/withdraws/withdraw_list')?>" method ="POST">
                                     <input type ="hidden" id = "act_mode" name = 'act_mode' value =""/>              
                                     <input type ="hidden" id = "cur_status" name = 'cur_status' value =""/>              
                                     <input type ="hidden" id = "change_status" name = 'change_status' value =""/>              
                                     <input type ="hidden" id = "withdraw_no" name = 'withdraw_no' value =""/>   
                                 </form>
                                 
								<div class="row">
                                    <nav class="text-center">
                                       <?= $paging -> getBoardPage()?>
                                    </nav>
                                </div>
							</div>
                            <script type="text/javascript">
                                function changeWithdrawState(curStatus,changeStatus,e){
                                    $('#act_mode').val('change_deposit_status');
                                    $('#cur_status').val(curStatus);
                                    $('#change_status').val(changeStatus);
                                    $('#withdraw_no').val(e);
                                    $('#w_change_form').submit();
                                }
                                $(document).ready(function() {
                                    $('.withdraw-create').click(function() {
                                         openModal($(this).attr('data-url'));
                                    });
                                }); 
                          </script>
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>