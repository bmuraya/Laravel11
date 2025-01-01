<?php 

require_once 'song.php';

$song = new Song('The Adventures', 100 );


$song->setRating(44);

print $song->getRating() . PHP_EOL;