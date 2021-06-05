<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ВиКино</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/single-project.js" defer></script>
    <script src="js/jquery-ui.min.js" defer></script>
</head>
<body>
<div class="cover cover-left"></div>
<div class="cover cover-right"></div>
<header class="header">
	<?php include 'includes/header-top.php' ?>
	<div class="header__left single-project__left" style="background: linear-gradient(180deg, #5E5591 0%, #973E95 100%);">
		<div class="single-project__poster">
            <img src="images/catalog/item1.jpg" alt="">
        </div>
        <div class="single-project__trailer">
            <iframe 
                width="342" 
                height="204" 
                src="https://www.youtube.com/embed/QfctZceL6mw" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
        <div class="single-project__show-desc">
            <svg class="show-arrow" width="36" height="42" viewBox="0 0 36 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.8224 23.13L10.7713 40.8972C9.17806 42.1252 6.60176 42.1252 5.02548 40.8972L1.19493 37.9447C-0.398309 36.7167 -0.398309 34.7309 1.19493 33.516L17.5341 20.9222L1.19493 8.32837C-0.398309 7.10034 -0.398309 5.1146 1.19493 3.89964L5.00853 0.921019C6.60176 -0.307007 9.17806 -0.307007 10.7543 0.921019L33.8054 18.6882C35.4156 19.9162 35.4156 21.902 33.8224 23.13Z" fill="#3F0250"/>
            </svg>
        </div>
	</div>
	<div class="header__right single-project__right" style="background-image: url('images/single-project/project1.png')">
		<div class="single-project__desc">
            <div class="section__title-wp single-project__title-wp">
                <h2 class="section__title">BTS: Разбей тишину: Фильм</h2>
            </div>
            <p class="single-project__text">
                Южная Корея | 2020 | музыка, документальный, концерт
            </p>
            <p class="single-project__text">
                Кинопоиск: 8,1
            </p>
            <p class="single-project__text">
                После завершения мирового тура «Love Yourself: Speak Yourself» BTS попали в топ чарта Billboard Boxscore и стали первой корейской группой в истории, 
                выступившей на стадионе Уэмбли в Лондоне. В рамках тура концерты прошли в Лос-Анджелесе, Чикаго, Нью-Йорке, Сан-Паулу, Лондоне, Париже, Осаке, Сидзуоке, Эр-Рияде и Сеуле.
            </p>
            <p class="single-project__text">
                Этот документальный фильм дает доступ к кадрам за сценой, следуя шаг за шагом с участниками группы по всем городам тура. 
                За кулисами BTS предстанут c новой стороны. Участники коллектива откровенно делятся личными историями, которые до этого никогда не произносились вслух.
            </p>
            <p class="single-project__text">
                Режиссер: Пак Чун-су
            </p>
            <p class="single-project__text">
                В главных ролях: Bangtan Boys, Чон Хо-сок, Чон Джон-гук, Ким Нам-джун, Ким Сок-чин, Ким Тхэ-хён, Мин Юн-ги, Пак Чи-мин
            </p>
        </div>
	</div>
</header>		
<?php include "includes/footer.php" ?>
</body>
</html>