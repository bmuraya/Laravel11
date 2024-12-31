<?php 


require_once 'song.php';

$song = new Song( 'song', 10);

print $song->name . PHP_EOL;
