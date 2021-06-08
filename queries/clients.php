<?php 
include '../config.php';

$action = $_POST['clientAction'];
$clientId = $_POST['clientId'];

if ($action == 'change' || $action == 'insert') {
  $clientName = $_POST['clientName'];
  $clientImage = $_POST['clientImage'];
}

if ($action == 'change') {
  $mysqli->query("UPDATE clients SET `name`='$clientName', `image`='$clientImage' WHERE `ID`='$clientId'");
} else if ($action == 'insert' && $clientImage) {
  $mysqli->query("INSERT INTO `clients` (`ID`, `name`, `image`) VALUES (NULL, '$clientName', '$clientImage')");
} else if ($action == 'delete') {
  $mysqli->query("DELETE FROM clients WHERE ID = '$clientId'");
}
header('Location: /admin.php');

?>