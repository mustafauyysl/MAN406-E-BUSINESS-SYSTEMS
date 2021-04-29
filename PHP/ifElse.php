<!DOCTYPE html>
<html>

<body>
    <h1>PHP if...else...elseif Statements</h1>

    <?php
    $isStundent = true;

    if ($isStundent) {
        echo "He is student.";
    } else {
        echo "No, he is not student.";
    }

    echo "<br>";

    $grade = 95;

    if ($grade > 90) {
        echo "Letter Grade: A1";
    } else if ($grade > 80) {
        echo "Letter Grade: B1";
    } else if ($grade > 70) {
        echo "Letter Grade: C1";
    } else {
        echo "Letter Grade: D";
    }


    ?>

</body>

</html>