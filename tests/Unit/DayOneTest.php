<?php

namespace Tests\Unit;

use App\Models\Module;
use Tests\TestCase;

class DayOneTest extends TestCase
{
    public function testFuelRequirements()
    {
        $this->assertEquals(2, (new Module(12))->getModuleFuelRequirement());
        $this->assertEquals(2, (new Module(14))->getModuleFuelRequirement());
        $this->assertEquals(654, (new Module(1969))->getModuleFuelRequirement());
        $this->assertEquals(33583, (new Module(100756))->getModuleFuelRequirement());

        // assert that no mass requires 0 fuel
        $this->assertEquals(0, (new Module(0))->getModuleFuelRequirement());
    }

    public function testFullFuelRequirements()
    {
        $this->assertEquals(2, (new Module(12))->getFullFuelRequirement());
        $this->assertEquals(2, (new Module(14))->getFullFuelRequirement());
        $this->assertEquals(966, (new Module(1969))->getFullFuelRequirement());
        $this->assertEquals(50346, (new Module(100756))->getFullFuelRequirement());
    }
}
