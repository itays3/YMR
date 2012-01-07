<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    
    <h1 dir="rtl">שיוויון עד 10</h1>
	<p dir="rtl">פתור את התרגילים הבאים</p>
    <?php 
	  
	  $x = rand(1,10);
      $y = rand(1,10);
?>
<form method="post" action="equals10.php">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    		<td><?php print $x; ?></td>
			<td><input name="answer" type="text" size="1" autocomplete="off"/></td>
			<td><?php print $y; ?></td>
			<td><input name="submit" type="submit" value="בדוק"/></td>
  		</tr>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_x" type="hidden" value="<?= $x?>" />
		    <input name="last_y" type="hidden" value="<?= $y?>"/>
			
            <?php 
			if ($x>$y)
			$the_answer='>';
			if ($x<$y)
			$the_answer='<';
			if ($x==$y)
			$the_answer='=';?>
			<input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>		    
		    
	    	
                        
         <?php if(!empty($_POST['last_x'])) {?>  
        </tr> <tr> 
            <td><?php print $_POST['last_x'];?></td>
            <td align="center"><?php print $_POST['oldanswer'];?></td>
		    <td><?php print $_POST['last_y'];?></td>
         <?php }?>		    
	            <td>    <?php	
				if (isset($_POST['answer']) ) 
				{
					if (($_POST['answer']==$_POST['oldanswer'] && $x>$y) ||
						($_POST['answer']==$_POST['oldanswer'] && $x<$y) ||($_POST['answer']==$_POST['oldanswer'] && $x==$y))
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td></tr>
    </table>
</form>
      

</body>
</html>