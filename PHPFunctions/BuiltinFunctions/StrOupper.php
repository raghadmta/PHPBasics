<?php
namespace codeacadmey;

// convert letters to upper case letters
function convertToShout($string)
{
    return strtoupper($string) . "!";
}

$greet = "heyyyyyy";
echo convertToShout($greet);



// round up intgers
function tipGenerously($meal_price)
{
    $total = ceil($meal_price * (1 + (20 / 100)));
    return $total;
}
echo "\n";
echo tipGenerously(100.00);


function calculateCircleArea($r)
{
    $area = pi() * pow($r / 2, 2);
    return $area;
}
echo "\n";
echo calculateCircleArea(6);

?>