<form action = "<?= site_url('admin/affiliate/form'); ?>"  method = "POST" name ="create_write_off" target ="hiddenframe">
	<input type ="hidden" name = 'act_mode' value = "create_write_off"/>
	<input type ="hidden" name = 'check_flag' id ='check_flag' value = "N"/>
	<input type ="hidden" name = 'agent_commission_record_no' value = "<?=$agent_commission_record -> agent_commission_record_no?>"/>
	<input type ="hidden" name = 'commission' value = "<?=$agent_commission_record -> total_commission?>"/>
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Agent Commission Record</h4>
	</div>
	 
	<div class="modal-body">
		<div class="col-md-12">
		      <h5 class="modal-title text-primary"><strong>* Agent Commission Record</strong>  </h5>
		      <hr class="dotted short">   
		          </br>
		                          <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr height="30px">
                                        <th class="text-center">#</th>
                                        <th class="text-center">User ID</th>
                                        <th class="text-center">Code</th>
                                        <th class="text-center">Name</th>
                                        <!-- <th>Bank Name</th>
                                        <th>Bank Account</th> -->
                                        <th  class="text-center">Commission</th>
                                        <th  class="text-center">Total Write Off</th>
                                        <th  class="text-center hidden-xs hidden-sm">Month</th>
                                        <th  class="text-center hidden-xs hidden-sm">Reg Date</th>
                                        <!-- <th class="text-right hidden-xs hidden-sm">Confirm Date</th> -->
                                        <!-- <th class="text-right">State</th>    -->
                                    </tr>
                                    </thead>
                                    <tbody>
<?php if ($agent_commission_record):?>         
                                        <tr>
                                            <td class="text-center"><?= $agent_commission_record -> user_no ?></td>
                                            <td class="text-center">
                                                 <?php if ($agent_commission_record->login_status == 'Y'):?>
                                                     <span class="label label-success">On</span>
                                                <?php else: ?>
                                                     <span class="label label-default">On</span>
                                                <?php endif ?>
                                                <strong>&nbsp;
                                                    <a href="<?= site_url('admin/member/member_view'); ?>/<?= $agent_commission_record -> user_no ?>">
                                                     <?= $agent_commission_record -> user_id ?>
                                                    </a>
                                                </strong>
                                            </td>
                                            <td class="text-center">
                                                <a onclick ="moveAgentDetail(<?= $agent_commission_record -> user_no ?>)" class="btn btn-xs btn-primary">
                                                    <i class="fa fa-th-list"></i> 
                                                    <?= $agent_commission_record -> affiliate_code ?>
                                                </a>
                                            </td>
                                            <td class="text-center"><?= $agent_commission_record -> user_name ?></td>
                                            <td class="text-center text-danger"><h4 class="text-weight-bold" style="margin:0"><?= $agent_commission_record -> total_commission ?></h4></td>
                                            <td class="text-center text-danger " >
                                                <h4 class="text-weight-bold write_off" style="margin:0">
                                                 <?= number_format($total_write_off_amount -> total_write_off_amount,2) ?>
                                                 </h4>
                                            </td>
                                            <td class="text-center hidden-xs hidden-sm"><small><?= $agent_commission_record -> commission_month_str ?></small></td>
                                            <td class="text-center hidden-xs hidden-sm"><small><?= time_to_string($agent_commission_record -> reg_date) ?></small></td>
                                        </tr>
<?php endif; ?>
                                    </tbody>
                                </table>
			</br>
            <h5 class="modal-title text-primary"><strong>* Create Write Off</strong>  </h5>
            <hr class="dotted short">   
			</br>
			 <fieldset>
			     
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required">*</span> Write Off Amount</label>
                    <div class="col-md-8">
                        <div class="input-group input-group-icon" style ="margin-bottom:5px">
                            <input id="commission_plus_radio" name="commission_change" class ="vender" type="radio" value ="<?= COMMISSION_PLUS?>" checked="checked"/>
                            <label for="commission_plus_radio">Plus</label>&nbsp;&nbsp;&nbsp;
                            <input id="commission_minus_radio" name="commission_change" class ="vender"  type="radio" value ="<?= COMMISSION_MINUS?>"/>
                        <label for="commission_minus_radio">minus</label>
                            <input type="text" class="form-control" placeholder="Write Off"  id="write_off_amount"  name = "write_off_amount">
                        </div>
                        <button type="button" onclick ="createWriteOff(this)" class="btn btn-primary">confirm</button>
                        <span  id ="check_error" class="label label-warning"></span>
                        </span>
                        
                    </div>
                    
                </div>
            
            </fieldset>
			</br></br>
			<h5 class="modal-title text-primary"><strong>* Commission Write Off Record</strong>  </h5>
			<hr class="dotted short">    
                                  <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr height="30px">
                                        <th class="text-center">#</th>
                                        <th class="text-center">Prev Balance</th>
                                        <th class="text-center">write Off</th>
                                        <th class="text-center">Cur Balance</th>
                                        <th  class="text-center">Admin</th>
                                        <th  class="text-center">Reg Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php foreach ($write_off_list as $write_off):?>         
                                        <tr>
                                            <td class="text-center"><?= $write_off -> agent_commission_record_detail_no ?></td>
                                            <td class="text-center">
                                                <?= number_format($write_off -> prev_balance,2) ?>
                                            </td>
                                            <td class="text-center text-danger">
                                                <strong>
                                                     <?= number_format($write_off -> write_off_amount,2) ?>
                                                </strong>
                                            </td>
                                            <td class="text-center"><?= number_format($write_off -> cur_balance,2) ?></td>
                                            <td class="text-center"><?= $write_off -> admin_id ?></td>
                                            <td class="text-center hidden-xs hidden-sm"><small><?= time_to_string($write_off -> reg_date) ?></small></td>
                                        </tr>
<?php endforeach; ?>
                                    </tbody>
                                </table>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
	</div>
    </form>

<script>
	function createWriteOff(the) {
        var f = document.forms.create_write_off;
        var e =  document.getElementById('write_off_amount');
        if (!isNumber(document.getElementById('write_off_amount').value)){
            clearElement("you must input characters in figure of NUMBER",e);
            return false;
        }
        if (document.getElementById('write_off_amount').value =='' ||
                 document.getElementById('write_off_amount').value.length <0 ){
            clearElement("You need to input write off amount ",e);
            return false;     
        }
        var write_off = parseFloat(document.getElementById('write_off_amount').value) < 0 ? 
            Math.abs(parseFloat(document.getElementById('write_off_amount').value)):
            parseFloat(document.getElementById('write_off_amount').value);
        
        if (write_off == 0) {
            clearElement("you need to input any number except 0",e);
            return false;  
        }
        var commission = Math.abs(parseFloat(f.commission.value));
        the.onclick =   function(){
           alert("Prcessing Transaction !! wait");
        }
        f.target ="hiddenframe";
        f.submit();
        return false;
	} 
	
	function clearElement(message, e){
    	alert(message);
        e.value ='';
        e.focus();  
	}
	
	function isNumber(s) {
      s += ''; // 문자열로 변환
      s = s.replace(/^\s*|\s*$/g, ''); // 좌우 공백 제거
      if (s == '' || isNaN(s)) return false;
      return true;
    }
</script>
