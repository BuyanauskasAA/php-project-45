<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\makeGame;
use function BrainGames\Utils\getGcd;

function playBrainGcd(): void
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $makeQuestion = function (): array {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        
        $question = "{$num1} {$num2}";
        $answer = (string) getGcd($num1, $num2);

        return [
            'question' => $question,
            'answer' => $answer
        ];
    };

    makeGame($rules, $makeQuestion);
}
