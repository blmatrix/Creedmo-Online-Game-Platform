<form action = "<?= site_url('admin/deposits/deposit_list'); ?>"  method = "POST" target ="hiddenframe" id ="add_deposit_form">
    <input type ="hidden" name = 'act_mode' value = "deposit_create"/>
    <input type ="hidden" name = 'check_flag' id ='check_flag' value = "N"/>
    
<div class="modal-header header-primary">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Add Deposit</h4>
</div>
<div class="modal-body">

    <div class="col-md-12">
        <fieldset>
            <div class="form-group">
                <label class="col-md-3 control-label"><span class="required">*</span>User ID</label>
                <div class="col-md-8">
                    <div class="input-group input-group-icon">
                        <span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
                        <input type="text" name = "user_id" id ="user_id" class="form-control" placeholder="User ID">
                    </div>
                    <div id ="check_error"> </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><span class="required">*</span>Deposit Amount</label>
                <div class="col-md-8">
                    <div class="input-group input-group-icon">
                        <span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
                        <input type="text" class="form-control" placeholder="Deposit Amount"  id ="deposit_amount" name ="deposit_amount">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <label class="col-md-3 control-label">Game Select</label>
                <div class="col-md-8">
                    <div class="input-group input-group-icon">
                        <select class="form-control" id="transfer_to" name="transfer_to">
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
                <label class="col-md-3 control-label"><span class="required">*</span>User Level</label>
                <div class="col-md-8">
                    <div class="input-group input-group-icon">
                        <span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
                        <input type="text" class="form-control" readonly placeholder="User Level"  id ="user_level_code_name" name ="user_level_code_name">
                        <input type="hidden" class="form-control" readonly placeholder="User Level_no"  id ="user_level_no" name ="user_level">
                    </div>
                </div>
            </div>
        </fieldset>

    </div>
    <div class="clearfix"></div>
</div>
<div class="modal-footer">
    <input type="submit" class="btn btn-primary" value = "Add deposit"/>
    <button type="button" class="btn btn-default" data-dismiss="modal">
        Close
    </button>
</div>
</form>

<script>
    $(document).ready(function(){
        $('#add_deposit_form').submit(function(e){
            if ( $.trim($('#user_id').val()) == '' ||  $.trim($('#user_id').val()).length == 0){
                e.preventDefault();
                alert('User id is need for submit');
                $('#user_id').focus();
                return false;    
            }
            
            if ( $.trim($('#deposit_amount').val()) == '' ||  $.trim($('#deposit_amount').val()).length == 0){
                e.preventDefault(); 
                alert('Deposit amount is need for submit');
                $('#deposit_amount').focus();
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
            $.get("<?= site_url('admin/ajax/get_user_level')?>?user_id=" + $.trim($(this).val()),
                function(data){
                var code = data.split('::')[0];
               
                if (code == 'ERROR'){
                    $('#check_error').html(data.split('::')[1]);
                    $('#check_flag').val('N');
                    $('#user_level_no').val('');
                    $('#user_level_code_name').val('');
                    
                }else if (code =="SUCCESS"){
                    $('#check_error').html('');
                    $('#check_flag').val('Y');
                    $('#user_level_no').val(data.split('::')[1]);
                    $('#user_level_code_name').val(data.split('::')[2]);
                }
            });
        });
    });
</script>
