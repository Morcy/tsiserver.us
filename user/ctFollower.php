<?php
$id = $_GET['id'];
$link = mysql_connect("localhost","SEN","M5ZJ5AGDmtN4spHu");
mysql_select_db("PlayStation_Network00", $link);

$result = mysql_query("SELECT * FROM subs WHERE `user` = '".$id."'", $link);
$num_rows = mysql_num_rows($result);

echo $num_rows;

?>