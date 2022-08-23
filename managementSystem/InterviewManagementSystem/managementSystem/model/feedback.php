<?php
class feedback extends DataBase{
public function insertData($id,$json){

    $sql = "UPDATE feedback_form SET JSON = '".$json."' WHERE schedule_id = $id";
   $insert = mysqli_query($this->conn,$sql);
   return $insert;
}
}
?>