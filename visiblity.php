<?php
// class Parentname
// { 
// public $x = 100 ;  
// public $y = 50 ; 
// function add() 
// { 
// echo $a = $this->x + $this->y ;
// echo " ";
// } 
// }    
// class child extends Parentname
// { 
// function sub() 
// { 
// echo $s = $this->x - $this->y ; 
// } 
// }   
// $obj = new child; 
// $obj->add(); 
// $obj->sub();

// class Parentname
// { 
// protected $x = 100 ;  
// protected $y = 50 ; 
// function add() 
// { 
// echo $a = $this->x + $this->y ;
// echo " ";
// } 
// }    
// class child extends Parentname
// { 
// function sub() 
// { 
// echo $s = $this->x - $this->y ; 
// } 
// }   
// $obj = new child; 
// $obj->add(); 
// $obj->sub();
class Parentname
{ 
private $x = 100 ;  
private $y = 50 ; 
function add() 
{ 
echo $a = $this->x + $this->y ;
echo " ";
} 
}    
class child extends Parentname
{ 
function sub() 
{ 
echo $s = $this->x - $this->y ; 
} 
}   
$obj = new child; 
$obj->add(); 
$obj->sub();
?>