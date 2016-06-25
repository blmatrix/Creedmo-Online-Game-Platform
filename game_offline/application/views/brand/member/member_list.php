
 <?php include_once  APPPATH ."views/brand/template/top.php"; ?>

		<div class="inner-wrapper">
			 <?php include_once  APPPATH ."views/brand/template/side_bar.php"; ?>    

			<section role="main" class="content-body">
					<header class="page-header">
						<h2 id ="ahn">보유 회원 리스트</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= site_url('brand');?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>보유 회원 리스트</span></li>
							</ol>					
							<a class="sidebar-right-toggle"  href="<?= site_url('brand');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
						
					</header>
					
					<!-- start: page -->
					<section class="panel">
						<header class="panel-heading">
						   <h2 class="panel-title">보유 회원 리스트</h2>
						   <p class="panel-subtitle">Your No. 1 partner for success</p>
					   </header>
						<div class="panel-body">

								
								
				<h4 class="text-weight-semibold text-dark text-uppercase">
					보유회원 토탈 &nbsp; 
					<span class="label label-default ">1차회원 : <?= count($deps1_rows)?>명</span>  
					<span class="label label-default ">2차회원 : <?= $total_deps2_count?>명</span>
					</h4>
				<p>회원님 코드로 가입한 모든 회원 리스트 - 최근 날짜순으로 정렬</p>
				<table class="table table-striped">
					<thead>
						<tr height="30px">
							<th class="text-left">구분</th>
							<th class="text-left">회원ID</th>
							<th>Level</th>
							<th class="text-left hidden-xs hidden-sm">입금유저</th>
							<th class="text-right">보유잔액</th>
							<th class="text-right">베팅현황</th>
							<th class="text-right">콤프현황</th>
							<th class="text-right hidden-xs hidden-sm">보유회원</th>
							<th class="text-right hidden-xs hidden-sm">가입일</th>
						</tr>
					</thead>
					<tbody>
<?php if (count($deps1_rows)>0):?>
	<?php foreach($deps1_rows as $deps1_row):?>			    			
						<tr>
							<td><span class="label label-success">1차회원</span></td>
							<td class="text-left">
							    <strong>
							        <?= $deps1_row-> user_id?>
							    </strong>
							</td>
							<td><?= $deps1_row -> user_level_code_name?></td>
							<td class="text-left hidden-xs hidden-sm">
								<?php if ($deps1_row -> first_deposit == 'N'):?>
								<i class="fa fa-check-square-o"></i> 
								<?php else:?>
								<i class="fa fa-square-o"></i>
								<?php endif;?> 
								활성
							</td>
							<td class="text-right text-primary">
								<strong><?= number_format($deps1_row -> mg_casino_balance + $deps1_row -> pt_casino_balance)?></strong>
							</td>
							<td class="text-right text-primary"><strong><?= number_format($deps1_row -> total_bet_amount)?></strong></td>
							<td class="text-right text-primary"><strong><?= number_format($deps1_row -> total_acc_comp_point)?></strong></td>
							<td class="text-right hidden-xs hidden-sm"><?= number_format($deps1_row -> deps1_child_count + $deps1_row -> deps2_child_count)?></td>
							<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($deps1_row -> join_date)?></small></td>
						</tr>
		<?php $deps2_rows = $deps2_rows_ar[$deps1_row -> affiliate_code];?>
		<?php if (count($deps2_rows)>0):?>
			<?php foreach($deps2_rows as $deps2_row):?>
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;ㄴ&nbsp;<span class="label label-dark"><?=$deps1_row -> user_id?></span></td>
							<td class="text-left">
							    <strong>
							        <?= $deps2_row -> user_id?>
							    </strong>
							</td>
							<td><?= $deps2_row-> user_level_code_name?></td>
							<td class="text-left hidden-xs hidden-sm">
								<?php if ($deps2_row -> first_deposit == 'N'):?>
								<i class="fa fa-check-square-o"></i> 
								<?php else:?>
								<i class="fa fa-square-o"></i>
								<?php endif;?> 
								활성
							</td>
							<td class="text-right text-primary"><strong><?= number_format($deps2_row -> mg_casino_balance + $deps2_row -> pt_casino_balance)?></strong></td>
							<td class="text-right text-primary"><strong><?= number_format($deps2_row -> total_bet_amount)?></strong></td>
							<td class="text-right text-primary"><strong><?= number_format($deps2_row -> total_acc_comp_point)?></strong></td>
							<td class="text-right hidden-xs hidden-sm"><?= number_format($deps2_row -> deps1_child_count + $deps2_row -> deps2_child_count)?></td>
							<td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($deps2_row -> join_date)?></small></td>
						</tr>
				
		    <?php endforeach;?>
		<?php endif;?>
	<?php endforeach;?>
<?php endif;?>
					</tbody>
				</table>
                <div class="row">
                    <nav class="text-center">
                    </nav>
                </div>
						</div>
					</section><!-- end: panel -->
				<!-- end: page -->
			</section><!-- end: content-body -->
		</div><!-- end: inner-wrapper -->
			
 <?php include_once  APPPATH ."views/brand/template/footer.php"; ?>


		 