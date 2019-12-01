<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DaysController extends BaseController
{
    public function one()
    {
        return view('days.one');
    }
}
