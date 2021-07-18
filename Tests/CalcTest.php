<?php

use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    public $calc = null;

    public function setUp(): void
    {
        $this->calc = new Calc();
    }
    public function test_sum()
    {
        $result = $this->calc->sum(1, 4);
        $this->assertEquals(3, $result);
        $this->assertIsInt($result);
    }
    public function test_res()
    {
        $result = $this->calc->res(2, 1);
        $this->assertEquals(1, $result);
        $this->assertIsInt($result);
    }
}
