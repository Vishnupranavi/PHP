
<?php
class Vari
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$object = new Vari;
$object(5);
var_dump(is_callable($object));
?>
