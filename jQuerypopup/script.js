$(function() {
	
var popup = false;

$("#button").click(function(){
	if(popup == false){
		$("#overlayEffect").fadeIn("slow");
		$("#popupContainer").fadeIn("slow");
		$("#close").fadeIn("slow");
	    center();
		popup = true;
	}	
	});
	
	$("#close").click(function(){
		hidePopup();
	});
	
	$("#overlayEffect").click(function(){
		hidePopup();
	});
	
function center(){
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContainer").height();
	var popupWidth = $("#popupContainer").width();
	$("#popupContainer").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	
	}
function hidePopup(){
	if(popup==true){
		$("#overlayEffect").fadeOut("slow");
		$("#popupContainer").fadeOut("slow");
		$("#close").fadeOut("slow");
		popup = false;
	}
}

} ,jQuery);


