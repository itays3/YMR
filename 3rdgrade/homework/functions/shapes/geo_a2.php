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
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">מהי הזווית?</h1>
<div class="canvas1">
<canvas id="myCanvas"  width="600" height="170"  >
Your browser does not support the canvas element.
</canvas>
</div>
<? $answer1=rand(1,2); ?>
<script type="text/javascript">
choose = <?php echo $answer1; ?>;

if (choose ==1)
{
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
var num2=Math.floor(Math.random()*500)
while (num2>100){
var num2=Math.floor(Math.random()*500)	
}
cxt.moveTo(300,100);	// top line
cxt.lineTo(405,100);

cxt.moveTo(405,num2); // buttom line
cxt.lineTo(300,num2);
cxt.lineWidth = 3;
cxt.strokeStyle = "#0000ff";
cxt.stroke();
}
if (choose ==2)
{
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
var num2=Math.floor(Math.random()*500)
while (num2<305){
var num2=Math.floor(Math.random()*500)	
}
cxt.moveTo(300,100);  // left line
cxt.lineTo(300,160);

cxt.moveTo(num2,160); // right line
cxt.lineTo(num2,100);
cxt.lineWidth = 3;
cxt.strokeStyle = "#0000ff";
cxt.stroke();
}
</script>

<form action="geo_a2.php" method="POST" name="frm" dir="rtl">
<input name="last_answer1" type="hidden" value="<?= $answer1?>" />
<input name="btn1" type="radio" value="" /><label>צלעות מקבילות</label><br />
<input name="btn2" type="radio" value="" /><label>צלעות אנכיות</label><br />
<input name="btn3" type="radio" value="" /><label></label><br />
<input name="btn4" type="radio" value="" /><label></label><br />
<input name="submit" type="submit" value="בדוק"/>
</form>

</body>
</html>