<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post-Production</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fullpage.min.css">
    <link rel="icon" href="images/logo.png">
    <script src="js/fullpage.extensions.min.js" defer></script>
    <script src="js/post-production.js" defer></script>
</head>
<body>
<div class="cover cover-left"></div>
<div class="cover cover-right"></div>
<main id="fullpage">

<header class="header section fp-auto-height">
    <?php include 'includes/header-top.php' ?>
    <div class="header__sides">
        <div class="header__left">
            <div class="header__left-title-wp">
                <div class="header__left-title-in">
                    <img class="header-title" src="images/post-prod-title.png" alt="post-prod">
                </div>
            </div>
            <div class="header__left-form-wp polygon post-prod__left-block">
                <p class="header__text">Киностудия предоставляет весь спектр услуг post-production «под ключ» для реализации проектов любой сложности. 
                    Новейшие технологии в области аудиовизуального производства позволяют работать одновременно над несколькими художественными картинами.</p>
                
            </div>
        </div>
        <div class="header__right post-prod__right">
            <div class="post-prod__nav">
                <div class="post-prod__nav-items">
                    <a href="#" class="post-prod__nav-item">Видеомонтаж</a><a href="#" class="post-prod__nav-item">Цветокоррекция</a>
                </div>
                <hr class="sep">
                <div class="post-prod__nav-items">
                    <a href="#" class="post-prod__nav-item">Визуальные<br>эффекты</a><a href="#" class="post-prod__nav-item">Монтаж звука</a>
                </div>
            </div>
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
    </div>
</header>
    <div id="montage" class="section post-prod__section post-prod__montage">
        <div class="post-prod__content polygon">
            <div class="post-prod__section-left">
                <h3 class="post-prod__section-title">ВИДЕОМОНТАЖ</h3>
                <p class="post-prod__section-subtitle">Студия post-production оснащена 6 станциями нелинейного видеомонтажа на базе Final Cut и Avid Composer</p>
                <p class="post-prod__section-text">Реставрация кинопродукции возможна на четырех рабочих станциях с применением программного обеспечения The Pixel Farm PFClean.
                    Комплекс устраняет визуальные дефекты изображения: от царапин на пленке до «засветов» и неравномерного изображения</p>
            </div>
            <div class="post-prod__section-right">
                <img src="images/post-prod/montage.png" alt="montage">
            </div>
        </div>
    </div>
    <div id="colors" class="section post-prod__section post-prod__colors">
    <div class="post-prod__content polygon">
            <div class="post-prod__section-left">
                <h3 class="post-prod__section-title">ЦВЕТОКОРРЕКЦИЯ</h3>
                <p class="post-prod__section-subtitle">Сегодня цветокоррекция Nucoda единственная в Ижевске.</p>
                <p class="post-prod__section-text">Большой зал цветокоррекции Nucoda – это комплексная система цветокоррекции видео любого формата и разрешения. 
                    Она осуществляет захват и воспроизведение цифровых сигналов, редактирование, повышение качества изображения, композитинг и визуальные эффекты в различном разрешении, 
                    от HD до стерео 3D.</p>
            </div>
            <div class="post-prod__section-right">
                <img src="images/post-prod/colors.png" alt="montage">
            </div>
        </div>
    </div>
    <div id="visuals" class="section post-prod__section post-prod__visuals">
    <div class="post-prod__content polygon">
            <div class="post-prod__section-left">
                <h3 class="post-prod__section-title">ВИЗУАЛЬНЫЕ ЭФФЕКТЫ</h3>
                <p class="post-prod__section-subtitle">Киностудия предоставляет услуги по созданию компьютерной графики любого уровня сложности.</p>
                <p class="post-prod__section-text">Студия занимается визуальными эффектами в кино и рекламе: 2D/3D компьютерная графика, компоузинг.<br>
                    Спектр предлагаемых услуг может быть самым разным: от очистки кадра от случайных предметов и людей до создания отдельных пространств, атмосфер, фантастических миров.</p>
            </div>
            <div class="post-prod__section-right">
                <img src="images/post-prod/visuals.png" alt="montage">
            </div>
        </div>
    </div>
    <div id="sounds" class="section post-prod__section post-prod__sounds">
    <div class="post-prod__content polygon">
            <div class="post-prod__section-left">
                <h3 class="post-prod__section-title">МОНТАЖ ЗВУКА</h3>
                <p class="post-prod__section-subtitle">Звуковой post-production предоставляет услуги:</p>
                <ul class="post-prod__section-text">
                    <li>Записи и озвучивание синхронных шумов;</li>
                    <li>Звуковой дизайн;</li>
                    <li>Монтаж речевых фонограмм;</li>
                    <li>Монтаж фонотечных шумов;</li>
                    <li>Копирование фонограмм;</li>
                    <li>Монтаж фонограмм;</li>
                    <li>Библиотека шумов.</li>
                </ul>
            </div>
            <div class="post-prod__section-right">
                <img src="images/post-prod/sounds.png" alt="montage">
            </div>
        </div>
    </div>

<?php include "includes/footer.php" ?>
</main>

</body>
</html>