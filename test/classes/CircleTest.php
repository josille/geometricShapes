<?php

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testNameMustBeString()
    {
        $shape = new Circle("Circle");
        $this->assertSame("I am a Circle", $shape->Name());
    }
}
