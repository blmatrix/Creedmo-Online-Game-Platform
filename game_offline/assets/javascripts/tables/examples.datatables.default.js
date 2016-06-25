/*
Name: 			Tables / Advanced - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.4.1
*/

(function( $ ) {

	'use strict';

	var datatableInit = function() {

		$('#datatable-default').dataTable(
				{
					'paging': false,
					'searching':false
					}
				);

	};

	$(function() {
		datatableInit();
	});

}).apply( this, [ jQuery ]);