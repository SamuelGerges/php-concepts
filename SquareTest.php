<?php

namespace test;

use App\SOLID\LSP\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{

    private Square $square;

    public function setUp(): void
    {
        $this->square = new Square();
        $this->square->setWidth(5);
        $this->square->setHeight(10);
    }

    public function test_that_area_is_valid()
    {
        $this->assertEquals(50,$this->square->calculateArea());
    }
}
