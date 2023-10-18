<?php 

use PHPUnit\Framework\TestCase;


class CalculatriceTest extends TestCase{
    public function testAdd(){
        $calculatrice = new Calculatrice();
        $resultatAddition = $calculatrice->add(2,3);
        $this->assertEquals(5,$resultatAddition);
    }

    public function testSub(){
        $calculatrice = new Calculatrice();
        $resultatSub = $calculatrice->sub(3,2);
        $this->assertEquals(1,$resultatSub);
    }

    public function testMul(){
        $calculatrice = new Calculatrice();
        $resultatMultiplication = $calculatrice->mul(2,3);
        $this->assertEquals(6,$resultatMultiplication);
    }

    public function testDiv(){
        $calculatrice = new Calculatrice();
        $resultatDivision = $calculatrice->div(6,2);
        $this->assertEquals(3,$resultatDivision);
    }

    public function testAvg(){
        $calculatrice = new Calculatrice();
        $resultatDivision = $calculatrice->avg([1,2,3,4]);
        $this->assertEquals(2.5,$resultatDivision);
    }


    
}
