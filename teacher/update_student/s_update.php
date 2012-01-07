<?php require_once("../posts/data.php"); ?>
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE students SET name=%s, grade_letter=%s, grade_num=%s  WHERE id=%s",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['grade_letter'], "text"),
					   GetSQLValueString($_POST['grade_num'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_check_mag, $check_mag);
  $Result1 = mysql_query($updateSQL, $check_mag) or die(mysql_error());

  $updateGoTo = "update1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_getPost = "-1";
if (isset($_GET['id'])) {
  $colname_getPost = $_GET['id'];
}
mysql_select_db($database_check_mag, $check_mag);
$query_getPost = sprintf("SELECT id, name, grade_letter, grade_num FROM students WHERE id = %s", GetSQLValueString($colname_getPost, "int"));
$getPost = mysql_query($query_getPost, $check_mag) or die(mysql_error());
$row_getPost = mysql_fetch_assoc($getPost);
$totalRows_getPost = mysql_num_rows($getPost);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Update post</title>
<link href="style/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<h2 align="right">עריכת פרטי תלמיד</h2>
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>" dir="rtl">
  <p align="right">
    <label for="name">שם התלמיד</label>
    <input name="name" type="text" class="textfields" id="name" value="<?php echo $row_getPost['name']; ?>" maxlength="25" dir="rtl" />
  </p>
    <p align="right">
    <label for="grade_letter">כיתה</label>
    <input name="grade_letter" type="text" class="textfields" id="grade_letter" value="<?php echo $row_getPost['grade_letter']; ?>" maxlength="25" dir="rtl" />
  </p>
  <p align="right">
    <label for="grade_num">מספר כיתה</label>
    <input name="grade_num" type="text" class="textfields" id="grade_num"  value="<?php echo $row_getPost['grade_num']; ?>" />
  </p>
  <p align="right">
    <input type="submit" name="insert" id="insert" value="שמור" />
    <input name="id" type="hidden" id="id" value="<?php echo $row_getPost['id']; ?>" />
  </p>
  <input type="hidden" name="MM_update" value="form1" />
</form>
<p>&nbsp;</p>

</body>
</html>
<?php
mysql_free_result($getPost);
?>
