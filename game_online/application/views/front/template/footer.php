    	<!-- footer -->
    	<div id="footer">
    		<div class="footer_inr">
    			<div class="footer_cs">
    				<h4><?= lang('need_help') ?>? <span class="small"><?= lang('call_us') ?> 24/7:</span></h4>
    				<ul class="menu-icon">
    					<li>
    						<span class="icon flaticon-phone403"></span><span class="numcs"><?= $customer_service -> call_center_num1 ?> / <?= $customer_service -> call_center_num2 ?></span>
    					</li>
    					<li>
    						<span class="icon flaticon-qq3"></span><?= lang('qq') ?> : <b><?= $customer_service -> qq_customer_service1 ?></b>
    					</li>
    					<li>
    						<span class="icon flaticon-skype12"></span><?= lang('skype') ?> : <b><?= $customer_service -> skype_id ?></b>
    					</li>
    					<!--<li>
    						<span class="icon flaticon-speech117"></span><a href="#"><?= lang('live_chat') ?></a>
    					</li>-->
    				</ul>
    			</div>
    			<div class="copy_menu footer_sub">
    				<ul>
    					<li>
    						<a href="<?= site_url('about_us') ?>"><?= lang('about_us') ?></a>
    					</li>
    					<li>
    						<a href="<?= site_url('help') ?>"><?= lang('help') ?></a>
    					</li>
    					<li>
    						<a href="<?=site_url('brand')?>" target="_blank"><?= lang('affiliate_program') ?></a>
    					</li>
    					<li>
    						<a href="<?= site_url('contact_us') ?>"><?= lang('contact_us') ?></a>
    					</li>
    				</ul>
    				<div class="logo"><img src="<?=base_url('assets/'); ?>/images/footer_logo.png">
    				</div>
    				<div class="brand"><img src="<?=base_url('assets/'); ?>/images/microgaming.png" style="margin-right:15px"><img src="<?=base_url('assets/'); ?>/images/playtech.png" style="margin-top:3px">
    				</div>
    			</div>
    		</div>
    		<div id="footer_copy">
    			<div class="copy_area">
    				<div class="copyright">
    					<?= lang('copyright') ?>
    				</div>
    				<div class="copy_menu">
    					<ul>
    						<li>
    							<a href="<?= site_url('terms_of_service') ?>"><?= lang('terms_of_service') ?></a>
    						</li>
    						<li>
    							<a href="<?= site_url('privacy_policy') ?>"><?= lang('privacy_policy') ?></a>
    						</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- //footer -->
        </div>
        <a href="#" class="scrollToTop"></a>
        <!-- 폼 전송을 위한 히든 프레임-->
         <iframe name="hiddenframe"  style="width: 0px; height: 0px; position: absolute; top: -1000px; left: -1000px;"></iframe>
       <!-- Piwik -->
        <script type="text/javascript">
          var _paq = _paq || [];
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u="//52.69.120.84/piwik/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 1]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
          })();
        </script>
        <noscript><p><img src="//52.69.120.84/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
    </body>
</html>
