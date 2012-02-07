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
    style="font-family:Cursive;font-size:26px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">השוואת שברים עשרוניים - רמה קשה</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
	  echo "<font size=5>";
	  $choose = rand(1,3);
	  
	  do{
		$x1 = rand(1,10);
		$y1 = rand(1,10);
		$num1 = round($x1/$y1,$choose);
	  }
	  while ($x1%$y1==0);
	  
	  do{
		$x2 = rand(1,10);
		$y2 = rand(1,10);
		$num2 = round($x2/$y2,$choose);
	  }
	  while ($x2%$y2==0);
   
	  do{
		$x3 = rand(1,10);
		$y3 = rand(1,10);
		$num3 = round($x3/$y3,$choose);
	  }
	  while ($x3%$y3==0);
	  
	  do{
		$x4 = rand(1,10);
		$y4 = rand(1,10);
		$num4 = round($x4/$y4,$choose);
	  }
	  while ($x4%$y4==0);   
	  if ($num1-$num3>$num2-$num4)
			$the_answer='>';
	  if ($num1-$num3<$num2+-$num4)
			$the_answer='<';
	  if ($num1-$num3==$num2-$num4)
			$the_answer='=';
  
?>			
            
<form method="post" action="equal_b3.php">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    		<td><?php print $num1; ?></td>
            <td>-</td>
            <td><?php print $num3; ?></td>
			<td><input name="answer" type="text" size="1" autocomplete="off"/></td>
			<td><?php print $num2; ?></td>
            <td>-</td>
            <td><?php print $num4; ?></td>
			
  		</tr>
    <!-- this part shows the last exercise and the answer-->
		
	        <input name="last_x" type="hidden" value="<?= $num1?>" />
		    <input name="last_y" type="hidden" value="<?= $num2?>"/>
            <input name="last_num1" type="hidden" value="<?= $num3?>" />
		    <input name="last_num2" type="hidden" value="<?= $num4?>"/>
			<input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>		    
		    
	    	<tr><td colspan="7" align="center"><input name="submit" type="submit" value="בדוק" /></td></tr>
	    
	        <tr><td colspan="7" align="center">    <?php	
				if (isset($_POST['answer']) ) 
				{
					if (($_POST['answer']==$_POST['oldanswer'] && $num1+$num3>$num2+$num4) ||
						($_POST['answer']==$_POST['oldanswer'] && $num1+$num3<$num2+$num4) ||
						($_POST['answer']==$_POST['oldanswer'] && $num1+$num3==$num2+$num4))
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td></tr>
                     <?php if(!empty($_POST['last_x'])) {?>  
		<tr> 
            <td><?php print $_POST['last_x'];?></td>
            <td>-</td>
            <td><?php print $_POST['last_num1'];?></td>
            <td align="center"><?php print $_POST['oldanswer'];?></td>
		    <td><?php print $_POST['last_y'];?></td>
            <td>-</td>
            <td><?php print $_POST['last_num2'];?></td></tr>
         <?php }?>
    </table>
</form>

</body>
</html>