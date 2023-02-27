<?php
namespace Codecademy;

function both($paraFirst, $paraSecond)
{
    if ($paraFirst === true) {
        if ($paraSecond === true) {
            return "both";
        } else {
            return "not both";
        }
    } else {
        return "not both";
    }
}
echo both(TRUE, TRUE);
echo "\n";
echo both(TRUE, FALSE);
echo "\n";
echo both(FALSE, TRUE);
echo "\n";
echo both(FALSE, FALSE);
?>