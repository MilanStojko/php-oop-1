<?php

require_once __DIR__. "/Movies.php";

$titolo1 = [
    new Movie("Febbre Tomei", "Lorenzo Nolan Osnago", "Milan Fincher" ),
    new Movie("Tutti pazzi per il Css", "Matteo Lynch Pompei", "Lorenzo Scorsese Bernardini"),
    new Movie("Ridi', ridi che la mamma ha fatto i gnocchi", "Simone Sorrentino Massaro", "Matteo Zalone Salvalaggio"),
];

$attori = [
    "Matteo Buscemi Pompei",
    "Milan De Niro Stojkovic",
    "Simone Clooney Massaro",
    "Lorenzo L.Jackson Osnago",
    "Alessio Pitt Tomei ",
    "Lorenzo Bova Bernardini"
];
$titolo2 = new Movie("Banda Bassotti", "Alessio Tomei", "Simone Sorrentino Massaro");

    foreach ($titolo1 as $film){
        $film -> setLingua("aramaico");
        echo "<h2>{$film -> getName()}</h2>"."<h2>{$film -> getRegista()}</h2>"."<h2>{$film -> getSceneggiatore()}</h2>"."<h2>{$film -> getLingua()}</h2>";

    };
    echo "<h2>{$titolo2 ->getName()}</h2>"."<h2>{$titolo2 ->getRegista()}</h2>"."<h2>{$titolo2 ->getSceneggiatore()}</h2>";
        foreach ($attori as $key => $value){
        $titolo2 ->setAttore($value);
        echo "<h2>Attori:{$titolo2 ->getAttore()}</h2>";
        }