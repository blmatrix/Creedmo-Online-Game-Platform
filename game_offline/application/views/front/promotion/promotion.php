<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="main">
	
        <div id="Sub_title_inr">
            <div class="container_inr">
                <div class="Sub_title"><h1><?= lang('promotion') ?> <span></span></h1></div>
            </div>
        </div>
        <!-- content -->
        <div id="content">
        
            <div class="content_main_section">

                <div class="column750px Mainform-container" style="width:100%">

					<div id="member_container">
					
						<section>
						
							<div class="thumb_wrap">
								<div class="thumb"><a href="#"><img src="<?=base_url('assets/'); ?>/images/event/promotion-01.jpg"></a></div>
								<div class="summary">
									<h4>Up to 500 CNY First Deposit Bonus
									<em class="ico_txt">ON GOING</em>
									</h4>
									<p class="info">This bonus is for first time depositing new casino players only.<br>
									15% VIP New Player Bonus up to a maximum bonus of 500 CNY<br></p>
									<p class="info">Minimum deposit amount is 100CNY<br>
									Maximum bonus amount is 500CNY<br>
									In order to claim your winnings, you must wager at least x20 your deposit and bonus amount (minimum wagering requirement).</p>
								</div>
							</div>
							
							<hr color="#333">
							
							<div class="thumb_wrap">
								<div class="thumb"><a href="<?= site_url('vip_club') ?>"><img src="<?=base_url('assets/'); ?>/images/event/promotion-02.jpg"></a></div>
								<div class="summary">
									<h4>VIP CLUB
									<em class="ico_txt">ON GOING</em>
									</h4>
									<p class="info"><strong>Become a VIP Club Member</strong><br>
									Our most loyal members are invited to join the exclusive Bao8Bet Casino VIP Club and benefit from a wide range of special promotions and bonus offers, as well as higher Comp Points conversion rates. <br>
									VIP Club members enjoy better Comp Point rates, improved bonuses and opportunities to earn superb gifts</p>

									<p class="info"><a class="detail" href="<?= site_url('vip_club') ?>">View Detail</a></p>
								</div>
							</div>
							
							<hr color="#333">
							
							<div class="thumb_wrap">
								<div class="thumb"><a href="<?= site_url('vip_club') ?>"><img src="<?=base_url('assets/'); ?>/images/event/promotion-03.jpg"></a></div>
								<div class="summary">
									<h4>COMP POINTS
									<em class="ico_txt">ON GOING</em>
									</h4>
									<p class="info"><strong>Every bet you make, win or lose!</strong><br>
									Each 100 CNY wagered is worth 1 Comp*, meaning you are earning back a proportion of your stakes each time you play!<br>
									For example, wager a total of 10,000 CNY playing Slot Games and earn 100 Comp Points! </p>

									<p class="info"><a class="detail" href="<?= site_url('comp') ?>">Convert Comp Points</a></p>
								</div>
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
