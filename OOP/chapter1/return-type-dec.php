<?php


require_once 'playlist.php';
require_once 'song.php';    


$playlist = new Playlist();

$song1 = new Song('song', 10);
$song2 =new Song('today', 100);


$playlist->addSong($song1);

$playlist->addSong($song2);


if ($playlist->getLength() === 110 ) {
    print 'Test passed' . PHP_EOL;
} else {
    print 'Test failed' . PHP_EOL;
}