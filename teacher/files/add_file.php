<?php include("../../database.php"); ?>
<?php error_reporting(E_ERROR|E_WARNING);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
<?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
	$username=$_SESSION['username'];

if(isset($_POST['submit']) && $_FILES['file']['size'] > 0) 
{ 
$fileName = $_FILES['file']['name']; 
$tmpName  = $_FILES['file']['tmp_name']; 
$fileSize = $_FILES['file']['size']; 
$fileType = $_FILES['file']['type']; 

$fp      = fopen($tmpName, 'r'); 
$content = fread($fp, filesize($tmpName)); 
$content = addslashes($content); 
fclose($fp); 

if(!get_magic_quotes_gpc()) 
{ 
    $fileName = addslashes($fileName); 
} 

$query = "INSERT INTO files (name, size, type, data ) ". 
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')"; 

mysql_query($query) or die('Error, query failed');  

echo "<br>File $fileName uploaded<br>"; 
}  
?>
</head>
<body dir="rtl">
<form action="add_file.php" method="post" enctype="multipart/form-data">
<fieldset style="width:550px">
<legend>����� ����</legend>
<label for='name' >��� ����: </label>
<select name="grade" size="1"><option>�� ��� ����</option><option>�</option><option>�</option><option>�</option><option>�</option><option>�</option><option>�</option></select>
<label for='name' >���� ����: </label>
<select name="grade_num" size="1"><option>��� �����</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>�������</option><option>�������</option></select>
    <label for='name' >��� �������: </label>
<select name="label" size="1"><option></option><option>������ �����</option><option>���� ���</option><option>�����</option></select><br /><br />
<label>�� �����:</label><input type="text" name="textname"  /><input type="file" name="file" /><br />
<input type="submit" value="����">
</fieldset>
</form>



</body>
</html>