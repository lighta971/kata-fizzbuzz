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
}