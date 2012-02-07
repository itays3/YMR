<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">כפל עד 20</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
<?php 
	  session_start();
	  $x = rand(1,10);
      $y = rand(1,10);
	  while ($x*$y>20)
	  {
	  	$x = rand(1,10);
      	$y = rand(1,10);
	  }
?>
<form method="post" action="kefel20.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    		<td><?php print $x; ?></td>
			<td><input name="kefel" type="hidden" value="*"/> X </td>
			<td><?php print $y; ?></td>
			<td>=</td>
	        <?php $the_answer = $x*$y;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
			<td><input name="answer" type="text" size="5" autocomplete="off"/></td>
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
				if (isset($_POST['answer']) ) 
				{
					if ($_POST['the_answer']==$_POST['answer'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td>
	</tr></table>
</form>

</body>
</html>