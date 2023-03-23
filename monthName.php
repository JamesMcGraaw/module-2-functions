<?php
/*
 *Write a function called monthName that works as below.
 * echo '<p>Month 4 is ' . monthName(4) . '</p>'; // April
 * echo '<p>Month 13 is ' . monthName(13) . '</p>'; // Invalid month
 * echo '<p>Month 0 is ' . monthName(0) . '</p>'; // Invalid month
 * echo '<p>Month -1 is ' . monthName(-1) . '</p>'; // Invalid month
 */

$months = ['Invalid month', 'January', 'February', 'March', 'April', 'May'
    , 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

function monthName(array $months, int $monthNum): string
{
    if ($monthNum < 13 && $monthNum > 0) {
        return "<p>$months[$monthNum]</p>";
    } else {
        return "<p>$months[0]</p>";
    }
}

echo monthName($months, 12);