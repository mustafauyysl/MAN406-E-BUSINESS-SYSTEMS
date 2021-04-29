<!DOCTYPE html>
<html>

<body>
    <h1>PHP Strings</h1>

    <?php
    echo "strlen()<br>";
    echo "--------------<br>";
    echo strlen("Mustafa Uysal");
    echo "<br>--------------<br>";
    echo "str_word_count()<br>";
    echo "--------------<br>";
    echo str_word_count("Mustafa Uysal");
    echo "<br>--------------<br>";
    echo "strrev()<br>";
    echo "--------------<br>";
    echo strrev("Mustafa Uysal");
    echo "<br>--------------<br>";
    echo "strpos()<br>";
    echo "--------------<br>";
    echo strpos("Mustafa Uysal", "Uysal");
    echo "<br>--------------<br>";
    echo "str_replace()<br>";
    echo "--------------<br>";
    echo str_replace("Selda", "Mustafa", "Selda Uysal");
    echo "<br>--------------<br>";
    ?>

</body>

</html>