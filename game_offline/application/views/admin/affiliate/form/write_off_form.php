<form action = "<?= site_url('admin/affiliate/form'); ?>"  method = "POST" name ="create_write_off" target ="hiddenframe">
	<input type ="hidden" name = 'act_mode' value = "create_write_off"/>
	<input type ="hidden" name = 'check_flag' id ='check_flag' value = "N"/>
	<input type ="hidden" name = 'user_no' value = "<?=$user_no?>"/>
	<input type ="hidden" name = 'agent_balance' id ="agent_balance"value = "<?=$wallet -> agent_settlement_balance?>"/>
	<div class="modal-body">
		<div class="col-md-12">
		      <h5 class="modal-title text-primary"><strong>* 파트너 잔액 차감</strong>  </h5>
		      <hr class="dotted short">   
            <h5 class="modal-title text-primary"><strong>* 파트너의 수익금 잔액을 조정</strong>  </h5>
			 <fieldset>
			     <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required">*</span> 파트너의 현재 보유 잔액</label>
                    <div class="col-md-8">
                        <div class="input-group input-group-icon" style ="margin-bottom:5px">
                           <label for="commission_minus_radio" class="label label-danger"><?=number_format($wallet -> agent_settlement_balance)?></label>
                        </div>
                        <span  id ="check_error" class="label label-warning"></span>
                        </span>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required">*</span> 차감액</label>
                    <div class="col-md-8">
                        <div class="input-group input-group-icon" style ="margin-bottom:5px">
                            <input id="commission_plus_radio" name="commission_change" class ="vender" type="radio" value ="<?= COMMISSION_PLUS?>" />
                            <label for="commission_plus_radio">더하기</label>&nbsp;&nbsp;&nbsp;
                            <input id="commission_minus_radio" name="commission_change" class ="vender"  type="radio" value ="<?= COMMISSION_MINUS?>" checked="checked"/>
                        <label for="commission_minus_radio">빼기</label>
                            <input type="text" class="form-control" placeholder="차감 액수"  id="write_off_amount"  name = "write_off_amount">
                        </div>
                        <button type="button" onclick ="createWriteOff(this)" class="btn btn-primary">차감 확인</button>
                        <span  id ="check_error" class="label label-warning"></span>
                        </span>
                    </div>
                </div>
            </fieldset>
			</br></br>
			<h5 class="modal-title text-primary"><strong>* 이 파트너의 모든 차감 내역</strong>  </h5>
			<hr class="dotted short">    
            <table class="table table-striped table-bordered" >
              <thead>
              <tr height="30px" class ="success">
                  <th class="text-center">#</th>
                  <th class="text-center">차감전 수익금 잔액</th>
                  <th class="text-center">차감액</th>
                  <th class="text-center">차감 후 수익금 잔액</th>
                  <th  class="text-center">Admin</th>
                  <th  class="text-center">차감 시간</th>
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
<?php if($write_off_list_count > 0):?>
    <?= $pagination -> getBoardPage();?>
<?php endif;?>		
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
        var b = document.getElementById('agent_balance');
        
        if (!isNumber(document.getElementById('write_off_amount').value)){
            clearElement("you must input characters in figure of NUMBER",e);
            return false;
        }
        if (document.getElementById('write_off_amount').value =='' ||
                 document.getElementById('write_off_amount').value.length <0 ){
            clearElement("You need to input write off amount ",e);
            return false;     
        }
        var write_off = parseFloat(e.value);
        var agent_balance = parseFloat(b.value);
        
        if (write_off <= 0) {
            clearElement("차감하려는 금액은 0보다 커야 합니다",e);
            return false;  
        }
        var commission_change = document.getElementsByName('commission_change')[0].value;
        if (commission_change == '<?= COMMISSION_MINUS?>'){
            if (write_off > agent_balance){
                clearElement("차감하려는 금액이 보유 잔액보다 많습니다.\n 확인하고 다시 시도해 주세요",e);
                return false;  
            }
        }
        
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
