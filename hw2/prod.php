<?php
abstract class Product{
    private $name;
    private $qty;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    abstract function finalprice();

    function show(){
        echo "Продукт ".$this->getName()." имеет цену ".$this->finalprice();
    }

    /*function render(){
        $this->finalprice();
        $this->show();
    }*/
}