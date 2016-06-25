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
								<li><span>Agent Commission Record</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Agent Commission Record</h2>
							</header>
							<div class="panel-body">
						         <div class="well well-sm">
                                 <form class="form-inline" id = "m_serarch_form" name = "m_search_form" method ="GET">
                                     <input type ="hidden" name ="act_mode" value ="all"/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                            <input type="text" name = "search_keyword" id ="search_keyword" class="form-control" placeholder="Search for..." value = "<?= $search_keyword?>">
                                            <span class="input-group-btn">
                                            <button type = "submit" class="btn btn-primary" >
                                                Find
                                            </button> </span>
                                        </div><!-- /input-group -->
    
                                    <div class="visible-sm clearfix mt-sm mb-sm"></div>
                                </div>
                                    </div>
                                    <hr class="dotted short"> 
                                    <div class="row" style ="margin-top : 10px">
                                        <div class="col-md-12"> 
                                            <div class="input-group" style = "width : 400px">
                                                <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                <input type="text" class="form-control" id = "daterange" name="daterange" value = "<?= $daterange?>">
                                            </div>
                                            &nbsp;&nbsp;&nbsp;
                                            <button data-search = "prev_month" type="button" class="btn btn-sm btn-default search-date">
                                                        Prev Month
                                            </button>
                                            <button data-search = "next_month" type="button" class="btn btn-sm btn-default search-date">
                                                        Next Month
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

								<!-- <h4 class="text-weight-bold text-dark text-uppercase">This Month Payment Total  =  <span class="text-primary ">  121,500,000 CNY</span> </h4> -->
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">User ID</th>
										<th>Code</th>
										<th>Name</th>
										<!-- <th>Bank Name</th>
										<th>Bank Account</th> -->
										<th  class="text-right">Commission</th>
										<th  class="text-right">Total Write Off</th>
										<th  class="text-right hidden-xs hidden-sm">Month</th>
										<th  class="text-right hidden-xs hidden-sm">Reg Date</th>
										<!-- <th class="text-right hidden-xs hidden-sm">Confirm Date</th> -->
										<th class="text-right">State</th>	
									</tr>
									</thead>
									<tbody>
<?php foreach($commission_records as $commission_record):?>		    
										<tr>
											<td><?= $commission_record -> user_no?></td>
											<td class="text-left">
											     <?php if ($commission_record->login_status == 'Y'):?>
                                                     <span class="label label-success">On</span>
                                                <?php else:?>
                                                     <span class="label label-default">On</span>
                                                <?php endif?>
											    <strong>
											        <a href="<?= site_url('admin/member/member_view');?>/<?= $commission_record -> user_no?>">
											         <?= $commission_record -> user_id?>
											        </a>
											    </strong>
											</td>
											<td>
											    <a onclick ="moveAgentDetail(<?= $commission_record -> user_no ?>)" class="btn btn-xs btn-primary">
											        <i class="fa fa-th-list"></i> 
											        <?= $commission_record -> affiliate_code?>
											    </a>
											    
											    <button type="button" class="btn btn-info btn-xs" onclick ="viewAgentCommissionList('<?= $commission_record -> user_id?>')">Info</button>
											</td>
											<td><?= $commission_record -> user_name?></td>
											<!-- <td>E-Wallet</td>
											<td></td> -->
											<td class="text-right text-danger"><h4 class="text-weight-bold" style="margin:0"><?= $commission_record -> total_commission?></h4></td>
											<td class="text-right text-danger " >
											    <h4 class="text-weight-bold write_off" style="margin:0" 
											     data-url = "<?= site_url('admin/affiliate/form') ?>?request_form=write_off&agent=<?=$commission_record -> user_no?>&commission=<?=$commission_record -> agent_commission_record_no?>">
											     <?= number_format($commission_record -> total_write_off, 2)?>
											     </h4>
											</td>
											<td class="text-right hidden-xs hidden-sm"><small><?= $commission_record -> commission_month_str?></small></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($commission_record -> reg_date)?></small></td>
											<!-- <td class="text-right hidden-xs hidden-sm"><small>2015-06-30 22:18</small></td> -->
											<td class="text-right text-primary"><strong><?= $commission_record-> status ?></strong></td>
										</tr>
<?php endforeach;?>
									</tbody>
								</table>
							</div>

							
                          
						  <!-- End Modal Code -->
						  <script>
						    $(document).ready(function(){
						         $('.write_off').click(function(e) {
						            console.log($(this).attr('data-url'));
                                    openModal($(this).attr('data-url'));
						         });  
						    });
                                
                            function viewAgentCommissionList(user_id){
                                var search_form = document.m_search_form;
                                search_form.search_keyword.value = '';
                                search_form.search_keyword.value = user_id;
                                search_form.act_mode.value = "one";
                                search_form.daterange.value = '';
                                search_form.submit();
                            }
                            
                            function moveAgentDetail(user_no){
                                var search_form = document.m_search_form;
                                search_form.search_keyword.value = '';
                                search_form.daterange.value  = trim(search_form.daterange.value); 
                                search_form.action = "<?= site_url('admin/affiliate/agent_detail')?>" + '/' + user_no;
                                search_form.submit();
                            }
                            
                            function trim(str) {
                                return str.replace(/(^\s*)|(\s*$)/gi, '');
                            }

</script>
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>