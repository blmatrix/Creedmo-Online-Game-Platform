<?php if (count($rows) > 0 ):?>
 <table class="table mb-none">
     <thead>
         <tr height="30px">
             <th>#</th>
             <th>종류</th>
             <<th>Level</th>
             <th class="text-right">금액</th>
             <th class="text-right">게임</th>
             <th class="text-right">Date</th>
             <th class="text-right">사용일</th>
         </tr>
     </thead>
     <tbody>
    <?php foreach($rows as $row):?>
        <?php if ($row ->  coupon_use_status == COUPON_USE_STATUS_USED):?>                                               
          <tr>
              <td><?= $row -> coupon_no?></td>
              <td><?= $row-> coupon_type_name?>(<?= $row -> coupon_type_code?>)</td>
              <td><?= $row-> user_level_code_name?></td>
              <td class="text-right tblue">
                 <strong><?= number_format($row -> coupon_point)?></strong>
              </td>
              <td class="text-right"><small><?= $row -> transfer_to == VENDER_MG ? 'MG' : "PT"?></small></td>
              <td class="text-right"><small><?= time_to_string($row -> reg_date)?></small></td>
              <td class="text-right"><i class="flaticon-check19"></i><small><?= time_to_string($row -> use_date)?></small></td>
          </tr>
        <?php endif;?>                                            
    <?php endforeach;?>                                             
    </tbody>
</table>  
<?= $pagination -> getPageAjax()?>
<?php else:?>
      No data available       
<?php endif;?>  