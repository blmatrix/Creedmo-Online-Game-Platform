<!--  MG LIve List Template-->
    <?php foreach($mg_lives as $item):?>
            <div class="slot-box ptslot">
                <div  onclick ="<?= generate_click_event($item-> vender_no,$item -> game_code, $game_type,$session_id,0)?>" class="list-item-hover ptslot" style="background:url(<?=asset_game_image($item ->vender_no, '2', $item->game_image2)?>) center 0 no-repeat #0f0f0f">
                    <?php if ($item -> game_status == NEW_GAME):?>
                    <div class="slot-new"></div>
                    <?php endif;?>
                    <p class="title">
                        <?= $item -> game_name_en?>
                        <br>
                        <i><?= $item -> game_category3?></i>
                    </p>
                </div>
                <div class="list-item ptslot" onclick ="<?= generate_click_event($item-> vender_no,$item -> game_code, $game_type,$session_id,0)?>">
                    <?php if ($item -> game_status == NEW_GAME):?>
                    <div class="slot-new"></div>
                    <?php endif;?>
                    <?php if($item-> html5 == "1"):?>
                    <div class='slot-mobile'>
                        <i class='flaticon-iphone26'></i>
                    </div>
                    <?php endif;?>
                    <div class='img ptslot' style="background-image:url(<?=asset_game_image($item -> vender_no, '2', $item->game_image2) ?>)"></div>
                    <div class="block right">
                        <p class="title">
                               <?= $item -> game_name_en?>
                        </p>
                        <p class="cate">
                            <?= $item -> game_category3?>
                        </p>
                    </div>
				</div>
			</div>
    <?php endforeach;?> 
