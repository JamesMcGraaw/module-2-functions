<?php

/**
 * Create a function called sumSquares that
 * returns the sum of the squares of every integer in an array.
 * Create a function called average that returns the average of
 * the integers in an array.
 */

$numbersToBeSquared = [1, 2, 3, 4];
function sumSquares(array $numbersToBeSquared): int|float
{
    foreach ($numbersToBeSquared as $num) {
       $squareNum[] = ($num * $num);
    }
    return array_sum($squareNum);
}

// How would I put code into this if there was a 0 in the array?

//function sumSquares(array $numbersToBeSquared): int|float
//{
//    foreach ($numbersToBeSquared as $num) {
//        $squareNum = 0;
//        $squareNum += ($num * $num);
//    }
//    return $squareNum;
//}


echo sumSquares($numbersToBeSquared);

echo '<br>';  //I know not best practise

$numbersToAverage = [1, 2, 3, 4];

function average(array $numbersToAverage): int|float
{
    $total = array_sum($numbersToAverage);
    $numberIntegers = count($numbersToAverage);
    return $total / $numberIntegers;
}

echo average($numbersToAverage);