<?php

namespace FizzBuzz;

class Program {

    public function fizzBuzz(): array
    {
        $hundredList = range(1, 100);

        $hundredList = array_map(function ($number) {
            $newValue = null;

            if ($number % 3 === 0) {
                $newValue .= "Fizz";
            }

            if ($number % 5 === 0) {
                $newValue .= "Buzz";
            }

            if ($newValue) {
                $number = $newValue;
            }

            return $number;
        }, $hundredList);

        return $hundredList;
    }

}