 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
			<div class="inner-wrapper">
				<!-- start: sidebar -->
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
								<li><span>Slot Game List</span></li>
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
						
								<h2 class="panel-title">Game List</h2>
							</header>
							
							<div class="panel-body">
								<div class="row">
								
									   <div class="col-md-4">
											<div class="btn-group" role="group">
												<button onclick = "move_category(1,0);"  type="button" class="btn btn-warning">PT <span class="badge"><?=  $pt_game_count?></span></button>
												<button onclick = "move_category(2,0);" type="button" class="btn btn-info">MG <span class="badge"><?= $mg_game_count?></span></button>
											</div>
									   </div>
									   
									   <div class="col-md-4 col-md-offset-4">
											<div class="text-right">
											    <a href="#"  id = "add_excel"  data-url = "<?= site_url('admin/settings/form/excel/add');?>" class="btn btn-primary" role="button">Batch   <i class="fa fa-plus"></i></a>
											    <a href="#"  id = "add_game"  data-url = "<?= site_url('admin/settings/form/game/add');?>" class="btn btn-primary" role="button">Add  <i class="fa fa-plus"></i></a>
											</div>
									   </div>
								</div>
								<hr class="mt-md mb-md">
								<div class="row">
										<div class="col-md-9">
											<div class="btn-group" role="group" aria-label="...">
												<button onclick = "move_category(<?= $vender_no ?>,0);" type="button" class="btn btn-default">Featured </button>
<?php foreach($game_categorys as $game_category):?>											    
												<button onclick = "move_category(<?= $vender_no ?>, <?= $game_category-> game_category1_no ?>);" type="button" data-no = "<?= $game_category-> game_category1_no ?>" class="btn btn-default <?= $game_category-> game_category1_no == $select_cate? "active": ''?>"> <?= $game_category-> game_category1_name ?></button>
<?php endforeach;?>							
											 </div>
											 <h3 class="text-weight-semibold text-dark text-uppercase"> <?= $vender->vender_name?> / <?= $select_category-> game_category1_name ?> <small> Total <?= $game_count?></small></h3>
										 </div>					 
										<div class="col-md-3 pull-left">
										     <form action ="<?=site_url('admin/settings/game_search')?>" mmethod ="GET">
										    <div class="input-group">
                                                <input type="text" name = "search_keyword" id ="search_keyword" class="form-control" placeholder="Search for..." value = "">
                                                <span class="input-group-btn">
                                                    <button type = "submit" class="btn btn-primary" >
                                                        Find
                                                    </button> </span>
                                            </div><!-- /input-group -->
                                        </form>
										</div> 
								</div>
								

								<table class="table table-bordered table-striped table-condensed mb-none">
									<thead>
									<tr>
										<th>No</th>
										<th class="hidden-xs hidden-sm">Cate</th>
										<th>img url</th>						
										<th class="text-right">Category2,3<br>Sub cate</th>
										<th class="text-right hidden-xs hidden-sm">Game name<br>Game Name(zh)</th>
										<th class="text-right">Game code</th>
										<th class="text-right hidden-xs hidden-sm" width="60px">Count</th>
										<th class="text-right" width="70px">Check</th>
										<th class="text-right">Actions</th>
									</tr>
									</thead>
									<tbody>
<?php foreach($game_info_rows as $game_info):?>		
                                    <form id = "game_form_<?= $game_info[0] -> game_no?>" action = "<?= site_url('admin/settings/form/game/modify')?>" method = "POST" target="hiddenframe">		
                                        <input type = "hidden" name = "request_no" value = "<?= $game_info[0] -> game_no?>"?>					    
                                        <input id = "act_mode" type = "hidden" name = "act_mode"/>					    
                                        <input id = "vender_no" name ="vender_no" type = "hidden" value = "<?= $vender_no?>"/>					    
                                        <input id = "select_cate" name ="select_cate" type = "hidden" value = "<?= $select_cate?>"/>					    
									<tr>
									        <td class="text-right">
                                                <?= $game_info[0] -> game_no?>
                                            </td>
											<td class="hidden-xs hidden-sm">
												<select  class="form-control input-sm" name = "game_category1_no" id = "game_category1_no">
    <?php foreach($game_categorys as $game_category):?>
												  <option value = "<?= $game_category-> game_category1_no?>" <?= $game_category-> game_category1_no == $game_info[0]->game_category1_no ?'selected':'' ?>>
												      <?= $game_category-> game_category1_no?> - <?= $game_category -> game_category1_name?>
												  </option>
    <?php endforeach;?>												  
												</select>
											</td>
											<td><input  type="text" class="form-control input-sm" id="game_image1"  name = "game_image1" value="<?= $game_info[0] -> game_image1;?>">
											         <img  src="<?= $game_info[2]? asset_game_image($game_info[0]->vender_no,1,$game_info[0] -> game_image1): asset_game_image(NULL,NULL,'NoImage_200x150.gif');?>" style="height: 80px; ">
											         <img  src="<?= $game_info[3]? asset_game_image($game_info[0]->vender_no,2,$game_info[0] -> game_image2): asset_game_image(NULL,NULL,'NoImage_200x150.gif');?>"  style="width: 50px; ">
											</td>
											<td class="text-right">
											    <input  type="text" class="form-control input-sm" id="game_category2" name = "game_category2" value="<?= $game_info[0] -> game_category2?>">
											    <input  style = "margin-top:6px" type="text" class="form-control input-sm" name = "game_category3" id="game_category3" value="<?= $game_info[0] -> game_category3?>">
												<input  style = "margin-top:6px"  type="text" class="form-control input-sm" id="game_sub_category" name = "game_sub_category" value="<?= $game_info[0] -> game_sub_category?>">
											</td>
											<td class="text-right hidden-xs hidden-sm">
											    <input  type="text" class="form-control input-sm" id="game_name_en" name = "game_name_en" value = "<?= $game_info[0] -> game_name_en?>"/> 
											    <input  style = "margin-top:6px" type="text" class="form-control input-sm" id="game_name_zh" name = "game_name_zh" value = "<?= $game_info[0] -> game_name_zh?>" />
											</td>
											<td class="text-right has-error"><input  type="text" class="form-control input-sm" id="gmae_code" name = "game_code" value="<?= $game_info[0] -> game_code?>"></td>
											<td class="text-right hidden-xs hidden-sm"><input  type="text" class="form-control input-sm" id="count" name = "count" value="<?= $game_info[0] -> count ?>"></td>
											<td class="text-left">
												<input id="html5" value ="<?= HTML_SUPPORT_OK ?>" name = "html5" type="checkbox" <?= $game_info[0] -> html5 == HTML_SUPPORT_OK ? "checked":''?>  ><label for="checkbox1">html5</label><br>
												<input id="game_status"  value ="<?= NEW_GAME ?>" name = "game_status" type="checkbox" <?= $game_info[0] -> game_status == NEW_GAME  ? "checked":''?> ><label for="checkbox2">New</label><br>
												<input id="service_status" value ="<?= GAME_SERVICE_STATUS_ON?>"  name = "service_status" type="checkbox" <?= $game_info[0] -> service_status == GAME_SERVICE_STATUS_ON  ? "checked":''?> ><label for="checkbox3">On</label>
											</td>
											<td class="actions">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-info game_modify" data-no = "<?= $game_info[0] -> game_no?>"><i class="fa fa-pencil"></i></button>
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger game_delete" data-no =  "<?= $game_info[0] -> game_no?>"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										</form>
<?php endforeach;?>										
									</tbody>
								</table>
								
								  <div class="row">
                                     <nav class="text-center">
                                          <?= $paging -> getBoardPage()?>
                                    </nav>
                                 </div>
								

							</div>
											
							<!-- Modal -->
							
						  <!-- End Modal Code -->	
						<script>
						     function move_category(vender, category){
						         if (category == 0){
				    		         location.href = "<?=site_url('admin/settings/game_list')?>/"  + vender + '?sort=count' ;
						         }else {
				    		         location.href = "<?=site_url('admin/settings/game_list')?>/"  + vender + "/" + category;
						         }
						     }
                             $(document).ready(function() {
                                    $('#add_game').click(function() {
                                        openModal($(this).attr('data-url'));
                                    });
                                    
                                     $('#add_excel').click(function() {
                                        openModal($(this).attr('data-url'));
                                    });
                                    
                                    $('.game_delete').click(function(e) {
                                        e.preventDefault();
                                        if (confirm('해당 게임이 삭제 됩니다.\n진행하시겠습니까?')){
                                          var data_no = $(this).attr('data-no');
                                          location.href= "<?= site_url('admin/settings/form/game/delete')?>" + "/"+ data_no + "?ret_ven=<?=$vender_no?>"+ "&ret_cate=<?= $select_cate?>";
                                  
                                        }else {
                                            return;
                                        }
                                    });
                                    
                                    $('.game_modify').click(function(e) {
                                        
                                        e.preventDefault();
                                        if (confirm('입력된 정보로 해당 게임이 수정됩니다.\n진행하시겠습니까?')){
                                          var data_no = $(this).attr('data-no');
                                          var form = $('#game_form_'+ data_no);
                                          form.submit();
                                        }else {
                                            return;
                                        }
                                    });
                                }); 
                          </script>			
							
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->
		
<?php include_once APPPATH ."views/admin/template/footer.php"; ?>