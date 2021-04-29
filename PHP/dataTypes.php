<!DOCTYPE html>
<html>

<body>
    <h1>PHP Data Types</h1>

    <?php
    echo "String<br>";
    echo "--------------<br>";
    $txt = "Pencil";
    echo "This is a " . $txt;
    echo "<br>--------------<br>";
    echo "Integer<br>";
    echo "--------------<br>";
    $x = 10;
    $y = 20;
    echo "Result = " . $x * $y;
    echo "<br>--------------<br>";
    echo "Float<br>";
    echo "--------------<br>";
    $weight = 87.8;
    var_dump($weight);
    echo "<br>--------------<br>";
    echo "Boolean<br>";
    echo "--------------<br>";
    $isStudent = true;
    echo "<br>--------------<br>";
    echo "Array<br>";
    echo "--------------<br>";
    $students = array("Mustafa", "Ali", "Veli");
    var_dump($students);
    echo "<br>--------------<br>";
    echo "Object<br>";
    echo "--------------<br>";
    class Animal
    {
        public $name;
        public $color;
        public $amountOfLeg;
        public function __construct($name, $color, $amountOfLeg)
        {
            $this->name = $name;
            $this->color = $color;
            $this->amountOfLeg = $amountOfLeg;
        }
        public function getAnimalInfo()
        {
            return "Animal name is " . $this->name . ". Its colors is " . $this->color . " also it has " . $this->amountOfLeg . " legs.";
        }
    }
    $hourse = new Animal("Princess", "black", 4);
    echo $hourse->getAnimalInfo();
    echo "<br>--------------<br>";
    echo "NULL<br>";
    echo "--------------<br>";
    $name = "Mustafa";
    $name = null;
    var_dump($name);
    echo "<br>--------------<br>";
    ?>

</body>

</html>