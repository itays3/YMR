<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>
<body>
<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
if ($username&&$password) {
	
	$connect = mysql_connect ("localhost","root","597135") or die("Couldn't connect");
	mysql_select_db ("users")or die("Couldn't find Database");

	$query = mysql_query("SELECT * FROM students WHERE username='$username'");
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		while ($row = mysql_fetch_assoc($query)){
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
		$grade = $row['grade'];
	}
		
	if (($username==$dbusername && $password==$dbpassword) && ($grade=='a')){
		 header('Location: 1stgrade/homework.php');
		$_SESSION['username'] = $username;
	}
	if (($username==$dbusername && $password==$dbpassword) && ($grade=='b')){
		 header('Location: 2ndgrade/homework.php');
		$_SESSION['username'] = $username;
	}
	if (($username==$dbusername && $password==$dbpassword) && ($grade=='c')){
		 header('Location: 3rdgrade/homework.php');
		$_SESSION['username'] = $username;
	}
	if (($username==$dbusername && $password==$dbpassword) && ($grade=='d')){
		 header('Location: 4thgrade/homework.php');
		$_SESSION['username'] = $username;
	}
	if (($username==$dbusername && $password==$dbpassword) && ($grade=='e')){
		 header('Location: 5thgrade/homework.php');
		$_SESSION['username'] = $username;
	}
	if (($username==$dbusername && $password==$dbpassword) && ($grade=='f')){
		 header('Location: 6thgrade/homework.php');
		$_SESSION['username'] = $username;
	}
		else
		echo $grade;
	}

}
if ($username&&$password) {

	$query = mysql_query("SELECT * FROM teachers WHERE username='$username'");
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		while ($row = mysql_fetch_assoc($query)){
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
		
	if (($username==$dbusername && $password==$dbpassword)){
		 header('Location: teacher/teacher.php');
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $s_id;
	}
	}
}
	else 
	die ("Please enter a user name and a password");

?>
</body>
</html>