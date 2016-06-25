<?php
include_once APPPATH . "views/front/template/m_top.php";
?>

				<div class="container heading-style-5">
                    <h4 class="heading-title">입금신청</h4>
                    <i class="fa fa-bank heading-icon"></i>
                    <div class="line bg-black"></div>
                </div>
                
                <div class="container no-bottom">
                    
                    <form id ="deposit_form" name ="deposit_form" method ="POST" target ="hiddenframe" action ="<?= site_url('e_wallet/deposit')?>">
                    	<input id="user_no" name = "user_no"  type="hidden" value="<?= !empty($user) ? $user -> user_no :'' ?>" >
                        <div class="icon-field">
                            <i class="fa fa-user"></i>
                            <input id="sender_name" name="sender_name" class="text-field green-field" type="text" placeholder="입금자명" value="<?= !empty($user) ? $user -> user_name : ''?>"/>
                        </div>
                        <div class="icon-field">
                        	<button type ="button" data-amount ="10000" 	class="button button-teal button-xs" style="width:73px;margin-right:7px;">1만원</button>
                        	<button type ="button" data-amount ="50000" 	class="button button-teal button-xs" style="width:73px;margin-right:7px;">5만원</button>
                        	<button type ="button" data-amount ="100000" 	class="button button-teal button-xs" style="width:73px;margin-right:7px;">10만원</button>
                        	<button type ="button" data-amount ="500000" 	class="button button-teal button-xs" style="width:73px;margin-right:7px;">50만원</button>
                        	<button type ="button" data-amount ="1000000" 	class="button button-teal button-xs" style="width:73px;margin-right:7px;">100만원</button>
                        	<button type ="button" data-amount ="5000000" 	class="button button-teal button-xs" style="width:73px;margin-right:7px;">500만원</button>
                        	<button type ="button" data-amount ="reset" 	class="button button-dark button-xs" style="width:73px;margin-right:7px;">정정</button>
                        </div>
                          <div class="select-style">   
                             <select id="transfer_to" name="transfer_to">
                                <?php if (MG_ENABLE == 'Y'):?>
                                <option value="2"  >Microgaming 게임머니로 전환</option>
                                <?php endif;?>
                                
                                <?php if (PT_ENABLE == 'Y'):?>
                                <option value="1"   >Playtech 게임머니로 전환</option>
                                <?php endif;?>
                             </select>
                        </div>
                        <div class="icon-field">
                            <i class="fa fa-won"></i>
                            <input id="deposit_amount" name="deposit_amount" class="text-field green-field amount_input" type="text" placeholder="입금액" value="" >
                        </div>
                        <div id ="deposit_now" class="button button-green">입금신청</div>

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
        var deposit_limit = { 
            min_limit : <?=$casino_policy -> min_per_deposit?>, 
            max_limit : <?=$casino_policy -> max_per_deposit?>
            };
    <?php endif;?> 
    
    $(document).ready(function(){
         $('.button-xs').click(function(e){
             var sel_amount = $(this).attr('data-amount');
             if (sel_amount == 'reset'){
                  $('#deposit_amount').val('');
                  return;
             }
             
             var sel_amount = parseInt(sel_amount);
             var cur_amount = $('#deposit_amount').val();
             if (cur_amount  == ''){
                 cur_amount = 0;
             }else {
                 cur_amount  = parseInt(cur_amount.replace(',',''));
             }
             
             var total_deposit = sel_amount + cur_amount;
             $('#deposit_amount').val(total_deposit);
             $('#deposit_amount').trigger('change');
             
         });
         
         $('#deposit_amount').change(function(){
             var payment_str = $(this).val().replace(/,/gi,'');
             if (payment_str.length < 1){
                 return;
             }
             if (!$.isNumeric(payment_str)) {
                 alert("숫자만 입력해 주세요");
                 $(this).val('');
                 return false;
             }
             $(this).val($.number($(this).val()));
         });
         $('#deposit_amount').keyup(function(){$('#deposit_amount').trigger('change');});
         $('#deposit_now').click(function(){
            var payment_str = $('#deposit_amount').val().replace(/,/gi,'');
            if (payment_str.length < 1){
                alert('입금하실 금액을 입력해주세요');
                return;
            }
            var deposit_amount = parseInt($('#deposit_amount').val().replace(',',''));
            if (deposit_amount < deposit_limit.min_limit || deposit_amount > deposit_limit.max_limit){
                alert('입금 금액은 ' + deposit_limit.min_limit + ' 이상 ' +deposit_limit.max_limit + '이하여만 합니다' );
                return;
            }
            document.deposit_form.submit();
         })
     });
 </script>





<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>
