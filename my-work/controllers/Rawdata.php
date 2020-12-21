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
}
