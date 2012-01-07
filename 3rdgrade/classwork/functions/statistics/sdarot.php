<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../statistics.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
</head>

<body dir="rtl">
<div class="container">
    <div class="content">
    <h1 dir="rtl"  
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">סטטיסטיקה אישית</h1></div>
<?php 
		$counter_yes1 = 0;$counter_yes2 = 0;$counter_yes3 = 0;$counter_yes4 = 0;$counter_yes5 = 0;
		$counter_no1 = 0; $counter_no2 = 0; $counter_no3 = 0; $counter_no4 = 0; $counter_no5 = 0;
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
			
			$result = mysql_query("SELECT * from statistics WHERE s_id='$s_id'");
			while($row = mysql_fetch_array($result))
			{
				if ($row['yes_count'] == 1 && $row['subject'] == sdarot1)
				{
					$counter_yes1 = $counter_yes1+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == sdarot1)
				{
					$counter_no1 = $counter_no1+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == sdarot2)
				{
					$counter_yes2 = $counter_yes2+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == sdarot2)
				{
					$counter_no2 = $counter_no2+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == sdarot3)
				{
					$counter_yes3 = $counter_yes3+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == sdarot3)
				{
					$counter_no3 = $counter_no3+1;
				}				
			}
			
				$total1 = $counter_no1 + $counter_yes1;
				$total2 = $counter_no2 + $counter_yes2;
				$total3 = $counter_no3 + $counter_yes3;

				
			
			?>
            <div class="sidebar1">
            
            <table cellpadding="5" cellspacing="5" border="1" dir="rtl" align="center">
            <tr><td><p style="color:#3300cc;">הנושא</p></td><td><p style="color:#3300cc;">אחוזי הצלחה</p></td></tr>
            <tr><td><p>סדרות - רמה קלה</p></td><td><P><? if ($total1!=0){ echo intval($counter_yes1/$total1 * 100), "% אחוזי הצלחה"; } 
			else echo "עדיין אין נתונים"?></P></td></tr>
            <tr><td><p>סדרות - רמה בינונית</p></td><td><P><? if ($total2!=0){ echo intval($counter_yes2/$total2 * 100), "% אחוזי הצלחה"; }
			else echo "עדיין אין נתונים"?></P></td></tr>
            <tr><td><p>סדרות - רמה קשה</p></td><td><P><?  if ($total3!=0){ echo intval($counter_yes3/$total3 * 100), "% אחוזי הצלחה"; }
			else echo "עדיין אין נתונים"?></P></td></tr></table>

           
			  </div></div>
</body>
</html>