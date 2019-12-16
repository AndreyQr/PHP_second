<?php
$rule = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Zа-яА-Я]{2,5}$/u";

$email = "test@mail.РФ";

if(preg_match($rule,$email)){
    echo "OK";
}