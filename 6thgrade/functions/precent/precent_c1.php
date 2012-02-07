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
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">שברים מעורבים לאחוזים</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
	  echo "<font size=5>";
	  $choose = rand(1,5);
	  if ($choose == 1){
		$y=rand(1,10);
		$x = rand(1,100);
		$z = 100;
	  }
	  if ($choose == 2){
		 $y=rand(1,5);
		 $x = rand(1,50);
     	 $z = 50; 
	  }
	  if ($choose == 3){
     	 $num1 = 5;
		 $num2 = rand(1,5);
		 $y=rand(1,5);
		 $x = $num1*$num2;
		 $z = 25;
	  }
	  if ($choose == 4){
     	 $num1 = 2;
		 $num2 = rand(1,10);
		 $y=rand(1,5);
		 $x = $num1*$num2;
		 $z = 20;
	  }
	  if ($choose == 5){
		 $y=rand(1,10);
		 $x = rand(1,10);
     	 $z = 10; 
	  }
	$temp = $z*$y+$x;	
	$the_answer=($temp/$z)*100; 
?>
<form method="post" action="precent_c1.php" dir="ltr">    
<table align="center" dir="ltr">
    
        	
		<tr>
        	<td rowspan="2" align="center" valign="middle"><?php print $y; ?> </td>
        	<td align="center" style="border-bottom: thin solid black;"><?php print $x; ?> </td>
            <td rowspan="2" align="center" valign="middle">=</td>
        	<td rowspan="2" align="center" ><input name="answer" type="text" size="1" autocomplete="off"/>%</td>
            <td rowspan="3"><input name="submit" type="submit" value="בדוק" /></td>
		</tr>
		<tr>
        	<td align="center"><?php print $z; ?></td>
        </tr>
			
		<input name="the_answer" type="hidden" value="<?=$the_answer?>"/>

  		</tr></table>
       
    <!-- this part shows the last exercise and the answer-->
	        <input name="last_x" type="hidden" value="<?= $x?>" />
            <input name="last_z" type="hidden" value="<?= $z?>" />
            <input name="last_y" type="hidden" value="<?= $y?>" />
            <input name="last_temp" type="hidden" value="<?= $temp?>" />
		    
            <?php if(!empty($_POST['last_x'])) {?>
		<table align="center">
        <tr>
        	<td rowspan="2" align="center" valign="middle"><?php print $_POST['last_y']?> </td>
        	<td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_x']?></td>
            <td rowspan="2" align="center" valign="middle">=</td>
            <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_temp']?></td>
		    <td rowspan="2" align="center" valign="middle">=</td>
		    <td rowspan="2" align="center"><?php print $_POST['the_answer'];?>%</td>
		<td rowspan="3" valign="middle">    
		<?php	
		if (isset($_POST['answer'])) 
		{
			if ($_POST['the_answer']==$_POST['answer'])
				print "<font color='green'> כל הכבוד </font>";
			else
				print "<font color='red'> טעות</font>";
		}
		?>
        </td>
		</tr>
        <tr>
			<td align="center"><?php print $_POST['last_z'];?></td>   
			<td align="center"><?php print $_POST['last_z'];?></td>
		<?php } ?>
		</tr></table>
</form>


</body>
</html>