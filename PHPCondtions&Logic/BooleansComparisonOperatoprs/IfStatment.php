<?php
namespace Codecademy;

function markAnswer($Value)
{
    if ($Value) {
        return "green";
    } else {
        return "red";
    }
}

echo markAnswer(TRUE);
echo "\n";
echo markAnswer(FALSE);
?>