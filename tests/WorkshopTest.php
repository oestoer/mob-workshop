<?php

namespace Tests;

class WorkshopTest extends \PHPUnit_Framework_TestCase
{
    public function testItGeneratesEvenNumbers()
    {
        $evenNumberGenerator = new \EvenNumberGenerator();

        $number = $evenNumberGenerator->generateNumber();

        self::assertEquals($number % 2, 0);
    }
}