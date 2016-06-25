<!-- Transfer To Wallet Modal -->
<form action = "<?= site_url('e_wallet/create_transfer'); ?>"  method = "POST" name ="user_transfer_form" target ="hiddenframe">
<input type = "hidden" name ="transfer_from" id = "transfer_from" value ="<?= strtoupper($source)?>"/>
<input type = "hidden" name ="transfer_to" id = "transfer_to" value ="<?= strtoupper($target)?>"/>
<div id="TransferToWallet">
    <div id="Deposit_app">
        <div class="modal-header"><h1>Transfer To e-Wallet</h1></div>
        <div class="modal-container">
            <div class="form-container">
                <section>
                    <h2 class="title" id ="transfer_wallet_title">TRANSFER TO E-WALLET</h2>
                    <h4 class ="title2" id ="transfer_wallet_title2"><?= strtoupper($source) . " Casino"?> 에서 <?= $target?>으로 머니 이동합니다.</h4>
                    <hr>                
                        <div class="row money mg_money" >
                            <label id ="mg_game_vender"><?= strtoupper($source)?> Casino</label>
                            <div id = "mg_game_money" class="game_Balance">
                            <?php if ($source == "pt"):?>
                                <?= number_format($wallet -> pt_casino_balance,2) ?>
                            <?php else :?>
                                <?= number_format($wallet -> mg_casino_balance,2) ?>
                            <?php endif;?>    
                                                                           元</div>
                        </div>
                       
                        <div class="row" style="margin-bottom:10px">
                            <label>Transfer Amount</label>
                            <input class="invalid amount_input transfer_amount" id="transfer_amount" name="transfer_amount" placeholder="Amount" type="text" value="" > <b>CNY</b>
                        </div>
                    <hr>
                    <div class="row">
                        <label></label>
                         <input  onclick ="start_transfer(this)" class="joinbutton lostloginbutton2" type ="button" value ="Transfer Now"/>
                        <!-- <div class="joinbutton lostloginbutton2 transfer_now">
                         Transfer Now
                        </div> -->
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</form>
<script>
    function alertAndclearElement(m,el){
        alert(m);
        el.val('');
        el.focus();
    }
    
    function trim(str){
         return str.replace(/(^\s*)|(\s*$)/gi, "");
    }
    
    $(document).ready(function(){
        $('.transfer_amount').change(function(){$(this).val($.number($(this).val()));});
        $('.transfer_amount').keyup(function(){$('.transfer_amount').trigger('change');});
    });
    
    function start_transfer(the){
        var amount = $('#transfer_amount').val();
        if (amount.length < 1 || amount =='' ){
            alert('이동하실 금액을 입력해주세요');
            $('#ransfer_amount').focus();
            return false;
        }
        
        var f = document.forms.user_transfer_form;
        the.onclick =   function(){
                alert("Prcessing Transaction !! wait");
        }
        
        f.target ="hiddenframe";
        f.submit();
        return false;
    } 
</script>
