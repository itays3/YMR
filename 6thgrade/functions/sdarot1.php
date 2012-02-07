<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>
    <h1 dir="rtl">סדרות - רמה קלה</h1>
<?php 

	  $x = rand(1,20);
	  $num1 = rand(1,100);
      $num2 = $num1+$x;
	  $num3 = $num2+$x;
	  	  while ($num3+$x*2>100)
	  {
		  $x = rand(1,20);
		  $num1 = rand(1,100);
	      $num2 = $num1+$x;
		  $num3 = $num2+$x;
	  }
	 
?>
<form method="post" action="sdarot1.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
           
<!---Case3----> 
         
    		<td><?php print $num1; ?></td>
            <td> , </td>
			<td><?php print $num2; ?></td>
            <td> , </td>
            <td><?php print $num3; ?></td>
            <td> , </td>
            <td><input name="answer1" type="text" size="1" autocomplete="off"/></td>
            <td> , </td>
            <td><input name="answer2" type="text" size="1" autocomplete="off"/></td>
            <td><input name="submit" type="submit" value="בדוק" /></td>
    
			<?php $the_answer1 = $num3+$x;?><input name="the_answer1" type="hidden" value="<?=$the_answer1?>"/>
            <?php $the_answer2 = $the_answer1+$x;?><input name="the_answer2" type="hidden" value="<?=$the_answer2?>"/>
   <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="comma" type="hidden" value="," />
            <input name="last_num1" type="hidden" value="<?= $num1?>" />
		    <input name="last_num2" type="hidden" value="<?= $num2?>"/>
            <input name="last_num3" type="hidden" value="<?= $num3?>"/>
            <input name="oldanswer1" type="hidden" value="<?= $the_answer1?>"/>
            <input name="oldanswer2" type="hidden" value="<?= $the_answer2?>"/>
            <?php if(!empty($_POST['last_num1'])) {?>
		    	<td><?php print $_POST['last_num1'];?></td>
			    <td> , </td>
			    <td><?php print $_POST['last_num2'];?></td>
			    <td> , </td>
                <td><?php print $_POST['last_num3'];?></td>
                <td> , </td>
	            <td><?php print $_POST['oldanswer1'];?></td>
                <td> , </td>
	            <td><?php print $_POST['oldanswer2'];?></td>
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
           </td>
           
	</tr></table>
</form>
<?php 
session_start();
$username = $_SESSION['username'];
$result = mysql_query("SELECT * from students WHERE username='$username'");
while($row = mysql_fetch_array($result)){
$grade = $row['grade_letter'];
$grade_num = $row['grade_num'];
if (isset($_POST['answer1']) && isset($_POST['answer2']) )
{
if ($_POST['the_answer1']==$_POST['answer1'] && $_POST['the_answer2']==$_POST['answer2']){
$sql= sprintf("INSERT INTO statistics  (s_id,yes_count, yes_answer, subject, grade, grade_num)
VALUES
('%s','1','$_POST[last_num1]$_POST[comma]$_POST[last_num2]$_POST[comma]$_POST[last_num3]$_POST[comma]$_POST[oldanswer1]$_POST[comma]$_POST[oldanswer2]','sdarot1','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if ($_POST['the_answer1']!=$_POST['answer1'] || $_POST['the_answer2']!=$_POST['answer2']){
$sql=sprintf("INSERT INTO statistics  (s_id, no_count, yes_answer, no_answer, subject,grade,grade_num)
VALUES
('%s', '1', '$_POST[last_num1]$_POST[comma]$_POST[last_num2]$_POST[comma]$_POST[last_num3]$_POST[comma]$_POST[oldanswer1]$_POST[comma]$_POST[oldanswer2]',
'$_POST[last_num1]$_POST[comma]$_POST[last_num2]$_POST[comma]$_POST[last_num3]$_POST[comma]$_POST[answer1]$_POST[comma]$_POST[answer2]','sdarot1','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 was added";	
}}}
mysql_close($con);?>
</body>
</html>