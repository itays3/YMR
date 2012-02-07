<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../database.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style2.css" />
<link rel="stylesheet" type="text/css" href="../index.css" />

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
        <li><a href="statistics.php">סטטיסטיקה</a></li>
        <li ><a href="teacher.php">שאלות למורה</a></li>
        <li><a href="forum.php">פורום</a></li>
        <li><a href="help.php">חומר עזר</a></li>
        <li><a href="classwork.php">תרגילי כיתה</a></li>
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
		session_start();
		$username = $_SESSION['username'];
			if ($_SESSION['username']);
			else
			die("You must be logged in!");
			$result = mysql_query("SELECT * from students WHERE username='$username'");
			while($row = mysql_fetch_array($result))
			{
				echo " ברוך הבא,";
				echo  $row['name'];
			}
			?>
         </td></tr></table>
         <div id="test1a">
       <ul class="nav" dir="rtl">      
 
	    <li>&nbsp; תרגילי בית</li>
    	<li><a href="plus.php" >&nbsp;חיבור</a></li>
    	<li><a href="minus.php">&nbsp;חיסור</a></li>
	    <li><a href="kefel.php">&nbsp;כפל</a></li>
	    <li><a href="hiluk.php">&nbsp;חילוק</a></li>
		<li><a href="geo.php">&nbsp;גאומטריה</a></li>
        <li><a href="sdarot.php">&nbsp;סדרות</a></li>
    	<li><a href="equal.php">&nbsp;שיוויון ואי שיוויון</a></li>
	    <li><a href="verbal.php">&nbsp;בעיות מילוליות</a></li>


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
<div class="inc">
<iframe name="Mainframe" frameborder="1" width="500px" height="300px"></iframe>
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