<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1.0">
<?php
include("../helper/bootstrap.php");
?>
<title>LOGIN</title>
<nav class="navbar py-5 navbar-primary bg-light justify-content-center">
   <h1>WELCOME TO INTERVIEW PORTAL</h1>
</nav>
</head>
<body>
    <section>
    <div class="bg-image" 
     style="background-image: url('https://inspirationfeed.com/wp-content/uploads/2021/01/laura-davidson-QBAH4IldaZY-unsplash.jpg');
            height: 100vh width: 100vh">
               <div class="opacity-25">
     <div class="container my-2">
      <div class="d-flex align-items-center justify-content-center vh-100">
     <div class="col-10 col-sm-8 col-md-6 m-auto">
     <div class="card border-0 shadow">
      <div class="card body">
      <svg class="max-auto" xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" class="bi bi-align-center">
         
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
      <form action="" method="POST">
      <input type="text" name="userEmail" id="" class="form-control my-3 py-3" placeholder="Enter the UserID" required>
      <input type="password" name="userPassword" id="" class="form-control my-3 py-3" placeholder="Enter the Password" required>
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
</div>
</div>
<?php
   $loginObj= new login();
   $loginObj->login();
?>
</body>
</html>