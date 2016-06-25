 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Coupon</h2>
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Member</span></li>
								<li><span>Coupon</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Coupon</h2>
							</header>
							<div class="panel-body">
								<div class="well well-sm">
								    <form class="form-inline" id = "m_serarch-form" name = "c_search-form" method ="GET">
									<div class="row">
										<div class="col-md-12">
												<div class="input-group">
												  <input type="text" class="form-control" placeholder="Search for..." id ="search_keyword" name ="search_keyword" value ="<?= $search_keyword?>">
												  <span class="input-group-btn">
													<button type ="submit" class="btn btn-primary" >Find</button>
												  </span>
												</div><!-- /input-group -->
											  
												<div class="visible-sm clearfix mt-sm mb-sm"></div>
												<select id="State" class="form-control" id ="coupon_type" name ="coupon_type">
												  <option value ="">Total</option>
<?php foreach($coupon_types as $coupon_type):?>  												  
												  <option value = "<?= $coupon_type -> coupon_type_no?>" <?= $coupon_type-> coupon_type_no == $coupon_type ? 'selected':''?> >
												      <?= $coupon_type -> coupon_type_name?>
												  </option>
<?php endforeach;?>												  
												</select>
												<select id="user_level" name ="user_level" class="form-control">
                                                    <option value ="">Level</option>
                                                    <option value ="">----------------</option>
                                                    <option value ="1" <?= $user_level == 1 ? "selected":''?> >Bronze</option>
                                                    <option value ="2" <?= $user_level == 2 ? "selected":''?> >Silver</option>
                                                    <option value ="3" <?= $user_level == 3 ? "selected":''?> >Gold</option>
                                                    <option value ="4" <?= $user_level == 4 ? "selected":''?> >Platinum</option>
                                                </select>
                                                <select id="coupon_use_status" name ="coupon_use_status" class="form-control">
                                                    <option value ="">Use state</option>
                                                    <option value ="">----------------</option>
                                                    <option value ="1" <?= $coupon_use_status  == 1 ? "selected":''?> >Not used</option>
                                                    <option value ="2" <?= $coupon_use_status  == 2 ? "selected":''?> >Used</option>
                                                </select>
												<a href="#"  data-url = "<?= site_url('admin/member/form')?>?request_form=coupon&request_type=create" class="btn btn-primary  pull-right coupon-create" role="button">Add Coupon  <i class="fa fa-plus"></i></a>
										</div>	
									</div>								
									<hr class="dotted short">	
									<div class="row">
										<div class="col-md-12">
												<div class="input-group" style = "width : 420px">
													<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
													<input type="text" class="form-control" id = "daterange" name="daterange" value = "<?= $daterange?>">
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
								
								<h4 class="text-weight-bold text-dark text-uppercase">Summary &nbsp;
								    <?php if($start_date && $end_date):?> 
								    <small> 
								        <?= $start_date?> ~ <?= $end_date?>
								    </small>
								    <?php endif;?>
								</h4>
								<table class="table table-striped table-bordered table-condensed">
									<thead>
									<tr  style="background:#f5f5f5; ">
<?php foreach($coupon_types_sum as $coupon_type_sum):?>								
										<th class="text-center"><?= $coupon_type_sum->coupon_type_name?></th>
<?php endforeach;?>										
										<th class="text-right">Total</th>
									</tr>
									</thead>
									<tbody>
										<tr style="background:#FDF5E6">
<?php foreach($coupon_types_sum as $coupon_type_sum):?>     										    
											<td class="text-center"><strong><?= $coupon_type_sum -> coupon_point_sum ? number_format($coupon_type_sum -> coupon_point_sum) : 0 ?></strong></td>
<?php endforeach;?>     											
											<td class="text-right text-weight-semibold text-primary h4"><?= number_format($coupon_total -> total_coupon_point)?></td>
										</tr>
									</tbody>
								</table>
								 
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">User ID</th>
										<th class="text-left">Level</th>
										<th>Type</th>
										<th class="text-right">Coupon</th>
										<th class="text-right">Use</th>
										<th class="text-right hidden-xs hidden-sm">Date</th>
										<th class="text-right hidden-xs hidden-sm">Used Date</th>
										<th class="text-right hidden-xs hidden-sm">Publisher</th>
									</tr>
									</thead>
									<tbody>
<?php foreach($coupons as $coupon):?>									    
										<tr>
											<td><?= $coupon-> coupon_no?></td>
											<td class="text-left">
											    <?php if ($coupon->login_status == 'Y'):?>
                                                    <span class="label label-success">On</span>
                                                <?php else:?>
                                                    <span class="label label-default">On</span>
                                                <?php endif?>
											      <strong><a href="<?= site_url('admin/member/member_view')?>/<?= $coupon -> user_no?>"><?= $coupon-> user_id?></a></strong></td>
											<td><?= $coupon-> user_level_code_name?></td>
											<td><?= $coupon-> coupon_type_name?></td>
											<td class="text-right"><strong><?= number_format($coupon-> coupon_point)?></strong></td>
											<td class="text-right"><strong><?= $coupon-> coupon_use_status == '1'?'USED':'NOT-USED'?></strong></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($coupon-> reg_date)?></small></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= $coupon-> use_date? time_to_string($coupon-> use_date):''?></small></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= $coupon -> publisher?></small></td>
										</tr>
<?php endforeach;?>										
									</tbody>
								</table>
								<p class="text-right">1 - 30 of 30 items</p>
								    <div class="row">
                                  <nav class="text-center">
                                      <?= $paging -> getBoardPage()?>
                                 </nav>
                                </div>
							</div>
							<script>
                                $(document).ready(function() {
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