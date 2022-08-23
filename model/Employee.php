<?php
class Emp extends DataBase
{
   public function display($id){
  $query = "SELECT interview_slots.JobID,interview_slots.id,interview_slots.candidate_name,interview_slots.experience,interview_slots.is_date_time,interview_slots.email,interview_slots.interview_status
   FROM interview_slots WHERE $id = interview_slots.reviewer_id";
   // $query = "SELECT * FROM interview_slots";
    $display = mysqli_query($this->conn,$query);
    return $display;
   }
   


} 

// echo $query = "SELECT interview_slots.JobID,interview_slots.id,interview_slots.candidate_name,interview_slots.experience,interview_slots.is_date_time,interview_slots.email
//     WHERE $id = interview_slots.reviewer_id"; 
?>
 