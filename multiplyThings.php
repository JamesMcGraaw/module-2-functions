<?php

/**
 * Create a function called multiply that takes two ints and multiplies them,
 * then returns the result. If only one int is supplied then
 * the second should be assumed to be 2, so that the function doubles
 * the given int. (Don’t forget type hinting!)
 */

function multiply(int|float $num1, int|float $num2 = 2): int|float
{
    return $num1 * $num2;
}

echo multiply(-1);