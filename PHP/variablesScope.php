<!DOCTYPE html>
<html>

<body>
    <h1>PHP Variables Scope</h1>

    <?php
    $year = 2021; // Global scope

    function calculateAge()
    {
        global $year;
        $birth = 1998; // Local scope
        $age = $year - $birth;
        echo "I am " . $age . " years old<br>";
    }

    calculateAge();

    function calculateAgeLocal()
    {
        $birth = 1998; // Local scope
        $year = 2021;
        $age = $year - $birth;
        echo "I am " . $age . " years old<br>";
    }

    calculateAgeLocal();

    function yearIncrease() {
        static $year = 2021;
        echo $year;
        $year++;
      }
      
      yearIncrease();
      echo "<br>";
      yearIncrease();
      echo "<br>";
      yearIncrease();
    ?>

</body>

</html>