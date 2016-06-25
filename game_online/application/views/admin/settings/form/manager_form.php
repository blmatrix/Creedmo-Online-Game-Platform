<form action = "<?= site_url('admin/settings/form/manager/'.$request_type); ?>"  target = "hiddenframe" id = "add_manager_form" method = "post">
    <input type = "hidden" name = "request_no" value = "<?= $request_type == 'modify'? $admin->admin_no:''?>">
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Add Manager</h4>
	</div>
	<div class="modal-body">
		<div class="col-md-12">

			<div class="form-group">
				<label class="col-md-4 control-label">Level</label>
				<div class="col-md-8">
					<select class="form-control" name = "admin_level_no">
<?php foreach ($admin_levels as $admin_level):?>
						<option value = "<?= $admin_level -> admin_level_no?>" <?= isset($admin) ? ($admin_level-> admin_level_no == $admin->admin_level_no? 'selected':'' ) : '' ?> > <?= $admin_level-> admin_level_code_name?></option>
<?php endforeach;?>						
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-4">Manager ID/PW</label>
				<div class="col-md-8">
					<section class="form-group-vertical">
						<div class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
							<input class="form-control" type="text" placeholder="Manager ID" name = "admin_id" value ="<?= $request_type == 'modify'? $admin->admin_id :''?>">
						</div>
						<div style = "margin-top : 6px" class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
							<input class="form-control" type="password" placeholder="Password" name = "admin_pass" value ="<?= $request_type == 'modify'? $admin->admin_pass :''?>">
						</div>
						
						  <div class="input-group input-group-icon" style = "margin-top : 6px" >
                            <span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
                            <input class="form-control" type="text" placeholder="Name" name = "admin_name" value ="<?= $request_type == 'modify'? $admin->admin_name :''?>">
                        </div>
					</section>
				</div>
			</div>
			<hr class="mt-md mb-md">
		</div>

		<div class="clearfix"></div>

	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" id ="add_manager" value = "Add Manager"/>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
	</div>
</form>