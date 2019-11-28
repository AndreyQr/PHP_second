<?php
include "prod.php";
class Productgram extends Product{
    function finalprice(){
        return "$price*$qty";
    }
}
$obj = new Productgram;
$obj->setName("Орехи");
$obj->finalprice();