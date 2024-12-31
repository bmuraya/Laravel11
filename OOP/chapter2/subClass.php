<?php 

  class subClass extends baseClass
  {
      public function  getParentProtectedProperty() : string
      {
          return $this->getProtectedProperty();
      }

        // public function getParentPrivateProperty()
        // {
        //     return $this->PrivateProperty;
        // }
  }