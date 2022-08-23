<?php
class HR{
  public function index(){
    echo "hei";
    $this->view("HR");
  }
   public function view($view){
   var_dump(file_exists("../view/".$view.".php"));
   if(file_exists("../view/".$view.".php"))
   {
       include "../view/".$view.".php";
   }
   else{
         echo "false";
   }
   }
}