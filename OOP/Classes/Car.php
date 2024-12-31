<?php 


// OOP PHP code

class Car {

    // properties / fields

    private $brand;  // visibility modifyer  public, private, protected
    private $color;
    private $vechicleType ;

    //  constructor method 
    
    public function __construct($brand, $color= "none")
    
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // getter & setter methods

    public function getBrand(){

        return $this->brand;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }

    // methods / functions

    public function getCarinfo(){
        return "Brand:" . $this->brand . ", Color:".  $this->color;
    }
    
}

