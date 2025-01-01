<?php 

require 'song.php';

$songTitle = ['The Adventures', 'Tom Sawyer', 'something'];


$song = new Song($songTitle[0], 100 );

$song->name = $songTitle[1];


var_dump($song->name);