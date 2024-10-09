<?php
// Concatenation & Refactoring
echo "<h1>Concatenation % Refactoring</h1>";
echo "Aishwar" . " " . "Pathak" . " " . "Chonko" . "(Concatenation)<br>";
$blue= "Meenal";
echo "Hello $blue (Refactoring)<br>";

echo "----------------------------------------------------------------- <br>";
echo "<h1>Varibale Types</h1>";
// Variable Types

// Integer
$age = 25;
echo "Age: $age (Integer) <br>";

// Floating-point
$price = 19.99;
echo "Price: $price (Floating-point) <br>";

// String
$name = "Alice";
echo "Name: $name (String)<br>";

// Boolean
$is_valid = true;
echo "Is Valid: " . ($is_valid ? 'True' : 'False') . "(Boolean)"."<br>";

// Array
$colors = array("red", "green", "blue");
echo "Colors: " . implode(", ", $colors) . "(arrray)" . "<br>";

// Associative Array
$person = array("name" => "John", "age" => 30);
echo "Person Name: " . $person['name'] . ", Age: " . $person['age'] . "(Associative Array)" . "<br>";

// Object
class Car {
    public $brand;
    public $model;
    
    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}

//To Store Multiple Cars:
// $cars = [];
// $cars[] = new Car("Toyota", "Corolla");
// $cars[] = new Car("Tata", "Safari");

// // Loop through the array to echo car details
// foreach ($cars as $car) {
//     echo "Car: " . $car->brand . " " . $car->model . "<br>";
// }
$myCar = new Car("Tata", "Safari");
echo "Car: " . $myCar->brand . " " . $myCar->model . "(CLass Object)" . "<br>";

// NULL
$value = null;
echo "Value: " . (is_null($value) ? 'NULL' : $value) . "(NULL)" . "<br>";
?>
