<?php
function multiply(int|float $num1, int|float $num2 = 2): int|float
{
    return $num1 * $num2;
}

echo multiply(-1);