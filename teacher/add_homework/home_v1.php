<?php include("../../database.php"); ?>
<?php error_reporting(E_ERROR|E_WARNING);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
</head>
<body dir="rtl">
 <?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
	$username=$_SESSION['username'];



$que = "SELECT * FROM grades WHERE id='1'";
$result = mysql_query($que) or die(mysql_error());

while($row = mysql_fetch_array($result)){
$grade = $row['grade']; $grade_num = $row['grade_num']; 
$a[5] = $row['plus_a1']; $a[6] = $row['plus_a2']; $a[7] = $row['plus_a3']; $a[8] = $row['plus_b1']; $a[9]= $row['plus_b2'];
$a[10] = $row['plus_b3']; $a[11] = $row['plus_c1']; $a[12] = $row['plus_c2']; $a[13] = $row['plus_c3']; $a[14]= $row['plus_d1'];
$a[15] = $row['plus_d2']; $a[16] = $row['plus_d3']; $a[17] = $row['plus_e1']; $a[18] = $row['plus_e2']; $a[19]= $row['plus_e3'];
$a[20] = $row['plus_v1']; $a[21] = $row['plus_v2']; $a[22] = $row['plus_v3'];

$a[23] = $row['minus_a1']; $a[24] = $row['minus_a2']; $a[25] = $row['minus_a3']; $a[26] = $row['minus_b1']; $a[27]= $row['minus_b2'];
$a[28] = $row['minus_b3']; $a[29] = $row['minus_c1']; $a[30] = $row['minus_c2']; $a[31] = $row['minus_c3']; $a[32]= $row['minus_d1'];
$a[33] = $row['minus_d2']; $a[34] = $row['minus_d3']; $a[35] = $row['minus_e1']; $a[36] = $row['minus_e2']; $a[37]= $row['minus_e3'];
$a[38] = $row['minus_v1']; $a[39] = $row['minus_v2']; $a[40] = $row['minus_v3'];  
	
}
?>
<p style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">שיעורי בית לכיתה 
<? echo $grade," ", $grade_number;?></p><br />
<table border="1" cellpadding='3' cellspacing='3'><tr><td width='250px' align="center">הנושא</td><td width='90px' align="center">כמות תרגילים</td><td width='100px' align="center">תאריך הגשה</td></tr></table>
<?
// Print out result
$query = "SELECT * FROM homework WHERE id=(select max(id) from homework) && username='$username'";  
$result = mysql_query($query) or die(mysql_error());

while($thisrow = mysql_fetch_array($result)){
$i=5;
  while ($i < mysql_num_fields($result))
  {
    $field_name=mysql_fetch_field($result, $i);
    if (!empty($thisrow[$i])){
	/* echo $row[$i];*/ echo "<table border='1' cellpadding='3' cellspacing='3'><tr><td width='250px'>" .$a[$i]. "</td><td width='90px' align='center'>" .$thisrow[$i]. "</td><td width='100px' align='center'>".date('d-m-Y', strtotime($thisrow[4]))."</td><td width='40px' align='center'><a href='#' style='color:blue'>ערוך</a></td><td width='40px' align='center'><a href='#' style='color:blue'>מחק</a></td></tr>" ;//Display all the fields on one line
	
	}
    $i++;
  }

}
 echo  "</table>";
?>



</body>
</html>