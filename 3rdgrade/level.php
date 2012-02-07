<?php error_reporting(E_ERROR|E_WARNING);?>

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
if ($total9!=0)
{
	$t9 = intval($counter_yes9/$total9 * 100);
}
else
	$t9=0;
if ($total10!=0)
{
	$t10 = intval($counter_yes10/$total10 * 100);
}
else
	$t10=0;
if ($total11!=0)
{
	$t11 = intval($counter_yes11/$total11 * 100);
}
else
	$t11=0;
if ($total12!=0)
{
	$t12 = intval($counter_yes12/$total12 * 100);
}
else
	$t12=0;
if ($total13!=0)
{
	$t13 = intval($counter_yes13/$total13 * 100);
}
else
	$t13=0;
if ($total14!=0)
{
	$t14 = intval($counter_yes14/$total14 * 100);
}
else
	$t14=0;
if ($total15!=0)
{
	$t15 = intval($counter_yes15/$total15 * 100);
}
else
	$t15=0;
if ($total16!=0)
{
	$t16 = intval($counter_yes16/$total16 * 100);
}
else
	$t16=0;
if ($total17!=0)
{
	$t17 = intval($counter_yes17/$total17 * 100);
}
else
	$t17=0;
if ($total18!=0)
{
	$t18 = intval($counter_yes18/$total18 * 100);
}
else
	$t18=0;

$result = mysql_query("UPDATE total_st SET plus_a1='$t1' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_a2='$t2' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_a3='$t3' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_b1='$t4' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_b2='$t5' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_b3='$t6' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_c1='$t7' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_c2='$t8' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_c3='$t9' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_d1='$t10' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_d2='$t11' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_d3='$t12' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_e1='$t13' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_e2='$t14' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_e3='$t15' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_v1='$t16' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_v2='$t17' WHERE s_id='$s_id'");
$result = mysql_query("UPDATE total_st SET plus_v2='$t18' WHERE s_id='$s_id'");
?>
</body>
</html>