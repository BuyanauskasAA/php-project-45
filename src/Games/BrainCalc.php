<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\makeGame;

function playBrainCalc(): void
{
    $rules = 'What is the result of the expression?';
    $makeQuestion = function (): array {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];

        $question = "{$num1} {$operator} {$num2}";
        $answer = (string) match ($operator) {
            '+' => $num1 + $num2,
            '-' => $num1 - $num2,
            '*' => $num1 * $num2,
        };

        return [
            'question' => $question,
            'answer' => $answer
        ];
    };

    makeGame($rules, $makeQuestion);
}
