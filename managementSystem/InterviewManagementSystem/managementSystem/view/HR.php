<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="topnav">
  <h3>WELCOME EMPLOYEE</h3>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <a href="http://localhost/managementSystem/public/Home">LOGOUT</a>
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
</body>
</html>