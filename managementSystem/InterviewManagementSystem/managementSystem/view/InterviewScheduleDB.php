<?php
echo  $id = $_GET['id'];
echo $status = $_GET['status'];
$set = new HRModel();
$set->displayStatus($id,$status);
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
<body>
<div class="topnav">
  <h3>INTERVIEW SCHEDULE TABLE</h3>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <a href="http://localhost/managementSystem/public/Home/index">LOGOUT</a>
  <a href="http://localhost/managementSystem/public/HR/index">DASHBOARD</a>
</div>
<div class = "container ">
  <button class = "btn btn-primary my-2"><a href="http://localhost/managementSystem/public/HR/insertSecond" class="text-light">ADD SI</a></button>
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">S.NO</th>
        <th scope="col">JobID</th>
        <th scope="col">CandidateName</th>
        <th scope="col">Email</th>
        <th scope="col">Experience</th>
        <th scope="col">ReviewerName</th>
        <th scope="col">DateAndTime</th>
        <th scope="col">Change Status</th>
        <th scope="col">Status</th>
     </thead>
     <tbody>
     <?php
        $readQuery = new HRModel();
        $sql = $readQuery->display();
        // var_dump($sql);
        $count = 0;
         while($row = mysqli_fetch_array($sql)){
         ?>
         <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['JobID']; ?></td>
            <td><?php echo $row['candidate_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['experience']; ?></td>
            <td><?php echo $row['reviewer_id']; ?></td>
            <td><?php echo $row['is_date_time']; ?></td>
            <td>
            <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id']; ?>')">
             <option>--SELECT STATUS--</option>
             <option value="Scheduled">Scheduled</option>
             <option value="Candidate Not AVailable">Candidate Not Available</option>
             <option value="Declined">Declined</option>
             <option value="Level 1">Level 1</option>
             <option value="Level 2">Level 2</option>
            </select>
            </td>
            <td><?php echo $row['interview_status']; ?></td>
            </tr>
             <?php
                $count++;
              }
            ?>
           </tbody>   
        </table>
    </div>
<script>
    function status_update(value,id)
    {
        let url = "";
        window.location.href = url+"?id="+id+"&status="+value;
    }
</script>  
   </table>
<style>
.topnav {
  background-color: black;
  overflow: hidden;
  height: 100px;
}
.topnav h3{
  text-align: center;
  color: brown;
  text-decoration: none;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
 </body>
 
</head>
</html>