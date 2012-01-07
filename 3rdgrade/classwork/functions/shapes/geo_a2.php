<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3200cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">זוויות - רמה קלה</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#ff0000;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p> 
<div class="canvas1">
<canvas id="myCanvas"  width="600" height="277" style="background-image:url(../../../images/angle.jpg); background-repeat:no-repeat; background-size:460px 277px; background-position:center; "  >
Your browser does not support the canvas element.
</canvas>
</div>
<script type="text/javascript">

var rand=Math.floor(Math.random()*5) // choose random nuber for the shapes
while (rand==0){
var rand=Math.floor(Math.random()*5)
}

//document.write(rand);

if (rand==1){
var num1=Math.floor(Math.random()*180)*(-1)
while (num1>0){
var num1=Math.floor(Math.random()*180)*(-1)	
}
var num2=Math.floor(Math.random()*180)*(-1)
while (num2>0){
var num2=Math.floor(Math.random()*180)*(-1)	
}
document.write("<p>זוית כהה</p>");
// Tringle
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");

cxt.moveTo(200,70);
cxt.lineTo(70,70);
cxt.lineTo(num2,num1);
cxt.lineWidth = 3;
cxt.stroke();
}

if (rand==2){
var num1=Math.floor(Math.random()*89)
while (num1>0){
var num1=Math.floor(Math.random()*89)
}
var num2=Math.floor(Math.random()*89)
while (num2<0){
var num2=Math.floor(Math.random()*89)	
}
document.write("<p>זוית ישרה</p>");
// Tringle
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");

cxt.moveTo(200,70);
cxt.lineTo(70,70);

cxt.lineTo(70,0);
cxt.lineWidth = 3;
cxt.stroke();
}

if (rand==3){
var num1=Math.floor(Math.random()*70)
while (num1<0){
var num1=Math.floor(Math.random()*89)
}
var num2=Math.floor(Math.random()*89)
while (num2<0){
var num2=Math.floor(Math.random()*89)	
}
document.write("<p>זוית חדה</p>");
// Tringle
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");

cxt.moveTo(200,70);
cxt.lineTo(70,70);
cxt.lineTo(200,num1);
cxt.lineWidth = 3;
cxt.stroke();
}

if (rand==4){
var num1=Math.floor(Math.random()*89)
while (num1>0){
var num1=Math.floor(Math.random()*89)
}
var num2=Math.floor(Math.random()*89)
while (num2<0){
var num2=Math.floor(Math.random()*89)	
}
document.write("<p>זוית שטוחה</p>");
// Tringle
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");

cxt.moveTo(200,70);
cxt.lineTo(-200,70);
cxt.lineWidth = 3;
cxt.stroke();
}

document.write("<p>"+ counter +"</p>");

</script>

<form action="geo_a1.php" method="get" name="frm">
<input name="submit" type="submit" />
<? echo $_GET['rand'];?>
</form>

</body>
</html>