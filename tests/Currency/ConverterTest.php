<?php

namespace Challenge\Currency;

class ConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testConvert()
    {
        $converter = new MockConverter(new Dollar(10), new Euro());
        $actual = $converter->convert();

        $this->assertEquals($actual, 8);
    }
}

class MockConverter extends Converter
{
    protected function rate()
    {
        return 0.8;
    }
}