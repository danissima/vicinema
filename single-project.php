<?php
    include 'config.php';

    $movieId = $_GET['movie'];
    $selectedMovie = $mysqli->query("SELECT * FROM movies WHERE ID=$movieId")->fetch_array();
    $movieTrailer = str_replace('watch?v=', 'embed/', $selectedMovie['trailer']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ВиКино</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="icon" href="images/logo.png">
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
            <img src="<?=$selectedMovie['small_poster']?>" alt="<?=$selectedMovie['title']?>">
        </div>
        <div class="single-project__trailer">
            <iframe 
                width="342" 
                height="204" 
                src="<?=$movieTrailer?>" 
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
	<div class="header__right single-project__right" style="background-image: url(<?=$selectedMovie['big_poster']?>)">
		<div class="single-project__desc">
            <div class="section__title-wp single-project__title-wp">
                <h2 class="section__title"><?=$selectedMovie['title']?></h2>
            </div>
            <p class="single-project__text">
                <?=$selectedMovie['country']?> | <?=$selectedMovie['year']?> | <?=$selectedMovie['genre']?>
            </p>
            <p class="single-project__text">
                Кинопоиск: <?=$selectedMovie['rating']?>
            </p>
            <?php 
                $plot = explode(PHP_EOL, $selectedMovie['plot']);
                foreach ($plot as $paragraph) { ?>
                    <p class="single-project__text"><?=$paragraph?></p>
                <?php } ?>
            <p class="single-project__text">
                Режиссер: <?=$selectedMovie['director']?>
            </p>
            <p class="single-project__text">
                В главных ролях: <?=$selectedMovie['actors']?>
            </p>
        </div>
	</div>
</header>		
<?php include "includes/footer.php" ?>
</body>
</html>