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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE forums SET title=%s, blog_entry=%s WHERE post_id=%s",
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['blog_entry'], "text"),
                       GetSQLValueString($_POST['post_id'], "int"));

  mysql_select_db($database_check_mag, $check_mag);
  $Result1 = mysql_query($updateSQL, $check_mag) or die(mysql_error());

  $updateGoTo = "manage_posts1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_getPost = "-1";
if (isset($_GET['post_id'])) {
  $colname_getPost = $_GET['post_id'];
}
mysql_select_db($database_check_mag, $check_mag);
$query_getPost = sprintf("SELECT post_id, title, blog_entry FROM forums WHERE post_id = %s", GetSQLValueString($colname_getPost, "int"));
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

<h2 align="right">עריכת הודעה</h2>
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  <p align="right">
    <label for="title">כותרת</label>
    <input name="title" type="text" class="textfields" id="title" value="<?php echo $row_getPost['title']; ?>" maxlength="150" dir="rtl" />
  </p>
  <p align="right">
    <label for="blog_entry">:תוכן ההודעה</label>
    <textarea name="blog_entry" cols="45" rows="5" class="textfields" id="blog_entry" dir="rtl"><?php echo $row_getPost['blog_entry']; ?></textarea>
  </p>
  <p align="right">
    <input type="submit" name="insert" id="insert" value="שמור" />
    <input name="post_id" type="hidden" id="post_id" value="<?php echo $row_getPost['post_id']; ?>" />
  </p>
  <input type="hidden" name="MM_update" value="form1" />
</form>
<p>&nbsp;</p>

</body>
</html>
<?php
mysql_free_result($getPost);
?>
