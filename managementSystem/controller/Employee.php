<?php
class Employee{
  public function index(){
    $this->model("Employee");
    $this->view("Employee");
    }
  public function insert(){
     $this->model("Feedback");
     $this->view("FeedbackForm");
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
    public function insertfeed(){
        $insertfeed = new Feedback;
        $insertfeed->insertfeed();
    }
}
?>