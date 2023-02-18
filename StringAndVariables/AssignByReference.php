<!DOCTYPE html>
<html>

<body>

    <?php
    $very_bad_unclear_name = "15 chicken wings";
    // =& opertor is to make allies of the same variable
    $order =& $very_bad_unclear_name;

    // .= to add info into the value
    $order .= " and 3 soda";

    echo "\nYour order is: $very_bad_unclear_name.";
    ?>

</body>

</html>