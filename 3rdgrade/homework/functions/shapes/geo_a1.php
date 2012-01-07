<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1155" />
<title>Youth Mathematic Revolution</title>

</head>

<body>
 <h2 dir="rtl">מהי הזווית?</h2>
<div class="canvas1">
<canvas id="myCanvas"  width="600" height="170"  >
Your browser does not support the canvas element.
</canvas>
</div>
<script type="text/javascript">
var choose = Math.floor(Math.random()*9);
while (choose==0)
{
	var choose = Math.floor(Math.random()*9);
}
if (choose ==1)
{
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
	cxt.moveTo(301,138); // buttom line
	cxt.lineTo(500,138);

	cxt.moveTo(303,138); // left line
	cxt.lineTo(303,0);
	cxt.lineWidth = 3;
	cxt.strokeStyle = "#0000ff";
	cxt.stroke();
}

if (choose ==2)
{
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
	cxt.moveTo(301,138); // buttom line
	cxt.lineTo(500,138);

	cxt.moveTo(303,138); // left line
	cxt.lineTo(100,138);
	cxt.lineWidth = 3;
	cxt.strokeStyle = "#0000ff";
	cxt.stroke();
}
if (choose ==3 || choose ==4 || choose ==5)
{
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
	cxt.moveTo(301,138); // buttom line
	cxt.lineTo(500,138);

	cxt.moveTo(303,138); // left line
	cxt.lineTo(140,107);
	cxt.lineWidth = 3;
	cxt.strokeStyle = "#0000ff";
	cxt.stroke();
}
if (choose ==6 || choose ==7 || choose ==8)
{
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
var num1 = Math.floor(Math.random()*108);
var num2 = Math.floor(Math.random()*500);
while (num2<403)
{
	num2 =  Math.floor(Math.random()*500);
}
	cxt.moveTo(301,138); // buttom line
	cxt.lineTo(500,138);

	cxt.moveTo(303,138); // left line
	cxt.lineTo(num2,num1);
	cxt.lineWidth = 3;
	cxt.strokeStyle = "#0000ff";
	cxt.stroke();
}
</script>

<form action="geo_a1.php" method="get" name="frm" dir="rtl">
<input name="btn1" type="radio" value="" /><label>זווית חדה</label><br />
<input name="btn2" type="radio" value="" /><label>זווית כהה</label><br />
<input name="btn3" type="radio" value="" /><label>זווית ישרה</label><br />
<input name="btn4" type="radio" value="" /><label>זווית שטוחה</label><br />
<input name="submit" type="submit" value="בדוק"/>
<? $x = $_GET['num1'];
echo $x;
?>
</form>

</body>
</html>