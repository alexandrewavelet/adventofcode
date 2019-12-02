<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Intcode
{
    /** @var Collection */
    private $integers;

    function __construct(array $integers)
    {
        $this->integers = collect($integers);
    }
}
