<form action = "<?= site_url('brand/reports/request_payment'); ?>"  method = "POST" name ="request_payment_form" target ="hiddenframe">
	<input type ="hidden" name = 'act_mode' value = "req_agent_payment"/>
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">정산금 신청</h4>
	</div>
	<div class="modal-body">
		</br>
		<div class="col-md-12">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><span  class="pull-right label label-primary" id ="Commission Balance"><?= number_format($wallet -> agent_settlement_balance,0)?> 원</span></h4>
					<strong style ="color:gray" >파트너님이 출금 가능한 정산액 토탈</strong>
				</li>
			</ul>
			</br>
			<fieldset>
				<!-- <div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span> Agent Code</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon" style ="margin-bottom:5px">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
							<input type="text" class="form-control" placeholder="Affiliate Code"  id="agent_code"  name = "agent_code">
						</div>

						<span  id ="check_error" class="label label-warning"></span>
						</span>
					</div>
				</div> -->
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span> 원하시는 출금액</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon">
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-krw"></i></span> </span>
							<input type="text" class="form-control" placeholder="출금신청액"  id="settlement_amount"  name = "settlement_amount">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><span class="required">*</span> 출금 받으실 곳</label>
					<div class="col-md-8">
						<div class="input-group input-group-icon" >
							<span class="input-group-addon"> <span class="icon"><i class="fa fa-chevron-circle-right"></i></span> </span>
							<select class="form-control" id ="settlement_method" name ="settlement_method" style ="margin-bottom:8px">
								<!-- <option >&nbsp;&nbsp;&nbsp;Select Messenger</option>
								<option value ="">&nbsp;&nbsp;&nbsp;-------------------------</option> -->
								<?php if (MG_ENABLE == 'Y'):?>
								<option value = "<?= SETTLEMENT_METHOD_MG_MONEY?>" >&nbsp;&nbsp;&nbsp;MG 게임머니로 출금</option>
								<?php endif;?>
								<?php if (PT_ENABLE == 'Y'):?>
								<option value = "<?= SETTLEMENT_METHOD_PT_MONEY?>" >&nbsp;&nbsp;&nbsp;PT 게임머니로 출금</option>
								<?php endif;?>
								<option value = "<?= SETTLEMENT_METHOD_WIRE?>" >&nbsp;&nbsp;&nbsp;은행 출금</option>
							</select>
						</div>
						
						<div class="input-group input-group-icon" style="display:none" id = "bank" >
                         
                            <select class="form-control" id ="bank_no" name ="bank_account_no" style ="margin-bottom:8px">
<?php
    $i = 1; 
    foreach($banks as $bank):?>                             
                                <option value = "<?= $bank -> bank_account_no?>"><?= $i?>  -  <?= $bank -> holder ?>  |  <?= $bank -> bank_name ?>  |  <?= $bank ->bank_branch ?>  |  <?= $bank -> bank_account ?></option>
<?php 
    $i++;
    endforeach;
?>  
                            </select>
                        </div>
					</div>
				
				</div>
			</fieldset>
		</div>

		<div class="clearfix"></div>
	</div>
	</br></br>
	<div class="modal-footer">
		<button type="button" onclick ="startRequestPayment(this)" class="btn btn-primary">신청하기</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
	</div>
    </form>
<script>
	$(document).ready(function() {
        $('#settlement_amount').change(function(){
            var payment_str = $(this).val().replace(/,/gi,'');
            if (!$.isNumeric(payment_str)) {
                alert("숫자만 입력해 주세요");
                $(this).val('');
                return false;
            }
            $(this).val($.number($(this).val()));
        });
        $('#settlement_amount').keyup(function(){$('#settlement_amount').trigger('change');});
        
	    $('#settlement_method').change(function(){
	      if ($(this).val() == '<?= SETTLEMENT_METHOD_WIRE?>') {
	          $('#bank').show();
	      }else {
	          $('#bank').hide();
	      }
	    });
	});
    
    function startRequestPayment(the){
        // if(trim($('#agent_code').val()).length < 4){
            // alert('Agent code 를 잘 입력해주세요');
            // $('#agent_code').val('').focus();
            // return;
        // }
        
        var payment_str = $('#settlement_amount').val().replace(/,/gi,'');
        
         if (trim( $('#settlement_amount').val()).length < 1) {
                alert("출금 금액을 입력해주세요");
                $('#settlement_amount').val('');
                return false;
            }
            
        if (!$.isNumeric(payment_str)) {
                alert("숫자만 입력해 주세요");
                $('#settlement_amount').val('');
                return false;
        }
        
        if (Number(payment_str) < <?=REQUEST_PAYMENT_MIN_LIMIT?>) {
                alert("출금 금액은 최소 100 이상입니다");
                $('#settlement_amount').val('');
                return false;
        }
        
        var f = document.forms.request_payment_form;
        the.onclick =   function(){
                alert("Prcessing Transaction !! wait");
        }
        
        f.target ="hiddenframe";
        f.submit();
        return false;
    } 
</script>
