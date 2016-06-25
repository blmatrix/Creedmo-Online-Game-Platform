<?php
include_once APPPATH . "views/front/template/top.php";
?>
	<!-- container -->
	<div id="container" class="main">
		<div id="Sub_title_inr">
			<div class="container_inr">
				<div class="Sub_title"><h1><?= lang('member') ?> <span><?= lang('my_profile') ?></span></h1></div>
			</div>
		</div>
		<!-- content -->
		<div id="content">
		
			<div class="content_main_section">
				<!-- Column 250px -->
<?php
include_once APPPATH . "views/front/template/side.php";
?>
				<!-- Column 750px -->
				<div class="column750px Mainform-container">

					<div id="member_container">
						<ul class="MemberTabs">
							<li class="MemberTabs-link <?=$tab == 'change_general'? 'current' :'' ?>" data-tab="tab-1">내정보</li>
							<li class="MemberTabs-link <?=$tab == 'change_bank_account'? 'current' :'' ?>" data-tab="tab-2">내 계좌정보</li>
							<li class="MemberTabs-link <?=$tab == 'change_password'? 'current' :'' ?>" data-tab="tab-3">비밀번호 변경</li>
							<!-- <li class="MemberTabs-link <?=$tab == 'change_email'? 'current' :'' ?>" data-tab="tab-4">Change Email</li> -->
						</ul>
						<hr class="style-1">
						<div id="tab-1" class="MemberTabs-content <?=$tab == 'change_general'? 'current' :'' ?>">
							<div class="box">
								<div class="user-info_avatar">
									<div class="avatar-wrapper">
										<img alt="no-thumbnail" class="" src="<?=base_url('assets/'); ?>/images/level_<?= strtolower($cur_user_level -> user_level_code_name )?>.png" width="130">
										<div class="level_point">
										 <a href="<?= site_url('comp') ?>" class="button_small blackbtn" style="width:130px;"><?= number_format(floor($total_comp_point))?>P</a> 
										</div>
									</div>
								</div>							
								<div class="user-info_details">
									<h2 class="user-info_username"><?= $user -> user_id?> </h2>
									<?php if($promotion_needed_level_point):?>
									<div class="progress-bar-box">										
										<div class="progress-bar bluestripes stripes">
										    <span id = "progress-bar1" style="width:<?= number_format($total_comp_point / $next_user_level -> promotion_level_point * 100)?>%">
										        <?= number_format(floor($total_comp_point) / $next_user_level -> promotion_level_point * 100)?>%
										    </span> 
										</div>
										<div id ="progress-bar-text1"  class="progress-bar-box-right"><strong><?= number_format(floor($total_comp_point))?>P</strong> / <?= number_format($next_user_level -> promotion_level_point)?>P</div>
									</div>
									<?php else:?>
									    <div class="progress-bar-box">                                     
                                        <div class="progress-bar-box-right"><strong><?= number_format($total_comp_point)?>P</div>
                                    </div>
									<?php endif;?>
									<div class="user-info_badges">
										<ul class="badges">
											<li><?= lang('level') ?> : <b><?= lang(strtolower($cur_user_level -> user_level_code_name)) ?></b> <img src="<?=base_url('assets/'); ?>/images/<?= strtolower($cur_user_level -> user_level_code_name )?>-star-icon.png" width="20"> </li>
											<li><?= lang('country') ?> : <img src="<?=base_url('assets/');?>/images/flags/<?=strtolower($user -> country_code)?>.gif" style="margin-top:2px;">&nbsp;<?= $user -> country_name?></li>
											<!--<li><?= lang('member_since') ?> : <?= time_to_string($user-> reg_date)?></li>-->
											<li><?= lang('last_log_in') ?> : <?= !empty($user_track)? time_to_string($user_track -> reg_date):''?></li>
										</ul>
									</div>
								</div>
							</div>
						        <form method="POST" action ="<?= site_url('info/modify')?>" target ="hiddenframe">
						        <input type ="hidden" name ="modify_type" value ="general"/>    
								<section class="member_tab">								
									<div class="half_container">
										<div class="row">
											<label>파트너코드</label>
											<input  placeholder="파트너코드" id ="affiliate_code" name ="affiliate_code" type="text" value="<?= $user -> affiliate_code?>" readonly >
										</div>										
										<div class="row">
											<label>성명</label>
											<input id="user_name" name="user_name" placeholder="User Name" type="text" value="<?= $user -> user_name?>">
										</div>
										<!-- <div class="row label-container">
											<label style="margin-top:0"><?= lang('gender') ?></label>
											<input autocomplete="off" <?= $user -> user_gender == GENDER_MALE? "checked ='checked'" : ""?> id="user_gender" name="user_gender" type="radio" value="<?= GENDER_MALE?>" readonly /> Male
											<input autocomplete="off" <?= $user -> user_gender == GENDER_FEMALE ? "checked ='checked'" : ""?> id="user_gender" name="user_gender" type="radio" value="<?= GENDER_FEMALE?>" readonly /> Female
										</div> -->
									</div>
									
									<div class="half_container">
										<div class="row">
											<label><?= lang('messenger') ?></label>
												 <select id="id_type" name="id_type" style="width: 30%; display: inline-block; vertical-align: middle;">
												   	<option value="<?=IM_TYPE_KAKAO?>" <?= $user -> im_type == IM_TYPE_KAKAO ? "selected ='selected'" : ""?> >카카오톡</option>
												   	<option value="<?=IM_TYPE_QQ?>"     <?= $user -> im_type == IM_TYPE_QQ    ? "selected ='selected'" : ""?> >라인</option>
													<option value="<?=IM_TYPE_SKYPE?>" <?= $user -> im_type == IM_TYPE_SKYPE ? "selected ='selected'" : ""?>  ><?= IM_TYPE_SKYPE ?></option>
													
												</select>
											<input id="im_id" name="im_id" style="width: 67%; display: inline-block; vertical-align: middle;" placeholder="Messenger ID" type="text" value="<?= $user -> im_id?>">
										</div>
										<div class="row">
											<label><?= lang('mobile_number') ?></label>
												 <select id="phone_code" name="phone_code" style="width: 30%; display: inline-block; vertical-align: middle;">
												   <option value="">-----------</option>
<?php foreach($default_country_codes as $country_code):?>												     
													<option value="<?=$country_code?>" <?php if($country_code == $user -> phone_code):?>selected ="selected"<?php endif;?>> +<?=$country_code?></option>
<?php endforeach;?>													
												</select>
												<input id="phone_number" name="phone_number" style="width: 67%; display: inline-block; vertical-align: middle;"  value ="<?= $user -> user_phone?>"placeholder="Mobile" type="text">
										</div>
									</div>
									<div class="row">
									    <button type ="submit" class="button_black" />내정보 수정하기</button>
										<!-- <div class="button_black">Update Profile</div> -->
									</div>
								</section>
								</form>
							</div>
							<!-- //tab-1 -->
							<div id="tab-2" class="MemberTabs-content <?=$tab == 'change_bank_account'? 'current' :'' ?>">
							
								<div class="box">
								    <?php if (count($bank_accounts) < 1):?>
								        아직 등록하신 고객님의 계좌정보가 없습니다.
								    <?php else:?>    
									<div class="table-responsive">
										<table class="table mb-none">
											<thead>
												<tr>
													<th>#</th>
													<th>예금주</th>
													<th>은행이름</th>
													<!-- <th>Branch Name</th> -->
													<th>계좌번호</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach($bank_accounts as $bank_account):?>
												<tr>
													<td><?= $bank_account -> bank_account_no?></td>
													<td><b><?= $bank_account -> holder?></b></td>
													<td><?= $bank_account -> bank_name?></td>
													<!-- <td><?= $bank_account -> bank_branch?></td> -->
													<td><?= $bank_account -> bank_account?></td>
													<td class="actions">
														<!-- <a onclick="bank_action(event,'mod','<?= $bank_account -> bank_account_no?>')"><i class="flaticon-gear74" onclick="bank_action('mod','<?= $bank_account -> bank_account_no?>')"></i></a> -->
														<a onclick="bank_action(event,'del','<?= $bank_account -> bank_account_no?>')"><i class="flaticon-garbage21" onclick="bank_action('del','<?= $bank_account -> bank_account_no?>')"></i></a>
													</td>
												</tr>
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
									<?php endif;?>
								</div>
							    <form method="POST" action ="<?= site_url('info/modify')?>" target ="hiddenframe">
							    <input type ="hidden" name ="modify_type" value ="bank_account"/> 
								<section class="member_tab">

										<h4>내 계좌정보 새로 입력</h4>
											<p class="info">고객님의 출금통장을 입력해 주세요.<br>
											여러개 등록 가능 하며 출금시 원하는 계좌를 선택하실수 있습니다.</p>
										
										<div class="row">
											<label>예금주</label>
											<input id="holder" name="holder" autocomplete="off" placeholder="Holders" type="text">
										</div>
										<div class="row">
											<label>은행 이름</label>
											<input id="bank_name" name="bank_name" autocomplete="off" placeholder="Bank Name" type="text">
										</div>
										<!-- <div class="row">
											<label>Branch Name</label>
											<input id="bank_branch" name="bank_branch" autocomplete="off" placeholder="Branch Name" type="text">
										</div> -->
										<div class="row">
											<label>계좌번호</label>
											<input id="bank_account" name="bank_account" autocomplete="off" placeholder="Account Num" type="text">
										</div>
										<div class="row">
											<button type ="submit" class="button_black" />계좌 등록하기</button>										     
											<!-- <div class="button_black">Make New Bank Account</div> -->
										</div>
								</section>
								</form>
							</div>
							<!-- //tab-2 -->
							 <form method="POST" action ="<?= site_url('info/modify')?>" target ="hiddenframe">
                                <input type ="hidden" name ="modify_type" value ="password"/> 
							<div id="tab-3" class="MemberTabs-content <?=$tab == 'change_password'? 'current' :'' ?>">
								<section class="member_tab">
									<h4>비밀번호 변경</h4>
										
											<p class="info">고객님의 비밀번호를 변경 하실 수 있습니다.</p>
											<p class="info"> - 비밀번호는 6자리 이상의 영문과 숫자 조합</b>
											</p>
										
										<div class="row">
											<label>기존 비밀번호</label>
											<input id="cur_password" name="cur_password" autocomplete="off" placeholder="Old Password" type="password">
										</div>
										<div class="row">
											<label>새로운 비밀번호</label>
											<input id="new_password" name="new_password" autocomplete="off" placeholder="New Password" type="password">
										</div>
										<div class="row">
											<label>새로운 비밀번호 다시 입력</label>
											<input id="repeat_password" name="repeat_password" autocomplete="off" placeholder="Repeat New Password" type="password">
										</div>
										
										<div class="row">
										    <button type ="submit" class="button_black" />Change Password</button>
											<!-- <div class="button_black">Change Password</div> -->
										</div>

								</section>
								</form>
							</div>
							<!-- //tab-3 -->
							 <form method="POST" action ="<?= site_url('info/modify')?>" target ="hiddenframe">
                                <input type ="hidden" name ="modify_type" value ="email"/> 
							<div id="tab-4" class="MemberTabs-content <?=$tab == 'change_email'? 'current' :'' ?>">
								<section class="member_tab">
										<div class="row">
											<p>Please complete the fields below in order to change your email address.<br>
											Once submitted, a verification email will be sent to your new email account where you will have to click the link to verify it.</p>
										</div>
										<div class="row">
											<label>Password</label>
											<input id="user_password" name="user_password" autocomplete="off" placeholder="Password" type="password">
										</div>
										<div class="row">
											<label>New Email Address</label>
											<input id="user_email" name="user_email" autocomplete="off" placeholder="New Email Address" type="text">
										</div>
										<div class="row">
										    <button type ="submit" class="button_black" />Change Email Address</button>
											<!-- <div class="button_black">Change Email Address</div> -->
										</div>
								</section>
								</form>
							</div>
							<!-- //tab-4 -->
						
					</div>
					   </br></br></br></br>
					<!-- //member_container -->
				</div>
				
			</div>
		</div>
		<!-- //content -->
	</div>
	<!-- //container -->
	
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
    include_once APPPATH . "views/front/template/footer.php";
 ?>
