<div class="table-responsive">                              
<table class="table mb-none">
    <thead>
        <tr height="30px">
            <th>Date</th>
            <th class="text-right">슬롯 배팅액</th>
            <th class="text-right">논 슬롯</th>
            <th class="text-right">라이브</th>
            <th class="text-right">콤프포인트</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($rows as  $row): ?>                                             
       <tr>
           <td><small><?=$row -> period ?></small></td>
           <td class="text-right tblue">
              <strong><?= number_format($row -> slot_total, 0) ?></strong>
           </td>
           <td class="text-right tblue">
              <strong><?= number_format($row -> non_slot_total, 0) ?></strong>
           </td>
           <td class="text-right tblue">
              <strong><?= number_format($row -> live_total, 0) ?></strong>
           </td>
           <td class="text-right"><strong><?= number_format($row -> total_comp_point, 0) ?>P</strong></td>
       </tr>
<?php endforeach; ?>                                 
        </tbody>
          <tr><td colspan="5"></td></tr>   
    </table> 
    
    <?= $pagination -> getPageAjax()?>                                   
</div>