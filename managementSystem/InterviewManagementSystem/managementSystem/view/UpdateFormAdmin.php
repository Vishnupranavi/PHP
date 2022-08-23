<?php
echo "hi";
echo $id=$_GET['id'];
$display = new DBAbstract();
$sql = $display->displayData($id);
$count = 0;
while($row = mysqli_fetch_array($sql))
{
  echo $row['userName'];

?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <body>
        <div class="Container my-2">
        <form method ="POST">
        <div class="form-group">
          <label for="Name">Name</label>
          <input type="Name" class="form-control" value="<?php echo $row['userName']; ?>" id="Name"  name = "roleName" required>
        </div>
        <div class="errormessage" id="nameerr"></div>
        <div class="form-group">
        <label for="Email">Email</label>
          <input type="email" class="form-control" value="<?php echo $row['Email']; ?>"  id="email"  name = "roleEmail" required>
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
          <input type="password" class="form-control" id="password" value="<?php echo $row['password']?>" name = "rolePassword" required>
        </div>
        <div class="errormessage" id="passworderr"></div>
        <div class="form-group">
          <label for="confirm-password">confirm-password</label>
          <input type="confirm-password" class="form-control" id="confirm-password"  placeholder="Enter password again" name = "confirm-password" required>
        </div>
        <?php
          $count++;
}
        ?>
        <div>
        <input class="btn btn-primary" type="submit" value="submit" name ="submit">
        </div>
      </form>
    </div>
    <?php 
     $obj = new Admin();
     $obj->updateAdmin();
    ?>
</body>
</head>
</html>
