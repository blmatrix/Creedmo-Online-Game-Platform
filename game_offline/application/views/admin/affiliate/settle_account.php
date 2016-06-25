 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>파트너 정산 신청내역</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>파트너 정산 신청내역</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">파트너 정산 신청내역</h2>
							</header>
							<div class="panel-body">
							     <div class="well well-sm">
                                 <form class="form-inline" id = "m_serarch_form" name = "m_search_form" method ="GET">
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
                                                <div class="input-group" style = "width : 420px">
                                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                    <input type="text" class="form-control" id = "daterange" name="daterange" value = "<?= $daterange?>">
                                                </div>
                                                <button style = "margin-left : 10px" data-search = "last month"  type="button" class="btn btn-sm btn-default search-date">
                                                    지난달
                                                </button>
                                                <button data-search = "this month" type="button" class="btn btn-sm btn-default search-date">
                                                    이번달
                                                </button>
                                                <button data-search = "last week" type="button" class="btn btn-sm btn-default search-date">
                                                    지난주
                                                </button>
                                                <button data-search = "this week" type="button" class="btn btn-sm btn-default search-date">
                                                    이번주
                                                </button>
                                                <button data-search = "yesterday" type="button" class="btn btn-sm btn-default search-date">
                                                    어제
                                                </button> 
                                                 <button data-search = "today" type="button" class="btn btn-sm btn-default search-date">
                                                    오늘
                                                </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

								<h4 class="text-weight-bold text-dark">검색요청기간  &nbsp;: <?= $daterange? $daterange : 'Total Settlement'  ?></h4>
								    <table class="table table-striped table-bordered table-condensed">
                                    <thead>
                                    <tr  style="background:#f5f5f5; ">
                                        <th class="text-center">완료된 요청</th>
                                        <th class="text-center">요청중인 정산</th>
                                        <th class="text-center">모든 요청</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background:#FDF5E6">
                                            <td class="text-center"><strong> <?=number_format($complete_amount -> complete_withdraw_amount )?> </strong></td>
                                            <td class="text-center"><strong> <?=number_format($request_amount  -> request_withdraw_amount)?></strong></td>
                                            <td class="text-center"><strong> <?=number_format($complete_amount -> complete_withdraw_amount + $request_amount -> request_withdraw_amount)?></strong></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
								<hr class="dotted short">	
								
								<table class="table table-striped">
									<thead>
									<tr height="30px">
										<th>#</th>
										<th class="text-left">파트너ID</th>
										<!-- <th>Code</th> -->
										<th>예금주</th>
										<th>출금 방식</th>
										<th>은행명</th>
										<th>계좌번호</th>
										<th width="110px" class="text-right">신청액</th>
										<th class="text-right hidden-xs hidden-sm">신청일</th>
										<th class="text-right hidden-xs hidden-sm">완료일자</th>
										<th class="text-right">상태</th>	
									</tr>
									</thead>
									<tbody>
<?php foreach($agent_settlements as $agent_settlement):?>
										<tr  class ="<?= $agent_settlement-> settlement_status == WITHDRAW_STATUS_NOT_CHECKED?'warning': ''?>">
											<td><?= $agent_settlement -> agent_no?></td>
											<td class="text-left">
											     <?php if ($agent_settlement ->login_status == 'Y'):?>
                                                     <span class="label label-success">On</span>
                                                <?php else:?>
                                                     <span class="label label-default">On</span>
                                                <?php endif?>
                                                <strong>
                                                    <a href="<?= site_url('admin/member/member_view');?>/<?= $agent_settlement  -> agent_no?>">
                                                     <?= $agent_settlement  -> user_id?>
                                                    </a>
                                                </strong>
											    
											</td>
											<!-- <td><a href="<?= site_url('admin/affiliate/agent_detail');?>" class="btn btn-xs btn-primary"><i class="fa fa-th-list"></i> <?= $agent_settlement -> affiliate_code?></a></td> -->
											<td><?= $agent_settlement -> user_name?></td>
											<?php
												$settlement_type = "";
												switch($agent_settlement -> settlement_method){
													case 1:
														$settlement_type ="E-Wallet";
														break;
												    case 2:
														$settlement_type ="Wire Transfer";
														break;
												    case 3:
														$settlement_type ="MG";
														break;
												    case 4:
														$settlement_type ="PT";
														break;
												} 
											?>
											<td><strong><?= $settlement_type?></strong></td>
											<td><?= !empty($agent_settlement -> bank_name) ? $agent_settlement -> bank_name :"-" ?></td>
											<td><?= !empty($agent_settlement -> bank_account) ? $agent_settlement -> bank_account : '-'?></td>
											<td class="text-right text-danger"><h4 class="text-weight-bold" style="margin:0"><?= number_format($agent_settlement -> settlement_amount)?></h4></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($agent_settlement -> reg_date)?></small></td>
											<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($agent_settlement -> confirm_date)?></small></td>
											<td class="text-right">
											    <?php if ($agent_settlement-> settlement_status == WITHDRAW_STATUS_NOT_CHECKED):?>
                                                <button type="button" class="btn btn-xs btn-danger"  onclick= "changeAgentSettleState('<?=$agent_settlement-> settlement_status?>','<?=WITHDRAW_STATUS_BEFORE_CONFIRM?>','<?= $agent_settlement-> agent_settlement_no?>');" > <i class="fa fa-bell-slash-o"></i> 확인</button>
                                                <?php endif;?>
                                                <?php if ($agent_settlement-> settlement_status  == WITHDRAW_STATUS_BEFORE_CONFIRM):?>
                                                <button type="button" class="btn btn-xs btn-primary" data-toggle="confirmation" onclick = "changeAgentSettleState('<?=$agent_settlement-> settlement_status?>','<?= WITHDRAW_STATUS_CONFIRMED?>','<?= $agent_settlement-> agent_settlement_no?>');" >정산완료</button>
                                                <button type="button" class="btn btn-xs btn-dark" onclick = "changeAgentSettleState('<?=$agent_settlement-> settlement_status?>','<?= WITHDRAW_STATUS_CANCLED_BY_ADMIN?>','<?= $agent_settlement-> agent_settlement_no?>');"><i class="fa fa-trash-o"></i></button></td>
                                                <?php endif;?>
                                                <?php if ($agent_settlement-> settlement_status  == WITHDRAW_STATUS_CONFIRMED):?>
                                                <span class="text-right  text-weight-semibold text-primary">정산완료</span>
                                                <?php endif;?>
                                                <?php if ($agent_settlement-> settlement_status  == WITHDRAW_STATUS_CANCLED):?>
                                                <span class="text-right text-warning">회원취소</span>
                                                <?php endif;?>
                                                <?php if ($agent_settlement-> settlement_status  == WITHDRAW_STATUS_CANCLED_BY_ADMIN):?>
                                                <span class="text-right text-warning">취소</span>
                                                <?php endif;?>
											</td>
										</tr>
<?php endforeach;?>            	

									</tbody>
								</table>
								<form target = "hiddenframe" name = "change_form" id = "change_form" action = "<?= site_url('admin/affiliate/settle_account')?>" method ="POST">
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

							
							<!-- Modal -->
							<div class="modal fade " id="Manager-add" tabindex="-1" role="dialog" aria-hidden="true">
							  <div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header header-primary">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Add User</h4>
								  </div>
								  <div class="modal-body">
									
									  <div class="col-md-12">
	
									  </div>
									  
									  <div class="clearfix"></div>

								
								  </div>
								  <div class="modal-footer">                    
									<button type="button" class="btn btn-primary">Add Manager</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  </div>
								</div>
							  </div>
							</div>
                            <script type="text/javascript">
                                function changeAgentSettleState(curStatus,changeStatus,e){
                                    $('#act_mode').val('change_settlement_status');
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

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>