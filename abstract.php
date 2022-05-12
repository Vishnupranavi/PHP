<?php
abstract class Samp
{
abstract function f1();
function f2()
{
echo "hello";
}
}
class Child extends Samp
{
function f1()
{
echo "hello,php";
}
}
$ob=new Child();
$ob->f1();
$ob->f2();

?>