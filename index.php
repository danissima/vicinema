<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ВиКино</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/logo.png">
	<script src="js/jquery.js" defer></script>
	<script src="js/jquery-ui.min.js" defer></script>
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
		<form method="post" class="header__left-form-wp polygon">
			<p class="header__form-text">Проконсультируем и бесплатно предложим идеи. Заполните форму и мы свяжемся с вами</p>
			<label for="name" class="header__form-item-wp">
				<img src="images/icons/person.png" alt="person" class="header__form-item-icon">
				<input type="text" placeholder="Имя" class="header__form-item-input">
			</label>
			<label for="name" class="header__form-item-wp">
				<img src="images/icons/mail.png" alt="mail" class="header__form-item-icon">
				<input type="text" placeholder="E-mail" class="header__form-item-input">
			</label>
			<label for="name" class="header__form-item-wp">
				<img src="images/icons/phone.png" alt="phone" class="header__form-item-icon">
				<input type="text" placeholder="Телефон" class="header__form-item-input">
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
				<img src="images/icons/youtube-white.png" alt="youtube">
			</a>
		</div>
		<div class="header-right__circle"></div>
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
					<div class="clients__item-wp"><img src="images/clients/client1.jpg" alt="netflix" class="clients__img"></div>
					<div class="clients__item-wp"><img src="images/clients/client2.jpg" alt="hbo" class="clients__img"></div>
					<div class="clients__item-wp"><img src="images/clients/client3.jpg" alt="bbc" class="clients__img"></div>
					<div class="clients__item-wp"><img src="images/clients/client4.jpg" alt="abc" class="clients__img"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="workers">
		<div class="workers__overlay">
			<div class="container">
				<div class="section__in workers__in">
					<div class="workers__items-wp">
						<div class="workers__item-wp">
							<div class="workers__item polygon">
								<img src="images/workers/worker1.png" alt="Dmitry" class=" workers__img workers__img1">
							</div>
							<div class="workers__position-wp"><span class="workers__position">Кинооператор</span></div>
							<div class="workers__about-wp workers__about-wp1">
								<div class="workers__exp">Стаж 6 лет</div>
								<div class="workers__name">Дмитрий</div>
							</div>
						</div>
						<div class="workers__item-wp">
							<div class="workers__item workers__item_white polygon">
								<img src="images/workers/worker2.png" alt="Sergey" class=" workers__img workers__img2">
							</div>
							<div class="workers__position-wp workers__position-wp_white"><span class="workers__position">Главный режиссер</span></div>
							<div class="workers__about-wp workers__about-wp2">
								<div class="workers__exp">Стаж 11 лет</div>
								<div class="workers__name">Сергей</div>
							</div>
						</div>
						<div class="workers__item-wp">
							<div class="workers__item polygon">
								<img src="images/workers/worker3.png" alt="Mihail" class=" workers__img workers__img3">
							</div>
							<div class="workers__position-wp"><span class="workers__position">Режиссер монтажа</span></div>
							<div class="workers__about-wp workers__about-wp3">
								<div class="workers__exp">Стаж 8 лет</div>
								<div class="workers__name">Михаил</div>
							</div>
						</div>
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
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
			<div class="modal__img">
				<img src="" alt="">
			</div>
		</div>
		<a href="#" class="modal__more modal__text">Узнать больше</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Что мы снимаем</h2>
		</div>
		<p class="modal__text">
			Для воплощения самых смелых идей мы готовы привлекать к съемкам самых лучших представителей индустрии. Наши преимущества:
		</p>
		<ul>
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
		<a href="#" class="modal__more">Узнать больше</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Что мы снимаем</h2>
		</div>
		<p class="modal__text">
			Для воплощения самых смелых идей мы готовы привлекать к съемкам самых лучших представителей индустрии. Наши преимущества:
		</p>
		<ul>
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
		<a href="#" class="modal__more">Узнать больше</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Что мы снимаем</h2>
		</div>
		<p class="modal__text">
			Для воплощения самых смелых идей мы готовы привлекать к съемкам самых лучших представителей индустрии. Наши преимущества:
		</p>
		<ul>
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
		<a href="#" class="modal__more">Узнать больше</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Что мы снимаем</h2>
		</div>
		<p class="modal__text">
			Для воплощения самых смелых идей мы готовы привлекать к съемкам самых лучших представителей индустрии. Наши преимущества:
		</p>
		<ul>
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
		<a href="#" class="modal__more">Узнать больше</a>
	</div>
</div>
<div class="works__item-modal">
	<div class="modal__overlay">
	</div>
	<div class="modal__content">
		<span class="modal__close">&times;</span>
		<div class="section__title-wp modal__title-wp">
			<h2 class="section__title">Что мы снимаем</h2>
		</div>
		<p class="modal__text">
			Для воплощения самых смелых идей мы готовы привлекать к съемкам самых лучших представителей индустрии. Наши преимущества:
		</p>
		<ul>
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
		<a href="#" class="modal__more">Узнать больше</a>
	</div>
</div>
</body>
</html>