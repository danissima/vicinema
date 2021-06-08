<?php
session_start();
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$login = $_POST['login'];
$password = $_POST['password'];

if ($login == 'admin' && $password == 'admin') {
  $_SESSION['admin'] = true;
  $extra = 'admin.php';
  header("Location: http://$host$uri/$extra");
} else {
  $extra = 'auth.php';
  header("Location: http://$host$uri/$extra");
}


?>