<?php
namespace Codecademy;

function willWeEat($meal_Type, $hungry)
{
    if ($meal_Type === "dessert" || $hungry === TRUE) {
        return "Yum. Thanks!";
    } else {
        return "No thanks. We're not hungry.";
    }
}


echo willWeEat("dessert", TRUE);
echo "\n";
echo willWeEat("dessert", FALSE);
echo "\n";
echo willWeEat("Apple", TRUE);
echo "\n";
echo willWeEat("apple", FALSE);
?>