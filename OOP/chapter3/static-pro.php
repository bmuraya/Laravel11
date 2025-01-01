<?php 

require_once 'counter.php';
require_once  'connection.php';

// Counter::$count++;
// print  Counter::$count . PHP_EOL;


$connection = new Connection();


print connection::$count . PHP_EOL;


$connection1 = new Connection();


print connection::$count . PHP_EOL;


connection::$count += 20;
print connection::$count . PHP_EOL;
