<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title>Sign Up</title>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<meta name="copyright" content="회원가입"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/'); ?>/stylesheets/signin_style.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/ie8.css" />
		<![endif]-->

		<script src="<?=base_url('assets/');?>/js/TLE.js"></script>
	</head>
	<body class="align">
		<div class="site__container">
			<div class="grid__container">
				<h1>회원가입 - Sign Up</h1>
				<form target='hiddenframe' name ="join_form" method="post" class="form form--login" >
					<div class="form__field">
						<label class="fontawesome-magnet" for="signin__username"><span class="hidden">추천인 코드</span></label>
						<input id="upper_code" name ="upper_code" type="text" class="form__input blue" placeholder="추천인 코드" required>
						<span class="off_desc">필수입력 - 6자리</span>
					</div>
					<div class="form__field">
						<label class="fontawesome-user" for="signin__username"><span class="hidden">User ID</span></label>
						<input id="user_id" name ="user_id" type="text" class="form__input" placeholder="User ID" required>
						<span class="off_desc">6~12자리 영문/숫자</span>
					</div>
					<div class="form__field">
						<label class="fontawesome-lock" for="signin__password"><span class="hidden">Password</span></label>
						<input id="user_password" name ="user_password" type="password" class="form__input" placeholder="Password" required>
						<span class="off_desc">6~25자리 영문/숫자</span>
					</div>
					<div class="form__field">
						<label class="fontawesome-lock" for="signin__re_password"><span class="hidden">Re Password</span></label>
						<input id="password_confirm"  name ="password_confirm" type="password" class="form__input" placeholder="Re Password" required>
						<span class="off_desc">비밀번호 확인</span>
					</div>
					<div class="form__field">
						<label class="fontawesome-user" for="signin__name"><span class="hidden">성 명</span></label>
						<input id="user_name" name ="user_name"  type="text" class="form__input" placeholder="성 명" required>
						<span class="off_desc">실명을 입력</span>
					</div>
					<div class="form__field">
						<label class="fontawesome-phone-sign" for="signin__phonenum"><span class="hidden">휴대번호</span></label>
						<input id="phone_number" name ="phone_number" type="text" class="form__input" placeholder="휴대번호" required>
						<span class="off_desc">숫자만 입력</span>
					</div>
					<div class="form__field">
						<input type="submit" onclick ="checkForm();return false" value="회원가입">
					</div>
				</form>
				<p class="text--center">
					이미 회원이세요? <a href="<?= base_url() ?>">Log In now</a><span class="fontawesome-arrow-right"></span>
				</p>
			</div>
             <!-- 폼 전송을 위한 히든 프레임-->
         <iframe name="hiddenframe"  style="width: 0px; height: 0px; position: absolute; top: -1000px; left: -1000px;"></iframe>
         <script>
            var checker = new FormChecker(document.join_form);
            checker.checkRequired('upper_code', '추천인 코드를 입력해 주세요', true);
            checker.checkRequired('user_id', '아이디를 입력해 주세요', true);
            checker.checkAlphaNum('user_id', '아이디는 알파벳과 숫자만 입력해 주세요', true);
            checker.checkMinLength('user_id', 6, '아이디는 최소 6자리 입력해 주세요', true);
            checker.checkMaxLength('user_id', 12, '아이디는 최대 12 이하 입력해 주세요', true);
            
            checker.checkRequired('user_password', '비밀 번호를 입력해 하세요', true);
            checker.checkAlphaNum('user_password', '비밀번호는 알파벳과 숫자만 입력해 주세요', true);
            checker.checkMinLength('user_password', 6, '비밀번호는 최소 6 이상 입력해 주세요', true);
            checker.checkMaxLength('user_password', 25, '비밀번호는 최대 25 이하여야 합니다 ', true);
            
            checker.checkRequired('password_confirm', '확인을 위해 다시 한번 비밀번호를 입력하세요', true);
            checker.checkEqual('password_confirm','user_password', '입력한 비밀 번호가 일치하지 않습니다.', true);
            checker.checkRequired('user_name', '이름을 입력해 주세요', true);
            checker.checkRequired('phone_number', '전화번호를 입력해 주세요', true);
           
           function checkForm(){
               if (checker.validate()) {
                  document.join_form.submit();
           }else 
               return false;
           }
        </script>
		</div>

	</body>
</html>
