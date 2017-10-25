<?php

class Numbers
{

    private integer $num1;
    private integer $num2;

    public function __construct($num1, $num2) {
        $this->setNum1($num1);
        $this->setNum2($num2);
    }

    /* getter, setter */
    // num1()
    public integer getNum1() {
        return $this->num1;
    }
    public boolean setNum1($num1) {
        $this->num1 = $num1;
        return true;
    }
    // num2()
    public integer getNum2() {
        return $this->num1;
    }
    public boolean setNum2($num1) {
        $this->num1 = $num1;
        return true;
    }
    /* end getter, setter */

}