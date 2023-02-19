<!DOCTYPE html>
<html>

<body>

    <?php
    function increaseEnthusiasm($string)
    {
        return $string . "!";
    }

    echo increaseEnthusiasm("Random String ");

    function repeatThreeTimes($repeateValue)
    {
        return $repeateValue . $repeateValue . $repeateValue;
    }

    echo repeatThreeTimes("ho");
    
    echo increaseEnthusiasm(repeatThreeTimes("haaa"));

    ?>

</body>

</html>