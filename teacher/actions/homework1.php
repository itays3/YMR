<?php include("../../database.php"); ?>
<?php error_reporting(E_ERROR|E_WARNING);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style/fg_membersite.css" />

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
<script type="text/javascript">
function setVisibility1(id) {
if(document.getElementById('bt1').value=='���� ������ ������'){
document.getElementById('bt1').value = '��� ������ ������';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt1').value = '���� ������ ������';
document.getElementById(id).style.display = 'inline';
}
}
function setVisibility2(id) {
if(document.getElementById('bt2').value=='���� ������ ������'){
document.getElementById('bt2').value = '��� ������ ������';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt2').value = '���� ������ ������';
document.getElementById(id).style.display = 'inline';
}
}
</script>
<script src="../js/homework.js"></script>
<script language="javascript" src="calendar.js"></script>

<script type="text/javascript">
function showAndClearField(frm){
var a1 = frm.plus100.value;
var a2 = frm.plus200.value;
var a3 = frm.plus1000.value;
var a4 = frm.plussh200.value;
var a5 = frm.pluss1000.value;
	if (frm.plus100.value == "")
		alert("�� ����� ����� ����� ������ ���")
	else
	window.open("../homework_update.php");
    
}</SCRIPT>
</head>
<body dir="rtl">
<div id='fg_membersite'>
<form id='register' action='homework1.php' name="frm" method="post">
<fieldset>
<legend>����� ����� ���</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='container'>
    <label for='name' >���� ����: </label>
    <select name="grade" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>�������</option><option>�������</option></select>
   <?php $grade=$_POST['grade'];?>
<label for='name' >��� ����� ����: </label>

<input type="submit" id='submit'  value='����� ������ ���' onClick="showAndClearField(frm)" ;>
<br />
<input type="button" name=type id='bt1' value='��� ������ ������' onclick="setVisibility1('plus');";>
<input type="button" name=type id='bt2' value='��� ������ �����' onclick="setVisibility2('minus');";>
<input type="button" name=type id='bt3' value='��� ������ ����' onclick="setVisibility3('kefel');";>
<input type="button" name=type id='bt4' value='��� ������ ������' onclick="setVisibility4('hiluk');";>
<input type="button" name=type id='bt5' value='��� ������ ������' onclick="setVisibility5('sdarot');";>
<input type="button" name=type id='bt6' value='��� ������ ��������' onclick="setVisibility6('equal');";>

</div></div>
<script type="text/javascript">
window.onload=function(){
populatedropdown("daydropdown", "monthdropdown", "yeardropdown")
}
</script>

<div id="plus">
<div class='container'>

    <label><h3>�����: </h3></label>
<table><tr><td><h4>����</h4></td><td><h4>���� �����</h4></td></tr>
<tr><td><label>����� �� 100</label></td>
<td><input type="text" id="plus100" name="plus100"  size="5"/></td></tr>
<tr><td><label>����� �� 200</label></td>
<td><input type="text" id="plus200" name="plus200" size="5"/></td></tr>
<tr><td><label>����� ������ �� 1000</label></td>
<td><input type="text" id="plus1000" name="plus1000" size="5"/></td></tr>
<tr><td><label>����� ������ �� 200</label></td>
<td><input type="text" id="plussh200" name="plussh200" size="5"/></td></tr>
<tr><td><label>����� ������ �� 1000</label></td>
<td><input type="text" id="pluss1000" name="plussh1000" size="5"/></td></tr>
<tr><td><label>����� ������ - ��� ���</label></td>
<td><input type="text" id="vplus1" name="vplus1" size="5"/></td></tr>
<tr><td><label>����� ������ - ��� �������</label></td>
<td><input type="text" id="vplus2" name="vplus2" size="5"/></td></tr>
<tr><td><label>����� ������ - ��� ���</label></td>
<td><input type="text" id="vplus3" name="vplus3" size="5"/></td></tr>

</table>
<?php

$a1 = $_POST['plus100'];
$query=sprintf("UPDATE homework SET plus1='%s' WHERE grade='a' && grade_num='$grade';",
mysql_real_escape_string($a1));
$result = mysql_query($query);
echo $grade;
echo $a1;
?>



</div>
</div>


<div id="minus">
<div class='container'>

<label for='name' ><h3>�����: </h3></label>
<table><tr><td><h4>����</h4></td><td><h4>���� �����</h4></td></tr>
<tr><td><label>����� �� 100</label></td>
<td><input type="text" id="minus100" name="minus100" size="5"/></td></tr>
<tr><td><label>����� �� 200</label></td>
<td><input type="text" id="minus200" name="minus200" size="5"/></td></tr>
<tr><td><label>����� ������ �� 1000</label></td>
<td><input type="text" id="minus1000" name="minus1000" size="5"/></td></tr>
<tr><td><label>����� ������ �� 200</label></td>
<td><input type="text" id="minussh200" name="minussh200" size="5"/></td></tr>
<tr><td><label>����� ������ �� 1000</label></td>
<td><input type="text" id="minuss1000" name="minussh1000" size="5"/></td></tr>
<tr><td><label>����� ������ - ��� ���</label></td>
<td><input type="text" id="vminus1" name="vminus1" size="5"/></td></tr>
<tr><td><label>����� ������ - ��� �������</label></td>
<td><input type="text" id="vminus2" name="vminus2" size="5"/></td></tr>
<tr><td><label>����� ������ - ��� ���</label></td>
<td><input type="text" id="vminus3" name="vminus3" size="5"/></td></tr>
</table>

</div>
</div>

</form>

</div>
</body>
</html>