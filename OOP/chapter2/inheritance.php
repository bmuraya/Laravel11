<?php 

require_once 'books.php';

$physicalBook = new Book('The Adventures of Tom Sawyer', 'Mark Twain',  2000);
$onlineBook = new Book('The Adventures of Tom Sawyer', 'Mark Twain',  1000);

print $physicalBook->getWeight() . PHP_EOL;
print $onlineBook->getFileSizes() . PHP_EOL;

