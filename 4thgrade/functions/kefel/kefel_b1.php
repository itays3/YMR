<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <h1 dir="rtl">פתור בעזרת חוק הפילוג</h1>
<?php 
	  session_start();
	  $x = rand(100,1000);
      $y = rand(2,10);
	  
	  $the_answer = $x*$y;
?>
<form method="post" action="kefel_b1.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    		<td><?php print $x; ?></td>
			<td><input name="kefel" type="hidden" value="*"/> X </td>
			<td><?php print $y; ?></td>
			<td>=</td>
            <td><input name="answer1" type="text" size="5"/></td>
            <td align="center">+</td>
            <td><input name="answer2" type="text" size="5"/></td>
            <td>=</td>
            <td><input name="answer3" type="text" size="5"/></td>
            <input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
			<td><input name="submit" type="submit" value="בדוק" /></td>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_x" type="hidden" value="<?= $x?>" />
		    <input name="last_y" type="hidden" value="<?= $y?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
            <?php if(!empty($_POST['last_x'])) {?>
		    	<td><?php print $_POST['last_x'];?></td>
			    <td> X </td>
			    <td><?php print $_POST['last_y'];?></td>
			    <td> = </td>
	            <td><?php print $_POST['oldanswer'];?></td>
			<?php }?>        
                <td>    <?php	
				if (isset($_POST['answer1'])&&isset($_POST['answer2']) && isset($_POST['answer3'])) 
				{
					if ($_POST['the_answer']==$_POST['answer3'] && $_POST['answer3']==$_POST['answer1']+$_POST['answer2'] )
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td>
	</tr></table>
</form>

</body>
</html>