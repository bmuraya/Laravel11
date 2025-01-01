<?php

//  Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter
// class Rectangle {
//     private int $length;
//     private  int $width;

//     public function __construct($length, $width) {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function getArea() {
//         return $this->length * $this->width;
//     }

//     public function getPerimeter() {
//         return 2 * ($this->length + $this->width);
//     }
// }

// $rectangle = new Rectangle(120, 9);
// print "Area: " . $rectangle->getArea() . "</br>";
// print "Perimeter: " . $rectangle->getPerimeter() . "</br>";



class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(7);
echo "Area: " . $circle->getArea() . "</br>";
echo "Circumference: " . $circle->getCircumference() . "</br>";


?>
