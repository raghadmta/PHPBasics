<?php
namespace Codecademy;

function calculateDistance($num1, $num2)
{
    $total = abs($num1 - $num2); // abs() gives the absolute number .
    return $total;
}
calculateDistance(4, -1);

function calculateTip($meal_price)
{
    $total = round($meal_price * 1.18); // round the number up
    return $total;
}
echo calculateTip(100);

?>