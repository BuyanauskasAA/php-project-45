<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\makeGame;
use function BrainGames\Utils\isPrime;

function playBrainPrime(): void
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $makeQuestion = function (): array {
        $num = rand(1, 100);

        $question = (string) $num;
        $answer = isPrime($num) ? 'yes' : 'no';

        return [
            'question' => $question,
            'answer' => $answer
        ];
    };

    makeGame($rules, $makeQuestion);
}
