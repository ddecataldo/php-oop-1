<?php

require_once "classes/Movie.php";

$movie1 = new Movie("Spider-Man: No Way Home", "Stan Lee", "2021", "IT");
$movie1->raggruppa();

/* $movie1->set_title("Spider-Man: No Way Home");
echo $movie1->get_author();
$movie1->set_author("Stan Lee");
echo $movie1->get_year();
$movie1->set_year("2021");
echo $movie1->get_title();
$movie1->set_lng("IT");
echo $movie1->get_lng(); */

$movie2 = new Movie("Hulk", "Stan Lee", "2008", "IT");
$movie2->raggruppa();


/* var_dump($movie1); */

?>