<?php

// Use PHPUnit for Testing

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
    }

    public function testDivisionByZeroThrowsException(): void
    {
        $calculator = new Calculator();
        $this->expectException(DivisionByZeroError::class);
        $calculator->divide(10, 0);
    }
}