<?php

class NumbersModel
{
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->setNum1($num1);
        $this->setNum2($num2);
    }

    /* getter, setter */
    // num1()
    public function getNum1() {
        return $this->num1;
    }
    public function setNum1($num1) {
        $this->num1 = $num1;
        return true;
    }
    // num2()
    public function getNum2() {
        return $this->num1;
    }
    public function setNum2($num1) {
        $this->num1 = $num1;
        return true;
    }
    /* end getter, setter */

}