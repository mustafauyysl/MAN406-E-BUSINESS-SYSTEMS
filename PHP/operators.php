<!DOCTYPE html>
<html>

<body>
    <h1>PHP Operators</h1>

    <?php
    echo "Arithmetic Operators<br>";
    $x = 4;
    $y = 2;
    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x ** $y;
    echo "<br>";
    echo "<br>";
    echo "Assignment Operators<br>";
    echo $x += 20;
    echo "<br>";
    echo $x -= 20;
    echo "<br>";
    echo $x *= 2;
    echo "<br>";
    echo $x /= 2;
    echo "<br>";
    echo $x %= 1;
    echo "<br>";
    echo "<br>";
    echo "Comparison  Operators<br>";
    echo var_dump($x == $y);
    echo "<br>";
    echo var_dump($x === $y);
    echo "<br>";
    echo var_dump($x != $y);
    echo "<br>";
    echo var_dump($x <> $y);
    echo "<br>";
    echo var_dump($x !== $y);
    echo "<br>";
    echo var_dump($x > $y);
    echo "<br>";
    echo var_dump($x < $y);
    echo "<br>";
    echo var_dump($x >= $y);
    echo "<br>";
    echo var_dump($x <= $y);
    echo "<br>";
    echo var_dump($x <=> $y);
    echo "<br>";
    echo "<br>";
    echo "Increment / Decrement Operators<br>";
    echo ++$x;
    echo "<br>";
    echo $x++;
    echo "<br>";
    echo --$x;
    echo "<br>";
    echo $x--;
    echo "<br>";
    echo "<br>";
    echo "Logical Operators<br>";
    if ($x == 100 and $y == 50) {
        echo "Equal";
    }
    if ($x == 100 and $y == 50) {
        echo "Equal";
    }
    if ($x == 100 xor $y == 50) {
        echo "Equal";
    }
    if ($x == 100 && $y == 50) {
        echo "Equal";
    }
    if ($x == 100 || $y == 50) {
        echo "Equal";
    }
    if ($x !== 100) {
        echo "Not Equal";
    }
    echo "<br>";
    echo "<br>";
    echo "String Operators<br>";
    $name = "Mustafa";
    $surname = "Uysal";
    echo $name . $surname;
    echo "<br>";
    echo $name .= $surname;
    echo "<br>";
    echo "<br>";
    echo "Array Operators<br>";
    $x = array("a" => "dog", "b" => "cat");
    $y = array("c" => "bird", "d" => "hours");
    print_r($x + $y);
    echo "<br>";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x <> $y);
    echo "<br>";
    var_dump($x !== $y);
    echo "<br>";
    echo "<br>";
    echo "Conditional Assignment Operators<br>";
    $isStudent = true;
    echo $status = $isStudent ? "Yes, student" : "Not, student";
    echo ("<br>");
    echo $color = $color ?? "blue";
    ?>

</body>

</html>