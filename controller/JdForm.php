<?php
class JdForm{
  public function index()
  {
    $this->model("HR");
    echo "hi";
    $this->view("JdForm");
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
        $insertData = new HR();
        $stackName= $_POST['stack'];
        var_dump($stackName);
        $startDate= $_POST['startDate'];
        var_dump($startDate);
        $endDate= $_POST['endDate'];
        var_dump($endDate);

        $insert= $insertData->insertJob($stackName,$startDate,$endDate);
        var_dump($insert);
       if($insert){
          echo "inserted";
          "<script>window.location.href='http://localhost/managementSystem/public/JobDetailsForm'</script>";
               // header("location:http://localhost/managementSystem/public/JobDetailsForm");
           //exit();
       }
       else{
         echo "not";
       }
}
}
