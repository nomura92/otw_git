$.hal = "home";
$.link = window.location.href;
$.mainContent = $("#mainContent");
$.route = "route.php"


'use strict';

function loadPage(url){
	$.ajax({
		type : 'GET',
		url : $.route,
		data : url,
		dataType : 'html',
		cache : false,
		async: false,
		beforeSend : function() {$('#overlay').addClass('show');},
		success : function(html) { $.mainContent.empty();$.mainContent.html(html); global(); },
		error : function() { }
	});
}

$(window).on('load',function(e){
	e.stopPropagation();
	var url = location.hash.replace(/^#!/, '');
	if (url != '') {
		loadPage(url);
	} else {
		loadPage('menu=beranda');
	}
	return false;
});

$(window).on('hashchange', function(e){
	e.stopPropagation();
	var url = location.hash.replace(/^#!/, '');
	if (url != '') {
		loadPage(url);
	} else {
		loadPage('menu=beranda');
	}
});

$(document).ajaxStart(function() { Pace.restart(); });

Pace.on('done', function() {
  $('#overlay').removeClass('show');
});

function global(){
	$('.date-picker').datepicker({
        orientation: "left",
        autoclose: true
    });
}