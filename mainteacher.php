<?php include("database.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
<link REL="SHORTCUT ICON" HREF="logo.ico">
</head>

<body>
<div class="container" dir="rtl">
<div class="header" dir="rtl">
 <?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
?>
<table align="center" >
<tr><td>
<FORM METHOD="LINK" ACTION="plus.php" dir="rtl">
<INPUT  TYPE="image" SRC="images/plus.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="�����" >
</FORM>
</td>
<td>
<FORM METHOD="LINK" ACTION="minus.php" dir="rtl">
<INPUT  TYPE="image" SRC="images/minus.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="�����">
</FORM>
</td>
<td>
<FORM METHOD="LINK" ACTION="kefel.php" dir="rtl">
<INPUT  TYPE="image" SRC="images/kefel.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="���">
</FORM>
</td>
<td>
<FORM METHOD="LINK" ACTION="hiluk.php" dir="rtl">
<INPUT  TYPE="image" SRC="images/hiluk.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="�����">
</FORM>
</td>
<td>
<FORM METHOD="LINK" ACTION="sandbox.php" dir="rtl">
<INPUT  TYPE="image" SRC="images/geometry.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="��������">
</FORM>
</td>
<td>
<FORM METHOD="LINK" ACTION="verbal.php" dir="rtl">
<input  type="image" src="images/miluli.jpg" height="50%" width="70%" border="0" alt="����� ��������" />
</FORM>
</td>
<td>
<FORM METHOD="LINK" ACTION="sdarot.php" dir="rtl">
<INPUT  TYPE="image" SRC="images/sdarot.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="������">
</FORM>
</td>
<td>
<FORM METHOD="LINK" ACTION="equals.php" dir="rtl">
<INPUT  TYPE="image" SRC="images/shivion.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="�����">
</FORM>
</td>
  </table></a> 
    <!-- end .header --></div>
<!-------------------------------------------------------->
  <div class="sidebar1" dir="rtl">
    <ul class="nav" dir="rtl">
	    <li>������ ���</li>
    	<li><a href="#">������ ����</a></li>
    	<li><a href="#">���� ���</a></li>
	    <li><a href="#">�����</a></li>
	    <li><a href="#">����� �����</a></li>
		<li><a href="#">����� �����</a></li>
		<li><a href="grades/first grade/games.php">������</a></li>
        <li><a href="#">��������� �����</a></li>
		<li><a href="#">��������� ������</a></li>
		<li><a href="#">��������� �����</a></li>

    </ul>
     <p></p>

<!-- end .sidebar1 --></div>

<!-------------------------------------------------------->

  <div class="content">
	<h1><font face="david">���� ��� ������ �������</font></h1>
    <h2><font face="david">��� ���� ��� ������ ����. </font></h2>
    <h2><font face="david">������ ����� ���� ����� �� ����� ���� ������ �����</font></h2>


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
				echo " ���� ���,";
				echo  $row['name'];
			}
			?>
         </li>
         <li>
         <?
			$result = mysql_query("SELECT grade from grades WHERE grade='�'");
			while($row = mysql_fetch_array($result))
			{
				
				echo "     ��� �����, ";
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
    <p>�� ������� ������. ��� ������ �� ���� ���� �� ��� ����</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>