<?php
include_once APPPATH . "views/brand/template/top.php";
?>
<div class="inner-wrapper">
	<?php
    include_once APPPATH . "views/brand/template/side_bar.php";
	?>
	<section role="main" class="content-body">
		<header class="page-header">
             <h2>정산 내역</h2>
             <div class="right-wrapper pull-right">
                 <ol class="breadcrumbs">
                     <li>
                         <a href="index.html">
                             <i class="fa fa-home"></i>
                         </a>
                     </li>
                     <li><span>정산 리포트</span></li>
                     <li><span>정산 내역</span></li>
                 </ol>
                 <a class="sidebar-right-toggle"  href="<?= site_url('brand'); ?>"><i class="fa fa-chevron-left"></i></a>
             </div>
         </header>
		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
               <h2 class="panel-title">정산 내역</h2>
           </header>
			<div class="panel-body">
				<h4 class="text-weight-bold text-dark text-uppercase">개요 <small> </small></h4>
                    <table class="table table-striped table-bordered table-condensed">
                         <thead>
                         <tr style="background:#f5f5f5; ">
                             <th class="text-right">1차 정산액</th>
                             <th class="text-right">2차 정산액</th>  
                             <th class="text-right">토탈 정산액</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr style="background:#FDF5E6">
                                 <td class="text-right"><strong><?= number_format($g_deps1_commission,0)?></strong></td>
                                 <td class="text-right"><strong><?= number_format($g_deps2_commission,0)?></strong></td>
                                 <td class="text-right text-danger"><strong><?= number_format($g_deps2_commission + $g_deps1_commission,0)?></strong></td>
                             </tr>
                         </tbody>
                     </table>
                     <div class="col-sm-7 mt-md">
                         <h6 class="h4 m-none text-danger text-weight-bold">
                             <button type="button" class="mb-xs mt-xs mr-xs btn btn-default" id ="prev_year_btn"><i class="fa fa-arrow-left"></i> </button>
                             &nbsp;<span id ='select_year'><?= $daterange ?></span>&nbsp;
                             <button type="button" class="mb-xs mt-xs mr-xs btn btn-default" id ="next_year_btn" ><i class="fa fa-arrow-right"></i> </button> 
                         </h6>
                      </div>
                     
                     <hr class="dotted short">   
                      <table class="table table-striped">
                         <thead>
                         <tr height="30px">
                             <th>#</th>
                             <!-- <th  class="text-center hidden-xs hidden-sm">월</th> -->
                             <th  class="text-center hidden-xs hidden-sm">정산 시작일</th>
                             <th  class="text-center hidden-xs hidden-sm">정산 마지막일</th>
                             <th class="text-left">파트너 ID</th>
                             <th>추천인코드</th>
                             <th data-toggle="tooltip" data-placement="top" data-original-title="Apply Commission By Depth  -----(1 Depth Level / 2 Depth Level)">적용 레벨</th>
                             <th data-toggle="tooltip" data-placement="top" data-original-title="Apply Commission By Depth  -----(1 Depth Level / 2 Depth Level)">1/2차 정산액</th>
                             <th  class="text-right">수익금</th>
                         </tr>
                         </thead>
                         <tbody>
<?php foreach($commission_records as $commission_record):?>         
                           <tr>
                               <td><?= $commission_record -> user_no?></td>
                               <!-- <td class="text-center hidden-xs hidden-sm">
                                   <strong><?= date('Y-m',$commission_record -> commission_month)?></strong>
                               </td> -->
                               <th  class="text-center hidden-xs hidden-sm"><?= date('Y-m-d',$commission_record -> commission_process_start_time)?></th>
                             <th  class="text-center hidden-xs hidden-sm"><?= date('Y-m-d',$commission_record -> commission_process_start_time)?></th>
                               <td class="text-">
                                   <strong>
                                       <a href="<?= site_url('profile');?>">
                                        <?= $commission_record -> user_id?>
                                       </a>
                                   </strong>
                               </td>
                               <td>
                                   <a data-month = "<?= date('Y-m',$commission_record -> commission_month)?>" 
                                       <?php if ($view_type != 'monthly'):?> 
                                           onclick ="moveAgentDetail(<?= $commission_record -> user_no ?>)" 
                                       <?php else:?> 
                                           onclick ="moveAgentDetail2(<?= $commission_record -> user_no ?>,this)" 
                                       <?php endif?> 
                                       class="btn btn-xs btn-primary">
                                       <i class="fa fa-th-list"></i> 
                                       <?= $commission_record -> affiliate_code?>
                                   </a>
                                   
                                   <!-- <button type="button" class="btn btn-info btn-xs" >Daily</button> -->
                               </td>
                               <td><?= $commission_record -> deps1_apply_level?> / <?= $commission_record  -> deps2_apply_level?></td>
                               <td><?= number_format($commission_record -> deps1_total_commission,0)?> /<?= number_format($commission_record -> deps2_total_commission,0)?></td>
                               <td class="text-right text-primary"><h4 class="text-weight-bold" style="margin:0"><?= $commission_record -> total_commission?></h4></td>
                           </tr>
<?php endforeach;?>
                          </tbody>
                      </table>
                      <div class="row">
                    <nav class="text-center">
                       <?= $paging -> getBoardPage()?>
                    </nav>
                </div>
			</div>
			<form name ="m_search_form">
			    <input type ="hidden" name ="daterange"/>
			</form>
			<hr class="dotted short">

</section><!-- end: panel -->
<!-- end: page -->
</section><!-- end: content-body -->
</div><!-- end: inner-wrapper -->
<script>
      $(document).ready(function(){
        $('#prev_year_btn').click(function(){
           var d_date = selectMonth();
           var d1 = moment(d_date).subtract(1, 'year').format('YYYY');
           $("#select_year").html(d1);
           locatePage();
           
        });
        
        $('#next_year_btn').click(function(){
           var d_date = selectMonth();
           var d1 = moment(d_date).add(1, 'year').format('YYYY');
           $("#select_year").html(d1);
           locatePage();
        });
    });
    
    function selectMonth(){
        var select_month = $('#select_year').html();
        return select_month;
    }
    
   function locatePage(){location.href = "<?=site_url('brand/reports/statistical_records')?>?daterange="+$("#select_year").html();}    
   function moveAgentDetail(user_no){
       var search_form = document.m_search_form;
       search_form.daterange.value  = trim(search_form.daterange.value); 
       search_form.action = "<?= site_url('brand/reports/agent_detail')?>" + '/' + user_no;
       search_form.submit();
   }
    
    function moveAgentDetail2(user_no,e){
       var d1 = e.getAttribute('data-month');
       var date1 = new Date(d1);
       date1.setDate(1) 
       
       var start_day =  converDateString(date1);
       var date2 = new Date(d1);
       date2.setMonth( date2.getMonth() + 1);
       date2.setDate(0);
       var end_day =  converDateString(date2);
       var daterange = start_day + ' 00:00:00 - ' + end_day + " 23:59:59"; 
       var search_form = document.m_search_form;
       search_form.daterange.value  = trim(daterange); 
       search_form.action = "<?= site_url('brand/reports/agent_detail')?>" + '/' + user_no;
       search_form.submit();
    }
    
    function converDateString(dt){return dt.getFullYear() + "/" + addZero(eval(dt.getMonth()+1)) + "/" + addZero(dt.getDate());}
    function addZero(i){var rtn = i + 100;return rtn.toString().substring(1,3);}
    function trim(str) {return str.replace(/(^\s*)|(\s*$)/gi, '');}
</script>
<?php
include_once APPPATH . "views/brand/template/footer.php";
?>