<!DOCTYPE html>
<html>

<body>
    <h1>PHP Loops</h1>

    <?php
    echo "While Loop<br>";
    $x = 5;
    while ($x <= 10) {
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br>Do While Loop<br>";
    do {
        echo "Current value is: $x <br>";
        $x++;
    } while ($x <= 5);
    echo "<br>For Loop<br>";
    for ($x = 0; $x <= 30; $x += 1) {
        echo "The number is: $x <br>";
    }
    echo "<br>foreach Loop<br>";
    $stock = array("Pencil" => "10", "Book" => "25", "Eraser" => "50");

    foreach ($stock as $item => $amount) {
        echo "$item = $amount<br>";
    }
    echo "<br>Break<br>";
    while ($x < 45) {
        if ($x == 44) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br>Continue<br>";
    while ($x < 50) {
        if ($x == 52) {
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>

</body>

</html>