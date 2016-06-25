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
								<li><span>파트너 리스트</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">파트너 리스트</h2>
							</header>
							<div class="panel-body">
						         <div class="well well-sm">
                                 <form class="form-inline" id = "m_serarch_form" name = "m_search_form" method ="GET">
                                     <input type ="hidden" name ="act_mode" value ="all"/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
												<input type="text" name = "search_keyword" id ="search_keyword" class="form-control" placeholder="Search for..." value = "<?=$search_keyword?>">
												<span class="input-group-btn">
												<button type = "submit" class="btn btn-primary" >
													검색
												</button> </span>
											</div><!-- /input-group -->
											<select id="order_by" class="form-control" name="order_by">
												<option value="">정렬</option>
												<option value="">----------------------------</option>
												<option value="agent_settlement_balance DESC" <?php if($order_by == 'agent_settlement_balance DESC'):?> selected="selected" <?php endif;?> >파트너 수익금 잔액 순</option>
												<option value="commission_total DESC" <?php if($order_by == 'commission_total DESC'):?> selected="selected" <?php endif;?> >수익금 토탈 순</option>												
												<option value="subtract_total DESC" <?php if($order_by == 'subtract_total DESC'):?> selected="selected" <?php endif;?> >차감 순</option>
											</select>
											<a data-url="" class="btn btn-danger  pull-right " id  ="all_write_off" role="button">차감 내역 리스트 </a>
    
											<div class="visible-sm clearfix mt-sm mb-sm"></div>
										</div>
									</div>
                                    <hr class="dotted short"> 
                                    <div class="row" style ="margin-top : 10px">
                                        <div class="col-md-12"> 

                                        </div>
                                    </div>
                                </form>
                            </div>

								<!-- <h4 class="text-weight-bold text-dark text-uppercase">This Month Payment Total  =  <span class="text-primary ">  121,500,000 CNY</span> </h4> -->
								<h4 class="text-weight-bold text-dark text-uppercase">개요 <small> <?= $order_by?></small></h4>
								<p>파트너 수익이 한번이라도 있었던 모든 회원 확정 정산 - <strong>해당월 정산은 불포함</strong></p>
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">User ID</th>
										<th data-toggle="tooltip" data-placement="top" data-original-title="월별 파트너 정산 상세 페이지로 이동">월별 상세</th>
										<th  class="text-right" data-toggle="tooltip" data-placement="top" data-original-title="에이전트가 보유한 회원수">보유 회원</th>
										<th  class="text-right" data-toggle="tooltip" data-placement="top" data-original-title="Fixed Commission Total">수익 총합</th>
										<th  class="text-right" data-toggle="tooltip" data-placement="top" data-original-title="에이전트에게 차감해준 총 합계">차감 총액</th>
										<th  class="text-right" data-toggle="tooltip" data-placement="top" data-original-title="에이전트가 출금 할 수 있는 현재 잔액">파트너 수익금 잔액</th>										
										<th  class="text-right hidden-xs hidden-sm">가입일</th>
										<th class="text-right">Action</th>	
									</tr>
									</thead>
									<tbody>									    
<?php foreach($rows as $row):?>
										<tr>
											<td><?= $row -> user_no?></td>
											<td class="text-left">
                                                     <span class="label <?php if($row -> login_status == 'Y'):?> label-success <?php endif;?> ">On</span>
											    <strong>
											        <a href="<?= site_url('admin/member/member_view');?>/<?=$row -> user_no?>">
											         <?= $row -> user_id?>
											        </a>
											    </strong>
											</td>
											<td>
											    <a href ="<?= site_url('admin/affiliate/agent_commission_record')?>?search_keyword=<?= $row -> user_id?>&view_type=monthly" class="btn btn-xs btn-primary">
											        <i class="fa fa-list-ul"></i> 
											        Monthly (<?= $row -> commission_count?>)
											    </a>
											</td>
											<td class="text-right hidden-xs hidden-sm"><span data-toggle="tooltip" data-placement="top" data-original-title="Active User Total">
											    <b>(<?= number_format($row -> deps1_active_child_count + $row -> deps2_active_child_count)?></b></span>/<?= number_format($row -> deps1_child_count + $row -> deps2_child_count)?>)</td>		
											<td class="text-right text-danger"><h4 class="text-weight-bold" style="margin:0"><?= number_format($row -> commission_total,0)?></h4></td>											
											<td class="text-right text-danger " ><h4 class="text-weight-bold" style="margin:0" ><?= number_format($row -> subtract_total,0)?></h4></td>	
											<td class="text-right text-primary"><h4 class="text-weight-bold" style="margin:0"><?= number_format($row -> agent_settlement_balance,0)?></h4></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($row -> reg_date)?></small></td>
											<td class="text-right text-primary">
												<button type ="button" class="btn btn-xs btn-danger write_off" data-url = "<?= site_url('admin/affiliate/form') ?>?request_form=write_off&agent=<?= $row -> user_no?>"
												 data-toggle="tooltip" data-placement="top" data-original-title="확정 정산에 대한 파트너 수익금 잔액 차감">
											            차감   
											     </button>
											</td>
										</tr>
<?php endforeach;?>
									</tbody>
								</table>
								<?= $pagination -> getBoardPage()?>
							</div>

							
                          
						  <!-- End Modal Code -->
						  <script>
						    $(document).ready(function(){
						         $('.write_off').click(function(e) {
						            console.log($(this).attr('data-url'));
                                    openModal($(this).attr('data-url'));
						         });  
						         
						         $('#all_write_off').click(function(){
						             var popUrl = "<?=site_url('admin/affiliate/all_write_off_list')?>";    //팝업창에 출력될 페이지 URL
                                     var popOption = "width=1000, height=500, resizable=no, scrollbars=no, status=no;";    //팝업창 옵션(optoin)
                                     window.open(popUrl,"Total_Write_off_list",popOption);
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