<?php
    $validation = new AdminModel();
?>
<!DOCTYPE html>
<head>
<?php
include("../helper/bootstrap.php");
?>
</head>
    <body>
        <div class="Container my-2">
        <div class="bg-grey">
        <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-10 col-sm-8 col-md-6 m-auto">
        <div class="card border-0 shadow">
        <div class="card body">
        <form id = "form_validation" method = "POST">
        <br>
        <div class="form-group">
          <label for="Name">NAME</label>
          <input type="text" class="form-control" id="rolename" placeholder="Enter Name" name = "roleName" onblur = "validateForm()">
          <span><?php $validation->nameValidate();?></span>
          <p></p>
       </div>
        <br>
        <div class="form-group">
        <label for="Email">EMAIL</label>
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name = "roleEmail" onblur = "validateForm()">
          <span><?php $validation->emailValidate();?></span>
          <p></p>
        </div>
        <div class="errormessage" id="emailerr"></div>
        <br>
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">ROLE</label>
        <select class="form-select" id="inputGroupSelect01" name = "roleId" required>
          <option selected>Choose..</option>
          <option value="2">employee</option>
          <option value="3">HR</option>
        </select>
        </div>
        <br>
        <div class="form-group">
          <label for="Password">PASSWORD</label>
          <input type="password" class="form-control" id="password" placeholder="Enter Password" name = "rolePassword" onblur = "validateForm()">
          <span><?php $validation->passwordValidate();?></span>
          <p></p>
        </div>
        <div class="errormessage" id="passworderr"></div>
        <br>
        <div class="form-group">
          <label for="confirm-password">CONFIRM-PASSWORD</label>
          <input type="password" class="form-control" id="confirmpassword" placeholder="Enter password again" name = "confirmpassword" onblur = "validateForm()">
          <span><?php $validation->confirmpasswordValidate();?></span>
		      <p></p>
		</div>
    <div class="errormessage" id="confirmpassworderr"></div>
    <br>
        <div class="d-grid gap-2 col-2 mx-auto">
        <input class="btn btn-primary"  value = "submit" type="submit" name="sub_btn">
        </div>
        </div>
      </form>
    </div>
</div>
</div>
</div>
</div>
</div>
 <script type="text/javascript" src="http://localhost/managementSystem/helper/validateForm.js"></script>
    <?php 
     $adminController = new Admin();
     $adminController->insertAdmin();
    ?>
</body>
</html>