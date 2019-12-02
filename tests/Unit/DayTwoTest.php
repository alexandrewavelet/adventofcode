<?php

namespace Tests\Unit;

use App\Models\Intcode;
use Tests\TestCase;

class DayTwoTest extends TestCase
{
    public function testIntcodeProcessCorrectly()
    {
        $intcode = new Intcode;

        $this->assertEquals(
            '2,0,0,0,99',
            $intcode->process(explode(',', '1,0,0,0,99'))->implode(',')
        );
        $this->assertEquals(
            '2,3,0,6,99',
            $intcode->process(explode(',', '2,3,0,3,99'))->implode(',')
        );
        $this->assertEquals(
            '2,4,4,5,99,9801',
            $intcode->process(explode(',', '2,4,4,5,99,0'))->implode(',')
        );
        $this->assertEquals(
            '30,1,1,4,2,5,6,0,99',
            $intcode->process(explode(',', '1,1,1,4,99,5,6,0,99'))->implode(',')
        );
    }
}
