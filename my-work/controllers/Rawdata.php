<?php

class RawdataController extends Controller
{

    public function table()
    {
        $this->render('table');
    }

    /**
     * Function to get the sum of 2 integers
     * @param int $i1 first integer
     * @param int $i2 second integer
     * @throws TypeError if a param is not an int
     * @return int sum of $i1 and $i2
     */
    public static function calcSum(int $i1, int $i2): int
    {
        return $i1 + $i2;
    }

    /**
     * Function to know if a value is even or odd
     * @param int $val value to test
     * @throws TypeError if $val is not an int
     * @return string 
     */
    public static function isEvenOrOdd(int $val): string
    {
        return $val % 2 == 0 ? 'pair' : 'impair';
    }
}
