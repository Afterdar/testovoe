<?php

declare(strict_types=1);

namespace task1;

function sortLine(string $lineInput): string
{
    $zeroCount = 0;
    $result = '';

    $lineInput = explode(' ', trim($lineInput));

    foreach ($lineInput as $item)
    {
        if ($item == 0)
        {
            $zeroCount++;
        }
        else
        {
            $result .= $item . ' ';
        }
    }

    $result .= str_repeat('0 ', $zeroCount);

    return $result;
}