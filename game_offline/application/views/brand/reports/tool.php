<?php
include_once APPPATH . "views/brand/template/top.php";
?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/brand/template/side_bar.php";
	?>
	<section role="main" class="content-body">
		<header class="page-header">
                        <h2>Marketing Tools</h2>
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="<?= site_url('brand'); ?>">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Marketing Tools</span></li>
                            </ol>
                            <a class="sidebar-right-toggle"  href="<?= site_url('brand'); ?>"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
               <h2 class="panel-title">Marketing Tools</h2>
           </header>
			<div class="panel-body">
				<?php if ($login_status):?>
				<div class="alert alert-dark">
					<strong><i class="fa fa-star"></i> Direct Your URL :</strong> <a href="http://gobigchina.net/?a_code=<?= $user -> affiliate_code?>" target="_blank"class="urlcode alert-link text-danger">http://www.gobigchina.net/?a_code=<?= $user -> affiliate_code?></a>
				</div>
			    <?php endif;?>
				
				<div class="alert alert-info nomargin">
					<h4>Choose the banners</h4>
					<p>- To select the most appropriate banners</p>
				</div>
<script>				
  /* Show Hide */
jQuery(function(){
        jQuery('.showCode').click(function(){
              jQuery('.HTMLdiv').hide();
              jQuery('#codeBox'+$(this).attr('target')).show();
        });
});
</script>
<?php
    $i=0; 
    foreach($banners as $row):
?>
				<div class="banner_list">
						<div class="result-thumb">
							<a href="http://gobigchina.net/?p_code=BF898" target="_blank"><img src="<?= resource_url($row -> file_name,'affiliate_banners')?>"></a>
						</div>
						<div class="result-data">
							<p class="h3 title text-primary"><button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary showCode" target="<?= $i?>">HTML Source</button> <?= $row -> image_width?> x <?= $row -> image_height?> | <?= strtoupper($row -> image_type)?></p>
							<p class="description">
								<div id="codeBox<?=$i?>" class="HTMLdiv">
								<textarea name="HTMLsource" id="HTMLsource" rows="2"><a href="http://gobigchina.net/?a_code=<?=$user -> affiliate_code?>" target="_blank"><img alt="Baofa 爆财网" src="<?= resource_url($row -> file_name,'affiliate_banners')?>"></a></textarea>
								</div>
							</p>
						</div>
				</div>
<?php
    $i++; 
    endforeach;
?>				
			</div><!-- end: panel-body -->

		</section><!-- end: panel -->
		<!-- end: page -->
	</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->

		
<?php
include_once APPPATH . "views/brand/template/footer.php";
?>