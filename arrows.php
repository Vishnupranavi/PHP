<?php
$z = 10;
$fn = fn($x) => fn($y) => $x * $y + $z;
var_export($fn(7)(5));
?>