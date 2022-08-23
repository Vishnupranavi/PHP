<?php
session_start();
  if(!isset($_SESSION['auth_user']['Email']))
    {
      header("location:/managementSystem/public/Home/index");

    }
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width-device-width,initial-scale=1.0">
     <?php include("../helper/bootstrap.php");
     echo "<link rel='stylesheet' type='text/css' href='http://localhost/managementSystem/helper/style.css'/>";
     echo $_SESSION['auth_user']['Email']; ?>
     <div class="topnav">  
     <h3>WELCOME ADMIN!!</h3>
     <a href="http://localhost/managementSystem/public/Home/index">LOGOUT</a>
     </div>
</head>
<body>
<div class = "container">
<button class = "btn btn-primary my-2"><a href="insert" class="text-light">ADD USER</a></button>
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">S.NO</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">RoleType</th>
        <th scope="col">       </th>
        <th scope="col">Operation</th>
</thead>
<?php
  $readQuery = new AdminModel();
  $sql=$readQuery->displayData();
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['userName'];?></td>
   <td><?php echo $row['Email'];?></td>
    <td>
      <?php if($row['RoleId'] == 1) { echo "Admin"; } ?>
      <?php if($row['RoleId'] == 2) { echo "Employee"; } ?>
      <?php if($row['RoleId'] == 3) { echo "HR"; } ?>
    </td>
    <td>
    <td>
    <button class="btn btn-warning"><a href="update?id=<?php echo $row['id'];?>"class="text-light">UPDATE</a></button>
    <button class="btn btn-danger"><a href="delete?del=<?php echo $row['id'];?>" class="text-light">DELETE</a></button>
    </td>
    </tr>;
  </tr>
  <?php 
  if ($_SESSION["Message"] != "")
 {
   $Message= addslashes($_SESSION["Message"]);
   echo "<script type='text/javascript'>alert('$Message');</script>";
   unset($_SESSION["Message"]);
 }
?>
 <?php
  }
  $adminController = new Admin();
  $adminController->deleteAdmin();;
 ?>
</table>
</body>
</html>