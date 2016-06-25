<?php if($vender == VENDER_MG):?>
<!--  MG List Template-->
    <?php 
        foreach($items as $item):
            if ($sel_cate =='featured'):
                if ($item -> game_category1_no == (int)GAME_CATEGORY_LIVE):
                    $game_type = GAME_TYPE_LIVE;
                endif;
            endif;
    ?>

        	<div class="slot-box">
        		<div  onclick ="<?= generate_click_event($vender,$item -> game_code, ($item -> game_category1_no == '6' ? 'live':'slot'),$session_id)?>" class='list-item-hover' >
        			<div class='img-hover' style='background-image:url(<?=asset_game_image($item -> vender_no, '1', $item->game_image1) ?>)'></div>
					<?php if ($item -> game_category1_no == "2"):?>
                     <div class='slot-jackpot'></div>
					 <div class='slot-jackpot-icon'></div>
                    <?php endif;?> 
					<?php if ($item -> game_status == NEW_GAME):?>
        			<div class='slot-new'></div>
        			<?php endif;?>
        			<p class='title'>
        				<?= $item -> game_name_en?>
        				<br>
        				<i><?= $item -> game_category3?></i>
        			</p>
        		</div>
        
        		<div class='list-item' onclick ="<?= generate_click_event($vender,$item -> game_code, ($item -> game_category1_no == '6' ? 'live':'slot'),$session_id)?>">
        			<?php if ($sel_cate =="featured" || $item -> reserved1 == "Y"):?>
                     <div class='slot-featured'></div>
                    <?php endif;?>
					<?php if ($item -> game_category1_no == "2"):?>
					 <div class='slot-jackpot'></div>
					 <div class='slot-jackpot-icon'></div>
                    <?php endif;?>
        			<?php if ($item -> game_status == NEW_GAME):?>
                    <div class='slot-new'></div>
                    <?php endif;?>
        			<?php if($item-> html5 == "1"):?>
        			<div class='slot-mobile'>
        				<i class='flaticon-iphone26'></i>
        			</div>
        			<?php endif;?>
        			<div class='img' style='background-image:url(<?=asset_game_image($item -> vender_no, '1', $item->game_image1) ?>)'></div>
        			<div class='block right'>
        				<p class='title'><?= $item -> game_name_en?>  </p>
        				<p class='cate'><?= $item -> game_category3?></p>
        			</div>
					<div class='list-txt'>
        				<p class='cate'><?= $item -> game_sub_category?>  </p>
        			</div>
        	   </div>
            </div>

    <?php endforeach;?>        
<?php else:?>

<!--  PT List Template-->
 <?php foreach($items as $item):?>

        <div class="slot-box ptslot">
           <div  onclick ="<?= generate_click_event($vender,$item -> game_code, ($item -> game_category1_no == '6' ? 'live':'slot'),$session_id)?>" class='list-item-hover ptslot' style='background:url(<?=asset_game_image($item -> vender_no , '1' , $item -> game_image1)?>) center 0 no-repeat #0f0f0f'>
            <?php if ($item -> game_category1_no == "2"):?>
					 <div class='slot-jackpot-icon'></div>
            <?php endif;?> 
			<?php if ($item -> game_status == NEW_GAME):?>
             <div class='slot-new'></div>
             <?php endif;?>
             <p class='title'>  <?= $item -> game_name_en?> <br><i><?= $item -> game_category3?></i></p>
           </div>
           
           <div class='list-item ptslot' onclick ="<?= generate_click_event($vender,$item -> game_code, ($item -> game_category1_no == '6' ? 'live':'slot'),$session_id)?>">
               <?php if ($sel_cate =="featured" || $item -> reserved1 == "Y"):?>
               <div class='slot-featured'></div>
               <?php endif;?>
               <?php if ($item -> game_category1_no == "2"):?>
					 <div class='slot-jackpot-icon'></div>
			   <?php endif;?> 
			   <?php if ($item -> game_status == NEW_GAME):?>
               <div class='slot-new'></div>
               <?php endif;?>
               <?php if($item-> html5 == "1"):?>
               <div class='slot-mobile'>
                   <i class='flaticon-iphone26'></i>
               </div>
               <?php endif;?>
               <div class='img ptslot' style='background-image:url(<?=asset_game_image($item -> vender_no , '1' , $item -> game_image1)?>) '></div>
               <div class='block right'>
                    <p class='title'>   <?= $item -> game_name_en?></p>
                    <p class='cate'><?= $item -> game_category3?></p>
               </div>
			   <div class='list-txt'>
        				<p class='cate'><?= $item -> game_sub_category?>  </p>
        			</div>
           </div>
      </div>

    <?php endforeach;?>  
<?php endif;?>
