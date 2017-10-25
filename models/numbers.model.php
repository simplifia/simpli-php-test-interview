<?php

class NumbersModel
{
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->setNum1($num1);
        $this->setNum2($num2);
    }

    /***** caculate methodes *****/
    
    /*
     *   return sum of $num1 and $num2
     */
    public function getSum() {
        return $this->num1 + $this->num2;
    }

    /*
     *   return "paire" if sum is pair; "impaire" if sum is odd
     */
    public function getPair() {
        $sum = $this->getSum();
        if($sum%2==0){
            return 'paire';
        } else {
            return 'impaire';
        }
    }

    /***** end caculate methodes *****/

    /* getter, setter */
    public function getNum1() {
        return $this->num1;
    }
    public function setNum1($num1) {
        $this->num1 = $num1;
        return true;
    }
    public function getNum2() {
        return $this->num2;
    }
    public function setNum2($num2) {
        $this->num2 = $num2;
        return true;
    }
    /* end getter, setter */


}