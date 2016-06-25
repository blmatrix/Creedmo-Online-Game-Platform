<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="main">
        <div id="Sub_title_inr">
            <div class="container_inr">
                <div class="Sub_title"><h1><?= lang('privacy_policy') ?> <span></span></h1></div>
            </div>
        </div>
        <!-- content -->
        <div id="content">
        
            <div class="content_main_section">
                <!-- Column 250px -->
<?php
include_once APPPATH . "views/front/template/about_side.php";
?>
                <!-- Column 750px -->
                <div class="column750px Mainform-container">

					<div id="member_container">
					
						<section>
							<div class="row help_container terms">
								<h1><?= lang('privacy_policy') ?></h1>
								
								<?= lang('privacy_policy_contents')?>
								
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
