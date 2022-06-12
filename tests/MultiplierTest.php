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
}