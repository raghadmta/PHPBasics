<?php
namespace Codecademy;

// $variable <= check ? if true print this : if false print this;
function ternaryCheckout($num)
{
    return $num <= 12 ? "express lane" : "regular lane";
}

echo ternaryCheckout(156);
echo "\n";
echo ternaryCheckout(11);
echo "\n";


// -------------------------------------

function ternaryVote($age)
{
    return $age >= 18 ? "yes" : "no";
}
echo ternaryVote(15);
echo "\n";
echo ternaryVote(19);

?>
