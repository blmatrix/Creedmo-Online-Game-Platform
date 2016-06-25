<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="main">
        <div id="Sub_title_inr">
            <div class="container_inr">
                <div class="Sub_title"><h1><?= lang('member') ?> <span><?= lang('coupons') ?></span></h1></div>
            </div>
        </div>
        <!-- content -->
        <div id="content">
        
            <div class="content_main_section">
                <!-- Column 250px -->
<?php
include_once APPPATH . "views/front/template/side.php";
?>
                <!-- Column 750px -->
                <div class="column750px Mainform-container">

                    <div id="member_container">
                        
                        <ul class="MemberTabs">
                            <li class="MemberTabs-link current" data-tab="tab-1"><?= lang('coupons') ?></li>
                            <li class="MemberTabs-link" data-tab="tab-2"><?= lang('history') ?></li>
                        </ul>
                        <hr class="style-1">
                        <div id="tab-1" class="MemberTabs-content current">
                            <h4>Your Coupon List</h4>
                            <p class="info">- 고객님께 발급된 쿠폰 리스트 입니다. Apply Coupon 하시면 e-Wallet으로 적립 됩니다.</p>
								<div class="box">
									<div class="table-responsive" id ="coupon_list">       
									   <!-- 쿠폰 발금 내역 컨테이너-->
									</div>
								</div>

<script>
    function changeCouponStatus(cn,cs){
        var url = "<?= site_url('coupons/change_coupon_status')?>";
        var param = {target_status : cs, coupon: cn};
        $.post(url,param, function(data){
            if (data.result == 'success'){
                alert('successfully Your request have finished');
                location.reload();
            }else {
                 alert(data.message);
            }
         },
        'json');
    }
</script>                              
                        </div>
                        <!-- //tab-1 -->
                        <div id="tab-2" class="MemberTabs-content"> 
                        
                            <h4>Coupon History</h4>
                             <p class="info"> - 사용하신 쿠폰 리스트입니다.</p>
								<div class="box">
									<div class="table-responsive" id ="used_coupon_list">
                                        <!-- 사용된 쿠폰 내역 컨데이너 -->   
									</div>
								</div>

                        </div>
                        <!-- //tab-2 -->
                            
                    </div>
                    <!-- //member_container -->
                
                </div>
            </div>

            
        </div>
        <!-- //content -->
    </div>
    <!-- //container -->
  <script >
        function loadAjaxPage(board_type,page){
            $('#' + board_type).load(
                "<?=site_url('ba_contents/list_contents')?>/"+ board_type + '/' + page
            ); 
        }
        $(document).ready(function(){
           loadAjaxPage('coupon_list','1');
           loadAjaxPage('used_coupon_list','1');
        });
    </script>
<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
