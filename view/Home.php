<!DOCTYPE html>
<html>
 <head>
  <body>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>LOGIN</title>
  <nav class="navbar py-5 navbar-dark bg-primary">
     <h1>WELCOME TO INTERVIEW PORTAL</h1>
</nav>
</head>
    <section>
     <div class="container my-2">
      <div class="d-flex align-items-center justify-content-center vh-100">
     <div class="col-10 col-sm-8 col-md-6 m-auto">
     <div class="card border-0 shadow">
      <div class="card body">
      <svg class="max-auto align-center" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
      <form action="" method="POST">
      <input type="text" name="userEmail" id="" class="form-control my-3 py-3" placeholder="Enter the UserID" required>
      <input type="text" name="userPassword" id="" class="form-control my-3 py-3" placeholder="Enter the Password" required>
      <div class="text-center mt-3">
      <button class="btn btn-primary" name="submit">Login</button>
      </div>
      </form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
   $obj = new login();
   $obj->login();
?>
</body>
</html>
                       
