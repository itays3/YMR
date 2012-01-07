<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />

<title>MySQL-based Search Engine</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">

window.onload=function(){

if(document.getElementById&&document.
getElementsByTagName&&document.createElement){

var sfield=document.getElementsByTagName('form')[0].elements[0];

if(!sfield){return};

sfield.onfocus=function(){this.value=''};

sfield.onblur=function(){

if(!this.value){this.value='Enter your search term here'};

}

}

}

</script>

</head>

<body>

<h1>MySQL-based Search Engine</h1>

<div class="maincontainer">

<form method="get" action="processform.php">

<input type="text" name="searchterm" title="Enter your search
term here" value="Enter your search term here"
class="searchbox" />

<input type="submit" name="search" title="Search Now!
"value="Search" class="searchbutton" />

</form>

</div>

</body>

</html>