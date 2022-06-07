<?php
    require_once __DIR__.'/Classes/Movie.php';

    $movie1 = new Movie('Scuola di Polizia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, architecto.', '1984', 6.7);
    $movie2 = new Movie('Top Gun: Maverick', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum enim veritatis hic aperiam officia quis.', '2022', 8.7);

    var_dump($movie1);
    var_dump($movie2);
?>