<!-- Withdrawal Modal -->
<div id="Withdrawal_app" >
    <div id="Withdrawal_app">
        <div class="modal-header"><h1>Withdrawal</h1></div>
        <div class="modal-container">
            <div class="form-container">
                <h2 class="title">Bank Transfer</h2>
                출금자 명은 입금자 명과 동일해야 합니다.
                <hr>
                 <form id ="withdraw_form" name ="withdraw_form" method ="POST" target ="hiddenframe" action ="<?= site_url('e_wallet/withdraw')?>">
                <section>
<?php
    if (!empty($bank_accounts)): 
        if(count($bank_accounts) > 0):
?>                                  
                        <div class="row">
                            <label><b>Bank Account</b></label>
                                 <select id="bank_account_req" name="bank_account_req" style="width:75%">
                                    <option value="0">Direct Input</option>
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
                        <div class="row">
                            <label>Holder Name</label>
                            <input id="holder_name" name="holder_name" placeholder="User Name" type="text" value=""> 가입시 성명과 같아야 합니다.
                        </div>
                        <div class="row">
                            <label>Bank Name</label>
                            <input id="bank_name" name="bank_name" placeholder="Bank Name" type="text" value="" >
                        </div>
                        <div class="row">
                            <label>Branch Name</label>
                            <input id="bank_branch" name="bank_branch" placeholder="Branch Name" type="text" value="" >
                        </div>
                        <div class="row">
                            <label>Account Num</label>
                            <input id="bank_account" name="bank_account" placeholder="Account Number" type="text" value="" >
                        </div>
                        <div class="row">
                            <label>e-Wallet</label>
                            <div class="e_Balance" >Balance : <strong id ="wallet_balance" data-balance ="<?= !empty($wallet) ?$wallet-> wallet_balance : ''?>"><?= !empty($wallet) ? number_format($wallet -> wallet_balance,2) :''?> CNY </strong> </div>
                        </div>
                        <div class="row" style="margin-bottom:10px">
                            <label>Amount</label>
                            <input class="invalid amount_input" id="withdraw-amount-input" name="withdraw_amount_input" placeholder="Amount" type="text" value="" > <b>CNY</b>
                        </div>
                    <hr>
                    <div class="row">
                        <label></label>
                        <div class="joinbutton lostloginbutton2" id ="withdraw_now">
                         Withdrawal Now
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
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
                $('#bank_branch').val(""); 
                $('#bank_account').val(""); 
            }
            var str = $('#bank_account_req option:selected').text();
            $('#holder_name').val(trim(str.split('|')[0].split('-')[1])); 
            $('#bank_name').val(trim(str.split('|')[1])); 
            $('#bank_branch').val(trim(str.split('|')[2])); 
            $('#bank_account').val(trim(str.split('|')[3])); 
         });
         
        $('#withdraw_now').click(function(){
            $account_type = $('#bank_account_req option:selected').val();
            if ($account_type == '0'){
                var holderName = $('#holder_name').val();
                var bankName   = $('#bank_name').val();
                var branchName = $('#bank_branch').val();
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
                if (trim(branchName).length < 1 || trim(branchName) == '') {
                    alert('은행 지점명을 입력해주세요');
                    $('#branch_name').focus();
                    return;
                }
                
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
     });
 </script>