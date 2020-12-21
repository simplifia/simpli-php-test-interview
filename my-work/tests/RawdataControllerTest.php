<?php

use PHPUnit\Framework\TestCase;

final class RawdataControllerTest extends TestCase
{

    function testCalcSum()
    {
        $this->assertEquals(20, RawdataController::calcSum(15.2, 5));
        $this->assertEquals(13, RawdataController::calcSum(12, 1));
        $this->assertNotEquals(5, RawdataController::calcSum(8, 1));
    }

    function testIsEvenOrOdd()
    {
        $this->assertEquals('pair', RawdataController::isEvenOrOdd(20));
        $this->assertEquals('impair', RawdataController::isEvenOrOdd(9));
        $this->assertNotEquals('pair', RawdataController::isEvenOrOdd(17));
    }
}
