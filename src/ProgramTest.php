<?php

use PHPUnit\Framework\TestCase;
use FizzBuzz\Program;

class ProgramTest extends TestCase {

    public function testItPrint1to100()
    {
        $program = new Program();

        $actual = $program->fizzBuzz();

        $this->assertEquals(1, $actual[0]);
        $this->assertEquals(100, $actual[99]);
        $this->assertCount(100, $actual);
    }

    public function testItReturnsFizzInsteadOfDivisibleByThree()
    {
        $program = new Program();
        $actual = $program->fizzBuzz();

        $this->assertEquals('Fizz', $actual[2]);
        $this->assertEquals('Fizz', $actual[5]);
    }


}