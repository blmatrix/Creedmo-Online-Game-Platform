<form action = "<?= site_url('admin/adminauth/create_member'); ?>"  method = "POST" target ="hiddenframe">
    <input type ="hidden" name = 'act_mode' value = "member_create"/>
<div class="modal-header header-primary">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<h4 class="modal-title">유저생성</h4>
</div>
<div class="modal-body">

	<div class="col-md-12">
		<fieldset>
			<div class="form-group">
				<label class="col-md-3 control-label"><span class="required">*</span>User ID</label>
				<div class="col-md-8">
					<div class="input-group input-group-icon">
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
						<input type="text" class="form-control" placeholder="User ID"  id="user_id"  name = "user_id">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label"><span class="required">*</span>비밀번호</label>
				<div class="col-md-8">
					<div class="input-group input-group-icon">
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
						<input type="password" class="form-control" placeholder="User Password"  id ="user_password" name ="user_password">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label"><span class="required">*</span>Repeat 비밀번호</label>
				<div class="col-md-8">
					<div class="input-group input-group-icon">
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-key"></i></span> </span>
						<input type="password" class="form-control" placeholder="Repeat Password" id ="confirm_password" name ="confirm_password">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label"><span class="required">*</span>이름</label>
				<div class="col-md-8">
					<div class="input-group input-group-icon">
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
						<input type="text" class="form-control" placeholder="User Name" id ="user_name" name ="user_name">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">전화번호</label>
				<div class="col-md-8">
					<div class="input-group input-group-icon">
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-mobile"></i></span> </span>
						<input type="text" class="form-control" placeholder="Phone Number" id ="user_phone" name ="user_phone">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">E-mail</label>
				<div class="col-md-8">
					<div class="input-group input-group-icon">
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-envelope"></i></span> </span>
						<input type="text" class="form-control" placeholder="E-mail" id ="user_email" name ="user_email">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">메신저</label>
				<div class="col-md-8">
				    <div class="input-group input-group-icon" >
                        <span class="input-group-addon"> <span class="icon"><i class="fa fa-qq"></i></span> </span>
                            <select class="form-control" id ="im_type" name ="im_type" style ="margin-bottom:8px">
                                  <!-- <option >&nbsp;&nbsp;&nbsp;Select Messenger</option>
                                  <option value ="">&nbsp;&nbsp;&nbsp;-------------------------</option> -->
                                  <option value = "Kakao Talk">&nbsp;&nbsp;&nbsp;카카오톡</option>
                                  <option value = "QQ">&nbsp;&nbsp;&nbsp;라인</option>
                                  <option value = "Skype">&nbsp;&nbsp;&nbsp;Skype</option>
                                  
                             </select>
                    </div>
					<div class="input-group input-group-icon" >
			
						<span class="input-group-addon"> <span class="icon"><i class="fa fa-qq"></i></span> </span>
						<input type="text" class="form-control" placeholder="im ids" id ="im_id" name ="im_id">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-3 control-label">성별</label>
				<div class="col-lg-8">
					<select id="user_gender" name ="user_gender" class="form-control">
						<option value ="M">남자</option>
						<option value ="F">여자</option>
					</select>
				</div>
			</div>
			<!-- <div class="form-group">
                <label class=" col-md-3 control-label">language</label>
                <div class="col-lg-8">
                    <select id="language" name ="language" class="form-control">
                        <option value="">Select language</option>
                        <option value ="">-------------------------</option>
<?php foreach($languages as $language):?>                        
                        <option value ="<?= $language -> language_no?>" ><?= $language -> language_ename?></option>
<?php endforeach;?>                        
                    </select>
                </div>
            </div> -->
            
            <div class="form-group">
                <label class=" col-md-3 control-label">User level</label>
                <div class="col-lg-8">
                    <select id="user_level" name ="user_level" class="form-control">
                        <!-- <option value ="">Select Level</option>
                        <option value ="">----------------------</option> -->
                        <option value ="1" >Bronze</option>
                        <option value ="2">Silver</option>
                        <option value ="3">Gold</option>
                        <option value ="4">Platinum</option>
                    </select>
                </div>
            </div>
		</fieldset>

	</div>
	<div class="clearfix"></div>
</div>
<div class="modal-footer">
	<input type="submit" class="btn btn-primary" value = "유저 생성"/>
	<button type="button" class="btn btn-default" data-dismiss="modal">
		Close
	</button>
</div>
</form>
