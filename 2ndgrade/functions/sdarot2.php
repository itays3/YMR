<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>
    <h1 dir="rtl">סדרות - רמה בינונית</h1>
<?php 
	  $x = rand(1,20);
	  $num1 = rand(1,100);
      $num2 = $num1-$x;
	  $num3 = $num2-$x;
	  while ($num3-($x*2)<0)
	  {
		  $x = rand(1,20);
		  $num1 = rand(1,100);
	      $num2 = $num1-$x;
		  $num3 = $num2-$x;
	  }
	 

?>
<form method="post" action="sdarot2.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
            
    		<td><input name="answer1" type="text" size="1"/></td>
            <td> , </td>
            <td><input name="answer2" type="text" size="1"/></td>
            <td> , </td>
             <td><?php print $num3; ?></td>
            <td> , </td>
			<td><?php print $num2; ?></td>
            <td> , </td>
            <td><?php print $num1; ?></td>
            
            <td><input name="submit" type="submit" value="בדוק" /></td>
    
			
            <?php $the_answer2 = $num3-$x;?><input name="the_answer2" type="hidden" value="<?=$the_answer2?>"/>
            <?php $the_answer1 = $the_answer2-$x;?><input name="the_answer1" type="hidden" value="<?=$the_answer1?>"/>
   <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_num1" type="hidden" value="<?= $num1?>" />
		    <input name="last_num2" type="hidden" value="<?= $num2?>"/>
            <input name="last_num3" type="hidden" value="<?= $num3?>"/>
            <input name="oldanswer1" type="hidden" value="<?= $the_answer1?>"/>
            <input name="oldanswer2" type="hidden" value="<?= $the_answer2?>"/>
            <?php if(!empty($_POST['last_num1'])) {?>
		    	<td><?php print $_POST['oldanswer1'];?></td>
                <td> , </td>
                <td><?php print $_POST['oldanswer2'];?></td>
                <td> , </td>
                <td><?php print $_POST['last_num3'];?></td>
			    <td> , </td>
			    <td><?php print $_POST['last_num2'];?></td>
			    <td> , </td>
                <td><?php print $_POST['last_num1'];?></td>
            <?php }?>        
                <td>    <?php	
				if (isset($_POST['answer1']) && isset($_POST['answer2'])  ) 
				{
					if ($_POST['the_answer1']==$_POST['answer1'] && $_POST['the_answer2']==$_POST['answer2'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?>
<!---Case2---->           
 
	</tr></table>
</form>
 
</body>
</html>