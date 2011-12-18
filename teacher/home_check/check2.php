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
<div id='fg_membersite'>


<div class='container'>
<form id='check' action='check2.php' method='post'>
    <label for='name' >מספר כיתה: </label><br/>
    <select name="level" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>מתוגברת</option><option>טיפולית</option></select>
    <input type="submit" name="submit3" value="חפש"/>
    <span id='register_name_errorloc' class='error'></span>


</form>

</div>
<?php
if (isset($_POST['level']))
{
	$level=$_POST['level'];
}
else
{
	$level=1;
}

$que = mysql_query("SELECT * FROM homework WHERE grade_num='$level' && grade='a'");
while($row = mysql_fetch_array($que))
{	
	$plus1 = $row['plus1'];
	
}

?>
<table border="0"  cellpadding="2">
<tr bgcolor="#999999">
<th><font face="Arial, Helvetica, sans-serif">מס"ד</font></th>
<th><font face="Arial, Helvetica, sans-serif">שם מלא</font></th>
<th><font face="Arial, Helvetica, sans-serif">כיתה</font></th>
<th><font face="Arial, Helvetica, sans-serif">מספר כיתה</font></th>
<th><font face="Arial, Helvetica, sans-serif">סיים / לא סיים</font></th>
</tr>

<?php 
$query = "SELECT * FROM connect WHERE  grade_num=$level && grade='ב' ORDER BY s_id"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
	
	$id=$row['s_id'];		
	$name=$row['name'];
	$grade_num=$row['grade_num'];
	$grade=$row['grade'];
	$fplus1=$row['plus1'];

	if ($grade=='ב' && $grade_num==$level )
	{ ?>
	<tr><td><font face="Arial, Helvetica, sans-serif"><?php echo $id; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $name; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $grade; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $grade_num; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php if ($fplus1>=$plus1) echo 'סיים'; else 	echo 'לא סיים';?></font></td>
     </tr></table>
<?	}
	
}
	



mysql_close($con); 
 ?>
</div>
</body>
</html>














