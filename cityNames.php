<?php
echo '<h1>City Names</h1>';

$cities = 'Bristol, London, Manchester, Salford, Truro';

$cityArray = explode(", ", $cities);

echo '<pre>';
print_r($cityArray);
echo '</pre>';