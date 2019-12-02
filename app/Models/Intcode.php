<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Intcode
{
    private const INSTRUCTION_SIZE = 4;

    private const OPCODE_ADDITION = 1;
    private const OPCODE_MULTIPLICATION = 2;
    private const OPCODE_STOP = 99;

    public function process(array $program): Collection
    {
        $program = collect($program);

        for ($i=0; $i < ceil($program->count() / self::INSTRUCTION_SIZE); $i++) {
            $instruction = $program->slice(
                $i * self::INSTRUCTION_SIZE,
                self::INSTRUCTION_SIZE
            )->values();

            $opcode = $instruction->first();

            if ((int) $opcode === self::OPCODE_STOP) {
                break;
            }

            list(, $input1, $input2, $output) = $instruction;

            switch ($opcode) {
                case self::OPCODE_ADDITION:
                    $program->put(
                        $output,
                        $program->get($input1) + $program->get($input2)
                    );
                    break;

                case self::OPCODE_MULTIPLICATION:
                    $program->put(
                        $output,
                        $program->get($input1) * $program->get($input2)
                    );
                    break;

                default:
                    throw new Exception('Non-standard OPCode');
            }
        }

        return $program;
    }
}
