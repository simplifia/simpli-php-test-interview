<?php
use PHPUnit\Framework\TestCase;

class myWorkTest extends TestCase
{

    public function test_getSum()
    {
        $numbers = new NumbersModel(1, 1);
        $this->assertEquals($numbers->getSum(), 2);

        $numbers = new NumbersModel(3, 4);
        $this->assertEquals($numbers->getSum(), 7);

        $numbers = new NumbersModel(10, 12);
        $this->assertEquals($numbers->getSum(), 22);
    }

    public function test_getPair()
    {
        $numbers = new NumbersModel(1, 1);
        $this->assertEquals($numbers->getPair(), 'paire');

        $numbers = new NumbersModel(3, 4);
        $this->assertEquals($numbers->getPair(), 'impaire');

        $numbers = new NumbersModel(10, 12);
        $this->assertEquals($numbers->getPair(), 'paire');
    }

}
?>