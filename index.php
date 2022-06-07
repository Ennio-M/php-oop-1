<?php
    require_once __DIR__.'/Classes/Movie.php';

    $movie1 = new Movie('Scuola di Polizia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, architecto.', '1984', 6.7);
    $movie2 = new Movie('Top Gun: Maverick', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum enim veritatis hic aperiam officia quis.', '2022', 8.7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Movies</h1>
    <div class="movie">
        <h2><?php echo $movie1->getTitle() ?></h2>
        <ul>
            <li>Trama: <?php echo $movie1->getPlot() ?></li>
            <li>Anno: <?php echo $movie1->getYear() ?></li>
            <li>Valutazione: <?php echo $movie1->getRating() ?></li>
        </ul>
    </div>
    <div class="movie">
        <h2><?php echo $movie2->getTitle() ?></h2>
        <ul>
            <li>Trama: <?php echo $movie2->getPlot() ?></li>
            <li>Anno: <?php echo $movie2->getYear() ?></li>
            <li>Valutazione: <?php echo $movie2->getRating() ?></li>
        </ul>
    </div>
</body>
</html>