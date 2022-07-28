<?php

use PHPUnit\Framework\TestCase;
use FizzBuzz\Program;

class ProgramTest extends TestCase {

    public function testItPrint1()
    {
        $program = new Program();

        $actual = $program->fizzBuzz();
        $expected = [1];

        $this->assertEquals($expected, $actual);
    }

    public function testItPrint1to100()
    {
        $program = new Program();

        $actual = $program->fizzBuzz();
        $expected = range(1, 100);

        $this->assertEquals($expected, $actual);
    }
}