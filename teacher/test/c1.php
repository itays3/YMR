<?php include("../../database.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="assets/show_pic.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body dir="rtl" style="overflow-x:hidden">
<div id="plus">
<table>
<tr>
<td><h2>פעולות חיבור</h2></td>
</tr>
<tr>
<td><p><input name="plus_a1" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none; cursor:text"><? echo $a[5];  ?><span><img src="assets/plus_a1.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_a2" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[6];  ?><span><img src="assets/plus_a2.gif" /></span></a></p></td>
</tr>
<tr>    
<td><p><input name="plus_a3" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[7];  ?><span><img src="assets/plus_a3.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_b1" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[8];  ?><span><img src="assets/plus_b1.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_b2" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[9];  ?><span><img src="assets/plus_b2.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_b3" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[10];  ?><span><img src="assets/plus_b3.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_c1" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[11];  ?><span><img src="assets/plus_c1.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_c2" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[12];  ?><span><img src="assets/plus_c2.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_c3" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[13];  ?><span><img src="assets/plus_c3.gif" /></span></a></p></td>
</tr>
<tr>
<td><p><input name="plus_d1" type="checkbox" value="" /><? echo $a[14];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_d2" type="checkbox" value="" /><? echo $a[15];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_d3" type="checkbox" value="" /><? echo $a[16];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_e1" type="checkbox" value="" /><? echo $a[17];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_e2" type="checkbox" value="" /><? echo $a[18];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_e3" type="checkbox" value="" /><? echo $a[19];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_v1" type="checkbox" value="" /><? echo $a[20];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_v2" type="checkbox" value="" /><? echo $a[21];  ?></p></td>
</tr>
<tr>
<td><p><input name="plus_v3" type="checkbox" value="" /><? echo $a[22];  ?></p></td>
</tr>
<tr><td colspan="4" style="border-bottom: thick solid black;"></td></tr>
</table>
</div>
<div id="minus">
<table><tr>
<td><h2>פעולות חיסור</h2></td>
</tr><tr>
<td><p><input name="minus_a1" type="checkbox" value="" /><a class="thumbnail" href="#thumb" style="color:#000; text-decoration:none;
cursor:text"><? echo $a[23];  ?><span><img src="assets/minus_a1.gif" /></span></a></p></td></tr>
<tr><td><p><input name="minus_a2" type="checkbox" value="" /><? echo $a[24];  ?></p></td></tr>
<tr><td><p><input name="minus_a3" type="checkbox" value="" /><? echo $a[25];  ?></p></td></tr>
<tr><td><p><input name="minus_b1" type="checkbox" value="" /><? echo $a[26];  ?></p></td></tr>
<tr><td><p><input name="minus_b2" type="checkbox" value="" /><? echo $a[27];  ?></p></td></tr>
<tr><td><p><input name="minus_b3" type="checkbox" value="" /><? echo $a[28];  ?></p></td></tr>
<tr><td><p><input name="minus_c1" type="checkbox" value="" /><? echo $a[29];  ?></p></td></tr>
<tr><td><p><input name="minus_c2" type="checkbox" value="" /><? echo $a[30];  ?></p></td></tr>
<tr><td><p><input name="minus_c3" type="checkbox" value="" /><? echo $a[31];  ?></p></td></tr>
<tr><td><p><input name="minus_d1" type="checkbox" value="" /><? echo $a[32];  ?></p></td></tr>
<tr><td><p><input name="minus_d2" type="checkbox" value="" /><? echo $a[33];  ?></p></td></tr>
<tr><td><p><input name="minus_d3" type="checkbox" value="" /><? echo $a[34];  ?></p></td></tr>
<tr><td><p><input name="minus_e1" type="checkbox" value="" /><? echo $a[35];  ?></p></td></tr>
<tr><td><p><input name="minus_e2" type="checkbox" value="" /><? echo $a[36];  ?></p></td></tr>
<tr><td><p><input name="minus_e3" type="checkbox" value="" /><? echo $a[37];  ?></p></td></tr>
<tr><td><p><input name="minus_v1" type="checkbox" value="" /><? echo $a[38];  ?></p></td></tr>
<tr><td><p><input name="minus_v2" type="checkbox" value="" /><? echo $a[39];  ?></p></td></tr>
<tr><td><p><input name="minus_v3" type="checkbox" value="" /><? echo $a[40];  ?></p></td></tr>
<tr><td colspan="4" style="border-bottom: thick solid black;"></td></tr>
</table>
</div>
<div id="kefel">
<table>
<tr>
<td><h2>פעולות כפל</h2></td>
</tr>
<tr><td><p><input name="kefel20" type="checkbox" value="" /><? echo $a[21];  ?></p></td></tr>
<tr><td><p><input name="kefel30" type="checkbox" value="" /><? echo $a[24];  ?></p></td></tr>
<tr><td><p><input name="verbalhiluk20" type="checkbox" value="" /><? echo $a[27];  ?></p></td></tr>
<tr><td colspan="4" style="border-bottom: thick solid black;"></td></tr>
</table></div>
<div id="hiluk">
<table>
<tr><td><h2>פעולות חילוק</h2></td></tr>
<tr><td><p><input name="hiluk20" type="checkbox" value="" /><? echo $a[22];  ?></p></td></tr>
<tr><td><p><input name="hiluk30" type="checkbox" value="" /><? echo $a[25];  ?></p></td></tr>
<tr><td><p><input name="verbalhiluk30" type="checkbox" value="" /><? echo $a[28];  ?></p></td></tr>
<tr><td colspan="4" style="border-bottom: thick solid black;"></td></tr>
</table></div>
<div id="equal">
<table>
<tr>
<td><h2>שיוויון ואי שיוויון</h2></td>
</tr>
<tr><td><p><input name="equals10" type="checkbox" value="" /><? echo $a[29];  ?></p></td></tr>
<tr><td><p><input name="equals20" type="checkbox" value="" /><? echo $a[31];  ?></p></td></tr>
<tr><td><p><input name="equals30" type="checkbox" value="" /><? echo $a[33];  ?></p></td></tr>
<tr><td colspan="4" style="border-bottom: thick solid black;"></td></tr>
</table></div>
<div id="sdarot"><table>
<tr>
<td><h2>סדרות</h2></td>
</tr>
<tr><td><p><input name="sdarot10" type="checkbox" value="" /><? echo $a[30];  ?></p></td></tr>
<tr><td><p><input name="sdarot30" type="checkbox" value="" /><? echo $a[32];  ?></p></td></tr>
<tr><td><p><input name="sdarot100" type="checkbox" value="" /><? echo $a[34];  ?></p></td></tr>
<tr><td colspan="4" style="border-bottom: thick solid black;"></td></tr>

</table></div>
</body>
</html>