 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>파트너 리포트</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>파트너 리포트</span></li>
								<li><span>파트너 수익금 내역</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title"><?= ucfirst($view_type)?> 파트너 수익금 주간별 내역  <?= $view_type == 'monthly' ? '- ( '.$search_keyword.')':''?></h2>
							</header>
							<div class="panel-body">
						         <div class="well well-sm" <?php if($view_type == 'monthly'):?> style ="display:none" <?php endif;?>>
                                 <form class="form-inline" id = "m_serarch_form" name = "m_search_form" method ="GET">
                                     <input type ="hidden" name ="act_mode" value ="report"/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                            <input type="text" name = "search_keyword" id ="search_keyword" class="form-control" placeholder="파트너검색..." value = "<?= $search_keyword?>">
                                            <span class="input-group-btn">
                                            <button type = "submit" class="btn btn-primary" >
                                                검색
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
                                            <button data-search = "last_week" type="button" class="btn btn-sm btn-default search-date">
                                                        지난주
                                            </button>
                                            <button data-search = "next_week" type="button" class="btn btn-sm btn-default search-date">
                                                        다음주
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
								<!-- <h4 class="text-weight-bold text-dark text-uppercase">This Month Payment Total  =  <span class="text-primary ">  121,500,000 CNY</span> </h4> -->
								<h4 class="text-weight-bold text-dark text-uppercase">Summary <small><?= $view_type != 'monthly' ? date('Y-m', strtotime($search_date_start)) :''?></small></h4>
								<p>확정된 월별 파트너 수익금 내역</p>
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th  class="text-center hidden-xs hidden-sm">정산 시작일</th>
										<th  class="text-center hidden-xs hidden-sm">정산 마감일</th>
										<th class="text-left">User ID</th>
										<th>Code</th>
										<th data-toggle="tooltip" data-placement="top" data-original-title="파트너 단계별 적용 레벨  - (1차 레벨 / 2차 레벨)">적용 레벨</th>
										<th data-toggle="tooltip" data-placement="top" data-original-title="단계별 수익금  - (1차 수익금 / 2차 수익금)">레벨별 %</th>
										<th  class="text-right">수익금</th>
										<!-- <th  class="text-right">Subtracted</th>
										<th  class="text-right hidden-xs hidden-sm">Reg Date</th>
										<th class="text-right">Action</th>	 -->
									</tr>
									</thead>
									<tbody>
<?php foreach($commission_records as $commission_record):?>		    
										<tr>
											<td><?= $commission_record -> user_no?></td>
											<td class="text-center hidden-xs hidden-sm">
                                                <strong><?= date('Y-m-d H:i:s',$commission_record -> commission_process_start_time)?></strong>
                                                <!-- <strong><?= $commission_record -> commission_month_str?></strong> -->
                                            </td>
											<td class="text-center hidden-xs hidden-sm">
                                                <strong><?= date('Y-m-d H:i:s',$commission_record -> commission_process_end_time)?></strong>
                                                <!-- <strong><?= $commission_record -> commission_month_str?></strong> -->
                                            </td>
											<td class="text-">
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
											    <a data-month = "<?= date('Y-m',$commission_record -> commission_month)?>" 
											        <?php if ($view_type != 'monthly'):?> 
											            onclick ="moveAgentDetail(<?= $commission_record -> user_no ?>)" 
											        <?php else:?> 
											            onclick ="moveAgentDetail2(<?= $commission_record -> user_no ?>,this)" 
											        <?php endif?> 
											        class="btn btn-xs btn-primary">
											        <i class="fa fa-th-list"></i> 
											        <?= $commission_record -> affiliate_code?>
											    </a>
											    
											    <button type="button" class="btn btn-info btn-xs" onclick ="viewAgentCommissionList('<?= $commission_record -> user_id?>')">Info</button>
											</td>
											<!-- <td><?= $commission_record -> user_name?></td>-->
											<td><?= $commission_record -> deps1_apply_level?> / <?= $commission_record  -> deps2_apply_level?></td>
											<td><?= number_format($commission_record -> deps1_total_commission,0)?> /<?= number_format($commission_record -> deps2_total_commission,0)?></td>
											<!-- <td>E-Wallet</td>
											<td></td> -->
											<td class="text-right text-primary"><h4 class="text-weight-bold" style="margin:0"><?= number_format($commission_record -> total_commission,0)?></h4></td>
											<!-- <td class="text-right text-danger " >
											    <h4 class="text-weight-bold" style="margin:0" >
											     <?= number_format($commission_record -> total_write_off, 2)?> 
											     </h4>
											</td>											
											<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($commission_record -> reg_date)?></small></td>
											<td class="text-right text-primary">
											     <small>
											         <button type ="button" class="btn btn-xs btn-danger write_off" data-url = "<?= site_url('admin/affiliate/form') ?>?request_form=write_off&agent=<?=$commission_record -> user_no?>&commission=<?=$commission_record -> agent_commission_record_no?>">
											             Subtract
											         </button>
											     </small>
											</td> -->
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
                            
                            function moveAgentDetail2(user_no,e){
                                var d1 = e.getAttribute('data-month');
                                var date1 = new Date(d1);
                                date1.setDate(1) 
                                var start_day =  converDateString(date1);
                                
                                
                                var date2 = new Date(d1);
                                date2.setMonth( date2.getMonth() + 1);
                                date2.setDate(0);
                                var end_day =  converDateString(date2);
                                
                                var daterange = start_day + ' 00:00:00 - ' + end_day + " 23:59:59"; 
                                var search_form = document.m_search_form;
                                search_form.search_keyword.value = '';
                                search_form.daterange.value  = trim(daterange); 
                                search_form.action = "<?= site_url('admin/affiliate/agent_detail')?>" + '/' + user_no;
                                search_form.submit();
                            }
                            
                            function converDateString(dt){
                                return dt.getFullYear() + "/" + addZero(eval(dt.getMonth()+1)) + "/" + addZero(dt.getDate());
                            }
                            
                            function addZero(i){
                                var rtn = i + 100;
                                return rtn.toString().substring(1,3);
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