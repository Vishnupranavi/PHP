<?php
// array_change_key_case
$_sarray=array("name"=>"values","id"=>2);
print_r (array_change_key_case($_sarray,CASE_UPPER));
// array_chunk
$_arr1=array('a','b','c','d','e');
print_r(array_chunk($_arr1,3));
// array_column
$_arr2=array(
    array(
    'roll'=>'123',
    'name'=>'gopi',
    'dept'=>'ECE',
),
array(
    'roll'=>'456',
    'name'=>'priya',
    'dept'=>'CCE',
),
array(
    'roll'=>'486',
    'name'=>'arun',
    'dept'=>'EEE',
)
);
$objects=array_column($_arr2,'name');
print_r ($objects);
// array_combine
$arr3=array('pink','blue','yellow');
$arr4=array('orange','apple','banana');
$arr5=array_combine($arr3,$arr4);
print_r($arr5);
print_r(array_count_values($arr5));
$array6 = array(0, 1, 2);
$array7 = array("00", "01", "2");
$array8 = array_diff_assoc($array6, $array7);
print_r($array8);
// array_diff_kry
$array9 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array10 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
$array11=array_diff_key($array9,$array10);
print_r($array11);
// array_diff() prints the difference between the arrays
$array12 = array("a" => "green", "red", "blue", "red");
$array13 = array("b" => "green", "yellow", "red");
$array14 = array_diff($array12, $array13);

print_r($array14);
$array15=array('pranavi','riya','deepa');
$array16=array_fill_keys($array15,"vishnu");
print_r($array16);
function odd($var)
{
    
    return $var & 1;
}

function even($var)
{
    
    return !($var & 1);
}

$array17 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array18 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array17, "odd"));
echo "Even:\n";
print_r(array_filter($array18, "even"));

// array_intersect intersect the arrays and print the common arrays
$array19 = array("a" => "green", "red", "blue");
$array20 = array("b" => "green", "yellow", "red");
$array21 = array_intersect($array19, $array20);
print_r($array21);

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

// compact()   array contaion variables and their values
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", $location_vars);
print_r($result);

// count is used to count the elements prsent in an array
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
$b[11]=12;
var_dump(count($b));

?>