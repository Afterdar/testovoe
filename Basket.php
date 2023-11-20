<?php

declare(strict_types=1);

namespace task4;

class Basket
{
    private const NUMSBASKET = 7;

    private int $sizeBasket;

    public function setSizeBasket(int $size): int
    {
        return $this->sizeBasket = $size;
    }
    public function getBaskets(): int
    {
        return self::NUMSBASKET;
    }

    public function getSizeBaskets(): int
    {
        return self::NUMSBASKET * $this->sizeBasket;
    }
}