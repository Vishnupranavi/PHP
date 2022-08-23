<?php
Class Admin
{
  public function index(){
    $this->model("AdminModel");
    $this->view("Admin");
  }
  public function insert()
  {
    $this->model("AdminModel");
    $this->view("Form");

  }
  public function delete()
  {
    $this->model("AdminModel");
    $this->view("Admin");
  }
  public function update()
  {
    $this->model("AdminModel");
    $this->view("UpdateFormAdmin");
  }
  public function display()
  {
    $this->model("AdminModel");
    $this->view("Admin");
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
public function insertAdmin(){
    $insertQuery = new AdminModel();
    $insertQuery->insertAdmin();
}

public function updateAdmin(){  
      $updateQuery = new AdminModel();
      $updateQuery->updateAdmin();
 }
public function deleteAdmin(){ 
      $delete = new AdminModel();
      $delete->deleteAdmin();
    }
}
?>
