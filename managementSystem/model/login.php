<?php 
class login{
public function login()
{
$loginData = new DBConnection();
if(isset($_POST['submit']))

{
$useremail = mysqli_real_escape_string($loginData->conn,$_POST['userEmail']);
$password = mysqli_real_escape_string($loginData->conn,$_POST['userPassword']);
$sql = "SELECT *FROM User WHERE Email = '".$useremail."' AND password = '".$password."'";
$result = mysqli_query($loginData->conn,$sql);
if(mysqli_num_rows($result)>0)
{
foreach($result as $data)
{
 echo $userid = $data['id'];
 echo $useremail = $data['Email'];
 echo $type = $data['RoleId'];
 echo $username = $data['userName'];
}

  $_SESSION['auth'] = true;
  $_SESSION['auth_id'] = $userid;
  $_SESSION['auth_role'] = $type;
  var_dump($_SESSION['auth_user'] = [
    'id'=>$userid,
    'Email'=>$useremail,
	 'userName'=>$username,
    'RoleId'=>$type
]);
 if($_SESSION['auth_role'] == '1')
{
   header("location:http://localhost/managementSystem/public/Admin/index");
}
 else if($_SESSION['auth_role'] == '2'){
  header("location:http://localhost/managementSystem/public/Employee/index");
}
else if($_SESSION['auth_role']=='3'){
    header("location:http://localhost/managementSystem/public/HR/index");
}
else{
   echo '<script>alert("User id does not exists")</script>';
}
}
}
}
}
