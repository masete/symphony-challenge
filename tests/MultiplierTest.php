<?php

namespace Tests;

use App\Multiplier;

use PHPUnit\Framework\TestCase;

class MultiplierTest extends TestCase
{
    public function testMultiplier()
    {
        $multiplier = new Multiplier;

        $this->assertInstanceOf(Multiplier::class, $multiplier);
    }
}