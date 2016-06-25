<?php
include_once APPPATH . "views/front/template/m_top.php";
 ?>
<!-- container -->
                <div class="portfolio-one" style="margin-top:-30px ">
                    <div class="portfolio-item container">
                        <a onclick ="<?=  generate_click_event(VENDER_MG,'MPBaccarat',GAME_TYPE_LIVE,$session_id);?>" class="show-gallery">
                            <img src="<?=base_url('assets/');?>/m_images/live_luncher.jpg" alt="img" class="responsive-image image-fullscreen">
                        </a>
                    </div>
                  </div>
                  
                <div class="page-profile-followers" style="margin-top:-45px ">
                    <!-- <a href="#">
                        <i class="fa fa-user"></i>
                        <?= $user -> user_id?> 님
                    </a> -->
                    <a href="<?= site_url('comp') ?>">
                        <i class="fa fa-gift"></i>
                        	콤프 포인트<br><b><?= number_format($user -> comp_point,0)?></b> P
                    </a>
                    <a href="<?= site_url('e_wallet') ?>">
                        <i class="fa fa-rocket"></i>
                        	MG게임칩 <br> <span id ="mg_casino_balance"><b><?= number_format($user -> mg_casino_balance,0)?></b></span>원
                    </a>
                </div>
                
                <div class="container heading-style-5">
                    <h4 class="heading-title">MG Slot 모바일</h4>
                    <i class="fa fa-rocket heading-icon"></i>
                    <div class="line bg-black"></div> 
                    <p class="heading-subtitle">
                        	인기 모바일 슬롯 리스트  <a href="<?= site_url('m_slot_main')?>"><i class="fa fa-arrow-right"></i> 전체리스트</a>
                    </p>
                </div> 
                
                <div class="gallery square-thumbs">
                    <a onclick ="<?=  generate_click_event(VENDER_MG,'thunderstruckII',GAME_TYPE_SLOT,$session_id);?>"><img src="<?=base_url('assets/'); ?>/m_images/slot/thunderstruck_ii_logo-160x107.jpg" alt="img"></a>                    
                    <a onclick ="<?=  generate_click_event(VENDER_MG,'avalon',GAME_TYPE_SLOT,$session_id);?>"><img src="<?=base_url('assets/'); ?>/m_images/slot/avalon-160x107.jpg" alt="img"></a>                    
                    <a onclick ="<?=  generate_click_event(VENDER_MG,'breakaway',GAME_TYPE_SLOT,$session_id);?>"><img src="<?=base_url('assets/'); ?>/m_images/slot/break_away_logo-160x107.jpg" alt="img"></a>  
                    <a onclick ="<?=  generate_click_event(VENDER_MG,'alaskanFishing',GAME_TYPE_SLOT,$session_id);?>"><img src="<?=base_url('assets/'); ?>/m_images/slot/alaskan_fishing-160x107.jpg" alt="img"></a>  
                    <a onclick ="<?=  generate_click_event(VENDER_MG,'footballStar',GAME_TYPE_SLOT,$session_id);?>"><img src="<?=base_url('assets/'); ?>/m_images/slot/football_star_slot_logo-160x107.jpg" alt="img"></a> 
                    <a onclick ="<?=  generate_click_event(VENDER_MG,'fishparty',GAME_TYPE_SLOT,$session_id);?>"><img src="<?=base_url('assets/'); ?>/m_images/slot/fish_party_slot_logo-160x107.jpg" alt="img"></a> 
                </div>
<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>
