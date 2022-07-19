<?php 
echo "hai";
$a=true;
var_dump($a);
//arrays
$array=array("name"=>10,"value"=>100);//single dimension
$array1=array("new"=>10,array(array("key"=>45)));//multi dimension
//create an array
$array3=array(1,2,3,4);
//delete an item but the array
foreach($array3 as $i=>$value);
print_r($array3($i));
//unpacked array
$arr1=array(1,2,3);
$arr2=array(4,5,6);
$arr3=array(...$arr1,...$arr2,100);
//collections in array
$color=array("red","green","blue");
foreach($color as $colors)
 echo "what is your fav $colors?";
 //onebased index
 $fruits=array([1]=>"mango","apple","watermelon");
 print_r($fruits);
//  iterators
function name(): iterable {
    return [1, 2, 3];
}
// used in generators
function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}
//$GLOBALS
function osc()
{
    $nice="India";
    echo "Welcome to:".$GLOBALS["Nice"];//Think before
    echo "Aspire means:".$nice;//India
}
$nice="Think before";
osc();
//$_SERVER
    echo $_SERVER['server_name'];
//$_COOKIE
    echo "Welcome to:".$_cookie["Name"];
 ?>
