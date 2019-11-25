<?php
include "Product.class.php";
class Computer extends Product{
    private $motherboard;

    function __construct($name, $price, $motherboard)
    {
        parent::__construct($name, $price);
        $this->motherboard = $motherboard;
    }
    function build(){
        parent::build();
        echo "Компьютер ".$this->getName()." с этой материнской платой ".$this->speed."Будет стоить".$this->price;
    }
    $obj = new Computer("Number1",3000,300);
    $obj->build();
}