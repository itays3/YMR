<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../database.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Youth Mathematic Revolution</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
</head>

<body>
<?php
session_start();
		$username = $_SESSION['username'];
			if ($_SESSION['username']);
			else
			die("You must be logged in!"); 
$result = mysql_query("SELECT * from students WHERE username='$username'");
while($row = mysql_fetch_array($result))
{
$s_id = $row['id'];
}


$result = mysql_query("SELECT sum(yes_count) AS total from statistics WHERE s_id='$s_id'");
while($row = mysql_fetch_array($result))
{
	$total=$row['total'];
}

echo $total;

$result = mysql_query("SELECT MAX(id) as max from statistics");
while($row = mysql_fetch_array($result))
{
	
	$max= $row['max'];
}
echo $max;



?> 
</body>
</html>