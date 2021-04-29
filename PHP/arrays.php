<!DOCTYPE html>
<html>

<body>
    <h1>PHP Arrays</h1>

    <?php
    $animals = array("Bird", "Hourse", "Dog");
    echo "We have " . $animals[0] . ", " . $animals[1] . " and " . $animals[2] . ".";
    echo "<br>";
    $arrlength = count($animals);

    for ($x = 0; $x < $arrlength; $x++) {
        echo $animals[$x];
        echo "<br>";
    }
    $stundentsNote = array("Mustafa" => "100", "Ali" => "95", "Veli" => "90");
    foreach ($stundentsNote as $x => $x_value) {
        echo "Name =" . $x . ", Note =" . $x_value;
        echo "<br>";
    }
    $workers = array(
        array("Ali", 85, 170),
        array("Veli", 70, 165),
        array("Ahmet", 90, 200),
        array("Mehmet", 78, 180)
    );

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>$row. Student</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $workers[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    echo "<br>";
    $numbers = array(1, 2, 4, 3, 0);
    sort($numbers);
    echo "<br>";
    $age = array("Ali" => "40", "Veli" => "80", "Mehmet" => "90");
    krsort($age);
    ?>

</body>

</html>