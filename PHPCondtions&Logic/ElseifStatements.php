<?php
namespace Codecademy;

function whatRelation($precent)
{
    if ($precent === 100) {
        echo "identical twins";
    } elseif ($precent >= 35) {
        echo "parent and child or full siblings";
    } elseif ($precent >= 14) {
        echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ($precent >= 6) {
        echo "first cousins";
    } elseif ($precent >= 3) {
        echo "second cousins";
    } elseif ($precent >= 1) {
        echo "third cousins";
    } else {
        echo "not genetically related";
    }

}

whatRelation(100);
echo "\n";
whatRelation(38);
echo "\n";
whatRelation(22);
echo "\n";
whatRelation(9);
echo "\n";
whatRelation(4);
echo "\n";
whatRelation(1);
echo "\n";
whatRelation(0);
echo "\n";

?>