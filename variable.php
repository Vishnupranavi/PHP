
<?php
class Simple
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name();
    }
    
    function Bar()
    {
        echo "Welcome to php";
    }
}

$foo = new Simple();
$funcname = "Variable";
$foo->$funcname();  

?>
