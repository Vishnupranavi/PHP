<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
        <div class="Container my-2">
        <form method ="POST">
        <div class="form-grou w-25 p-3" >
          <label for="Name">Name</label>
          <input type="Name" class="form-control" id="name" placeholder="Enter Name" name = "CandidateName" required>
        </div>
        <div class="form-group w-25 p-3">
        <label for="JobID">JobID</label>
          <input type="text" class="form-control" id="JobId" name="JobId" >
        </div>
        <div class="form-group w-25 p-3" >
          <h5>Email<h5>
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name = "Email" required>
        </div>
        <div class="form-group w-25 p-3" >
          <h5>Experience<h5>
          <input type="number" class="form-control" id="Experience" placeholder="Enter Experience" name ="Experience" required>
        </div>
        <div class="input-group  w-25 p-3" >
         <h5>Profile</h5>
        </div>
        <div class="input-group w-25 p-3" >
        <input type="file" class="form-control" id="pdf" name="pdf" value="" required>
        <label class="input-group-text" for="inputGroupFile02"></label>
        <input id="upload" type="submit" name="submit" value="upload">
        <?php
          if(isset($_POST['submit'])){
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;
          move_uploaded_file($pdf_tem_loc,$pdf_store);
          }
        ?>
      </div>
      
      <div class="input-group w-25 p-3">
        <h5>Reviewer Name</h5>
       </div>
        <div class="input-group w-25 p-3">
        <select class="form-select" id="reviewId" name = "ReviewerName" required>
        <option value="">Select Reviewer</option>
        <?php
        $dropdownObj = new HRModel();
        $sql = $dropdownObj->dropdown();
        $count = 0;
        while($row = mysqli_fetch_array($sql)){
        ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['userName'];?>,<?php echo $row['id'];?></option>
       <?php
       $count++;
        }
        ?>
      </option>
      </select>
        </div>
        <label for="DateAndTime">Date And Time</label>
         <div class = "w-25 p-3">
       <input type="datetime-local" id="startDate" name="ISdateTime" class="form-control" required>
       </div>
       <div>
      <input class="btn btn-primary" type="submit" value="submit" name ="submit">
      </div>
</form>
</body>
<?php
$object = new HR();
$object->insertSI();
?>
</html>

