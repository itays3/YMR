<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

<h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">כפל במאונך</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
	  echo "<font size=5>";
	  $x = rand(10,99);
      $y = rand(10,99);

	  $the_answer = $x*$y;
?>
<form method="post" action="kefel_a1.php" dir="ltr">    
    <table align="center" dir="ltr">
    	<tr>
    		<th rowspan="2"><input name="plus" type="hidden" value="*"/> X </th>
            <td align="center"><?php print $x; ?></td></tr>
		<tr>
			<td align="center" style="border-bottom: thin solid black;"><?php print $y; ?>
            </td><input name="equal" type="hidden" value="="/></tr>
		<input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
		<tr><td></td><td><input name="answer" type="text" size="5"/></th>
 			<td> <input name="submit" type="submit" value="בדוק" /></td>
  		</tr></table>
    <!-- this part shows the last exercise and the answer-->
	        <input name="last_x" type="hidden" value="<?= $x?>" />
		    <input name="last_y" type="hidden" value="<?= $y?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
			<?php if(!empty($_POST['last_x'])) {?>
<table align="right"><tr><td><?php print $_POST['last_x']?></td>
		    <td> X </td>
		    <td><?php print $_POST['last_y'];?></td>
		    <td> = </td>
		    
		    <td><?php print $_POST['oldanswer'];?></td>
            <?php } ?>
	            <td><? include('../answer1.php') ?></td>
          </tr>  
           
    </table>
</form>


</body>
</html>