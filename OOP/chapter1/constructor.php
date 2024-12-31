<?php // constructor.php

class Product
{

  public function __construct( public $name= 'soap', public $price = 100)
    {
        
    }

  
    public function priceAscurrency($divisor = 1, $currencySymbol = '$')
    {
        $priceascurency = $this->price / $divisor;

        return $currencySymbol . $priceascurency;
    }
}

$product = new Product(price: 200);
print $product->name . PHP_EOL;
print $product->price. PHP_EOL;