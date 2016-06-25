
<select id="bank_account_no" name ="bank_account_no" class="form-control"  >
 <?php foreach($bank_accounts as $bank_account):?>
	<option value ="<?= $bank_account -> bank_account_no?>" >
	    <?= $bank_account -> bank_country?> - <?= $bank_account -> bank_name?> - <?= $bank_account -> bank_branch?>  -<?= $bank_account -> bank_account?> 
</option>
<?php endforeach;?>	
</select>