<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>
    <h1 dir="rtl">סדרות - רמה קשה</h1>
<?php 
	  $x1 = rand(1,20);
	  $numa = rand(1,100);
      $numb = $numa+$x1;
	  $numc = $numb+$x1;
	  	  while ($numa-$x1<0 ||$numc+$x1>100)
	  {
		  $x1 = rand(1,20);
		  $numa = rand(1,100);
	      $numb = $numa+$x1;
		  $numc = $numb+$x1;
	  }

?>
<form method="post" action="sdarot3.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
           	
    		<td><input name="answera" type="text" size="1"/></td>
            <td> , </td>
            <td><?php print $numa; ?></td>
            <td> , </td>
			<td><?php print $numb; ?></td>
            <td> , </td>
            <td><?php print $numc; ?></td>
            <td> , </td>
            <td><input name="answerb" type="text" size="1"/></td>
            <td><input name="submita" type="submit" value="בדוק" /></td>
    
			<?php $the_answera = $numa-$x1;?><input name="the_answera" type="hidden" value="<?=$the_answera?>"/>
            <?php $the_answerb = $numc+$x1;?><input name="the_answerb" type="hidden" value="<?=$the_answerb?>"/>
   <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_numa" type="hidden" value="<?= $numa?>" />
		    <input name="last_numb" type="hidden" value="<?= $numb?>"/>
            <input name="last_numc" type="hidden" value="<?= $numc?>"/>
            <input name="oldanswera" type="hidden" value="<?= $the_answera?>"/>
            <input name="oldanswerb" type="hidden" value="<?= $the_answerb?>"/>
            <?php if(!empty($_POST['last_numa'])) {?>
		    	<td><?php print $_POST['oldanswera'];?></td>
                <td> , </td>
                <td><?php print $_POST['last_numa'];?></td>
			    <td> , </td>
			    <td><?php print $_POST['last_numb'];?></td>
			    <td> , </td>
                <td><?php print $_POST['last_numc'];?></td>
                <td> , </td>
	            <td><?php print $_POST['oldanswerb'];?></td>
			<?php }?>        
                <td>    <?php	
				if (isset($_POST['answera']) && isset($_POST['answerb'])  ) 
				{
					if ($_POST['the_answera']==$_POST['answera'] && $_POST['the_answerb']==$_POST['answerb'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?>
           </td>
         

	</tr></table>
</form>
 
</body>
</html>