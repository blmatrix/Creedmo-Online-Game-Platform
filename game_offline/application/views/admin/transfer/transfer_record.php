 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Money Transfer Record</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Money Transfer</span></li>
                                <li><span>Money Transfer List</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                    
                        <section class="panel">
                            <header class="panel-heading">

                        
                                <h2 class="panel-title">Tranfer Record List</h2>
                            </header>
                            
                            <div class="panel-body">
                                <div class="well well-sm">
                                    <form class="form-inline" id = "d_serarch_form" name = "d_search_form" method ="GET">
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="input-group">
                                                  <input type="text" name = "search_keyword" id ="search_keyword" class="form-control" value = "<?= $search_keyword?>" placeholder="Search for...">
                                                  <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit">Find</button>
                                                  </span>
                                                </div><!-- /input-group -->
                                              
                                                <div class="visible-sm clearfix mt-sm mb-sm"></div>
                                                <select id="transfer_type" name ="transfer_type" class="form-control">
                                                  <option value ="">Total</option>
                                                  <option value ="<?=MONEY_TRANSFER_TYPE_MG_TO_WALLET?>" <?= $transfer_type == MONEY_TRANSFER_TYPE_MG_TO_WALLET?'selected':''?> >MG_TO_WALLET</option>
                                                  <option value ="<?=MONEY_TRANSFER_TYPE_PT_TO_WALLET?>" <?= $transfer_type == MONEY_TRANSFER_TYPE_PT_TO_WALLET?'selected':''?>  >PT_TO_WALLET</option>
                                                  <option value ="<?=MONEY_TRANSFER_TYPE_WALLET_TO_MG?>" <?= $transfer_type == MONEY_TRANSFER_TYPE_WALLET_TO_MG?'selected':''?> >WALLET_TO_MG</option>
                                                  <option value ="<?=MONEY_TRANSFER_TYPE_WALLET_TO_PT?>" <?= $transfer_type == MONEY_TRANSFER_TYPE_WALLET_TO_PT?'selected':''?>  >WALLET_TO_PT</option>
                                                </select>
                                                
                                                <select id="user_level" name ="user_level" class="form-control">
                                                  <option value ="">Level</option>
                                                  <option value ="">----------------</option>
                                                  <option value ="1" <?= $user_level == 1 ?'selected':''?> >Bronze</option>
                                                  <option value ="2" <?= $user_level == 2 ?'selected':''?>>Silver</option>
                                                  <option value ="3" <?= $user_level == 3 ?'selected':''?>>Gold</option>
                                                  <option value ="4" <?= $user_level == 4 ?'selected':''?>>Platinum</option>
                                                </select>
                                                 <a href="#"  data-url = "<?= site_url('admin/transfer/form') ?>?request_form=transfer&request_type=create" class="btn btn-primary  pull-right transfer-create" role="button">Add <i class="fa fa-plus"></i></a>
                                                    <!-- <a href="#"  data-url = "<?= site_url('admin/deposits/form') ?>?request_form=deposit&request_type=create" class="btn btn-primary  pull-right deposit-create" role="button">Add <i class="fa fa-plus"></i></a> -->
                                        </div>  
                                    </div>                              
                                    <hr class="dotted short">   
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group" style = "width : 400px">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                        <input type="text" class="form-control" id = "daterange" name="daterange" value = "<?= $daterange?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <button style = "margin-left : 10px" data-search = "last month"  type="button" class="btn btn-sm btn-default search-date">
                                            Last Month
                                            </button>
                                            <button data-search = "this month" type="button" class="btn btn-sm btn-default search-date">
                                                This Month
                                            </button>
                                            <button data-search = "last week" type="button" class="btn btn-sm btn-default search-date">
                                                Last Week
                                            </button>
                                            <button data-search = "this week" type="button" class="btn btn-sm btn-default search-date">
                                                This Week
                                            </button>
                                            <button data-search = "today" type="button" class="btn btn-sm btn-default search-date">
                                                Today
                                            </button> 
                                            
                                            <button data-search = "yesterday" type="button" class="btn btn-sm btn-default search-date">
                                                Yesterday
                                            </button> 
                                    </div>  
                                    </form>
                                </div>

                                    <h4 class="text-weight-bold text-dark text-uppercase"><?= $search_date_string?> <small> <?= $search_date_start?> ~ <?= $search_date_end?></small></h4>

                                <table class="table table-striped table-bordered table-condensed">
                                    <thead>
                                    <tr  style="background:#f5f5f5; ">
                                        <th class="text-right">MG로 입금</th>
                                        <th class="text-right">MG 에서 출금</th>
                                        <th class="text-right">MG 수익</th>
                                        <th class="text-right">PT로 입금</th>
                                        <th class="text-right">PT 에서 출금</th>
                                        <th class="text-right">PT 수익</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background:#FDF5E6">
                                            <td class="text-right"><strong> <?= $W_TO_MG ? number_format($W_TO_MG -> transfer_amount_total):''?> </strong></td>
                                            <td class="text-right"><strong> <?= $MG_TO_W ? number_format($MG_TO_W -> transfer_amount_total):''?> </strong></td>
                                            <td class="text-right text-primary">
                                                <strong>
                                                    <?= number_format($W_TO_MG -> transfer_amount_total - $MG_TO_W -> transfer_amount_total)?>    
                                                </strong>
                                            </td>
                                            <td class="text-right"><strong> <?= $W_TO_PT ? number_format($W_TO_PT -> transfer_amount_total):''?></strong></td>
                                            <td class="text-right"><strong> <?= $PT_TO_W ? number_format($PT_TO_W -> transfer_amount_total):''?></strong></td>
                                            <td class="text-right text-primary">
                                                <strong>
                                                    <?= number_format($W_TO_PT -> transfer_amount_total -$PT_TO_W -> transfer_amount_total) ?>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                 
                                <hr class="dotted short">   
                                
                                <table class="table table-striped">
                                    <thead>
                                    <tr height="30px">
                                        <th>#</th>
                                        <th class="text-left">회원ID</th>
                                        <th>Type</th>
                                        <th class="text-right">to Game</th>
                                        <th class="text-right">to Wallet</th>
                                        <!-- <th class="text-right">Wallet Amount</th> -->
                                        <th class="text-right hidden-xs hidden-sm">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php foreach($game_transfer_records as $record):?>                                        
                                        <tr>
                                            <td><?= $record-> game_money_transfer_no?></td>
                                            <td class="text-left">
                                                 <?php if ($record ->login_status == 'Y'):?>
                                                     <span class="label label-success">On</span>
                                                <?php else:?>
                                                     <span class="label label-default">On</span>
                                                <?php endif?>
                                                <strong>
                                                    <a href="<?= site_url('admin/member/member_view');?>/<?=$record-> user_no?>">&nbsp;<?= $record -> user_id?></a>
                                                </strong>
                                            </td>
                                            <td>
                                                <?php if ( $record->money_transfer_type    == MONEY_TRANSFER_TYPE_MG_TO_WALLET):?>
                                                    MG TO WALLET
                                                <?php elseif( $record->money_transfer_type == MONEY_TRANSFER_TYPE_PT_TO_WALLET):?>    
                                                    PT TO WALLET
                                                <?php elseif( $record->money_transfer_type == MONEY_TRANSFER_TYPE_WALLET_TO_MG):?>    
                                                    WALLET TO MG
                                                <?php elseif( $record->money_transfer_type == MONEY_TRANSFER_TYPE_WALLET_TO_PT):?>    
                                                    WALLET TO PT
                                                <?php endif;?>
                                            </td>
                                            <td class="text-right">
                                               <strong>
                                               <?php if ($record -> money_transfer_type == MONEY_TRANSFER_TYPE_WALLET_TO_MG || $record -> money_transfer_type == MONEY_TRANSFER_TYPE_WALLET_TO_PT ):?>
                                                  <?= number_format($record -> transfer_amount)?>
                                               <?php else:?>
                                                   -
                                               <?php endif;?> 
                                               </strong>
                                            </td>
                                            <td class="text-right">
                                                <strong>
                                                <strong>
                                               <?php if ($record -> money_transfer_type == MONEY_TRANSFER_TYPE_MG_TO_WALLET || $record -> money_transfer_type == MONEY_TRANSFER_TYPE_PT_TO_WALLET ):?>
                                                  <?= number_format($record -> transfer_amount)?>
                                               <?php else:?>
                                                   -
                                               <?php endif;?> 
                                               </strong>    
                                                </strong>
                                            </td>
                                            <!-- <td class="text-right"><strong><?= number_format($record -> wallet_balance_tracking)?></strong></td> -->
                                            <td class="text-right hidden-xs hidden-sm"><small><?= time_to_string($record-> reg_date);?></small></td>
                                        </tr>
<?php endforeach;?>                                        
                                    </tbody>
                                </table>
                                 <form target = "hiddenframe" name = "d_change_form" id = "d_change_form" action = "<?= site_url('admin/deposits/deposit_list')?>" method ="POST">
                                     <input type ="hidden" id = "act_mode" name = 'act_mode' value =""/>              
                                     <input type ="hidden" id = "cur_status" name = 'cur_status' value =""/>              
                                     <input type ="hidden" id = "change_status" name = 'change_status' value =""/>              
                                     <input type ="hidden" id = "deposit_no" name = 'deposit_no' value =""/>   
                                 </form>
                                     
                                 <div class="row">
                                    <nav class="text-center">
                                       <?= $paging -> getBoardPage()?>
                                    </nav>
                                </div>
                            </div>

                            <script type="text/javascript">
                            function changeDepositState(curStatus,changeStatus,e){
                                // location.href = "<?= site_url('admin/deposits/deposit_list')?>?act_mode=change_status&cur_status='+curStatus + '&chnage_status='+changeStatus + '$ddeposit_no='+e; 
                                $('#act_mode').val('change_deposit_status');
                                $('#cur_status').val(curStatus);
                                $('#change_status').val(changeStatus);
                                $('#deposit_no').val(e);
                                $('#d_change_form').submit();
                            }
                                $(document).ready(function() {
                                    $('.transfer-create').click(function() {
                                         openModal($(this).attr('data-url'));
                                    });
                                }); 
                                
                                
                                
                          </script>

                          <!-- End Modal Code -->
                        </section><!-- end: panel -->
                    <!-- end: page -->
                </section><!-- end: content-body -->
            </div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>