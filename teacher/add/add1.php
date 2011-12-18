<?php include("../../database.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style/index.css" />
<link rel="stylesheet" type="text/css" href="../style/fg_membersite.css" />

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>
<?php 
$u_name = rand(100,99999);
$u_pass = rand(100000,999999); 
 
if (isset($_POST['name']) ){
$sql= sprintf("INSERT INTO students  (username, password, name, grade,grade_letter, grade_num)
VALUES
('$_POST[username]','$_POST[password]','$_POST[name]','a','א','$_POST[grade]')");
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}
$result = mysql_query("SELECT * from students WHERE id=(SELECT MAX(id) FROM students)");
while($row = mysql_fetch_array($result))
{	
	$s_id = $row['id'];
	$uname=$row['name'];
}
if (isset ($_POST['name']) && $s_id!=0){
$query=sprintf("INSERT INTO total_st (s_id) VALUES ('%s');",
mysql_real_escape_string($s_id));
$result = mysql_query($query);
}
if (isset ($_POST['name']) && $s_id!=0){
$query=sprintf("INSERT INTO connect (s_id,name) VALUES ('%s','%s');",
mysql_real_escape_string($s_id),
mysql_real_escape_string($uname));
$result = mysql_query($query);
}
?>
<body dir="rtl">
<div id='fg_membersite'>
<form id='register' action='add1.php' method='post'>
<fieldset >
<legend>רישום תלמיד</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='container'>
    <label for='name' >מספר כיתה: </label><br/>
    <select name="grade" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>מתוגברת</option><option>טיפולית</option></select>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='name' >שם מלא: </label><br/>
    <input type='text' name='name' id='name' maxlength="50" />
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
   <input name="username" type="hidden" value="<?= $u_name?>"/>
   <input name="password" type="hidden" value="<?= $u_pass?>"/>
   <input name="added" type="hidden" value="<?= time()?>"/>
</div>      
<div class='container'>
    <input type='submit' name='Submit' value='הוסף תלמיד' />
</div>
</fieldset>
</form>
</div>


<div id='fg_membersite'>
<br />
<form id='list' action='add1.php' method='post'>
<input type="submit" name="submit1" value="סדר לפי שם"/>
<input type="submit" name="submit2" value="סדר לפי כיתה"/>
<input type="text" name="search" size="5"/>
<input type="submit" name="submit3" value="חפש"/>
</form>


<?php 
if (isset($_POST['submit1'])){
$query="SELECT * FROM students ORDER BY name";
$result=mysql_query($query);
$num=mysql_numrows($result);
}
if (isset($_POST['submit2'])){
$query="SELECT * FROM students ORDER BY grade_num";
$result=mysql_query($query);
$num=mysql_numrows($result);
}
if (!isset($_POST['submit2']) && (!isset($_POST['submit1']))){
$query="SELECT * FROM students ORDER BY date";
$result=mysql_query($query);
$num=mysql_numrows($result);
}
 mysql_close($con); 
 ?>
<table border="0"  cellpadding="2">
<tr bgcolor="#999999">
<th><font face="Arial, Helvetica, sans-serif">שם מלא</font></th>
<th><font face="Arial, Helvetica, sans-serif">שם משתמש</font></th>
<th><font face="Arial, Helvetica, sans-serif">סיסמא</font></th>
<th><font face="Arial, Helvetica, sans-serif">כיתה</font></th>
</tr>

<?php
$i=0;
while ($i < $num) {
	
$username=mysql_result($result,$i,"username");
$password=mysql_result($result,$i,"password");
$name=mysql_result($result,$i,"name");
$grade=mysql_result($result,$i,"grade_letter");
$grade_num=mysql_result($result,$i,"grade_num");
?>

<tr align="center"> <? if ($grade=='א'){ ?>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $username; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $password; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $grade," ", $grade_num; ?></font></td>
</tr>
<? }?>
<?php 
$i++;
}


?>
</div>
</body>
</html>