<?php require_once("data.php"); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO forums (title, blog_entry) VALUES (%s, %s)",
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['blog_entry'], "text"));

  mysql_select_db($database_check_mag, $check_mag);
  $Result1 = mysql_query($insertSQL, $check_mag) or die(mysql_error());

  $insertGoTo = "manage_posts.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Add blog post</title>
<link href="style/admin.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="format">
<h2 align="right">����� ����� ����</h2>
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
<label for="title">����</label>
<?php 
$query="SELECT id,name FROM students WHERE grade_letter='�' || id='1'";
$result = mysql_query ($query);
echo "<font dir='rtl'>" , "<select name=student value=''>Student Name</option>";
// printing the list box select command
while($nt=mysql_fetch_array($result)){//Array or records stored in $nt
echo "<option value=$nt[id]>$nt[name]</option>";
/* Option values are added by looping through the array */
}
echo "</select>";// Closing of list box
?>  
  <p align="right">
    <label for="title">�����</label>
    <input name="title" type="text" class="textfields" id="title" maxlength="150" dir="rtl" />
  </p>
  <p align="right">
    <label for="blog_entry">:���� ������</label>
    <textarea name="blog_entry" cols="45" rows="5" class="textfields" id="blog_entry" dir="rtl"></textarea>
  </p>
  <p align="right">
    <input type="submit" name="insert" id="insert" value="����" />
  </p>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</div>
</body>
</html>