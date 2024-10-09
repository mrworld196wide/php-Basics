<?php
// arrays in PHP
echo "----------------------------------------------------------------- <br>";
echo "<h2>Array in PHP</h2>";

// Creating an indexed array
$fruits = array("Apple", "Banana", "Cherry", "Date");

// Displaying the indexed array
echo "<h3>Indexed Array:</h3>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Creating an associative array
echo "----------------------------------------------------------------- <br>";
echo "<h2>Associative Array in PHP</h2>";
$namesAge = array("Fabio"=>"20", "Klevi"=>"16", "John"=>"43");
echo "Fabio's age is " . $namesAge['Fabio'] . " years old.";
echo "<br>";

// Looping through associtive array
$colors = array(
    "red" => "Apple",
    "yellow" => "Banana",
    "pink" => "Cherry",
    "brown" => "Date"
);
// Displaying the associative array
echo "<h3>Associative Array:</h3>";
foreach ($colors as $color => $fruit) {
    echo "The color $color corresponds to the fruit $fruit.<br>";
}

// Adding a new element to the indexed array
$fruits[] = "Elderberry";
echo "<h3>Updated Indexed Array:</h3>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Count the number of elements in the indexed array
$fruitCount = count($fruits);
echo "<h3>Number of Fruits:</h3>";
echo "There are $fruitCount fruits in the array.(done using count function count(arrayName))<br>";
?>
