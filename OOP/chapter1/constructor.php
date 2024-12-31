<?php // constructor.php

class Product
{
    Public $name;
    public $price;


    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

  
    public function priceAscurrency($divisor = 1, $currencySymbol = '$')
    {
        $priceascurency = $this->price / $divisor;

        return $currencySymbol . $priceascurency;
    }
}

$product = new Product('babu', 550);
print $product->name . PHP_EOL;
print $product->price. PHP_EOL;