<?php if (!empty($notice_alert)):?>
<div id="PushMessagingContainer" style ="display:none" class="divPushMessagingContainer">
	<div class="PushMessaging">
		<div class="notifications_icon">
			<i class="flaticon-dangerous3"></i>
		</div>
		<div class="notifications_txt"  id ="notification">
			<p>
				<?= $notice_alert -> board_title_en ?>   - <small><?= time_to_string($notice_alert -> reg_date) ?></small>
				<br>
				<?= $notice_alert -> board_content_en ?>
				
               
			</p>
		</div>
		<div class="PMclose" id ="close_noti">
			<a><i class="flaticon-delete30"></i></a>
		</div>
	</div>
</div>
<?php endif; ?>