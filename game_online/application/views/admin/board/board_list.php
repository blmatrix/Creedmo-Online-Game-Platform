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
                                <li><span>Board [<?= $cur_board_category?>]</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
                    <!-- start: page -->
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <!-- <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a> -->
                                </div>
                        
                                <h2 class="panel-title">Board - <?= $cur_board_category?></h2>
                            </header>
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4 col-md-offset-4">
                                            <div class="text-right"><a id = "add_user_board"  data-url = "<?= site_url('admin/boards/write');?>/<?= $board_category?>"  class="btn btn-primary" role="button">Add  <i class="fa fa-plus"></i></a></div>
                                    </div>
                                </div>
                                </br>
                                
                                <!-- start board write form -->
                                <!-- end board write form -->
                                
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                    <tr class ="info">
                                        <th class ="text-center">#</th>
                                        <th class ="text-center">Category </th>   
                                        <th class ="text-center">Title </th>   
                                        <th class ="text-center">Display</th>   
                                        <th class ="text-center">Writer</th>   
                                        <th class ="text-center hidden-xs hidden-sm">reg date</th>
                                        <th class ="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php foreach($boards as $item):?>                                 
                                        <tr id ="board_title_<?= $item -> board_no?>" class ="board_title_tr" data-no = "<?= $item -> board_no?>">
                                            <td class ="text-center"><?= $item -> board_no?></td>
                                            <td class ="text-center"><?= $item -> board_category_name?></td>
                                            <td class ="text-center"><strong><?= $item -> board_title_en?></strong></td>
                                            <td class ="text-center">
                                                <strong>
                                                   <?php if ($item -> displayable == 'Y'):?>
                                                       <span class="label label-success">
                                                   <?php else:?>  
                                                       <span class="label label-default">   
                                                   <?php endif;?>     
                                                    <?= $item -> displayable == 'Y' ? 'YES':'NO'?>
                                                    </span>
                                                </strong>
                                            </td>
                                            <td class ="text-center"><strong><?= $item -> board_writer?> </strong></td>
                                            <td class="text-center hidden-xs hidden-sm"><?= time_to_string($item -> reg_date)?></td>
                                            <td class="text-center actions">
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-info board-action" data-url = "<?= site_url('admin/boards/modify/'.$item->board_no);?>"> <i class="fa fa-pencil"></i> </button>
                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger board-action" data-url = "<?= site_url('admin/boards/delete/'.$item->board_no);?>"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr  > 
                                            <td height ="100px" class ="board_content_td" id ="board_content_<?= $item -> board_no?>" style = "display:none;padding : 20px" colspan="8"> <?= $item -> board_content_en?></td>    
                                        </tr>
<?php endforeach;?>                                     
                                    </tbody>
                                
                            </div>
                            
                               <script>
                                $(document).ready(function() {
                                    $(".board_title_tr").click(function(){
                                       var board_no = $(this).attr('data-no');
                                       var target_id  = "#board_content_" + board_no;
                                       $(".board_content_td").slideUp('fast');
                                       $(".board_content_td").removeClass('success');
                                       $(target_id).addClass('success');
                                       $(target_id).slideDown('fast');
                                    });
                                    
                                    $('#add_user_board').click(function(){
                                        openModal($(this).attr('data-url'));    
                                    });
                                    
                                    $('.board-action').click(function(e) {
                                        e.stopPropagation();
                                        if (~$(this).attr('data-url').indexOf('delete')){
                                            if (confirm('해당 이벤트가 삭제됩니다.\n진행하시겠습니까?') == true){
                                                $.post($(this).attr('data-url'),{},function(data){
                                                    if (data.errorCode == '0'){
                                                        location.reload(true);
                                                    }
                                                },'json');
                                                
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