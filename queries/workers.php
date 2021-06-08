<?php 
include '../config.php';

$workerId = $_POST['workerId'];
$workerName = $_POST['workerName'];
$workerExp = $_POST['workerExp'];
$workerPosition = $_POST['workerPosition'];
$workerImage = $_POST['workerImage'];

$mysqli->query("UPDATE workers SET `name`='$workerName', `exp`='$workerExp', `position`='$workerPosition', `image`='$workerImage' WHERE `ID`='$workerId'");
header('Location: /admin.php');

?>