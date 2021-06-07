<?php 
session_start();
header("Location: index.php");
include 'config.php';
$selectWorkers = $mysqli->query("SELECT * FROM workers");
$workers = [];
while ($item = $selectWorkers->fetch_array()) {
	array_push($workers, $item);
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
	<script src="js/jquery.js" defer></script>
</head>
<body>
	<div class="cover cover-left"></div>
	<div class="cover cover-right"></div>
	<header class="header">
		<?php include 'includes/header-top.php' ?>
	</header>
	<main class="admin__main">
		<div class="container">
			<div class="main__content">
				<h1 class="admin__title">Панель администратора</h1>
				<p class="admin__subtitle">Здесь Вы можете настроить контент своего сайта</p>
				<div class="admin__section">
					<h2 class="section__title">Блок "Команда"</h2>
					<div class="admin-section__content">
						<div class="admin-section__workers">
							<?php foreach ($workers as $worker) { ?>
								<div class="admin-section__worker">
									<h3 class="admin-section__subtitle">Член команды</h3>
									<form class="admin-section__form">
										<div class="admin-section__inputs">
											<input type="hidden" name="workerId" value="<?=$worker['ID']?>">
											<input class="admin-section__input" value="<?=$worker['name']?>" name="workerName" type="text" placeholder="Имя сотрудника">
											<input class="admin-section__input" value="<?=$worker['exp']?>" name="workerExp" type="number" placeholder="Стаж работы">
											<input class="admin-section__input" value="<?=$worker['position']?>" name="workerPosition" type="text" placeholder="Должность">
											<input class="admin-section__input admin-section__input_long" value="<?=$worker['image']?>" name="workerImage" type="text" placeholder="Ссылка на картинку">
										</div>
										<button class="admin-section__button">Применить</button>
									</form>
								</div>
							<?php } ?>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include 'includes/footer.php' ?>
</body>
</html>