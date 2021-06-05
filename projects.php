<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ВиКино</title>
	<link rel="stylesheet" href="css/style.css">
    <script src="js/projects.js" defer></script>
</head>
<body>
<div class="cover cover-left"></div>
<div class="cover cover-right"></div>
<header class="header">
	<?php include 'includes/header-top.php' ?>
	<div class="header__left">
		<div class="header__left-title-wp">
			<div class="header__left-title-in">
				<h2 class="header__title">ВиКино</h2>
				<h3 class="header__subtitle">Кино-видеостудия</h3>
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
	<div class="header__right">
		<div class="header__right-title-wp">
			<h1 class="header__right-title">ВиКино</h1>
			<p class="header__right-text">Снимаем то,<br> что вызвает интерес</p>
		</div>
	</div>
</header>		
<main class="main">
    <div class="catalog">
        <div class="container">
            <div class="catalog__in">
                <div class="section__title-wp">
                    <h2 class="section__title">Каталог фильмов</h2>
                </div>
                <div class="catalog__content">
                    <div class="catalog__nav">
                        <a href="#catalog1" class="catalog__nav-item catalog__nav-item_active">Документальные</a>
                        <a href="#catalog2" class="catalog__nav-item">Художественные</a>
                        <a href="#catalog3" class="catalog__nav-item">Короткометражные</a>
                        <a href="#catalog4" class="catalog__nav-item">Анимационные</a>
                    </div>
                    <div id="catalog1" class="catalog__items catalog__items_active">
                        <div class="catalog__item">
                            <a href="/single-project.php" class="catalog__item-link"></a>
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item1.jpg" alt="">
                                <span class="catalog__item-rating">8.1</span>
                            </div>
                            <h3 class="catalog__item-title">BTS: Разбей тишину</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item2.jpg" alt="">
                                <span class="catalog__item-rating">6.7</span>
                            </div>
                            <h3 class="catalog__item-title">Мосул</h3>
                            <p class="catalog__item-info">2020, военный, документальный, боевик</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item3.jpg" alt="">
                                <span class="catalog__item-rating">7.7</span>
                            </div>
                            <h3 class="catalog__item-title">Blackpink: Зажги небо</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item4.jpg" alt="">
                                <span class="catalog__item-rating">7.6</span>
                            </div>
                            <h3 class="catalog__item-title">Бумажный дом</h3>
                            <p class="catalog__item-info">2020, документальный</p>
                        </div>
                    </div>
                    <div id="catalog2" class="catalog__items">
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item1.jpg" alt="">
                                <span class="catalog__item-rating">8.1</span>
                            </div>
                            <h3 class="catalog__item-title">BTS: Разбей тишину</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item2.jpg" alt="">
                                <span class="catalog__item-rating">6.7</span>
                            </div>
                            <h3 class="catalog__item-title">Мосул</h3>
                            <p class="catalog__item-info">2020, военный, документальный, боевик</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item3.jpg" alt="">
                                <span class="catalog__item-rating">7.7</span>
                            </div>
                            <h3 class="catalog__item-title">Blackpink: Зажги небо</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item4.jpg" alt="">
                                <span class="catalog__item-rating">7.6</span>
                            </div>
                            <h3 class="catalog__item-title">Бумажный дом</h3>
                            <p class="catalog__item-info">2020, документальный</p>
                        </div>
                    </div>
                    <div id="catalog3" class="catalog__items">
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item1.jpg" alt="">
                                <span class="catalog__item-rating">8.1</span>
                            </div>
                            <h3 class="catalog__item-title">BTS: Разбей тишину</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item2.jpg" alt="">
                                <span class="catalog__item-rating">6.7</span>
                            </div>
                            <h3 class="catalog__item-title">Мосул</h3>
                            <p class="catalog__item-info">2020, военный, документальный, боевик</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item3.jpg" alt="">
                                <span class="catalog__item-rating">7.7</span>
                            </div>
                            <h3 class="catalog__item-title">Blackpink: Зажги небо</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item4.jpg" alt="">
                                <span class="catalog__item-rating">7.6</span>
                            </div>
                            <h3 class="catalog__item-title">Бумажный дом</h3>
                            <p class="catalog__item-info">2020, документальный</p>
                        </div>
                    </div>
                    <div id="catalog4" class="catalog__items">
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item1.jpg" alt="">
                                <span class="catalog__item-rating">8.1</span>
                            </div>
                            <h3 class="catalog__item-title">BTS: Разбей тишину</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item2.jpg" alt="">
                                <span class="catalog__item-rating">6.7</span>
                            </div>
                            <h3 class="catalog__item-title">Мосул</h3>
                            <p class="catalog__item-info">2020, военный, документальный, боевик</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item3.jpg" alt="">
                                <span class="catalog__item-rating">7.7</span>
                            </div>
                            <h3 class="catalog__item-title">Blackpink: Зажги небо</h3>
                            <p class="catalog__item-info">2020, музыка, документальный</p>
                        </div>
                        <div class="catalog__item">
                            <div class="catalog__item-poster">
                                <img src="images/catalog/item4.jpg" alt="">
                                <span class="catalog__item-rating">7.6</span>
                            </div>
                            <h3 class="catalog__item-title">Бумажный дом</h3>
                            <p class="catalog__item-info">2020, документальный</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "includes/footer.php" ?>
</body>
</html>