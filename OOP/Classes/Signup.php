<?php


class Signup  extends Dbh
{
    private $username;
    private $pwd;  
    
    
    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

  private function insertUser(){
    $query = "INSERT INTO users (username, pwd) VALUES (:username, :pwd);";
    $stmt = parent::connect()->prepare($query);
    $stmt->bindParam(":username", $this->username);
    $stmt->bindParam(":pwd", $this->pwd);
    $stmt->execute();
  }


  private function isEmptySubmit()
  {
    if (empty($this->username) || empty($this->pwd)) {
      return true;
    } else {
      return false;
    }
  }


  
  public function signupUser()
  {
    // error handling

    if ($this->isEmptySubmit()) {
      header("location: " . $_SERVER['DOCUMENT_ROOT'] . "/index.php?error=emptyinput");
      die();
    }

    // if no errors , sign up user

    $this->insertUser();


  
  }



}