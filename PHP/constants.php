<!DOCTYPE html>
<html>

<body>
    <h1>PHP Constants</h1>

    <?php
    define("GREETING", "Welcome to My World!<br>");
    echo GREETING;

    define("animals", [
        "Bird",
        "Hourse",
        "Dog"
    ]);
    echo animals[2];
    ?>

</body>

</html>