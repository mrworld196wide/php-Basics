<?php
// if conditional statement in PHP
echo "----------------------------------------------------------------- <br>";
echo "<h2>if conditional statement in PHP</h2>";
$x = 15;
if ($x < 10) {
    echo "$x is less than 10! </br>";
} elseif ($x > 20) {
    echo "$x is greater than 20! </br>";
} else {
    echo "$x is between 10 and 20! </br>";
}
$c= true;
if ($c) {
    echo "variable c is true <br>";
}
else{
    echo "variable c is false <br>";
}

// switch statement in PHP
echo "----------------------------------------------------------------- <br>";
echo "<h2>Switch Statement</h2>";
$lunch = "burger";
switch ($lunch) {
    case "cereal":
        echo "Cereal? You had breakfast for lunch! </br>";
        break;
    case "salad":
        echo "Salad makes for a healthy lunch! </br>";
        break;
    case "burger":
        echo "Burgers are yummy! </br>";
        break;
    default:
        echo "Looks like you skipped lunch. That is not good! </br>";
}
?>
