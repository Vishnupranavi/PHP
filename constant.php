<?php
define("constant","Hai");
echo constant;
echo "<br>";
$a_bool=true;
echo "$a_bool <br>";
echo gettype($a_bool);
echo "<br>";
var_dump((bool) "0");
echo "<br>";
var_dump((bool) "");
echo "<br>";
$b_int=20;
$c_float=20.5;
echo ($b_int);
echo "<br>";
echo ($c_float);
echo "<br>";
echo gettype($b_int);
echo "<br>";
echo gettype($c_float);
echo "<br>";
echo 'Hai sir,"\'May I come in"';
echo "<br>";
echo <<<END
    a
    b
    c
    \n
 END;
 echo "<br>";
 $values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);
echo "<br>";
$cars=array("harini","aarthy","oviya");
var_dump($cars);
echo "<br>";
echo ($cars);
echo "<br>";
$prices = [
   'laptop' => 1000,
   'mouse' => 50,
   'keyboard' => 120
   ];
?>

