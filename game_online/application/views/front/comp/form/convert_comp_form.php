<!-- Convert compoint  Modal -->
<form action = "<?= site_url('comp/convert_comp'); ?>"  method = "POST" id ="convert_comp_form" name ="convert_comp_form" target ="hiddenframe">
<div id="convert_comp">
    <div id="Deposit_app">
        <div class="modal-header"><h1>Convert Comp To E-WALLET</h1></div>
        <div class="modal-container">
            <div class="form-container">
                <section>
                    <h4 class ="title2" id ="transfer_game_title2"> Convert your comp-point to E-Wallet</h4>
                    <hr> 
					<p>Every 100 points you accumulate can be converted to 1 currency unit in real money for you to use as you wish</p>
                        <div class="row">
                            <label>Your Comp Point</label>
                            <div class="e_Balance"> <strong><?= number_format($wallet -> comp_point,2)?> P </strong> </div>
                        </div>
                        
                        <div class="row">
                            <label>Converting Rate</label>
                            <div class="e_Balance"> <strong> <?= $cur_user_level -> conversion_1cny_rate ?> P : 1<?= lang('cny'); ?> </strong> </div>
                        </div>
                                              
                        <div class="row" style="margin-bottom:10px">
                            <label>Convert Amount</label>
                            <input class="invalid amount_input convert_amount" id="convert_amount" name="convert_amount" placeholder="Comp Point" type="text" value="" > <b>Minimum 100P</b>
                        </div>
                    <hr>
                    <div class="row">
                        <label></label>
                        <input  id = "convert_comp_submit"  class="joinbutton lostloginbutton2" type ="submit" value ="Convert Now"/>
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
    
    $(document).ready(function(){
        $('.convert_amount').change(function(){
            var payment_str = $(this).val().replace(/,/gi,'');
                if (!$.isNumeric(payment_str)) {
                    alert("숫자만 입력해 주세요");
                    $(this).val('');
                    return false;
                 }
             $(this).val($.number($(this).val()));         
        });
        $('.convert_amount').keyup(function(){$('.convert_amount').trigger('change');});
        
        //ajaxForm 플러그인을 이용하여 form을 ajax 로 변경 요청
        $('#convert_comp_form').ajaxForm({
            dataType : 'json',
            beforeSubmit : function(){
                var el = $('#convert_amount');
                var convert_amount_str  = $("#convert_amount").val().replace(/,/gi,'');
                
                if (!$.isNumeric(convert_amount_str)) {
                    alertAndclearElement("숫자만 입력해 주세요",el);
                    return false;
                }
                
                var convert_amount =  parseInt(convert_amount_str);
                if (convert_amount < <?= CONVERT_COMP_MIN_LIMIT?>){
                    alertAndclearElement("전환 콤프포인트는 최저 <?= CONVERT_COMP_MIN_LIMIT?> COmp Point 이상이어야 합니다.",el);
                    return false;
                }
                
                if (convert_amount > <?= $wallet -> comp_point ?>) {
                    alertAndclearElement("전환 가능한 콤프 포인트를 초과하였습니다. \n확인하고 다시 시도해주세요.",el);
                    return false;
                }
                
                $('#convert_comp_submit').click(function(){
                    alert('현재 요청이 진행중입니다');
                    return false;
                });
            },
            success : function(data,rst){
                $('#convert_comp_submit').unbind('click');
                if (data.errorCode == '0' ){
                    alert(data.message);
                    location.reload();    
                }else {
                    alert(data.message);
                }
            }
         });    
    });
   
   
    
    function convertComp(the){
        alert($('#convert_comp_form').serializeArray());
        return;
        var f = document.forms.convert_comp_form;
        the.onclick =   function(){
                alert("Prcessing Transaction !! wait");
        }
        
        f.target ="hiddenframe";
        f.submit();
        return false;
    } 
    
</script>
<!-- //Convert compoint  Modal-->