
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <body>
        <div class="Container my-2">
        <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-10 col-sm-8 col-md-6 m-auto">
        <div class="card border-0 shadow">
        <div class="card body">
        <form method ="POST">
        <div class="form-group">
          <label for="Name">NAME</label>
          <input type="Name" class="form-control" id="name" placeholder="Enter Name" name = "roleName" onchange = "nameValid()" required>
        </div>
        <div class="errormessage" id="nameerr"></div>
        <div class="form-group">
        <label for="Email">EMAIL</label>
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name = "roleEmail" onchange = "emailValid()" required>
        </div>
        <div class="errormessage" id="emailerr"></div>
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">ROLE</label>
        <select class="form-select" id="inputGroupSelect01" name = "roleId" required>
          <option selected>Choose..</option>
          <option value="2">employee</option>
          <option value="3">HR</option>
        </select>
        </div>
        <div class="form-group">
          <label for="Password">PASSWORD</label>
          <input type="password" class="form-control" id="password" placeholder="Enter Password" name = "rolePassword"  onchange = "passValid()" required>
        </div>
        <div class="errormessage" id="passworderr"></div>
        <div class="form-group">
          <label for="confirm-password">CONFIRM-PASSWORD</label>
          <input type="confirm-password" class="form-control" id="confirm-password" placeholder="Enter password again" name = "confirm-password" required>
        </div>
        <div class="text-center mt-3">
        <input class="btn btn-primary" type="submit" value="submit" name ="submit" onclick = "button()">
        </div>
      </form>
    </div>
</div>
</div>
</div>
</div>

<script src="<?php "echo BASEURL";?>helper/validations.js"></script>
</body>
    <?php 
     $obj = new Form();
     $obj->insert();
    ?>
</body>
</head>
</html>
