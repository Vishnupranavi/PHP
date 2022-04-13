<?php
// Arithmetic
$x = 29;
$y = 4;
echo ($x + $y), "<br>";
echo($x - $y), "<br>";
echo($x * $y), "<br>";
echo($x / $y), "<br>";
echo($x % $y), "<br>";
// array
$a = array("a" => "red", "b" => "green");
$b = array("c" => "blue", "d" => "yellow");
print_r($a + $b); 
var_dump($a != $b);
var_dump($a <> $b);
var_dump($a !== $b);
// assignment
// Simple assign operator
$z = 75;
echo $z, "<br>";

// Add then assign operator
$z = 100;
$z += 200;
echo $z, "<br>";

// Subtract then assign operator
$z = 70;
$z -= 10;
echo $z, "<br>";

// Multiply then assign operator
$z = 30;
$z *= 20;
echo $z, "<br>";

// Divide then assign(quotient) operator
$z = 100;
$z /= 5;
echo $z, "<br>";

// Divide then assign(remainder) operator
$z = 50;
$z %= 5;
echo $z;

?>