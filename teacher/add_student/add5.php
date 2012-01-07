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
 		session_start();
		$username = $_SESSION['username'];
			if ($_SESSION['username']);
			else
			die("You must be logged in!");
			$result = mysql_query("SELECT * FROM teachers WHERE username='$username'");
			while($row = mysql_fetch_array($result))
			{
				$school=$row['school'];
			}
if (isset($_POST['name']) )
{
	$sql= sprintf("INSERT INTO students  (username, password, name,school, grade,grade_letter, grade_num)
	VALUES
	('$_POST[username]','$_POST[password]','$_POST[name]','$school','e','ה','$_POST[grade]')");
	if (!mysql_query($sql,$con))
	{
	  die('Error: ' . mysql_error());
	}
}
$result = mysql_query("SELECT * from students WHERE id=(SELECT MAX(id) )");
while($row = mysql_fetch_array($result))
{	
	$s_id = $row['id'];
	$uname=$row['name'];
	$grade1=$row['grade_letter'];
	$grade_num1=$row['grade_num'];
}
if (isset ($_POST['name']) && $s_id!=0)
{
	$query=sprintf("INSERT INTO total_st (s_id) VALUES ('%s');",
	mysql_real_escape_string($s_id));
	$result = mysql_query($query);
}
if (isset ($_POST['name']) && $s_id!=0)
{
	$query=sprintf("INSERT INTO connect (s_id,name,grade,grade_num) VALUES ('%s','%s','%s','%s');",
	mysql_real_escape_string($s_id),
	mysql_real_escape_string($uname),
	mysql_real_escape_string($grade1),
	mysql_real_escape_string($grade_num1));

	$result = mysql_query($query);
}
?>
<body dir="rtl">
<div id='fg_membersite'>
<form id='register' action='add5.php' method='post'>
<fieldset >
<legend>רישום תלמיד לכיתה ה</legend>
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
<br />
<?php 
if (isset($_POST['name'])){
echo "<font size=5>";
echo $_POST['name'], " ", "הצטרף לכיתה ה"," ", $_POST['grade'];
echo "</font>";
}
?>
</form>
</div>


</body>
</html>