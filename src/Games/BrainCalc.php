<?php

namespace BrainGames\Games\BrainCalc;

use function cli\line;
use function cli\prompt;

function brainCalc()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');

    $questionsCount = 3;
    for ($i = 0; $i < $questionsCount; $i++) {
        $randomNumber1 = rand(1, 10);
        $randomNumber2 = rand(1, 10);
        $operators = ['+', '-', '*'];
        $randomOperator = $operators[array_rand($operators)];
        $correctAnswer = match ($randomOperator) {
            '+' => (string) ($randomNumber1 + $randomNumber2),
            '-' => (string) ($randomNumber1 - $randomNumber2),
            '*' => (string) ($randomNumber1 * $randomNumber2),
        };

        line('Question: %d %s %d', $randomNumber1, $randomOperator, $randomNumber2);
        $answer = prompt('Your answer:');

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            return line("Let's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
