<?php

use PHPUnit\Framework\TestCase;

class Test_operation extends TestCase
{

    public function Test_de_parite()
    {
        $this->assertEquals("Paire", \ali\abdullah\OperationApply::TesteParite(10, 12));
        $this->assertEquals("Impair", \ali\abdullah\OperationApply::TesteParite(3, 4));
        $this->assertEquals("Paire", \ali\abdullah\OperationApply::TesteParite(1, 1));
        
    }
    
        public function Test_de_somme()
    {
        $this->assertEquals(22, \ali\abdullah\OperationApply::SommeNumber(10, 12));
        $this->assertEquals(7, \ali\abdullah\OperationApply::SommeNumber(3, 4));
        $this->assertEquals(2, \ali\abdullah\OperationApply::SommeNumber(1, 1));
    }
}
