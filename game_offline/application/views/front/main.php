<?php
include_once APPPATH . "views/front/template/top.php";
 ?>
<!-- container -->
<div id="container" class="main">
	<div id="promotion">
		<div class="spot">
			<div class="spot_inr">			
			
				<ul class="bxslider">
				  <li><div class="slider_img"><img src="<?=base_url('assets/'); ?>/images/slide/main_slide_03.jpg"></div></li>
				  <li><div class="slider_img"><img src="<?=base_url('assets/'); ?>/images/slide/main_slide_02.jpg"><a onclick ="<?=  generate_click_event(VENDER_MG,'MPPlayboy',GAME_TYPE_LIVE,$session_id);?>" class="button_black btnPlay"><?= lang('play_now') ?></a></div></li>
				</ul>			
			
			</div>


		</div>
	</div>

	<div id="live_launcher" class="jplist jplist-grid-view" style="margin-top:-4px;">
		<div class="live_main">
			
			
			<div class="slot-box" style="margin-left:25px;margin-right:40px">
        		<div onclick="<?=  generate_click_event(VENDER_MG,'MPBaccarat',GAME_TYPE_LIVE,$session_id);?>" class="list-item-hover">
        			<div class="img-hover" style="background-image:url(/assets/gameIMG/MGimages1/live_baccarat.png)"></div>
					    <p class="title">
        				라이브 바카라<br>
        				<i>Live Games</i>
        			</p>
        		</div>        
        		<div class="list-item" onclick="<?=  generate_click_event(VENDER_MG,'MPBaccarat',GAME_TYPE_LIVE,$session_id);?>">
        			 <div class="slot-featured"></div>
                     <div class="img" style="background-image:url(/assets/gameIMG/MGimages1/live_baccarat.png)"></div>
        			<div class="block right">
        				<p class="title">라이브 바카라 </p>
        				<p class="cate">Live Games</p>
        			</div>
        	   </div>
            </div>
            
            <div class="slot-box" style="margin-right:40px">
        		<div onclick="<?=  generate_click_event(VENDER_MG,'MPRoulette',GAME_TYPE_LIVE,$session_id);?>" class="list-item-hover">
        			<div class="img-hover" style="background-image:url(/assets/gameIMG/MGimages1/live_rlt_p.png)"></div>
					    <p class="title">
        				라이브 룰렛<br>
        				<i>Live Games</i>
        			</p>
        		</div>        
        		<div class="list-item" onclick="<?=  generate_click_event(VENDER_MG,'MPRoulette',GAME_TYPE_LIVE,$session_id);?>">
        			 <div class="slot-featured"></div>
                     <div class="img" style="background-image:url(/assets/gameIMG/MGimages1/live_rlt_p.png)"></div>
        			<div class="block right">
        				<p class="title">라이브 룰렛 </p>
        				<p class="cate">Live Games</p>
        			</div>
        	   </div>
            </div>
            
            <div class="slot-box" style="margin-right:40px">
        		<div onclick="<?=  generate_click_event(VENDER_MG,'MPBlackjack',GAME_TYPE_LIVE,$session_id);?>" class="list-item-hover">
        			<div class="img-hover" style="background-image:url(/assets/gameIMG/MGimages1/live_bj.png)"></div>
					    <p class="title">
        				라이브 블랙잭<br>
        				<i>Live Games</i>
        			</p>
        		</div>        
        		<div class="list-item" onclick="<?=  generate_click_event(VENDER_MG,'MPBlackjack',GAME_TYPE_LIVE,$session_id);?>">
        			 <div class="slot-featured"></div>
                     <div class="img" style="background-image:url(/assets/gameIMG/MGimages1/live_bj.png)"></div>
        			<div class="block right">
        				<p class="title">라이브 블랙잭 </p>
        				<p class="cate">Live Games</p>
        			</div>
        	   </div>
            </div>
            
            <div class="slot-box" style="margin-right:40px">
        		<div onclick="<?=  generate_click_event(VENDER_MG,'SPCasinoHoldem',GAME_TYPE_LIVE,$session_id);?>" class="list-item-hover">
        			<div class="img-hover" style="background-image:url(/assets/gameIMG/MGimages1/live_holdem.png)"></div>
					    <p class="title">
        				라이브 홀덤<br>
        				<i>Live Games</i>
        			</p>
        		</div>        
        		<div class="list-item" onclick="<?=  generate_click_event(VENDER_MG,'SPCasinoHoldem',GAME_TYPE_LIVE,$session_id);?>">
        			 <div class="slot-featured"></div>
                     <div class="img" style="background-image:url(/assets/gameIMG/MGimages1/live_holdem.png)"></div>
        			<div class="block right">
        				<p class="title">라이브 홀덤 </p>
        				<p class="cate">Live Games</p>
        			</div>
        	   </div>
            </div>
            
            <div class="slot-box">
        		<div onclick="<?=  generate_click_event(VENDER_MG,'MPPlayboy',GAME_TYPE_LIVE,$session_id);?>" class="list-item-hover">
        			<div class="img-hover" style="background-image:url(/assets/gameIMG/MGimages1/live_playboy.png)"></div>
					    <p class="title">
        				라이브 플레이보이<br>
        				<i>Live Games</i>
        			</p>
        		</div>        
        		<div class="list-item" onclick="<?=  generate_click_event(VENDER_MG,'MPPlayboy',GAME_TYPE_LIVE,$session_id);?>">
        			 <div class="slot-featured"></div>
                     <div class="img" style="background-image:url(/assets/gameIMG/MGimages1/live_playboy.png)"></div>
        			<div class="block right">
        				<p class="title">라이브 플레이보이</p>
        				<p class="cate">Live Games</p>
        			</div>
        	   </div>
            </div>



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
						<a class="button PopSignUp" href="<?= site_url('coupons') ?>">
						<?php else:?>
						<a class="button" onclick ="loginAlert()">
						<?php endif;?>
						    <i class="flaticon-finance-and-business4"></i><?= lang('coupons') ?>
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
							<div>모든 배팅액이 콤프포인트로 적립!!</div>
						</div>
					</a>
					
				</div>
				

				<!-- <div class="side_box_jackpot">
					<h2><?= lang('jackpots') ?></h2>

				</div> -->
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
								<span class="gameName">포사켄 킹덤</span>
							</div>
						</div>
						
						<div class="slotbox">
							<img src="<?=base_url('assets/'); ?>/images/games/mg_giantpanda.jpg" alt="Untamed Giant panda">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'UntamedGiantPanda',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">야생 자이언트 판다</span>
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
								<span class="gameName">이모탈 로맨스</span>
							</div>
						</div>
						
						<div class="slotbox">
							<div class="NewGame"></div>
							<img src="<?=base_url('assets/'); ?>/images/games/mg_avalon2.jpg" alt="Avalon II">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'Avalon2',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">아발론 II</span>
							</div>
						</div>
						
						<div class="slotbox">
							<div class="NewGame"></div>
							<img src="<?=base_url('assets/'); ?>/images/games/mg_darknight.jpg" alt="The Dark Knight Rises">
							<div class="overlay">
								<a  class="expand" onclick ="<?=  generate_click_event(VENDER_MG,'TheDarkKnightRises',GAME_TYPE_SLOT,$session_id);?>"><?= lang('play_now') ?></a>
							</div>
							<div class="gameInfo">
								<span class="gameName">다크나이트 라이즈</span>
							</div>
						</div>
						
					</div>
				</div>
				<!-- <div class="main_mg_slot">
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
				</div> -->
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
