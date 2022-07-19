<?php
//constructor
class Name{
     public int $x;
     public int $y;
     public function __construct(int $x,int $y)
     {
        $this->x=$x;
        $this->y=$y;

     }
}
    $object=new Name(1,2);
    //destructor
    class Nname{
        public int $x;
        public int $y;
        public function __construct(int $x,int $y)
        {
           $this->x=$x;
           $this->y=$y;
   
        }
        public function __destruct()
        {
            echo "Stopped";
        }
   }
       $object=new Nname(1,2);
  //Inheritance
class Diff1{
    public function val($string){
        echo $string;
    }
    public function val1(){
        echo "I love Aspire";
    }
}
class Diff2 extends Diff1{
    public function val($string){
        echo $string;
    }
}
$obj1=new Diff1();
$obj2=new Diff2();
$obj1->val("hai");
$obj2->val("hello");
$obj2->val1();


//static method




?>