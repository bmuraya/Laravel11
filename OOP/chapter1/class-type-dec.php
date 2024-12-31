<?php


require_once 'playlist.php';
require_once 'song.php';    


$playlist = new Playlist();

$song1 = new Song('song', 10);
$song2 =new Song('today', 100);
$song3 = 'yesteday';

$playlist->addSong($song1);

$playlist->addSong($song2);


foreach ($playlist->songs as $song) {

        print $song->name . PHP_EOL;
}  