<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <?php 
			
			$numx = rand(0,10);
			$numy = rand(1,10);
			$numz = rand(1,10);
	  while ($num1+$num2+$num3 >20 )
	  {
			$numx = rand(0,10);
			$numy = rand(1,10);
			$numz = rand(1,10);
	  }
		?>
    <h1 dir="rtl">תרגילי שרשרת עד 20</h1>
    <p dir="rtl">פתור את התרגילים הבאים</p>
<form method="post" action="plussh20.php" dir="ltr"> 
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php print $numx; ?></td>
		<td><input name="plus" type="hidden" value="+"/> + </td>
		<td><?php print $numy; ?></td>
        <td><input name="plus1" type="hidden" value="+"/> + </td>
		<td><?php print $numz; ?></td>
		<td>=</td>
        <?php $the_answer_total1 = $numx+$numy+$numz;?><input name="the_answer_total1" type="hidden" value="<?=$the_answer_total1?>"/>
		<td><input name="answer_total1" type="text" size="5"/></td>
		<td><input name="submit_total1" type="submit" value="בדוק" /></td>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_numx" type="hidden" value="<?= $numx?>" />
		    <input name="last_numy" type="hidden" value="<?= $numy?>"/>
            <input name="last_numz" type="hidden" value="<?= $numz?>"/>
	    	<input name="oldanswer_total1" type="hidden" value="<?= $the_answer_total1?>"/>
            <?php if(!empty($_POST['last_numx'])) {?>
	            <td><?php print $_POST['last_numx']?></td>
			    <td> + </td>
			    <td><?php print $_POST['last_numy'];?></td>
	            <td> + </td>
			    <td><?php print $_POST['last_numz'];?></td>
			    <td> = </td>
			    <td><?php print $_POST['oldanswer_total1'];?></td>
	        <?php } ?>
                <td>    <?php	
				if (isset($_POST['answer_total1']) ) 
				{
					if ($_POST['the_answer_total1']==$_POST['answer_total1'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td></table>
</form>

</body>
</html>