<?php
$hostname_check_mag = "localhost";
$database_check_mag = "users";
$username_check_mag = "root";
$password_check_mag = "597135";
$check_mag = mysql_pconnect($hostname_check_mag, $username_check_mag, $password_check_mag) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES 'hebrew'");
?>