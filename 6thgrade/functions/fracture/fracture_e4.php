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
    style="font-family:Cursive;font-size:34px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">כפל שברים עשרוניים במאונך</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>
    
	<?php 
	  echo "<font size=5>";
	  $choose1 = rand(1,3);
	  
	  do{
	  $x = rand(1,10);
      $y = rand(1,10);
	  $num1 = round($x/$y,$choose1);
	  }
	  while ($x%$y==0);
	  $choose2 = rand(1,2);
	  if ($choose2==1)
	  $num2=0.1;
	  if ($choose2==2)
	  $num2=0.01;
   
	  $the_answer = $num1*$num2;
  
?>
<form method="post" action="fracture_e4.php" dir="ltr">    
<table align="center" dir="ltr">
    
        	
		<tr>
        	<td rowspan="2 "align="center" valign="middle">x</td>
        	<td align="center" ><?php print $num1; ?> </td>
        	
           
        	
		</tr>
		
		<input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
    	<tr>
        <td align="center" style="border-bottom: thin solid black;" ><?php print $num2; ?> </td></tr>
        
        <tr>
        <td><input name="submit" type="submit" value="בדוק" /></td>
        <td align="center" ><input name="answer" type="text" size="1" autocomplete="off"/></td>
        </tr>
</table>
       
    <!-- this part shows the last exercise and the answer-->
	        <input name="last_num1" type="hidden" value="<?= $num1?>" />
		    <input name="last_num2" type="hidden" value="<?= $num2?>"/>
           
		    
            <?php if(!empty($_POST['last_num1'])&&!empty($_POST['last_num2'])) {?>
		<table align="center">
        <tr>
        	<td align="center"><?php print $_POST['last_num1']?></td>
		    <td align="center" valign="middle">x</td>
		    <td align="center"><?php print $_POST['last_num2'];?></td>
		    <td align="center" valign="middle">=</td>
		    <td align="center"><?php print $_POST['the_answer'];?></td>
		<td rowspan="3" valign="middle">    
		<?php	
		if (isset($_POST['answer'])) 
		{
			if ($_POST['the_answer']==$_POST['answer'])
				print "<font color='green'> כל הכבוד </font>";
			else
				print "<font color='red'> טעות</font>";
		}
		?>
        </td>
		</tr>
		<?php } ?>
		</table>
</form>


</body>
</html>