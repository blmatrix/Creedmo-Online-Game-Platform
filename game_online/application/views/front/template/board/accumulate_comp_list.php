<div class="table-responsive">                              
<table class="table mb-none">
    <thead>
        <tr height="30px">
            <th>Date</th>
            <th class="text-right">Slot</th>
            <th class="text-right">Non-Slot</th>
            <th class="text-right">Live</th>
            <th class="text-right">Comp Point</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($rows as  $row): ?>                                             
       <tr>
           <td><small><?=$row -> period ?></small></td>
           <td class="text-right tblue">
              <strong><?= number_format($row -> slot_total, 2) ?></strong>
           </td>
           <td class="text-right tblue">
              <strong><?= number_format($row -> non_slot_total, 2) ?></strong>
           </td>
           <td class="text-right tblue">
              <strong><?= number_format($row -> live_total, 2) ?></strong>
           </td>
           <td class="text-right"><strong><?= number_format($row -> total_comp_point, 2) ?>P</strong></td>
       </tr>
<?php endforeach; ?>                                 
        </tbody>
          <tr><td colspan="5"></td></tr>   
    </table> 
    
    <?= $pagination -> getPageAjax()?>                                   
</div>