<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Circuit
{
    /** @var Collection */
    private $wires;

    private const ORIGIN_COORDINATES = [
        'x' => 0,
        'y' => 0,
    ];
    private const ORIENTATION_UP = 'U';
    private const ORIENTATION_DOWN = 'D';
    private const ORIENTATION_RIGHT = 'R';
    private const ORIENTATION_LEFT = 'L';

    function __construct()
    {
        $this->wires = collect();
    }

    public function addWire(string $wire): self
    {
        $this->wires->push($wire);

        return $this;
    }

    public function getClosestIntersection(): int
    {
        $wires_map = $this->wires->map(function ($wire) {
            $directions = collect(explode(',', $wire));

            return $this->trace($directions);
        });

        $intersects = array_uintersect(...array_merge($wires_map->toArray(), [function ($a, $b) {
            return $a['x'] === $b['x'] && $a['y'] === $b['y'];
        }]));

        $intersects_manhattan_distances = collect($intersects)->map(function ($coordinates) {
            return abs($coordinates['x'] - self::ORIGIN_COORDINATES['x'])
                + abs($coordinates['y'] - self::ORIGIN_COORDINATES['y']);
        });

        return $intersects_manhattan_distances->min();
    }

    public function trace(Collection $directions): Collection
    {
        $coordinates = collect([self::ORIGIN_COORDINATES]);

        foreach ($directions as $direction) {
            $orientation = substr($direction, 0, 1);
            $distance = substr($direction, 1);

            switch ($orientation) {
                case self::ORIENTATION_UP:
                    $next_coordinate = function ($current) {
                        return [
                            'x' => $current['x'],
                            'y' => $current['y']++,
                        ];
                    }
                    break;

                case self::ORIENTATION_DOWN:
                    # code...
                    break;

                case self::ORIENTATION_RIGHT:
                    # code...
                    break;

                case self::ORIENTATION_LEFT:
                    # code...
                    break;

                default:
                    throw new Exception('Circuit trace: unknown direction');
            }

            for ($i=0; $i < $distance; $i++) {

            }
        }

        return collect();
    }
}
