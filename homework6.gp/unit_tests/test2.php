<?php
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase{
    
    /**
    *@dataProvider additionProvider
    */
    
    function testAdd($a,$b,$expected){
        $obj = new Demo;
        $res = $obj->getSum($a,$b);//$a + $b;
        $this->assertSame($expected,$res);
    }
    
    public function additionProvider(){
        return [
            [1,2,3],
            [-2,-3,-5],
            [0,0,0]
        ];
    }
}