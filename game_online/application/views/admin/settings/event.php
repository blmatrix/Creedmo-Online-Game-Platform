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
								<li><span>Event</span></li>
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
						
								<h2 class="panel-title">Event</h2>
							</header>
							
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4">
									</div>
									<div class="col-md-4 col-md-offset-4">
											<div class="text-right"><a href="#"  id = "add_event"  data-url = "<?= site_url('admin/settings/form/event/add');?>"  class="btn btn-primary event-action" role="button">Add  <i class="fa fa-plus"></i></a></div>
									</div>
								</div>
								
								<hr class="mt-md mb-md">
								
								<table class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>#</th>
										<th>Img</th>
										<th>Title / Contents</th>	
										<th class="text-right hidden-xs hidden-sm">Start Date</th>
										<th class="text-right hidden-xs hidden-sm">Reg Date</th>
										<th class="text-right">Status</th>
										<th class="text-right">Actions</th>
									</tr>
									</thead>
									<tbody>
<?php foreach($events as $event):?>									
										<tr>
											<td><?= $event -> event_no?></td>
											<td><img src="<?= resource_url($event -> event_file_name, 'event')?>" height="60px"></td>
											<td><strong><?= $event -> event_title?></strong><br><?= $event -> event_content?></td>
											<td class="text-right hidden-xs hidden-sm"><?= time_to_string($event -> start_date)?></td>
											<td class="text-right hidden-xs hidden-sm"><?= time_to_string($event -> reg_date)?></td>
											<td class="text-right text-success"><strong><?= $event -> event_status_string?></strong></td>
											<td class="text-right actions">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-info event-action" data-url = "<?= site_url('admin/settings/form/event/modify/'.$event->event_no);?>"> <i class="fa fa-pencil"></i> </button>
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger event-action" data-url = "<?= site_url('admin/settings/form/event/delete/'.$event->event_no);?>"><i class="fa fa-trash"></i> </button>
											</td>
										</tr>
<?php endforeach;?>										
									</tbody>
								</table>
							<div class="row">
                                <nav class="text-center">
                                   <?=  $paging -> getBoardPage();?>
                                </nav>
                            </div>
								
							</div>
							
                               <script>
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