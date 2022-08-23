<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
<body>
<div class="topnav">
  
  <h3>WELCOME TO  JOB DETAILS PAGE</h3>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <a href="http://localhost/managementSystem/public/Home/index">LOGOUT</a>
  <a href="http://localhost/managementSystem/public/HR/index">DASHBOARD</a>
</div>
  <button class = "btn btn-primary my-2"><a href="http://localhost/managementSystem/public/HR/insertFirst" class="text-light">ADD JD</a></button>

</div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">JOB ID</th>
        <th scope="col">Stack</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        
</thead> 
<?php
$obj = new HR();
$obj->displayJd();
?>
</table>
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
</head>
</html>