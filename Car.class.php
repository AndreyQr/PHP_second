<?php
include "Outer.php";
class Car{
    private $name;
    private $price;

    function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
       // $this->drive();
    }

    /*function setter($name,$price){
        $this->name = $name;
        $this->price = $price;
    }*/

    function getName(){
        return $this->name;
    }

    function getPrice(){
        return $this->price;
    }

    protected function drive(){
        echo "Автомобиль ".$this->name." стоит ".$this->price."<br>";
        $obj = new Outer();
        $obj->test();
    }
}
/*
new Car("Audi",1000);
/*$car->name = "Audi";
$car->price = 1000;*/
//$car->setter("Audi",1000);
//$car->drive();
//new Car("BMW",2000);
//$car2->setter("BMW",2000);
/*$car2->name = "BMW";
$car2->price = 2000;*/
//$car2->drive();

//new Car("VW",900);
////$car3->setter("VW",900);

/*$cars = [$car,$car2,$car3];
foreach ($cars as $car){
    $car->drive();
}*/
