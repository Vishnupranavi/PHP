<?php
$validation = new AdminModel();
?>
<?php
$id=$_GET['id'];
$display = new AdminModel();
$sql = $display->displayData($id);
$count = 0;
while($row = mysqli_fetch_array($sql))
{
  $row['userName'];
?>
<!DOCTYPE html>
<head>
       <?php echo include("../helper/bootstrap.php");?>
</head>
    <body>
        <div class="Container my-2">
        <form id = "form_validation" method ="POST">
        <div class="form-group">
          <label for="Name">Name</label>
          <input type="Name" class="form-control" value="<?php echo $row['userName']; ?>" id="rolename"  name = "roleName" onblur = "validateForm()">
          <span><?php $validation->nameValidate();?></span>
          <p></p>      
          </div>
        <div class="errormessage" id="nameerr"></div>
        <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" value="<?php echo $row['Email']; ?>"  id="email"  name = "roleEmail" onblur = "validateForm()">
        <span><?php $validation->emailValidate();?></span>
        <p></p>
        </div>
        <div class="errormessage" id="emailerr"></div>
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Role</label>
        <select class="form-select" id="inputGroupSelect01" value="<?php echo $row['RoleId']; ?>"  name = "roleId" required>
          <option selected>Choose..</option>
          <option value="2">employee</option>
          <option value="3">HR</option>
        </select>
        </div>
        <div class="form-group">
          <label for="Password">password</label>
          <input type="password" class="form-control" id="password" value="<?php echo $row['password']?>" name = "rolePassword" onblur = "validateForm()">
          <span><?php $validation->passwordValidate();?></span>
          <p></p>
        </div>
        <div class="errormessage" id="passworderr"></div>
        <div class="form-group">
          <label for="confirm-password">confirm-password</label>
          <input type="confirm-password" class="form-control" id="confirmpassword"  placeholder="Enter password again" name = "confirmpassword" onblur = "validateForm()">
          <span><?php $validation->confirmpasswordValidate();?></span>
          <p></p>
        </div>
        <?php
          $count++;
}
        ?>
        <div>
        <input class="btn btn-primary" type="submit" value="submit"  name="sub_btn">
        </div>
      </form>
    </div>
    <script type = "text/javascript" src="http://localhost/managementSystem/helper/validateForm.js"></script>
    <?php 
     $adminController = new Admin();
     $adminController->updateAdmin();
    ?>
</body>
</head>
</html>
