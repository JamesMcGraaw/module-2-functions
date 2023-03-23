<?php

/*
STRETCH GOALS
If either player's score is < 14, draw a third card.
If an ace is picked, and the total score is over 21, the ace becomes worth 1 point.
 */

echo '<h1>Blackjack</h1>';

//Scores defined
$scores = ['Ace' => 11, 'King' => 10, 'Queen' => 10, 'Jack' => 10, 'Ten' => 10, 'Nine' => 9, 'Eight' => 8, 'Seven' => 7
    , 'Six' => 6, 'Five' => 5, 'Four' => 4, 'Three' => 3, 'Two' => 2];

//Defined deck - score = key-1, apart from face cards == 10.
$deck = ['Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Jack', 'Queen', 'King', 'Ace'];

//Shuffles deck but preserves key - value pairing.
$shuffledDeck = [];

//Takes keys of deck[] and randomises them
$keys = array_keys($deck);
shuffle($keys);

//Takes shuffled keys and assigns them to strings in deck[]
foreach ($keys as $key) {
    $shuffledDeck[$key] = $deck[$key];
}

//Pulls shuffled deck values
$shuffledDeckValues = array_values($shuffledDeck);

////P1 and P2 dealt first 4 cards of deck - matched to scores[] and cards dealt added up
//$p1score = $scores[$shuffledDeckValues[0]] + $scores[$shuffledDeckValues[1]];
//$p2score = $scores[$shuffledDeckValues[2]] + $scores[$shuffledDeckValues[3]];

//Calculates player score
$p1scoreStats = calculatePlayerScore(0, $scores, $shuffledDeckValues);
$p1score = $p1scoreStats[0];
$p1twisted = $p1scoreStats[1];
$p2scoreStats = calculatePlayerScore(1, $scores, $shuffledDeckValues);
$p2score = $p2scoreStats[0];
$p2twisted = $p2scoreStats[1];

//Declare the winner
echo declareWinner($p1score, $p2score);

//STATS
echo gameStats($p1score, $p2score, $p1twisted, $p2twisted, $shuffledDeckValues);

//If either player's score is < 14, draw a third card.
function calculatePlayerScore($firstCard, $scores, $shuffledDeckValues): array
{
    $twisted = false;
    $playerScore = $scores[$shuffledDeckValues[$firstCard]] + $scores[$shuffledDeckValues[$firstCard + 2]];
    if ($playerScore < 14) {
        $playerScore += $scores[$shuffledDeckValues[$firstCard + 4]];
        $twisted = true;
    }
    return [$playerScore, $twisted];
}

//Function checks 2 players scores and sees who wins.
function declareWinner($p1score, $p2score): string
{
    if ($p1score > $p2score) {
        return '<p>Player 1 wins with a score of ' . $p1score . '!</p>';
    } elseif ($p1score < $p2score) {
        return '<p>Player 2 wins with a score of ' . $p2score . '!</p>';
    } else {
        return '<p>It\'s a draw with both players scoring ' . $p1score . '!</p>';
    }
}

// Revealing hands of players
function gameStats($p1score, $p2score, $p1twisted, $p2twisted, $shuffledDeckValues): string
{
    if ($p1score > $p2score && !$p1twisted) {
        return'<p>Their hand was ' . $shuffledDeckValues[0] . ' and ' . $shuffledDeckValues[2] . '!</p>';
    } elseif ($p1score < $p2score && !$p2twisted) {
        return'<p>Their hand was ' . $shuffledDeckValues[1] . ' and ' . $shuffledDeckValues[3] . '!</p>';
    } elseif ($p1score > $p2score && $p1twisted) {
        return'<p>Their hand was ' . $shuffledDeckValues[0] . ', ' . $shuffledDeckValues[2]. ' and '
            . $shuffledDeckValues[4] . '!</p>';
    } elseif ($p1score < $p2score && $p2twisted) {
        return'<p>Their hand was ' . $shuffledDeckValues[1] . ', ' . $shuffledDeckValues[3]. ' and '
            . $shuffledDeckValues[4] . '!</p>';
    } elseif ($p1score == $p2score && $p1twisted && $p2twisted) {
        return '<p>Player 1\'s hand was: ' . $shuffledDeckValues[0] . ', ' . $shuffledDeckValues[2]. ' and '
        . $shuffledDeckValues[4]
            . ' and Player 2\'s hand was: '  . $shuffledDeckValues[1] . ', ' . $shuffledDeckValues[3]. ' and '
            . $shuffledDeckValues[5] . '!</p>';
    } else {
        return '<p>Player 1\'s hand was: ' . $shuffledDeckValues[0] . ' and ' . $shuffledDeckValues[2]
            . ' and Player 2\'s hand was: '  . $shuffledDeckValues[1] . ' and ' . $shuffledDeckValues[3] . '!</p>';
    }

}




//echo '<pre>';
//print_r($shuffledDeck);
//echo '</pre>';
//echo '<p>Player 1 Scores: ' . $p1score . '</p>';
//echo '<p>Player 2 Scores: ' . $p2score . '</p>';



