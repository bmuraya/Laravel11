<?php

//   in OOP we have 4 pricniples  that we should follow  
        // 1. Encapsulation
        
        // 2. Inheritance

        // 3. Polymorphism

        // 4. Abstraction

// Inheritance is a mechanism in which a new class is derived from an existing class.

  class book
   {

    public $title;
    public $author;
    public $price;
    public $type;   
    public $weight;
    public $fileSize; 

    public function __construct( 
        string $title, 
        string $author, 
        int $price , 
        int  $weight = 0, 
        int $fileSizes = 0 
    )
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->weight = $weight;
        $this->fileSizes = $fileSizes;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice() :int
    {
        return $this->price;
    }
    
    public function getWeight() :int
    {
        return $this->weight;
    }

    public function getFileSizes() : int
    {
        return $this->fileSizes;
    }



  }