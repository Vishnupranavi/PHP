<?php
     Class DBAbstract extends DataBase
     { 
    
     public function insertData($userName,$userEmail,$userPassword,$userRole)
     {
         $insert= "INSERT INTO User(userName,Email,password,RoleId)VALUES('".$userName."','".$userEmail."','".$userPassword."','".$userRole."')";
          $insertData = mysqli_query($this->conn,$insert);
        return $insertData;
     }
     public function displayData()
     {
         
         $read = "SELECT *FROM User"; 
         $result = mysqli_query($this->conn,$read);
         var_dump($result);
         return $result;
     }
     public function updateData($id,$userName,$userEmail,$userPassword,$userRole)
     {
         echo $update = "UPDATE User SET userName = '".$userName."', Email = '".$userEmail."',password = '".$userPassword."',RoleId= '".$userRole."' WHERE id = $id";
         $updateData = mysqli_query($this->conn,$update);   
         return $updateData;
     }
     public function deleteData($id)
     {
         echo  $delete = "DELETE FROM User WHERE id = $id";
         $deleteData = mysqli_query($this->conn,$delete);
         var_dump($deleteData);
         return $deleteData;
     }
    
    }
?>