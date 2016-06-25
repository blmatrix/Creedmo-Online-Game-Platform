<?php if (count($rows) >= 1  ) :?>
 <table class="table mb-none">
    <thead>
        <tr height="30px">
            <th>#</th>
            <th>종류</th>
            <th>상세</th>
            <th class="text-right">금액</th>
            <!-- <th class="text-right">Use Date</th> -->
            <th class="text-right">등록일</th>
            <th class="text-right">사용</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rows as $row):?>
        <?php if ($row ->  coupon_use_status = COUPON_USE_STATUS_NOT_USED):?>
        <tr>                                            
            <td><?= $row -> coupon_no?></td>
            <td><?= $row-> coupon_type_name?>(<?= $row -> coupon_type_code?>)</td>
            <td><?= $row-> coupon_des?></td>
            <td class="text-right tblue">
               <strong><?= number_format($row -> coupon_point)?></strong>
            </td>
            <!-- <td class="text-right"><small> - </small></td> -->
            <td class="text-right"><small><?= time_to_string($row -> reg_date)?></small></td>
            <td class="text-right">
             
                 <?php if(PT_ENABLE == 'Y'):?>
                <button style ="margin-left:5px" onclick ="changeCouponStatus('<?= $row -> coupon_no?>','<?= COUPON_USE_STATUS_USED?>','<?=VENDER_PT?>')" type="button" class="button_small bluerightbtn">
                    <i class="flaticon-check19"></i> PT
                </button>
                <?php endif;?>
                
                <?php if(MG_ENABLE == 'Y'):?>
                <button onclick ="changeCouponStatus('<?= $row -> coupon_no?>','<?= COUPON_USE_STATUS_USED?>','<?=VENDER_MG?>')" type="button" class="button_small bluerightbtn">
                    <i class="flaticon-check19"></i> MG
                </button>
                <?php endif;?>
            </td>
        </tr>
 </tbody>
       <?php endif;?>                                            
    <?php endforeach;?>
</table>       
<?= $pagination -> getPageAjax()?>  
<?php else:?>
    No data available                                       
<?php endif;?>                                       