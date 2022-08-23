<?php
    class HR extends DataBase
     { 
     public function insertJob($stackName,$startDate,$endDate)
     {
         echo $insert= "INSERT INTO JobDescription(Stack,StartDate,EndDate)VALUES('".$stackName."','".$startDate."','".$endDate."')";
         $insertData = mysqli_query($this->conn,$insert);
         var_dump($insertData);
        return $insert;
     }
     public function displayJob()
     {
         
         $read = "SELECT * FROM JobDescription WHERE CURTIME() < endDate ORDER BY startDate";
         $result = mysqli_query($this->conn,$read);
         var_dump($result);
         return $result;
     }
     public function insertIs($JobId,$CandidateName,$Email,$Experience,$Profile,$ReviewerName,$ISDateTime){
        echo $insert = "INSERT INTO interview_slots(JobID,candidate_name,email,experience,profile,reviewer_id,is_date_time)VALUES($JobId,'".$CandidateName."','".$Email."',$Experience,'".$Profile."',$ReviewerName,'".$ISDateTime."')";
        $result = mysqli_query($this->conn,$insert);
        var_dump($result);
        return $result;
     }
     public function dropdown(){
        echo $dropdown = "SELECT  id,userName FROM User WHERE RoleId=2";
        $result = mysqli_query($this->conn,$dropdown);
        var_dump($result);
        return $result;
     }
     public function display()
     {
         
         $read = "SELECT * FROM interview_slots ORDER BY is_date_time" ;
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
    
    }
    