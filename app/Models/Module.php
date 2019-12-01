<?php

namespace App\Models;

class Module
{
    private $mass;

    function __construct(int $mass)
    {
        $this->mass = $mass;
    }

    public function getFuelRequirement(): int
    {
        return $this->mass ? floor($this->mass / 3) - 2 : 0;
    }
}
