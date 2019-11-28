<?php
include "prod.php";
class Productnet extends Product{
    function finalprice(){
        return "$price/2";
    }
}
$obj = new Productnet;
$obj->setName("Кино");
$obj->finalprice();