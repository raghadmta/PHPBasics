<?php
namespace Codecademy;

function chooseCheckoutLane($num)
{
    if ($num <= 12) {
        return "express lane";
    } else {
        return "regular lane";
    }
}

echo chooseCheckoutLane(8);
echo "\n";

echo chooseCheckoutLane(155);
echo "\n";

function canIVote($age)
{
    if ($age >= 18) {
        return "yes";
    } else {
        return "no";
    }
}

echo canIVote(18);
echo "\n";
echo canIVote(17);

?>