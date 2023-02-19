<!DOCTYPE html>
<html>

<body>

    <?php
    function calculateTip($Meal_cost, $Tip_precent = 20)
    {
        $total = $Meal_cost * (1 + ($Tip_precent / 100));
        return $total;
    }

    echo calculateTip(125, 30);
    echo calculateTip(150);
    ?>

</body>

</html>