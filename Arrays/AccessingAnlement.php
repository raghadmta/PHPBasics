<?php
namespace Codecademy;

$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

$first_winner = $round_one[2];
$scound_winner = $round_two[0];
$thired_winner = $round_three[4];

$winners=[$first_winner, $scound_winner,$thired_winner];

print_r($winners);
?>