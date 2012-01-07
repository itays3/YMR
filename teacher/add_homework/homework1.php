<?php include("../../database.php"); ?>
<?php error_reporting(E_ERROR|E_WARNING);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="show_pic.css" />

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
</script>
<script src="php_calendar/scripts.js" type="text/javascript"></script>

<script type="text/javascript">
function showAndClearField(frm){
var a1 = frm.plus_a1.value;
	if (a1 == "" )
		alert("יש להזין ערכים לפחות במקצוע אחד")
	else
	window.open("verify.php");
    
}</SCRIPT>


</head>
<body dir="rtl">
 <?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
	$username=$_SESSION['username'];
?>


<form id='register' action='homework1.php' name="frm" method="post">

<fieldset>
<legend>הוספת שיעורי בית לכיתה א</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

    <label for='name' >מספר כיתה: </label>
    <select name="grade_num" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>מתוגברת</option><option>טיפולית</option></select>
   <?php $grade_num=$_POST['grade_num'];?>
  
<a href="javascript:viewcalendar()">בחר תאריך הגשה</a>
<input type="text" name="date" id="date" style="width:80px; text-align:center" /> 
<br />
<br /> 
<table><tr>
<td><input type="button" name=type id='bt1' value='הצג נושאים בחיבור' onclick="setVisibility1('plus');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt2' value='הצג נושאים חיסור' onclick="setVisibility2('minus');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt3' value='הצג נושאים בכפל' onclick="setVisibility3('kefel');" style="width:130px; cursor:pointer;";></td>
<td rowspan="2"><input type="submit" name="submit" value="המשך" style="width:130px; height:55px; cursor:pointer; font-size:24px; font-weight:bold; background-color: #0F3; " /></td>
</tr>
<tr>
<td><input type="button" name=type id='bt4' value='הצג נושאים בחילוק' onclick="setVisibility4('hiluk');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt5' value='הצג נושאים בסדרות' onclick="setVisibility5('sdarot');" style="width:130px; cursor:pointer;";></td>
<td><input type="button" name=type id='bt6' value='הצג נושאים בהשוואות' onclick="setVisibility6('equal');" style="width:130px; cursor:pointer;";></td>
</tr></table>
</fieldset>

<? if (!empty ($_POST['date'])){
	$date=$_POST['date'];
	$date=date('Y-m-d',strtotime($date));
}?>

<script type="text/javascript">
window.onload=function(){
populatedropdown("daydropdown", "monthdropdown", "yeardropdown")
}
</script>

<div id="plus">
    <label><h3>חיבור: </h3></label>
<table cellspacing="3" cellpadding="3"><tr align="center"><td align="right"><h4>נושא</h4></td>
<td><h4>רמה קלה</h4></td><td><h4>רמה בינונית</h4></td><td><h4>רמה קשה</h4></td></tr>
<tr><td><label>חיבור עד 100</label></td>
<td><input type="text" name="plus_a1" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_a2"  size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_a3"  size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיבור עד 200</label></td>
<td><input type="text" name="plus_b1" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_b2" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_b3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיבור בעשרות עד 1000</label></td>
<td><input type="text" name="plus_c1" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_c2" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_c3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיבור בשרשרת עד 200</label></td>
<td><input type="text" name="plus_d1" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_d2" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_d3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיבור בשרשרת עד 1000</label></td>
<td><input type="text" name="plus_e1" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_e2" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_e3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיבור במאונך</label></td>
<td><input type="text" name="plus_v1" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_vs" size="5" autocomplete="off"/></td>
<td><input type="text" name="plus_v3" size="5" autocomplete="off"/></td></tr>
</table>
</div>
<div id="minus">
    <label><h3>חיסור: </h3></label>
<table cellspacing="3" cellpadding="3"><tr align="center"><td align="right"><h4>נושא</h4></td>
<td><h4>רמה קלה</h4></td><td><h4>רמה בינונית</h4></td><td><h4>רמה קשה</h4></td></tr>
<tr><td><label>חיסור עד 100</label></td>
<td><input type="text" name="minus_a1"  size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_a2"  size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_a3"  size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיסור עד 200</label></td>
<td><input type="text" name="minus_b1" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_b2" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_b3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיסור בעשרות עד 1000</label></td>
<td><input type="text" name="minus_c1" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_c2" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_c3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיסור בשרשרת עד 200</label></td>
<td><input type="text" name="minus_d1" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_d2" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_d3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיסור בשרשרת עד 1000</label></td>
<td><input type="text" name="minus_e1" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_e2" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_e3" size="5" autocomplete="off"/></td></tr>

<tr><td><label>חיסור במאונך</label></td>
<td><input type="text" name="minus_v1" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_vs" size="5" autocomplete="off"/></td>
<td><input type="text" name="minus_v3" size="5" autocomplete="off"/></td></tr>
</table>
</div>

<?php

$a[1] = $_POST['plus_a1']; $a[2] = $_POST['plus_a2']; $a[3] = $_POST['plus_a3']; $a[4] = $_POST['plus_b1']; $a[5]= $_POST['plus_b2'];
$a[6] = $_POST['plus_b3']; $a[7] = $_POST['plus_c1']; $a[8] = $_POST['plus_c2']; $a[9] = $_POST['plus_c3']; $a[10]= $_POST['plus_d1'];
$a[11] = $_POST['plus_d2']; $a[12] = $_POST['plus_d3']; $a[13] = $_POST['plus_e1']; $a[14] = $_POST['plus_e2']; $a[15]= $_POST['plus_e3'];
$a[16] = $_POST['plus_v1']; $a[17] = $_POST['plus_v2']; $a[18] = $_POST['plus_v3'];

$b[1] = $_POST['minus_a1']; $b[2] = $_POST['minus_a2']; $b[3] = $_POST['minus_a3']; $b[4] = $_POST['minus_b1']; $b[5]= $_POST['minus_b2'];
$b[6] = $_POST['minus_b3']; $b[7] = $_POST['minus_c1']; $b[8] = $_POST['minus_c2']; $b[9] = $_POST['minus_c3']; $b[10]= $_POST['minus_d1'];
$b[11] = $_POST['minus_d2']; $b[12] = $_POST['minus_d3']; $b[13] = $_POST['minus_e1']; $b[14] = $_POST['minus_e2']; $b[15]= $_POST['minus_e3'];
$b[16] = $_POST['minus_v1']; $b[17] = $_POST['minus_v2']; $b[18] = $_POST['minus_v3'];
/*$query=sprintf("UPDATE homework SET plus_a1='%s' WHERE grade='a' && grade_num='$grade';",
mysql_real_escape_string($a1));
$result = mysql_query($query);
echo $a1;*/
$counter1=0;
$counter2=0;
$i=0;
$j=0;
for ($i=0; $i<19; $i++) {
	if (!empty($a[$i])){
	$counter1=$counter1+1;
	}
}
for ($j=0; $j<19; $j++) {
	if (!empty($b[$j])){
	$counter2=$counter2+1;
	}


}
if ($counter1!=0 || $counter2!=0){
$query=sprintf("INSERT INTO homework (username,grade,grade_num,date,plus_a1,plus_a2,plus_a3,plus_b1,plus_b2,plus_b3,plus_c1,
plus_c2,plus_c3,plus_d1,plus_d2,plus_d3,plus_e1,plus_e2,plus_e3,plus_v1,plus_v2,plus_v3,minus_a1,minus_a2,minus_a3,
minus_b1,minus_b2,minus_b3,minus_c1,minus_c2,minus_c3,minus_d1,minus_d2,minus_d3,minus_e1,minus_e2,minus_e3,minus_v1,minus_v2,minus_v3)VALUES  
('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');",
mysql_real_escape_string($username),
mysql_real_escape_string('a'),
mysql_real_escape_string($grade_num),
mysql_real_escape_string($date),
mysql_real_escape_string($a[1]),
mysql_real_escape_string($a[2]),
mysql_real_escape_string($a[3]),
mysql_real_escape_string($a[4]),
mysql_real_escape_string($a[5]),
mysql_real_escape_string($a[6]),
mysql_real_escape_string($a[7]),
mysql_real_escape_string($a[8]),
mysql_real_escape_string($a[9]),
mysql_real_escape_string($a[10]),
mysql_real_escape_string($a[11]),
mysql_real_escape_string($a[12]),
mysql_real_escape_string($a[13]),
mysql_real_escape_string($a[14]),
mysql_real_escape_string($a[15]),
mysql_real_escape_string($a[16]),
mysql_real_escape_string($a[17]),
mysql_real_escape_string($a[18]),
mysql_real_escape_string($b[1]),
mysql_real_escape_string($b[2]),
mysql_real_escape_string($b[3]),
mysql_real_escape_string($b[4]),
mysql_real_escape_string($b[5]),
mysql_real_escape_string($b[6]),
mysql_real_escape_string($b[7]),
mysql_real_escape_string($b[8]),
mysql_real_escape_string($b[9]),
mysql_real_escape_string($b[10]),
mysql_real_escape_string($b[11]),
mysql_real_escape_string($b[12]),
mysql_real_escape_string($b[13]),
mysql_real_escape_string($b[14]),
mysql_real_escape_string($b[15]),
mysql_real_escape_string($b[16]),
mysql_real_escape_string($b[17]),
mysql_real_escape_string($b[18]));
$result = mysql_query($query);

}
?>
<?php

/*$query=sprintf("UPDATE homework SET minus_a1='%s' WHERE grade='a' && grade_num='$grade';",
mysql_real_escape_string($b1));
$result = mysql_query($query);
echo $b1;*/

if ($counter2!=0){

}
?>
</form>

</div>
</body>
</html>