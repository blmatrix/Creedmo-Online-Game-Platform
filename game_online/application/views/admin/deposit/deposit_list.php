 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Deposit</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Deposit</span></li>
								<li><span>Deposit List</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">

						
								<h2 class="panel-title">Deposit List</h2>
							</header>
							
							<div class="panel-body">
								<div class="well well-sm">
								    <form class="form-inline" id = "d_serarch_form" name = "d_search_form" method ="GET">
									<div class="row">
										<div class="col-md-12">
												<div class="input-group">
												  <input type="text" name = "search_keyword" id ="search_keyword" class="form-control" value = "<?= $search_keyword?>"placeholder="Search for...">
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
												
												<select id="deposit_status" name ="deposit_status" class="form-control">
                                                  <option value ="">Deposit Status</option>
                                                  <option value ="">----------------</option>
                                                  <option value ="<?= DEPOSIT_STATUS_NOT_CHECKED?>"      <?= $deposit_status == DEPOSIT_STATUS_NOT_CHECKED ?'selected':''?> >Not Checked</option>
                                                  <option value ="<?= DEPOSIT_STATUS_BEFORE_CONFIRM?>"   <?= $deposit_status == DEPOSIT_STATUS_BEFORE_CONFIRM?'selected':''?>>Before comfirm</option>
                                                  <option value ="<?= DEPOSIT_STATUS_CONFIRMED?>"        <?= $deposit_status == DEPOSIT_STATUS_CONFIRMED ?'selected':''?>>Confirmd</option>
                                                  <option value ="<?= DEPOSIT_STATUS_CANCLED?>"          <?= $deposit_status == DEPOSIT_STATUS_CANCLED?'selected':''?>>Cancelled by User</option>
                                                  <option value ="<?= DEPOSIT_STATUS_CANCLED_BY_ADMIN?>" <?= $deposit_status == DEPOSIT_STATUS_CANCLED_BY_ADMIN ?'selected':''?>>Cancelled</option>
                                                </select>
                                                
												    <a href="#"  data-url = "<?= site_url('admin/deposits/form') ?>?request_form=deposit&request_type=create" class="btn btn-primary  pull-right deposit-create" role="button">Add <i class="fa fa-plus"></i></a>
											
											
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
								    <?php if (!empty($deposit_sum_result-> total_deposit_real_amount) || !empty($deposit_sum_result-> total_deposit_bonus_amount)):?>
								    <span class="text-primary "> <?= number_format(($deposit_sum_result-> total_deposit_real_amount + $deposit_sum_result-> total_deposit_bonus_amount)) ?> CNY</span> 
								    <?php else:?>
								    0    
								    <?php endif;?>
								</h4>
								<h5 class="text-weight-semibold text-dark text-uppercase"><span class="label label-dark">Deposit</span>
								    <?= !empty($deposit_sum_result-> total_deposit_real_amount) ? number_format($deposit_sum_result-> total_deposit_real_amount):''?> 
								<span class="label label-dark">Bonus</span> <?= !empty($deposit_sum_result-> total_deposit_bonus_amount) ? number_format($deposit_sum_result-> total_deposit_bonus_amount):''?> </span></h5>
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">User ID</th>	
										<th>Name</th>
										<th>Level</th>	
										<th width="110px" class="text-right">Deposit</th>
										<th width="75px" class="text-right">Bonus</th>					
										<th class="text-right hidden-xs hidden-sm">Date</th>
										<th class="text-right hidden-xs hidden-sm">Confirm Date</th>
										<th class="text-right">State</th>	
									</tr>
									</thead>
									<tbody>
<?php foreach($deposits as $deposit):?>       
                                        <tr class ="<?= $deposit-> deposit_status == DEPOSIT_STATUS_NOT_CHECKED?'warning': ''?>" >
                                            <td><?= $deposit-> deposit_no?></td>
                                            <td class="text-left">
                                                <?php if ($deposit->login_status == 'Y'):?>
                                                     <span class="label label-success">On</span>
                                                <?php else:?>
                                                     <span class="label label-default">On</span>
                                                <?php endif?>
                                                <strong>
                                                    <a href="<?= site_url('admin/member/member_view')?>/<?= $deposit-> user_no?>">&nbsp;<?= $deposit-> user_id?></a>
                                                </strong>         
                                            </td>
                                            <td><?= $deposit-> user_name?></td>
                                            <td><?= $deposit-> user_level_code_name?>(+<?=  $deposit->deposit_bonus_rate?>%)</td>
                                            <td class="text-right"><strong><?= number_format($deposit-> deposit_amount)?></strong></td>
                                            <td class="text-right"><strong><?= number_format($deposit-> deposit_bonus)?></strong></td>
                                            <td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($deposit->reg_date);?></small></td>
                                            <td class="text-right hidden-xs hidden-sm"><small><?= $deposit->confirm_date != NULL ? time_to_string($deposit->confirm_date):''?></small></td>
                                            <td class="text-right">
                                                <?php if ($deposit-> deposit_status == DEPOSIT_STATUS_NOT_CHECKED):?>
                                                <button type="button" class="btn btn-xs btn-danger"  onclick= "changeDepositState('<?=$deposit-> deposit_status?>','<?=DEPOSIT_STATUS_BEFORE_CONFIRM?>','<?= $deposit-> deposit_no?>');" > <i class="fa fa-bell-slash-o"></i> Check</button>
                                                <?php endif;?>
                                                <?php if ($deposit-> deposit_status == DEPOSIT_STATUS_BEFORE_CONFIRM):?>
                                                <button type="button" class="btn btn-xs btn-primary" data-toggle="confirmation" onclick = "changeDepositState('<?=$deposit-> deposit_status?>','<?= DEPOSIT_STATUS_CONFIRMED?>','<?= $deposit-> deposit_no?>');" >Confirm</button>
                                                <button type="button" class="btn btn-xs btn-dark" onclick = "changeDepositState('<?=$deposit-> deposit_status?>','<?= DEPOSIT_STATUS_CANCLED_BY_ADMIN?>','<?= $deposit-> deposit_no?>');"><i class="fa fa-trash-o"></i></button></td>
                                                <?php endif;?>
                                                <?php if ($deposit-> deposit_status == DEPOSIT_STATUS_CONFIRMED):?>
                                                <span class="text-right  text-weight-semibold text-primary">Complete</span>
                                                <?php endif;?>
                                                <?php if ($deposit-> deposit_status == DEPOSIT_STATUS_CANCLED):?>
                                                <span class="text-right text-warning">Cancelled  by User</span>
                                                <?php endif;?>
                                                <?php if ($deposit-> deposit_status == DEPOSIT_STATUS_CANCLED_BY_ADMIN):?>
                                                <span class="text-right text-warning">Cancelled</span>
                                                <?php endif;?>
                                            </td>
                                        </tr>
<?php endforeach;?>     
									</tbody>
								</table>
							     <form target = "hiddenframe" name = "d_change_form" id = "d_change_form" action = "<?= site_url('admin/deposits/deposit_list')?>" method ="POST">
							         <input type ="hidden" id = "act_mode" name = 'act_mode' value =""/>              
                                     <input type ="hidden" id = "cur_status" name = 'cur_status' value =""/>              
                                     <input type ="hidden" id = "change_status" name = 'change_status' value =""/>              
                                     <input type ="hidden" id = "deposit_no" name = 'deposit_no' value =""/>   
							     </form>
							         
								 <div class="row">
                                    <nav class="text-center">
                                       <?= $paging -> getBoardPage()?>
                                    </nav>
                                </div>
								
							</div>

							<script type="text/javascript">
							function changeDepositState(curStatus,changeStatus,e){
							    // location.href = "<?= site_url('admin/deposits/deposit_list')?>?act_mode=change_status&cur_status='+curStatus + '&chnage_status='+changeStatus + '$ddeposit_no='+e; 
							    $('#act_mode').val('change_deposit_status');
							    $('#cur_status').val(curStatus);
							    $('#change_status').val(changeStatus);
							    $('#deposit_no').val(e);
							    $('#d_change_form').submit();
							}
                                $(document).ready(function() {
                                    $('.deposit-create').click(function() {
                                         openModal($(this).attr('data-url'));
                                    });
                                }); 
                          </script>

						  <!-- End Modal Code -->
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>