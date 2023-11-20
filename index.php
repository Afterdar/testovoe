<?php

declare(strict_types=1);

require 'task1.php';
require 'task2.php';
require 'task3.php';
require 'Basket.php';
require 'task5.php';

use function task1\sortLine;
use function task2\parserLine;
use function task3\sortNums;
use task4\Basket;
use function task5\checkNum;

var_dump(sortLine('7 0 39 0 282 2 4 0 45'));
var_dump(parserLine(1, 'яблоко', 'яблока', 'яблок'));
var_dump(sortNums('100 95 9 2 42 11 81'));

$baskets = new Basket();
$baskets->setSizeBasket(20);

echo 'Количество корзин: ' . $baskets->getBaskets() . '<br>';
echo "Вместимость корзин: " . $baskets->getSizeBaskets() . 'кг';

var_dump(checkNum(1, 2));