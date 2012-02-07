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
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">אחוזים לשברים מעורבים</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
		echo "<font size=5>";
		$x = rand(101,500);
		
		$temp2=($x%100);
		$temp1=($x-$temp2)/100;
		$z=100;
		

?>
<form method="post" action="precent_d1.php" dir="ltr">    
<table align="center" dir="ltr">
    
        	
		<tr>
        	<td rowspan="2" align="center" ><?php print $x; ?> %</td>
            <td rowspan="2" align="center" valign="middle">=</td>
            <td rowspan="2" align="center" ><input name="answer3" type="text" size="1" autocomplete="off"/></td>
        	<td align="center" style="border-bottom: thin solid black;"><input name="answer1" type="text" size="1" autocomplete="off"/></td>
            <td rowspan="3"><input name="submit" type="submit" value="בדוק" /></td>
		</tr>
		<tr>
        	<td align="center"><input name="answer2" type="text" size="1"  autocomplete="off"/></td>
        </tr>
			
		<input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
		<input name="temp1" type="hidden" value="<?=$temp1?>"/>
		<input name="temp2" type="hidden" value="<?=$temp2?>"/>
        <input name="z" type="hidden" value="<?=$z?>"/>
  		</tr></table>
       
    <!-- this part shows the last exercise and the answer-->
	        <input name="last_x" type="hidden" value="<?= $x?>" />
 
            <?php if(!empty($_POST['last_x'])) {?>
		<table align="center">
        <tr>
        	<td rowspan="2" align="center"><?php print $_POST['last_x']?>%</td>
		    <td rowspan="2" align="center" valign="middle">=</td>
            <td rowspan="2"align="center" ><?php print $_POST['temp1'];?></td>
		    <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['temp2'];?></td>
		<td rowspan="3" valign="middle">    
		<?php	
		if (isset($_POST['answer1']) && !empty($_POST['answer2'])&& isset($_POST['answer3'])) 
		{
			if ((($_POST['answer3']*$_POST['answer2']+$_POST['answer1'])/$_POST['answer2'])*100 == $_POST['last_x'])
				print "<font color='green'> כל הכבוד </font>";
			else
				print "<font color='red'> טעות</font>";
		}
		?>
        </td>
		</tr>
        <tr>   
           <td align="center"><?php print $_POST['z'];?></td>
		<?php } ?>
		</tr></table>
</form>


</body>
</html>