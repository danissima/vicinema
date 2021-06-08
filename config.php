<?php 

$db_host = 'vicinema';
$db_user = 'root';
$db_password = 'root';
$db_name = 'vicinema';

$mysqli = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$mysqli->query("SET NAMES 'UTF-8'");

?>