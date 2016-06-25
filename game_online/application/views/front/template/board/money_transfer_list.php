<?php if (count($rows)> 0):?>
    There is no Monery transfer !!
<?php else:?>    
<table class="table mb-none">
    <thead>
        <tr height="30px">
            <th>#</th>
            <th>Type</th>
            <th>From</th>
            <th></th>
            <th>To</th>
            <th class="text-right"><?= lang('amount') ?></th>
            <th class="text-right"><?= lang('date') ?></th>
            <th class="text-right"><?= lang('status') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rows as $row):?>
        <tr>
            <td>69</td>
            <td>Transfer</td>
            <td>
               <strong><?= lang('e_wallet') ?></strong>
            </td>
            <td><i class="flaticon-right208"></i></td>
            <td>
               <strong>MG Casino</strong>
            </td>
            <td class="text-right tblue">
                <strong>2,100</strong>
            </td>
            <td class="text-right"><small>2015-11-02 02:00:30</small></td>
            <td class="text-right"><span class="complete">success</span></td>
        </tr>
     <?php endforeach;?>
        <tr>
            <td>69</td>
            <td>Transfer</td>
            <td>
               <strong>MG Casino</strong>
            </td>
            <td><i class="flaticon-right208"></i></td>
            <td>
               <strong><?= lang('e_wallet') ?></strong>
            </td>
            <td class="text-right tblue">
                <strong>100</strong>
            </td>
            <td class="text-right"><small>2015-11-02 02:00:30</small></td>
            <td class="text-right"><span class="complete">success</span></td>
        </tr>   

    </tbody>
</table>                 
<?php endif;?>            