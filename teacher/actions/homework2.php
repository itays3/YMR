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
<br />



<?php 

$query="SELECT * FROM homework";
$result=mysql_query($query);
$num=mysql_numrows($result);

 mysql_close($con); 
?>

<?php
$i=0;
while ($i < $num) {
	
$plus1=mysql_result($result,$i,"plus1");
$plus2=mysql_result($result,$i,"plus2");
$plus3=mysql_result($result,$i,"plus3");
$plus4=mysql_result($result,$i,"plus4");
$plus5=mysql_result($result,$i,"plus5");
$plus6=mysql_result($result,$i,"plus6");
$plus7=mysql_result($result,$i,"plus7");
$plus8=mysql_result($result,$i,"plus8");
$grade_num=mysql_result($result,$i,"grade_num");
$grade=mysql_result($result,$i,"grade");
if ($grade=='a')
$grade='א';
?>
<table border="0"  cellpadding="2">
<tr><td style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;"><? echo "שעורי בית עבור כיתה ", $grade, $grade_num;?></td></tr>
<tr align="center"><td><font face="Arial, Helvetica, sans-serif" style="font-family:Cursive;font-size:24px">הנושא</td><td style="font-family:Cursive;font-size:24px">מספר תרגילים</td></font></tr>
<tr align="center">
<?php if ($plus1!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור עד 100</td>
<td><? echo $plus1 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus2!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור עד 200</td>
<td><? echo $plus2 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus3!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור בעשרות עד 1000</td>
<td><? echo $plus3 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus4!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור בשרשרת עד 200</td>
<td><? echo $plus4 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus5!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור בשרשרת עד 1000</td>
<td><? echo $plus5 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus6!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור במאורנך - רמה קלה</td>
<td><? echo $plus6 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus7!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור במאונך - רמה בינונית</td>
<td><? echo $plus7 ?></td>
<? }?></font></tr>
<tr align="center">
<?php if ($plus8!=0) {  ?>
<td><font face="Arial, Helvetica, sans-serif">חיבור במאונך רמה קשה</td>
<td><? echo $plus8 ?></td>
<? }?></font></tr>
<?php 
$i++;
}


?>
</table>
</div>
</body>
</html>