<?php
function square($x){
    return $x**2;
}
$num=2;
echo "calling function with argument $num\n";
$result=square($num);
echo "function returns square of $num = $result";
?>