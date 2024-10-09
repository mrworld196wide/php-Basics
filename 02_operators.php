<?php
// Operators

// Arithmetic Operators
echo "<h2>Arithmetic Operators</h2>";
$a = 10;
$b = 5;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Exponentiation: " . ($a ** $b) . "<br>";


// Assignment Operators
echo "----------------------------------------------------------------- <br>";
echo "<h2>Assignment Operators</h2>";
$c = 10;
$c += 5; // Same as $c = $c + 5;
echo "Assigned Addition: $c <br>";
$c -= 3; // Same as $c = $c - 3;
echo "Assigned Subtraction: $c <br>";


// Comparison Operators
echo "----------------------------------------------------------------- <br>";
echo "<h2>Comparison Operators</h2>";
$x = 10;
$y = 20;
echo "Equal: " . ($x == $y ? 'True' : 'False') . "<br>";
echo "Identical: " . ($x === $y ? 'True' : 'False') . "<br>";
echo "Not Equal: " . ($x != $y ? 'True' : 'False') . "<br>";
echo "Not Identical: " . ($x !== $y ? 'True' : 'False') . "<br>";
echo "Greater than: " . ($x > $y ? 'True' : 'False') . "<br>";
echo "Less than: " . ($x < $y ? 'True' : 'False') . "<br>";
echo "Greater or Equal: " . ($x >= $y ? 'True' : 'False') . "<br>";
echo "Less or Equal: " . ($x <= $y ? 'True' : 'False') . "<br>";


// Logical Operators
echo "----------------------------------------------------------------- <br>";
echo "<h2>Logical Operators</h2>";
$a = true;
$b = false;
echo "Logical AND: " . ($a && $b ? 'True' : 'False') . "<br>";
echo "Logical OR: " . ($a || $b ? 'True' : 'False') . "<br>";
echo "Logical NOT: " . (!$a ? 'True' : 'False') . "<br>";
echo "Logical XOR: " . ($a xor $b ? 'True' : 'False') . "<br>";


// Increment/Decrement Operators
echo "----------------------------------------------------------------- <br>";
echo "<h2>Increment/Decrement Operators</h2>";
$count = 5;
echo "Increment: " . (++$count) . "<br>";
echo "Decrement: " . (--$count) . "<br>";


// String Operators
echo "----------------------------------------------------------------- <br>";
echo "<h2>String Operators</h2>";
$str1 = "Hello";
$str2 = "World";
echo "Concatenation: " . ($str1 . " " . $str2) . "<br>";
$str1 .= " PHP";
echo "Appending into String1 using (.=) ex: str1='hello' then str1 .= 'php' then echo str1 would be 'hello php'): " . $str1 . "<br>";


// Array Operators
echo "----------------------------------------------------------------- <br>";
echo "<h2>Array Operators</h2>";
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("a" => "apple", "b" => "banana", "c" => "cherry");
echo "Array Union: ";
print_r($array1 + $array2);
echo "<br>";

// Type Operators
echo "----------------------------------------------------------------- <br>";
echo "<h2>Type Operators</h2>";
$object = new Car("Honda", "Civic");
echo "Instance of Car: " . ($object instanceof Car ? 'Yes' : 'No') . "<br>";

// Error Control Operator
echo "----------------------------------------------------------------- <br>";
echo "<h2>Error Control Operators</h2>";
$result = @($a / 0); // Suppresses error if division by zero
echo "Error Control: Result is " . ($result === false ? 'Error' : $result) . "<br>";
?>