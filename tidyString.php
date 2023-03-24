<?php

echo '<h1>tidyString</h1>';

$string = 'Here\'s a FRIGGING string for ya';
$characters = '\a, \y, \f, \o, \r, \H';

function tidyString ($string, $characters): string
{
    $string = trim($string, $characters);
    $string = strtolower($string);
    return $string;
}

echo '<p>';
echo tidyString($string, $characters);
echo '<p>';