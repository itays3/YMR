<?php include("../../database.php"); ?>
<?php error_reporting(E_ERROR|E_WARNING);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style/fg_membersite.css" />

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

$grade = 'd';
$query = mysql_query("SELECT * FROM teachers WHERE username='$username'");
while($row = mysql_fetch_array($query))
{
		$school = $row['school'];
}

?>

<div id='fg_membersite'>
<form id='register' action='classwork_d1.php' name="frm" method="post">
<fieldset style="width:400px">
<legend>התחל / סיים תרגול עבור כיתה ד</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='container'>
    <label for='name' >מספר כיתה: </label>
    <select name="grade_num" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>מתוגברת</option><option>טיפולית</option></select>
   <?php $grade_num=$_POST['grade_num'];?>
<select name="start" size="1"><option>התחל תרגול כיתה</option><option>סיים תרגול כיתה</option></select>   
<input type="submit" id='submit'  value='המשך' ;>

</div>

</fieldset>
</form>
<? 
if ($_POST['start']=='התחל תרגול כיתה')
$query = mysql_query("UPDATE students SET premition = '1' WHERE grade='$grade' && grade_num='$grade_num' && school='$school'");
if ($_POST['start']=='סיים תרגול כיתה')
$query = mysql_query("UPDATE students SET premition = '2' WHERE grade='$grade' && grade_num='$grade_num' && school='$school'");
 ?>
</div>
</body>
</html>