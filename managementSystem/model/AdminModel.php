<?php
     Class AdminModel extends DBConnection
     { 
     public function insertData($userName,$userEmail,$userPassword,$userRole)
     {
      $sql="select * from User where (userName='$userName' or Email='$userEmail');";
      $res=mysqli_query($this->conn,$sql);
      if (mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_assoc($res);
      if($userEmail==isset($row['Email']))
      {
        echo '<script>alert("User Emailid already exists")</script>';
      }
    }
     else{
         $insert= "INSERT INTO User(userName,Email,password,RoleId)VALUES('".$userName."','".$userEmail."','".$userPassword."','".$userRole."');";
         $insertData = mysqli_query($this->conn,$insert);
         return $insertData;
     }
     }
    
     public function displayData($id = NULL)
     {
        if(!empty($id))
        {
            $read = "SELECT *FROM User WHERE id = '$id'"; 
            $result = mysqli_query($this->conn,$read);
        }         
        else{
            $read = "SELECT *FROM User WHERE RoleId != 1"; 
             $result = mysqli_query($this->conn,$read);
        }
         return $result;
     }
     public function updateData($id,$userName,$userEmail,$userPassword,$userRole)
     {
         $update = "UPDATE User SET userName = '".$userName."', Email = '".$userEmail."',password = '".$userPassword."',RoleId= '".$userRole."' WHERE id = $id";
         $updateData = mysqli_query($this->conn,$update);   
         return $updateData;
     }
     
     public function deleteData($id)
     {
         $delete = "DELETE FROM User WHERE id = $id";
         $deleteData = mysqli_query($this->conn,$delete);
         return $deleteData;
     }
    public function is_Active($isactiveId)
    {
        $updateIsactive = "UPDATE User SET is_active = 0 , RoleId = 4 WHERE id = '$isactiveId'";
        $update = mysqli_query($this->conn,$updateIsactive);
        return $update;
    }
    public function insertAdmin(){
        $insertQuery = new AdminModel;
        $userName = $_POST['roleName'];
        $userEmail = $_POST['roleEmail'];
        $userPassword = $_POST['rolePassword'];
       $userRole= $_POST['roleId'];
       $insert= $insertQuery->insertData($userName,$userEmail,$userPassword,$userRole);
       if($insert){
            header("location:http://localhost/managementSystem/public/Admin/index");
            $_SESSION['InsertMessage'] = "Inserted Successfully";
      }
    }
      public function updateAdmin(){  
        $updateQuery = new AdminModel();
        $id=$_GET['id'];
        $userName=$_POST['roleName'];
        $userPassword=$_POST['rolePassword'];
        $userEmail=$_POST['roleEmail'];
        $userRole=$_POST['roleId'];
        $sql=$updateQuery->updateData($id,$userName,$userEmail,$userPassword,$userRole,"id");
       if($sql){
            header("location:http://localhost/managementSystem/public/Admin/index");
        }
   }
   public function deleteAdmin(){ 
    $delete = new AdminModel();
    $id = $_GET['del'];
    $sql = $delete->deleteData($id);
    if($sql)
    {
      header("location:http://localhost/managementSystem/public/Admin/index");
	}
  }
  public function nameValidate()
  {
     if(isset($_POST['sub_btn']))
      {
        $name = $_POST['roleName'];
        if($name == "")
        {
            echo $error_name = "<span class = 'error'>Please enter your Name</span>"; 
        }
      }
  }
  function emailValidate()
  {
      if(isset($_POST['sub_btn']))
      {
          $email = $_POST['roleEmail'];
          if($email == "")
          {
              echo $error_email=  "<span class = 'error'>Please enter your email</span>"; 
          }
       }
  }
  function passwordValidate()
  {
      if(isset($_POST['sub_btn']))
      {
          $password = $_POST['rolePassword'];
          if($password == "")
          {
             echo $error_password =  "<span class='error'>Please enter password</span>";
          }
      }
  }
  function confirmpasswordValidate()
  {
      if(isset($_POST['sub_btn']))
      {
          $confirmpassword = $_POST['confirmpassword'];
          if($confrimpassword == "")
          {
             echo $error_confirmpassword =  "<span class='error'>Please enter confrim password</span>";
          }
      }
  }
}

?>