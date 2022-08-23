<?php
class EmployeeModel extends DBConnection
{
   public function display($id){
   $query = "SELECT interview_slots.JobID,interview_slots.id,interview_slots.candidate_name,interview_slots.experience,interview_slots.is_date_time,interview_slots.email,interview_slots.interview_status
   FROM interview_slots WHERE $id = interview_slots.reviewer_id ORDER BY interview_slots.is_date_time";
   $display = mysqli_query($this->conn,$query);
   return $display;
   }
} 
?>
 