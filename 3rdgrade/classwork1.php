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
        <li><a href="homework/statistics.php">סטטיסטיקה</a></li>
        <li ><a href="../build.php">שאלות למורה</a></li>
        <li><a href="../build.php">פורום</a></li>
        <li><a href="../build.php">חומר עזר</a></li>
        <li><a href="classwork2.php">תרגילי כיתה</a></li>
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
				if ($row['grade']!='c')
				die;
			}
			?>
         </td></tr></table>
         <div id="test1a">
       <ul class="nav" dir="rtl">      
 
	    <li>&nbsp; תרגילי כיתה</li>
    	<li><a href="#">&nbsp;חיבור</a></li>
    	<li><a href="#">&nbsp;חיסור</a></li>
	    <li><a href="#">&nbsp;כפל</a></li>
	    <li><a href="#">&nbsp;חילוק</a></li>
		<li><a href="#">&nbsp;גאומטריה</a></li>
        <li><a href="#">&nbsp;סדרות</a></li>
    	<li><a href="#">&nbsp;שיוויון ואי שיוויון</a></li>
	    <li><a href="#">&nbsp;בעיות מילוליות</a></li>
		<li><a href="#">&nbsp;גימטריה</a></li>

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

<FORM METHOD="LINK" ACTION="../teacher/teacher.php" dir="rtl">
<INPUT  TYPE="image" SRC="../images/logo.png" HEIGHT="15%" WIDTH="15%" BORDER="0" >
</FORM>

</div>
<div class="inc"  width="500px" height="300px">
<h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">תירגול כיתה</h1>
    <br />

<table><tr><td style="font-family:Cursive;font-size:24px;color:#000000;font-weight:normal;text-shadow:4px 4px 8px black;">1</td>
	<td style="font-family:Cursive;font-size:24px;color:#FF0000;font-weight:normal;text-shadow:4px 4px 8px black;">שם המתרגל/ת:</td>
	<td style="font-family:Cursive;font-size:24px;color:#3300cc;font-weight:normal;text-shadow:4px 4px 8px black;">
<?
 			$result = mysql_query("SELECT * from students WHERE username='$username'");
			while($row = mysql_fetch_array($result))
			{
				$grade_num = $row['grade_num'];
				$grade = $row['grade'];
				$name = $row['name'];
				$username = $row['username'];
				echo $row['name'];
				if ($row['grade']!='c')
				die;
			}  ?>
</td></tr>           
<FORM method="post" action="classwork1.php" dir="ltr"> 
<tr><td style="font-family:Cursive;font-size:24px;color:#000000;font-weight:normal;text-shadow:4px 4px 8px black;">2</td>
<td style="font-family:Cursive;font-size:24px;color:#FF0000;font-weight:normal;text-shadow:4px 4px 8px black;">שם המתרגל/ת:</td>
<td><input name="s_name2" type="text" size="10"/></td></td></tr>
<tr><td style="font-family:Cursive;font-size:24px;color:#000000;font-weight:normal;text-shadow:4px 4px 8px black;">3</td>
<td style="font-family:Cursive;font-size:24px;color:#FF0000;font-weight:normal;text-shadow:4px 4px 8px black;">שם המתרגל/ת:</td>
<td><input name="s_name3" type="text" size="10"/></td></tr></table>
<input type="submit" name="submit" value="הוסף" />

</FORM>


<?
mysql_query("DELETE FROM classwork WHERE  username1 = '$username'");
mysql_query("INSERT INTO classwork (username1, name1, grade, grade_num)
VALUES ('$username', '$name', '$grade', '$grade_num')");

if (!empty($_POST['s_name2'])){
$s_name2 = $_POST['s_name2'];
$result = mysql_query("SELECT * FROM students WHERE name='$s_name2' && grade='$grade' && grade_num=$grade_num ");
			while($row = mysql_fetch_array($result))
			{
				$name2 =  $row['name'];
				$username2 = $row['username'];
			}
}
if (!empty($_POST['s_name3'])){
$s_name3 = $_POST['s_name3'];
$result = mysql_query("SELECT * FROM students WHERE name='$s_name3' && grade='$grade' && grade_num=$grade_num ");
			while($row = mysql_fetch_array($result))
			{
				$name3 =  $row['name'];
				$username3 = $row['username'];
			}
}

mysql_query("UPDATE classwork SET username1='$username',name1='$name',name2='$name2',username2='$username2',name3='$name3',username3='$username3',
grade='$grade',grade_num='$grade_num' WHERE username1 = '$username'");

$couter=0;

if (!empty($name2)){
	$counter++;
}
if (!empty($name3)){
	$counter++;
}
if ($counter == 1){
	echo "<br />";
	echo "<table><tr><td style='font-family:Cursive;font-size:24px;color:#000000;font-weight:normal;text-shadow:4px 4px 8px black;' >הוספת תלמיד אחד</td>";
	echo "<td><form action='classwork2.php'> <input type='submit' name='submit' value='לחץ כאן בכדי להמשיך' style=' width:220px; height:80px; font-size:24px;'  /></form></td></tr></table> ";
}
if ($counter == 2){
	echo "<br />";
	echo "<table><tr><td style='font-family:Cursive;font-size:24px;color:#000000;font-weight:normal;text-shadow:4px 4px 8px black;' >הוספת שני תלמידים</td></tr>";
	echo "<tr><td><form action='classwork2.php'> <input type='submit' name='submit' value='לחץ כאן בכדי להמשיך'  style=' width:220px; height:80px; font-size:24px;' /></form></td></tr></table> ";
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