<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
<body>
    <?php echo $_SESSION['auth_user']['Email']; ?>
<div class="topnav">
  <h3>WELCOME EMPLOYEE</h3>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <a href="http://localhost/managementSystem/public/Home">LOGOUT</a>
</div>
<br>
<style>
.topnav {
  background-color: black;
  overflow: hidden;
  height: 100px;
}
.topnav h3{
  text-align: center;
  color: brown;
  text-decoration: none;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>

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
    $display = new Emp();
    $sql =  $display->display($_SESSION['auth_user']['id']);
    $count = 0;
    //var_dump(mysqli_fetch_array($sql));
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
       <button class="btn btn-primary"><a href="FeedbackForm" class="text-light">FEEDBACK</a></button>
    </td>
    </tr>
    <?php
       $count++;
    }
    ?>
    </tbody>
</table>
 </body>
</head>
</html>