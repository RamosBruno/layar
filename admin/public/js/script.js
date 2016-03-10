$(document).ready(function(){
	var url = window.location.href;
	if (url.toLowerCase().indexOf("formpoi") >= 0){
		$('#nav-poi').addClass('active');
		$('#nav-action').removeClass('active');
		$('#nav-icon').removeClass('active');
	}
	if (url.toLowerCase().indexOf("formaction") >= 0){
		$('#nav-poi').removeClass('active');
		$('#nav-action').addClass('active');
		$('#nav-icon').removeClass('active');
	}
	if (url.toLowerCase().indexOf("formicon") >= 0){
		$('#nav-poi').removeClass('active');
		$('#nav-action').removeClass('active');
		$('#nav-icon').addClass('active');
	}
});