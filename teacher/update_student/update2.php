<?php require_once("../posts/data.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Manage Posts</title>

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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_getPosts = 20;
$pageNum_getPosts = 0;
if (isset($_GET['pageNum_getPosts'])) {
  $pageNum_getPosts = $_GET['pageNum_getPosts'];
}
$startRow_getPosts = $pageNum_getPosts * $maxRows_getPosts;

mysql_select_db($database_check_mag, $check_mag);
if (isset($_POST['select']))
{
	$select=$_POST['select'];
}
else
{
	$select=1;
}
$query_getPosts = "SELECT id, username, password ,name, grade_letter, grade_num, date FROM students WHERE grade_letter='ב' && grade_num='$select'";
$query_limit_getPosts = sprintf("%s LIMIT %d, %d", $query_getPosts, $startRow_getPosts, $maxRows_getPosts);
$getPosts = mysql_query($query_limit_getPosts, $check_mag) or die(mysql_error());
$row_getPosts = mysql_fetch_assoc($getPosts);

if (isset($_GET['totalRows_getPosts'])) {
  $totalRows_getPosts = $_GET['totalRows_getPosts'];
} else {
  $all_getPosts = mysql_query($query_getPosts);
  $totalRows_getPosts = mysql_num_rows($all_getPosts);
}
$totalPages_getPosts = ceil($totalRows_getPosts/$maxRows_getPosts)-1;

$queryString_getPosts = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_getPosts") == false && 
        stristr($param, "totalRows_getPosts") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_getPosts = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_getPosts = sprintf("&totalRows_getPosts=%d%s", $totalRows_getPosts, $queryString_getPosts);
?>
</head>

<body>
<h2 align="right" style="font-family:Cursive;font-size:36px;color:#E00000;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">עידכון פרטי תלמיד </h2>
<p  align="right" style="font-family:Cursive;font-size:24px;color:#3300cc;font-style:italic;font-weight:normal;"><a href="../add_student/add2.php">הוספת תלמיד חדש</a></p>
<form id='check' action='update2.php' method='post' dir="rtl">
    <label for='select' >מספר כיתה: </label><br/>
    <select name="select" size="1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
    <option>6</option><option>7</option><option>8</option><option>9</option><option>מתוגברת</option><option>טיפולית</option></select>
	<input type="submit" name="submit3" value="הצג"/>
</form>
<div id="tb">
<table width="600" border="1" align="right">
  <tr>
	<th width="70" scope="col">&nbsp;</th>
	<th width="70" scope="col">&nbsp;</th>
    <th width="180" scope="col">כיתה</th>
    <th width="180" scope="col">סיסמא</th>
    <th width="180" scope="col">שם משתמש</th>
    <th width="180" scope="col">שם התלמיד</th>
  </tr>
  <?php do { ?>
  <tr>
    <td align="center"><a href="delete_s.php?id=<?php echo $row_getPosts['id']; ?>">מחק</a></td>
    <td align="center"><a href="s_update.php?id=<?php echo $row_getPosts['id']; ?>" >ערוך</a></td>
    <td align="right"><?php echo $row_getPosts['grade_letter'];echo " "; echo $row_getPosts['grade_num'];  ?></td>
    <td align="right"><?php echo $row_getPosts['password']; ?></td>	
    <td align="right"><?php echo $row_getPosts['username']; ?></td>
    <td align="right"><?php echo $row_getPosts['name']; ?></td>
  </tr>
  <?php } while ($row_getPosts = mysql_fetch_assoc($getPosts)); ?>
</table>

</div>
<table border="0" align="right" max-width="300px">
  <tr>
    <td><?php if ($pageNum_getPosts > 0) { // Show if not first page ?>
      <a href="<?php printf("%s?pageNum_getPosts=%d%s", $currentPage, 0, $queryString_getPosts); ?>">עמוד ראשון</a>
      <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_getPosts > 0) { // Show if not first page ?>
      <a href="<?php printf("%s?pageNum_getPosts=%d%s", $currentPage, max(0, $pageNum_getPosts - 1), $queryString_getPosts); ?>">עמוד קודם</a>
      <?php } // Show if not first page ?></td>
      <td><?php if ($pageNum_getPosts < $totalPages_getPosts) { // Show if not last page ?>
      <a href="<?php printf("%s?pageNum_getPosts=%d%s", $currentPage, $totalPages_getPosts, $queryString_getPosts); ?>">עמוד אחרון</a>
      <?php } // Show if not last page ?></td>
    <td><?php if ($pageNum_getPosts < $totalPages_getPosts) { // Show if not last page ?>
      <a href="<?php printf("%s?pageNum_getPosts=%d%s", $currentPage, min($totalPages_getPosts, $pageNum_getPosts + 1), $queryString_getPosts); ?>">עמוד הבא</a>
      <?php } // Show if not last page ?></td>
    
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($getPosts);
?>
