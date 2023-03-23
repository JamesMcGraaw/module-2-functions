<?php

echo '<h1>Default Argument</h1>';

function greet(string $greeting, string $name = 'Earthling'): string
{
    return '<p>' . $greeting . ', ' . $name . '!</p>';
}

echo greet('Good morning', 'Mary');

echo greet('Greetings');