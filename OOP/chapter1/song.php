<?php 

 declare(strict_types=1);   

class Song 
{
    public $name;
    public $numberOfplays;


    public function __construct( string $name,  int $numberOfplays)
    {
        $this->name = $name;
        $this->numberOfplays = $numberOfplays;
    } 
}