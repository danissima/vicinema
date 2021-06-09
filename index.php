<?php 

include 'config.php';

$selectClients = $mysqli->query("SELECT * FROM clients");
$clients = [];
while ($item = $selectClients->fetch_array()) {
	array_push($clients, $item);
}

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
	<link rel="stylesheet" href="css/slick.css">
	<script src="js/jquery.js" defer></script>
	<script src="js/jquery-ui.min.js" defer></script>
	<script src="js/slick.min.js" defer></script>
	<script src="js/index.js" defer></script>
</head>
<body>
<div class="cover cover-left"></div>
<div class="cover cover-right"></div>
<header class="header">
	<?php include 'includes/header-top.php' ?>
	<div class="header__left">
		<div class="header__left-title-wp">
			<div class="header__left-title-in">
				<img class="logo-img" src="images/logo.png" alt="camera">
				<img class="title-img" src="images/logo-title.png" alt="vicinema">
			</div>
		</div>
		<form action="queries/feedback.php" method="post" class="header__left-form-wp polygon">
			<input type="hidden" name="feedbackAction" value="insert">
			<p class="header__form-text">Проконсультируем и бесплатно предложим идеи. Заполните форму и мы свяжемся с вами</p>
			<label for="name" class="header__form-item-wp">
				<img src="images/icons/person.png" alt="person" class="header__form-item-icon">
				<input required name="feedbackName" type="text" placeholder="Имя" class="header__form-item-input">
			</label>
			<label for="name" class="header__form-item-wp">
				<img src="images/icons/mail.png" alt="mail" class="header__form-item-icon">
				<input required name="feedbackMail" type="email" placeholder="E-mail" class="header__form-item-input">
			</label>
			<label for="name" class="header__form-item-wp">
				<img src="images/icons/phone.png" alt="phone" class="header__form-item-icon">
				<input required name="feedbackPhone" type="text" placeholder="Телефон" class="header__form-item-input">
			</label>
			<button class="header__form-button">Отправить</button>
		</form>
	</div>
	<div class="header__right index__right">
		<div class="header__media">
			<a href="#" class="media-item">
				<img src="images/icons/vk-white.png" alt="vk">
			</a>
			<a href="#" class="media-item">
				<img src="images/icons/insta-white.png" alt="insta">
			</a>
			<a href="#" class="media-item">
				<img src="images/icons/youtube-white.png" alt="	tube">
			</a>
		</div>
		<div class="header-right__circle"></div>
		<div class="header__camera">
			<img src="images/camera.png" alt="camera">
		</div>
	</div>
	
</header>		
<main class="main">
	<section class="about-us">
		<div class="container about-us__container">
			<div class="about-us__in">
				<div class="about-us__title-wp">
					<h2 class="section__title section__title_white">О компании</h2>
				</div>
				<div class="about-us__content polygon">
					<p class="about-us__text">Наша киностудия  — это шесть современных, специализированных павильонов, собственное кинооборудование, 
					которое удовлетворит самую избирательную кино-съемочную группу, одна из самых высокотехнологичных студий post-production в России, 
					цех изготовления декораций, собственный автопарк.</p>
					<p class="about-us__text">Передовое киносъемочное оборудование позволяет организовать киносъемочный процесс любой сложности «под ключ».</p>
				</div>
			</div>
		</div>
	</section>
	<section class="clients">
		<div class="container">
			<div class="section__in clients__in">
				<div class="section__title-wp">
					<h2 class="section__title">Наши клиенты</h2>
				</div>
				<div class="clients__items-wp">
					<?php 
						foreach ($clients as $client) {
					?>
						<div class="clients__item-wp">
							<img src="<?=$client['image']?>" alt="<?=$client['name']?>" class="clients__img">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="workers">
		<div class="workers__overlay">
			<div class="container">
				<div class="section__in workers__in">
					<div class="workers__items-wp">
						<?php 
							foreach ($workers as $worker) {
						?>
							<div class="workers__item-wp">
								<div class="workers__item polygon">
									<img src="<?=$worker['image']?>" alt="<?=$worker['name']?>" class="workers__img">
								</div>
								<div class="workers__position-wp"><span class="workers__position"><?=$worker['position']?></span></div>
								<div class="workers__about-wp workers__about-wp1">
									<div class="workers__exp">Стаж <?=$worker['exp']?> лет</div>
									<div class="workers__name"><?=$worker['name']?></div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="works">
		<div class="works__overlay">
			<div class="container">
				<div class="works__in">
					<div class="section__title-wp">
						<h2 class="section__title section__title_right">Что мы снимаем</h2>
					</div>
					<div class="works__items-wp">
						<div class="works__item polygon">
							<div class="works__item-content">
								<img src="images/products/product1.jpg" alt="filming people" class="works__item-img">
								<div class="works__item-title-wp">
									<h3 class="works__item-title">Рекламные ролики</h3>
								</div>
							</div>
						</div>
						<div class="works__item polygon">
							<div class="works__item-content">
								<img src="images/products/product2.png" alt="filming people" class="works__item-img">
								<div class="works__item-title-wp">
									<h3 class="works__item-title">Музыкальные видео</h3>
								</div>
							</div>
						</div>
						<div class="works__item polygon">
							<div class="works__item-content">
								<img src="images/products/product3.jpeg" alt="filming people" class="works__item-img">
								<div class="works__item-title-wp">
									<h3 class="works__item-title">Телесериалы</h3>
								</div>
							</div>
						</div>
						<div class="works__item polygon">
							<div class="works__item-content">
								<img src="images/products/product4.jpg" alt="filming people" class="works__item-img">
								<div class="works__item-title-wp">
									<h3 class="works__item-title">Фильмы</h3>
								</div>
							</div>
						</div>
						<div class="works__item polygon">
							<div class="works__item-content">
								<img src="images/products/product5.jpg" alt="filming people" class="works__item-img">
								<div class="works__item-title-wp works__item-title_small">
									<h3 class="works__item-title works__item-title_small">Мультипликация</h3>
								</div>
							</div>
						</div>
						<div class="works__item polygon">
							<div class="works__item-content">
								<img src="images/products/product6.jpg" alt="filming people" class="works__item-img">
								<div class="works__item-title-wp">
									<h3 class="works__item-title">Социальная реклама</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pros">
		<div class="container">
			<div class="pros__in">
				<div class="section__title-wp">
					<h2 class="section__title section__title_white">Почему стоит заказать у нас</h2>
				</div>
				<div class="pros__items-wp">
					<div class="pros__item pros__item_reversed">
						<div class="pros__num-wp"><span class="pros__num">1</span></div>
						<div class="pros__arrow-wp"><img src="images/icons/double-arrow.png" alt="double arrow" class="pros__arrow"></div>
						<div class="pros__content">
							<img src="images/icons/hand.png" alt="thumb up" class="pros__content-icon">
							<p class="pros__text">Гарантируем 100% удовлетворение результатом</p>
						</div>
					</div>
					<div class="pros__item">
						<div class="pros__num-wp"><span class="pros__num">2</span></div>
						<div class="pros__arrow-wp"><img src="images/icons/double-arrow.png" alt="double arrow" class="pros__arrow"></div>
						<div class="pros__content">
							<img src="images/icons/light.png" alt="light" class="pros__content-icon">
							<p class="pros__text">Бесплатные креативные идеи</p>
						</div>
					</div>
					<div class="pros__item pros__item_reversed">
						<div class="pros__num-wp"><span class="pros__num">3</span></div>
						<div class="pros__arrow-wp"><img src="images/icons/double-arrow.png" alt="double arrow" class="pros__arrow"></div>
						<div class="pros__content">
							<img src="images/icons/atom.png" alt="atom" class="pros__content-icon">
							<p class="pros__text">Весь спектр услуг – от идеи до продвижения</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include "includes/footer.php" ?>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Рекламные ролики</h2>
		</div>
		<p class="modal__text">
			Для воплощения самых смелых идей мы готовы привлекать к съемкам самых лучших представителей индустрии. Наши преимущества:
		</p>
		<ul class="modal__list modal__text">
			<li>Строительство декораций любых сложностей</li>
			<li>Применения самой современной техники киносъемки</li>
			<li>Дикторы  со всего мира</li>
		</ul>
		<div class="modal__imgs">
			<div class="modal__img">
				<a href="#"><img src="images/what-we-do/adv/img1.png" alt="item"></a>
			</div>
			<div class="modal__img">
				<a href="#"><img src="images/what-we-do/adv/img2.png" alt="item"></a>
			</div>
			<div class="modal__img">
				<a href="#"><img src="images/what-we-do/adv/img3.png" alt="item"></a>
			</div>
			<div class="modal__img">
				<a href="#"><img src="images/what-we-do/adv/img4.png" alt="item"></a>
			</div>
			<div class="modal__img">
				<a href="#"><img src="images/what-we-do/adv/img5.png" alt="item"></a>
			</div>
			<div class="modal__img">
				<a href="#"><img src="images/what-we-do/adv/img6.png" alt="item"></a>
			</div>
		</div>
		<a href="#" class="modal__more modal__text">Больше роликов на нашем YouTube канале: <img src="images/icons/youtube-red.png" alt="youtube"></a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Музыкальные видео</h2>
		</div>
		<p class="modal__text">
			Музыка и видео совмещаясь образуют новый вид искусства, воздействуя на зрителя с утроенной силой:
		</p>
		<ul class="modal__list modal__text">
			<li>Музыкальные клипы</li>
			<li>Концерты и музыкальные постановки</li>
			<li>Прямые эфиры для исполнителей.</li>
		</ul>
		<div class="modal__imgs">
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
		</div>
		<a href="#" class="modal__more">Больше роликов на нашем YouTube канале</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Телесериалы</h2>
		</div>
		<p class="modal__text">
			Самый популярный вид телеискусства. Так же он привлекаем тем, что при большом количестве серий стоимость одной серии незначительна. Форматы:
		</p>
		<ul class="modal__list modal__text">
			<li>Художественные телесериалы</li>
			<li>Документальные сериалы</li>
			<li>Короткометражные сериалы для интернета</li>
			<li>Павильонные ситкомы</li>
		</ul>
		<div class="modal__imgs">
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
		</div>
		<a href="#" class="modal__more">Больше роликов на нашем YouTube канале</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Фильмы</h2>
		</div>
		<p class="modal__text">
			Для воплощения самых смелых идей мы готовы привлекать к съемкам самых лучших представителей индустрии. Наши преимущества:
		</p>
		<ul class="modal__list modal__text">
			<li>Строительство декораций любых сложностей</li>
			<li>Применения самой современной техники киносъемки</li>
			<li>Дикторы  со всего мира</li>
		</ul>
		<div class="modal__imgs">
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
		</div>
		<a href="#" class="modal__more">Больше роликов на нашем YouTube канале:</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Мультипликация</h2>
		</div>
		<p class="modal__text">
			Самый оптимальный формат для широкой аудитории - ярко, нейтрально, интересно.
		</p>
		<ul class="modal__list modal__text">
			<li>Прорисовка персонажей и сюжета</li>
			<li>Возможности озвучивать на любые языки</li>
			<li>Легкая актуализация через год и более</li>
		</ul>
		<div class="modal__imgs">
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
		</div>
		<a href="#" class="modal__more">Больше роликов на нашем YouTube канале:</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Социальная реклама</h2>
		</div>
		<p class="modal__text">
			Наиболее актуальный формат для благо-творительных организаций, между-народных фондов и проектов ООН:
		</p>
		<ul class="modal__list modal__text">
			<li>На документальных кадрах</li>
			<li>С привлечением актёров</li>
			<li>С привлечением звёзд кино, шоу-бизнеса, спорта</li>
		</ul>
		<div class="modal__imgs">
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
		</div>
		<a href="#" class="modal__more">Больше роликов на нашем YouTube канале:</a>
	</div>
</div>

<div class="header__modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Что мы снимаем</h2>
		</div>
		<iframe 
			width="342" 
			height="204" 
			src="https://www.youtube.com/embed/QDYifetF7ss" 
			title="YouTube video player" 
			frameborder="0" 
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
			allowfullscreen>
		</iframe>
	</div>
</div>
</body>
</html>