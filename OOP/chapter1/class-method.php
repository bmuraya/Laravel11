<?php // class-method.php

class Product
{
    Public $name;
    public $price = 100;

  
    public function priceAscurrency($divisor = 1, $currencySymbol = '$')
    {
        $priceascurency = $this->price / $divisor;

        return $currencySymbol . $priceascurency;
    }
}

$product = new Product();
print $product->priceAscurrency(currencySymbol: '~~'). PHP_EOL;