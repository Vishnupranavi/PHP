<?php
$x=120;
$y=10;
$op=2;
switch($op)
{
    case 1:   $z = $x + $y;
        echo "Addition is : $z";
        break;
    case 2:   $z = $x - $y;
        echo "Subtraction is : $z";
        break;
    case 3:  $z = $x * $y;
        echo "Multiplication is : $z";
        break;
    case 4:  $z = $x / $y;
        echo "Division is : $z";
        break;
    default:    echo "Invalid Operator";
}
//$a = readline('Enter a string: ');
//
//// For output
//echo $a;
?>