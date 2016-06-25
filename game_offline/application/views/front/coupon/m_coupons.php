<?php
include_once APPPATH . "views/front/template/m_top.php";
?>

				<div class="container heading-style-5">
                    <h4 class="heading-title">쿠폰</h4>
                    <i class="fa fa-bank heading-icon"></i>
                    <div class="line bg-black"></div>
                </div>
                
                <div class="container no-bottom">
                	

                    <h4>Your Coupon List</h4>
                    <p class="info">고객님께 발급된 쿠폰 리스트 입니다. 원하시는 게임에서 현찰처럼 사용하세요.</p>

					<div class="table-responsive" id ="coupon_list">       
					   <!-- 쿠폰 발금 내역 컨테이너-->
							<table class="table mb-none">
						        <tr height="30px">
						            <!-- <th>#</th> -->
						            <!-- <th>종류</th> -->
						            <th>쿠폰</th>
						            <th class="text-right">금액</th>
						            <!-- <th class="text-right">Use Date</th> -->
						            <th class="text-right">등록일</th>
						            <th class="text-right">사용</th>
						        </tr>
						    	<tbody>
						    <?php foreach($rows as $row):?>
						        <?php if ($row ->  coupon_use_status == COUPON_USE_STATUS_NOT_USED):?>
						        <tr>                                            
						            <!-- <td><?= $row -> coupon_no?></td> -->
						            <!-- <td><?= $row-> coupon_type_name?>(<?= $row -> coupon_type_code?>)</td> -->
						            <td><?= $row-> coupon_des?></td>
						            <td class="text-right tblue">
						               <strong><?= number_format($row -> coupon_point)?></strong>
						            </td>
						            <!-- <td class="text-right"><small> - </small></td> -->
						            <td class="text-right"><small><?= time_to_string($row -> reg_date)?></small></td>
						            <td class="text-right">
						                <?php if(MG_ENABLE == 'Y'):?>
                                        <a onclick ="changeCouponStatus('<?= $row -> coupon_no?>','<?= COUPON_USE_STATUS_USED?>','<?=VENDER_MG?>')" class="facebook-color social-ball">MG</a>
                                        <?php endif;?>
                                        
						                <?php if(PT_ENABLE == 'Y'):?>
						                <a onclick ="changeCouponStatus('<?= $row -> coupon_no?>','<?= COUPON_USE_STATUS_USED?>','<?=VENDER_PT?>')" class="facebook-color social-ball">PT</a>
						                <?php endif;?>
						                
						               
						            </td>
						        </tr>
						 		</tbody>
						       <?php endif;?>                                            
						    <?php endforeach;?>
							</table>          
							
							                          
					</div><!-- // table-responsive -->
							   


            	</div>

 <script >
    function changeCouponStatus(cn,cs,v){
        var url = "<?= site_url('coupons/change_coupon_status')?>";
        var param = {target_status : cs, coupon: cn, transfer_to:v};
        $.post(url,param, function(data){
            if (data.result == 'success'){
                alert('요청이 성공적으로 이루어 졌습니다.');
                location.reload();
            }else {
                 alert(data.message);
            }
         },
        'json');
    }
    

</script>

<?php
    include_once APPPATH . "views/front/template/m_footer.php";
 ?>