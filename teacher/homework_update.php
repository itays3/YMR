<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../database.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style2.css" />
<link rel="stylesheet" type="text/css" href="../index.css" />
<link rel="stylesheet" type="text/css" href="style/teacher.css" />
<script type="text/javascript" language="javascript" src="../script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
	<script type="text/javascript" src="../functions/scroll/slimScroll.js"></script>
    <script type="text/javascript" src="../functions/scroll/scroll.js"></script>
<title>Youth Mathematic Revolution</title>

</head>

<body onload="menuSlider.init('menu','slide')">

<div class="container" dir="rtl">

<div class="header" dir="rtl">
<div class="menu" dir="ltr">
    <ul id="menu" dir="ltr">
        <li><a href="#">סטטיסטיקה</a></li>
        <li ><a href="#">שאלות למורה</a></li>
        <li><a href="#">פורום</a></li>
        <li><a href="#">חומר עזר</a></li>
        <li><a href="#">תרגילי כיתה</a></li>
        <li value="1"><a href="#">תרגילי בית</a></li>
    </ul>
    <div id="slide"></div>
</div>
  
<div class="top">

<FORM METHOD="LINK" action="teacher.php" dir="rtl">
<INPUT  TYPE="image" SRC="../images/main.png" HEIGHT="40%" WIDTH="50%" BORDER="0" ALT="חיבור" >
</FORM>
 </div>
    <!-- end .header --></div>

<!-------------------------------------------------------->

<div class="sidebar1">

    
    <table><tr><td align="center"><?
		session_start();
		$username = $_SESSION['username'];
			if ($_SESSION['username']);
			else
			die("You must be logged in!");
			$result = mysql_query("SELECT * from teachers WHERE username='$username'");
			while($row = mysql_fetch_array($result))
			{
				echo " Welcome, ";
				echo  $row['username'];
			}
			?>
         </td></tr></table>
         <div id="test1a">
       <ul class="nav" dir="rtl">      
 
	    <li>&nbsp; הוספת תלמידים</li>
    	<li><a href="actions/homework1.php" target="Mainframe">&nbsp;כיתה א</a></li>
        <li><a href="#" target="Mainframe">&nbsp;כיתה ב</a></li>
        <li><a href="#" target="Mainframe">&nbsp;כיתה ג</a></li>
	    <li><a href="#" target="Mainframe">&nbsp;כיתה ד</a></li>
	    <li><a href="#" target="Mainframe">&nbsp;כיתה ה</a></li>
		<li><a href="#" target="Mainframe">&nbsp;כיתה ו</a></li>

    </ul>
	
</div>

<!-- end .sidebar1 --></div>


<!-------------------------------------------------------->
    
  <div class="content">
<!---
<div class="next">

<FORM METHOD="LINK" ACTION="" dir="rtl">
<INPUT  TYPE="image" SRC="../images/answer.png" HEIGHT="20%" WIDTH="20%" BORDER="0">
</FORM>

</div> ------->
<div class="back">

<FORM METHOD="LINK" ACTION="" dir="rtl">
<INPUT  TYPE="image" SRC="../images/logo.png" HEIGHT="15%" WIDTH="15%" BORDER="0" >
</FORM>

</div>
<div class="inc1">

<?php 

$query="SELECT * FROM homework";
$result=mysql_query($query);
$num=mysql_numrows($result);

 mysql_close($con); 
?>

<?php
$i=0;
while ($i < $num) {
	
$plus1=mysql_result($result,$i,"plus1");
$plus2=mysql_result($result,$i,"plus2");
$plus3=mysql_result($result,$i,"plus3");
$plus4=mysql_result($result,$i,"plus4");
$plus5=mysql_result($result,$i,"plus5");
$plus6=mysql_result($result,$i,"plus6");
$plus7=mysql_result($result,$i,"plus7");
$plus8=mysql_result($result,$i,"plus8");
$grade_num=mysql_result($result,$i,"grade_num");
$grade=mysql_result($result,$i,"grade");
if ($grade=='a')
$grade='א';
?>
<table border="0"  cellpadding="2">
<tr><td style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;"><? echo " שעורי בית עבור כיתה ", $grade, $grade_num;?></td></tr>
<tr align="center"><td><font face="Arial, Helvetica, sans-serif" style="font-family:Cursive;font-size:24px">הנושא</td><td style="font-family:Cursive;font-size:24px">מספר תרגילים</td></font></tr>
<tr align="center">
<?php if ($plus1!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור עד 100</td>
<td><? echo $plus1 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus2!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור עד 200</td>
<td><? echo $plus2 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus3!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור בעשרות עד 1000</td>
<td><? echo $plus3 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus4!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור בשרשרת עד 200</td>
<td><? echo $plus4 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus5!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור בשרשרת עד 1000</td>
<td><? echo $plus5 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus6!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור במאורנך - רמה קלה</td>
<td><? echo $plus6 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus7!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור במאונך - רמה בינונית</td>
<td><? echo $plus7 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus8!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור במאונך רמה קשה</td>
<td><? echo $plus8 ?></td>
<? }?></font></tr>
<?php 
$i++;
}


?>
</table>
    </div>
    <!-- end .content --></div>
 <!-------------------------------------------------------->        
	<div class="sidebar2">
        <div class="sidebarimg1">

	<br/><br/><br/><br/><br/><br/><br/>
    </div>
    <div class="sidebarimg2">

	<br/><br/><br/><br/><br/><br/><br/>
    </div>        
    <div class="sidebarimg3">

	<br/><br/><br/><br/><br/><br/><br/>
    </div>
<!-- end .sidebar2 --></div>

<!-------------------------------------------------------->
  <div class="footer">
    <p style="color:#FFF">כל הזכויות שמורות. אין להעתיק את תוכן האתר או חלק ממנו</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>