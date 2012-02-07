<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
</head>
<body>
<?php 
echo "<font size=5>";
$random_id = rand(1,22);
$random_factor = rand(1,5);
while ($random_factor *5 + $random_id >22){
	$random_id = rand(1,22);
	$random_factor = rand(1,5);
}
$result = mysql_query("SELECT * FROM gimetria WHERE id='$random_id'");
while($row = mysql_fetch_array($result)){
$letter1 = $row['letter'];
$num1 = $row['num'];
}
session_start();
$username = $_SESSION['username'];
$result = mysql_query("SELECT * from students WHERE username='$username'");
while($row = mysql_fetch_array($result)){
$grade = $row['grade_letter'];
$grade_num = $row['grade_num'];
if (isset($_POST['answer']))
{
if ($_POST['last_letter']==$_POST['answer']){
$sql= sprintf("INSERT INTO statistics  (s_id,yes_count, yes_answer, subject, grade, grade_num)
VALUES
('%s','1','$_POST[last_num]$_POST[equal]$_POST[last_letter]','gimatria2','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if ($_POST['last_letter']!=$_POST['answer']){
$sql=sprintf("INSERT INTO statistics  (s_id, no_count, yes_answer, no_answer, subject,grade,grade_num)
VALUES
('%s', '1', '$_POST[last_num]$_POST[equal]$_POST[last_letter]',
'$_POST[last_num]$_POST[equal]$_POST[answer]','gimatria2','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 was added";	
}}}
mysql_close($con);?>

    <h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">גימטריה - מספרים לאותיות</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">כתוב את הערך של האות הבאה</p>
<form method="post" action="gimatria3.php" dir="rtl">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    		<td><?php print $num; ?></td>
			<td><input name="equal" type="hidden" value="="/>=</td>
    		<td><input name="answer" type="text" size="5" autocomplete="off"/></td>
	   		<td><input name="submit" type="submit" value="בדוק" /></td>
  		</tr></table>
    	<!-- this part shows the last exercise and the answer-->
		
	        <input name="last_letter" type="hidden" value="<?= $letter?>" />
		    <input name="last_num" type="hidden" value="<?= $num?>"/>
			<table align="center"><tr><td>
			<?php	
			if (isset($_POST['answer'])) 
			{
				if ($_POST['last_letter']==$_POST['answer'])
					print "<font color='green'> כל הכבוד </font>";
				else
					print "<font color='red'> טעות</font>";
			}
			
			?></td></tr></table>
            <table align="center"><tr>
			<?php if(!empty($_POST['last_num'])) {?>
	    		<td><?php print $_POST['last_num']?></td>
			    <td> = </td>
			    <td><?php print $_POST['last_letter'];?></td>
			<?php } ?>
   			</tr></table>
</form>   
</body>
</html>