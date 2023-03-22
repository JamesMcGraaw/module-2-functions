<?php

echo '<h1>User Defined Functions</h1>';

//below: A multi-line comment put in front of a function to talk about the function.
//Have directly above the definition of the function - DOCBLOCK comment.
/**
 * Greet a given person's name and confirm their age.
 *
 * @param $name string A person's name.
 * @param $age int A person's age.
 * @return string The greeting
 */
function sayhello(string $name, int $age): string
{
    return '<p>Hello, &nbsp;' . $name . '! You are ' . $age . '.</p>';
}


echo sayhello('James', 30);

$greeting = sayhello('Colin', '55');
echo $greeting;

/**
 * @param $number float|int A number
 * @return float|int The number times 3 divided by 2
 */
function timesBy3DivideBy2(float|int $number): float|int
{
    return ($number * 3 / 2);
}

echo timesBy3DivideBy2(5);