<?php 

$db_host = 'localhost';
$db_user = 'oda123_vicinema';
$db_password = 'root-vicinema1';
$db_name = 'oda123_vicinema';

$mysqli = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$mysqli->query("SET NAMES 'UTF-8'");

?>