<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="main">
        <div id="Sub_title_inr">
            <div class="container_inr">
                <div class="Sub_title"><h1><?= lang('member') ?> <span><?= lang('comp_point') ?></span></h1></div>
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
                            <li class="MemberTabs-link current" data-tab="tab-1"><?= lang('comp_point') ?></li>
							<li class="MemberTabs-link" data-tab="tab-2">콤프 현금전환 내역</li>
                        </ul>
                        <hr class="style-1">
                        <div id="tab-1" class="MemberTabs-content current">
                            
							<div class="box">
								<div class="user-info_avatar">
									<div class="avatar-wrapper">
										<img alt="no-thumbnail" class="" src="<?=base_url('assets/'); ?>/images/level_<?= strtolower($cur_user_level -> user_level_code_name )?>.png" width="130">
									</div>
								</div>							
								<div class="user-info_details">
									<h2 class="user-info_username"><?= $user -> user_id?></h2>
									<div class="user-info_badges">
										<ul class="badges">
											<li><?= lang('level') ?> : <b><?= $cur_user_level -> user_level_code_name ?></b> <img src="<?=base_url('assets/'); ?>/images/<?= strtolower($cur_user_level -> user_level_code_name )?>-star-icon.png" width="20"> </li>
											<li><?= lang('level_point') ?> : <b><?= number_format(floor($total_comp_point))?>/<?= number_format($promotion_needed_level_point)?></b>  </li>
											<li><?= lang('comp_point') ?> : <b><?= number_format($user -> comp_point,0)?> P</b></li>
										</ul>
									</div>
								</div>
								<div class="user-info_btn">
                                    <h3 class="blue">현금전환 가능한</h3>
									<h2 class="blue"><?= lang('comp_point') ?> :<span class="red"> <?= number_format($user -> comp_point,0)?> P</span></h2>
									<a href="<?= site_url('comp/convert_comp')?>" class="button_black banking PopSignUp fancybox.ajax">콤프 현금 전환</a>
                                </div>
							</div>
							
							<h4>모든 배팅액이 콤프 포인트로 적립 됩니다. 이기든 지든!!</h4>
							<p class="info">- 콤프포인트는 배팅액 100원당 1점이 적립됩니다.</p> 
                            <p class="info">- 각 게임타입별 적립률 - 슬롯 100:1 / 논슬롯 110:1 / 라이브 100:1 </p> 
							<p class="info"><b>적립된 콤프 포인트는 유저 레벨에 따라 현금 전환율이 차등지급 됩니다. 자세한 내용은 VIP CLUB에서 확인해 주세요.</b><br><br>
							예) 슬롯과 라이브 게임 배팅 총 합이 100만원일경우 콤프 포인트는 10만원이 되고 현금 전환은 1천원이 됩니다.</p>

							<h4>게임 타입별 콤프 포인트 적립액</h4>
								<div class="box">
									<div class="table-responsive" id ="acc_comp_list">                              
										<!-- <table class="table mb-none">
											<thead>
												<tr height="30px">
													<th>Date</th>
													<th class="text-right">Slot</th>
													<th class="text-right">Non-Slot</th>
													<th class="text-right">Live</th>
													<th class="text-right">Comp Point</th>
												</tr>
											</thead>
											<tbody>
<?php foreach($accumulate_comp_history as $row): ?>											    
												<tr>
													<td><small><?=$row -> period?></small></td>
													<td class="text-right tblue">
													   <strong><?= number_format($row -> slot_total,2)?></strong>
													</td>
													<td class="text-right tblue">
													   <strong><?= number_format($row -> non_slot_total,2)?></strong>
													</td>
													<td class="text-right tblue">
													   <strong><?= number_format($row -> live_total,2)?></strong>
													</td>
													<td class="text-right"><strong><?= number_format($row -> total_comp_point,2)?>P</strong></td>
												</tr>
<?php endforeach;?>									
											</tbody>
										</table>                   -->                  
									</div>
								</div>

                        </div>
                        <!-- //tab-1 -->
                        <div id="tab-2" class="MemberTabs-content"> 
                        
                            <h4>콤프포인트 현금 전환 내역</h4>
                            <p class="info"> - 적립된 콤프 포인트는 유저 레벨에 따라 현금 전환율이 차등지급 됩니다. 자세한 내용은 VIP CLUB에서 확인해 주세요.</p>
                            <div class="box">
                      
                                <div class="table-responsive" id ="convert_comp_list">
                                    <!-- <table class="table mb-none">
                                        <thead>
                                            <tr height="30px">
                                                <th>#</th>
												<th>Level</th>
                                                <th class="text-right">Comp Points</th>
												<th class="text-right">Converted Rate</th>
                                                <th class="text-right">Money</th>
                                                <th class="text-right">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php foreach($comp_point_converts as $row):?>                                            
                                            <tr>
                                                <td><?= $row -> comp_point_convert_no?></td>
												<td><img src="<?=base_url('assets/'); ?>/images/<?=strtolower($row -> user_level_code_name)?>-star-icon.png" width="20"> <?= $row -> user_level_code_name?> </td>
                                                <td class="text-right tred"><strong><?= number_format($row -> convert_comp_point,2)?></strong> </td>
												<td class="text-right"><b><?= $row -> convert_rate?>:1</b></td>
												<td class="text-right tblue"><strong><?=number_format($row -> convert_money,2)?> CNY</strong> </td>
                                                <td class="text-right"><small><?= time_to_string($row -> reg_date)?></small></td>
                                            </tr>                                        
<?php endforeach;?>                                   
                                        </tbody>
                                    </table>              -->                       
                                </div>
								
                            </div>

                        </div>
                    </div>
                    <!-- //member_container -->
                
                </div>
            </div>

            
        </div>
        <!-- //content -->
    </div>
    <!-- //container -->
    <script >
        function loadAjaxPage(board_type,page){
            $('#' + board_type).load(
                "<?=site_url('ba_contents/list_contents')?>/"+ board_type + '/' + page
            ); 
        }
        $(document).ready(function(){
           loadAjaxPage('acc_comp_list','1');
           loadAjaxPage('convert_comp_list','1');
        });
    </script>
<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
