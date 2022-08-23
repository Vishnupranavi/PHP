<?php
    class HRModel extends DBConnection
   
     { 
     public function insertJob($stackName,$description,$startDate,$endDate)
     {
         $insert= "INSERT INTO JobDescription(Stack,description,StartDate,EndDate)VALUES('".$stackName."','".$description."','".$startDate."','".$endDate."')";
         $insertData = mysqli_query($this->conn,$insert);
         return $insertData;
     }
     public function displayJob()
     {
         
         $read = "SELECT * FROM JobDescription WHERE CURTIME() < endDate ORDER BY startDate";
         $result = mysqli_query($this->conn,$read);
         return $result;
     }
     public function insertIs($JobId,$CandidateName,$Email,$Experience,$Profile,$ReviewerName,$ISDateTime){
      
         $insert = "INSERT INTO interview_slots(JobID,candidate_name,email,experience,profile,reviewer_id,is_date_time)VALUES($JobId,'".$CandidateName."','".$Email."',$Experience,'".$Profile."',$ReviewerName,'".$ISDateTime."')";
         $result = mysqli_query($this->conn,$insert);
         return $result;
     }
     public function dropdown(){
        $dropdown = "SELECT  id,userName FROM User WHERE RoleId=2";
        $result = mysqli_query($this->conn,$dropdown);
        return $result;
     }
     public function display()
     {
         
         $read = "SELECT User.userName,interview_slots.JobID,interview_slots.candidate_name,interview_slots.experience,interview_slots.email,interview_slots.reviewer_id,interview_slots.id,interview_slots.interview_status, interview_slots.is_date_time FROM User,interview_slots  WHERE interview_slots.reviewer_id = User.id ORDER BY interview_slots.is_date_time";
         $result = mysqli_query($this->conn,$read);
         return $result;
     }
     public function statusIns($statusIns,$id)
     {
        $statusIns = "UPDATE interview_slots SET interview_slots = $status Where id=$id";
        $statusIns = mysqli_query($this->conn,$statusIns);
        return $statusIns;
     }

     public function displayStatus($id,$status){
        $insert = "UPDATE interview_slots SET interview_status = '$status' WHERE id = $id";
        $sql = mysqli_query($this->conn,$insert);
        return $sql;
    }
    public function insert(){
      $insertData = new HRModel();
      $stackName= $_POST['stack'];
      $description = $_POST['description'];
      $startDate= $_POST['startDate'];
      $endDate= $_POST['endDate'];
    
      $insert= $insertData->insertJob($stackName,$description,$startDate,$endDate);
    
      if($insert){
         header("location:http://localhost/managementSystem/public/HR/displayFirst");
     }
    }
    public function insertSI(){
    
      $insertData = new HRModel();
      $JobId= $_POST['JobId'];
      $CandidateName= $_POST['CandidateName'];
      $Email = $_POST['Email'];
      $Experience = $_POST['Experience'];
      $Profile = $_POST['pdf'];
      $ReviewerName = $_POST['ReviewerName'];
      $ISDateTime = $_POST['ISdateTime'];
      
      $insert= $insertData->insertIs($JobId,$CandidateName,$Email,$Experience,$Profile,$ReviewerName,$ISDateTime);
      if($insert){
         header("location:http://localhost/managementSystem/public/HR/displaySecond");
     }
    }
    public function nameValidate()
    {
       if(isset($_POST['submit']))
        {
          $name = $_POST['roleName'];
          if($name == "")
          {
              echo $error_name = "<span class = 'error'>Please enter candiadte Name</span>"; 
          }
        }
    }
    function emailValidate()
    {
        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            if($email == "")
            {
                echo $error_email=  "<span class = 'error'>Please enter candidate email</span>"; 
            }
         }
    }
    function experienceValidate()
    {
        if(isset($_POST['submit']))
        {
            $experience = $_POST['Experience'];
            if($experience == "")
            {
                echo $error_experience =  "<span class = 'error'>Please enter candidate experience</span>"; 
            }
         }
    }
    function profileValidate()
    {
        if(isset($_POST['submit']))
        {
            $profile = $_POST['pdf'];
            if($profile == "")
            {
                echo $error_profile = "<span class = 'error'>Please provide candidate Profile</span>"; 
            }
         }
    }
    function reviewerValidate()
    {
        if(isset($_POST['submit']))
        {
            $reviewer = $_POST['ReviewerName'];
            if($reviewer == "")
            {
                echo $error_reviewer = "<span class = 'error'>Please enter reviewer name</span>"; 
            }
         }
    }
    function datetimeValidate()
    {
        if(isset($_POST['submit']))
        {
            $datetime = $_POST['ISdateTime'];
            if($datetime == "")
            {
                echo $error_datetime=  "<span class = 'error'>Please enter date and time</span>"; 
            }
         }
    }
    }
    ?>
    