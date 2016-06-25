<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="main">
	
		<div id="promotion">
			<div class="sub_spot">
				<div class="vipheader_bg">

					<div class="sub_spot_inr">
						<div class="sub_spot_left">
							<h1><?= lang('vip_club')?></h1>
							<h2>은밀하고 고급스러운 서비스</h2>
						</div>
						<div class="sub_spot_right" style="background-image: url(<?=base_url('assets/'); ?>/images/slide/vip_spot_img.png)"></div>
					</div>
				</div>
			</div>
		</div>
        <!-- content -->
        <div id="content">
        
            <div class="content_main_section">

                <div class="column750px Mainform-container" style="width:100%">

					<div id="member_container">
					
						<section>
							<div class="row help_container">
								<h1>저희 VIP CLUB 회원에게만 드리는 다양한 혜택</h1>
								<h2 class="red">VIP 회원이 되어 특별한 혜택을 마음껏 누리세요!</h2>
								<h3>콤프 포인트 외에도 VIP 회원만을 위한 특별한 Event 등 VIP회원만이 누릴 수 있는 다양한 이벤트를 기대해주세요!</h3>
								<br>

							<div class="VIPBox">
								<div class="VIPBoxHeader">
									<img alt="no-thumbnail" class="" src="<?=base_url('assets/'); ?>/images/level_bronze.png" width="130">
									<span>500,000 레벨포인트</span>
								</div>    
								<div class="BenefitsListContainer">
								<div class="VIPBoxHeaderTitle"><h2>브론즈</h2></div>
									<ul class="BenefitsList">
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/bronze-star-icon.png);"></div>
											<span>가입 즉시 15% 신입회원 보너스 지급 - 최대 50만원</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/bronze-star-icon.png);"></div>
											<span>매 입금시마다 입금보너스 5%추가 지급</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/bronze-star-icon.png);"></div>
											<span>당신이 언제든 콤프포인트 100P이상 적립 한 후에 실제 머니로 전환 할 수 있습니다.</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/bronze-star-icon.png);"></div>
											<span>콤프포인트 현금 전환율 100:1</span>
										</li>
									</ul>
								</div>
							</div>

							<div class="VIPBox">
								<div class="VIPBoxHeader">
									<img alt="no-thumbnail" class="" src="<?=base_url('assets/'); ?>/images/level_silver.png" width="130">
									<span>1,500,000 레벨포인트</span>
								</div>
								<div class="BenefitsListContainer">
								<div class="VIPBoxHeaderTitle"><h2>실버</h2></div>
									<ul class="BenefitsList">
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/silver-star-icon.png);"></div>
											<span>실버레벨 승급 축하 보너스 50,000원 지급</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/silver-star-icon.png);"></div>
											<span>매 입금시마다 입금 보너스 8%추가 지급</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/silver-star-icon.png);"></div>
											<span>콤프포인트 현금 전환율 90:1</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/silver-star-icon.png);"></div>
											<span>머니백 프로그램에 적용 되어 매주 잃으신 금액에 5%를 보너스로 돌려 드립니다.</span>
										</li>
									</ul>
								</div>
							</div>

							<div class="VIPBox">
								<div class="VIPBoxHeader">
									<img alt="no-thumbnail" class="" src="<?=base_url('assets/'); ?>/images/level_gold.png" width="130">
									<span>3,000,000 레벨포인트</span>
								</div>
								<div class="BenefitsListContainer">
								<div class="VIPBoxHeaderTitle"><h2>골드</h2></div>
									<ul class="BenefitsList">
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/gold-star-icon.png);"></div>
											<span>골드레벨 승급 축하 보너스 200,000원 지급</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/gold-star-icon.png);"></div>
											<span>매 입금시마다 입금 보너스 10%추가 지급</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/gold-star-icon.png);"></div>
											<span>콤프포인트 현금 전환율 80:1</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/gold-star-icon.png);"></div>
											<span>머니백 프로그램에 적용 되어 매주 잃으신 금액에 10%를 보너스로 돌려 드립니다.</span>
										</li>
									</ul>
								</div>
							</div>

							<div class="VIPBox"> 
								<div class="VIPBoxHeader">
									<img alt="no-thumbnail" class="" src="<?=base_url('assets/'); ?>/images/level_platinum.png" width="130">
									<span>over 3,000,000 레벨포인트</span>
								</div>
								<div class="BenefitsListContainer">
								<div class="VIPBoxHeaderTitle"><h2>플레티넘</h2></div>
									<ul class="BenefitsList">
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/platinum-star-icon.png);"></div>
											<span>플레티넘 레벨 승급 축하 보너스 500,000원 지급</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/platinum-star-icon.png);"></div>
											<span>매 입금시마다 입금 보너스 15%추가 지급</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/platinum-star-icon.png);"></div>
											<span>전담 고객 상담원이 24시간 언제나 편안히 모십니다.</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/platinum-star-icon.png);"></div>
											<span>콤프포인트 현금 전환율 70:1</span>
										</li>
										<li class="clearfix"><div class="star_icon" style="background-image: url(<?=base_url('assets/'); ?>/images/platinum-star-icon.png);"></div>
											<span>그외 보다 다양한 플레티넘 서비스가 기다립니다.</span>
										</li>
									</ul>
								</div>
							</div>
								<!-- <br>
								<h5>Significant Offer Terms and Conditions</h5>
								<ol class="TextList" style="margin-bottom:10px;list-style-type:decimal;">
										<li><span>All new players start at Bronze Level in the VIP Club. <br></span></li>
										<li><span>플레이어는 Silver, Gold, Platinum Level에 도달하면 승급 보너스를 받게 됩니다.</span></li>
										<li><span>각 게임별 Comp Points 적립 Rate는 같지 않습니다. 게임타입별 Comp Point 적립 Rate보기</span></li>
										<li><span>Level Point는 Comp Points의 총 합입니다.</span></li>    
								</ol>
								<br> -->
								
								
							</div>
						</section>
                        

					</div>
					<!-- //member_container -->
                </div>
				<!-- //Column 750px -->
            </div>
			<!-- //content_main_section -->

            
        </div>
        <!-- //content -->
    </div>
    <!-- //container -->

<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
