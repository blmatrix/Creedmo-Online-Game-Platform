<?php
include_once APPPATH . "views/brand/template/top.php";
?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/brand/template/side_bar.php";
	?>
	<section role="main" class="content-body">
		<header class="page-header">
                        <h2>Statistical records</h2>
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Affiliate Reports</span></li>
                                <li><span>Statistical records</span></li>
                            </ol>
                            <a class="sidebar-right-toggle"  href="<?= site_url('brand'); ?>"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">                       
               <h2 class="panel-title">Statistical records</h2>
           </header>
			<div class="panel-body">
<div class="panel-body">
				<div class="well well-sm">
					<form class="form-inline" id="m_serarch_form" name="m_search_form" method="GET">
					    <input type="hidden" name="act_mode" value="report">
						<div class="row">
								<div class="col-md-12"> 
								    <div class="input-group" style="width : 300px">
                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                        <input type="text" class="form-control" id="daterange" name="daterange" value="2015/07/01  -  2015/10/01">
                                    </div>
									<button data-search="prev_month" type="button" class="btn btn-primary">
                                                Submit
                                    </button>
							</div>
						</div>
					</form>
				</div>
				<h4 class="text-weight-bold text-dark text-uppercase">Summary <small> 2015/07/01  -  2015/10/01</small></h4>
                    <table class="table table-striped table-bordered table-condensed">
                                    <thead>
                                    <tr style="background:#f5f5f5; ">
                                        <th class="text-right">Agent</th>
                                        <th class="text-right">1 Depth Commission</th>
                                        <th class="text-right">2 Depth Commission</th>  
                                        <th class="text-right">Total Commission</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background:#FDF5E6">
                                            <td class="text-right"><strong>3 名</strong></td>
                                            <td class="text-right"><strong>-912.29</strong></td>
                                            <td class="text-right"><strong>-456.2585</strong></td>
                                            <td class="text-right text-danger"><strong>-1368.5485</strong></td>
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
                                      
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                643                                            </td>
                                            <td style="vertical-align: middle;">
                                                <span class="label label-success">On</span> 
                                                <strong>
                                                    <a href="http://gobigchina.net/index.php/admin/member/member_view/643">
                                                        AWS123                                                    </a>
                                                </strong>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <a onclick="moveAgentDetail(643)" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-th-list"></i> BF85046721                                                </a>
                                            </td>
                                            <td class="text-right" style="vertical-align: middle;"><strong></strong></td>
                                            <td class="text-right"><strong>1 Depth<br>2 Depth</strong></td>
                                            <td class="text-right">
                                                <strong>
                                                    1/1<br>
                                                    1/3<br>
                                                </strong>
                                            </td>
                                            <td class="text-right text-primary">
                                                <strong>
                                                    -910.065<br>
                                                    -1.1                                                </strong>
                                            </td>
                                            <td class="text-right">1 Level<br>2 Level</td>                                          
                                            <td style="vertical-align: middle;" class="text-right text-weight-semibold text-primary h4">
                                                 -911.165                                            </td>
                                            <!-- <td class="text-right hidden-xs hidden-sm"><small>2015-06-30<br>Wire Transfer</small></td> -->
                                        </tr>
                                      
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                642                                            </td>
                                            <td style="vertical-align: middle;">
                                                <span class="label label-success">On</span> 
                                                <strong>
                                                    <a href="http://gobigchina.net/index.php/admin/member/member_view/642">
                                                        EVEEVE                                                    </a>
                                                </strong>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <a onclick="moveAgentDetail(642)" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-th-list"></i> BF83249156                                                </a>
                                            </td>
                                            <td class="text-right" style="vertical-align: middle;"><strong></strong></td>
                                            <td class="text-right"><strong>1 Depth<br>2 Depth</strong></td>
                                            <td class="text-right">
                                                <strong>
                                                    0/1<br>
                                                    1/1<br>
                                                </strong>
                                            </td>
                                            <td class="text-right text-primary">
                                                <strong>
                                                    0<br>
                                                    -455.1585                                                </strong>
                                            </td>
                                            <td class="text-right">1 Level<br>2 Level</td>                                          
                                            <td style="vertical-align: middle;" class="text-right text-weight-semibold text-primary h4">
                                                 -455.1585                                            </td>
                                            <!-- <td class="text-right hidden-xs hidden-sm"><small>2015-06-30<br>Wire Transfer</small></td> -->
                                        </tr>
                                      
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                647                                            </td>
                                            <td style="vertical-align: middle;">
                                                <span class="label label-success">On</span> 
                                                <strong>
                                                    <a href="http://gobigchina.net/index.php/admin/member/member_view/647">
                                                        TOPAYC0011                                                    </a>
                                                </strong>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <a onclick="moveAgentDetail(647)" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-th-list"></i> BF06837914                                                </a>
                                            </td>
                                            <td class="text-right" style="vertical-align: middle;"><strong></strong></td>
                                            <td class="text-right"><strong>1 Depth<br>2 Depth</strong></td>
                                            <td class="text-right">
                                                <strong>
                                                    1/3<br>
                                                    0/0<br>
                                                </strong>
                                            </td>
                                            <td class="text-right text-primary">
                                                <strong>
                                                    -2.225<br>
                                                    0                                                </strong>
                                            </td>
                                            <td class="text-right">1 Level<br>2 Level</td>                                          
                                            <td style="vertical-align: middle;" class="text-right text-weight-semibold text-primary h4">
                                                 -2.225                                            </td>
                                            <!-- <td class="text-right hidden-xs hidden-sm"><small>2015-06-30<br>Wire Transfer</small></td> -->
                                        </tr>
                                        
                                    </tbody>
                                </table>
			</div>
			<hr class="dotted short">
</div>
</div>

</section><!-- end: panel -->
<!-- end: page -->
</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->

<?php
include_once APPPATH . "views/brand/template/footer.php";
?>