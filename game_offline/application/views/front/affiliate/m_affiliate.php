<?php
include_once APPPATH . "views/front/template/m_top.php";
?>

				<div class="container heading-style-5">
                    <h4 class="heading-title">추천인</h4>
                    <i class="fa fa-magnet heading-icon"></i>
                    <div class="line bg-black"></div>
                </div>
                
                <div class="container no-bottom">
                	

					<p>친구분들께 아래 파트너 Code를 알려주세요.</p>
					<h3><?= lang('affiliate') ?> CODE : <span class="button-green button-round" style="padding:5px"><?= $user -> affiliate_code?></span></h3>
					
					<div class="decoration"></div>
					
					<p class="info">소개받은 회원은 물론 그 회원이 소개한 회원까지 정산됩니다.</p>
                    <div class="one-half-responsive last-column">
                        <div class="or-buttons-style-2">
                            <a href="<?=site_url('brand')?>" target="_blank" class="button button-blue button-round">파트너 정산내역</a>
                        </div>
                    </div>
					
					<br>
                    <h4>맥스라이브는 추천인 코드가 없으면 가입이 되지 않습니다.</h4>
                    <p class="info">- 소개받는 분에게 회원님의 추천인 코드를 알려주세요.</p>
                    <p class="info">- 온라인을 통한 홍보 또는 무작위 다수를 향한 홍보는 어떠한 경우에도 허가되지 않습니다. <br>발견즉시 회원님의 계정과 코드가 회수 됨을 유념해 주시기 바랍니다.</p>


            	</div>




<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>
