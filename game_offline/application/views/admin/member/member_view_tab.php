<?php if ($member_tab == 'overview'):?>

                <div class="well well-sm">
                                            <div class="table-responsive">
                                                <table class="table mb-none">
                                                    <thead>
                                                        <tr>
                                                            <th>현재 회원 보유금액</th>
                                                            <th class="text-right"><?= number_format($wallet-> wallet_balance + $wallet -> pt_casino_balance + $wallet -> mg_casino_balance)?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>E-Wallet</td>
                                                            <td class="text-right"><strong><?= number_format($wallet-> wallet_balance);?> 원</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>MG Casino</td>
                                                            <td class="text-right"><strong><?= number_format($wallet-> mg_casino_balance);?>  원</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>PT Casino</td>
                                                            <td class="text-right"><strong><?= number_format($wallet-> pt_casino_balance);?>  원</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Comp Point</td>
                                                            <td class="text-right"><strong><?= number_format($wallet-> comp_point);?>  P</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <hr class="dotted short">
                                    
                                        <h4 class="mb-xlg">회원 기본정보 
                                            <small class ="label pull-right">
                                                <?php if ($user-> mg_game_status == 'Y'):?>
                                                    <?php if (!empty($mg_game_user)):?>
                                                        <a href="" target ="_blnak" id ="mg_play_chek_url">MG Game 플레이 내역</a>
                                                    <?php endif;?>
                                                <?php endif;?>
                                                &nbsp;&nbsp;
                                                <?php if ($user-> pt_game_status == 'Y'):?>
                                                    <?php if (!empty($pt_game_user)):?>
                                                       <a href="" target ="_blnak" id ="pt_play_chek_url">PT Game Play</a>
                                                    <?php endif;?>
                                                <?php endif;?>
                                            </small>
                                        </h4>  
                                        <script>
                                            $(document).ready(function(){
                                                $('#mg_play_chek_url').attr('href' , mg_play_check_url);
                                                $('#pt_play_check_url').attr('href' , pt_play_check_url);
                                            });
                                        </script>
                                        
                                        <form action = "<?= site_url('admin/member/member_modify'); ?>"  method = "POST"  target = "hiddenframe" >
                                            <input type ="hidden" name ="user_no" value ="<?= $user-> user_no?>">
                                            <input type ="hidden" name ="modify_target" value ="overview"?>
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">User ID</label>
                                                    <div class="col-md-8">
                                                        
                                                        <div class="input-group input-group-icon">
                                                            <span class="input-group-addon">
                                                                <span class="icon"><i class="fa fa-user"></i></span>
                                                            </span>
                                                            <input type="text" class="form-control" id = "user_id" name = "user_id" placeholder="Left icon" value="<?= $user-> user_id?>" readonly>
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">이름</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-icon">
                                                            <span class="input-group-addon">
                                                                <span class="icon"><i class="fa fa-user"></i></span>
                                                            </span>
                                                            <input type="text" class="form-control" id ="user_name" name ="user_name" placeholder="Left icon" value="<?= $user-> user_name?>">
                                                        </div>
                                                    </div>
                                                </div>                                          
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">전화번호</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-icon">
                                                            <span class="input-group-addon">
                                                                <span class="icon"><i class="fa fa-mobile"></i></span>
                                                            </span>
                                                            <input type="text" class="form-control" placeholder="Left icon" id = "user_phone" name ="user_phone" value="<?= $user -> user_phone?>">
                                                        </div>
                                                    </div>
                                                </div>                                          
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">E-mail</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-icon">
                                                            <span class="input-group-addon">
                                                                <span class="icon"><i class="fa fa-envelope"></i></span>
                                                            </span>
                                                            <input type="text" class="form-control" placeholder="Left icon" id ="user_email" name ="user_email" value="<?= $user-> user_email?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">메신저(<?= $user -> im_type?> )</label>
                                                    <input type ="hidden" name ="im_type" id ="im_type" value "<?= $user -> im_type?>"/>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-icon">
                                                            <span class="input-group-addon">
                                                                <span class="icon"><i class="fa fa-qq"></i></span>
                                                            </span>
                                                            <input type="text" class="form-control" placeholder="Left icon"  id ="im_id " name ="im_id" value="<?= $user -> im_id?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label class=" col-md-3 control-label">성별</label>
                                                    <div class="col-lg-8">
                                                        <select  class="form-control" id ="user_gender" name ="user_gender">
                                                          <option value ="<?= GENDER_MALE?>" <?php if ($user-> user_gender == GENDER_MALE):?> selected="selected" <?php endif;?> >Male</option>
                                                          <option value ="<?= GENDER_FEMALE?>" <?php if ($user-> user_gender == GENDER_FEMALE):?>selected="selected" <?php endif;?>>Female</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                <div class="form-group">
                                                    <label class=" col-md-3 control-label">회원상태</label>
                                                    <div class="col-lg-8">
                                                        <select id="State" class="form-control" id ="user_status" name ="user_status">
                                                          <option value ="<?= USER_STATUS_UNLOCKED?>" <?php if ($user-> user_status == USER_STATUS_UNLOCKED):?> selected="selected" <?php endif;?> >Unlock</option>
                                                          <option value ="<?= USER_STATUS_LOCKED?>" <?php if ($user-> user_status == USER_STATUS_LOCKED):?> selected="selected" <?php endif;?> >Lock</option>
                                                        </select>
                                                    </div>
                                                </div>                                          
                                                <div class="form-group">
                                                    <label class=" col-md-3 control-label">Game ID</label>
                                                    <div class="col-lg-8">
                                                        <span class="label label-success">MG ID</span>&nbsp; <?= $user-> mg_id?>
                                                        <br/>
                                                        <span class="label label-success">PT ID&nbsp;</span>&nbsp; <?= $user-> pt_id?>
                                                    </div>
                                                </div>
                                                
                                                <hr class="dotted short">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="profileBio">관리자 메모</label>
                                                    <input type ="hidden" id ="user_notice" name = "user_notice" value ="<?= $user_notice ? $user_notice -> user_notice_no:''?>"/>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" rows="5" id="user_notice_content" name ="user_notice_content">
                                                            <?= trim($user_notice? $user_notice -> user_notice_content:'')?>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                         
                                            <hr class="dotted">
                                            <h4 class="mb-xlg">비밀번호 변경</h4>
                                            <fieldset class="mb-xl">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">새로운 비밀번호</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-icon">
                                                            <span class="input-group-addon">
                                                                <span class="icon"><i class="fa fa-key"></i></span>
                                                            </span>
                                                            <input type="password" class="form-control" placeholder="New password" id ="user_password" name ="user_password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">새로운 비밀번호 다시 입력</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-icon">
                                                            <span class="input-group-addon">
                                                                <span class="icon"><i class="fa fa-key"></i></span>
                                                            </span>
                                                            <input type="password" class="form-control" placeholder="Repeat New Password" id ="user_password_repeat" name ="user_password_repeat">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-9 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary">수정하기</button>
                                                        <button type="reset" class="btn btn-default">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
 <script language="JavaScript" type="text/javascript">
    function popup(game_id, user_no){
        window.open("<?= site_url('admin/pt_api/login')?>?game_id="+ game_id + "&user_no=" + user_no,'Games','width=800,height=600,menubar=no,scrollbars=no,toolbar=no,location=no,directories=no,resizable=no') ;
     }
</script>                                          

<?php endif;?>

<?php if ($member_tab == 'account'):?>
        <h4 class="mb-xlg">출금통장</h4>
        <?php if(count($bank_accounts)):?>
                                            <div class="well well-sm">
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
                                                            <td><?= $bank_account -> holder?></td>
                                                            <td><?= $bank_account -> bank_name?></td>
                                                            <!-- <td><?= $bank_account -> bank_branch?></td> -->
                                                            <td><?= $bank_account -> bank_account?></td>
                                                            <td class="actions">
                                                                <!-- <a href=""><i class="fa fa-pencil"></i></a>
                                                                <a href="" class="delete-row" data-toggle="modal" data-target="#modalBootstrap"><i class="fa fa-trash-o"></i></a> -->
                                                            </td>
                                                        </tr>
    <?php endforeach;?>                                                         
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
    <?php else:?>
         <div class="well well-sm">
           <div class="table-responsive">
               등록한 출금통장 정보가 없습니다.
           </div>
         </div>
    <?php endif;?>    
                                            
                                            <hr class="dotted">
                                            <h4 class="mb-xlg">입출금 및 보너스 내역</h4>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Date</th>
                                                            <th class="text-center">종류</th>
                                                            <th class="text-center">상세</th>
                                                            <th class="text-center">입금</th>
                                                            <th class="text-center">출금</th>
                                                            <th class="text-center">이동</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
<?php foreach($datas as $data):?>                                                        
                                                        <tr>
                                                            <td class="text-center"> <small><?= time_to_string($data['reg_date']);?></small></td>
                                                            <td class="text-center"><?= $data['type'];?></td>
                                                            <td class="text-center"><?= $data['des'];?></td>
                                                            <td class="text-center text-primary "><?=$data['deposit'];?></td>
                                                            <td class="text-center text-danger"><?= $data['withdraw'];?></td>
                                                            <td class="text-center"><?= $data['transfer'];?></td>
                                                        </tr>
<?php endforeach;?>                                                        
                                                    </tbody>
                                                </table>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn btn-primary">모든 거래내역 보기</button>
                                                    </div>
                                                </div>
<?php endif;?>
<?php if ($member_tab == 'affiliate'):?>
                                        <form action = "<?= site_url('admin/member/member_modify'); ?>"  method = "POST"  target = "hiddenframe" >
                                            <input type ="hidden" name ="user_no" value ="<?= $user-> user_no?>">
                                            <input type ="hidden" name ="modify_target" value ="affiliate">                                   
                                        <h4 class="mb-xlg">상위 파트너 - 누구의 회원인가</h4>
                                            <fieldset>
                                            <div class="form-group has-warning">
                                                <label class="col-md-3 control-label">상위 파트너</label>
                                                <div class="col-md-8">
                                                    <div class="input-group input-group-icon">
                                                        <span class="input-group-addon">
                                                            <span class="icon"><i class="fa fa-user-secret"></i></span>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Left icon" value="<?= $upper_agent ? $upper_agent-> user_id.' ['.$upper_agent -> affiliate_code.'] ' : 'baofa88'?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>
                                            
                                            <hr class="dotted">
                                            <h4 class="mb-xlg">파트너 정보</h4>
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="profileFirstName">파트너 Code</label>
                                                    <div class="col-md-8">
                                                        <?php if($user -> is_affiliate == 'Y'):?>
                                                        <input type="text" class="form-control" id="affiliate_code"  name ="affiliate_code" value="<?= $user->affiliate_code ?>" readonly>
                                                        <?php else:?>
                                                        <input type="text" class="form-control" id="affiliate_code" name ="affiliate_code" value="">
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="profileLastName"><span class="required">*</span>  Email Address</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="user_email" name ="user_email" value="<?= $user -> user_email?>">
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label class="col-md-3 control-label" for="City"><span class="required">*</span>  City</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="city" name ="city" value="<?= $user -> city ? $user-> city:''?>">
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <label class="col-md-3 control-label" for="profileCompany"><span class="required">*</span>  Country</label>
                                                    <div class="col-md-8">
                                                        <select name="phone_code" id ="phone_code" class="form-control">
                                                            <option value ="" selected >------------------</option>
                                                            <?php foreach($country_phone_codes as $code):?>
                                                             <option value="<?= $code[0]?>" <?= $country -> phone_code == $code[0] ? 'selected':'' ?> ><?= $code[1]?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>     -->                                              
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="Phone"><span class="required">*</span>  전화번호</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="user_phone" name ="user_phone" value="<?= $user -> user_phone?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="Phone">  메신저 종류</label>
                                                    <div class="col-md-8">
                                                        <select id="img_type" name ="im_type" class="form-control">
                                                          <option value ="QQ" <?= $user-> im_type == 'QQ'? 'selected':''?> >라인</option>
                                                          <option value ="Skype" <?= $user-> im_type == 'Skype'? 'selected':''?> >Skype</option>
                                                          <option value ="Kakao Talk" <?= $user-> im_type == 'Kakao Talk'? 'selected':''?>>카카오톡</option>
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="Phone">  IM Address</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id ="im_id" name ="id_id" class="form-control" value ="<?= $user -> im_id?>">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            
                                            <hr class="dotted short">
                                            <h4 class="mb-xlg">추가 정보</h4>
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="profileBio">파트너 세부메모</label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" rows="3" id="affiliate_des" name ="affiliate_des">
                                                            <?= $user-> affiliate_des?>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-9 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary">수정하기</button>
                                                        <button type="reset" class="btn btn-default">Reset</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
<?php endif;?>

<?php if ($member_tab == 'affiliate_payment'):?>
                    <form class="form-horizontal" method="get">
                                            <h4 class="mb-xlg">파트너 정산 통장 정보</h4>
     <?php if(count($bank_accounts)):?>                                            
                                            <div class="well well-sm">
                                            <div class="table-responsive">
                                                                                               <table class="table mb-none">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Holders</th>
                                                            <th>Bank Name</th>
                                                            <th>Branch Name</th>
                                                            <th>Account Num</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
    <?php foreach($bank_accounts as $bank_account):?>                                                        
                                                        <tr>
                                                            <td><?= $bank_account -> bank_account_no?></td>
                                                            <td><?= $bank_account -> holder?></td>
                                                            <td><?= $bank_account -> bank_name?></td>
                                                            <td><?= $bank_account -> bank_branch?></td>
                                                            <td><?= $bank_account -> bank_account?></td>
                                                            <td class="actions">
                                                                <!-- <a href=""><i class="fa fa-pencil"></i></a>
                                                                <a href="" class="delete-row" data-toggle="modal" data-target="#modalBootstrap"><i class="fa fa-trash-o"></i></a> -->
                                                            </td>
                                                        </tr>
    <?php endforeach;?>                                                         
                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>
   <?php else:?>
         <div class="well well-sm">
           <div class="table-responsive">
               There is no Bank Account
           </div>
         </div>
    <?php endif;?>                                            
                                            <hr class="dotted">
                                            <h4 class="mb-xlg">Affiliate Statement</h4>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <!-- <th>Level</th> -->
                                                            <th>Type</th>
                                                            <th>Account</th>
                                                            <th class="text-right">Withdraw</th>
                                                            <th class="text-right">State</th>
                                                            <th class="text-right">Confirm Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
<?php foreach($settlements as $settlement):?>                                                        
                                                        <tr>
                                                            <td><small><?= time_to_string($settlement -> reg_date)?></small></td>
                                                            <!-- <td>Level 2</td> -->
                                                            <td><?= $settlement -> settlement_method == SETTLEMENT_METHOD_WALLET ? 'Transfer': 'Wire Transfer' ?></td>
                                                            <td><?= $settlement -> settlement_method == SETTLEMENT_METHOD_WALLET ? 'Wallet'  : $settlement->  bank_name.' - '.$settlement -> bank_account ?></td>
                                                            <td class="text-right text-danger"><?= number_format($settlement -> settlement_amount)?></td>
                                                            <td class="text-right">
                                                                <?= $settlement-> settlement_status == SETTLEMENT_STATUS_NOT_CHECKED? 'Not Checked':''?>
                                                                <?= $settlement-> settlement_status == SETTLEMENT_STATUS_BEFORE_CONFIRM? 'Before comfirm':''?>
                                                                <?= $settlement-> settlement_status == SETTLEMENT_STATUS_CONFIRMED? 'confirm':''?>
                                                                <?= $settlement-> settlement_status == SETTLEMENT_STATUS_CANCLED? 'Canceled By User':''?>
                                                                <?= $settlement-> settlement_status == SETTLEMENT_STATUS_CANCLED_BY_ADMIN? 'Cancel By Admin':''?>
                                                            </td>
                                                            <td class="text-right"><small><?= time_to_string($settlement -> confirm_date)?></small></td>
                                                        </tr>
<?php endforeach;?>                                                        
                                                    </tbody>
                                                </table>                                                
                                            </div>
                                            
                                            <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn btn-primary">View All Statement</button>
                                                    </div>
                                                </div>
<?php endif;?>
