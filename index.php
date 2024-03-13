<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$drame= new Genre("Drame");
$scienceFiction= new Genre("Science Fiction");
$thriller= new Genre("Thriller");
$JamesCameron= new Realisateur("James", "Cameron", "homme", "1954-08-16");
$titanic= new Film($drame, $JamesCameron, "Titanic", 1997, 195, "Il raconte l'histoire fictive de deux jeunes passagers du paquebot Titanic en avril 1912. L'une, Rose, est une riche passagère, et le second, Jack, un artiste pauvre, est embarqué  pour retourner aux États-Unis. Ils se rencontrent par hasard lors de la tentative de suicide de Rose et vivent une histoire d'amour vite troublée par le naufrage du navire.");
$avatar= new Film($scienceFiction, $JamesCameron, "Avatar", 2009, 178, "L'action se déroule en 21543 sur Pandora, une des lunes de Polyphème, une planète géante gazeuse en orbite autour d'Alpha Centauri A dans le système stellaire le plus proche de la Terre. L'exolune, recouverte d'une jungle luxuriante, est le théâtre du choc entre les autochtones Na'vis et les Terriens." );
$ChristopherNolan= new Realisateur("Christopher", "Nolan", "homme", "1970-07-30");
$batman= new Film($thriller, $ChristopherNolan, "Batman", 2008, 152, "Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel Joker.");
$interstellar= new Film($scienceFiction, $ChristopherNolan, "Interstellar", 2014, 169, "Dans un proche futur, la Terre est devenue hostile pour l'homme. Les tempêtes de sable sont fréquentes et il n'y a plus que le maïs qui peut être cultivé, en raison d'un sol trop aride. Cooper est un pilote, recyclé en agriculteur, il est alors embarqué dans une expédition pour sauver l'humanité." );
$JocelynMoorhouse= new Realisateur("Jocelyn", "Moorhouse", "femme", "1960-09-04");
$hautecouture= new Film($drame, $JocelynMoorhouse, "Haute Couture", 2015, 195, "Au début des années 1950, Tilly Dunnage retourne, après 25 ans d'absence, dans son Australie d'origine pour s'occuper de sa mère Molly, seule et demi-folle. Avec sa machine à coudre et son apparence , cette styliste va transformer les femmes de son petit village en vamps irrésistibles.");

$kwinslet = new Acteur("Kate", "Winslet", "femme","1975-10-05");
$rbukater = new Role("Rose DeWitt-Bukater");
$tdunnage = new Role("Tilly Dunnage");
$ldicaprio = new Acteur("Léonardo", "Di Caprio", "homme","1977-11-11");
$jdawson = new Role("Jack Dawson");
$casting11= new Casting($titanic, $kwinslet, $rbukater);
$casting12= new Casting($hautecouture, $kwinslet, $tdunnage);
$casting21 = new Casting($titanic, $ldicaprio, $jdawson);


echo $drame->afficherFilmographieGenre();
// echo $scienceFiction->afficherFilmographieGenre();
// echo $thriller->afficherFilmographieGenre();
// echo "<br> <br>";

echo $JamesCameron->afficherFilmographieRealisateur();
// echo $ChristopherNolan->afficherFilmographieRealisateur();
// echo "<br> <br>";

// echo $kwinslet->afficherFilmographieActeur();
echo $ldicaprio->afficherFilmographieActeur();
// echo "<br> <br>";

echo $titanic->afficherInfoFilm();
// echo "<br> <br>";
// echo $avatar->afficherInfoFilm();
// echo "<br> <br>";
// echo $batman->afficherInfoFilm();
// echo "<br> <br>";
// echo $interstellar->afficherInfoFilm();
// echo "<br> <br>";

echo $titanic->afficherCastings();

echo $rbukater->afficherRoleActeur();