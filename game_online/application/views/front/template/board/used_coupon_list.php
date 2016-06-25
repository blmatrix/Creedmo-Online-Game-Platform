 <?php if (count($rows)>=1):?>
 <table class="table mb-none">
     <thead>
         <tr height="30px">
             <th>#</th>
             <th>Type</th>
             <<th>Level</th>
             <th class="text-right">Amount</th>
             <th class="text-right">Date</th>
             <th class="text-right">Apply Date</th>
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
              <td class="text-right"><small><?= time_to_string($row -> reg_date)?></small></td>
              <td class="text-right"><i class="flaticon-check19"></i> <small><?= time_to_string($row -> use_date)?></small></td>
          </tr>
    <?php endif;?>                                            
<?php endforeach;?>                                             
    </tbody>
</table>  
<?= $pagination -> getPageAjax()?>
<?php else:?>
    No data  
<?php endif;?>  