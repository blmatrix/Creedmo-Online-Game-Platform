<!-- Transfer To Game Modal -->
<form action = "<?= site_url('e_wallet/create_transfer'); ?>"  method = "POST" name ="user_transfer_form">
<div id="TransferToGame">
    <div id="Deposit_app">
        <div class="modal-header"><h1>Transfer To Game</h1></div>
        <div class="modal-container">
            <div class="form-container">
                <section>
                    <h2 class="title" id ="transfer_game_title">TRANSFER TO GAME</h2>
                    <h4 class ="title2" id ="transfer_game_title2"><?= strtoupper($source)?> 에서 <?= strtoupper($target) . ' Casino'?>으로 머니 이동합니다.</h4>
                    <hr>            
                        <div class="row">
                            <label>e-Wallet</label>
                            <div class="e_Balance">Balance : <strong><?= number_format($wallet -> wallet_balance,2)?>  CNY </strong> </div>
                        </div>
                        <input type = "hidden" name ="transfer_from" id = "transfer_from" value ="WALLET"/>
                        <div class="row">
                            <label>Game Select</label>
                                 <select id="transfer_to" name="transfer_to">
                                    <!-- <option value="">Choice Game</option>
                                    <option value="MG" <?php if ($target == "mg"):?>selected="selected" <?php endif;?> >MG Live / Slot</option>
                                    <option value="PT" <?php if ($target == "pt"):?>selected="selected" <?php endif;?> >PT Live / Slot</option> -->
                                    <option value="<?= strtoupper($target)?>" selected="selected"  ><?= strtoupper($target)?> Live / Slot</option>
                                 </select>
                        </div>                            
                        <div class="row" style="margin-bottom:10px">
                            <label>Transfer Amount</label>
                            <input class="invalid amount_input transfer_amount" id="transfer_amount" name="transfer_amount" placeholder="Amount" type="text" value="" > <b>CNY</b>
                        </div>
                    <hr>
                    <div class="row">
                        <label></label>
                        <input  onclick ="start_transfer(this)" class="joinbutton lostloginbutton2" type ="button" value ="Transfer Now"/>
                        <!-- <div class="joinbutton lostloginbutton2" >
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
<!-- //Transfer To Game Modal -->
