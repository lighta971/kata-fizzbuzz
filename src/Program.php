<?php

namespace FizzBuzz;

class Program {

    public function fizzBuzz(): array
    {
        $hundredList = range(1, 100);

        $hundredList = array_map(function ($number) {
            if ($number % 3 === 0) {
                $number = "Fizz";
            }
            else if ($number % 5 === 0) {
                $number = "Buzz";
            }
            return $number;
        }, $hundredList);

        return $hundredList;
    }

}