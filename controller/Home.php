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

 /*   public function data(){
      $logindata = new Database();
      $userEmail = $_POST["userEmail"];
      $password = $_POST["userPassword"];

      $sql = "SELECT * FROM User WHERE  Email = '".$userEmail."' AND password = '".$password."'";

      $result = mysqli_query($logindata->conn,$sql);
      $row = mysqli_fetch_array($result);
      if($row["RoleId"] == 1){
        header("location:http://localhost/managementSystem/public/Admin");
      }
      else if($row["RoleId"] == 3){
         header("location:http://localhost/managementSystem/public/HR");
     }
     else if($row["RoleId"] == 2){
         header("location:http://localhost/managementSystem/public/Employee");
     }
     else{
        echo "hi";
     }
  }*/
}
?>