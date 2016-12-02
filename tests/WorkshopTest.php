<?php

namespace Tests;

class WorkshopTest extends \PHPUnit_Framework_TestCase
{
    public function testItGeneratesEvenNumber()
    {
        $evenNumberGenerator = new \EvenNumberGenerator();

        $number = $evenNumberGenerator->generateNumber();

        self::assertEquals($number % 2, 0);
    }

    public function testItGeneratesNumberThatEndsInTwo()
    {
        $evenNumberGenerator = new \EvenNumberGenerator();

        $number = $evenNumberGenerator->generateNumber();

        self::assertEquals(substr((string)$number, -1), "2");
    }
}