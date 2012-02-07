function Ajax(){
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}

xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
		document.getElementById('sidebar2').innerHTML=xmlHttp.responseText;
		setTimeout('Ajax()',10000);
	}
}
xmlHttp.open("GET","../3rdgrade/homework.php",true);
xmlHttp.send(null);
}

window.onload=function(){
	setTimeout('Ajax()',10);
}
