<div class="notification-title">
    <span class="pull-right label label-default">
     <?= count($withdraws) > 0 ? count($withdraws) : 0 ?>
    </span>
   Widhdraw Request
</div>
</br>
<?php if(count($withdraws) > 0):?>
<ul>
    <?php foreach($withdraws as $withdraw):?>
    <li>
        <a href="#" class="clearfix">
        <figure class="image">
            <img src="<?=base_url('assets/'); ?>/images/!sample-user.jpg" alt="<?= $withdraw -> user_id ?>" class="img-circle" />
        </figure> 
         <span class="title"><strong><?= $withdraw -> user_id ?></strong></span> 
         <span class="message" style="color:blue"><?= number_format($withdraw -> withdraw_amount) ?> CNY</span> 
         <span class="message pull-left"><?= time_to_string($withdraw -> reg_date) ?> </span> 
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
        <small>There is no Withdraw requesting </small>
    </div>
<?php endif; ?>