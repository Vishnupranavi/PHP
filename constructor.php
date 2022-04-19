<?php
class Parentname{
    public function __construct()
    {
        echo "Welcome1";
        echo"\n";
    }
}
class Child extends Parentname{
    public function __construct() {
        Parent::__construct();
        echo "Welcome2";
        echo"\n";
    }
}
class GrandChild extends Parentname{

}
$class=new Parentname();
$class=new Child();
$class=new GrandChild();
?>