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
     <h3>WELCOME EMPLOYEE</h3>
     <a href="http://localhost/managementSystem/public/Home/index">LOGOUT</a>
</div>
</head>
<body>
<div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">CandidateId</th>
        <th scope="col">JobId</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Experience</th>
        <th scope="col">DateTime</th>
        <th scope="col">Status</th>
        <th scope="col">Feedback</th>
</tr>
</thead>
<tbody>
<?php  
    $display = new EmployeeModel();
    $sql =  $display->display($_SESSION['auth_user']['id']);
    $count = 0;
    while($row = mysqli_fetch_array($sql)){
    ?>
    <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['JobID'];?></td>
       <td><?php echo $row['candidate_name'];?></td>
       <td><?php echo $row['email'];?></td>
       <td><?php echo $row['experience'];?></td>
       <td><?php echo $row['is_date_time'];?></td>
       <td><?php echo $row['interview_status'];?></td>
       <td>
       <button class="btn btn-primary"><a href="insert?id=<?php echo $row['id'];?>"class="text-light">FEEDBACK</a></button>
    </td>
    </tr>
    <?php
       $count++;
    }
    ?>
    </tbody>
</table>
  </body>
</html>