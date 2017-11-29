<?php
/**
 * Created by PhpStorm.
 * User: alexi
 * Date: 27/11/2017
 * Time: 16:01
 */

class CalculTest extends PHPUnit_Framework_TestCase
{
    public function testsum()
    {
        $this->assertEquals(2, \alex\Calcul::sum(1, 1));
        $this->assertEquals(7, \alex\Calcul::sum(3, 4));
        $this->assertEquals(22, \alex\Calcul::sum(10, 12));
    }

    public function testodd()
    {
        $this->assertEquals("Paire", \alex\Calcul::odd(1, 1));
        $this->assertEquals("Impair", \alex\Calcul::odd(3, 4));
        $this->assertEquals("Paire", \alex\Calcul::odd(10, 12));
    }
}