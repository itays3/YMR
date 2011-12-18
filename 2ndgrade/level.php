<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Untitled Document</title>
</head>

<body>

<?php 
if ($total1!=0){
	$t1 = intval($counter_yes1/$total1 * 100);
} 
else
	$t1 = 0;
if ($total2!=0){
	$t2 = intval($counter_yes2/$total2 * 100);
}
else 
	$t2=0;
if ($total3!=0)
{
	$t3 = intval($counter_yes3/$total3 * 100);
}
else
	$t3=0;
if ($total4!=0)
{
	$t4 = intval($counter_yes4/$total4 * 100);
}
else 
	$t4=0;
if ($total5!=0)
{
	$t5 = intval($counter_yes5/$total5 * 100);
}
else
	$t5=0;
if ($total6!=0)
{
	$t6 = intval($counter_yes6/$total6 * 100);
}
else
	$t6=0;
if ($total7!=0)
{
	$t7 = intval($counter_yes7/$total7 * 100);
}
else 
	$t7=0;
if ($total8!=0)
{
	$t8 = intval($counter_yes8/$total8 * 100);
}
else
	$t8=0;
$result = mysql_query("UPDATE total_st SET plus1='$t1' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus2='$t2' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus3='$t3' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus4='$t4' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus5='$t5' WHERE s_id='$s_id'");

?>
</body>
</html>