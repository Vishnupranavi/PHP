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

public function displayJd(){
  $read = new HRModel();
  $sql=$read->displayJob();
 //var_dump($row=mysqli_fetch_array($sql));
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo $row['JobID'];?></td>
    <td><?php echo $row['Stack'];?></td>
    <td><?php echo $row['StartDate'];?></td>
    <td><?php echo $row['EndDate'];?></td>
  </td>
  </tr>
 <?php
  }
}
public function insert(){
  $insertData = new HRModel();
  $stackName= $_POST['stack'];
  var_dump($stackName);
  $description = $_POST['description'];
  var_dump($description);
  $startDate= $_POST['startDate'];
  var_dump($startDate);
  $endDate= $_POST['endDate'];
  var_dump($endDate);

  $insert= $insertData->insertJob($stackName,$description,$startDate,$endDate);
  var_dump($insert);

  if($insert){
    echo "inserted";
     // header("location:http://localhost/managementSystem/public/HR/displayFirst");
 }
 else{
   echo "not inserted";
 }
}
public function insertSI(){
    
  $insertData = new HRModel();
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
     header("location:http://localhost/managementSystem/public/HR/displaySecond");
 }
 else{
   echo "not";
 }
}
}
