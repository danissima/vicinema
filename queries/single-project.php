<?php 
include '../config.php';

$movieAction = $_POST['movieAction'];
$movieId = $_POST['movieId'];
if ($movieAction == 'change' || $movieAction == 'insert') {
  $movieTitle = $_POST['movieTitle'];
  $movieTrailer = $_POST['movieTrailer'];
  $movieSmallPoster = $_POST['movieSmallPoster'];
  $movieBigPoster = $_POST['movieBigPoster'];
  $movieGenre = $_POST['movieGenre'];
  $movieYear = $_POST['movieYear'];
  $movieCountry = $_POST['movieCountry'];
  $movieRating = $_POST['movieRating'];
  $movieDirector = $_POST['movieDirector'];
  $movieCategory = $_POST['movieCategory'];
  $movieActors = $_POST['movieActors'];
  $moviePlot = $_POST['moviePlot'];
  $movieLeftColor = implode('; ', $_POST['movieLeftColor']);
  $movieButtonColor = implode('; ', $_POST['movieButtonColor']);
}

if ($movieAction == 'change') {
  $mysqli->query("UPDATE movies SET `title`='$movieTitle', `trailer`='$movieTrailer', `small_poster`='$movieSmallPoster', `big_poster`='$movieBigPoster',
  `genre`='$movieGenre', `year`='$movieYear', `country`='$movieCountry', `rating`='$movieRating',
  `director`='$movieDirector', `actors`='$movieActors', `plot`='$moviePlot', `id_category`='$movieCategory',
   `left_block_color`='$movieLeftColor', `button_color`='$movieButtonColor' WHERE `ID`='$movieId'");
} else if ($movieAction == 'delete') {
  $mysqli->query("DELETE FROM movies WHERE ID = '$movieId'");
} else if ($movieAction == 'insert') {
  $mysqli->query("INSERT INTO `movies` (`ID`, `title`, `trailer`, `small_poster`, `big_poster`, `genre`, `year`, `country`, `rating`, `director`, `actors`, `plot`, `id_category`, `left_block_color`, `button_color`) 
  VALUES (NULL, '$movieTitle', '$movieTrailer', '$movieSmallPoster', '$movieBigPoster', '$movieGenre', '$movieYear', '$movieCountry', '$movieRating', '$movieDirector', '$movieActors', '$moviePlot', '$movieCategory', '$movieLeftColor', '$movieButtonColor')");
}


header('Location: /admin.php');

?>