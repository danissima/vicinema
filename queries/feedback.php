<?php 
include '../config.php';

$feedbackId = $_POST['feedbackId'];
$action = $_POST['feedbackAction'];
if ($action == 'insert') {
    $feedbackName = $_POST['feedbackName'];
    $feedbackMail = $_POST['feedbackMail'];
    $feedbackPhone = $_POST['feedbackPhone'];
    
    $mysqli->query("INSERT INTO feedback (`ID`, `name`, `mail`, `phone`) VALUES (NULL, '$feedbackName', '$feedbackMail', '$feedbackPhone')");
    header("Location: /");
} else if ($action == 'delete') {
    $mysqli->query("DELETE FROM feedback WHERE ID = '$feedbackId'");
    header("Location: /admin.php");
}


?>