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
        $this->assertEquals(2, (new Module(12))->getFuelRequirement());
        $this->assertEquals(2, (new Module(14))->getFuelRequirement());
        $this->assertEquals(654, (new Module(1969))->getFuelRequirement());
        $this->assertEquals(33583, (new Module(100756))->getFuelRequirement());

        // assert that no mass requires 0 fuel
        $this->assertEquals(0, (new Module(0))->getFuelRequirement());
    }
}
