<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />

<title>Youth Mathematic Revolution</title>

</head>

<body>
 <?php

$name = $_COOKIE['username'];


//---------------------------------------------------------

// Include all necessary files and find the requested page

//---------------------------------------------------------

include "../../database.php";

//---------------------------------------------------------

// Prepare a few things

//---------------------------------------------------------

$page = $_GET['p'];

 if ($page=="")

{

$page = main;

}

switch ($page) {

//---------------------------------------------------------

// Show the list of forums

//---------------------------------------------------------

case "showforums":

echo "<table width=\"90%\" border=\"0\"
align=\"center\" cellpadding=\"3\" cellspacing=\"1\"
bgcolor=\"#CCCCCC\">

<tr>

<td width=\"6%\" align=\"center\"
bgcolor=\"#E6E6E6\"><strong>#</strong></td>

<td width=\"76%\" align=\"center\"
bgcolor=\"#E6E6E6\"><strong>Forum</strong></td>

<td width=\"18%\" align=\"center\"
bgcolor=\"#E6E6E6\"><strong>Last Topic</strong></td>

</tr> ";

$sql="SELECT * FROM forums ORDER BY id ASC";

// Now to get the forums list done

$result=mysql_query($sql);

while($rows=mysql_fetch_array($result)){ 

echo "

<tr>

<td bgcolor=\"#FFFFFF\">".$rows['id']."</td>

<td align=\"left\" valign = \"top\"
bgcolor=\"#FFFFFF\"><B><a
href=\"index.php?p=showtopics&id=". $rows['id']
."\">". $rows['name']
."</a></b><BR>". $rows['desc'] ."</td>

<td
bgcolor=\"#FFFFFF\">".$rows['lastpost']."</td>"
; 

}

//Join it all up

echo "</table>";

break;

}

?>
</body>
</html>