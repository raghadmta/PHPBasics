<!DOCTYPE html>
<html>

<body>

    <?php

    $string_one = "you have teeth";
    $string_two = "toads are nice";
    $string_three = "brown is my favorite color";

    function convertToQuestion(&$String) // (&) mean that argument will be passed by reference.
    {
        $String = "Do you think " . $String . "?\n";
        echo $String;
    }
    
    $word = "Hello";
    convertToQuestion($word);
    echo $word;


    convertToQuestion($string_one);
    echo $string_one;

    convertToQuestion($string_two);
    echo $string_two;

    convertToQuestion($string_three);
    echo $string_three;
    ?>

</body>

</html>