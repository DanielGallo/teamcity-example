<?php

require __DIR__ . "/../src/Calculator.php";

use teamcity\example\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testPlus(): void
    {
        usleep(5000000);
        $this->assertEquals(2, $this->calculator->plus(1,1));
    }

    public function testMinus(): void
    {
        usleep(5000000);
        $this->assertEquals(1, $this->calculator->minus(2,1));
    }

    public function testDivide(): void
    {
        usleep(5000000);
        $this->assertEquals(2, $this->calculator->divide(2,1));
    }

    public function testMultiply(): void
    {
        usleep(5000000);
        $this->assertEquals(2, $this->calculator->multiply(2,1));
    }

    public function testEquals(): void
    {
        usleep(5000000);
        $this->assertEquals(1, 1);
    }
}
