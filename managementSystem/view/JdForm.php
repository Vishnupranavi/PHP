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
        <?php
           include("../helper/bootstrap.php");
        ?>
            <div class="Container my-9">
            <form method ="POST">
            <h2>ENTER THE DETAILS HERE</h2>
  </head>
   <body>
        <h5>ROLE</h5>
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">STACK</label>
        <select class="form-select" id="inputGroupSelect01" name = "stack" required>
          <option selected>Choose..</option>
          <option value='php'>PHP</option>
          <option value='mysql'>MYSQL</option>
          <option value='python'>PYTHON</option>
          <option value='react'>REACT</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">DESCRIPTION</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "description"></textarea>
        </div>
        <label for="START DATE ">START DATE</label>
       <div>
       <input type="datetime-local" id="startDate" name="startDate" value="2018-06-12T19:30" required>
       </div>
       <label for="END DATE"> END DATE</label>
       <div>
       <input type="datetime-local" id="startDate" name="endDate" value="2018-06-12T19:30" required>
       </div>
        <div>
        <input class="btn btn-primary" type="submit" value="submit" name ="submit">
        </div>
      </form>
    </div>
    <?php
    $hrController = new HR();
    $hrController->insert();
    ?>
</body>
</html>