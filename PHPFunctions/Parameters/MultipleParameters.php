<!DOCTYPE html>
<html>

<body>

    <?php
    function calculateArea($height, $width)
    {
        $area = $height * $width;
        return $area;

    }

    echo calculateArea(5, 8);


    function calculateVolume($height, $width, $depth)
    {
        $volume = $height * $width * $depth;
        return $volume;
    }

    echo calculateVolume(8, 6, 45);
    
    ?>

</body>

</html>