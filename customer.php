<?php

class cliente {
  public $name;
  public $surname;
  public $age;
  public $sconto = 0;

  function __construct($_name, $_surname, $_age){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
  }

  public function getFullName(){
    return $this->name ; 
           $this->surname;
  }

  public function setsconto(){
    if($this->age > 50){
      $this->sconto = 40;
    } elseif ($this->age < 18) {
      $this->sconto = 60;
    }
  }

  public function getsconto(){
    return $this->sconto;
  }
}