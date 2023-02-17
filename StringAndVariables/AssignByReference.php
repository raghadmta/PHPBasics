<!DOCTYPE html>
<html>

<body>
    <?php
    $very_bad_unclear_name = "15 chicken wings";
    $order = & $very_bad_unclear_name;

    $order .= " and 3 soda";

    echo "\nYour order is: $very_bad_unclear_name.";
    ?>

</body>

</html>