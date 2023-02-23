<?php
namespace Codecademy;

function agreeOrDisagree($first, $second)
{
    if ($first === $second) {
        return "You agree!";
    } else {
        return "You disagree!";
    }
}

echo agreeOrDisagree("hey", "Hey");
echo "\n";
echo agreeOrDisagree("there", "there");
echo "\n";


// -------------------------

function checkRenewalMonth($month)
{
    if ($month !== date("F")) {
        return "Welcome!";
    } else {
        return "Time to renew";
    }
}

echo checkRenewalMonth("March");
echo "\n";
echo checkRenewalMonth("February");

?>