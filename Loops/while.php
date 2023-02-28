<?php
$count = 1;
while ($count < 101) {
    if ($count % 33 === 0) {
        echo $count . " is divisible by 33\n";

    }
    $count++;
    continue;
}
?>