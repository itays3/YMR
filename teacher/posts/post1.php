<?php include("../../database.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style/index.css" />
<link rel="stylesheet" type="text/css" href="../style/fg_membersite.css" />

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body dir="rtl">
<form id='check' action='update1.php' method='post'>
    <label for='name' >מספר כיתה: </label><br/>
    <select name="level" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>מתוגברת</option><option>טיפולית</option></select>
    <input type="submit" name="submit3" value="חפש"/>
    <span id='register_name_errorloc' class='error'></span>
</form>

<?php 

if (isset($_POST['level']))
{
	$level=$_POST['level'];
}
else
{
	$level=1;
}

$query="SELECT * FROM students WHERE grade='a' && grade_num='$level' ORDER BY date";
$result=mysql_query($query);
$num=mysql_numrows($result);

 mysql_close($con); 
 ?>
<table border="0"  cellpadding="2">
<tr bgcolor="#999999">
<th><font face="Arial, Helvetica, sans-serif">שם מלא</font></th>
<th><font face="Arial, Helvetica, sans-serif">שם משתמש</font></th>
<th><font face="Arial, Helvetica, sans-serif">סיסמא</font></th>
<th><font face="Arial, Helvetica, sans-serif">כיתה</font></th>
</tr>

<?php
$i=0;
while ($i < $num) {
	
$username=mysql_result($result,$i,"username");
$password=mysql_result($result,$i,"password");
$name=mysql_result($result,$i,"name");
$grade=mysql_result($result,$i,"grade_letter");
$grade_num=mysql_result($result,$i,"grade_num");
?>

<tr align="center">
<td><font face="Arial, Helvetica, sans-serif"><?php echo $name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $username; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $password; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $grade," ", $grade_num; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "<a href='homework.php'> ערוך פרטים </a> "?></font></td>
</tr>

<?php 
$i++;
}


?>
</div>
</body>
</html>