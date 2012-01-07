<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <?php 
		  
			$cx = rand(0,10);
			$cy = rand(1,10);
			$cx = $cx*10;
	      	$cy = $cy*10;
			while ($cx+$cy>100)
			{
				$cx = rand(0,10);
				$cy = rand(1,10);
				$cx = $cx*10;
				$cy = $cy*10;	
			}
		?>
    <h1 dir="rtl">חיבור בעשרות עד 100</h1>
    <p dir="rtl">פתור את התרגילים הבאים</p>
<form method="post" action="plus100.php" dir="ltr"> 
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php print $cx; ?></td>
		<td><input name="plus" type="hidden" value="+"/> + </td>
		<td><?php print $cy; ?></td>
		<td>=</td>
        <?php $the_answer_c = $cy+$cx;?><input name="the_answer_c" type="hidden" value="<?=$the_answer_c?>"/>
		<td><input name="answer_c" type="text" size="5"/></td>
		<td><input name="submit2" type="submit" value="בדוק" /></td>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_cx" type="hidden" value="<?= $cx?>" />
		    <input name="last_cy" type="hidden" value="<?= $cy?>"/>
	    	<input name="oldanswer_c" type="hidden" value="<?= $the_answer_c?>"/>
            <?php if(!empty($_POST['last_cx'])) {?>
            	<td><?php print $_POST['last_cx']?></td>
			    <td> + </td>
			    <td><?php print $_POST['last_cy'];?></td>
			    <td> = </td>
			    <td><?php print $_POST['oldanswer_c'];?></td>
	        <?php } ?>
                <td>    <?php	
				if (isset($_POST['answer_c']) ) 
				{
					if ($_POST['the_answer_c']==$_POST['answer_c'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td></table>
</form>


</body>
</html>