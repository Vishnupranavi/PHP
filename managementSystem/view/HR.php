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
    <div class="topnav">
    <?php
    include("../helper/bootstrap.php");
    echo"<link rel='stylesheet' type='text/css' href='http://localhost/managementSystem/helper/style.css'/>";?>
    <h3>WELCOME EMPLOYEE</h3>
    <a href="http://localhost/managementSystem/public/Home/index">LOGOUT</a>
    </div>
    <br>
</head>
<body>
  <?php 
  echo $_SESSION['auth_user']['Email'];
  ?>
<div class="card" style="width: 100%;">
  <div class="card-body">
  <div class = "container ">
  <h5 class="card-title">JOB DETAILS</h5>
  <button class = "btn btn-primary my-2"><a href="http://localhost/managementSystem/public/HR/displayFirst" class="text-light">JD</a></button>
  </div>
  </div>
</div>
<div class="card" style="width: 100%;">
  <div class="card-body">
  <div class = "container ">
  <h5 class="card-title">INTERVIEW SCHEDULE</h5>
  <button class = "btn btn-primary my-2"><a href="http://localhost/managementSystem/public/HR/displaySecond" class="text-light">IS</a></button>
  </div>
</div>
</body>
</html>