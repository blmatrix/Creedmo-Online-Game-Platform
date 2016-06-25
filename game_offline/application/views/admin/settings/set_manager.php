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
								<li><span>Set Manager</span></li>
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
						
								<h2 class="panel-title">Set Manager ( <?= $admin_count?> ) </h2>
							</header>
							
							<div class="panel-body">

								<div class="row">
									<div class="col-md-4">
									</div>
									<div class="col-md-4 col-md-offset-4">
											<div class="text-right"><a href="#"  id = "add_manager"  data-url = "<?= site_url('admin/settings/form/manager/add');?>" class="btn btn-primary manager-action" role="button">Add  Manager <i class="fa fa-plus"></i></a></div>
									</div>
								</div>
								
								<hr class="mt-md mb-md">
								
								<table class="table table-bordered table-striped table-condensed mb-none">
									<thead>
									<tr>
										<th>Level</th>
										<th>ID</th>						
										<th>Name</th>						
										<th class="text-right hidden-xs hidden-sm">Reg Date</th>
										<th>State</th>
										<th class="text-right">Actions</th>
									</tr>
									</thead>
									<tbody>
<?php for($i = 0; $i < count($admin_list);$i++):
 $admin = $admin_list[$i]['admin'];   
 $admin_level = $admin_list[$i]['admin_level'];   
?>									    
										<tr>
											<td><?= $admin_level -> admin_level_code_name;?> (<?= $admin_level -> admin_level_code;?>)</td>
											<td class="text-left">
											    <span <?= $admin->login_status == 'Y' ? 'class="label label-success"':'class="label label-default"' ?> >On</span> <strong><?= $admin -> admin_id ?> <!-- (<?= $admin -> admin_name ?>--></strong></td>
											<td class="text-left"><?= $admin->admin_name?></td>
											<td class="text-right hidden-xs hidden-sm"><?= time_to_string($admin->reg_date)?></td>
											<td><span class="label label-default"><i class="fa fa-unlock"></i></span></td>
											<td class="text-right">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-info manager-action" data-url = "<?= site_url('admin/settings/form/manager/modify/'.$admin->admin_no);?>"> <i class="fa fa-pencil"></i> </button>
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger manager-action" data-url = "<?= site_url('admin/settings/form/manager/delete/'.$admin-> admin_no);?>"><i class="fa fa-trash"></i> </button>
											</td>
										</tr>
<?php endfor;?>										
									</tbody>
								</table>
								
								 <div class="row">
                                  <nav class="text-center">
                                      <?= $paging -> getBoardPage()?>
                                 </nav>
                                </div>
							
							</div>
							<script>
                                $(document).ready(function() {
                                    $('.manager-action').click(function() {
                                        if (~$(this).attr('data-url').indexOf('delete')){
                                            if (confirm('해당 관리자가 삭제됩니다.\n진행하시겠습니까?') == true){
                                                location.href = $(this).attr('data-url');
                                            }
                                        }else {
                                            openModal($(this).attr('data-url'));    
                                        }
                                         
                                    });
                                }); 
                          </script>
							<!-- Modal -->

						  <!-- End Modal Code -->
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>