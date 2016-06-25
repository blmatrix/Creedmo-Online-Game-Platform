<?php
include_once APPPATH . "views/admin/template/top.php";
?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/admin/template/side_bar.php";
	?>

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>재정 리포트</h2>
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html"> <i class="fa fa-home"></i> </a>
					</li>
					<li>
						<span>재정 리포트</span>
					</li>
					<li>
						<span>일별 수익 리포트</span>
					</li>
				</ol>
				<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index'); ?>"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<h2 class="panel-title">일별 수익 리포트</h2>
				<p class="panel-subtitle">
					(입금) - (출금+보너스+쿠폰+콤프+파트너 정산) = 수익
				</p>
			</header>
			<div class="panel-body">
				<div class="well well-sm">
					<div class="row">
						<form class="form-inline" name ="m_search_form">
						    <input type ="hidden" name ="query_search_type" id = "query_search_type" value ="<?= QUERY_SEARCH_TYPE_DAILY?>"/>
							<div class="form-group">
								<div class="col-md-12">
									<div class="input-group" style = "width : 400px">
										<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
										<input type="text" class="form-control" id = "daterange" name="daterange" value = "<?= $daterange?>">
									</div>
									&nbsp;&nbsp;&nbsp;
									<button data-search = "annual" type="button" class="btn btn-sm btn-default search-date">
										년별
									</button>
									<button data-search = "monthly" type="button" class="btn btn-sm btn-default search-date">
										월별
									</button>
									<!-- <button data-search = "weekly" type="button" class="btn btn-sm btn-default search-date">
										Weekly
									</button> -->
									<button data-search = "daily" type="button" class="btn btn-sm btn-default search-date">
										일자별
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<h4 class="text-weight-bold text-dark text-uppercase">개요 <small> <?= $daterange?></small></h4>
				<table class="table table-striped table-bordered table-condensed">
					<thead>
						<tr  style="background:#f5f5f5; ">
							<th class="text-right">입금</th>
							<th class="text-right">출금</th>
							<th class="text-right">보너스</th>
							<th class="text-right">쿠폰</th>
							<th class="text-right">콤프</th>
							<th class="text-right">파트너 정산</th>
							<th class="text-right">Margin(%)</th>
							<th class="text-right">수익</th>
						</tr>
					</thead>
					<tbody>
						<tr style="background:#FDF5E6">
							<td class="text-right"><strong><?= number_format($t_deposit_amount,2)?></strong></td>
							<td class="text-right"><strong><?= number_format($t_withdraw_amount,2)?></strong></td>
							<td class="text-right"><strong><?= number_format($t_deposit_bonus_amount,2)?></strong></td>
							<td class="text-right"><strong><?= number_format($t_coupon_amount,2)?></strong></td>
							<td class="text-right"><strong><?= number_format($t_comp_amount,2)?></strong></td>
							<td class="text-right"><strong><?= number_format($t_agent_settlement,2)?></strong></td>
							<td class="text-right"><?= number_format($margin,2)?> %</td>
							<td class="text-right text-primary"><strong><?= number_format($profit,2)?></strong></td>
						</tr>
					</tbody>
				</table>
				<hr class="dotted short">
				<table class="table table-striped">
					<thead>
						<tr height="30px">
							<th>Date</th>
							<!-- <th>Player</th> -->
							<th class="text-right">입금</th>
							<th class="text-right">출금</th>
							<th class="text-right">보너스</th>
							<th class="text-right">쿠폰</th>
							<th class="text-right">콤프</th>
							<th class="text-right">파트너 정산</th>
							<th class="text-right">Margin(%)</th>
							<th class="text-right">수익</th>
						</tr>
					</thead>
					<tbody>
<?php foreach($profit_reports as $report):?>					    
						<tr>
							<td><?= $report -> day?></td>
							<!-- <td>62</td> -->
							<td class="text-right"><strong><?= number_format($report -> total_deposit_amount, 2)?></strong></td>
							<td class="text-right"><strong><?= number_format($report -> total_withdraw_amount, 2)?></strong></td>
							<td class="text-right"><strong><?= number_format($report -> total_deposit_bonus, 2)?></strong></td>
							<td class="text-right"><strong><?= number_format($report -> total_coupon_point, 2)?></strong></td>
							<td class="text-right"><strong><?= number_format($report -> total_acc_comp_point, 2)?></strong></td>
							<td class="text-right"><strong><?= number_format($report -> total_settlement_amount, 2)?></strong></td>
							<td class="text-right"><?= number_format($report -> margin())?> %</td>
							<td class="text-right text-primary"><strong><?= number_format($report -> profit(), 2)?></strong></td>
						</tr>
<?php endforeach;?>						
					</tbody>
				</table>
				<!-- <p class="text-right">
					1 - 30 of 30 items
				</p>
				<div class="row">
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
            <script type="text/javascript">
                 $(document).ready(function() {
                    $('.search-date').click(function() {
                        $('#query_search_type').val($(this).attr('data-search'))
                        document.m_search_form.submit();
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