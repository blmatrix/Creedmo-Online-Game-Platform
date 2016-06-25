<?php
include_once APPPATH . "views/admin/template/top.php";
?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/admin/template/side_bar.php";
	?>
	<section role="main" class="content-body">
		<header class="page-header">
                        <h2>Affiliate Reports</h2>
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Affiliate Reports</span></li>
                                <li><span>Agent</span></li>
                            </ol>
                            <a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index'); ?>"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">                       
               <h2 class="panel-title">Agent</h2>
           </header>
			<div class="panel-body">
				<div class="well well-sm">
					<form class="form-inline" id = "m_serarch_form" name = "m_search_form" method ="GET">
					    <input type ='hidden' name ="act_mode" value ="report"/>
						<div class="row">
							<div class="col-md-12">

								<div class="input-group">
									<input type="text" name = "search_keyword" id ="search_keyword" class="form-control" placeholder="Search fot id or code" value = "<?= !empty($search_keyword) ? $search_keyword : '' ?> ">
									<span class="input-group-btn">
										<button type = "submit" class="btn btn-primary" >
											Find
										</button> 
										&nbsp;&nbsp;
										<!-- <input type = "reset" class="btn btn-default" value="Reset" /> -->
								    </span>
								</div><!-- /input-group -->

								<div class="visible-sm clearfix mt-sm mb-sm"></div>
							</div>
						</div>
						<hr class="dotted short"> 
						<div class="row" style ="margin-top : 10px">
								<div class="col-md-12"> 
								    <div class="input-group" style = "width : 400px">
                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                        <input type="text" class="form-control" id = "daterange" name="daterange" value = "<?= $search_date_start ?>  -  <?= $search_date_end ?>">
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <button data-search = "prev_month" type="button" class="btn btn-sm btn-default search-date">
                                                Prev Month
                                    </button>
                                    <button data-search = "next_month" type="button" class="btn btn-sm btn-default search-date">
                                                Next Month
                                    </button>
							</div>
						</div>
					</form>
				</div>
				<h4 class="text-weight-bold text-dark text-uppercase">Summary <small> <?= $search_date_start ?>  -  <?= $search_date_end ?></small></h4>
                    <table class="table table-striped table-bordered table-condensed">
                                    <thead>
                                    <tr  style="background:#f5f5f5; ">
                                        <th class="text-right">Agent</th>
                                        <th class="text-right">1 Depth Commission</th>
                                        <th class="text-right">2 Depth Commission</th>  
                                        <th class="text-right">Total Commission</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background:#FDF5E6">
                                            <td class="text-right"><strong><?= $agent_settle['agent_count'] ?> 名</strong></td>
                                            <td class="text-right"><strong><?= $agent_settle['deps1_total_commssion'] ?></strong></td>
                                            <td class="text-right"><strong><?= $agent_settle['deps2_total_commssion'] ?></strong></td>
                                            <td class="text-right text-danger"><strong><?= $agent_settle['all_deps_total'] ?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="dotted short">   
                                <table class="table table-striped">
                                    <thead>
                                    <tr height="30px">
                                        <th>no</th>
                                        <th>Agent</th>
                                        <th>Code</th>
                                        <th class="text-right">Month</th>
                                        <th class="text-right">Depth</th>
                                        <th class="text-right">User</th>
                                        <th class="text-right">Commission</th>
                                        <th class="text-right">Depth Level</th>                                     
                                        <th class="text-right">Total</th>
                                        <!-- <th class="text-right">Payment</th> -->
                                    </tr>
                                    </thead>
                                    <tbody>
<?php foreach($agent_settle['agent_list'] as $agent_vo):?>                                      
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <?= $agent_vo -> user_no ?>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <span class="label label-success">On</span> 
                                                <strong>
                                                    <a href="<?= site_url('admin/member/member_view'); ?>/<?=$agent_vo -> user_no ?>">
                                                        <?= $agent_vo -> user_id ?>
                                                    </a>
                                                </strong>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <a onclick ="moveAgentDetail(<?= $agent_vo -> user_no ?>)" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-th-list"></i> <?= $agent_vo -> agent_code ?>
                                                </a>
                                            </td>
                                            <td class="text-right"  style="vertical-align: middle;"><strong><?= $agent_vo -> month ?></strong></td>
                                            <td class="text-right"><strong>1 Depth<br>2 Depth</strong></td>
                                            <td class="text-right">
                                                <strong>
                                                    <?= $agent_vo -> deps1_active_child_count ?>/<?= $agent_vo -> deps1_child_count ?><br>
                                                    <?= $agent_vo -> deps2_active_child_count ?>/<?= $agent_vo -> deps2_child_count ?><br>
                                                </strong>
                                            </td>
                                            <td class="text-right text-primary">
                                                <strong>
                                                    <?= $agent_vo -> deps1_total_commission ?><br>
                                                    <?= $agent_vo -> deps2_total_commission ?>
                                                </strong>
                                            </td>
                                            <td class="text-right">1 Level<br>2 Level</td>                                          
                                            <td style="vertical-align: middle;" class="text-right text-weight-semibold text-primary h4">
                                                 <?= $agent_vo -> total_commission ?>
                                            </td>
                                            <!-- <td class="text-right hidden-xs hidden-sm"><small>2015-06-30<br>Wire Transfer</small></td> -->
                                        </tr>
<?php endforeach; ?>                                        
                                    </tbody>
                                </table>
			</div>
			<hr class="dotted short">
</div>
</div>
    <script>
    		$(document).ready(function() {
    		$('.member-create').click(function() {
    			openModal($(this).attr('data-url'));
    		});
    	}); 
	
        	function moveAgentDetail(user_no){
        	    var search_form = document.m_search_form;
        	    search_form.search_keyword.value = '';
        	    search_form.daterange.value  = trim(search_form.daterange.value); 
        	    search_form.action = "<?= site_url('admin/affiliate/agent_detail')?>" + '/' + user_no;
        	    search_form.submit();
    	    }

			function trim(str) {
		     	return str.replace(/(^\s*)|(\s*$)/gi, '');
			}

    </script>
</section><!-- end: panel -->
<!-- end: page -->
</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->

<?php
include_once APPPATH . "views/admin/template/footer.php";
?>