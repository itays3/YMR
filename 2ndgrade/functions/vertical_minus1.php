<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

<h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">����� ������ - ��� ���</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#FF0000;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">���� �� �������� �����</p>
    
	<?php 
	  session_start();
	  echo "<font size=5>";
	  $x = rand(1,100);
      $y = rand(1,$x);
?>
<form method="post" action="vertical_minus1.php" dir="ltr">    
    <table align="center" dir="ltr">
    	<tr>
    		<th rowspan="2"><input name="minus" type="hidden" value="-"/> - </th>
            <td align="center"><?php print $x; ?></td></tr>
		<tr>
			<td align="center"><?php print $y; ?></td><input name="equal" type="hidden" value="="/></tr>
		<tr><td></td><td align="center"><img src='image/equal.jpg' /></th></tr>
    		<?php $the_answer = $x-$y;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
		<tr><td></td><td><input name="answer" type="text" size="5"/></th>
 			<td> <input name="submit" type="submit" value="����" /></td>
  		</tr></table>
    <!-- this part shows the last exercise and the answer-->
	        <input name="last_a" type="hidden" value="<?= $x?>" />
		    <input name="last_b" type="hidden" value="<?= $y?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
			<?php if(!empty($_POST['last_a'])) {?>
<table align="right"><tr><td><?php print $_POST['last_a']?></td>
		    <td> - </td>
		    <td><?php print $_POST['last_b'];?></td>
		    <td> = </td>
		    
		    <td><?php print $_POST['oldanswer'];?></td>
            <?php } ?>
	            <td>    <?php	
				if (isset($_POST['answer']) ) 
				{
					if ($_POST['the_answer']==$_POST['answer'])
						print "<font color='green'> �� ����� </font>";
					else
						print "<font color='red'> ����</font>";
				}
			?></td>
          </tr>  
           
    </table>
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
('%s','1','$_POST[last_a]$_POST[minus]$_POST[last_b]$_POST[equal]$_POST[answer]','vertical_minus1','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if ($_POST['the_answer']!=$_POST['answer']){
$sql=sprintf("INSERT INTO statistics  (s_id, no_count, yes_answer, no_answer, subject,grade,grade_num)
VALUES
('%s', '1', '$_POST[last_a]$_POST[minus]$_POST[last_b]$_POST[equal]$_POST[the_answer]',
'$_POST[last_a]$_POST[minus]$_POST[last_b]$_POST[equal]$_POST[answer]','vertical_minus1','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";	
}}}
mysql_close($con);?>
   
</body>
</html>