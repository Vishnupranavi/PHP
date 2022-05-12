

<?php
interface Samp
{
function f1();
}

interface Child
{
function f2();
}

class Gchild implements Samp,Child
{
function f1()
{
echo "Hai,Vishnu";
}

function f2()
{
echo "hello";
}

}
$ob=new Gchild();
$ob->f1();
$ob->f2();
?>

