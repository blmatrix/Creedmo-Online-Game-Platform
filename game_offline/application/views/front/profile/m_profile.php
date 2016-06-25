<?php
include_once APPPATH . "views/front/template/m_top.php";
?>
                <div class="container no-bottom">
                    <div class="sidebar-left-small">
                        <img class="level-img" src="<?=base_url('assets/'); ?>/images/level_<?= strtolower($cur_user_level -> user_level_code_name )?>.png">
                        <br>
                        <h4 class="no-bottom"><?= $user -> user_id?>님 </h4>
						<div class="chart chart-round">
                            <strong><?= lang(strtolower($cur_user_level -> user_level_code_name)) ?> </strong>레벨 진행상황
                            <em><?= number_format($total_comp_point / $next_user_level -> promotion_level_point * 100)?>%</em>
                            <div class="chart-background">
                                <div class="yellow-chart" style="width:<?= number_format($total_comp_point / $next_user_level -> promotion_level_point * 100)?>%"></div>
                            </div>
                        </div>

                        <ul class="font-icon-list">
                            <li><a href="#"><i class="fa fa-trophy"></i>레벨 포인트 : <?= number_format(floor($total_comp_point))?>P</strong> / <?= number_format($next_user_level -> promotion_level_point)?>P</a></li>
                            <!-- <li><a href="#"><i class="fa fa-money"></i>전자지갑 : <b><?= number_format($user -> wallet_balance,2)?></b>원</a></li> -->
                            <li><a href="#"><i class="fa fa-rocket"></i>게임 칩 : <span id ="mg_casino_balance"><b><?= number_format($user -> mg_casino_balance,2)?></b></span>원</a></li>
                        </ul>
                    </div>
                    <div class="decoration"></div>
				</div>
				
				
                <div class="container no-bottom">
                    <div class="one-third-responsive no-bottom">
                        <h5>정보수정</h5>
                        
                        <form method="POST" name ="modify_general_form" action ="<?= site_url('info/modify')?>" target ="hiddenframe">
							<input type ="hidden" name ="modify_type" value ="general"/>    
	                        <div class="icon-field">
	                            <i class="fa fa-user"></i>
	                            <input id="user_name" name="user_name" class="text-field green-field" type="text" value="<?= $user -> user_name?>">
	                        </div>
	                        <div class="icon-field">
	                            <i class="fa fa-mobile"></i>
	                            <input id="phone_number" name="phone_number" class="text-field green-field" type="text" value="<?= $user -> user_phone?>">
	                        </div>
	                        
	                        <button type ="button" onclick= "checkGeneralModifyForm()" class="button button-green button-xs">수정하기</button>
                        </form>
                    </div>
                    <script>
                        var checker1 = new FormChecker(document.modify_general_form);
                        checker1.checkRequired('user_name', '이름을 입력해주세요', true);
                        checker1.checkMinLength('user_name', 2, '이름은  최소 2 이상 입력하세요', true);
                        checker1.checkRequired('phone_number', '전화번호를 입력해주세요', true);
                        
                        function checkGeneralModifyForm() {
                            if (checker1.validate()) {
                               document.modify_general_form.submit();
                            }
                        }
                    </script>
                    <div class="decoration hide-if-responsive"></div>
                    <div class="one-third-responsive no-bottom">
                        <h5>비밀번호 수정</h5>
                        
                        <form method="POST" name ="modify_password_form" action ="<?= site_url('info/modify')?>" target ="hiddenframe">
							<input type ="hidden" name ="modify_type" value ="password"/>    
	                        
	                        <div class="icon-field">
                            	<i class="fa fa-lock"></i>
                            	<input id="cur_password" name="cur_password" autocomplete="off" class="text-field green-field" type="password" placeholder="Password">
	                        </div>
	                        <div class="icon-field">
	                            <i class="fa fa-lock"></i>
	                            <input id="new_password" name="new_password" autocomplete="off" class="text-field green-field" type="password" placeholder="New Password">
	                        </div>
	                        <div class="icon-field">
	                            <i class="fa fa-lock"></i>
	                            <input id="repeat_password" name="repeat_password" autocomplete="off" class="text-field green-field" type="password" placeholder="Repeat Password">
	                        </div>
	                        
	                        <button type ="button" onclick= "checkModifyPasswordForm()" class="button button-green button-xs">비밀번호 수정</button>
                        </form>
                    </div>
                     <script>
                        var checker2 = new FormChecker(document.modify_password_form);
                        checker2.checkRequired('cur_password', '현재 비밀번호를 입력해주세요', true);
                        
                        checker2.checkRequired('new_password', '새로운 비밀번호를 입력해주세요', true);
                        checker2.checkAlphaNum('new_password', '비밀번호는 알파벳과 숫자만 입력하세요', true);
                        checker2.checkMinLength('new_password', 6, '비밀번호는 최소 6 이상 입력하세요', true);
                        checker2.checkMaxLength('new_password', 25, '비밀번호는 최대 25 이하여야 합니다 ', true);
                        
                        checker2.checkRequired('repeat_password', '비밀번호 확인을 위해 한번 더 입력해주세요', true);
                        checker2.checkEqual('repeat_password','new_password', '입력한 비밀 번호가 일치하지 않습니다.', true);
                        
                        function checkModifyPasswordForm() {
                            if (checker2.validate()) {
                               document.modify_password_form.submit();
                            }
                        }
                    </script>
                    <div class="decoration hide-if-responsive"></div>
                    
				</div>
                <div class="container no-bottom">
					<h5>내 통장 관리</h5>
                    <p>출금 받으실 통장정보를 추가 삭제 해주세요.</p>
				    <?php if (count($bank_accounts) < 1):?>
				        there is no Bank account !!
				    <?php else:?>    
					<table cellspacing='0' class="table">
							<thead>
								<tr>
									<th>예금주</th>
									<th>은행</th>
									<!-- <th>Branch Name</th> -->
									<th>계좌번호</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($bank_accounts as $bank_account):?>
								<tr>
									<td><b><?= $bank_account -> holder?></b></td>
									<td><?= $bank_account -> bank_name?></td>
									<!-- <td><?= $bank_account -> bank_branch?></td> -->
									<td><?= $bank_account -> bank_account?></td>
									<td class="actions">
										<!-- <a onclick="bank_action(event,'mod','<?= $bank_account -> bank_account_no?>')"><i class="flaticon-gear74" onclick="bank_action('mod','<?= $bank_account -> bank_account_no?>')"></i></a> -->
										<a onclick="bank_action(event,'del','<?= $bank_account -> bank_account_no?>')"><i class="fa fa-trash" onclick="bank_action('del','<?= $bank_account -> bank_account_no?>')"></i></a>
									</td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					<?php endif;?>
				</div>
                <div class="container no-bottom">
                    <h5>통장 새로 등록</h5>
                    
                    <form method="POST" name ="add_bank_account_form" action ="<?= site_url('info/modify')?>" target ="hiddenframe">
						<input type ="hidden" name ="modify_type" value ="bank_account"/>    
                        <div class="icon-field">
                            <i class="fa fa-user"></i>
                            <input id="holder" name="holder" class="text-field green-field" type="text" placeholder="예금주 성명">
                        </div>
                        <div class="icon-field">
                            <i class="fa fa-user"></i>
                            <input id="bank_name" name="bank_name" class="text-field green-field" type="text" placeholder="은행명">
                        </div>
                        <div class="icon-field">
                            <i class="fa fa-user"></i>
                            <input id="bank_account" name="bank_account" class="text-field green-field" type="text" placeholder="계좌번호">
                        </div>
                        
                        <button type ="button" onclick= "checkAddBankAccountForm()"  class="button button-green button-xs">통장 등록</button>
                    </form>
                </div>
                <script>
                    var checker3 = new FormChecker(document.add_bank_account_form);
                    checker3.checkRequired('holder', '예금주명 입력해주세요', true);
                    checker3.checkRequired('bank_name', '은행명을 입력해주세요', true);
                    checker3.checkRequired('bank_account', '계좌번호를 입력해주세요', true);
                    function checkAddBankAccountForm() {
                        if (checker3.validate()) {
                           document.add_bank_account_form.submit();
                        }
                    }
                </script>
	<script>
	    // $(document).ready(function(){
	        // var p_target = <?= number_format($total_comp_point / $next_user_level -> promotion_level_point * 100)?>;
	        // var p_cur_value = 0;
	        // var target_el = $('#progress-bar1');
	        // var timer = setInterval(function(){
	            // p_cur_value = p_cur_value + 1;
	            // if (p_cur_value  > p_target ){
	               // clearInterval(timer);
	               // return;   
	            // }
	            // target_el.width(p_cur_value + '%');
	            // //target_el.css('width', p_cur_value + '%');
	            // target_el.html(p_cur_value + '%');
	        // },1);
	    // });
	    
	    function bank_action(event,type,key){
	        // event.preventDefault();
	        var url = "<?= site_url('info/account_act')?>"
	        var param = {mode : type, account_no : key};
	        $.post(url,param, function(data){
	            if (data.result == 'success'){
	               alert('successfully Your request have finished');
	               location.reload();
	            }
	        },'json');
	     }
	</script>


<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>