
<?php 
class login{
public function login()
{
$loginData = new Database();
if(isset($_POST['submit']))

{
$useremail = mysqli_real_escape_string($loginData->conn,$_POST['userEmail']);
$password = mysqli_real_escape_string($loginData->conn,$_POST['userPassword']);
$sql = "SELECT *FROM User WHERE Email = '".$useremail."' AND password = '".$password."'";
$result = mysqli_query($loginData->conn,$sql);
// var_dump($result);

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
   header("location:http://localhost/managementSystem/public/Admin");
}
 else if($_SESSION['auth_role'] == '2'){
  header("location:http://localhost/managementSystem/public/Employee");
}
else{
  header("location:http://localhost/managementSystem/public/HR");
}
}
}
}
}
