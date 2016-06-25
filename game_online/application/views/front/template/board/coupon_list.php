<?php if (count($rows) >= 1  ) :?>
 <table class="table mb-none">
    <thead>
        <tr height="30px">
            <th>#</th>
            <th>Type</th>
            <th>Description</th>
            <th class="text-right">Amount</th>
            <!-- <th class="text-right">Use Date</th> -->
            <th class="text-right">Reg Date</th>
            <th class="text-right">Apply</th>
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
                <button onclick ="changeCouponStatus('<?= $row -> coupon_no?>','<?= COUPON_USE_STATUS_USED?>')" type="button" class="button_small bluerightbtn">
                    <i class="flaticon-check19"></i> Apply Coupon
                </button>
            </td>
        </tr>
 </tbody>
       <?php endif;?>                                            
    <?php endforeach;?>
</table>       
<?= $pagination -> getPageAjax()?>  
<?php else:?>
    No Data                                       
<?php endif;?>                                       