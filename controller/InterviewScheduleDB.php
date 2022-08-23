<?php
class InterviewScheduleDB
{
  public function index()
  {
    $this->model("HR");
    $this->view("InterviewScheduleDB");

  }
   public function view($view)
   {
   var_dump(file_exists("../view/".$view.".php"));
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
      if(file_exists("../model/". $model .".php"))
       {
           include "../model/". $model .".php";
           return $model = new $model();
       }
       return false;
   }
}