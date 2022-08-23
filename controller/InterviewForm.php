<?php
class InterviewForm{
  public function index()
  {
    $this->model("HR");
    $this->view("InterviewForm");
   }

    public function view($view){
   // var_dump(file_exists("../view/".$view.".php"));
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
    $JobId= $_POST['JobId'];
    var_dump($JobId);
    $CandidateName= $_POST['CandidateName'];
    echo($CandidateName);
    $Email = $_POST['Email'];
    var_dump($Email);
    $Experience = $_POST['Experience'];
    var_dump($Experience);
    $Profile = $_POST['pdf'];
    var_dump($Profile);
    $ReviewerName = $_POST['ReviewerName'];
    var_dump($ReviewerName);
    $ISDateTime = $_POST['ISdateTime'];
    echo($ISDateTime);
    
    
    $insert= $insertData->insertIs($JobId,$CandidateName,$Email,$Experience,$Profile,$ReviewerName,$ISDateTime);
    var_dump($insert);
 
   if($insert){
      echo "inserted";
     // echo "<script>window.location.href='http://localhost/managementSystem/public/JobDetailsForm'</script>";
      // header("location:http://localhost/managementSystem/public/JobDetailsForm");
   }
   else{
     echo "not";
   }
}
}
