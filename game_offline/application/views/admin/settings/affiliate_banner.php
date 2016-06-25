 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Manage Setting</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Setting</span></li>
								<li><span>Affiliate Banner</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Affiliate Banner</h2>
							</header>
							
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4">
									</div>
									<div class="col-md-4 col-md-offset-4">
											<div class="text-right"><a href="#"  id = "add_event"  data-url = "<?= site_url('admin/settings/form/game_banner/add');?>"  class="btn btn-primary event-action" role="button">Add  <i class="fa fa-plus"></i></a></div>
									</div>
								</div>
								
								<hr class="mt-md mb-md">
								
								<table style ="display:none" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th class="text-center hidden-xs hidden-sm">#</th>
										<th class="text-center hidden-xs hidden-sm">Banner Image</th>
										<th class="text-center hidden-xs hidden-sm">Banner name</th>	
										<th class="text-center hidden-xs hidden-sm">Banner Description</th>	
										<th class="text-center hidden-xs hidden-sm">Banner Info</th>
										<th class="text-center hidden-xs hidden-sm">Reg Date</th>
										<th class="text-center">Actions</th>
									</tr>
									</thead>
									<tbody>
								
										<tr>
											<td class="text-center hidden-xs hidden-sm">1</td>
											<td class="text-center hidden-xs hidden-sm">image</td>
											<td class="text-center hidden-xs hidden-sm"><strong>11111</strong></td>
											<td class="text-center hidden-xs hidden-sm">11111</td>
											<td class="text-center hidden-xs hidden-sm">11111</td>
											<td class="text-center hidden-xs hidden-sm">11111</td>
											<td class="text-center actions">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-info event-action" data-url = "<?= site_url();?>"> <i class="fa fa-pencil"></i> </button>
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger event-action" data-url = "<?= site_url();?>"><i class="fa fa-trash"></i> </button>
											</td>
										</tr>
								
									</tbody>
								</table>
							<div class="row">
                                <nav class="text-center">
                                
                                </nav>
                            </div>
                            
                            
							<!-- thumbnail start-->
							<div class="row">
<?php foreach($rows as $row):?>
                              <div class="col-sm-6 col-md-2">
                                <div class="thumbnail">
                                  <img data-src="holder.js/100%x200" alt="100%x200" src="<?= resource_url($row -> file_name,'affiliate_banners')?>" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                                  <div class="caption">
                                    <h4 id="thumbnail-label"><?= $row -> banner_title?><a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h4>
                                    <p> <?= $row -> banner_des?></p>
                                    <p> <?= $row -> image_width?> x <?= $row -> image_height?> | <?= strtoupper($row -> image_type)?></p>
                                       <p>
                                           <!-- <a href="#" onclick ="modifyBanner('<?=$row -> affiliate_banner_no?>')" class="btn btn-primary" role="button">Modify</a>  -->
                                           <a onclick ="deleteBanner('<?=$row -> affiliate_banner_no?>')" class="btn btn-primary" role="button">Delete</a> 
                                           <a onclick ="statusBanner('<?=$row -> affiliate_banner_no?>','<?= $row -> use_status == BANNER_USE_STATUS_ENABLE ? BANNER_USE_STATUS_DISABLE : BANNER_USE_STATUS_ENABLE?>')" 
                                               class="btn <?= $row -> use_status == BANNER_USE_STATUS_ENABLE ? 'btn-default' : 'btn-success'?>" role="button"><?= $row -> use_status == BANNER_USE_STATUS_ENABLE ? 'Disable' : "Enable"?></a></p>
                                  </div>
                                </div>
                              </div>
<?php endforeach;?>							    
                           </div>
							<!-- thumbnail end-->
								
							</div>
                               <script>
                               function modifyBanner(n){bannerAction('modify',n);}
                               function deleteBanner(n){bannerAction('delete',n);}
                               function statusBanner(n,s){bannerAction('status',n,s);}
                               function bannerAction(m,n,s){
                                   var url = "<?= site_url('admin/settings/banner_action')?>";
                                   var params;
                                   if (m =="modify"){
                                       param = {mode : m , req: n};
                                   }else if (m=='delete'){
                                       param = {mode : m , req: n};
                                   }else if(m == 'status'){
                                       param = {mode : m , req: n, status : s};
                                   }
                                   $.post(url,param, function(data){
                                        if (data.result == 'success'){
                                            // alert('successfully Your request have finished');
                                            location.reload();
                                        }else {
                                             alert(data.message);
                                        }
                                     },
                                    'json');
                                }
                                
                                $(document).ready(function() {
                                    $('.event-action').click(function() {
                                        if (~$(this).attr('data-url').indexOf('delete')){
                                            if (confirm('해당 이벤트가 삭제됩니다.\n진행하시겠습니까?') == true){
                                                location.href = $(this).attr('data-url'); 
                                            }else {
                                                return;
                                            }
                                        }else {
                                            openModal($(this).attr('data-url'));    
                                        }
                                        
                                    });
                                }); 
                          </script>
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>