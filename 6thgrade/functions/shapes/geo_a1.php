<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">מרובעים - רמה קלה</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#ff0000;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
<canvas id="myCanvas" width="200" height="100" >
Your browser does not support the canvas element.
</canvas>

<canvas id="myCanvas1" width="200" height="100" >
Your browser does not support the canvas element.
</canvas>

<script type="text/javascript">

var rand=Math.floor(Math.random()*3) // choose random nuber for the shapes
while (rand==0){
var rand=Math.floor(Math.random()*3)
}
//document.write(rand);

if (rand==2){
var num1=Math.floor(Math.random()*180)
while (num1<30){
var num1=Math.floor(Math.random()*180)	
}
//document.write("<p>" + num1 + "</p>");

// Tringle
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
cxt.moveTo(10,10);
cxt.lineTo(num1,70);
cxt.lineTo(10,70);
cxt.lineTo(10,10);
cxt.stroke();
}
</script>


<script type="text/javascript">
var num2=Math.floor(Math.random()*180)
while (num2<30){
var num2=Math.floor(Math.random()*180)	
}
var c=document.getElementById("myCanvas1");
var cxt=c.getContext("2d");

if (rand==1){
// square
cxt.moveTo(10,10);	// top line
cxt.lineTo(num2,10);

cxt.moveTo(10,10);  // left line
cxt.lineTo(10,70);

cxt.moveTo(num2,70); // buttom line
cxt.lineTo(10,70);

cxt.moveTo(num2,70); // right line
cxt.lineTo(num2,10);
var x=(num2-10) / 10;
var x1=Math.round(x*1)/1
var y=6;

cxt.strokeText(x1, num2/2, 10);
cxt.strokeText(y, num2, 40);
cxt.stroke();
}

</script>
   
</body>
</html>