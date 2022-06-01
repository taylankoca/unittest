<?php declare(strict_types=1);

require_once __DIR__.'/../src/Calculator.php';

use Math\Calculator;
use PHPUnit\Framework\TestCase;


final class CalculatorTest extends TestCase
{
    public function testCalculatorShouldSumCorrectly()
    {
        $calculator = new Calculator();
        $this->assertSame(5, $calculator::sum(2, 3));
    }

    public function testCalculatorShouldFailOnWrongSum()
    {
        $calculator = new Calculator();
        $this->assertNotSame(5, $calculator::sum(2, 2));
    }

    public function testCalculatorShouldMultiplyCorrectly() {
        $calculator = new Calculator();
        $this->assertSame(12, $calculator::multiply(4, 3));
    }

    public function testCalculatorShouldFailOnWrongMultiplication() {
        $calculator = new Calculator();
        $this->assertNotSame(6, $calculator::multiply(4, 3));
    }
}
