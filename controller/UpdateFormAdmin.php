<?php
class UpdateFormAdmin{
  public function index(){
    $this->model("DBAbstract");
    $this->view("UpdateFormAdmin");
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
    public function update(){  
        $updateQuery = new DBAbstract();
        $id=$_GET['id'];
        var_dump($id);
        $userName=$_POST['roleName'];
        var_dump($userName);
        $userPassword=$_POST['rolePassword'];
        $userEmail=$_POST['roleEmail'];
        $userRole=$_POST['roleId'];
        $sql=$updateQuery->updateData($id,$userName,$userEmail,$userPassword,$userRole,"id");
       if($sql){
           echo "Updated";
            header("location:http://localhost/managementSystem/public/Admin");
        }
        else{
           echo "not updated";
       }
   }
}