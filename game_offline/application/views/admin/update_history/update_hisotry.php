<?php
include_once APPPATH . "views/admin/template/top.php";
 ?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/admin/template/side_bar.php";
	?>

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>게임플레이 API 히스토리</h2>

			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html"> <i class="fa fa-home"></i> </a>
					</li>
					<li>
						<span>게임플레이 API 히스토리</span>
					</li>
				</ol>

				<a class="sidebar-right-toggle"  href="<?= site_url('admin/index/index'); ?>"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->

		<section class="panel">
			<header class="panel-heading">

				<h2 class="panel-title">게임플레이 API 히스토리</h2>
			</header>

			<div class="panel-body">
			    <div class="well well-sm">
			        <h4 class="text-weight-bold text-dark text-uppercase">수동 일괄 업데이트<small> | 특정 기간을 설정하여 업데이트할 수 있습니다</small></h4>
			         <p> <strong>- 날짜 입력 포맷</strong>&nbsp;&nbsp;
			             MG : 2010-10-10 &nbsp;PT : 2010-10-10</br>
			             <strong>- Microgame 경우 1회 최대 3일동안의 게임 플레이의 업데이트만 가능합니다</strong>
			         </p>
			         <hr class="dotted short"> 
			        <form class="form-inline" id = "game_play_update" name = "game_play_update" method ="POST" target ="hiddenframe">
			        <div class="row">
                            <div class="col-md-12">
                                <select style = "width : 200px" id="vender" name = "vender"  class="form-control">
                                    <!-- <option value = "all">All Game</option> -->
                                    <?php if (MG_ENABLE == 'Y'):?>
                                    <option value = "<?= VENDER_MG?>">MG Game</option>
                                    <?php endif;?>
                                    <?php if (PT_ENABLE == 'Y'):?>
                                    <option value = "<?= VENDER_PT?>">PT Game</option>
                                    <?php endif;?>
                                </select>
                                <div class="input-group">
                                    <input style = "width : 300px" type="text" name = "update_start_time" id ="update_start_time" class="form-control" placeholder="업데이트 시작 시간" value = "">
                                </div><!-- /input-group -->
                                
                                 <div class="input-group">
                                    <input style = "width : 300px" type="text" name = "update_end_time" id ="update_end_time" class="form-control" placeholder="업데이트 마지막 시간" value = "">
                                    <span class="input-group-btn">
                                        <button type = "button" onclick ="gamePlayFetchStart()" class="btn btn-primary" >
                                         Start Fetch
                                        </button> </span>
                                </div><!-- /input-group -->

                                <div class="visible-sm clearfix mt-sm mb-sm"></div>
                              
                            </div>
                        </div>
                </form>
			    </div>
			    <script>
			        function gamePlayFetchStart(){
			             var sel_vender = $('#vender').val();
                         var start_time = $('#update_start_time').val();
                         var end_time = $('#update_end_time').val();
                          if (!moment(start_time).isValid()){
                             alert('업데이트 시작일 입력 시간이 잘못되었거나 포맷이 맞지 않습니다.\n입력포맷을 확인해주세요');
                             return false;
                         }
                         
                         if (!moment(end_time).isValid()){
                             alert('업데이트 마지막일 입력 시간이 잘못되었거나 포맷이 맞지 않습니다.\n입력포맷을 확인해주세요');
                             return false;
                         }
                         
                         if (sel_vender == '<?=VENDER_MG ?>'){
                             var interval_day = moment(end_time).diff(moment(start_time),'days',true);
                             if (interval_day> 3){
                                 alert('MG 게임은 3일기간 이상 업데이트할 수 없습니다.\n확인해주세요');
                                return false;
                             }
                         }
                         
                         $('#game_play_update').submit();
			        }
			     </script>
				<h4 class="text-weight-bold text-dark text-uppercase">API 호출 내역<small> 자동 API히스토리 호출이 3번이상 실패할 경우 관리자가 수동호출 해야 합니다.</small></h4>
                <?php if ($faild_update_rows_count> 0):?>
                    <strong>현재 <?= $faild_update_rows_count?>개의 게임 업데이트 처리가 실패된 상태입니다. 확인해주세요<strong> 
                <?php endif;?>
				<hr class="dotted short">

				<table class="table table-striped">
					<thead>
						<tr height="30px">
							<th class="text-left">호출 API시간</th>
							<th>게임종류</th>
							<th class="text-right">업데이트 row수</th>
							<th class="text-right">자동 시도횟수</th>
							<th class="text-right">수동 시도횟수</th>
							<th class="text-right">결과 메시지</th>
							<th class="text-right">상태</th>
							<th class="text-right hidden-xs hidden-sm">완료시간</th>
							<th class="text-right">등록시간</th>
							<!-- <th class="text-right">Confirm By</th> -->
						</tr>
					</thead>
					<tbody>
<?php foreach($game_play_update_rows as $row):?>					    
					    
						<tr>
							<td class="text-left text-weight-semibold text-primary">
							    <i class="fa fa-clock-o"></i> <?= date('Y-m-d H:i',$row -> update_start_time)?> ~ <?= date('Y-m-d H:i',$row -> update_end_time)?>
							</td>
							<td><?= $row -> game_vender_name?></td>
							<td class="text-right"><?= $row -> update_row_count?></td>
							<td class="text-right"><?= $row -> auto_attempt_count?></td>
							<td class="text-right"><?= $row -> manual_attempt_count?></td>
							<td class="text-right hidden-xs hidden-sm"><small><?= $row -> message ?></small></td>
							<td class="text-right">
							    <?php if ($row -> update_status == GAME_PLAY_UPDATE_STATUS_SUCCESS):?>
							        <span class="text-right text-weight-semibold text-primary">호출 완료</span>
							    <?php endif;?>  
							    <?php if ($row -> update_status == GAME_PLAY_UPDATE_STATUS_FAIL):?>
								    <button onclick ="callManualGamePlayUpdate('<?=$row -> game_play_update_log_no?>')" type="button" class="btn btn-xs btn-primary" data-toggle="confirmation" onclick = "" >수동 호출</button>
                                <?php endif;?>      
							</td>
							<td class="text-right hidden-xs hidden-sm"><small><?= $row -> complete_time != NULL ?date('Y-m-d H:i', $row -> complete_time):''?></small></td>
							<td class="text-right hidden-xs hidden-sm"><small><?= date('Y-m-d H:i', $row -> reg_date)?></small></td>
						</tr>
<?php endforeach;?>						
					
					</tbody>
				</table>
				 </br>
				<div class="row">
                    <nav class="text-center">
                       <?= $pagination-> getBoardPage()?>
                    </nav>
                </div>
                </br></br></br>
			</div>
			<form id ="game_play_update" nam = "game_play_update" target ="hiddenframe"  method = "POST" action = "<?= site_url('admin/update_history/game_play_update_history')?>">
			    <input type ="hidden" id ="update_play" name = "update_play"/>
			</form> 
		</section><!-- end: panel -->
		<!-- end: page -->
	</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->
<script>
    function callManualGamePlayUpdate(n){
        if (n < 1) {
            alert('업데이트 하려먼 내역의 키가 잘못되었습니다.\n관리자에게 문의해주세요');
            return;
        }
        
        if (!confirm('선택하신 시간대의 게임 내역을 수동 업데이트합니다.하시겠습니까')){
            return;
        }
           
        $('#update_play').val('');
        $('#update_play').val(n);
        $('#game_play_update').submit();
    }
    
    
</script>
<?php
    include_once APPPATH . "views/admin/template/footer.php";
?>