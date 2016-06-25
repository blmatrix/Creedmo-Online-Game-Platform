<form action = "<?= site_url('admin/withdraws/withdraw_list'); ?>"  method = "POST" target ="hiddenframe" id ="add_withdraw_form">
	<input type ="hidden" name = 'act_mode' value = "withdraw_create"/>
	  <input type ="hidden" name = 'check_flag' id ='check_flag' value = "N"/>
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">출금 작성</h4>
	</div>
	<div class="modal-body">

		<div class="col-md-12">
			<fieldset>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span>User ID</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
							<input type="text" name = "user_id" id ="user_id" class="form-control" placeholder="유저 아이디"  id="user_id"  name = "user_id">
						</div>
						  <div id ="check_error"> </div>
					</div>
				</div>
				
				<div class="form-group">
                    <label class="col-md-3 control-label">Game Select</label>
                    <div class="col-md-8">
                        <div class="input-group input-group-icon">
                            <select class="form-control" id="transfer_from2" name="transfer_from2">
                               <?php if (MG_ENABLE == 'Y'):?>
                               <option value="2"  >Microgame </option>
                               <?php endif;?>
                               
                               <?php if (PT_ENABLE == 'Y'):?>
                               <option value="1"  >Playtech </option>
                               <?php endif;?>
                            </select>
                        </div>
                    </div>
                </div>
                
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span>출금 신청액</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
							<input type="text" class="form-control" placeholder="출금 신청액"  id ="withdraw_amount" name ="withdraw_amount">
						</div>
					    <div  id ="limit_withdraw" style = "margin-top : 6px"></div>   
					</div>
					
				</div>
           
				<div class="form-group">
					<label class=" col-md-3 control-label">출금 계좌선택</label>
					<div class="col-lg-8" id = 'banking_account_container'>
					    
					</div>
				</div>

			</fieldset>

		</div>
		<div class="clearfix"></div>
	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" value = "출금 작성하기"/>
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
                alert('유저 아이디를 작성하세요 ');
                $('#user_id').focus();
                return false;    
            }
            
            if ( $.trim($('#withdraw_amount').val()) == '' ||  $.trim($('#withdraw_amount').val()).length == 0){
                e.preventDefault(); 
                alert('출금 신청액을 작성해 주세요.');
                $('#dwithdraw_amount').focus();
                return false;    
            }
            
            if ( $.trim($('#check_flag').val()) == 'N'){
                e.preventDefault(); 
                alert("You must verify user's id submited");
                return false;
            }
        });
        
        
        function get_banking_account(){
           var user_id = $('#user_id').val();
           var transfer_from = $('#transfer_from2').val();
           $.get("<?= site_url('admin/ajax/get_banking_account')?>?user_id=" + $.trim(user_id)+"&transfer_from="+transfer_from,
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
        }      
        
		$("#user_id").bind('blur keyup', function(e) {
			if (e.type === 'keyup' && e.keyCode !== 10 && e.keyCode !== 13)
				return;
		    get_banking_account();
		});
		
		$('#transfer_from2').change(function(){
           var user_id = $('#user_id').val();
           if (user_id == '' || user_id.length < 6){
               return 
           }
           get_banking_account();
        }); 
	});

</script>
