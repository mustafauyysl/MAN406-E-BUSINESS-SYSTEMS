<!DOCTYPE html>
<html>

<body>
    <h1>PHP Numbers</h1>

    <?php
    echo "is_int()<br>";
    echo "--------------<br>";
    $x = 5;
    var_dump(is_int(5));
    echo "<br>--------------<br>";
    echo "is_float()<br>";
    echo "--------------<br>";
    $x = 5;
    var_dump(is_float(5));
    echo "<br>--------------<br>";
    echo "Infinity<br>";
    echo "--------------<br>";
    $x = 1.9e411;
    var_dump($x);
    echo "<br>--------------<br>";
    echo "NaN<br>";
    echo "--------------<br>";
    $x = acos(4);
    var_dump($x);
    echo "<br>--------------<br>";
    echo "Numerical Strings<br>";
    echo "--------------<br>";
    $x = 1234;
    var_dump(is_numeric($x));
    echo "<br>--------------<br>";
    echo "Casting Strings and Floats to Integers<br>";
    echo "--------------<br>";
    $x = 1234.5;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>--------------<br>";
    echo "--------------<br>";
    $x = "12345.5";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>--------------<br>";
    ?>

</body>

</html>