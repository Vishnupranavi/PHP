<?php
class Sample{
    public $name;
    function __construct($name){
        $this->name=$name;
        echo "Insert";
        echo "\n";
    }
    function display(){
        return $this->name;
    }
    function __destruct()
    {
        echo "Delete";
    }
}
$objec=new Sample("Vishnu");
echo $objec->display();
?>