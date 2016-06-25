<form action = "<?= site_url('admin/transfer/create_transfer'); ?>"  method = "POST" name ="add_transfer" target ="hiddenframe">
	<input type ="hidden" name = 'act_mode' value = "transfer_create"/>
	<input type ="hidden" name = 'check_flag' id ='check_flag' value = "N"/>
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Add Transfer</h4>
	</div>
	<div class="modal-body">
		</br>
		<div class="col-md-12">
			<ul class="list-group">
				<li class="list-group-item">
					<span  class="pull-right label label-primary" id ="wallet_balance"></span>
					<strong style ="color:gray" >WALLET Balance</strong>
				</li>
				<li class="list-group-item">
					<span class="pull-right label label-primary" id ="mg_balance"></span>
					<strong  style ="color:gray" >MICROGAME Casino Balance</strong>
				</li>
				<li class="list-group-item">
					<span class="pull-right label label-primary" id ="pt_balance"></span>
					<strong style ="color:gray" >PLAYTECH Casino Balance</strong>
				</li>
			</ul>
			</br>
			<fieldset>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span> User ID</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon" style ="margin-bottom:5px">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
							<input type="text" class="form-control" placeholder="User ID"  id="user_id"  name = "user_id">
						</div>

						<span  id ="check_error" class="label label-warning"></span>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span> Transfer Amount</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
							<input type="text" class="form-control" placeholder="Transfer amount"  id="transfer_amount"  name = "transfer_amount">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span> Transfer From</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon" >
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-qq"></i></span> </span>
							<select class="form-control" id ="transfer_from" name ="transfer_from" style ="margin-bottom:8px">
								<!-- <option >&nbsp;&nbsp;&nbsp;Select Messenger</option>
								<option value ="">&nbsp;&nbsp;&nbsp;-------------------------</option> -->
								<option value = "WALLET">&nbsp;&nbsp;&nbsp;Wallet</option>
								<option value = "MG">&nbsp;&nbsp;&nbsp;Micorgame</option>
								<option value = "PT">&nbsp;&nbsp;&nbsp;Playtech</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span> Transfer To</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon" >
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-qq"></i></span> </span>
							<select class="form-control" id ="transfer_to" name ="transfer_to" style ="margin-bottom:8px">
								<!-- <option >&nbsp;&nbsp;&nbsp;Select Messenger</option>
								<option value ="">&nbsp;&nbsp;&nbsp;-------------------------</option> -->
								<option value = "WALLET">&nbsp;&nbsp;&nbsp;Wallet</option>
								<option value = "MG">&nbsp;&nbsp;&nbsp;Micorgame</option>
								<option value = "PT">&nbsp;&nbsp;&nbsp;Playtech</option>
							</select>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="modal-footer">
		<button type="button" onclick ="start_transfer(this)" class="btn btn-primary">confirm</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
	</div>
    </form>

<script>
	$(document).ready(function() {
        $("#user_id").bind('blur keyup', function(e) {
        if (e.type === 'keyup' && e.keyCode !== 10 && e.keyCode !== 13)
        return;
        $.get(
            "<?= site_url('admin/ajax/is_member')?>?user_id=" + $.trim($(this).val()),
           	function(data){
            	var code = data.split('::')[0];
            	if (code == 'ERROR'){
                	$('#check_error').html(data.split('::')[1]);
                	$('#check_flag').val('N');
                	$('#wallet_balance').html('');
                	$('#mg_balance').html('');
                	$('#pt_balance').html('');
            	}else if (code =="SUCCESS"){
                	$('#check_error').html('');
                	$('#wallet_balance').html(data.split('::')[1]);
                	$('#mg_balance').html(data.split('::')[2]);
                	$('#pt_balance').html(data.split('::')[3]);
                	$('#check_flag').val('Y');
            	}
        	});
        });
	});
    
    function start_transfer(the){
        var f = document.forms.add_transfer;
        the.onclick =   function(){
                alert("Prcessing Transaction !! wait");
        }
        
        f.target ="hiddenframe";
        f.submit();
        return false;
    } 
</script>
