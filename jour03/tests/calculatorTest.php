<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../calculator.php';

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddition()
    {
        $this->assertEquals(5, $this->calculator->calculate('2+3'));
    }

    public function testSoustraction()
    {
        $this->assertEquals(3, $this->calculator->calculate('5-2'));
    }

    public function testMultiplication()
    {
        $this->assertEquals(12, $this->calculator->calculate('4*3'));
    }

    public function testDivision()
    {
        $this->assertEquals(4, $this->calculator->calculate('12/3'));
    }

    public function testPrioriteOperations()
    {
        $this->assertEquals(14, $this->calculator->calculate('2+3*4'));
    }

    public function testParentheses()
    {
        $this->assertEquals(20, $this->calculator->calculate('(2+3)*4'));
    }


    public function testDivisionParZero()
{
    $this->expectException(RuntimeException::class);

    $this->calculator->calculate('10/0');
}
}