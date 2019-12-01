<?php

namespace Tests\Unit;

use App\Models\Module;
use Tests\TestCase;

class DayOneTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFuelRequirements()
    {
        $this->assertEquals(2, (new Module(12))->getFuelRequirements());
        $this->assertEquals(2, (new Module(14))->getFuelRequirements());
        $this->assertEquals(654, (new Module(1969))->getFuelRequirements());
        $this->assertEquals(33583, (new Module(100756))->getFuelRequirements());
    }
}
