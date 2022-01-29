<?php
    require_once __DIR__ . '/classes/Movie.php';

    $spiderman = new Movie();
    $spiderman->titolo = "Spider Man";
    $spiderman->regista = "Sam Raimi";


    var_dump($spiderman);



?>