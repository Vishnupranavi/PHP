<?php
class HR{
  public function index(){
    $this->view("HR");
  }
  public function displayFirst(){
    $this->model("HR");
    $this->view("JobDetailsForm");
  }
  public function insertFirst()
  {
    $this->model("HR");
    $this->view("JdForm");
   }
   public function displaySecond()
   {
    $this->model("HR");
    $this->view("InterviewScheduleDB");
   }
   public function insertSecond()
   {
    $this->model("HR");
    $this->view("InterviewForm");
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
 if(file_exists("../model/". $model .".php"))
 {
     include "../model/". $model .".php";
     return $model = new $model();
 }
 return false;
}
public function insert(){
  $insertData = new HRModel();
  $insertData->insert();
}
public function insertSI(){
    
  $insertData = new HRModel();
  $insertData->insertSI();
}
}