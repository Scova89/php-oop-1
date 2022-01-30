<?php
    require_once __DIR__ . '/classes/Movie.php';

    $spiderman = new Movie("Spider Man");
    // $spiderman->titolo = "Spider Man";
    // $spiderman->regista = "Sam Raimi";

    

    // echo $spiderman->setTitolo("Spider Man");
    echo $spiderman->setRegista("Sam Raimi");
    
    echo $spiderman->descrizioneFilm();

    // var_dump($spiderman);



?>