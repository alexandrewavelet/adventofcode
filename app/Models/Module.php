<?php

namespace App\Models;

class Module
{
    private $mass;

    function __construct(int $mass)
    {
        $this->mass = $mass;
    }

    public function getFuelRequirements(): int
    {
        return floor($this->mass / 3) - 2;
    }
}
