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
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">����� ������ �������</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">���� �� �������� �����</p>
    
	<?php 
	 do{
	  echo "<font size=5>";
	  $num1 = rand(1,10);
  	  $x = rand(1,5);
      $z1 = rand(2,14);
	  
	  $num2 = rand(1,5);
	  $y = rand(1,10);
	  $z2 = rand(2,7);
  
	  $the_answer1 = $z1*$num1+$x;
	  $the_answer2 = $z2*$num2+$y;

	  $mehane = '2';
	  while ($mehane%$z1!=0 || $mehane%$z2!=0)
	  {
		  $mehane=$mehane+1;	  
	  }
	  
	  $temp1 = round($mehane/$z1);
	  $temp2 = round($mehane/$z2);
	  
	  $the_answer3 = round($the_answer1*$temp1);
	  $the_answer4 = round($the_answer2*$temp2);

	  $final = $the_answer3-$the_answer4;
	 }
	 while ($final<0)
	    
?>
<form method="post" action="fracture_b3.php" dir="ltr">    
<table align="center" dir="ltr">
    
        	
		<tr>
        	<td rowspan="2" align="center" ><?php print $num1; ?> </td>
        	<td align="center" style="border-bottom: thin solid black;"><?php print $x; ?> </td>
            <td rowspan="2" align="center" valign="middle">-</td>
            <td rowspan="2" align="center" ><?php print $num2; ?> </td>
        	<td align="center" style="border-bottom: thin solid black;"><?php print $y; ?> </td>
            <td rowspan="2" align="center" valign="middle">=</td>
        	<td align="center" style="border-bottom: thin solid black;"><input name="answer1" type="text" size="1" autocomplete="off"/></td>
            <td rowspan="3"><input name="submit" type="submit" value="����" /></td>
		</tr>
		<tr><td align="center"><?php print $z1; ?></td>
        	<td align="center"><?php print $z2; ?></td>
            <td> <input name="answer2" type="text" size="1" autocomplete="off"/></td>
		</tr>
			
		<input name="the_answer1" type="hidden" value="<?=$the_answer1?>"/>
    	<input name="the_answer2" type="hidden" value="<?=$the_answer2?>"/>
        <input name="the_final" type="hidden" value="<?=$final?>"/>
	
  		</tr></table>
       
    <!-- this part shows the last exercise and the answer-->
   			<input name="last_num1" type="hidden" value="<?= $num1?>" />
  			<input name="last_num2" type="hidden" value="<?= $num2?>" />
	        <input name="last_x" type="hidden" value="<?= $x?>" />
		    <input name="last_y" type="hidden" value="<?= $y?>"/>
            <input name="last_z1" type="hidden" value="<?= $z1?>" />
		    <input name="last_z2" type="hidden" value="<?= $z2?>"/>
            <input name="last_mehane" type="hidden" value="<?= $mehane?>"/>
            <?php if(!empty($_POST['last_x'])&&!empty($_POST['last_y'])) {?>
		<table align="center">
        <tr>
        	<td rowspan="2" align="center" ><?php print $_POST['last_num1']?></td>
		    <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_x'];?></td>
            <td rowspan="2" align="center" valign="middle">-</td>
            <td rowspan="2" align="center" ><?php print $_POST['last_num2']?></td>
		    <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['last_y'];?></td>
		    <td rowspan="2" align="center" valign="middle">=</td>
		    <td align="center" style="border-bottom: thin solid black;"><?php print $_POST['the_final'];?></td>
		<td rowspan="3" valign="middle">    
		<?php	
		if (isset($_POST['answer1'])&&isset($_POST['answer2']) ) 
		{
			if ($_POST['the_final']==$_POST['answer1'] && $_POST['last_mehane']==$_POST['answer2'])
				print "<font color='green'> �� ����� </font>";
			else
				print "<font color='red'> ����</font>";
		}
		?>
        </td>
		</tr>
        <tr>   
           <td align="center"><?php print $_POST['last_z1'];?></td>
           <td align="center"><?php print $_POST['last_z2'];?></td>
           <td align="center"><?php print $_POST['last_mehane'];?></td>
		<?php } ?>
		</tr></table>
</form>


</body>
</html>