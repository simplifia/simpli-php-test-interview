<?php
/**
 * Created by PhpStorm.
 * User: alexi
 * Date: 29/11/2017
 * Time: 09:24
 */

namespace alex;

include "config.php";

class Calcul
{
    public static function sum($number1, $number2)
    {
        echo $number1 + $number2;
        return $number1 + $number2;
    }

    public static function odd($number1, $number2)
    {
        if(($number1 + $number2) % 2 == 0)
        {
            echo "Paire";
            return "Paire";
        }
        else
        {
            echo "Impair";
            return "Impair";
        }
    }
}