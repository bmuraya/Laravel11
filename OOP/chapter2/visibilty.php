<?php

require_once 'baseClass.php';
require_once 'subClass.php';



$baseObject = new baseClass();
$subObject = new subClass();
// print $subObject->PublicProperty . PHP_EOL;

// print $subObject->getProtectedProperty() . PHP_EOL;

// print $subObject->getParentProtectedProperty() . PHP_EOL;

// print $baseObject-> getPrivateProperty() . PHP_EOL;

// print $subObject->getParentPrivateProperty() . PHP_EOL;

// print $subObject->getProtectedProperty() . PHP_EOL;

print $subObject->getParentProtectedProperty() . PHP_EOL;
