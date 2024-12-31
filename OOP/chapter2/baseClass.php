<?php

class baseClass
{
    public $PublicProperty = 'Public properties can be accessed from anywhere';
    protected $protectedProperty = 'protected properties can only be accessed from within the class';
    Private  $PrivateProperty = 'Private properties can only be accessed from within the class ther not visible to the child class';

    protected function getProtectedProperty() : string {
        return $this->protectedProperty;
    }  


     public function getPrivateProperty() : string {
        return $this->PrivateProperty;
     }

}