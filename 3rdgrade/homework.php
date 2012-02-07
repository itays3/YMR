<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../database.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style2.css" />
<link rel="stylesheet" type="text/css" href="../index.css" />
<link rel="stylesheet" type="text/css" href="../bar.css" />

<script type="text/javascript" language="javascript" src="../script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
	<script type="text/javascript" src="../functions/scroll/slimScroll.js"></script>
    <script type="text/javascript" src="../functions/scroll/scroll.js"></script>
	<script type="text/javascript" src="../js/reload_div.js"></script>
    <script src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
 <script>
var auto_refresh = setInterval(
function()
{
$('.sidebar2').fadeOut('slow').load('personal_rank.php').fadeIn("slow");
}, 5000);
</script>
<title>Youth Mathematic Revolution</title>
<? 
		session_start();
		$username = $_SESSION['username'];
			if ($_SESSION['username']);
			else
			die("You must be logged in!");
			$result = mysql_query("SELECT * from students WHERE username='$username'");
			while($row = mysql_fetch_array($result))
			{
				$premition = $row['premition'];
				$name = $row['name'];
			}
?>
</head>

<body onload="menuSlider.init('menu','slide')">

<div class="container" dir="rtl">

<div class="header" dir="rtl">
<div class="menu" dir="ltr">
    <ul id="menu" dir="ltr">
        <li><a href="homework/statistics.php">סטטיסטיקה</a></li>
        <li ><a href="../build.php">שאלות למורה</a></li>
        <li><a href="../build.php">פורום</a></li>
        <li><a href="../build.php">חומר עזר</a></li>
        <? if ($premition=='1'){?>
        <li><a href="classwork1.php">תרגילי כיתה</a></li> 
		<? }?>
        <? if ($premition!='1'){?>
        <li><a href="main_classwork.php">תרגילי כיתה</a></li> 
		<? }?>
        <li value="1"><a href="homework.php">תרגילי בית</a></li>
    </ul>
    <div id="slide"></div>
</div>
  
<div class="top">

<FORM METHOD="LINK" action="#" dir="rtl">
<INPUT  TYPE="image" SRC="../images/main.png" HEIGHT="40%" WIDTH="50%" BORDER="0" ALT="חיבור" >
</FORM>
 </div>
    <!-- end .header --></div>

<!-------------------------------------------------------->

<div class="sidebar1">

    
    <table><tr><td><?
			$result = mysql_query("SELECT * from students WHERE username='$username'");
			while($row = mysql_fetch_array($result))
			{
				echo " ברוך הבא,";
				echo  $name;
				if ($row['grade']!='c')
				die;
			}
			?>
         </td></tr></table>
         <div id="test1a">
       <ul class="nav" dir="rtl">      
 
	    <li>&nbsp; תרגילי בית</li>
    	<li><a href="homework/plus.php" >&nbsp;חיבור</a></li>
    	<li><a href="homework/minus.php">&nbsp;חיסור</a></li>
	    <li><a href="homework/kefel.php">&nbsp;כפל</a></li>
	    <li><a href="homework/hiluk.php">&nbsp;חילוק</a></li>
		<li><a href="homework/geo.php">&nbsp;גאומטריה</a></li>
        <li><a href="homework/sdarot.php">&nbsp;סדרות</a></li>
    	<li><a href="homework/equal.php">&nbsp;שיוויון ואי שיוויון</a></li>
	    <li><a href="homework/verbal.php">&nbsp;בעיות מילוליות</a></li>
		<li><a href="homework/gimatria.php">&nbsp;גימטריה</a></li>

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



    <!-- end .content --></div>
 <!-------------------------------------------------------->        

	<div class="sidebar2" >

<? include('personal_rank.php'); ?>


</div>
<!-- end .sidebar2 -->

<!-------------------------------------------------------->
  <div class="footer">
    <p style="color:#FFF">כל הזכויות שמורות. אין להעתיק את תוכן האתר או חלק ממנו</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>