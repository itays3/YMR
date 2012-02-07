<?php error_reporting(E_ERROR|E_WARNING);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<link rel="stylesheet" type="text/css" href="../bar.css" />

</head>

<body>

<? 
$rank = 1;
$exp = 130;
$temp = 200;
if ($exp >= 200) 
{
$rank++;
$exp = 0;
}

?>
<div class="move">
<div class="rtl"><? echo "<font color='#000099' style='font-size:20px'>"."&nbsp;"."דרגה"." ".$rank ?>

</div>
	<div class="progress-bar blue stripes">
    	<span style="width:<?php echo $exp; ?>px"> </span>
	</div>
<? echo "<font color='#000000' style='font-size:16px;'>" .$exp .'/' .$temp  ?> <br />
<a href="#" style="color:#000; text-decoration:none; font-size:13px;">&nbsp; הצג פרטים</a>
    </div>
<div class="work" align="left">
<p style="color:#000099; font-size:20px; text-decoration:underline;" align="right">שעורי בית</p>
<p style="color:#F00; font-size:24px" align="center">יש לך שעורי בית</p>

<a href="#" style="color:#000; text-decoration:none; font-size:13px;">הצג פרטים&nbsp;&nbsp;</a>

</div>

</body>
</html>