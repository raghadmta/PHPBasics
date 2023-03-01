<?php
for ($i = 10; $i >= 0; $i--) {
    if ($i <= 10 && $i >= 3) {
        echo $i;
        echo "\n";
    } elseif ($i == 2) {
        echo "Ready!";
        echo "\n";
    } elseif ($i == 1) {
        echo "Set!";
        echo "\n";
    } else {
        echo "Go!";
    }
}

?>