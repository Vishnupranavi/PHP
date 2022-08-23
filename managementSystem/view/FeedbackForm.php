<?php
session_start();
  if(!isset($_SESSION['auth_user']['Email']))
    {
      header("location:/managementSystem/public/Home/index");

    }
?>
<!DOCTYPE html>
<head>
<?php include("../helper/bootstrap.php");?>
    <a href="http://localhost/managementSystem/public/Employee/index">LOGOUT</a>
</head>
<body>
<div class="Container my-2  vh-100">
<form method ="POST" action = "">
  <p>1)Would you recommend this candidate? *</p>
  <input type="radio" name="q1" value="1">
  <label for="yes">Yes</label><br>
  <input type="radio" name="q1" value="2">
  <label for="no">No</label><br>
  <br>  
  <p>2)Candidate Experience level *</p>
  <input type="radio" name="q2" value="1">
  <label for="Begginer">Begginer</label><br>
  <input type="radio"  name="q2" value="2">
  <label for="Average">Average</label><br>  
  <input type="radio" name="q2" value="3">
  <label for="Advanced">Advanced</label><br>
  <br>
  <div class="form-group" id="ques3" name="q3">
  <label for="text">3)Details for recommending or rejecting the Candidate *</label>
  <input type="text" class="form-control" name="q3" required>
  </div> 
  <br>
  <div class="form-group" id="ques4">
  <label for="text">4)Skill Areas in which the candidate has Expertise *</label>
  <input type="text" class="form-control" name="q4" required>
  </div>
  <br>
  <div class="form-group" id="ques5">
  <label for="text">5)Specific areas to be reached in the next round *</label>
  <input type="text" class="form-control"  name="q5" required>
  </div>
  <br>
  <div class="form-group" id="ques6">
  <label for="text">6)Logical and analytical skills *</label>
  <input type="text" class="form-control" name = "q6" required>
  </div>
  <br>
  <div class="form-group" id="ques7">
  <label for="text">7)Area of Weakness/Improvement *</label>
  <input type="text" class="form-control"  name = "q7" required>
  </div>
  <br>
  <div class="form-group" id="ques8">
  <label for="text">8)Roles and responsibility in the recent projects *</label>
  <input type="text" class="form-control" name="q8" required>
  </div>
  <br>
  <p>9)Communication skills *</p>
  <input type="radio" id="cs1" name="q9" value="1">
  <label for="yes">Yes</label><br>
  <input type="radio" id="cs2" name="q9" value="2">
  <label for="no">No</label><br>
  <br>
  <p>10)Attitude *</p>
  <input type="radio" id="attitude1" name="q10" value="1">
  <label for="good">Good</label><br>
  <input type="radio" id="attitude2" name="q10" value="2">
  <label for="average">Average</label><br>  
  <input type="radio" id="attitude3" name="q10" value="3">
  <label for="poor">Poor</label><br>
  <br>
  <p>11)Interview Status *</p>
  <input type="radio"  name="q11" value="1">
  <label for="selected">selected</label><br>
  <input type="radio" name="q11" value="3">
  <label for="rejected">Rejected</label><br><br>
    
  <div class="id input">
  <input id="submit" type="submit" name="submit" value="submit">
  </div>
</div>
 </div>
</form> 
</body> 
<?php 
$employeeController = new Employee();
$employeeController->insertfeed();
?>
</html>