<!DOCTYPE html>
<html>

<body>
    <h1>PHP switch Statement</h1>

    <?php
    $grade = 50;

    switch ($grade) {
        case 90:
            echo "Letter grade is A1";
            break;
        case 80:
            echo "Letter grade is B1";
            break;
        case 50:
            echo "Letter grade is C1";
            break;
        default:
            echo "Letter grade is D";
            break;
    }
    ?>

</body>

</html>