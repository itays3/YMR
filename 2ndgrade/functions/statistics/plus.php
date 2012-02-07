<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../database.php")?>
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
				if ($row['yes_count'] == 1 && $row['subject'] == plus_a1)
				{
					$counter_yes1 = $counter_yes1+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_a1)
				{
					$counter_no1 = $counter_no1+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_a2)
				{
					$counter_yes2 = $counter_yes2+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_a2)
				{
					$counter_no2 = $counter_no2+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_a3)
				{
					$counter_yes3 = $counter_yes3+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_a3)
				{
					$counter_no3 = $counter_no3+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_b1)
				{
					$counter_yes4 = $counter_yes4+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_b1)
				{
					$counter_no4 = $counter_no4+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_b2)
				{
					$counter_yes5 = $counter_yes5+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_b2)
				{
					$counter_no5 = $counter_no5+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_b3)
				{
					$counter_yes6 = $counter_yes6+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_b3)
				{
					$counter_no6 = $counter_no6+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_c1)
				{
					$counter_yes7 = $counter_yes7+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_c1)
				{
					$counter_no7 = $counter_no7+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_c2)
				{
					$counter_yes8 = $counter_yes8+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_c2)
				{
					$counter_no8 = $counter_no8+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_c3)
				{
					$counter_yes9 = $counter_yes9+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_c3)
				{
					$counter_no9 = $counter_no9+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_d1)
				{
					$counter_yes10 = $counter_yes10+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_d1)
				{
					$counter_no10 = $counter_no10+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_d2)
				{
					$counter_yes11 = $counter_yes11+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_d2)
				{
					$counter_no11 = $counter_no11+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_d3)
				{
					$counter_yes12 = $counter_yes12+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_d3)
				{
					$counter_no12 = $counter_no12+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_e1)
				{
					$counter_yes13 = $counter_yes13+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_e1)
				{
					$counter_no13 = $counter_no13+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_e2)
				{
					$counter_yes14 = $counter_yes14+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_e2)
				{
					$counter_no14 = $counter_no14+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_e3)
				{
					$counter_yes15= $counter_yes15+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_e3)
				{
					$counter_no15 = $counter_no15+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_v1)
				{
					$counter_yes16 = $counter_yes16+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_v1)
				{
					$counter_no16 = $counter_no16+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_v2)
				{
					$counter_yes17= $counter_yes17+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_v2)
				{
					$counter_no17 = $counter_no17+1;
				}
				if ($row['yes_count'] == 1 && $row['subject'] == plus_v3)
				{
					$counter_yes18 = $counter_yes18+1;
				}
				if ($row['no_count'] == 1 && $row['subject'] == plus_v3)
				{
					$counter_no18 = $counter_no18+1;
				}
			}
			
				$total1 = $counter_no1 + $counter_yes1;
				$total2 = $counter_no2 + $counter_yes2;
				$total3 = $counter_no3 + $counter_yes3;
				$total4 = $counter_no4 + $counter_yes4;
				$total5 = $counter_no5 + $counter_yes5;
				$total6 = $counter_no6 + $counter_yes6;
				$total7 = $counter_no7 + $counter_yes7;
				$total8 = $counter_no8 + $counter_yes8;
				$total9 = $counter_no9 + $counter_yes9;
				$total10 = $counter_no10 + $counter_yes10;
				$total11 = $counter_no11 + $counter_yes11;
				$total12 = $counter_no12 + $counter_yes12;
				$total13 = $counter_no13 + $counter_yes13;
				$total14 = $counter_no14 + $counter_yes14;
				$total15 = $counter_no15 + $counter_yes15;
				$total16 = $counter_no16 + $counter_yes16;
				$total17 = $counter_no17 + $counter_yes17;
				$total18 = $counter_no18 + $counter_yes18;
			
			?>
            <div class="sidebar1">
            
            <table cellpadding="5" cellspacing="5" border="1" dir="rtl" align="center">
            <tr align="center"><td><p style="color:#3300cc;">הנושא</p></td><td><p style="color:#3300cc;"> רמה קלה</td>
            <td><p style="color:#3300cc;">רמה בינונית</td><td><p style="color:#3300cc;">רמה קשה</td></tr>
            <tr><td><p>חיבור עד 100</p></td><td>
            
            <P><? if ($total1!=0){ 
			if (intval($counter_yes1/$total1 * 100 )> 50){
			echo "<p style='color:#339900;'>", intval($counter_yes1/$total1 * 100), "%  הצלחה "; 
			} 
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes1/$total1 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total2!=0){
			if (intval($counter_yes2/$total2 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes2/$total2 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes2/$total2 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total3!=0){
			if (intval($counter_yes3/$total3 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes3/$total3 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes3/$total3 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td></tr>
           
            <tr><td><p>חיבור עד 200</p></td><td>
           <P><? if ($total4!=0){ 
			if (intval($counter_yes4/$total4 * 100 )> 50){
			echo "<p style='color:#339900;'>", intval($counter_yes4/$total4 * 100), "%  הצלחה "; 
			} 
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes4/$total4 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total5!=0){
			if (intval($counter_yes5/$total5 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes5/$total5 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes5/$total5 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total6!=0){
			if (intval($counter_yes6/$total6 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes6/$total6 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes6/$total6 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td></tr>
            
            <tr><td><p>חיבור בעשרות עד 1000</p></td><td>
            <P><? if ($total7!=0){ 
			if (intval($counter_yes7/$total7 * 100 )> 50){
			echo "<p style='color:#339900;'>", intval($counter_yes7/$total7 * 100), "%  הצלחה "; 
			} 
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes7/$total7 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total8!=0){
			if (intval($counter_yes8/$total8 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes8/$total8 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes8/$total8 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total3!=0){
			if (intval($counter_yes9/$total9 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes9/$total9 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes9/$total9 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td></tr>
            
            <tr><td><p>חיבור בשרשרת עד 200</p></td><td>
            <P><? if ($total10!=0){ 
			if (intval($counter_yes10/$total10 * 100 )> 50){
			echo "<p style='color:#339900;'>", intval($counter_yes10/$total10 * 100), "%  הצלחה "; 
			} 
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes10/$total10 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total11!=0){
			if (intval($counter_yes11/$total11 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes11/$total11 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes11/$total11 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total12!=0){
			if (intval($counter_yes12/$total12 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes12/$total12 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes12/$total12 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td></tr>
            
            <tr><td><p>חיבור בשרשרת עד 1000</p></td><td>
            <P><? if ($total13!=0){ 
			if (intval($counter_yes13/$total13 * 100 )> 50){
			echo "<p style='color:#339900;'>", intval($counter_yes13/$total13 * 100), "%  הצלחה "; 
			} 
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes13/$total13 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total14!=0){
			if (intval($counter_yes14/$total14 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes14/$total14 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes14/$total14 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total15!=0){
			if (intval($counter_yes15/$total15 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes15/$total15 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes15/$total15 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td></tr>
            
            <tr><td><p>חיבור במאונך</p></td><td>
           <P><? if ($total16!=0){ 
			if (intval($counter_yes16/$total16 * 100 )> 50){
			echo "<p style='color:#339900;'>", intval($counter_yes16/$total16 * 100), "%  הצלחה "; 
			} 
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes16/$total16 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>",  "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total17!=0){
			if (intval($counter_yes17/$total17 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes17/$total17 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes17/$total17 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td>
            
            <td><P><? if ($total18!=0){
			if (intval($counter_yes18/$total18 * 100 )> 50){	
			echo "<p style='color:#339900;'>", intval($counter_yes18/$total18 * 100), "%  הצלחה "; 
			}
			else
			echo "<p style='color:#FF0000;'>", intval($counter_yes18/$total18 * 100), "%  הצלחה "; 
			}
			else echo "<p style='color:#000000;'>", "עדיין אין נתונים " ?></P></td></tr>

            </table>
<?php 
include ('../../level.php')


?>

			</div></div>

</body>
</html>