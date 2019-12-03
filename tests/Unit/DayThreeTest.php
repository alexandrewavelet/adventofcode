<?php

namespace Tests\Unit;

use App\Models\Circuit;
use Tests\TestCase;

class DayThreeTest extends TestCase
{
    public function testItAssertsTrue()
    {
        $this->assertEquals(
            159,
            (new Circuit)->addWire('R75,D30,R83,U83,L12,D49,R71,U7,L72')
                ->addWire('U62,R66,U55,R34,D71,R55,D58,R83')
                ->getClosestIntersection()
        );

        $this->assertEquals(
            159,
            (new Circuit)->addWire('R98,U47,R26,D63,R33,U87,L62,D20,R33,U53,R51')
                ->addWire('U98,R91,D20,R16,D67,R40,U7,R15,U6,R7')
                ->getClosestIntersection()
        );
    }
}
