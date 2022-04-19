<?php
class Newinteger{
       public $car;
       function set($car){
        $this->car=$car;
     }
     function get(){
         return $this->car;
     }
}
$honda=new Newinteger();
$suzuki=new Newinteger();
$honda->set('honda');
$suzuki->set('suzuki');
echo $honda->get();
print "\n";
echo $suzuki->get();

?>