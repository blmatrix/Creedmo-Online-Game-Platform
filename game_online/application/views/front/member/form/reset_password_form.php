<!-- Lost Login Modal -->
<div id="LostLogin" >
    <div id="lostlogin">
        <div class="modal-header">
            <h1>Lost Login?</h1>
        </div>
        <form role="form" target ="hiddenframe" name ="search_password_form" id ='search_password_form' method="POST" action ="<?= site_url('member/password_reset') ?>">
            <div class="modal-container">
                <div class="form-container">
                    <div>
                        If you have forgotten your password, then please fill out the following form.
                        <br>
                        A temporary password will be forwarded to your e-mail which you can use for resetting your password.
                        <hr>

                        <section>
                            <div class="row">
                                <label>User ID</label>
                                <input id="s_user_id" required ="required" name="s_user_id" placeholder="User ID" type="text" class="invalid" title="Please provide your User ID">
                            </div>
                            <div class="row">
                                <label>Email</label>
                                <input id="s_user_email" required ="required" name="s_user_email" placeholder="Email" type="text" title="Enter your email address">
                            </div>
                            <div class="row">
                                <label></label>
                                <p>
                                    You will be sent a temporary password to your email
                                </p>
                            </div>
                        </section>

                        <hr>
                        <div class="row">
                            <label></label>
                            <button class="joinbutton lostloginbutton2" type ="button" onclick ="checkForm()" >Send New Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    var checker = new FormChecker(document.search_password_form);
    checker.checkRequired('s_user_id', '아이디를 입력하세요', true);
    checker.checkRequired('s_user_email', '이메일을 입력해주세요', true);
    checker.checkEmail('s_user_email', '이메일 형식이 옳바르지 않습니다.', true);
    
    function checkForm() {
        if (checker.validate()) {
           document.search_password_form.submit();
        }
    }
</script>