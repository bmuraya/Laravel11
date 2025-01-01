<?php 

 declare(strict_types=1);   

class Song 
{
    public string $name;
    public $numberOfplays;



    /*
    *  song rating from 0 to 5.
    *  half rating allowed e.g 3.5
    */

    private int | float $rating;


    public function __construct( string $name,  int $numberOfplays)
    {
        $this->name = $name;
        $this->numberOfplays = $numberOfplays;
    } 


    public function setRating(int | float $rating): void
    {
       $rating =max(0, $rating);
       $this->rating = min(5, $rating);
    }

     public function getRating(): int | float
     {
        return $this->rating;
     }
}