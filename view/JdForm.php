
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <body>
        <div class="Container my-9">
        <form method ="POST">
            <h2>ENTER THE DETAILS HERE</h2>
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
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    $obj2 = new JdForm();
    $obj2->insert();
    ?>
       <script src="<?php "echo BASEURL";?>helper/validations.js"></script>
</body>
</head>
</html>