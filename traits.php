<?php
trait Parents
{ 
    public function output1()
    {
    echo "Welcome\t";
    }
 }
 trait Child
{ 
    public function output2()
    {
    echo "to Aspire";
    }
 }
 class Grandchild
{ 
    use Parents,Child;
    public function output3()
    {
    echo "Family";
    }
 }
 $obj=new Grandchild();
 $obj->output1();
 $obj->output2();
 $obj->output3();
 





?>
