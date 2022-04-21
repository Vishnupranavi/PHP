<?php
class Parentc{
    function get(){
        print "hai";
    }
}
class Child extends Parentc{
    function get(){
        print "welcome";
    }
}
$object1=new Parentc();
$object2=new Child();
$object1->get();
$object2->get();


?>