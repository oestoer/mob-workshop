<?php

namespace Tests;

class WorkshopTest extends \PHPUnit_Framework_TestCase
{
    /** @var \EvenNumberGenerator */
    private $evenNumberGenerator;

    public function setUp()
    {
        $this->evenNumberGenerator = new \EvenNumberGenerator(); 
    }

    public function testItGeneratesEvenNumber()
    {
        $number = $this->evenNumberGenerator->generateNumber();

        self::assertEquals($number % 2, 0);
    }

    public function testItGeneratesNumberThatEndsInTwo()
    {
        $number = $this->evenNumberGenerator->generateNumber();

        self::assertEquals(substr((string)$number, -1), "2");
    }

    public function testItGeneratesNumberGreaterThanNine()
    {
        $number = $this->evenNumberGenerator->generateNumber();

        self::assertTrue($number > 9);
    }
}