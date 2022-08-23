<?php
include("../helper/bootstrap.php");
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
  <?php include("../helper/bootstrap.php"); echo "<link rel='stylesheet' type='text/css' href='http://localhost/managementSystem/helper/style.css'/>";?>
  <div class="topnav">
  <h3>WELCOME TO  JOB DETAILS PAGE</h3>
  <a href="http://localhost/managementSystem/public/Home/index">LOGOUT</a>
  <a href="http://localhost/managementSystem/public/HR/index">DASHBOARD</a>
  </div>
</head>
<body>
  <button class = "btn btn-primary my-2"><a href="http://localhost/managementSystem/public/HR/insertFirst" class="text-light">ADD JD</a></button>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">JOB ID</th>
        <th scope="col">Stack</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        
</thead> 
<?php
  $read = new HRModel();
  $sql=$read->displayJob();
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo $row['JobID'];?></td>
    <td><?php echo $row['Stack'];?></td>
    <td><?php echo $row['StartDate'];?></td>
    <td><?php echo $row['EndDate'];?></td>
  </td>
  </tr>
 <?php
  }
?>
</table>
</body>
</html>