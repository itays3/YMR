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
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">����� ������</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">���� �� �������� �����</p>
    
	<?php 
	  echo "<font size=5>";
	  $x = rand(10,1000);
      $y = rand(1,$x);
	  $the_answer = $x-$y;
?>
<form method="post" action="minus_v2.php" dir="ltr">    
    <table align="center" dir="ltr" >
    	<tr>
    		<th rowspan="2" ><input name="minus" type="hidden" value="-"/> - </th>
            <td align="center"><?php print $x; ?></td></tr>
		<tr>
			<td><input name="answer" type="text" size="3" autocomplete="off"/></td>
            <input name="equal" type="hidden" value="="/></tr>
    	<input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
		<tr><td></td><td align="center" style="border-top: thin solid black;"><?php print $the_answer; ?></th>
 			<td> <input name="submit" type="submit" value="����" /></td>
  		</tr></table>
    <!-- this part shows the last exercise and the answer-->
		
	        <input name="last_a" type="hidden" value="<?= $x?>" />
		    <input name="last_y" type="hidden" value="<?= $y?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
            
			<?php if(!empty($_POST['last_y'])) {?>
    <table align="right"><tr><td><?php print $_POST['last_a']?></td>
		    <td> - </td>
		    <td><?php print $_POST['last_y'];?></td>
		    <td> = </td> 
		    <td><?php print $_POST['oldanswer'];?></td>
            <?php } ?>
	            <td><? include('answer2.php') ?></td>
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
$s_id=$row['id'];
if (isset($_POST['answer']) )
{
if ($_POST['last_y']==$_POST['answer']){
$sql= sprintf("INSERT INTO statistics  (s_id,yes_count, yes_answer, subject, grade, grade_num)
VALUES
('%s','1','$_POST[last_a]$_POST[minus]$_POST[last_y]$_POST[equal]$_POST[answer]','minus_v2','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if ($_POST['last_y']!=$_POST['answer']){
$sql=sprintf("INSERT INTO statistics  (s_id, no_count, yes_answer, no_answer, subject,grade,grade_num)
VALUES
('%s', '1', '$_POST[last_a]$_POST[minus]$_POST[last_y]$_POST[equal]$_POST[the_answer]',
'$_POST[last_a]$_POST[minus]$_POST[last_y]$_POST[equal]$_POST[answer]','minus_v2','%s','%s')", $row['id'],$grade,$grade_num);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 was added";	
}}}

$query = "SELECT s_id, SUM(yes_count) FROM statistics WHERE s_id='$s_id' && subject='minus_v2'  GROUP BY s_id"; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
	$minus=$row['SUM(yes_count)'];
	
}

$query=sprintf("UPDATE connect SET minus_v2='%s' WHERE s_id='%s' ;",
mysql_real_escape_string($minus),
mysql_real_escape_string($s_id));
$result = mysql_query($query);

mysql_close($con);?>
</body>
</html>