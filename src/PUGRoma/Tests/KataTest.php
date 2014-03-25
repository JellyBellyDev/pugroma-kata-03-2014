<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $kata = new Kata();
        $this->assertTrue($kata->isReady());
    }

    /**
     * @dataProvider numberProvider
     */
    public function testFrizz($expect, $input, $number)
    {
        $kata = new Kata();
        $this->assertEquals($expect, $kata->isMultOfNumber($input, $number));
    }

    public function numberProvider()
    {
        return array(
            array(true, 3, 18),
            array(false, 3, 19),
            array(true, 5, 25),
            array(false, 5, 17),
        );
    }

    /**
     * @dataProvider outputNumberProvider
     * @param $expect
     * @param $number
     */
    public function testOutput($expect, $number)
    {
        $kata = new Kata();
        foreach ($number as $n)
        $this->assertEquals($expect, $kata->printNumber($n));
    }

    public function outputNumberProvider()
    {
        return array(
            array('Fizz', array(3,6,9,12,18,21,24,27,33,36,39,42,48,51, 54,57,63,66,69,72,78,81,84,87,93,96,99)),
            array('Buzz', array(5)),
            array('FizzBuzz', array(15))
        );
    }
}