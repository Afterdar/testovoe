<?php

declare(strict_types=1);

namespace task5;

function checkNum(int $a, int $b): string
{
    $d = $a/$b;
    $result = '';

    if ($d > 0)
    {
        $result = 'число положительное';
    }
    elseif ($d === 0 )
    {
        $result = 'ноль';
    }
    elseif ($d < 0)
    {
        $result = 'число отрицательное';
    }

    return $result;
}
