<?php
$con = mysql_connect("localhost","root","597135");
			if (!$con)
				{
				  die('Could not connect: ' . mysql_error());
				}
			mysql_query("SET NAMES 'hebrew'");
			mysql_select_db("users", $con);

?>