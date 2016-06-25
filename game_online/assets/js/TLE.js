function FormChecker(checkForm) {
	this.checkForm = checkForm;
	this.validatorList = new Array();
}
FormChecker.prototype.checkRequired = function(fieldName, errorMessage, focus) {
	this.validatorList.push(new RequiredValidator(this.checkForm, fieldName, errorMessage, focus));
}

FormChecker.prototype.checkEqual = function(fieldName,fieldName2, errorMessage, focus) {
	this.validatorList.push(new EqualValidator(this.checkForm, fieldName, fieldName2,errorMessage, focus));
}

FormChecker.prototype.checkMaxLength = function(fieldName, maxLength, errorMessage, focus) {
	this.validatorList.push(new MaxLengthValidator(this.checkForm, fieldName, maxLength, errorMessage, focus));
}
FormChecker.prototype.checkMaxLengthByte = function(fieldName, maxLength, errorMessage, focus) {
	this.validatorList.push(new MaxLengthByteValidator(this.checkForm, fieldName, maxLength, errorMessage, focus));
}

FormChecker.prototype.checkMinLength = function(fieldName, minLength, errorMessage, focus) {
	this.validatorList.push(new MinLengthValidator(this.checkForm, fieldName, minLength, errorMessage, focus));
}
FormChecker.prototype.checkMinLengthByte = function(fieldName, minLength, errorMessage, focus) {
	this.validatorList.push(new MinLengthByteValidator(this.checkForm, fieldName, minLength, errorMessage, focus));
}

FormChecker.prototype.checkRegex = function(fieldName, regex, errorMessage, focus) {
	this.validatorList.push(
		new RegexValidator(this.checkForm, fieldName, regex, errorMessage, focus));
}

FormChecker.prototype.checkAlphaNum = function(fieldName, errorMessage, focus) {
	this.validatorList.push(
		new RegexValidator(this.checkForm, fieldName, 
			/^[a-zA-Z0-9]+$/, errorMessage, focus));
}

FormChecker.prototype.checkOnlyNumber = function(fieldName, errorMessage, focus) {
	this.validatorList.push(
		new RegexValidator(this.checkForm, fieldName, 
			/^[0-9]+$/, errorMessage, focus));
}

FormChecker.prototype.checkDecimal = function(fieldName, errorMessage, focus) {
	this.validatorList.push(
		new RegexValidator(this.checkForm, fieldName, 
			/^(\-)?[0-9]*(\.[0-9]*)?$/, errorMessage, focus));
}

FormChecker.prototype.checkEmail = function(fieldName, errorMessage, focus) {
	this.validatorList.push(
		new RegexValidator(this.checkForm, fieldName, 
			/^((\w|[\-\.])+)@((\w|[\-\.])+)\.([A-Za-z]+)$/, errorMessage, focus));
}

FormChecker.prototype.checkSelected = function(fieldName, firstIdx, errorMessage, focus) {
	this.validatorList.push(new SelectionValidator(this.checkForm, fieldName, firstIdx, errorMessage, focus));
}

FormChecker.prototype.checkAtLeastOneChecked = function(fieldName, errorMessage, focus) {
	this.validatorList.push(new AtLeastOneCheckValidator(this.checkForm, fieldName, errorMessage, focus));
}

FormChecker.prototype.validate = function() {
	for (vali = 0 ; vali < this.validatorList.length ; vali ++ ) {
		validator = this.validatorList[vali];
		if (validator.validate() == false) {
			alert(validator.getErrorMessage());
			if (validator.isFocus() == true) {
				this.checkForm[validator.getFieldName()].focus();
			}
			return false;
		}
	}
	return true;
}

FormChecker.prototype.getForm = function() {
	return this.checkForm;
}


// Validator is base class of all validators
function Vaildator() {
}
Vaildator.prototype.getFieldName = function() {
	return this.fieldName;
}
Vaildator.prototype.getErrorMessage = function() {
	return this.errorMessage;
}
Vaildator.prototype.isFocus = function() {
	return this.focus;
}

// required validator
function RequiredValidator(form, fieldName, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.errorMessage = errorMessage;
	this.focus = focus;
}
RequiredValidator.prototype = new Vaildator;
RequiredValidator.prototype.validate = function() {
	return this.form[this.fieldName].value != '';
}

// max length validator
function MaxLengthValidator(form, fieldName, maxLength, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.errorMessage = errorMessage;
	this.focus = focus;
	this.maxLength = maxLength;
}
MaxLengthValidator.prototype = new Vaildator;
MaxLengthValidator.prototype.validate = function() {
	return this.form[this.fieldName].value.length <= this.maxLength;
}

// max length(byte) validator
function MaxLengthByteValidator(form, fieldName, maxLength, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.errorMessage = errorMessage;
	this.focus = focus;
	this.maxLength = maxLength;
}
MaxLengthByteValidator.prototype = new Vaildator;
MaxLengthByteValidator.prototype.validate = function() {
	str = this.form[this.fieldName].value;
	return(str.length+(escape(str)+"%u").match(/%u/g).length-1) <= this.maxLength;
}

// min length validator
function MinLengthValidator(form, fieldName, minLength, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.errorMessage = errorMessage;
	this.focus = focus;
	this.minLength = minLength;
}
MinLengthValidator.prototype = new Vaildator;
MinLengthValidator.prototype.validate = function() {
	return this.form[this.fieldName].value.length >= this.minLength;
}

// min length(byte) validator
function MinLengthByteValidator(form, fieldName, minLength, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.errorMessage = errorMessage;
	this.focus = focus;
	this.minLength = minLength;
}
MinLengthByteValidator.prototype = new Vaildator;
MinLengthByteValidator.prototype.validate = function() {
	str = this.form[this.fieldName].value;
	return(str.length+(escape(str)+"%u").match(/%u/g).length-1) >= this.minLength;
}

// regex pattern validator
function RegexValidator(form, fieldName, regex, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.regex = regex;
	this.errorMessage = errorMessage;
	this.focus = focus;
}
RegexValidator.prototype = new Vaildator;
RegexValidator.prototype.validate = function() {
	var str = this.form[this.fieldName].value;
	if (str.length == 0) return true;
	return str.search(this.regex) != -1;
}

// check selected
function SelectionValidator(form, fieldName, firstIdx, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.firstIdx = firstIdx;
	this.errorMessage = errorMessage;
	this.focus = focus;
}
SelectionValidator.prototype = new Vaildator;
SelectionValidator.prototype.validate = function() {
	var idx = this.form[this.fieldName].selectedIndex;
	return idx >= this.firstIdx;
}

// check checkbox checked
function AtLeastOneCheckValidator(form, fieldName, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.errorMessage = errorMessage;
	this.focus = focus;
}
AtLeastOneCheckValidator.prototype = new Vaildator;
AtLeastOneCheckValidator.prototype.validate = function() {
	ele = this.form[this.fieldName];
	if (typeof(ele[0]) != "undefined") {
		// 2~
		for (var idxe = 0 ; idxe < ele.length ; idxe++) {
			if (ele[idxe].checked == true) {
				return true;
			}
		}
		return false;
	} else {
		// only 1
		return ele.checked == true;
	}
}

//Equal 
function EqualValidator(form, fieldName, fieldName2, errorMessage, focus) {
	this.form = form;
	this.fieldName = fieldName;
	this.errorMessage = errorMessage;
	this.focus = focus;
	this.fieldName2 = fieldName2;
}
EqualValidator.prototype = new Vaildator;
EqualValidator.prototype.validate = function() {
	var value1 = this.form[this.fieldName].value;
	var value2 = this.form[this.fieldName2].value;
	return value1 == value2;
}
