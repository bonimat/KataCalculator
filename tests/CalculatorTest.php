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
        $this->asserEquals(2, $calcolatore-add("2"));
    }

}
