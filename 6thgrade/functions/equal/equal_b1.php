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
    style="font-family:Cursive;font-size:28px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">השוואת שברים עשרוניים - רמה קלה</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
	  echo "<font size=5>";
	  $choose = rand(1,4);
	  
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
   
	  if ($num1>$num2)
			$the_answer='>';
	  if ($num1<$num2)
			$the_answer='<';
	  if ($num1==$num2)
			$the_answer='=';
  
?>			
            
<form method="post" action="equal_b1.php">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    		<td><?php print $num1; ?></td>
			<td><input name="answer" type="text" size="1" autocomplete="off"/></td>
			<td><?php print $num2; ?></td>
			<td><input name="submit" type="submit" value="בדוק" /></td>
  		</tr>
    <!-- this part shows the last exercise and the answer-->
		
	        <input name="last_x" type="hidden" value="<?= $num1?>" />
		    <input name="last_y" type="hidden" value="<?= $num2?>"/>
			<input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>		    
		    
	    	
                        
         <?php if(!empty($_POST['last_x'])) {?>  
		<tr> 
            <td><?php print $_POST['last_x'];?></td>
            <td align="center"><?php print $_POST['oldanswer'];?></td>
		    <td><?php print $_POST['last_y'];?></td>
         <?php }?>		    
	            <td>    <?php	
				if (isset($_POST['answer']) ) 
				{
					if (($_POST['answer']==$_POST['oldanswer'] && $num1>$num2) ||
						($_POST['answer']==$_POST['oldanswer'] && $num1<$num2) ||
						($_POST['answer']==$_POST['oldanswer'] && $num1==$num2))
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td></tr>
    </table>
</form>

</body>
</html>