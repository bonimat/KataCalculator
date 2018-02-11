<?php
/**
 *
 * User: matteo
 * Date: 08/02/18
 * Time: 18.44
 */

use PHPUnit\Framework\TestCase;

include __DIR__ . "/../Calculator.php";

class CalculatorTest extends TestCase {
    public function  testItWork(){

        $this->assertTrue(true);
    }

    public function testSommaStringaVuota(){
        $calculator = new Calculator();
        $this->assertEquals(0, $calculator->add(""));
    }

    public function testSommaStringaNonVuota(){
        $calcolatore = new Calculator();
        $this->assertEquals(null, $calcolatore->add(null));
    }

    public function testSommaUnArgomento(){
        $calcolatore = new Calculator();
        $this->assertEquals( 5, $calcolatore->add("5"));
    }

    public function testtSommaDueArgomenti(){
        $calcolatore = new Calculator();
        $this->assertEquals( 3, $calcolatore->add("2,1"));
    }

    public function testTreArgomenti(){
        $calcolatore = new Calculator();
        $this->assertEquals(6,$calcolatore->add("2,1,3"));
    }
}
