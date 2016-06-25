
    <table class="table mb-none">
        <thead>
            <tr height="30px">
                <th>#</th>
                <th>Level</th>
                <th class="text-right">콤프포인트</th>
                <th class="text-right">전환율</th>
                <th class="text-right">전환 금액</th>
                <th class="text-right">전환 게임</th>
                <th class="text-right">Date</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($rows as $row):?>                                            
             <tr>
                 <td><?= $row -> comp_point_convert_no?></td>
                 <td><img src="<?=base_url('assets/'); ?>/images/<?=strtolower($row -> user_level_code_name)?>-star-icon.png" width="20"> <?= $row -> user_level_code_name?> </td>
                 <td class="text-right tred"><strong><?= number_format($row -> convert_comp_point,0)?></strong> </td>
                 <td class="text-right"><b><?= $row -> convert_rate?>:1</b></td>
                 <td class="text-right tblue"><strong><?=number_format($row -> convert_money,0)?> 원</strong> </td>
                 <td class="text-right"><strong><?=$row -> transfer_to == VENDER_MG ?'MG':'PT'?></strong> </td>
                 <td class="text-right"><small><?= time_to_string($row -> reg_date)?></small></td>
             </tr>                                        
<?php endforeach;?> 
             <tr><td colspan="6"></td></tr>                                  
         </tbody>
     </table>   
       <?= $pagination -> getPageAjax()?>                                  
