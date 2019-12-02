<?php

namespace App\Http\Controllers;

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
            'fuel_total' => $fuel_total
        ]);
    }

    public function two()
    {
        return view('days.two');
    }
}
