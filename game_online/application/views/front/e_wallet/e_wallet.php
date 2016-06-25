<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="main">
        <div id="Sub_title_inr">
            <div class="container_inr">
                <div class="Sub_title"><h1><?= lang('member') ?> <span><?= lang('e_wallet') ?></span></h1></div>
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
                            <li class="MemberTabs-link <?=$tab == 'e_wallet'? 'current' :'' ?>" data-tab="tab-1"><?= lang('e_wallet') ?></li>
                            <li class="MemberTabs-link <?=$tab == 'history'? 'current' :'' ?>" data-tab="tab-2"><?= lang('history') ?></li>
							<li class="MemberTabs-link <?=$tab == 'transfer_history'? 'current' :'' ?>" data-tab="tab-3">Transfer <?= lang('history') ?></li>
                            <li class="MemberTabs-link <?=$tab == 'cancel_withdraw'? 'current' :'' ?>" data-tab="tab-4"><?= lang('cancel') ?> <?= lang('withdrawal') ?></li>
                        </ul>
                        <hr class="style-1">
                        <div id="tab-1" class="MemberTabs-content <?=$tab == 'e_wallet'? 'current' :'' ?>">
                        
                            <div class="box">
                                <div class="user-info_avatar">
                                    <div class="avatar-wrapper">
                                        <img alt="no-thumbnail" class="" src="<?=base_url('assets/'); ?>/images/ewallet_icon.png">
                                    </div>
                                </div>
                                <div class="user-info_details">
                                    <h2 class="user-info_username"><?= lang('your_balance') ?></h2>
                                        <ul class="badges">
                                            <li><?= lang('e_wallet') ?> : <strong><?= number_format($user -> wallet_balance,2)?> <?= lang('cny')?></strong></li>

                                        </ul>
                                </div>
                                <div class="user-info_btn">
                                    <a href="<?=site_url('e_wallet/withdraw')?>" class="button_black banking PopSignUp fancybox.ajax"><?= lang('withdrawal') ?></a>                             
                                </div>
                                <div class="user-info_btn">
                                    <a href="<?=site_url('e_wallet/deposit')?>" class="button_black banking PopSignUp fancybox.ajax"><?= lang('deposit') ?></a>               
                                </div>                              
                            </div>
                            
                            <h4>Game Chip Balance</h4>
                            <p class="info">- 입금하신 금액은 전자지갑으로 충전 됩니다. 원하시는 게임으로 칩 충전 해주세요.</p>
                            <div class="wallet_game_box">
                                <div class="gamevender">MG CASINO</div>
                                <div class="gamevender2">MG Live<br>MG Slot</div>
                                <div class="gamevender_balance"><?= number_format($user->mg_casino_balance,2)?> <?= lang('cny')?></div>
                                <div class="gamevender_btn">
                                    <a href="<?= site_url('e_wallet/transfer_wallet_form')?>?request_form=transfer_wallet_form&target_v=mg" class="button_small bluebtn PopSignUp fancybox.ajax"><i class="flaticon-return13"></i> To Wallet</a>                                
                                </div>
                                <div class="gamevender_btn">
                                    <a href="<?= site_url('e_wallet/transfer_money_form')?>?request_form=transfer_money_form&target_v=mg"  class="button_small PopSignUp fancybox.ajax"><i class="flaticon-refresh30"></i> Transfer to MG</a>                              
                                </div>
                            </div>
                            <div class="wallet_game_box">
                                <div class="gamevender">PT CASINO</div>
                                <div class="gamevender2">PT Live<br>PT Slot</div>
                                <div class="gamevender_balance"><?= number_format($user -> pt_casino_balance,2)?> <?= lang('cny')?></div>
                                <div class="gamevender_btn">
                                    <a href="<?= site_url('e_wallet/transfer_wallet_form')?>?request_form=transfer_wallet_form&target_v=pt" class="button_small bluebtn PopSignUp fancybox.ajax"><i class="flaticon-return13"></i> To Wallet</a>                                
                                </div>
                                <div class="gamevender_btn">
                                    <a href="<?= site_url('e_wallet/transfer_money_form')?>?request_form=transfer_money_form&target_v=pt"  class="button_small PopSignUp fancybox.ajax"> <i class="flaticon-refresh30"></i> Transfer to PT </a>                             
                                </div>
                            </div>
                            <div class="infomation"><i class="flaticon-triangle38"></i> 입/출금은 e-Wallet에서만 가능합니다.<br>
                            <i class="flaticon-triangle38"></i> 입/출금자 통장 명의는 가입시 작성한 성명과 같아야 합니다.<br></div>
                        </div>
                        
                        <!-- //tab-1 -->
                        <div id="tab-2" class="MemberTabs-content <?=$tab == 'history'? 'current' :'' ?>"> 
							<h4>e-Wallet History</h4>
								<p class="info"> - 고객님의 정보 보호를 위해 최근 10개만 제공 됩니다.</p>
								
								<div class="box">
	<?php if(count($histories)<1):?>
	There is no histories ...
	<?php else:?>                                
									<div class="table-responsive">                              
										<table class="table mb-none">
											<thead>
												<tr height="30px">
													<th>#</th>
													<th>Type</th>
													<th class="text-right"><?= lang('deposit')?></th>
													<th class="text-right"><?= lang('bonus')?></th>
													<th class="text-right"><?= lang('withdrawal')?></th>
													<th class="text-right"><?= lang('date')?></th>
													<th class="text-right"><?= lang('status')?></th>
												</tr>
											</thead>
											<tbody>
		<?php foreach($histories as $history):?>                                            
												<tr>
													<td><?= $history -> no?></td>
													<td><?= $history -> type?></td>
													<td class="text-right tblue">
													   <strong>
														   <?= setValueIf(number_format($history -> amount1), 0, '',SET_VALUE_IF_EQUAL)?>
													   </strong>
													</td>
													<td class="text-right tblue">
													   <strong>
														   <?= setValueIf(number_format($history -> bonus), 0, '',SET_VALUE_IF_EQUAL)?>
													   </strong>
													</td>
													<td class="text-right tred">
														<strong>
															<?= setValueIf(number_format($history -> amount2), 0, '',SET_VALUE_IF_EQUAL)?>
														</strong>
													</td>
													<td class="text-right"><small><?= time_to_string($history -> reg_date)?></small></td>
													<td class="text-right"><small><?= $history -> status?></small></td>
												</tr>                                        
		<?php endforeach;?>                                            
											</tbody>
										</table>                                    
									</div><!-- // table-responsive -->
								</div>								
<?php endif;?>                            
                        </div>
                        <!-- //tab-2 -->
						
						
                        <div id="tab-3" class="MemberTabs-content <?=$tab == 'history'? 'current' :'' ?>"> 

								<!-- Money Transfer History -->
								 <h4>Transfer History</h4>
								<p class="info"> - 고객님의 정보 보호를 위해 최근 10개만 제공 됩니다.</p>
								<div class="box">
									<div class="table-responsive" id ="money_transfer_list">   
									    <!-- Money Transfer 컨테인-->                           
<?php if (count($transfers) < 1 ):?>
                                            There is no Money transfer !!
<?php else:?>    
                                        <table class="table mb-none">
                                            <thead>
                                                <tr height="30px">
                                                    <th>#</th>
                                                    <th>Type</th>
                                                    <th>From</th>
                                                    <th></th>
                                                    <th>To</th>
                                                    <th class="text-right"><?= lang('amount') ?></th>
                                                    <th class="text-right"><?= lang('date') ?></th>
                                                    <th class="text-right"><?= lang('status') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
     <?php foreach($transfers as $transfer):?>
                                                <tr>
                                                    <td><?= $transfer -> game_money_transfer_no ?></td>
                                                    <td>Transfer</td>
                                                    <td>
                                                       <strong><?= lang(strtolower($transfer -> from))?></strong>
                                                    </td>
                                                    <td><i class="flaticon-right208"></i></td>
                                                    <td>
                                                       <strong><?= lang(strtolower($transfer  -> to))?></strong>
                                                    </td>
                                                    <td class="text-right tblue">
                                                        <strong><?= number_format($transfer -> transfer_amount)?></strong>
                                                    </td>
                                                    <td class="text-right"><small><?= time_to_string($transfer  -> reg_date)?></small></td>
                                                    <td class="text-right"><span class="complete">
                                                        <?php if ( $transfer -> transfer_status == TRANSFER_STATUS_COMPLETED):?>
                                                            success
                                                        <?php elseif ( $transfer -> transfer_status  == TRANSFER_STATUS_WAITING):?>
                                                            waiting
                                                        <?php elseif( $transfer -> transfer_status  == TRANSFER_STATUS_ERROR):?>
                                                            error
                                                        <?php endif;?>
                                                        
                                                    </span></td>
                                                </tr>
      <?php endforeach;?>
                                            </tbody>
                                        </table>                 
 <?php endif;?>                                              
									</div>			
								</div>
								<!-- // Money Transfer History -->               
                        </div>
                        <!-- //tab-3 -->
                        <div id="tab-4" class="MemberTabs-content <?= $tab == 'cancel_withdraw'? 'current' :'' ?>">
                          
                            <h4><?= lang('cancel') ?> <?= lang('withdrawal') ?></h4>
                            <p class="info"> - 아직 출금되지 않은 출금내역을 취소하시면 다시 e-Wallet으로 출금 금액이 반환 됩니다.</p>
                            
                            <div class="box">
<?php if(count($cancelable_withdraws) < 1):?>
There is no Cancelabe Withdraw
<?php else:?>
                                <div class="table-responsive">                              
                                    <table class="table mb-none">
                                        <thead>
                                            <tr height="30px">
                                                <th>Type</th>
                                                <th class="text-right"><?= lang('withdrawal')?></th>
                                                <th class="text-right"><?= lang('date')?></th>
                                                <th class="text-right"><?= lang('status')?></th>
                                                <th class="text-right"><?= lang('action')?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
    <?php foreach($cancelable_withdraws as $c_withdraw):?>
                                            <tr>
                                                <td><?= lang('withdrawal')?></td>
                                                <td class="text-right tred">
                                                    <strong><?= number_format($c_withdraw -> withdraw_amount,2)?></strong>    
                                                </td>
                                                <td class="text-right"><small ><?= time_to_string($c_withdraw -> reg_date)?></small></td>
                                                <td class="text-right"><small><?= $c_withdraw -> withdraw_status?></small></td>
                                                <td class="text-right"><a onclick="cancel_withdraw('<?= $c_withdraw -> withdraw_no?>')" class="button_small rightbtn"><i class="flaticon-delete30" ></i> <?= lang('cancel') ?> <?= lang('withdrawal') ?></a></td>
                                            </tr>
   <?php endforeach;?>                                                                                     
                                        </tbody>
                                    </table>                                    
                                </div>
 <?php endif;?>
                            </div>
                            
                        </div>
                        <!-- //tab-4 -->
                            
                    </div>
                    <!-- //member_container -->
                
                </div>
            </div>
        </div>
        <!-- //content -->
    </div>
    <!-- //container -->
    <script>
        function cancel_withdraw(a){
            if (confirm('해당 출금요청을 정말로 취소하시겠습니까') == true){
                var url = "<?= site_url('e_wallet/cancel_withdraw')?>"
                var param = {withdraw: a};
                $.post(url,param, function(data){
                if (data.result == 'success'){
                   alert('successfully Your request  have finished');
                   location.reload();
                }else {
                    alert(data.message);
                    return false;
                }
            },'json');
            }else {
                return false;
            }
        }
        
        
    </script>

<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
