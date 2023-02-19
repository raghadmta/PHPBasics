<!DOCTYPE html>
<html>

<body>

    <?php


    $language = "PHP";
    $topic = "scope";

    function generateLessonName($concept)
    {
        global $language; // global keyword to use variables from the global scope within a function.
        return $language . ": " . $concept;
    }

    echo generateLessonName($topic);
    ?>

</body>

</html>