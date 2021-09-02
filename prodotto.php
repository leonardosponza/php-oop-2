<?php

class Product {
    protected $name;
    protected $price;
    protected $type;
    protected $quantità;

    function __construct($_name, $_type, $_price, $_quantità){
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
        $this->quantità = $_quantità;
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

    public function getquantità(){
        return $this->quantità;
    }

}
?>