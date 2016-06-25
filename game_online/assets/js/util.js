function trim(str) {
	return str.replace(/(^\s*)|(\s*$)/gi, "");
}

function alertAndclearElement(m,el){
    alert(m);
    el.val('');
    el.focus();
}