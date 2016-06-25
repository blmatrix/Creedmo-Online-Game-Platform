<form action = "<?= $action ?>"  method = "POST"  target = "hiddenframe" >
<div class="modal-header header-primary">
    <input type ="hidden" name = "board_no" value = "<?= !empty($board_no)? $board_no:''?>" >
    <input type ="hidden" name = "board_category_no" value = "<?= !empty($board)? $board -> board_category_no:''?>" >
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title"><?= $form_title?></h4>
</div>
<div class="modal-body">
    <div class="col-md-12">
        <fieldset>
             <?php if (!empty($board_type)):?>
             <div class="form-group">
                <label class=" col-md-3 control-label">Category</label>
                <div class="col-lg-8">
                    <select id="board_category_no" name ="board_category_no" class="form-control">
                        <option value = "1" <?php if ($board_type == '1'):?> selected <?php endif;?>>User Notice</option>
                        <option value = "2" <?php if ($board_type == '2'):?> selected <?php endif;?>>Admin Notice<option>
                    </select>
                </div>
            </div>
            <?php endif;?>
            <div class="form-group">
                <label class="col-md-3 control-label"><span class="required">*</span>Title(en)</label>
                <div class="col-md-8">
                    <div class="input-group input-group-icon">
                        <span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
                        <input type="text" class="form-control" placeholder="title" id ="board_title_en" name = "board_title_en" value = "<?= !empty($board) ? $board-> board_title_en:''?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-md-3 control-label">Content(en)</label>
                <div class="col-lg-8">
                    <div class="input-group mb-md">
                        <textarea class="form-control input-sm" rows ='5' cols=70 id = "board_content_en" name = "board_content_en"><?= !empty($board) ? $board-> board_content_en:''?></textarea>
                    </div>
                </div>
            </div>
               <div class="form-group">
                <label class="col-md-3 control-label"><span class="required">*</span>Title(zh)</label>
                <div class="col-md-8">
                    <div class="input-group input-group-icon">
                        <span class="input-group-addon"> <span class="icon"><i class="fa fa-user"></i></span> </span>
                        <input type="text" class="form-control" placeholder="title" id ="board_title_zh" name = "board_title_zh" value = "<?= !empty($board) ? $board-> board_title_zh:''?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-md-3 control-label">Content(zh)</label>
                <div class="col-lg-8">
                    <div class="input-group mb-md">
                        <textarea class="form-control input-sm" rows ='5' cols=70 id = "board_content_zh" name = "board_content_zh"><?= !empty($board) ? $board-> board_title_zh:''?></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="clearfix"></div>
</div>
<div class="modal-footer">
    <input type="submit" class="btn btn-primary" value ="<?= $submit_title?>">
    <button type="button" class="btn btn-default" data-dismiss="modal">
        Close
    </button>
</div>
</div>
</form>
