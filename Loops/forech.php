<?php
$scores = [
    "Alice" => 99,
    "Bob" => 95,
    "Charlie" => 98,
    "Destiny" => 91,
    "Edward" => 88
];

foreach ($scores as $goal) {
    echo "Someone received a score of ${goal}.";
    echo "\n";
}

foreach ($scores as $name => $goal) {
    echo "${name} received a score of ${goal}.";
    echo "\n";
}


?>