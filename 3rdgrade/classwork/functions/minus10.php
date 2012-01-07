<?php error_reporting(E_ERROR|E_WARNING);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <h1 dir="rtl">חיסור עד 10</h1>
	<p dir="rtl">פתור את התרגילים הבאים</p>
    
	<?php 
	  session_start();
	  $x = rand(1,10);
      $y = rand(1,$x);
?>
<form method="post" action="minus10.php" dir="ltr">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    		<td><?php print $x; ?></td>
			<td><input name="minus1" type="hidden" value="-"/> - </td>
			<td><?php print $y; ?></td>
			<td>=</td>
    		<?php $the_answer = $x-$y;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
			<td><input name="answer" type="text" size="5"/></td>
	   		<td><input name="submit" type="submit" value="בדוק" /></td>
  		</tr>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_a" type="hidden" value="<?= $x?>" />
		    <input name="last_b" type="hidden" value="<?= $y?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
             <?php if(!empty($_POST['last_a'])) {?>
	    		<td><?php print $_POST['last_a']?></td>
			    <td> - </td>
			    <td><?php print $_POST['last_b'];?></td>
			    <td> = </td>
			    <td><?php print $_POST['oldanswer'];?></td>
	        <?php } ?>
                <td>    <?php	
				if (isset($_POST['answer']) ) 
				{
					if ($_POST['the_answer']==$_POST['answer'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td>
    </table>
</form>
   
</body>
</html>