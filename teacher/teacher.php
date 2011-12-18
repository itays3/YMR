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

<FORM METHOD="LINK" action="#" dir="rtl">
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
 
	    <li>&nbsp; תפריט ראשי</li>
    	<li><a href="register.php">&nbsp;הוספת תלמיד למערכת</a></li>
        <li><a href="update.php">&nbsp;עדכון פרטי תלמיד</a></li>
        <li><a href="posts.php" >&nbsp;כתיבת הודעות</a></li>
        <li><a href="homework.php">&nbsp;הוספת שיעורי בית</a></li>
	    <li><a href="home_check.php">&nbsp;בדיקת שעורי בית</a></li>
	    <li><a href="actions/test.php" target="Mainframe">&nbsp;הכנת מבחן</a></li>


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

<FORM METHOD="LINK" ACTION="../1stgrade/homework.php" dir="rtl">
<INPUT  TYPE="image" SRC="../images/logo.png" HEIGHT="15%" WIDTH="15%" BORDER="0" >
</FORM>

</div>
<div class="inc">
<iframe name="Mainframe" frameborder="0" width="690px" height="500px"></iframe>
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