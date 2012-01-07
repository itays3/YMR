<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>
   <?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
?>
    <h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">חיבור עד 10</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p>

	<?php 
	  echo "<font size=5>";
	  $x = rand(1,10);
      $y = rand(1,10);
	  while ($x+$y >10 )
	  {
	  	$x = rand(1,10);
      	$y = rand(1,10);
	  }
?>

<form method="post" action="plus10.php" dir="ltr">    
    <table cellpadding="3" cellspacing="3" align="center" dir="ltr">
    	<tr>
    		<td><?php print $x; ?></td>
			<td><input name="plus" type="hidden" value="+"/> + </td>
			<td><?php print $y; ?></td>
			<td><input name="equal" type="hidden" value="="/>=</td>
    		<?php $the_answer = $y+$x;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
			<td><input name="answer" type="text" size="5"/></td>
 			<td> <input name="submit" type="submit" value="בדוק" /></td>
  		</tr>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_a" type="hidden" value="<?= $x?>" />
		    <input name="last_b" type="hidden" value="<?= $y?>"/>
            <input name="oldanswer" type="hidden" value="<?= $the_answer?>"/>
            
			<?php if(!empty($_POST['last_a'])) {?>
	    	<td><?php print $_POST['last_a']?></td>
		    <td> + </td>
		    <td><?php print $_POST['last_b'];?></td>
		    <td> = </td>
		    
		    <td><?php print $_POST['oldanswer'];?></td>
            <?php } ?>
	            <td>    <?php	
				if (isset($_POST['answer']) ) 
				{
					if ($_POST['the_answer']==$_POST['answer'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?></td>
          </tr>  
           
    </table>
</form>
<?php 
$result = mysql_query("SELECT id from students ");
$row = mysql_fetch_array($result);
if (isset($_POST['answer']) )
{
if ($_POST['the_answer']==$_POST['answer']){
$sql= sprintf("INSERT INTO statistics  (s_id,yes_count, yes_answer, subject)
VALUES
('%s','1','$_POST[last_a]$_POST[plus]$_POST[last_b]$_POST[equal]$_POST[answer]','plus')", $row['id']);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if ($_POST['the_answer']!=$_POST['answer']){
$sql=sprintf("INSERT INTO statistics  (s_id, no_count, yes_answer, no_answer, subject)
VALUES
('%s', '1', '$_POST[last_a]$_POST[plus]$_POST[last_b]$_POST[equal]$_POST[the_answer]',
'$_POST[last_a]$_POST[plus]$_POST[last_b]$_POST[equal]$_POST[answer]','plus')", $row['id']);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 was added";	
}}
mysql_close($con);?>
   
</body>
</html>