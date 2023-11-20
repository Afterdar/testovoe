<?php

declare(strict_types=1);

namespace task3;

function sortNums(string $lineInput): string
{
    $nums = explode(' ', trim($lineInput));

    usort($nums, function (string $firstNum, string $secondNum)
    {
        $concatFirstNumSecondNum = $firstNum . $secondNum;
        $concatSecondNumFirstNum = $secondNum . $firstNum;
        return $concatSecondNumFirstNum <=> $concatFirstNumSecondNum;
    });

    return implode('', $nums);
}
