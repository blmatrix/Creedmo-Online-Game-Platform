

/*
 * Array 및 Object dump function
 */

function dump(arr, level) {
	var dumped_text = "";
	if (!level)
		level = 0;

	// The padding given at the beginning of the line.
	var level_padding = "";
	for (var j = 0; j < level + 1; j++)
		level_padding += "    ";

	if (typeof (arr) == 'object') {// Array/Hashes/Objects
		for ( var item in arr) {
			var value = arr[item];

			if (typeof (value) == 'object') {// If it is an array,
				dumped_text += level_padding + "'" + item + "' ...\n";
				dumped_text += dump(value, level + 1);
			} else {
				dumped_text += level_padding + "'" + item + "' => \"" + value
						+ "\"\n";
			}
		}
	} else {// Stings/Chars/Numbers etc.
		dumped_text = "===>" + arr + "<===(" + typeof (arr) + ")";
	}
	return dumped_text;
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
			img.style.width = '232px'; // div 사이즈와 맞게 IMG 태그 속성 변경
			img.style.height = '133px';
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