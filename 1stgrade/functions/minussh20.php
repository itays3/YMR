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
			$x = rand(1,20);
			$y = rand(1,$x);
			$z = rand(1,$y);
	  while ($x-$y-$z<0)
	  {
			$x = rand(1,20);
			$y = rand(1,$x);
			$z = rand(1,$y);
	  }
	?>
<h1 dir="rtl" style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">������ ����� �� 20</h1>
<p dir="rtl" style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">���� �� �������� �����</p>
<form method="post" action="minussh20.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php print $x; ?></td>
		<td><input name="minus" type="hidden" value="-"/> - </td>
		<td><?php print $y; ?></td>
        <td><input name="minus" type="hidden" value="-"/> - </td>
		<td><?php print $z; ?></td>
		<td><input name="equal" type="hidden" value="="/>=</td>
        <?php $the_answer = $x-$y-$z;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
		<td><input name="answer" type="text" size="5"/></td>
		<td><input name="submit" type="submit" value="����" /></td>
    <!-- this part shows the last exercise and the answer-->
		
	        <input name="last_x" type="hidden" value="<?= $x?>" />
		    <input name="last_y" type="hidden" value="<?= $y?>"/>
            <input name="last_z" type="hidden" value="<?= $z?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
		    <?php if(!empty($_POST['last_x'])) {?>
            	<tr>
                <td><?php print $_POST['last_x']?></td>
			    <td> - </td>
			    <td><?php print $_POST['last_y'];?></td>
	            <td> - </td>
			    <td><?php print $_POST['last_z'];?></td>
			    <td> = </td>
			    <td><?php print $_POST['oldanswer'];?></td>
	    	<?php }?> 
                <td>    <?php	
				if (isset($_POST['answer']) ) 
				{
					if ($_POST['the_answer']==$_POST['answer'])
						print "<font color='green'> �� ����� </font>";
					else
						print "<font color='red'> ����</font>";
				}
			?></td></table>
</form>
<?php 
session_start();
$username = $_SESSION['username'];
$result = mysql_query("SELECT * from students WHERE username='$username'");
while($row = mysql_fetch_array($result)){
$grade = $row['grade_letter'];
$grade_num = $row['grade_num'];
if (isset($_POST['answer']) )
{
if ($_POST['the_answer']==$_POST['answer']){
$sql= sprintf("INSERT INTO statistics  (s_id,yes_count, yes_answer, subject, grade, grade_num)
VALUES
('%s','1','$_POST[last_x]$_POST[minus]$_POST[last_y]$_POST[minus]$_POST[last_z]$_POST[equal]$_POST[answer]','minussh20','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if ($_POST['the_answer']!=$_POST['answer']){
$sql=sprintf("INSERT INTO statistics  (s_id, no_count, yes_answer, no_answer, subject,grade,grade_num)
VALUES
('%s', '1', '$_POST[last_x]$_POST[minus]$_POST[last_y]$_POST[minus]$_POST[last_z]$_POST[equal]$_POST[the_answer]',
'$_POST[last_x]$_POST[minus]$_POST[last_y]$_POST[minus]$_POST[last_z]$_POST[equal]$_POST[answer]','minussh20','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 was added";	
}}}
mysql_close($con);?> 
</body>
</html>