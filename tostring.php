
<?php
class Test
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}

$objects = new Test('Welcome to Aspire');
echo $objects;
?>
