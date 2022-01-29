<?php
    require_once __DIR__ . '/classes/Movie.php';

    $spiderman = new Movie();
    // $spiderman->titolo = "Spider Man";
    // $spiderman->regista = "Sam Raimi";

    // $spiderman->descrizioneFilm();

    echo $spiderman->setTitolo("Spider Man");
    echo $spiderman->getTitolo();

    var_dump($spiderman);



?>