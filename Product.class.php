<?php
class Product{
    public $name;
    public $price;
    function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }
    
    function getName(){
        return $this->name;
    }

    function getPrice(){
        return $this->price;
    }
}
/*class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();  0
$a2 = new A();  1
$a1->foo();  2
$a2->foo();  3
$a1->foo();  4
$a2->foo();  5
----------
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();   0
$b1 = new B();   0
$a1->foo();   1
$b1->foo();   1
$a1->foo();   2
$b1->foo();   2 
---------------
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;   -
$b1 = new B;  -
$a1->foo();  0
$b1->foo();  0
$a1->foo();  1
$b1->foo();  1