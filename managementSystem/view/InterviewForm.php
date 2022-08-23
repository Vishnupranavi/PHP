<?php
$validation = new HRModel();
?>
<!DOCTYPE html>
<head>
    <?php
        include("../helper/bootstrap.php");
    ?>
</head>
    <body>
        <div class="Container my-2">
        <form id = "form_validation" method ="POST">
        <div class="form-group w-25 p-3" >
          <label for="Name">Candidate Name</label>
          <input type="Name" class="form-control" id="rolename" placeholder="Enter Name" name = "CandidateName" onblur = "validateForm()">
          <span><?php $validation->nameValidate();?></span>
          <p></p>      
        </div>
        <div class="form-group w-25 p-3">
        <label for="JobID">JobID</label>
          <input type="text" class="form-control" id="JobId" name="JobId" >
        </div>
        <div class="form-group w-25 p-3" >
        <label for="email">candidate Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name = "Email" onblur = "validateForm()">
          <span><?php $validation->emailValidate();?></span>
          <p></p>
        </div>
        <div class="form-group w-25 p-3" >
        <label for="experience">Experience</label>
          <input type="number" class="form-control" id="Experience" placeholder="Enter Experience" name ="Experience">
          <span><?php $validation->experienceValidate();?></span>
        </div>
        <div class="input-group  w-25 p-3" >
        <label for="profile">Profile</label>
        </div>
        <div class="input-group w-25 p-3" >
        <input type="file" class="form-control" id="pdf" name="pdf" value="">
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
        <div>
        <p><?php $validation->profileValidate();?></p>  
    </div>
      <div class="input-group w-25 p-3">
      <label for="reviewer name">Reviewer Name</label>
       </div>
        <div class="input-group w-25 p-3">
        <select class="form-select" id="reviewId" name = "ReviewerName">
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
      <div>
      <span><?php $validation->reviewerValidate();?></span> 
    </div>
        <label for="DateAndTime">Date And Time</label>
         <div class = "w-25 p-3">
       <input type="datetime-local" id="startDate" name="ISdateTime" class="form-control">
       </div>
       <div>
      <input class="btn btn-primary" type="submit" value="submit" name ="submit">
      </div>
      <div>
      <span><?php $validation->datetimeValidate();?></span>
    </div>
</form>
<script type="text/javascript" src="http://localhost/managementSystem/helper/validateForm.js"></script>
</body>
<?php
$hrController = new HR();
$hrController->insertSI();
?>
</html>

