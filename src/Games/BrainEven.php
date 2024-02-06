<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\makeGame;

function playBrainEven(): void
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $makeQuestion = function (): array {
        $num = rand(1, 100);

        $question = $num;
        $answer = $num % 2 === 0 ? 'yes' : 'no';

        return [
            'question' => $question,
            'answer' => $answer
        ];
    };

    makeGame($rules, $makeQuestion);
}
