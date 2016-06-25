<?php
include_once APPPATH . "views/front/template/m_top.php";
?>
                <div class="container no-bottom">
                    <div class="sidebar-left-small">
                        <img class="level-img" src="<?=base_url('assets/'); ?>/images/level_<?= strtolower($cur_user_level -> user_level_code_name )?>.png">
                        <br>
                        <h4 class="no-bottom"><?= $user -> user_id?>님 </h4>
                        <p><b><?= lang(strtolower($cur_user_level -> user_level_code_name)) ?></b> 레벨입니다.</p>
                        <div class="decoration"></div>
                        <ul class="font-icon-list">
                            <li><a href="#"><i class="fa fa-trophy"></i>콤프 포인트 : <b><?= number_format($user -> comp_point,0)?></b> P</a></li>
                            <!-- <li><a href="#"><i class="fa fa-money"></i>전자지갑 : <b><?= number_format($user -> wallet_balance,2)?></b>원</a></li> -->
                            <li><a href="#"><i class="fa fa-rocket"></i>게임 칩 : <span id ="mg_casino_balance"><b><?= number_format($user -> mg_casino_balance,2)?></b></span>원</a></li>
                        </ul>
                    </div>
                    <div class="decoration"></div>

				

                    <h5 class="blue">현금전환 가능한</h5>
					<h6 class="blue"><?= lang('comp_point') ?> :<span class="red"> <?= number_format($user -> comp_point,0)?> P</span></h6>

                    <div class="one-half-responsive last-column">
                        <div class="or-buttons-style-2">
                            <a href="<?= site_url('comp/convert_comp')?>" class="button button-blue button-round">콤프 현금 전환</a>
                        </div>
                    </div>
					
				</div>        
				            
				<h6>모든 배팅액이 콤프 포인트로 적립 됩니다. 이기든 지든!!</h6>
				<p>- 콤프포인트는 배팅액 100원당 1점이 적립됩니다.</p> 
                <p>- 각 게임타입별 적립률 - 슬롯 100:1 / 논슬롯 110:1 / 라이브 100:1 </p> 
				<p><b>적립된 콤프 포인트는 유저 레벨에 따라 현금 전환율이 차등지급 됩니다. 자세한 내용은 VIP CLUB에서 확인해 주세요.</b><br><br>
				예) 슬롯과 라이브 게임 배팅 총 합이 100만원일경우 콤프 포인트는 10만원이 되고 현금 전환은 1천원이 됩니다.</p>


	
                

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
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>