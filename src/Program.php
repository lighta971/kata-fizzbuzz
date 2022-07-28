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
            return $number;
        }, $hundredList);

        return $hundredList;
    }
}