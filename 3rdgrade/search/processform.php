<?php

// include MySQL-processing classes

require_once 'mysql.php';

try{
mysql_query("SET NAMES 'hebrew'");
// connect to MySQL

$db=new MySQL(array
('host'=>'localhost','user'=>'root','password'=>'597135',
'database'=>'users'));

$searchterm=$db->escapeString($_GET['searchterm']);

$result=$db->query("SELECT search, result FROM
search_data WHERE MATCH(search) AGAINST
('$searchterm') ");

if(!$result->countRows()){

echo '<div class="maincontainer"><h2>No results were found. Go
back and try a new search.</h2></div>'."n";

}

else{

// display search results

echo '<div class="maincontainer"><h2>Your search criteria
returned '.$result->countRows().' results.</h2>'."n";

while($row=$result->fetchRow()){

echo '<div class="rowcontainer"><p><strong>search:
</strong>'.$row['search'].'</p><p><strong>result:
</strong>'.$row['result'].'</p></div>'."n";

}

}

echo '</div>';

}

catch(Exception $e){

echo $e->getMessage();

exit();

}

?>
