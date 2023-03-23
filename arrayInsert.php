<?php

/*
 * Write a function array_insert that works as below.
 * $someNames = ['Anna', 'Michael', 'Brent', 'Adam', 'Dom', 'Henry', 'James'];


$allNames = array_insert($someNames, 'Phil', 4);
echo '<pre>';
print_r($allNames);
echo '</pre>';
// ['Anna', 'Michael', 'Brent', 'Adam', 'Phil', 'Dom', 'Henry', 'James']
 */

$someNames = ['Anna', 'Michael', 'Brent', 'Adam', 'Dom', 'Henry', 'James'];

function array_insert(array $someNames, string $person, int $position): array
{
     $firstPart = array_slice($someNames,0, $position);
     $personArray = [$person];
     $lastPart = array_slice($someNames, $position);
    return array_merge($firstPart, $personArray, $lastPart);
}

$allNames = array_insert($someNames, 'Phil', 4);
echo '<pre>';
print_r($allNames);
echo '</pre>';