<?php
include_once APPPATH . "views/front/template/m_top.php";
?>

                <div class="container">
                    <div class="sidebar-left-small">
                        <img class="ewallet-img" src="<?=base_url('assets/'); ?>/images/ewallet_icon.png">
                        <h4 class="no-bottom">보유머니</h4>
                        <p>MG 보유머니 : <span id ="mg_casino_balance"><b><?= number_format($user -> mg_casino_balance,0)?></b></span>원</p>
                        
                    </div>
                    
                    
                    <div class="one-half-responsive ">
                        <div class="or-buttons-style-1">
                            <a href="<?=site_url('e_wallet/e_wallet_bank')?>" class="button button-blue button-round"><?= lang('deposit') ?></a>
                            <em>or</em>
                            <strong></strong>
                            <a href="<?=site_url('e_wallet/e_wallet_bank_w')?>" class="button button-orange button-round"><?= lang('withdrawal') ?></a>
                        </div>              
                    </div>
                    	
				</div>
				<em class="heading-subtitle">입/출금 신청후 에이전트에게 문의 주세요.</em>
                <div class="decoration"></div>

                            





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
													<!-- <th>#</th> -->
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
													<!-- <td><?= $history -> no?></td> -->
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
						


                            



<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>
