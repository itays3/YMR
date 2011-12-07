<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

   		<?php 
			session_start();
			$num1 = rand(0,10);
			$num2 = rand(1,$num1);
			$num3 = rand(1,$num2);
			$num1 = $num1*10;
			$num2 = $num2*10;
			$num3 = $num3*10;
			while ($num1-$num2-$num3>100 || $num1-$num2-$num3<0 )
			{
				$num1 = rand(0,10);
				$num2 = rand(1,$num1);
				$num3 = rand(1,$num2);
				$num1 = $num1*10;
				$num2 = $num2*10;
				$num3 = $num3*10;
			}
		?>
    <h1 dir="rtl">תרגילי שרשרת עד 100</h1>
<form method="post" action="minussh100.php" dir="ltr">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php print $num1; ?></td>
		<td><input name="plus" type="hidden" value="-"/> - </td>
		<td><?php print $num2; ?></td>
        <td><input name="plus1" type="hidden" value="-"/> - </td>
		<td><?php print $num3; ?></td>
		<td>=</td>
        <?php $the_answer_total = $num1-$num2-$num3;?><input name="the_answer_total" type="hidden" value="<?=$the_answer_total?>"/>
		<td><input name="answer_total" type="text" size="5"/></td>
		<td><input name="submit_total" type="submit" value="בדוק" /></td>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_num1" type="hidden" value="<?= $num1?>" />
		    <input name="last_num2" type="hidden" value="<?= $num2?>"/>
            <input name="last_num3" type="hidden" value="<?= $num3?>"/>
            <input name="oldanswer_total" type="hidden" value="<?= $the_answer_total?>"/>
			<?php if(!empty($_POST['last_num1'])) {?>
            	<td><?php print $_POST['last_num1']?></td>
			    <td> - </td>
			    <td><?php print $_POST['last_num2'];?></td>
	            <td> - </td>
			    <td><?php print $_POST['last_num3'];?></td>
			    <td> = </td>
			    <td><?php print $_POST['oldanswer_total'];?></td>
		    <?php }?> 
                <td>    <?php	
				if (isset($_POST['answer_total']) ) 
				{
					if ($_POST['the_answer_total']==$_POST['answer_total'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td></tr></table>
</form>
  
    

</body>
</html>