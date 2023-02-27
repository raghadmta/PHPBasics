<?php
namespace Codecademy;

function clapYourHands($happiness, $know_it)
{
    if ($happiness && $know_it) {
        return "CLAP!";

    } else {
        return ":(";
    }
}
echo clapYourHands(TRUE, TRUE);
echo "\n";
echo clapYourHands(TRUE, FALSE);
echo "\n";
echo clapYourHands(FALSE, FALSE);
echo "\n";
echo clapYourHands(FALSE, TRUE);
?>