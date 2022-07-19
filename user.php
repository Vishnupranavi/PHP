<?php
//function with args
    function asp($a)
    {
        echo "Hai";
    }
    asp(2);

    function asp1()
    {
        function asp2(){
            echo "rubi";
        }
        echo "Biju";
    }
    asp2();//not accesible
    asp1();//Accessible 
//default args
    function makeyogurt($container = "bowl", $flavour = "raspberry", $style = "Greek")
    {
      return "Making a $container of $flavour $style yogurt.\n";
    }
//return ex
function square($num)
{
    return $num * $num;
}
echo square(7);  
//variable functions
class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); 
    }
    
    function Bar()
    {
        echo "This is Bar";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  
//Anonymous function 
$obj=function($like)
{
    echo "$like";
};
$obj('welcome');
//arrow functions
$y = 1;
 
$fn1 = fn($x) => $x + $y;
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
var_export($fn1(3));
?>