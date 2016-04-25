<?php

namespace Challenge\Tests\Animals;

use Challenge\Animals\Cat;
use Challenge\Animals\Dog;
use Challenge\Exceptions\ScaredException;

class DogTest extends \PHPUnit_Framework_TestCase
{
    public function testSpeak()
    {
        $dog = new Dog(new Cat());
        $this->assertEquals($dog->speak(), Dog::SPEAK_SOUND);
    }

    public function testDoesNotSpeakWhenCatHisses()
    {
        $mockCat = $this->getMockBuilder(Cat::class)
            ->setMethods(['hasHissed'])
            ->getMock();

        $mockCat->expects($this->once())
            ->method('hasHissed')
            ->willReturn(true);

        $dog = new Dog($mockCat);
        $this->setExpectedException(ScaredException::class);
        $dog->speak();
    }
}
