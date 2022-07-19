<?php
//array_change_key_case  CASE_LOWER,CASE_UPPER
$input = array("FirSt"=>1, "SecOnd"=>2);
print_r(array_change_key_case($input, CASE_LOWER));

//array_chunks
$input=array(1,2,3,4);
print_r (array_chunk($input,2));

//array_column
$input=array(array(
	"name"=>"Vishnu",
    "roll"=>145,
    ),
    array(
	"name"=>"karthik",
    "roll"=>123,
    ),
      array(
	"name"=>"roopa",
    "roll"=>103,
    )
    );
    $names=array_column($input,"name");
    print_r($names);

//array_combine
$array1=array("geethu","krisi","elil");
$array2=array("kumar","deepi","lily");
print_r (array_combine($array1,$array2));

//array_count_values, count for the total occurance of the words
$input=array("values",1,1,"hai");
print_r(array_count_values($input));

//array_diff_assoc ,prints the difference rather than same
$array1=array("apple","orange","kiwi");
$array2=array("dates","orange","fig");
print_r(array_diff_assoc($array1,$array2));//prints apple,kiwi


//array_diff_key ,print difference of key
$array1=array("apple","orange","kiwi");
$array2=array("dates","orange","fig");
print_r(array_diff_key($array1,$array2));

//array_diff_uassoc compares keys and values
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);

//array_diff prints the difference
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
print_r(array_diff($array1,$array2));

//array_fill_keys        act as a key for values
$array1 = array("a" => "green", "red", "blue", "red");
print_r(array_fill_keys($array1,'right'));

//array_fill   start index,totalcount,value
$array1 = array_fill(10, 5, "blue");
print_r($array1);

//array_filter
function odd($var)
{
    return $var & 1;
}

function even($var)
{
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

print_r(array_filter($array1, "odd"));
print_r(array_filter($array2, "even"));

//array_flips   prints the associative values to a keys
$input = array("a" => 1, "b" => 1, "c" => 2);
print_r(array_flip($input));


?>