<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../database.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body dir="rtl">
   <?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
?>
    <h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">����� ��������</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">���� �� �������� �����</p>
    <?php 
		echo "<font size=5>";
	
		$num1 = rand(1,20);
		$num2 = rand(1,3);
		$num3 = rand(8,9);
		$num4 = rand(10,30);
		$num5 = rand(1,16);
		
		$num6 = rand(1,20);
		$num7 = rand(2,30);
		
		$num8 = rand(1,4);
		while ($num4+$num7>30)
		{
			$num4 = rand(10,30);
			$num7 = rand(2,30);
		}
		while ($num1 == $num6)
		{
			$num1 = rand(1,20);
			$num6 = rand(1,20);	
		}
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
				echo " �";
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
				echo "���";
				echo " ";
				echo $row['nname'];
				echo " ";
				echo "������ ����?";
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
				echo " �";
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
				echo "���";
				echo " ";
				echo $row['nname'];
				echo " ";
				echo "������ ����?";
			}
		
		}
		echo "</font>";
//<!------------------------------------------------------------------------------->
		
		
  	
	?>
<form method="post" action="verbal30.php" dir="ltr">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>    		
			<?php $the_answer = $num4+$num7;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
			<td><input name="answer" type="text" size="3"/></td>
	   		<td><input name="submit" type="submit" value="����" /></td>
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
						print "<font color='green'; size=6> �� ����� </font>";
					else
						print "<font color='red'; size=6> ����</font>";
				}
			?></td>
    </table>
</form>

</body>
</html>