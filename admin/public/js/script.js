$(document).ready(function(){
	var url = window.location.href;
	if (url.toLowerCase().indexOf("formpoi") >= 0){
		$('#nav-poi').addClass('active');
	}
	if (url.toLowerCase().indexOf("formaction") >= 0){
		$('#nav-action').addClass('active');
	}
	if (url.toLowerCase().indexOf("formicon") >= 0){
		$('#nav-icon').addClass('active');
	}
	$('#nav-poi').click(function(){
		$( "#confirm-icon" ).dialog({
	        resizable: false,
	        height:200,
	        modal: true,
	        buttons: {
		        "Oui": function() {
		            window.location.replace("/../../views/formicon.php?action=ajouter&redirect=poi");
		        },
		        "Non": function() {
		            window.location.replace("/../../views/formpoi.php?action=ajouter");
		        }
	        }
	    });
	});

});