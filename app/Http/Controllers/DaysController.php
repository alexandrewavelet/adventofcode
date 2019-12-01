<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class DaysController extends BaseController
{
    public function one()
    {
        $fuel_total = 0;
        $inputs = Storage::disk('inputs')->get('day_one.txt');

        foreach (explode("\r\n", $inputs) as $input) {
            $fuel_total += (new Module((int) $input))->getFuelRequirement();
        }

        return view('days.one', ['fuel' => $fuel_total]);
    }
}
