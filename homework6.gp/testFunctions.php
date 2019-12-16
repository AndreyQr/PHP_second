<?php
function sum($a,$b){
    return $a + $b;
}

function testSum($res,$a,$b){
    if(sum($a,$b) == $res){
        return "OK";
    }
}