<form action = "<?= site_url('admin/member/coupon'); ?>"  method = "POST"  target = "hiddenframe" >
<div class="modal-header header-primary">
    <input type ="hidden" name = "act_mode" value = "<?= $act_mode?>"?>
    <input type ="hidden" name = "reqeust_no" value = "<?= !empty($request_no)? $request_no :''?>" >
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<h4 class="modal-title">쿠폰발급</h4>
</div>
<div class="modal-body">

	<div class="col-md-12">
		<fieldset>
			<div class="form-group">
				<label class="col-md-3 control-label"><span class="required">*</span>User ID</label>
				<div class="col-md-8">
					<div class="input-group input-group-icon">
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
						<input type="text" class="form-control" placeholder="User ID" id ="user_id" name = "user_id" value = "<?= !empty($user) ? $user -> user_id:''?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-3 control-label">금액</label>
				<div class="col-lg-8">
					<div class="input-group mb-md">
						<input type="text" class="form-control" id = "coupon_point" name = "coupon_point">
						<span class="input-group-addon btn-warning">원</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-3 control-label">쿠폰 종류</label>
				<div class="col-lg-8">
					<select id="coupon_type" name = "coupon_type" class="form-control" >
<?php foreach($coupon_types as $coupon_type):?>					    
						<option value = "<?= $coupon_type -> coupon_type_no?>"><?= $coupon_type -> coupon_type_name?></option>
<?php endforeach;?>	
					</select>
				</div>
			</div>
		</fieldset>
	</div>
	<div class="clearfix"></div>
</div>
<div class="modal-footer">
	<input type="submit" class="btn btn-primary" value ="Add coupon">
	<button type="button" class="btn btn-default" data-dismiss="modal">
		Close
	</button>
</div>
</div>
</form>