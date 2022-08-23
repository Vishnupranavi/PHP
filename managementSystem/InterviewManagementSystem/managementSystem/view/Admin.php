<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<div class="topnav">
  <h3>WELCOME ADMIN!!</h3>
  <a href="http://localhost/managementSystem/public/Home/index">LOGOUT</a>
</div>
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
   $obj = new Admin();
   $obj->readAdmin();
   $obj->deleteAdmin();
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