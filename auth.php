<?php
session_start();
if ($_SESSION['admin']) {
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'admin.php';
  header("Location: http://$host$uri/$extra");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ВиКино</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/logo.png">
</head>
<body>
  <div class="auth">
    <form class="authFrom" method="POST" action="isAuth.php">
      <h1 class="admin__title">Авторизуйтесь</h1>
      <input placeholder="Логин" class="admin-section__input" name="login" type="text">
      <input placeholder="Пароль" class="admin-section__input" name="password" type="password">
      <button class="admin-section__button">Войти</button>
    </form>
  </div>
</body>
</html>