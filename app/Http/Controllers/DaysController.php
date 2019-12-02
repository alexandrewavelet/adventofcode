<?php

namespace App\Http\Controllers;

use App\Models\Intcode;
use App\Models\Module;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class DaysController extends BaseController
{
    public function one()
    {
        $fuel_modules = $fuel_total = 0;
        $inputs = Storage::disk('inputs')->get('day_one.txt');

        foreach (explode("\r\n", $inputs) as $input) {
            $module = new Module((int) $input);

            $fuel_modules += $module->getModuleFuelRequirement();
            $fuel_total += $module->getFullFuelRequirement();
        }

        return view('days.one', [
            'fuel_modules' => $fuel_modules,
            'fuel_total' => $fuel_total,
        ]);
    }

    public function two()
    {
        $input = Storage::disk('inputs')->get('day_two.txt');
        $intcode = new Intcode;

        $program = $gravity_assist_program = explode(',', $input);
        $gravity_assist_program[1] = 12;
        $gravity_assist_program[2] = 2;

        $alarm = $intcode->process($gravity_assist_program);

        $noun = 0;
        $verb = 0;
        while (
            $intcode->process($program)->get(0) !== 19690720
            || ($noun === $verb && $noun === 99)
        ) {
            if ($verb === 99) {
                $noun++;
                $verb = 0;
            }

            $verb++;

            $program[1] = $noun;
            $program[2] = $verb;
        }

        return view('days.two', [
            'alarm' => $alarm->get(0),
            'code' => 100 * $noun + $verb,
        ]);
    }
}
