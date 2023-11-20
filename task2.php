<?php

declare(strict_types=1);

namespace task2;

function parserLine(int $num, string $formString1, string $formString2, string $formString3): string
{
    $lastNum = $num % 10;

    if ($num >= 11 && $num <= 20)
    {
        return $num . ' ' . $formString3;
    }

    return match ($lastNum)
    {
        1 => $num . ' ' . $formString1,
        2, 3, 4 => $num . ' ' . $formString2,
        default => $num . ' ' . $formString3,
    };
}
