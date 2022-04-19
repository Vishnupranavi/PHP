<?php
class Ob{
    protected $id;
    protected $roll;
    function __construct(int $id,int $roll)
    {
        $this->id=$id;
        $this->roll=$roll;
        
    }
    function get(){
        return $this->id;
    }
    
}
$vari=new Ob(1,2);
echo $vari->get();
?>