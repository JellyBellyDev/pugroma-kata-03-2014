<?php

namespace PUGRoma\Kata;

class Kata
{
    public function isReady()
    {
        return true;
    }

    public function printNumber($number)
    {
        if($this->isMultOfNumber(3, $number) && $this->isMultOfNumber(5, $number)){

            return 'FizzBuzz';
        } elseif($this->isMultOfNumber(3, $number)){

            return 'Fizz';
        } elseif($this->isMultOfNumber(5, $number)) {

            return 'Buzz';
        }

        return $number;
    }

    public function isMultOfNumber($base, $num)
    {
        return (($num % $base) == 0);
    }
}



