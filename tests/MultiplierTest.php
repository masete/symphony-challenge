<?php

namespace Tests;

use App\Multiplier;

use PHPUnit\Framework\TestCase;

class MultiplierTest extends TestCase
{
    public function testMultiplierInstance()
    {
        $multiplier = new Multiplier;

        $this->assertInstanceOf(Multiplier::class, $multiplier);
    }
    public function testIsInt()
    {
        $multiplier = new Multiplier;

        $result = $multiplier->ms([2,4,6]);

        $this->assertIsInt($result);
    }
    public function testNotFloat()
    {
        $multiplier = new Multiplier;

        $result = $multiplier->ms([2,4,6]);
        $this->assertIsNotFloat($result);
    }
    public function testNumeric()
    {
        $multiplier = new Multiplier;

        $result = $multiplier->ms([2,4,6]);
        $this->assertIsNumeric($result);
    }
    public function testFinite()
    {
        $multiplier = new Multiplier;

        $result = $multiplier->ms([2,4,6]);

        $this->assertFinite($result);
    }
    public function testNotEpty()
    {
        $multiplier = new Multiplier;

        $result = $multiplier->ms([2,4,6]);
        $this->assertNotEmpty($result);
    }

}