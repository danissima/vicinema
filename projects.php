<?php 
include 'config.php';

$selectCategories = $mysqli->query("SELECT * FROM categories");
$categories = [];
while($item = $selectCategories->fetch_array()) {
    array_push($categories, $item);
}

$movies = [];
foreach ($categories as $category) {
    $thisCategory = $category['ID'];
    $selectMovies = $mysqli->query("SELECT `movies`.* FROM `categories` LEFT JOIN `movies` ON `movies`.`id_category` = `categories`.`ID` WHERE (`categories`.`ID` = $thisCategory) ");
    $categoryMovies = [];
    while($item = $selectMovies->fetch_array()) {
        array_push($categoryMovies, $item);
    }
    array_push($movies, $categoryMovies);
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
	<script src="js/jquery-ui.min.js" defer></script>
    <script src="js/projects.js" defer></script>
</head>
<body>
<div class="cover cover-left"></div>
<div class="cover cover-right"></div>
<header class="header">
	<?php include 'includes/header-top.php' ?>
	<div class="header__left projects__left">
        <div class="header__left-logo">
            <img src="images/logo-projects.png" alt="vicinema">
        </div>
		<div class="header__left-title-wp">
			<div class="header__left-title-in">
				<img class="header-title" src="images/projects-title.png" alt="projects">
			</div>
		</div>
	</div>
	<div class="header__right projects__right">
        <div class="projects__right-bg"></div>
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
                        <?php 
                            foreach ($categories as $category) {
                        ?>
                            <a class="catalog__nav-item"><?=$category['category']?></a>
                        <?php } ?>
                    </div>
                    <?php 
                        foreach ($movies as $categoryMovie) { ?>
                            <div class="catalog__items">
                                <?php foreach ($categoryMovie as $movie) { ?>
                                    <div class="catalog__item">
                                        <a href="/single-project.php?movie=<?=$movie['ID']?>" class="catalog__item-link"></a>
                                        <div class="catalog__item-poster">
                                            <img src="<?=$movie['small_poster']?>" alt="<?=$movie['title']?>">
                                            <span class="catalog__item-rating"><?=$movie['rating']?></span>
                                        </div>
                                        <h3 class="catalog__item-title"><?=$movie['title']?></h3>
                                        <p class="catalog__item-info"><?=$movie['year']?>, <?=$movie['genre']?></p>
                                    </div>
                                <?php } ?> 
                            </div> 
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "includes/footer.php" ?>
</body>
</html>