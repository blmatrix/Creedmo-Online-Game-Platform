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
								<li><span>Game Stats</span></li>
							</ol>
							<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index');?>"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">게임 내역</h2>
								자세한 게임 내역은 각 회원별 기본정보에서 <b>[ MG Game 플레이 내역 ]</b>을 확인
							</header>
							<div class="panel-body">
								<div class="well well-sm">
								     <form class="form-inline" id = "g_serarch_form" name = "w_search_form" method ="GET">
									<div class="row">
										<div class="col-md-12">
										      <form class="form-inline" id = "w_serarch_form" name = "w_search_form" method ="GET">
										    <div class="form-group">
                                                    <div class="input-group" style = "width : 420px">
                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                        <input type="text" class="form-control input-sm" id = "daterange" name="daterange" value = "<?= $daterange?>">
                                                    </div>
                                                </div>   
									        <select id="vender_code" name ="vender_code" class="form-control input-sm">
                                               <option value ="">제공 게임</option>
                                               <option value ="">---------------------</option>
                                               <option value ="">모든 게임</option>
                                               <option value ="<?=VENDER_MG?>" <?php if($vender_code == VENDER_MG):?> selected ="selected" <?php endif;?> >MG - Microgame</option>
                                                <option value ="<?=VENDER_PT?>" <?php if($vender_code == VENDER_PT):?> selected ="selected" <?php endif;?> >PT - Playtech</option>
                                             </select>
											
												<div class="input-group">
												  <input type="text" name = "search_keyword" id ="search_keyword" class="form-control input-sm" value = "<?= $search_keyword?>" placeholder="Search for...">
												  <span class="input-group-btn">
													<button class="btn btn-primary input-sm" type="submit">검색</button>
												  </span>
												 
												</div><!-- /input-group -->
										      <div class="visible-sm clearfix mt-sm mb-sm"></div>
										</div>	
									</div>								
									<!-- <hr class="dotted short">	 -->
                                    </form>
								</div>
				            <table  style ="font-size: 9pt;" class="table table-bordered table-striped mb-none dataTable no-footer table-condensed" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                                    <thead>
                                        <tr role="row">
                                            <!-- <th class="sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                #
                                            </th> -->
                                            <th class="sorting center" style ="width:10%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 353px;">
                                                게임아이디
                                            </th>
                                            <th class="sorting_desc center" style ="width:6%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" aria-sort="descending" style="width: 320px;">
                                                게임
                                            </th>
                                            <th class="hidden-phone sorting center" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 231px;">
                                                게임이름
                                             </th>
                                            <th class="hidden-phone sorting center" style ="width:10%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 164px;">
                                                플레이 시간
                                            </th>
                                             <!-- <th class="sorting center" style ="width:5%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                배팅 횟수
                                            </th> -->
                                         
                                            <th class="sorting center" style ="width:9%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                배팅총액
                                            </th>
                                            
                                            <th class="sorting center" style ="width:9%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                반환총액
                                            </th>
                                            
                                            <th class="sorting center" style ="width:9%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                승리금액
                                            </th>
                                            
                                            <th class="sorting center" style ="width:8%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                게임타입
                                            </th>
                                            <th class="sorting center"  style ="width:5%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                Comp%
                                            </th>
                                             <th class="sorting center" style ="width:8%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                적립Comp
                                            </th>
                                            
                                             <th class="sorting center" style ="width:10%" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 269px;">
                                                DB기록
                                            </th>
                                            
                                         </tr>
                                    </thead>
                                    <tbody>
<?php foreach($rows as $row):?>                                        
                                    <tr class="gradeC odd" role="row">
                                          <!-- <td class="center"><?=$row -> game_play_no?></td> -->
                                          <td class="center text-weight-bold"">
                                          <a href ="<?=site_url('admin/member/member_view_id')?>/<?=$row -> player_name?>"><?=$row -> player_name?></a>    
                                          </td>
                                          <td class="sorting_1 center"><span class ="label <?=$row -> vender_code == '1' ? 'label-success': 'label-warning'?>"> <?=$row -> vender_code == '1' ? 'PT' : 'MG'?></span></td>
                                          <td class="center hidden-phone"><?=$row -> game_name?></td>
                                          <td class="center hidden-phone"><?=time_to_string($row -> play_date_int)?></td>
                                          <!-- <td class="center"><?=$row -> game_play_count == -1 ? '-': $row -> game_play_count?></td> -->
                                          <td class="center"><?=number_format($row -> bet_amount,0)?></td>
                                          <td class="center hidden-phone"><?=number_format($row -> payout_amount,0)?></td>
                                          <td class="center text-weight-bold <?=$row -> win_amount > 0 ? 'text-danger':'text-primary'?>" ><?=number_format($row -> win_amount,0)?></td>
                                          <td class="center text-weight-bold"><?=$row -> distribute_type?></td>
                                          <td class="sorting_1 center text-weight-bold"><?=number_format($row -> distribute_rate,3)?></td>
                                          <td class="center hidden-phone  text-danger text-weight-bold"><?=number_format($row -> acc_comp_point,0)?></td>
                                          <td class="center hidden-phone"><?=time_to_string($row -> reg_date)?></td>
                                     </tr>
<?php endforeach;?>                                
                                    </tbody>
                                </table>
								<div class="row">
                                    <nav class="text-center">
                                     <?=$pagination -> getBoardPage()?>
                                    </nav>
                                </div>
							</div>
						</section><!-- end: panel -->
					<!-- end: page -->
				</section><!-- end: content-body -->
			</div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>