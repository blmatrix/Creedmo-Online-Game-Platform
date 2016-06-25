<form action = "<?= site_url('admin/withdraws/withdraw_list'); ?>"  method = "POST" target ="hiddenframe" id ="add_withdraw_form">
	<input type ="hidden" name = 'act_mode' value = "withdraw_create"/>
	  <input type ="hidden" name = 'check_flag' id ='check_flag' value = "N"/>
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Add Withdraw</h4>
	</div>
	<div class="modal-body">

		<div class="col-md-12">
			<fieldset>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span>User ID</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
							<input type="text" name = "user_id" id ="user_id" class="form-control" placeholder="User ID"  id="user_id"  name = "user_id">
						</div>
						  <div id ="check_error"> </div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span>Withdraw Amount</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
							<input type="text" class="form-control" placeholder="Withdraw Amount"  id ="withdraw_amount" name ="withdraw_amount">
						</div>
					    <div  id ="limit_withdraw" style = "margin-top : 6px"></div>   
					</div>
					
				</div>

				<div class="form-group">
					<label class=" col-md-3 control-label">Withdraw Bank</label>
					<div class="col-lg-8" id = 'banking_account_container'>
					    
					</div>
				</div>

			</fieldset>

		</div>
		<div class="clearfix"></div>
	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" value = "Add withdraw"/>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
	</div>
</form>
<script>
	$(document).ready(function() {
	     $('#add_withdraw_form').submit(function(e){
            if ( $.trim($('#user_id').val()) == '' ||  $.trim($('#user_id').val()).length == 0){
                e.preventDefault();
                alert('User id is need for submit');
                $('#user_id').focus();
                return false;    
            }
            
            if ( $.trim($('#withdraw_amount').val()) == '' ||  $.trim($('#withdraw_amount').val()).length == 0){
                e.preventDefault(); 
                alert('Withdraw amount is need for submit');
                $('#dwithdraw_amount').focus();
                return false;    
            }
            
            if ( $.trim($('#check_flag').val()) == 'N'){
                e.preventDefault(); 
                alert("You must verify user's id submited");
                return false;
            }
        });
        
		$("#user_id").bind('blur keyup', function(e) {
			if (e.type === 'keyup' && e.keyCode !== 10 && e.keyCode !== 13)
				return;
		       $.get("<?= site_url('admin/ajax/get_banking_account')?>?user_id=" + $.trim($(this).val()),
                function(data){
                var code = data.split('::')[0];
               
                if (code == 'ERROR'){
                    $('#check_error').html(data.split('::')[1]);
                    $('#check_flag').val('N');
                    $('#banking_account_container').html('')
                    
                }else if (code =="SUCCESS"){
                    $('#check_error').html('');
                    $('#check_flag').val('Y');
                    $('#banking_account_container').html(data.split('::')[1]);
                    $('#limit_withdraw').html(data.split('::')[2]);
                }
            });
		});
	});

</script>
