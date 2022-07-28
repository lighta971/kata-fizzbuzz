<?php

use PHPUnit\Framework\TestCase;
use FizzBuzz\Program;

class ProgramTest extends TestCase {

    public function testItPrint1to100()
    {
        $program = new Program();

        $actual = $program->fizzBuzz();

        $this->assertEquals(1, $actual[0]);
        $this->assertEquals('Buzz', $actual[99]);
        $this->assertCount(100, $actual);
    }

    public function testItReturnsFizzWhenDivisibleByThree()
    {
        $program = new Program();
        $actual = $program->fizzBuzz();

        $this->assertEquals('Fizz', $actual[2]);
        $this->assertEquals('Fizz', $actual[5]);
    }

    public function testItReturnsBuzzWhenDivisibleByFive()
    {
        $program = new Program();
        $actual = $program->fizzBuzz();

        $this->assertEquals('Buzz', $actual[4]);
        $this->assertEquals('Buzz', $actual[9]);
    }

    public function testItReturnsFizzBuzzWhenDivisibleByThreeAndFive()
    {
        $program = new Program();
        $actual = $program->fizzBuzz();

        $this->assertEquals('FizzBuzz', $actual[14]);
        $this->assertEquals('FizzBuzz', $actual[29]);
    }}