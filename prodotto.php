<?php

class Product {
    protected $name;
    protected $price;
    protected $type;
    protected $quantita;

    function __construct($_name, $_type, $_price, $_quantita){
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
        $this->quantita = $_quantita;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getquantita(){
        return $this->quantita;
    }

}
?>