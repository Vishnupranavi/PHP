<?php
class Form{
  public function index(){
    $this->model("DBAbstract");
    $this->view("Form");
    }

  protected function view($view){
   if(file_exists("../view/".$view.".php"))
   {
       include "../view/".$view.".php";
   }
   else{
         echo "false";
   }
   }
   protected function model($model)
    {
       if(file_exists("../model/".$model.".php"))
        {
            include "../model/".$model.".php";
            
            return $model = new $model();
        }
        return false;
    }
   public function insert(){
         $insertQuery = new DBAbstract();
         $userName = $_POST['roleName'];
         $userEmail = $_POST['roleEmail'];
         $userPassword = $_POST['rolePassword'];
         $userRole= $_POST['roleId'];

         $insert= $insertQuery->insertData($userName,$userEmail,$userPassword,$userRole);

        if($insert){
           echo "inserted";
              header("location:http://localhost/managementSystem/public/Admin");
        }
        else{
          echo "not";
        }
}
   /* public function update(){  
     $updateQuery = new DBAbstract();
     $id=intval($_GET['id']);
     $userName=$_POST['roleName'];
     $userPassword=$_POST['rolePassword'];
     $userEmail=$_POST['roleEmail'];
     $userRole=$_POST['roleId'];
     $sql=$updateQuery->updateData($id,$userName,$userEmail,$userPassword,$userRole);
    if($sql){
        echo "Updated";
         // header("location:http://localhost/managementSystem/public/Admin");
     }
     else{
        echo "not updated";
    }
}*/
}

 
