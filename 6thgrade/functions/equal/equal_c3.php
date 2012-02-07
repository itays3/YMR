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
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">סיכום השוואות שברים - רמה קשה</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:18px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
	  echo "<font size=5>";
		$choose=rand(1,4);
		do {
		$x1 = rand(1,10);
		$y1 = rand(1,10);
		$num1 = round($x1/$y1,4);


		$x2 = rand(1,10);
		$y2 = rand(1,10);
		$num2 = round($x2/$y2,$choose);
		
		$x3 = rand(1,10);
		$y3 = rand(1,10);
		$num3 = round($x3/$y3,4);


		$x4 = rand(1,10);
		$y4 = rand(1,10);
		$num4 = round($x4/$y4,$choose);   
		}
		while ($num1-$num3<0 || $num2-$num4<0);
	  if ($num1-$num3>$num2-$num4)
			$the_answer='>';
	  if ($num1-$num3<$num2-$num4)
			$the_answer='<';
	  if ($num1-$num3==$num2-$num4)
			$the_answer='=';
  
?>			
            
<form method="post" action="equal_c3.php">    
    <table cellpadding="3" cellspacing="3" align="center" >
    	<tr>
    		<td align="center" style="border-bottom: thin solid black;"><?php print $x1; ?></td>
 			<td rowspan="2" align="center">-</td>
            <td align="center" style="border-bottom: thin solid black;"><?php print $x3; ?></td>
			<td rowspan="2" align="center"><input name="answer" type="text" size="1" autocomplete="off"/></td>
			<td rowspan="2" align="center"><?php print $num2; ?></td>
            <td rowspan="2" align="center">-</td>
            <td rowspan="2" align="center"><?php print $num4; ?></td>
			<td align="center"><input name="submit" type="submit" value="בדוק" /></td>
  		</tr>
    <!-- this part shows the last exercise and the answer-->
		<tr><td align="center"><?php print $y1; ?></td>
        	<td align="center"><?php print $y3; ?></td>
        </tr>
        	<input name="last_x1" type="hidden" value="<?= $x1?>" />
            <input name="last_x2" type="hidden" value="<?= $x2?>" />
            <input name="last_y1" type="hidden" value="<?= $y1?>" />
            <input name="last_y2" type="hidden" value="<?= $y2?>" />
            <input name="last_x3" type="hidden" value="<?= $x3?>" />
            <input name="last_x4" type="hidden" value="<?= $x4?>" />
            <input name="last_y3" type="hidden" value="<?= $y3?>" />
            <input name="last_y4" type="hidden" value="<?= $y4?>" />
	        <input name="last_x" type="hidden" value="<?= $num2?>" />
		    <input name="last_y" type="hidden" value="<?= $num4?>"/>
			<input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>		    
		    
	    	
                        
         <?php if(!empty($_POST['last_x1'])) {?>  
		<tr> 
            <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_x1'];?></td>
            <td align="center" rowspan="2">-</td>
            <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_x3'];?></td>
            <td align="center" rowspan="2"><?php print $_POST['oldanswer'];?></td>
		    <td align="center" rowspan="2"><?php print $_POST['last_x'];?></td>
            <td align="center" rowspan="2">-</td>
            <td align="center" rowspan="2"><?php print $_POST['last_y'];?></td>
            <td rowspan="2" align="center">    <?php	
				if (isset($_POST['answer']) ) 
				{
					if (($_POST['answer']==$_POST['oldanswer'] ))
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td>
        </tr>
        <tr>
        	<td align="center"><?php print $_POST['last_y1'];?></td>
        	<td align="center"><?php print $_POST['last_y3'];?></td>
        </tr>
         <?php }?>		    

    </table>
</form>
</body>
</html>