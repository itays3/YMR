<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

<h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">חילוק שבר בשבר</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
	  echo "<font size=5>";
	  $x = rand(1,10);
      $y = rand(1,10);
	  $z1 = rand(2,14);
	  $z2 = rand(2,14);
	  while ($z1==$z2)
	  {
		$z1 = rand(2,20);
	  	$z2 = rand(2,20);  
	  }
	  
	  while ($x>$z1 || $y>$z2)
	  {
		$x = rand(1,10);
		$y = rand(1,10);
	  }
	  	  
	  $the_answer1 = $x*$z2;
	  $the_answer2 = $y*$z1;
	
	  
?>
<form method="post" action="fracture_d3.php" dir="ltr">    
<table align="center" dir="ltr">
    
        	
		<tr>
        	<td align="center" style="border-bottom: thin solid black;"><?php print $x; ?> </td>
        	<td rowspan="2" align="center" valign="middle">:</td>
        	<td align="center" style="border-bottom: thin solid black;"><?php print $y; ?> </td>
            <td rowspan="2" align="center" valign="middle">=</td>
        	<td align="center" style="border-bottom: thin solid black;"><input name="answer1" type="text" size="1" autocomplete="off"/></td>
            <td rowspan="3"><input name="submit" type="submit" value="בדוק" /></td>
		</tr>
		<tr><td align="center"><?php print $z1; ?></td>
        	<td align="center"><?php print $z2; ?></td>
            <td> <input name="answer2" type="text" size="1" autocomplete="off"/></td>
		</tr>
			
		<input name="the_answer1" type="hidden" value="<?=$the_answer1?>"/>
    	<input name="the_answer2" type="hidden" value="<?=$the_answer2?>"/>
		
  		</tr></table>
       
    <!-- this part shows the last exercise and the answer-->
	        <input name="last_x" type="hidden" value="<?= $x?>" />
		    <input name="last_y" type="hidden" value="<?= $y?>"/>
            <input name="last_z1" type="hidden" value="<?= $z1?>" />
		    <input name="last_z2" type="hidden" value="<?= $z2?>"/>
            <?php if(!empty($_POST['last_x'])&&!empty($_POST['last_y'])) {?>
		<table align="center">
        <tr>
        	<td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_x']?></td>
		    <td rowspan="2" align="center" valign="middle">:</td>
		    <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_y'];?></td>
		    <td rowspan="2" align="center" valign="middle">=</td>
		    <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['the_answer1'];?></td>
		<td rowspan="3" valign="middle">    
		<?php	
		if (isset($_POST['answer1'])&&isset($_POST['answer2']) ) 
		{
			if ($_POST['the_answer1']==$_POST['answer1'] && $_POST['the_answer2']==$_POST['answer2'])
				print "<font color='green'> כל הכבוד </font>";
			else
				print "<font color='red'> טעות</font>";
		}
		?>
        </td>
		</tr>
        <tr>   
           <td align="center"><?php print $_POST['last_z1'];?></td>
           <td align="center"><?php print $_POST['last_z2'];?></td>
           <td align="center"><?php print $_POST['the_answer2'];?></td>
		<?php } ?>
		</tr></table>
</form>


</body>
</html>