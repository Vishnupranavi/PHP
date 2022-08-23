<?php
class Home{     
   public function index()
    {   
        $this->model("login");
        $this->view("Home");
        //$this->model("login");
    }
    public function view($view){

    if(file_exists("../view/".$view.".php"))
    {
       include "../view/".$view.".php";
    }
    else{
        echo "false";
    }
   }
   public function model($model)
   {
     if(file_exists("../model/".$model.".php"))
      {
          include "../model/".$model.".php";  
          return $model = new $model();
      }
      return false;
  }
}
?>