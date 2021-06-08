<?php 
session_start();
if(!$_SESSION['admin']) {
	$host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'auth.php';
  header("Location: http://$host$uri/$extra");
}

include 'config.php';

$selectWorkers = $mysqli->query("SELECT * FROM workers");
$workers = [];
while ($item = $selectWorkers->fetch_array()) {
	array_push($workers, $item);
}

$selectClients = $mysqli->query("SELECT * FROM clients");
$clients = [];
while($item = $selectClients->fetch_array()) {
	array_push($clients, $item);
}

$selectMovies = $mysqli->query("SELECT * FROM movies");
$movies = [];
while($item = $selectMovies->fetch_array()) {
	array_push($movies, $item);
}

$selectCategories = $mysqli->query("SELECT * FROM categories");
$categories = [];
while($item = $selectCategories->fetch_array()) {
	array_push($categories, $item);
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
	<script src="js/admin.js" defer></script>
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
				<p>Навигация по фильмам</p>
				<ul class="admin__nav">
					<?php foreach ($movies as $movie) { ?>
						<li><a href="#movie<?=$movie['ID']?>"><?=$movie['title']?></a></li>
					<?php } ?>
				</ul>
				<div class="admin__section">
					<div class="section__title-wp">
						<h2 class="section__title">Блок "Команда"</h2>
					</div>
					<div class="admin-section__content">
						<div class="admin-section__workers">
							<?php foreach ($workers as $worker) { ?>
								<div class="admin-section__worker">
									<h3 class="admin-section__subtitle">Член команды</h3>
									<form method="POST" action="queries/workers.php" class="admin-section__form">
										<div class="admin-section__inputs">
											<input type="hidden" name="workerId" value="<?=$worker['ID']?>">
											<div class="admin-section__input-wp">
												<span>Имя</span>
												<input class="admin-section__input" value="<?=$worker['name']?>" name="workerName" type="text" placeholder="Имя сотрудника">
											</div>
											<div class="admin-section__input-wp">
												<span>Стаж</span>
												<input class="admin-section__input" value="<?=$worker['exp']?>" name="workerExp" type="number" placeholder="Стаж работы">
											</div>
											<div class="admin-section__input-wp">
												<span>Должность</span>
												<input class="admin-section__input" value="<?=$worker['position']?>" name="workerPosition" type="text" placeholder="Должность">
											</div>
											<div class="admin-section__input-wp">
												<span><a href="<?=$worker['image']?>" target="_blank">Ссылка на картинку</a></span>
												<input class="admin-section__input admin-section__input_long" value="<?=$worker['image']?>" name="workerImage" type="text" placeholder="Ссылка на картинку">
											</div>
										</div>
										<button class="admin-section__button">Применить</button>
									</form>
								</div>
							<?php } ?>
						</div>		
					</div>
				</div>
				<div class="admin__section">
					<div class="section__title-wp">
						<h2 class="section__title">Блок "Клиенты"</h2>
						<span class="add__btn add-client__btn">+</span>
					</div>
					<div class="admin-section__content">
						<div class="admin-section__clients">
							<div class="admin-section__client admin-section__client-template">
								<h3 class="admin-section__subtitle">Клиент</h3>
								<form method="POST" action="queries/clients.php" class="admin-section__form">
									<div class="admin-section__inputs">
										<input type="hidden" name="clientAction" value="insert">
										<div class="admin-section__input-wp">
											<span>Название компании</span>
											<input class="admin-section__input" name="clientName" type="text" placeholder="Название компании">
										</div>
										<div class="admin-section__input-wp">
											<span>Ссылка на картинку</span>
											<input class="admin-section__input" name="clientImage" type="text" placeholder="Ссылка на картинку">
										</div>
									</div>
									<button class="admin-section__button">Добавить</button>
								</form>
							</div>
							<?php foreach ($clients as $client) { ?>
								<div class="admin-section__client">
									<h3 class="admin-section__subtitle">Клиент</h3>
									<form method="POST" action="queries/clients.php" class="admin-section__form">
										<div class="admin-section__inputs">
											<input type="hidden" name="clientAction" value="change">
											<input type="hidden" name="clientId" value="<?=$client['ID']?>">
											<div class="admin-section__input-wp">
												<span>Название компании</span>
												<input class="admin-section__input" value="<?=$client['name']?>" name="clientName" type="text" placeholder="Название компании">
											</div>
											<div class="admin-section__input-wp">
												<span><a href="<?=$client['image']?>" target="_blank">Ссылка на картинку</a></span>
												<input class="admin-section__input" value="<?=$client['image']?>" name="clientImage" type="text" placeholder="Ссылка на картинку">
											</div>
										</div>
										<button class="admin-section__button">Применить</button>
									</form>
									<form method="POST" action="queries/clients.php" class="admin-section__form-delete">
										<input type="hidden" name="clientId" value="<?=$client['ID']?>">
										<input type="hidden" name="clientAction" value="delete">
										<button class="admin-section__button">Удалить</button>
									</form>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="admin__section">
					<div class="section__title-wp">
						<h2 class="section__title">Фильмы</h2>
						<span class="add__btn add-movie__btn">+</span>
					</div>
					<div class="admin-section__content">
						<div class="admin-section__movies">
							<div class="admin-section__movie admin-section__movie-template">
								<h3 class="admin-section__subtitle">Фильм</h3>
								<form method="POST" action="queries/single-project.php" class="admin-section__form">
									<input type="hidden" name="movieAction" value="insert">
									<div class="admin-section__inputs admin-section__movies-inputs">
										<div class="admin-section__input-wp">
											<span>Название фильма</span>
											<input class="admin-section__input" name="movieTitle" type="text" placeholder="Название фильма">
										</div>
										<div class="admin-section__input-wp">
											<span>Ссылка на трейлер</span>
											<input class="admin-section__input" name="movieTrailer" type="text" placeholder="Ссылка на трейлер">
										</div>
										<div class="admin-section__input-wp">
											<span>Ссылка на постер</span>
											<input class="admin-section__input" name="movieSmallPoster" type="text" placeholder="Ссылка на постер">
										</div>
										<div class="admin-section__input-wp">
											<span>Ссылка на картинку фона страницы</span>
											<input class="admin-section__input" name="movieBigPoster" type="text" placeholder="Ссылка на картинку фона страницы">
										</div>
										<div class="admin-section__input-wp">
											<span>Жанр</span>
											<input class="admin-section__input" name="movieGenre" type="text" placeholder="Жанр">
										</div>
										<div class="admin-section__input-wp">
											<span>Год выпуска</span>
											<input class="admin-section__input" name="movieYear" type="text" placeholder="Год выпуска">
										</div>
										<div class="admin-section__input-wp">
											<span>Страна</span>
											<input class="admin-section__input" name="movieCountry" type="text" placeholder="Страна">
										</div>
										<div class="admin-section__input-wp">
											<span>Рейтинг</span>
											<input class="admin-section__input" name="movieRating" type="number" step=".1" placeholder="Рейтинг">
										</div>
										<div class="admin-section__input-wp">
											<span>Режиссер</span>
											<input class="admin-section__input" name="movieDirector" type="text" placeholder="Режиссер">
										</div>
										<div class="admin-section__input-wp">
											<span>Категория</span>
											<select name="movieCategory" class="admin-section__input admin-section__select">
												<?php foreach ($categories as $category) { ?>
													<option value="<?=$category['ID']?>"><?=$category['category']?></option>
												<?php } ?>
											</select>
										</div>
										<div class="admin-section__input-wp">
											<span>Главные роли</span>
											<textarea class="admin-section__input admin-section__textarea" name="movieActors" placeholder="Главные роли"></textarea>
										</div>
										<div class="admin-section__input-wp">
											<span>Описание (Enter - Новый абзац)</span>
											<textarea class="admin-section__input admin-section__textarea" name="moviePlot" placeholder="Описание"></textarea>
										</div>
										<div class="admin-section__input-wp admin-section__flex">
											<div>
												<span>Градиент левого блока (Сверху вниз)</span>
												<div class="admin-section__colors">
													<input class="admin-section__input-color" type="color" name="movieLeftColor[]">
													<input class="admin-section__input-color" type="color" name="movieLeftColor[]">
												</div>
											</div>
											<div class="">
												<span>Цвета кнопки (Стрелка, фон)</span>
												<div class="admin-section__colors">
													<input class="admin-section__input-color" type="color" name="movieButtonColor[]">
													<input class="admin-section__input-color" type="color" name="movieButtonColor[]">
												</div>
											</div>
										</div>
									</div>
									<button class="admin-section__button movies__button">Добавить</button>
								</form>
							</div>
							<?php foreach ($movies as $movie) { 
								$leftBgColorFrom = explode('; ', $movie['left_block_color'])[0];
								$leftBgColorTo = explode('; ', $movie['left_block_color'])[1];

								$buttonColor = explode('; ', $movie['button_color'])[0];
								$buttonBg = explode('; ', $movie['button_color'])[1];
								?>
								<div id="movie<?=$movie['ID']?>" class="admin-section__movie">
									<h3 class="admin-section__subtitle">Фильм</h3>
									<form method="POST" action="queries/single-project.php" class="admin-section__form">
										<div class="admin-section__inputs admin-section__movies-inputs">
											<input type="hidden" name="movieAction" value="change">
											<input type="hidden" name="movieId" value="<?=$movie['ID']?>">
											<div class="admin-section__input-wp">
												<span>Название фильма</span>
												<input class="admin-section__input" value="<?=$movie['title']?>" name="movieTitle" type="text" placeholder="Название фильма">
											</div>
											<div class="admin-section__input-wp">
												<span><a href="<?=$movie['trailer']?>" target="_blank">Ссылка на трейлер</a></span>
												<input class="admin-section__input" value="<?=$movie['trailer']?>" name="movieTrailer" type="text" placeholder="Ссылка на трейлер">
											</div>
											<div class="admin-section__input-wp">
												<span><a href="<?=$movie['small_poster']?>" target="_blank">Ссылка на постер</a></span>
												<input class="admin-section__input" value="<?=$movie['small_poster']?>" name="movieSmallPoster" type="text" placeholder="Ссылка на постер">
											</div>
											<div class="admin-section__input-wp">
												<span><a href="<?=$movie['big_poster']?>" target="_blank">Ссылка на картинку фона страницы</a></span>
												<input class="admin-section__input" value="<?=$movie['big_poster']?>" name="movieBigPoster" type="text" placeholder="Ссылка на картинку фона страницы">
											</div>
											<div class="admin-section__input-wp">
												<span>Жанр</span>
												<input class="admin-section__input" value="<?=$movie['genre']?>" name="movieGenre" type="text" placeholder="Жанр">
											</div>
											<div class="admin-section__input-wp">
												<span>Год выпуска</span>
												<input class="admin-section__input" value="<?=$movie['year']?>" name="movieYear" type="text" placeholder="Год выпуска">
											</div>
											<div class="admin-section__input-wp">
												<span>Страна</span>
												<input class="admin-section__input" value="<?=$movie['country']?>" name="movieCountry" type="text" placeholder="Страна">
											</div>
											<div class="admin-section__input-wp">
												<span>Рейтинг</span>
												<input class="admin-section__input" value="<?=$movie['rating']?>" name="movieRating" type="number" step=".1" placeholder="Рейтинг">
											</div>
											<div class="admin-section__input-wp">
												<span>Режиссер</span>
												<input class="admin-section__input" value="<?=$movie['director']?>" name="movieDirector" type="text" placeholder="Режиссер">
											</div>
											<div class="admin-section__input-wp">
												<span>Категория</span>
												<select name="movieCategory" class="admin-section__input admin-section__select">
													<?php foreach ($categories as $category) { ?>
														<option <?php  if ($category['ID'] == $movie['id_category']) {
															echo('selected');	
														} else {
															echo('');
														} ?> value="<?=$category['ID']?>"><?=$category['category']?></option>
													<?php } ?>
												</select>
											</div>
											<div class="admin-section__input-wp">
												<span>Главные роли</span>
												<textarea class="admin-section__input admin-section__textarea" name="movieActors" placeholder="Главные роли"><?=$movie['actors']?></textarea>
											</div>
											<div class="admin-section__input-wp">
												<span>Описание (Enter - Новый абзац)</span>
												<textarea class="admin-section__input admin-section__textarea" name="moviePlot" placeholder="Описание"><?=$movie['plot']?></textarea>
											</div>
											
											<div class="admin-section__input-wp admin-section__flex">
												<div>
													<span>Градиент левого блока (Сверху вниз)</span>
													<div class="admin-section__colors">
														<input class="admin-section__input-color" value="<?=$leftBgColorFrom?>" type="color" name="movieLeftColor[]">
														<input class="admin-section__input-color" value="<?=$leftBgColorTo?>" type="color" name="movieLeftColor[]">
													</div>
												</div>
												<div class="">
													<span>Цвета кнопки (Стрелка, фон)</span>
													<div class="admin-section__colors">
														<input class="admin-section__input-color" value="<?=$buttonColor?>" type="color" name="movieButtonColor[]">
														<input class="admin-section__input-color" value="<?=$buttonBg?>" type="color" name="movieButtonColor[]">
													</div>
												</div>
											</div>
										</div>
										<button class="admin-section__button movies__button">Применить</button>
									</form>
									<form method="POST" class="admin-section__form-delete" action="queries/single-project.php">
										<input type="hidden" name="movieId" value="<?=$movie['ID']?>">
										<input type="hidden" name="movieAction" value="delete">
										<button class="admin-section__button movies__button">Удалить</button>
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