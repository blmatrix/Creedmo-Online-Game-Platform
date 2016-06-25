<form   action = "<?= site_url('admin/settings/form/game_banner/'.$request_type); ?>" target = "hiddenframe" 
        id = "add_banner_form" method = "post" enctype="multipart/form-data">
	<div class="modal-header header-primary">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title">Add Banner</h4>
	</div>
	<div class="modal-body">

		<div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label" for="event_title">Banner Title</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name = "banner_title" id="banner_title" value ="">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label" for="event_content">Banner Description</label>
				<div class="col-md-8">
					<textarea class="form-control" rows="3" name = "banner_des" id = "banner_des" ></textarea>
				</div>
			</div>

			 <div class="form-group" style ="display:none">
                <label class="col-md-3 control-label" for="event_content">Url Input & Drag </label>
                <div class="col-md-8">
                   <input type="text" class="form-control" name = "banner_url" id="banner_url" value ="">
                </div>
            </div>
            
			<div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault">Banner Image</label>
				<div class="col-md-8">
					<button type="button" id="game_banner_select" class ="btn btn-success" name = "game_banner_select">
						Select Banner
					</button>
                     &nbsp;<small> (Only a JPG, GIF, PNG file can be uploaded)</small>
                 </br>
                    <strong><span style ="padding:4px;margin-top:20px" id ="banner_info" ></span></strong>
                    </p>
					<input style ="display:none" type ="file" id ="banner_file" name ="banner_file"/>
				</div>
			</div>
            
			<div class="form-group">
                <label class="col-md-3 control-label">Banner Preview</label>
                <div class="col-md-8" id ="banner_preview">
                </div>
            </div>
			</br></br>
		</div>
	
		<div class="clearfix"></div>

	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" id ="add_banner" value = "Add Banner"/>
		<button type="button" class="btn btn-default" data-dismiss="modal">
			Close
		</button>

	</div>
</form>

<script>

$(document).ready(function() {
        $('#game_banner_select').click(function() {
            $('#banner_file').trigger('click');
        });

        $('#banner_file').change(function() {
            previewImage( 
                document.getElementById('banner_file'),
                'banner_preview'
            );
            $('#prev_banner_preview').load(function(){
                showImageSize(
                    document.getElementById('prev_banner_preview'),
                    '#banner_info'
                );    
            });
            
        });
});

function showImageSize(img,e){
    var width, height;
    if(img.naturalWidth){
        width = img.naturalWidth;
        height = img.naturalHeight;
    } else {
        var tImg = new Image();
        tImg.src = img.src;
        width = tImg.width;
        height = tImg.height;
    }
   
    imgSizeStr = width + " x " + height;
    $(e).text(imgSizeStr);  
} 
 /*
 * 로컬 이미지 미리 보기 chrome 및 IE 동시 지원
 * 
 * targetObj : Input file 박스 previewId : 이미지를 보여줄 Element
 */
function previewImage(targetObj, previewId) {
    var preview = document.getElementById(previewId);
    var ua = window.navigator.userAgent;
    var IMG_FORMAT = "\.(gif|jpg|jpeg|png)$"; // 파일 확장자 검사
    if (!(new RegExp(IMG_FORMAT, "i")).test(targetObj.value)) {
        alert("이미지 파일만 첨부하실 수 있습니다. ");
        targetObj.focus();
        targetObj.value = "";
        return false;
    }

    if (ua.indexOf("MSIE") > -1) {// ie일때
        targetObj.select();

        try {
            var prevImg = document.getElementById("prev_" + previewId);
            // 미리보기태그삭제
            if (prevImg) {
                preview.removeChild(prevImg);
            }

            var src = document.selection.createRange().text;
            var img = document.getElementById(previewId);

            img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"
                    + src + "', sizingMethod='scale')";
            // 이미지 로딩, sizingMethod는 div에 맞춰서 사이즈를 자동조절 하는 역할
        } catch (e) {
            var info = document.createElement("<p>");
            info.innerHTML = "미리보기를 할 수 없습니다.";
            preview.insertBefore(info, null);
        }
    } else { // ie가 아닐때
        var files = targetObj.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType))
                continue;

            var prevImg = document.getElementById("prev_" + previewId);
            // 미리보기태그삭제
            if (prevImg) {
                preview.removeChild(prevImg);
            }

            var img = document.createElement("img");
            // 크롬은 div에 이미지가 뿌려지지 않는다. 그래서 자식Element(IMG)를 만든다.
            img.id = "prev_" + previewId;
            img.classList.add("obj");
            img.file = file;
            //img.style.width = '232px'; // div 사이즈와 맞게 IMG 태그 속성 변경
            //img.style.height = '133px';
            preview.appendChild(img);

            if (window.FileReader) { // FireFox, Chrome, Opera
                var reader = new FileReader();
                reader.onloadend = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            } else { // safari- safari is not supported FileReader
                var info = document.createElement("<p>");
                info.innerHTML = "not supported preview";
                preview.insertBefore(info, null);
            }

        }
    }
}
	
</script>