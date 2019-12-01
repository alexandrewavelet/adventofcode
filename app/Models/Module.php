<?php

namespace App\Models;

class Module
{
    private $mass;

    function __construct(int $mass)
    {
        $this->mass = $mass;
    }

    public function getModuleFuelRequirement(): int
    {
        return $this->getFuelRequirement($this->mass);
    }

    public function getFullFuelRequirement(): int
    {
        $fuel = $additional_fuel = $this->getModuleFuelRequirement();

        while (($additional_fuel = $this->getFuelRequirement($additional_fuel)) > 0) {
            $fuel += $additional_fuel;
        }

        return $fuel;
    }

    private function getFuelRequirement(int $mass): int
    {
        $fuel = floor($mass / 3) - 2;

        return $fuel > 0 ? $fuel : 0;
    }
}
