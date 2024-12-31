<?php 

// Encapsulation is the concept of restricting access to certain parts of an object.

// In PHP, we can restrict access to properties and methods by using the keywords public, protected, and private.

// why do we use encapsulation?

// Encapsulation is used to protect the data stored in an object from being modified by accident.

// it define ina logic place  ie  the same place as it data

require_once 'playlist.php';
require_once 'song.php';


$mejjaSongs = new PlayList();

$song  = new Song('Landlord', 300);

$fakeSong =' This not a song it a string';

$mejjaSongs->addsong($song);

var_dump($mejjaSongs->getSongs());