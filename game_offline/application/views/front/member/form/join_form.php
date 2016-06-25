<!-- Sign Up Modal -->
<div id="PopSignUp" >
	<div id="signup">
		<div class="modal-header">
			<h1>Create a new account</h1>
		</div>
		<div class="modal-container">
			<div class="banner-container"><img src="<?=base_url('assets/'); ?>/images/join_promotion.jpg">
			</div>
			<form role="form" name ="join_form" id ='join_form' method="POST" target ="hiddenframe" action="<?= site_url('member/join') ?>" >
				<div class="form-container" >

					<h2 class="title">Get started for free</h2>
					<hr>
					<section>
						<?php
						if (!empty($this -> session_manager -> get_extra_session(SESSION_KEY_A_CODE))):
						?>
						<div class="row">
							<label>Upper Code</label>
							<input id="j_upper_code" name="j_upper_code" readonly="readonly" type="text" class="invalid" value ="<?= $this -> session_manager -> get_extra_session(SESSION_KEY_A_CODE) ?>"/>
						</div>
						<?php endif; ?>
						<div class="row">
							<label>User ID</label>
							<input required ="required" id="j_user_id" name="j_user_id" placeholder="User ID" type="text" class="invalid" title="This must be 6-14 characters long using letters, numbers and underscores only">
							&nbsp;&nbsp;<span id ="id_error_msg"> </span>
						</div>
						<div class="row">
							<label>Password</label>
							<input required ="required" id="j_user_password" name="j_user_password" autocomplete="off" placeholder="Password" type="password" title="Your password has to be at least 6 characters long and must contain at least an uppercase letter and a digit">
						</div>
						<div class="row">
							<label>Repeat Password</label>
							<input required ="required" id="j_repeat_password" name="j_repeat_password" autocomplete="off" placeholder="Repeat Password" type="password" title="Please re-enter your password">
						</div>
						<div class="row">
							<label>Email</label>
							<input required ="required" id="j_user_email" name="j_user_email" placeholder="Email" type="text" title="Enter your email address">
						</div>
						<div class="row label-container">
							<label style="margin-top:0">Gender</label>
							<input autocomplete="off" checked="checked" id="j_gender_male" name="j_gender" type="radio" value="<?= GENDER_MALE ?>" />
							Male
							<input autocomplete="off" id="j_gender_femail" name="j_gender" type="radio" value="<?= GENDER_FEMALE ?>" />
							Female
						</div>
						<div class="row">
							<label>User Name</label>
							<input required ="required" id="j_user_name" name="j_user_name" placeholder="User Name" type="text" title="Enter your Name">
						</div>
						<div class="row" >
							<label>Messenger</label>
							<select id="j_im_type" name="j_im_type" style="width: 15%; display: inline-block; vertical-align: middle;">
								<option value="QQ" selected="selected">QQ</option>
								<option value="SKYPE">Skype</option>
								<option value="KAKAO">Kakao</option>
								<option value="Not">Not</option>
							</select>
							<input required ="required" id="j_im_id" name="j_im_id" style="width: 29.5%; display: inline-block; vertical-align: middle;" placeholder="Messenger ID" type="text" title="Enter your Mobile Number">
						</div>

						<div class ="row" id ="phone_container">
                            <label>Mobile Number</label>
                            <div >
                                <select id = "j_country_phone_code_select"  name="j_country_phone_code_select" style="width: 15%; display: inline-block; vertical-align: middle;">
<?php foreach($default_country_codes as $country_code):?>                                                    
                                    <option value="<?=$country_code?>" <?php if($country_code == $choosen_country):?>selected ="selected"<?php endif;?>> +<?=$country_code?></option>
<?php endforeach;?>                                       
                                    <option value ="" >Direct Input</option>
                                </select>
                                 <input  required ="required" id="j_country_phone_code_input" name="j_country_phone_code_input"  style="width: 15%; display: inline-block; vertical-align: middle;" placeholder="Phone Code" type="text" title="Enter your Mobile Number">
                                 <input required ="required" id="j_phone_number" name="j_phone_number"  style="width: 29.5%; display: inline-block; vertical-align: middle;" placeholder="Mobile" type="text" title="Enter your Mobile Number">
						    </div>  
						</div>
						<div class="opt-ins">
							<div class="row">
								<div class="AgreeCheck">
									<input required ="required" id="agree_adult" value ="Y" name ="agree_adult" type="checkbox"  atocomplete="off" checked="checked">
									Yes, confirm that I am over 18 years old
								</div>
							</div>
							<div class="row">
								<div class="AgreeCheck">
									<input required ="required" id="agree_term" autocomplete="off" name="agree_term" type="checkbox" value ="Y">
									I accept the
									<a href="#" id="terms" class="white">Terms & Conditions</a>, <a href="#" id="Cookie" class="white">Cookie Policy</a>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<label></label>
							<button id ="join_now" class="joinbutton joinbutton2"  type ="button" onclick= "checkForm()">
							Open Account</button>
						</div>

					</section>
				</div>
				<!-- //form-container -->
			</form>
		</div>
	</div>
</div>

<script>
    var checker = new FormChecker(document.join_form);
    checker.checkRequired('j_user_id', '아이디를 입력하세요', true);
    checker.checkAlphaNum('j_user_id', '아이디는 알파벳과 숫자만 입력하세요', true);
    checker.checkMinLength('j_user_id', 6, '아이디는 최소 6 입력하세요', true);
    checker.checkMaxLength('j_user_id', 12, '아이디는 최대 12 이하 입력하세요', true);
    
    checker.checkRequired('j_user_password', '비밀 번호를 입력하세요', true);
    checker.checkAlphaNum('j_user_password', '비밀번호는 알파벳과 숫자만 입력하세요', true);
    checker.checkMinLength('j_user_password', 6, '비밀번호는 최소 6 이상 입력하세요', true);
    checker.checkMaxLength('j_user_password', 25, '비밀번호는 최대 25 이하여야 합니다 ', true);
    
    checker.checkRequired('j_repeat_password', '확인을 위해 다시 한번 비밀번호를 입력하세요', true);
    checker.checkEqual('j_repeat_password','j_user_password', '입력한 비밀 번호가 일치하지 않습니다.', true);
    
    checker.checkRequired('j_user_email', '이메일 주소를 입력해 주세요', true);
    checker.checkEmail('j_user_email', '이메일형식이 옳바르지 않습니다.', true);
    
    checker.checkRequired('j_user_name', '이름을 입력해주세요', true);
    checker.checkMinLength('j_user_name', 2, '이름은  최소 2 이상 입력하세요', true);
    
    checker.checkRequired('j_im_id', '선택하신 메신저의 ID를 입력해주세요', true);
    checker.checkRequired('j_phone_number', '전화번호를 입력하세요', true);
    checker.checkOnlyNumber('j_phone_number', '전화번호는 숫자만 입력하세요', true);
    checker.checkAtLeastOneChecked('agree_adult', '성인 확인에 동의해 주세요', true);
    checker.checkAtLeastOneChecked('agree_term', '약관에 동의해 주세요', true);
    
    function checkForm() {
        if (checker.validate()) {
           var t = $("#j_country_phone_code_select option:selected").val();
           if (t == ''){
               var phone_code_input =  $('#j_country_phone_code_input').val();
               if (phone_code_input  == '' || phone_code_input.length < 1){
                   $('#j_country_phone_code_input').focus();
                   alert('직접 입력을 선택하신 경우에는 국가 코드를 입력하셔야 합니다');
                   return false;
               }
           }
           document.join_form.submit();
        }
    }

    $(document).ready(function(){
        $('#j_country_phone_code_input').hide();
        $("#j_country_phone_code_select").change(function(){
            var t = $("#j_country_phone_code_select option:selected").val();
            $('#j_country_phone_code_input').val('')
            
            if (t == ''){
                $('#j_country_phone_code_input').show();
            }else {
                $('#j_country_phone_code_input').hide();
            }    
        });
        
        $('#j_user_id').keyup(function(){
            var input_id = $(this).val();
            var l = input_id.length;
            if (l < 6) {
                return;
            } 
            
            if ( l > 12) {
                alert('id는 6 이상 12 이하로 입력해주세요');
                $('#id_error_msg').html('');
                return;
            } 
               
            $('#id_error_msg').html('');
            $.getJSON('<?=site_url('member/check_id_duplicated')?>',{checkId : input_id }, function(result){
                if (result.errorCode == 0){
                    $('#id_error_msg').html(result.message);
                }else {
                    $('#id_error_msg').html(result.message);
                }
            });
        });
    });
</script>