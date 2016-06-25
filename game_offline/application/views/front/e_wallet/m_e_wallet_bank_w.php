<?php
include_once APPPATH . "views/front/template/m_top.php";
?>
				<div class="container heading-style-5">
                    <h4 class="heading-title">출금신청</h4>
                    <i class="fa fa-bank heading-icon"></i>
                    <div class="line bg-black"></div>
                </div>
                
                <div class="container no-bottom">
                    


                 <form id ="withdraw_form" name ="withdraw_form" method ="POST" target ="hiddenframe" action ="<?= site_url('e_wallet/withdraw')?>">
                 	<h6>출금 계좌 선택</h6>
<?php
    if (!empty($bank_accounts)): 
        if(count($bank_accounts) > 0):
?>                      <div class="select-style">      
                             <select id="bank_account_req" name="bank_account_req" style="width:100%">
                                <option value="0">직접 입력</option>
    <?php 
        $i = 1;
        foreach($bank_accounts as $bank_account):
    ?>                                  
                                <option value="<?= $bank_account -> bank_account_no?>" >
                                    <?= $i?>  -  <?= $bank_account -> holder ?> | <?= $bank_account -> bank_name?> | <?= $bank_account -> bank_branch?> | <?= $bank_account -> bank_account?>
                                </option>
    <?php 
        $i++; 
        endforeach;
    ?>                                  
                            </select>
                       </div>
    <?php endif;?>  
<?php endif;?>                  
                        
                        <div class="icon-field">
                            <i class="fa fa-user"></i>
                            <input id="holder_name" name="holder_name" class="text-field green-field" type="text" placeholder="입금자명">
                        </div>
                        <div class="icon-field">
                            <i class="fa fa-bank"></i>
                            <input id="bank_name" name="bank_name" class="text-field green-field" type="text" placeholder="은행명">
                        </div>

                        <div class="icon-field">
                            <i class="fa fa-circle"></i>
                            <input id="bank_account" name="bank_account" class="text-field green-field" type="text" placeholder="계좌번호">
                        </div>
                         <div class="select-style">   
                             <select id="transfer_from" name="transfer_from">
                                <?php if (MG_ENABLE == 'Y'):?>
                                <option value="2"  >Microgaming 에서 출금</option>
                                <?php endif;?>
                                
                                <?php if (PT_ENABLE == 'Y'):?>
                                <option value="1"   >Playtech 에서 출금</option>
                                <?php endif;?>
                             </select>
                        </div>
                        
                         <?php if (MG_ENABLE == 'Y'):?> 
                        <div class="row" id ="mg_balance_div" >
                            <div class="e_Balance" >
                                MG 보유 머니&nbsp;&nbsp;:&nbsp;&nbsp;<strong id ="mg_balance" data-balance ="<?= !empty($wallet) ?$wallet-> mg_casino_balance: ''?>">
                                        <?= !empty($wallet) ? number_format($wallet -> mg_casino_balance) :''?>&nbsp; won </strong> 
                            </div>
                        </div>
                        <?php endif;?>
                        
                        <?php if (PT_ENABLE == 'Y'):?> 
                        <div class="row" id ="pt_balance_div" >
                            <div class="e_Balance">
                                PT 보유 머니&nbsp;&nbsp;:&nbsp;&nbsp;<strong id ="pt_balance"  data-balance ="<?= !empty($wallet) ?$wallet-> pt_casino_balance: ''?>">
                                    <?= !empty($wallet) ? number_format($wallet -> pt_casino_balance) :''?>&nbsp; won </strong> 
                            </div>
                        </div>
                        <?php endif;?>
                        <hr>
                        <div class="row" style="margin-top:20px">
                            <input id="withdraw-amount-input" name="withdraw_amount_input" class="text-field green-field amount_input" type="text" placeholder="출금신청 금액">
                        </div>
                    <hr>
                    <div id ="withdraw_now" class="button button-green">출금신청</div>
               </form>
                </div>


<script>
     function alertAndclearElement(m,el){
        alert(m);
        el.val('');
        el.focus();
    }
    
    function trim(str){
         return str.replace(/(^\s*)|(\s*$)/gi, "");
    }
    
    <?php if(!empty($casino_policy)):?>
        var withdraw_limit  = { 
            min_limit : <?=$casino_policy -> min_per_withdrawals?>, 
            max_limit : <?=$casino_policy -> max_per_withdrawals?>
        };
    <?php endif;?> 
    
     $(document).ready(function(){
         $('#bank_account_req').change(function(){
            if ($('#bank_account_req').val() == '0'){
                $('#holder_name').val(""); 
                $('#bank_name').val(""); 
                //$('#bank_branch').val(""); 
                $('#bank_account').val(""); 
            }
            var str = $('#bank_account_req option:selected').text();
            $('#holder_name').val(trim(str.split('|')[0].split('-')[1])); 
            $('#bank_name').val(trim(str.split('|')[1])); 
            //$('#bank_branch').val(trim(str.split('|')[2])); 
            $('#bank_account').val(trim(str.split('|')[3])); 
         });
         
        $('#withdraw_now').click(function(){
            $account_type = $('#bank_account_req option:selected').val();
            if ($account_type == '0'){
                var holderName = $('#holder_name').val();
                var bankName   = $('#bank_name').val();
                //var branchName = $('#bank_branch').val();
                var bankAccount = $('#bank_account').val();
                
                if (trim(holderName).length < 1 || trim(holderName) == '') {
                    alert('출금자 명을 입력해주세요');
                    $('#holder_name').focus();
                    return;
                }
                
                if (trim(bankName).length < 1 || trim(bankName) == '') {
                    alert('은행 명을 입력해주세요');
                    $('#bank_name').focus();
                    return;
                }
                //if (trim(branchName).length < 1 || trim(branchName) == '') {
                //    alert('은행 지점명을 입력해주세요');
                //    $('#branch_name').focus();
                //    return;
                //}
                
                if (trim(bankAccount).length < 1 || trim(bankAccount) == '') {
                    alert('은행 계좌를 입력해주세요');
                    $('#bank_account').focus();
                    return;
                }
            }
            
            var el = $('#withdraw-amount-input');
            var withdraw_amount_str = $("#withdraw-amount-input").val().replace(/,/gi,'');
            if (withdraw_amount_str.length < 1) {
                alertAndclearElement("출금하실 금액을 입력해주세요",el);
                return false;
            }
            if (!$.isNumeric(withdraw_amount_str)) {
                alertAndclearElement("숫자만 입력해 주세요",el);
                return false;
            }
            var wallet_balance = parseInt($('#wallet_balance').attr('data-balance'));
            var withdraw_amount =  parseInt(withdraw_amount_str);
            
            if (withdraw_amount > wallet_balance ){
                alertAndclearElement('출금금액이 현재 잔액를 초과했습니다',el);
                return false;
            }
            
            if (withdraw_amount >= withdraw_limit.min_limit && withdraw_amount <= withdraw_limit.max_limit){
                document.withdraw_form.submit();
            }else {
                var alertMes = '출금 금액은 ' + $.number(withdraw_limit.min_limit) + " 이상 " +  $.number(withdraw_limit.max_limit) + " 이하여야 합니다";
                alertAndclearElement(alertMes,el);
                return false;   
            }
        });
        
        $('#withdraw-amount-input').change(function(){$(this).val($.number($(this).val()));});
        $('#withdraw-amount-input').keyup(function(){$('#withdraw-amount-input').trigger('change');});
        $("#transfer_from > option:eq(0)").prop("selected", "true");
        $('#transfer_from').change(function(){
            $('#mg_balance_div').hide();
            $('#pt_balance_div').hide();
            var vender = $(this).val();
            if (vender == '1'){
                $('#pt_balance_div').show();
            }
            
            if (vender == '2'){
                $('#mg_balance_div').show();
            }
        });
         $('#transfer_from').trigger('change');
     });
 </script>




<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>
