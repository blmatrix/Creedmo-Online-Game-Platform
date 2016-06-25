<?php
include_once APPPATH . "views/front/template/top.php";
 ?>
<!-- container -->
<div id="container" class="main">
	<div id="promotion">
		<div class="spot">
			<div class="spot_inr">			
			
				<ul class="bxslider">
				  <li><div class="slider_img"><img src="<?=base_url('assets/'); ?>/images/slide/main_slide_01.jpg"><a onclick ="<?=  generate_click_event(VENDER_PT,'avng',GAME_TYPE_SLOT,$session_id);?>" class="button_black btnPlay"><?= lang('play_now') ?></a></div></li>
				  <li><div class="slider_img"><img src="<?=base_url('assets/'); ?>/images/slide/main_slide_02.jpg"><a onclick ="<?=  generate_click_event(VENDER_MG,'MPPlayboy',GAME_TYPE_LIVE,$session_id);?>" class="button_black btnPlay"><?= lang('play_now') ?></a></div></li>
				</ul>			
			
			</div>

			<div class="da_inr">
				<div class="da_area">
					<div id="center_banner"><img src="<?=base_url('assets/'); ?>/images/center500rmb.jpg">
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="live_launcher">
		<div class="container_inr">
			<a onclick ="<?=  generate_click_event(VENDER_MG,'MPBaccarat',GAME_TYPE_LIVE,$session_id);?>" id="live_mg_launcher">MG LIVE</a>
			<a onclick ="<?=  generate_click_event(VENDER_PT,'7bal',GAME_TYPE_LIVE,$session_id);?>"  id="live_pt_launcher">PT LIVE</a>
		</div>
	</div>

	<!-- content -->
	<div id="content">

		<div class="content_main_section">
			<!-- Column 250px -->
			<div class="column250px">
				<div class="side_box01">
					<div class="side_bank_box">
                        <?php if ($login_status):?>
						<a class="button PopSignUp fancybox.ajax" href="<?=site_url('e_wallet/deposit')?>">
                        <?php else:?>
						<a class="button" onclick ="loginAlert()">
                        <?php endif;?>
						     <i class="flaticon-dollar179"></i><?= lang('deposit') ?>
						</a>
						
						<?php if ($login_status):?>
					   <a class="button PopSignUp fancybox.ajax" href="<?=site_url('e_wallet/withdraw')?>">
                        <?php else:?>
						<a class="button" onclick ="loginAlert()">
                        <?php endif;?>
						    <i class="flaticon-piggy9"></i><?= lang('withdraw') ?>
						</a>
						<?php if ($login_status):?>
						<a class="button PopSignUp" href="<?= site_url('e_wallet') ?>">
						<?php else:?>
						<a class="button" onclick ="loginAlert()">
						<?php endif;?>
						    <i class="flaticon-finance-and-business4"></i><?= lang('transfer') ?>
						</a>
					</div>
					<div class="bothafter"></div>
					<hr class="style-5">
					<?php if ($login_status):?>
					<a href="<?= site_url('comp') ?>">
					<?php else:?>
					<a class="button" onclick ="loginAlert()">
				    <?php endif;?>
						<div class="main_comp">
							<div>Every bet you make, win or lose!</div>
						</div>
					</a>
					
				</div>
				

				<div class="side_box_jackpot">
					<h2><?= lang('jackpots') ?></h2>
						<iframe name='iframe_jackpots' id="iframe1" src="<?= site_url('Jackpots')?>" frameborder="0" border="0" cellspacing="0"  scrolling="no" style="border-style: none;width: 240px; height: 127px;"></iframe>
						<a onclick ="<?=  generate_click_event(VENDER_MG,'TheDarkKnight',GAME_TYPE_SLOT,$session_id);?>" > 
							 <div class="gamename"><h4>The Dark Knight</h4> </div>
						</a>
				</div>

			</div>

			<!-- Column 750px -->
			<div class="column750px">

				<div class="main_mg_slot">

					<div id="bestslot" class="maingames clearfix">
						<h3><?= lang('mg_slot') ?> BEST<small><a class="pull-right" href="<?= site_url('slot_main?g_vender='.VENDER_MG)?>"><?= lang('view_all') ?></a></small></h3>
						
						<div class="slotbox">
							<div class="NewGame"></div>
							<img src="<?=base_url('assets/'); ?>/images/games/mg_forsaken_kingdom.jpg" alt="Forsaken Kingdom">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'ForsakenKingdom',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Forsaken Kingdom</span>
							</div>
						</div>
						
						<div class="slotbox">
							<img src="<?=base_url('assets/'); ?>/images/games/mg_giantpanda.jpg" alt="Untamed Giant panda">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'UntamedGiantPanda',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Untamed Giant panda</span>
							</div>
						</div>
						
						<div class="slotbox">
							<div class="OnMobile">
								<i class="flaticon-iphone26"></i>
							</div>
							<img src="<?=base_url('assets/'); ?>/images/games/mg_imortalromance.jpg" alt="Immortal Romance">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'ImmortalRomance',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Immortal Romance</span>
							</div>
						</div>
						
						<div class="slotbox">
							<div class="NewGame"></div>
							<img src="<?=base_url('assets/'); ?>/images/games/mg_avalon2.jpg" alt="Avalon II">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'Avalon2',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Avalon II</span>
							</div>
						</div>
						
						<div class="slotbox">
							<div class="NewGame"></div>
							<img src="<?=base_url('assets/'); ?>/images/games/mg_darknight.jpg" alt="The Dark Knight Rises">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'TheDarkKnightRises',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">The Dark Knight Rises</span>
							</div>
						</div>
						
					</div>
				</div>
				<div class="main_mg_slot">
					<div id="bestslot" class="maingames clearfix">
						<h3><?= lang('pt_slot') ?> BEST<small><a class="pull-right" href="<?= site_url('slot_main?g_vender='.VENDER_PT)?>"><?= lang('view_all') ?></a></small></h3>
						
						<div class="slotbox">
							<img src="<?=base_url('assets/'); ?>/images/games/pt_gladiator.jpg" alt="Gladiator">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_PT,'glr',GAME_TYPE_SLOT,$session_id);?>" ><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Gladiator</span>
							</div>
						</div>
			    
						<div class="slotbox">
							<div class="NewGame"></div>
							<img src="<?=base_url('assets/'); ?>/images/games/nian-nian-you-yu.jpg" alt="Nian Nian You Yu">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_PT,'nian_k',GAME_TYPE_SLOT,$session_id);?>" ><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Nian Nian You Yu</span>
							</div>
						</div>
			    
						<div class="slotbox">
							<div class="NewGame"></div>
							<img src="<?=base_url('assets/'); ?>/images/games/fei-cui-gong-zhu.jpg" alt="Fei Cui Gong Zhu">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_PT,'fcgz',GAME_TYPE_SLOT,$session_id);?>" ><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Fei Cui Gong Zhu</span>
							</div>
						</div>
						
						<div class="slotbox">
							<img src="<?=base_url('assets/'); ?>/images/games/pt_avengers.jpg" alt="The Avengers">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_PT,'avng',GAME_TYPE_SLOT,$session_id);?>" ><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">The Avengers</span>
							</div>							
						</div>
						
						<div class="slotbox">
							<img src="<?=base_url('assets/'); ?>/images/games/pt_ironman3.jpg" alt="Iron Man 3">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_PT,'irmn3',GAME_TYPE_SLOT,$session_id);?>" ><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">Iron Man 3</span>
							</div>							
						</div>
			
					</div>
				</div>
			</div>
		</div>
		<!-- 전체게임 리스트 -->
		<!-- //전체게임 리스트 -->
		
		<!-- 하단 홍보영역 -->
	</div>
	<!-- //content -->
</div>
<!-- //container -->
<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
