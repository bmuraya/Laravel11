<?php 

class Car {
    public $brand; // Property
    public $color; // Property

    public function drive() { // Method
        return "The car is driving";
    }
}

// Create an object
$myCar = new Car();
$myCar->brand = "Toyota";  // Set property
$myCar->color = "Red";     // Set property
echo $myCar->drive();      // Call method
