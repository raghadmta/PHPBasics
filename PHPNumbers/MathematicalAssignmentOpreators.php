<!DOCTYPE html>
<html>

<body>
    <?php

    $my_num = 8;
    $answer = $my_num;

    $answer += 2;
    $answer *= 2;
    $answer -= 2;
    $answer /= 2;

    $answer -= $my_num;
    echo $answer;


    $answer %= 2;
    $answer **= 2;

    ?>
</body>

</html>