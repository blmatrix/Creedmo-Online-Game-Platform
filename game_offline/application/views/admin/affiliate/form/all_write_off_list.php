<html>
<head>
     <link rel="stylesheet" href="<?=base_url('assets/'); ?>/vendor/bootstrap/css/bootstrap.css" />
    
    
</head>
<body>
	<div class="modal-body">
		<div class="col-md-12">
			<h5 class="modal-title text-primary"><strong>* 파트너 수익금 차감 리스트</strong>  </h5>
			<hr class="dotted short">    
<?php if (count($rows) < 1):?>
    No Data 
<?php else:?>
                <table class="table table-striped table-bordered">
                 <thead>
                 <tr class ="success" >
                     <th class="text-center">#</th>
                     <th class="text-center">파트너</th>
                     <th class="text-center">차감전 잔액</th>
                     <th class="text-center">차감액</th>
                     <th class="text-center">차감 후 잔액</th>
                     <th  class="text-center">Admin</th>
                     <th  class="text-center">차감시간</th>
                 </tr>
                 </thead>
                 <tbody>
    <?php foreach ($rows as $write_off):?>         
                 <tr>
                     <td class="text-center"><?= $write_off -> agent_commission_record_detail_no ?></td>
                     <td class="text-center"><?= $write_off -> user_id?></td>
                     <td class="text-center">
                         <?= number_format($write_off -> prev_balance, 2) ?>
                     </td>
                     <td class="text-center text-danger">
                         <strong>
                              <?= number_format($write_off -> write_off_amount, 2) ?>
                         </strong>
                     </td>
                     <td class="text-center"><?= number_format($write_off -> cur_balance, 2) ?></td>
                     <td class="text-center"><?= $write_off -> admin_id ?></td>
                     <td class="text-center hidden-xs hidden-sm"><small><?= time_to_string($write_off -> reg_date) ?></small></td>
                 </tr>
    <?php endforeach; ?>
                     </tbody>
                 </table>
<?php endif;?>
<?php if (count($rows) > 0):?>
    <?= $pagination -> getBoardPage()?>
<?php endif;?>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
	</div> -->
</body>
</html>