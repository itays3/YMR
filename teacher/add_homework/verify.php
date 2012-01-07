<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../database.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../../style2.css" />
<link rel="stylesheet" type="text/css" href="../../index.css" />
<link rel="stylesheet" type="text/css" href="../style/inc.css" />
<script type="text/javascript" language="javascript" src="../../script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
	<script type="text/javascript" src="../../functions/scroll/slimScroll.js"></script>
    <script type="text/javascript" src="../../functions/scroll/scroll.js"></script>
<title>Youth Mathematic Revolution</title>
<? sleep(1); ?>
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

<FORM METHOD="LINK" action="../teacher.php" dir="rtl">
<INPUT  TYPE="image" SRC="../../images/main.png" HEIGHT="40%" WIDTH="50%" BORDER="0" ALT="חיבור" >
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
			$result = mysql_query("SELECT * FROM teachers WHERE username='$username'");
			while($row = mysql_fetch_array($result))
			{
				echo " WELCOME, ";
				echo  $row['username'];
			}
			?>
         </td></tr></table>
         <div id="test1a">
       <ul class="nav" dir="rtl">      
 
	    <li>&nbsp;הוספת שיעורי בית</li>
    	<li><a href="add_homework/homework1.php" target="Mainframe">&nbsp;כיתה א</a></li>
        <li><a href="add_homework/homework2.php" target="Mainframe">&nbsp;כיתה ב</a></li>
        <li><a href="add_homework/homework3.php" target="Mainframe">&nbsp;כיתה ג</a></li>
	    <li><a href="add_homework/homework4.php" target="Mainframe">&nbsp;כיתה ד</a></li>
	    <li><a href="add_homework/homework5.php" target="Mainframe">&nbsp;כיתה ה</a></li>
		<li><a href="add_homework/homework6.php" target="Mainframe">&nbsp;כיתה ו</a></li>

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
<INPUT  TYPE="image" SRC="../../images/logo.png" HEIGHT="15%" WIDTH="15%" BORDER="0" >
</FORM>

</div>
<div class="inc">
<?

 
$query = "SELECT * FROM homework WHERE username='$username' && id=(SELECT MAX(id) FROM homework)"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	$grade_number=$row['grade_num'];
	$check = $row['grade'];
}
if ($check =='a'){
include("home_v1.php"); 
}
if ($check =='b'){
include("home_v2.php"); 
}
if ($check =='c'){
include("home_v3.php"); 
}
if ($check =='d'){
include("home_v4.php"); 
}
if ($check =='e'){
include("home_v5.php"); 
}
if ($check =='f'){
include("home_v6.php"); 
}
?>
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