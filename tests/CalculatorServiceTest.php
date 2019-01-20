<?php

use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    public function testOne(): void
    {
        $service = new CalculatorService();

        $result = $service->calculateSquareArea(2);

        $this->assertEquals(4, $result);
    }

    public function testTwo(): void
    {
        $service = new CalculatorService();

        $result = $service->calculateSquareArea(5);

        $this->assertEquals(25, $result);
    }
}
