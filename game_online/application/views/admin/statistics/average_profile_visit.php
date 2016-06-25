 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
            <?php include_once  APPPATH ."views/admin/template/side_bar.php"; ?>        
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Statistics</h2>
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Statistics</span></li>
								<li><span>Average Profile Visit</span></li>
							</ol>
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Average Profile Visit</h2>
							</header>
							<div class="panel-body">
								<div class="well well-sm">
									<div class="row">
										<div class="col-md-12">
										 <form class="form-inline" id = "l_serarch_form" name = "l_search_form" method ="GET">
										    <div class="form-group">
                                                    <div class="input-group" style = "width : 420px">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                        <input type="text" class="form-control input-sm" id = "daterange" name="daterange" value = "<?=$daterange?>">
                                                    </div>
                                                </div>   
									        <select id="country_code"  name ="country_code" class="form-control input-sm">
                                               <option value ="all" selected>All </option>
<?php foreach($country_arr as $row):?>                                               
                                               <option value ="<?=$row -> country_code?>" <?php if($country_code == $row -> country_code):?> selected <?php endif;?>><?= $row -> country?></option>
<?php endforeach;?>                                               
                                             </select>
                                             
                                             <select id="user_type" name ="user_type" class="form-control input-sm">
                                               <option value ="all" >All </option>
                                               <option value ="member" <?php if($user_type == 'member'):?> selected <?php endif;?>>Member </option>
                                               <option value ="not_member" <?php if($user_type == 'not_member'):?> selected <?php endif;?> >Not Member </option>
                                             </select>
											
												<div class="input-group">
												  <input type="text" name = "search_keyword" id ="search_keyword" class="form-control input-sm" value = "<?=$search_keyword?>" placeholder="Search for...">
												  <span class="input-group-btn">
													<button class="btn btn-primary input-sm" type="submit">Find</button>
												  </span>
												 
												</div><!-- /input-group -->
										      <div class="visible-sm clearfix mt-sm mb-sm"></div>
										</div>	
									</div>								
									<!-- <hr class="dotted short">	 -->
                                    </form>
								</div>
				            <table style ="font-size: 8pt;" class="table table-bordered table-striped mb-none dataTable no-footer table-condensed" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                                NO
                                            </th>
                                            <!-- <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                                ID
                                            </th> -->
                                            <th class="sorting_desc center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" aria-sort="descending" >
                                                IP
                                            </th>
                                            <th class="hidden-phone sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >
                                                COUNTRY
                                             </th>
                                            <th class="hidden-phone sorting center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" >
                                                CLASS
                                            </th>
                                             <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                FUNCTION
                                            </th>
                                         
                                            <th class="sorting center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">
                                                 REQ_METHOD
                                            </th>
                                            
                                            <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                URL
                                            </th>
                                            <th class="sorting center"  s tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                URI
                                            </th>
                                             <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                QUERY
                                            </th>
                                            
                                             <th class="sorting center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                PARAM
                                            </th>
                                            
                                             <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">
                                                DEVICE
                                            </th>
                                            
                                             <th class="sorting center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                PLATFORM
                                            </th>
                                            
                                             <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">
                                                BROWSER
                                            </th>
                                            
                                             <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                REFERER
                                            </th>
                                            
                                            
                                             <th class="sorting center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                USER AGENT
                                            </th>
                                             <th class="sorting center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                ROBOT
                                            </th>
                                            
                                             <th class="sorting center"  tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >
                                                DATE
                                            </th>
                                         </tr>
                                    </thead>
                                    <tbody>
<?php foreach($rows as $row):?>                                       
                                    <tr class="gradeC odd" role="row">
                                          <td class="center text-weight-bold" data-toggle="tooltip" data-placement="right" title ="<?= $row -> user_type_str  == 'MEMBER' ? $row -> user_type_str.' : '.$row -> user_id :''?>">
                                              <?php if ($row -> user_type_str == "MEMBER"):?> 
                                              <a href ="<?=site_url('admin/member/member_view')?>/<?=$row -> user_no_str?> ">
                                                    <?=$row -> user_no_str?> 
                                              </a>
                                              <?php else:?>
                                                    <?=$row -> user_no_str?> 
                                              <?php endif?>
                                          </td>
                                          <td class="hidden-phone text-primary text-weight-bold"><?=$row -> ip?></td>
                                          <td class="hidden-phone">
                                              <?php if ($row-> country_code == 'FF'):?>
                                              <?php else:?>
                                              <img src ="<?=base_url('assets/images/flags')?>/<?=strtolower($row -> country_code)?>.gif"/>
                                              <?php endif;?>
                                              <?=$row -> country?>
                                          </td>
                                          <td class="text-right"><?=$row -> action_class?></td>
                                          <td class="text-right"><?=$row -> action_function?></td>
                                          <td class="center text-right"><span <?php if($row->request_method_str  == 'POST'):?> class ="label label-danger" <?php endif;?>><?=$row -> request_method_str?>(<?=$row -> request_type_str?>)<span></td>
                                          <td class="text-weight-bold" data-toggle="tooltip" data-placement="left" title ="<?=$row -> action_url?>" ><?=substr($row -> action_url,0)?></td>
                                          <td class="text-weight-bold"><?=$row -> action_uri?></td>
                                          <td class="sorting_1 center text-weight-bold"><?=$row -> action_query?></td>
                                          <td class="center hidden-phone text-weight-bold" data-toggle="tooltip"  data-placement="left" title ="<?=htmlspecialchars(stripslashes($row -> req_parameter))?>">
                                              <span><?=substr(stripslashes($row->req_parameter),0,30)?></span>
                                          </td>
                                          <td class="center"><?=$row -> device?></td>
                                          <td class="center" data-toggle="tooltip"  data-placement="left" title ="<?=$row -> platform?>"><?=substr($row -> platform,0,10)?></td>
                                          <td class=""><?=$row -> browser?>&nbsp;<?=$row -> browser_version?></td>
                                          <td class="text-left"><?=$row -> is_referer?>(<?=substr($row -> referer,0,18)?>)</td>
                                          <td class="" data-toggle="tooltip" data-placement="left" title ="<?=$row -> user_agent?>"><?=substr($row -> user_agent,0,20)?>..</td>
                                          <td class="center"><?=$row -> robot?></td>
                                          <td class="center" data-toggle="tooltip" data-placement="left" title ="<?=time_to_string($row -> reg_date)?>"><?=substr(time_to_string($row -> reg_date),0,10)?></td>
                                     </tr>
<?php endforeach;?>                               
                                    </tbody>
                                </table> 
                                
								<div class="row">
                                    <nav class="text-center">
                                        <?= $pagination -> getBoardPage();?>
                                    </nav>
                                </div>
							</div>
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>