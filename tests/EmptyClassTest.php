<?php

class EmptyClassTest extends PHPUnit_Framework_TestCase
{
    public function testEmptyClass()
    {
        $emptyClass = new EmptyClass();
        $this->assertEquals(true, $emptyClass->getValue());
    }
}

