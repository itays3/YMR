<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("database.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="indexs.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
<script src="js/plus.js"></script>
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script>
	<script src="js/popup.js" type="text/javascript"></script>

</head>

<div class="container" >
<div class="header" dir="rtl">

   <?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
?>
     <table align="center" dir="rtl" >
<tr>
<td>
<FORM name="main" METHOD="post" action="main.php" dir="rtl">
<button type="submit"><img SRC="images/main.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="חיבור" ></button>
</FORM>
</td>
<td>
<FORM name="san1" METHOD="post" ACTION="sandbox.php" dir="rtl" >
<button type="submit"> <img SRC="images/kefel20.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="חיבור"></button>
</FORM>
</td>
<td>
<FORM name="san2" METHOD="post" ACTION="sandbox.php" dir="rtl">
<button type="submit"> <img SRC="images/kefel30.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="חיסור"></button>
</FORM>
</td>

</tr>
  </table>
    <!-- end .header --></div>
 <!-------------------------------------------------------->
  <div class="sidebar1" dir="rtl">
    <ul class="nav" dir="rtl">
	    <li>תרגילי בית</li>
    	<li><a href="#">תרגילי כיתה</a></li>
    	<li><a href="#">חומר עזר</a></li>
	    <li><a href="#">פורום</a></li>
	    <li><a href="#">שאלות למורה</a></li>
		<li><a href="#">תרגול אקראי</a></li>
		<li><a href="grades/first grade/games.php">משחקים</a></li>
        <li><a href="#">סטטיסטיקה אישית</a></li>
		<li><a href="#">סטטיסטיקה כיתתית</a></li>
		<li><a href="#">סטטיסטיקה ארצית</a></li>

    </ul>
     <p></p>

<!-- end .sidebar1 --></div>

<!-------------------------------------------------------->
    
  <div class="content">
      
	<?php if($x==1)
	include("k.php");
?>  
    <canvas id="myCanvas" width="200" height="100" >
Your browser does not support the canvas element.
</canvas>

<script type="text/javascript">
var num1=Math.floor(Math.random()*180)
while (num1<30){
var num1=Math.floor(Math.random()*180)	
}
//document.write("<p>" + num1 + "</p>");

var c=document.getElementById("myCanvas");

var cxt=c.getContext("2d");
cxt.moveTo(10,10);
cxt.lineTo(num1,70);
cxt.lineTo(10,70);
cxt.lineTo(10,10);
cxt.stroke();

</script>
<canvas id="myCanvas1" width="200" height="100" >
Your browser does not support the canvas element.
</canvas>

<script type="text/javascript">
var num2=Math.floor(Math.random()*180)
while (num2<30){
var num2=Math.floor(Math.random()*180)	
}
var c=document.getElementById("myCanvas1");
var cxt=c.getContext("2d");
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
cxt.font= '50px';
cxt.strokeText(x1, num2/2, 10);
cxt.strokeText(y, num2, 40);
cxt.stroke();


</script>
<table align="right"><tr><td></td></tr></table>
<!-- end .content --></div>


 <!-------------------------------------------------------->        
	<div class="sidebar2">
        <ul class="nav" dir="rtl">
		<li><?
			if ($_SESSION['username']);
			else
			die("You must be logged in!");
			
			$result = mysql_query("SELECT name from students");
			while($row = mysql_fetch_array($result))
			{
				echo " ברוך הבא,";
				echo  $row['name'];
			}
			?>
         </li>
         <li>
         <?
			$result = mysql_query("SELECT grade from grades WHERE grade='א'");
			while($row = mysql_fetch_array($result))
			{
				
				echo "     הנך בכיתה, ";
				echo  $row['grade'];
			}
			$result = mysql_query("SELECT number from grade_num WHERE number='4'");
			while($row = mysql_fetch_array($result))
			{
				
				echo  $row['number'];
			}
			?>
			
            
		</li>
		
    </ul>
    
    <p></p>
<!-- end .sidebar2 --></div>

<!-------------------------------------------------------->
  <div class="footer">
    <p>כל הזכויות שמורות. אין להעתיק את תוכן האתר או חלק ממנו</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>