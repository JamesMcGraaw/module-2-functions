<?php
echo '<h1>Common Elements</h1>';



$array1 = [1, 2, 3, 5, 8, 13];
$array2 = [1, 4, 8, 11];
//$commonNumbers = [''];

function commonElements(array $array1, array $array2)
{
    $commonNumbers = array_diff($array2, $array1);
    return $commonNumbers;
}

echo '<pre>';
print_r commonElements($array1, $array2);
echo '</pre>';