<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <h1 dir="rtl">חיסור עד 20</h1>
		<?php 
		  session_start();
		  $bx = rand(0,20);
	      $by = rand(1,$bx);
		?>
<form method="post" action="minus20.php" dir="ltr">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php print $bx; ?></td>
		<td><input name="minus" type="hidden" value="-"/> - </td>
		<td><?php print $by; ?></td>
		<td>=</td>
        <?php $the_answer_b = $bx-$by;?><input name="the_answer_b" type="hidden" value="<?=$the_answer_b?>"/>
		<td><input name="answer_b" type="text" size="5"/></td>
		<td><input name="submit1" type="submit" value="בדוק" /></td>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_bx" type="hidden" value="<?= $bx?>" />
		    <input name="last_by" type="hidden" value="<?= $by?>"/>
             <input name="oldanswer_b" type="hidden" value="<?= $the_answer_b?>"/>
              <?php if(!empty($_POST['last_bx'])) {?>
		    	<td><?php print $_POST['last_bx']?></td>
			    <td> - </td>
			    <td><?php print $_POST['last_by'];?></td>
			    <td> = </td>
		  		<td><?php print $_POST['oldanswer_b'];?></td>
	          <?php }?>  
                <td>    <?php	
				if (isset($_POST['answer_b']) ) 
				{
					if ($_POST['the_answer_b']==$_POST['answer_b'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td></table>
</form>
  
</body>
</html>