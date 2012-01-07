<?php include("../../database.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="assets/show_pic.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
<script type="text/javascript">
function setVisibility1(id) {
if(document.getElementById('bt1').value=='הסתר נושאים בחיבור'){
document.getElementById('bt1').value = 'הצג נושאים בחיבור';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt1').value = 'הסתר נושאים בחיבור';
document.getElementById(id).style.display = 'inline';

}
}
function setVisibility2(id) {
if(document.getElementById('bt2').value=='הסתר נושאים בחיסור'){
document.getElementById('bt2').value = 'הצג נושאים בחיסור';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt2').value = 'הסתר נושאים בחיסור';
document.getElementById(id).style.display = 'inline';

}
}
function setVisibility3(id) {
if(document.getElementById('bt3').value=='הסתר נושאים בכפל'){
document.getElementById('bt3').value = 'הצג נושאים בכפל';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt3').value = 'הסתר נושאים בכפל';
document.getElementById(id).style.display = 'inline';

}
}
function setVisibility4(id) {
if(document.getElementById('bt4').value=='הסתר נושאים בחילוק'){
document.getElementById('bt4').value = 'הצג נושאים בחילוק';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt4').value = 'הסתר נושאים בחילוק';
document.getElementById(id).style.display = 'inline';

}
}
function setVisibility5(id) {
if(document.getElementById('bt5').value=='הסתר נושאים בסדרות'){
document.getElementById('bt5').value = 'הצג נושאים בסדרות';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt5').value = 'הסתר נושאים בסדרות';
document.getElementById(id).style.display = 'inline';

}
}
function setVisibility6(id) {
if(document.getElementById('bt6').value=='הסתר נושאים בהשוואות'){
document.getElementById('bt6').value = 'הצג נושאים בהשוואות';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt6').value = 'הסתר נושאים בהשוואות';
document.getElementById(id).style.display = 'inline';

}
}
</script>
</head>

<body dir="rtl" style="overflow-x:hidden;">
<div class="top">
<form>
<fieldset>
<legend style="color:#0000FF; font-size:24px; "> הכנת מבחן עבור כיתה ג</legend>
<? 
$query = "SELECT * FROM grades WHERE grade='א'"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$i=3;
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
 ?>
<table><tr>
<td><input type="button" name=type id='bt1' value='הצג נושאים בחיבור' onclick="setVisibility1('plus');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt2' value='הצג נושאים חיסור' onclick="setVisibility2('minus');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt3' value='הצג נושאים בכפל' onclick="setVisibility3('kefel');" style="width:130px; cursor:pointer;";></td>
<td rowspan="2"><input type="submit" name="submit" value="המשך" style="width:130px; height:55px; cursor:pointer; font-size:24px; font-weight:bold " /></td>
</tr>
<tr>
<td><input type="button" name=type id='bt4' value='הצג נושאים בחילוק' onclick="setVisibility4('hiluk');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt5' value='הצג נושאים בסדרות' onclick="setVisibility5('sdarot');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt6' value='הצג נושאים בהשוואות' onclick="setVisibility6('equal');" style="width:130px; cursor:pointer;";></td>
</tr></table>
</fieldset>
</div>
<div class="content">
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

</table></div>
<div id="hiluk">
<table>
<tr><td><h2>פעולות חילוק</h2></td></tr>
<tr><td><p><input name="hiluk20" type="checkbox" value="" /><? echo $a[22];  ?></p></td></tr>
<tr><td><p><input name="hiluk30" type="checkbox" value="" /><? echo $a[25];  ?></p></td></tr>
<tr><td><p><input name="verbalhiluk30" type="checkbox" value="" /><? echo $a[28];  ?></p></td></tr>

</table></div>
<div id="equal">
<table>
<tr>
<td><h2>שיוויון ואי שיוויון</h2></td>
</tr>
<tr><td><p><input name="equals10" type="checkbox" value="" /><? echo $a[29];  ?></p></td></tr>
<tr><td><p><input name="equals20" type="checkbox" value="" /><? echo $a[31];  ?></p></td></tr>
<tr><td><p><input name="equals30" type="checkbox" value="" /><? echo $a[33];  ?></p></td></tr>

</table></div>
<div id="sdarot"><table>
<tr>
<td><h2>סדרות</h2></td>
</tr>
<tr><td><p><input name="sdarot10" type="checkbox" value="" /><? echo $a[30];  ?></p></td></tr>
<tr><td><p><input name="sdarot30" type="checkbox" value="" /><? echo $a[32];  ?></p></td></tr>
<tr><td><p><input name="sdarot100" type="checkbox" value="" /><? echo $a[34];  ?></p></td></tr>


</table></div></div>
<? } ?>

</form>
</body>
</html>