<script>
	$(document).ready(function() {
		$('#select_file').click(function() {
			$('#userfile').trigger('click');
		});

		$('#userfile').change(function() {
		    var obj = $(this).val();
			var pathpoint =obj.lastIndexOf('.');
			var filepoint = obj.substring(pathpoint + 1, obj.length);
			var filetype = filepoint.toLowerCase();

			if (filetype == 'xls' || filetype == 'xlsx' ) {
			    $('#select_file_name').val($(this).val());
			} else {
				alert(" Excel file only can be uploaded.....Try again");
			}
			
		});
		
		  $('.vender').change(function() {
            $('#vender').val($(":input:radio[name=sample]:checked").val());
            
        });

	}); 
</script>

<form  target ="hiddenframe" action = "<?= site_url('admin/settings/game_list'); ?>"  id = "excel_upload__form" method = "post" enctype="multipart/form-data">
	
	<input type = "file" name ="userfile" id = "userfile" style="display:none;"/>
	<input type = "hidden" id = "upload_type" name ="upload_type" value ="excel"/>
	<input type = "hidden" id = "vender" name ="vender" value ="PT" />
	
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Game Upload batch </h4>
	</div>
	<div class="modal-body">
		<div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault">Uplod File(.xls)</label>
				<div class="col-md-7">
					<input type="text" class="form-control" id ="select_file_name" readonly="true">
					 </br>
					<div >
                        <input id="pt_radio" name="vender" class ="vender" type="radio" value ="PT" checked="checked"/>
                   
                        <label for="pt_radio">Play Teck</label>
                        &nbsp;&nbsp;&nbsp;
                         <input id="mg_radio" name="vender" class ="vender"  type="radio" value ="MG"/>
                        <label for="mg_radio">Micro game</label>
                    </div>
					<small> you can only upload a excel file with extension 'xls , xlsx'</small>
				</div>
				<div class="col-md-1">
					<button type="button" id = "select_file" class="btn btn-primary" >
						Select
					</button>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" id ="upload_excel_btn" value = "Upload"/>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Cancel
		</button>
	</div>
</form>