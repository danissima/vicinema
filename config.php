<?php 

$db_host = 'pochtibutonzvetka';
$db_user = 'root';
$db_password = 'root';
$db_name = 'vicinema';

$mysqli = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$mysqli->query("SET NAMES 'UTF-8'");

?>