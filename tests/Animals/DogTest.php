<?php

namespace Challenge\Tests\Animals;

use Challenge\Animals\Dog;

class DogTest extends \PHPUnit_Framework_TestCase
{
    public function test_foo_returns_bar()
    {
        $this->assertEquals(Dog::speak(), 'ruff');
    }
}
