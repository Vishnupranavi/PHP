<?php
class Parentclass
{
    public function get($string)
    {
        echo 'hai: ' . $string . PHP_EOL;
    }
    
    public function put()
    {
        echo 'Welcome.' . PHP_EOL;
    }
}

class Child extends Parentclass
{
    public function get($string)
    {
        echo 'Hello: ' . $string . PHP_EOL;
    }
}

$cre = new Parentclass();
$obj = new Child();
$cre->get('pranavi'); 
$cre->put();       
$obj->get('Vishnu'); 
$obj->put();    
?>