<?php
$plant_height = 50;
do {

    echo "The plant is ${plant_height} tall.";
    echo "\n";
    $plant_height++;
} while ($plant_height <= 30);
if ($plant_height > 30) {
    echo "And can produce fruit.";
    echo "\nYour plant height is ${plant_height}";

}
?>