<?php
include_once APPPATH . "views/front/template/m_top.php";
?>
<div class="container heading-style-5">
    <h4 class="heading-title"><?= $heading?></h4>
    <h6 class="heading-title"><?= $message?></h4>
    <?php if ($vender == VENDER_MG):?>
    <i class="fa fa-camera-retro heading-icon"></i>
    <div class="line bg-black"></div>
    <?php endif;?>
</div> 

<?php if (count($games)> 0):?>
<div class="portfolio-filter">
    <div class="portfolio-filter-categories">
        <a href="#" class="filter-category selected-filter" data-rel="all-cat">All</a>
        <a href="#" class="filter-category" data-rel="slot">Slot</a>
        <a href="#" class="filter-category" data-rel="jackpot">Jackpots</a>
        <a href="#" class="filter-category" data-rel="other">Other</a>
    </div>
    <div class="clear"></div>
    <div class="portfolio-filter-wrapper">
        <?php if (count($games) > 0):?>
            <?php foreach($games as $game):?>
                  <div class="<?= $game -> class?> all-cat portfolio-filter-item">
                    <a class="show-gallery-1" onclick ="<?= generate_click_event($game -> vender_no,$game -> m_game_code, ($game -> game_category1_no == '6' ? 'live':'slot'),$session_id)?>">
                        <img src="<?=asset_game_image($game -> vender_no, '1', $game->game_image1)?>" class="responsive-image-small" alt="img">
                        <div class="slot-featured"></div>
                        <p><b><?= $game -> game_name_en?></b></p>
                        <p class='cate_sm'><?= $game -> game_category3?></p>
                    </a>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div> <!-- END portfolio-filter-wrapper -->      
     
</div><!-- END portfolio-filter-->
<?php endif;?>


<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>