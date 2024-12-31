<?php 

//  what is a class is a blueprint for creating objects (a particular data structure), providing initial values for state (member variables or attributes), and implementations of behavior (member functions or methods). The user-defined objects are created using the class keyword. A class is a structure that can contain properties and methods. A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces: or a template for creating objects. It defines a data type, but it is not a data type itself. A class in PHP.
 

//  create  class 

// class price
// {
//     public $price = 20;
  
// }

// $Prices = new price();
// print $Prices->price. "\n";

// $Prices->price = 30;
// print $Prices->price. "\n";




// method are function that give an oject a behavior or action 

 class Product 
 {
        public $name;
        public $price;  # cents
        public $quantity;

    public function priceAscurrency()
    {
        $priceascurency = $this->price / 100;

        return  $priceascurency;
    }
}

$soapObject = new Product();
$soapObject->price = 550;

$soapObject2 = new Product();
$soapObject2->price = 650;

$priceascurency = $soapObject2->priceAscurrency();
var_dump($priceascurency). "\n";