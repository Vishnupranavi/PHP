<?php

#[Attribute]
class MyAttribute
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

#[MyAttribute(value: 1234)]
class Thing
{
}
#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class Thing
{
}
?>
