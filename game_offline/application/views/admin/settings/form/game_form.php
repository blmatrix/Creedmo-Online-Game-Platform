<form action = "<?= site_url('admin/settings/form/game/'.$request_type); ?>"  target = "hiddenframe" id = "add_game_form" method = "post">
    <input type = "hidden" name = "request_no" value = "<?= $request_type == 'modify'? $game->game_no:''?>"/>
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Add Game</h4>
	</div>
	<div class="modal-body">

		<div class="col-xs-4">
			<label for="input-gray-base">Vender</label>
			<select class="form-control" name = "vender_no">
<?php foreach($venders as $vender):?>			 
				<option value = "<?= $vender->vender_no?>"><?= $vender->vender_name?></option>
<?php endforeach;?>				
			</select>
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-4">
			<label for="input-gray-base">Category1</label>
			<select class="form-control" name = "game_category1_no">
<?php foreach($game_category1s as $category1):?>			    
				<option value ="<?= $category1->game_category1_no?>"><?= $category1->game_category1_no?> - <?= $category1->game_category1_name?></option>
<?php endforeach;?>
			</select>
		</div>
		<div class="col-xs-4">
			<label for="category2">Category2</label>
			<input id="category2" type="text" value="" class="form-control" name = "game_category2"/>
		</div>
		
		<div class="col-xs-4">
            <label for="category3">Category3</label>
            <input id="category3" type="text" value="" class="form-control" name = "game_category3"/>
        </div>
        
		<div class="col-xs-4">
			<label for="subcategory">Sub Category</label>
			<input id="subcategory" type="text" value=""  class="form-control" name = "game+sub_category"/>
		</div>
		<div class="clearfix"></div>

		<div class="col-xs-4">
			<label for="gamename">Game Name</label>
			<input id="gamename" type="text" value="" class="form-control" name = "game_name_en"/>
		</div>
		<div class="col-xs-4">
			<label for="gamenamezh">Game Name(zh)</label>
			<input id="gamenamezh" type="text" value="" class="form-control" name = "game_name_zh"/>
		</div>
		<div class="col-xs-4">
			<label for="gamecode">Game Code</label>
			<input id="gamecode" type="text" value=""  class="form-control" name = "game_code"/>
		</div>
		<div class="clearfix"></div>

		<div class="col-xs-4">
			<label for="Count">Count</label>
			<input id="Count" type="text" value="0" class="form-control" name = "count"/>
		</div>
		<div class="col-xs-4">
			<label for="html5">HTML5</label>
			<select id="html5" class="form-control" name ="html5">
				<option value = "1">Yes</option>
				<option value = "2">No</option>
			</select>
		</div>
		<div class="col-xs-4">
			<label for="newgame">NEW</label>
			<select id="newgame" class="form-control" name = "game_status">
				<option value = "1" >New Game</option>
				<option value = "2" >Old Game</option>
			</select>
		</div>
		<div class="clearfix"></div>

		<div class="col-xs-8">
			<label for="imgurl">IMG URL</label>
			<input id="imgurl" type="text" value="" class="form-control" name = "game_image1"/>
		</div>
		
		<div class="col-xs-8">
            <label for="imgurl">IMG URL2</label>
            <input id="imgurl" type="text" value="" class="form-control" name = "game_image2"/>
        </div>
        
		<div class="col-xs-4 ">
			<label for="gameservice">Service On/Off</label>
			<select id="gameservice" class="form-control" name = "service_status">
				<option value = "1" >Off</option>
				<option value = "2" >On</option>
			</select>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" id ="add_game" value = "Save changes"/>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
	</div>
</form>