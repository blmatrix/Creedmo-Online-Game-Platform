<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title>Sign In</title>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<meta name="copyright" content="로그인"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/'); ?>/stylesheets/signin_style.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/ie8.css" />
		<![endif]-->
		<script src="<?=base_url('assets/');?>/js/TLE.js"></script>
	</head>
	<body>
	<body class="align">
		<div class="site__container">
			<div class="grid__container">
				<h1>로그인 - Log In</h1>
				<?= validation_errors(); ?>
				<form  method="post" action ="<?= site_url('member/login')?>" class="form form--login" name ="login_form" id ="login_form" target="hiddenframe">
					<div class="form__field">
						<label class="fontawesome-user" for="login__username"><span class="hidden">User ID</span></label>
						<input id="user_id" name ="user_id" type="text" class="form__input" placeholder="User ID" required value ="<?= set_value('user_id'); ?>">
					</div>
					<div class="form__field">
						<label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
						<input id="user_password"  name ="user_password" type="password" class="form__input" placeholder="Password" required value="<?= set_value('user_password'); ?>">
					</div>
					<div class="form__field">
						<input type="submit" onclick ="checkForm();return false" value="Sign In">
					</div>
				</form>
				<p class="text--center">
					아직 회원이 아니신가요? <a href="<?= site_url('member/join') ?>"><b>지금 회원가입 하기</b></a> <span class="fontawesome-arrow-right"></span>
				</p>
			</div>
		</div>
		 <!-- 폼 전송을 위한 히든 프레임-->
         <iframe name="hiddenframe"  style="width: 0px; height: 0px; position: absolute; top: -1000px; left: -1000px;"></iframe>
		<script>
		   var checker = new FormChecker(document.login_form);
		   checker.checkRequired('user_id', '아이디를 입력하세요', true);
           checker.checkRequired('user_password', '비밀번호를 입력하세요', true);
		   
		   function checkForm(){
		       if (checker.validate()) {
                  document.login_form.submit();
           }else 
               return false;
		   }
		</script>
	</body>
</html>
