<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "Normally printing message <br>";
        echo "Hello, World! <br><br>";

        $txt= "Hello, World!";
        $a= 10;
        $b= 20;
        $c= $a + $b;
        echo "The sum of $a and $b is". $c . "<br><br>";

    
        class car{
            public $model;
            public $year;

            function __construct(){
                echo "The car class has been instantiated.<br>";
                $this->model = "Corolla Cross";
                $this->year = 2022;
            }
        }

        $myCar = new car();
        echo "The model of the car is " . $myCar->model . " and the year is " . $myCar->year . ".<br>";

        $f = 1;
        echo "<br><br> Using While loop (untill 5) <br>";
        while($f <= 5){
            echo "The value of f is: $f <br>";
            $f++;
        }

        echo "<br><br> Using For loop <br>";
        for ($f = 0; $f <= 5; $f++) {
            echo "The value of f is: $f <br>";
        }

        $colors = array("Red", "Green", "Blue");
        echo "<br><br> Storing the colour red, green, blue in an array<br>";
        echo "Using foreach loop <br>";
        foreach($colors as $value){
            echo "$value <br>";
        }

        echo "Using if else condition <br>";
        if ($myCar->year > 2020) {
            echo "The car is modern.";
        } else {
            echo "The car is old. Because is less than 2020. <br>";
        }

        echo "Using switch case <br>";
        switch ($myCar->year) {
            case 2020:
                echo "The car is from the year 2020.";
                break;
            case 2021:
                echo "The car is from the year 2021.";
                break;
            case 2022:
                echo "The car is from the year 2022.";
                break;
            default:
                echo "The car is from an earlier year.";
        }

        ?>

    </body>
</html>