<?php
include_once APPPATH . "views/admin/template/top.php";
?>

<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/admin/template/side_bar.php";
	?>

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Members</h2>

			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html"> <i class="fa fa-home"></i> </a>
					</li>
					<li>
						<span>Members</span>
					</li>
					<li>
						<span>Members List</span>
					</li>
				</ol>

				<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index'); ?>"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->

		<section class="panel">
			<header class="panel-heading">

				<h2 class="panel-title">Member List</h2>
				
			</header>

			<div class="panel-body">
             
				<div class="well well-sm">
					<form class="form-inline" id = "m_serarch-form" name = "m_search-form" method ="GET">
						<div class="row">
							<div class="col-md-12">

								<div class="input-group">
									<input type="text" name = "search_keyword" id ="search_keyword" class="form-control" placeholder="회원 ID 검색..." value = "<?= $search_keyword?>">
									<span class="input-group-btn">
										<button type = "submit" class="btn btn-primary" >
											검색
										</button> </span>
								</div><!-- /input-group -->

								<div class="visible-sm clearfix mt-sm mb-sm"></div>
								<select id="user_status" name = "user_status"  class="form-control">
									<option value = "all">유저 상태</option>
									<option value = "all">----------------</option>
									<option value = "all" <?php if($user_status == 'all'):?> selected="selected" <?php endif;?> >All</option>
									<option value = "<?=USER_STATUS_LOCKED?>"   <?php if($user_status == USER_STATUS_LOCKED):?> selected="selected" <?php endif;?> >Lock</option>
									<option value = "<?=USER_STATUS_UNLOCKED?>"   <?php if($user_status == USER_STATUS_UNLOCKED):?> selected="selected" <?php endif;?>  >Unlock</option>
								</select>
								
								<select id="user_level" name ="user_level" class="form-control">
									<option value ="">Level</option>
									<option value ="">----------------</option>
									<option value ="1" <?= $user_level == 1 ? "selected":''?> >Bronze</option>
									<option value ="2" <?= $user_level == 2 ? "selected":''?> >Silver</option>
									<option value ="3" <?= $user_level == 3 ? "selected":''?> >Gold</option>
									<option value ="4" <?= $user_level == 4 ? "selected":''?> >Platinum</option>
								</select>

								<select id="login_status"  name = "login_status" class="form-control" >
									<option value ="">Login 상태</option>
									<option value ="">----------------</option>
									<option value ="">ALL</option>
									<option value ="Y" <?= $login_status == 'Y' ? "selected":''?> >Logged In</option>
									<option value ="N" <?= $login_status == 'N' ? "selected":''?>  >Logged out</option>
								</select>

								<select id="order_by" class="form-control" name = "order">
									<option value ="">정렬</option>
									<option value ="">----------------</option>
									<option value ="amount DESC" <?= $order  == 'amount DESC' ? "selected":''?> >보유머니 순</option>
									<option value ="affiliate DESC" <?= $order  == 'affiliate DESC' ? "selected":''?>  >파트너 보유회원</option>
								</select>
								<a data-url = "<?= site_url('admin/member/form') ?>?request_form=member&request_type=create" class="btn btn-primary  pull-right member-create" role="button">회원추가 <i class="fa fa-plus"></i></a>

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
                                        저번주
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
									<button type = "submit" class="btn btn-sm btn-primary" >검색</button>
							</div>
						</div>
					</form>
				</div>
				
				<h5 class="text-weight-semibold text-dark text-uppercase">Member Total <span class="label label-default "><?= $users_count?></span></h5>
				<table class="table table-striped">
					<thead>
						<tr height="30px">
							<th>#</th>
							<th class="text-left">User ID</th>
							<th>파트너코드</th>
							<th>이름</th>
							<th>Level</th>							
							<th class="text-right hidden-xs hidden-sm">총입금</th>
							<!-- <th class="text-right hidden-xs hidden-sm">총출금</th> -->
							<!-- <th class="text-right">입-출</th>
							<th class="text-right">보유금액</th> -->
							<th class="text-right hidden-xs hidden-sm">보유회원</th>
							<th class="text-center">상태</th>
							<th class="text-right hidden-xs hidden-sm">가입일</th>
						</tr>
					</thead>
					<tbody>
<?php foreach($users as  $user):?>					    
						<tr>
							<td><?= $user -> user_no?></td>
							<td class="text-left">
							    <?php if ($user->login_status == 'Y'):?>
							         <span class="label label-success">On</span>
                                <?php else:?>
                                     <span class="label label-default">On</span>
                                <?php endif?>
							    <strong>
							        <a href="<?= site_url('admin/member/member_view');?>/<?=$user-> user_no?>">&nbsp;<?= $user-> user_id?></a>
							    </strong>
							</td>
							<td><?= $user->affiliate_code ?></td>
							<td><?= $user-> user_name?></td>
							<td><?= $user-> user_level_code_name?></td>							
							<td class="text-right hidden-xs hidden-sm"><?= number_format($user -> total_deposit_amount)?></td>
							<!-- <td class="text-right hidden-xs hidden-sm"><?= number_format($user -> total_withdraw_amount)?></td> -->
							<!-- <td class="text-right"><?= number_format($user -> average)?></td>
							<td class="text-right text-primary"><strong><?= number_format($user -> wallet_balance)?></strong></td> -->
							<td class="text-right hidden-xs hidden-sm"><?= number_format($user ->deps1_child_count)?>&nbsp;/&nbsp;<?= number_format($user ->deps2_child_count)?></td>
							<td class="text-center">
							    <?php if ($user->user_status == 3):?>
							        <span class="label label-danger"><i class="fa fa-lock" title="Lock">
							    <?php elseif($user-> user_status == 4):?>
							        <span class="label label-default"><i class="fa fa-unlock" title="UnLock"></i></span>
							    <?php endif?>
							</td>
							
							<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($user-> join_date)?></small></td>
						</tr>
<?php endforeach;?>						
					</tbody>
				</table>

                
                <div class="row">
                    <nav class="text-center">
                       <?= $paging -> getBoardPage()?>
                    </nav>
                </div>
                
                
				<!-- <div class="row">
					<nav class="text-center">
						<ul class="pagination">
							<li class="disabled">
								<a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a>
							</li>
						</ul>
					</nav>
				</div> -->

			</div>

			<hr class="dotted short">

</div>

</div>
<script>
	function trim(str) {
		return str.replace(/(^\s*)|(\s*$)/gi, '');
	}

	$(document).ready(function() {
		$('.member-create').click(function() {
			openModal($(this).attr('data-url'));
		});
	}); 
</script>
</section><!-- end: panel -->
<!-- end: page -->
</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->

<?php
include_once APPPATH . "views/admin/template/footer.php";
?>