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
}
