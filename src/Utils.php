<?php

namespace BrainGames\Utils;

function getGcd(int $num1, int $num2): int
{
    $gcd = 0;
    $count = $num1 <= $num2 ? $num1 : $num2;

    for ($i = 1; $i <= $count; $i++) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            $gcd = $i;
        }
    }

    return $gcd;
}

function getProgression(int $start, int $step, int $length = 10 ): array
{
    $progression = [];
    for ($i = 0, $item = $start; $i < $length; $i++, $item += $step) {
        $progression[] = $item;
    }

    return $progression;
}
