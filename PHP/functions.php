<!DOCTYPE html>
<html>

<body>
    <h1>PHP Functions</h1>

    <?php
    function greeting()
    {
        echo "Hello world!";
    }
    function greetingWithName($name)
    {
        echo "Hello $name.";
    }
    greeting();
    echo "<br>";
    greetingWithName("Mustafa");
    echo "<br>";
    function getPersonInfo($name, $studentNo)
    {
        echo "Student name is $name and his number is $studentNo.";
    }

    getPersonInfo("Mustafa", "21613088");

    function calculateAge(int $birthYear)
    {
        $age = 2018 - $birthYear;
        echo "Your age is $age.";
    }
    echo "<br>";
    calculateAge(1998);
    echo "<br>";

    function calculateAgeWithYear(int $birthYear, int $year = 2021)
    {
        echo "Your age is " . ($year - $birthYear);
    }
    calculateAgeWithYear(1998);

    function returnAge(int $birthYear)
    {
        return 2021 - $birthYear;
    }

    echo "<br>";
    echo "Your age is " . returnAge(1998)

    ?>

</body>

</html>