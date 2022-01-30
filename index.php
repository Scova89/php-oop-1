<?php
    require_once __DIR__ . '/classes/Movie.php';

    // Oggetto 1
    $spiderman = new Movie("Spider Man");
    // $spiderman->titolo = "Spider Man";
    // $spiderman->regista = "Sam Raimi";

    // echo $spiderman->setTitolo("Spider Man");
    $spiderman->setRegista("Sam Raimi");
    
    $spiderman->descrizioneFilm();

    // var_dump($spiderman);
    


    // Oggetto 2
    $batman = new Movie("Batman");
    $batman->setRegista("Tim Burton");
    $batman->descrizioneFilm();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oggetto 1</h1>
    <p><?php echo $spiderman->descrizioneFilm(); ?></p>

    <h1>Oggetto 2</h1>
    <p><?php echo $batman->descrizioneFilm(); ?></p>
</body>
</html>