<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../../database.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body dir="rtl">

    <h1 dir="rtl">בעיות מילוליות</h1>
	<p dir="rtl">פתור את התרגילים הבאים</p>
    <?php 
		echo "<font size=5>";
	
		$num1 = rand(1,29); // random first name
		$num6 = rand(1,29);	// random second name
		$num10 = rand(30,59);	// random first female name
		$num11 = rand(30,59);	// random second female name
		
		$num3 = rand(8,9);	// random for verb
		
		$num4 = rand(2,10);	// random first number
		$num7 = rand(2,10); // random second number 
		
		
		$num2 = rand(2,5);	// random pre name
		$num5 = rand(1,13); // random  noun
		$num8 = rand(1,4);	// random verb
		
		while ($num4+$num7>30)
		{
			$num4 = rand(2,10);
			$num7 = rand(2,10);
		}
		while ($num1 == $num6)
		{
			$num1 = rand(1,30);
			$num6 = rand(1,30);	
		}

//<!------------------------------------------------------------------------------->
		
		if ($num2==5)
		{
			$result = mysql_query("SELECT * from names where id=$num10");
			while($row = mysql_fetch_array($result))
			{
				echo "	";
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num8");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['fname'];
				echo " ";
				echo $num4;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['nname'];
				echo " ו";
			}
			$result = mysql_query("SELECT * from names where id=$num11");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num8");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['fname'];
				echo " ";
				echo $num7;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo $row['nname'];
				echo ".";
				echo "<br/>";
				echo "	";
				echo "כמה";
				echo " ";
				echo $row['nname'];
				echo " ";
				echo "לשתיהן ביחד?";
			}
		
		}
//<!------------------------------------------------------------------------------->		
		if ($num2==4)
		{
			$result = mysql_query("SELECT * from pre where id='2'");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['prename'];
			}
			$result = mysql_query("SELECT * from names where id=$num10");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num3");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['vname'];
				echo " ";
				echo $num4;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['nname'];
				echo " ו";
			}
			$result = mysql_query("SELECT * from pre where id='2'");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['prename'];
			}
			$result = mysql_query("SELECT * from names where id=$num11");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num3");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['vname'];
				echo " ";
				echo $num7;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo $row['nname'];
				echo ".";
				echo "<br/>";
				echo "	";
				echo "כמה";
				echo " ";
				echo $row['nname'];
				echo " ";
				echo "לשתיהן ביחד?";
			}
		}
//<!------------------------------------------------------------------------------->
		if ($num2==2)
		{
			$result = mysql_query("SELECT * from pre where id=$num2");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['prename'];
			}
			$result = mysql_query("SELECT * from names where id=$num1");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num3");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['vname'];
				echo " ";
				echo $num4;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['nname'];
				echo " ו";
			}
			$result = mysql_query("SELECT * from pre where id=$num2");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['prename'];
			}
			$result = mysql_query("SELECT * from names where id=$num6");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num3");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['vname'];
				echo " ";
				echo $num7;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo $row['nname'];
				echo ".";
				echo "<br/>";
				echo "	";
				echo "כמה";
				echo " ";
				echo $row['nname'];
				echo " ";
				echo "לשניהם ביחד?";
			}
		}
//<!------------------------------------------------------------------------------->
		else
		if ($num2==3)
		{
			$result = mysql_query("SELECT * from names where id=$num1");
			while($row = mysql_fetch_array($result))
			{
				echo "	";
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num8");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['vname'];
				echo " ";
				echo $num4;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['nname'];
				echo " ו";
			}
			$result = mysql_query("SELECT * from names where id=$num6");
			while($row = mysql_fetch_array($result))
			{
				echo  $row['name'];
			}
			$result = mysql_query("SELECT * from verbs where id=$num8");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo  $row['vname'];
				echo " ";
				echo $num7;
			}
			$result = mysql_query("SELECT * from nouns where id=$num5");
			while($row = mysql_fetch_array($result))
			{
				echo " ";
				echo $row['nname'];
				echo ".";
				echo "<br/>";
				echo "	";
				echo "כמה";
				echo " ";
				echo $row['nname'];
				echo " ";
				echo "לשניהם ביחד?";
			}
		
		}
		echo "</font>";
//<!------------------------------------------------------------------------------->
		
		
  	
	?>
<form method="post" action="verbal_p1.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>    		
			<?php $the_answer = $num4+$num7;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
			<td><input name="answer" type="text" size="3" autocomplete="off"/></td>
	   		<td><input name="submit" type="submit" value="בדוק" /></td>
  		</tr>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_num4" type="hidden" value="<?= $num4?>"/>
		    <input name="last_num7" type="hidden" value="<?= $num7?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
        <?php if(!empty($_POST['last_x'])) {?>
	    	<td><?php echo "<font size=4>"; print $_POST['last_num4']; echo "</font>"; ?></td>
		    <td><?php print "<font size=4> + </font>"?></td>
		    <td><?php echo "<font size=4>"; print $_POST['last_num7']; echo "</font>"; ?></td>
		    <td><?php print "<font size=4> = </font>"?></td>
		    <td><?php echo "<font size=4>"; print $_POST['oldanswer']; echo "</font>"?></td>
	    <? }?>  
                <td>    <?php	
				if (isset($_POST['answer']) ) 
				{
					if ($_POST['the_answer']==$_POST['answer'])
						print "<font color='green'; size=6> כל הכבוד </font>";
					else
						print "<font color='red'; size=6> טעות</font>";
				}
			?></td>
    </table>
</form>
</body>
</html>