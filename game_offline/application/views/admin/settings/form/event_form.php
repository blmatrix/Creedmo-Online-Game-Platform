<form action = "<?= site_url('admin/settings/form/event/'.$request_type); ?>"  target = "hiddenframe" id = "add_event_form" method = "post" enctype="multipart/form-data">
	   <input type = "hidden" name = "request_no" value = "<?= $request_type == 'modify'? $event->event_no:''?>">
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Add Event</h4>
	</div>
	<div class="modal-body">

		<div class="col-md-12">

			<div class="form-group">
				<label class="col-md-3 control-label" for="event_title">Event Title</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name = "event_title" id="event_title" value ="<?= $request_type =='modify'? $event->event_title:''?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label" for="event_content">Contents</label>
				<div class="col-md-8">
					<textarea class="form-control" rows="3" name = "event_content" id = "event_content" ><?= $request_type =='modify'? $event->event_content:''?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault">Image</label>
				<div class="col-md-8">
					<input type="file" id="exampleInputFile" name = "event_file" id ="event_file">
					<p class="help-block">
						600 x 400 px
					</p>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label" for="open_direct">Open Direct</label>
				<div class="col-md-8">
					<input type="checkbox" name = "open_direct" id ="open_direct" value = "Y" <?= $request_type =='modify'?( $event->open_direct == 'Y' ? 'checked': '') : ''?>>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Start Date</label>
				<div class="col-md-8">
					<div class="input-group">
						<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
						<input type="text" data-plugin-datepicker class="form-control" name = "start_date" value ="<?= $request_type =='modify'? time_to_string($event->start_date):''?>" >
					</div>
				</div>
			</div>
			
			<div class="form-group">
                <label class="col-md-3 control-label">End Date</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                        <input type="text" data-plugin-datepicker class="form-control" name = "end_date" value ="<?= $request_type =='modify'? time_to_string($event->end_date):''?>" >
                    </div>
                </div>
            </div>

		</div>

		<div class="clearfix"></div>

	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" id ="add_event" value = "Add Event"/>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>
		
	</div>
</form>