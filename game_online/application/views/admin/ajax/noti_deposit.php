<div class="notification-title">
    <span class="pull-right label label-default">
     <?= count($deposits) > 0 ? count($deposits) : 0 ?>
    </span>
   Widhdraw Request
</div>
</br>
<?php if(count($deposits) > 0):?>
<ul>
    <?php foreach($deposits as $deposit):?>
	<li>
		<a href="#" class="clearfix">
		<figure class="image">
			<img src="<?=base_url('assets/'); ?>/images/!sample-user.jpg" alt="<?= $deposit -> user_id ?>" class="img-circle" />
		</figure> 
		<span class="title"><strong><?= $deposit -> user_id ?></strong></span> 
		<span class="message" style="color:blue"><?= number_format($deposit -> deposit_amount) ?> CNY</span> 
		<span class="message pull-left"><?= time_to_string($deposit -> reg_date) ?> </span> 
		</a>
	</li>
	<?php endforeach; ?>
</ul>
<hr />
<div class="text-right">
	<a href="#" class="view-more">View All</a>
</div>
<?php else: ?>
    <div class="text-left">
        <small>There is no Deposit requesting </small>
    </div>
<?php endif; ?>
