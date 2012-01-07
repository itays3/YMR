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
<form id='check' action='check5.php' method='post'>
    <label for='name' >מספר כיתה: </label><br/>
    <select name="level" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>מתוגברת</option><option>טיפולית</option></select>
    <input type="submit" name="submit3" value="חפש"/>
    <span id='register_name_errorloc' class='error'></span>
</form>

</div>
<?php
if (!empty($_POST['level']))
{
	$level=$_POST['level'];
}
else
{
	$level=1;
}
	

$que = "SELECT * FROM homework WHERE grade_num='$level' && grade='e'";
$result = mysql_query($que) or die(mysql_error());
while($row = mysql_fetch_array($result))
{	

$a[5] = $row['plus_a1']; $a[6] = $row['plus_a2']; $a[7] = $row['plus_a3']; $a[8] = $row['plus_b1']; $a[9]= $row['plus_b2'];
$a[10] = $row['plus_b3']; $a[11] = $row['plus_c1']; $a[12] = $row['plus_c2']; $a[13] = $row['plus_c3']; $a[14]= $row['plus_d1'];
$a[15] = $row['plus_d2']; $a[16] = $row['plus_d3']; $a[17] = $row['plus_e1']; $a[18] = $row['plus_e2']; $a[19]= $row['plus_e3'];
$a[20] = $row['plus_v1']; $a[21] = $row['plus_v2']; $a[22] = $row['plus_v3'];

$a[23] = $row['minus_a1']; $a[24] = $row['minus_a2']; $a[25] = $row['minus_a3']; $a[26] = $row['minus_b1']; $a[27]= $row['minus_b2'];
$a[28] = $row['minus_b3']; $a[29] = $row['minus_c1']; $a[30] = $row['minus_c2']; $a[31] = $row['minus_c3']; $a[32]= $row['minus_d1'];
$a[33] = $row['minus_d2']; $a[34] = $row['minus_d3']; $a[35] = $row['minus_e1']; $a[36] = $row['minus_e2']; $a[37]= $row['minus_e3'];
$a[38] = $row['minus_v1']; $a[39] = $row['minus_v2']; $a[40] = $row['minus_v3'];

	
	/*$plus_a1 = $row['plus_a1'];
	$plus_a2 = $row['plus_a2'];
	$plus_a3 = $row['plus_a3'];
	$plus_b1 = $row['plus_b1'];
	$plus_b2 = $row['plus_b2'];
	$plus_b3 = $row['plus_b3'];
	$plus_c1 = $row['plus_c1'];
	$plus_c2 = $row['plus_c2'];
	$plus_c3 = $row['plus_c3'];
	$plus_d1 = $row['plus_d1'];
	$plus_d2 = $row['plus_d2'];
	$plus_d3 = $row['plus_d3'];
	$plus_e1 = $row['plus_e1'];
	$plus_e2 = $row['plus_e2'];
	$plus_e3 = $row['plus_e3'];
	$plus_v1 = $row['plus_v1'];
	$plus_v2 = $row['plus_v2'];
	$plus_v3 = $row['plus_v3'];*/

$total1=0;
for($k=5;$k<41;$k++)
{
	$total1 = $total1 + $a[$k];
}}
if (empty($total1)){
$total1=0;
}


?>
<p style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">
<? echo "כיתה" ," " ,"ה"," ", $level ?>
<table border="0"  cellpadding="2">
<tr bgcolor="#999999">
<th><font face="Arial, Helvetica, sans-serif">מס"ד</font></th>
<th><font face="Arial, Helvetica, sans-serif">שם מלא</font></th>
<th><font face="Arial, Helvetica, sans-serif">סיים / לא סיים</font></th>
</tr>

<?php $j=1;  
$query = "SELECT * FROM connect WHERE grade_num='$level' && grade='ה' ORDER BY s_id"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result))
{
	$id=$row['s_id']; $name=$row['name']; $grade_num=$row['grade_num']; $grade=$row['grade'];
	//$fplus_a1=$row['plus_a1'];
  	$i=5;
	$total2=0;
	
	while ($i < mysql_num_fields($result))
	
	{
		$field_name=mysql_fetch_field($result, $i);
		$total2 = $total2+$row[$i];
		$i++;
	}
	
	 ?>
	<tr><td><font face="Arial, Helvetica, sans-serif"><?php echo $j; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php echo $name; ?></font></td>
    <td><font face="Arial, Helvetica, sans-serif"><?php if ($total2>=$total1 && $total1!=0) echo 'סיים';
	if ($total1==0) echo 'לא ניתנו שיעורים' ;else 	echo 'לא סיים';?></font></td><td><a href="#">פירוט</a></td>
     </tr>
<?	$j++;
}
	
mysql_close($con); 
?>
</table>
</div>
</body>
</html>
