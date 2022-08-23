<?php
class Admin{     
   public function index()
    {   
        $this->model("DBAbstract");
        $this->view("Admin");
    }

  public function view($view){
   if(file_exists("../view/".$view.".php"))
  {
      include "../view/".$view.".php";
  }
  else{
        echo "false";
  }
  }
  public function model($model)
 {
    if(file_exists("../model/". $model .".php"))
    {
        include "../model/". $model .".php";
        return $model = new $model();
    }
    return false;
 }
  public function read(){
        $readQuery = new DBAbstract();
        $sql=$readQuery->displayData();
        while($row=mysqli_fetch_array($sql))
        {
        ?>
          <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['userName'];?></td>
         <td><?php echo $row['Email'];?></td>
          <td><?php echo $row['RoleId'];?></td>
          <td>
          <td>
          <button class="btn btn-warning"><a href="UpdateFormAdmin?id=<?php echo $row['id'];?>&roleName=<?php echo $row['roleName'];?>&roleEmail=<?php echo $row['roleEmail'];?>&rolePassword=<?php echo $row['rolePassword'];?>"class="text-light">UPDATE</a></button>
          <button class="btn btn-danger"><a href="Admin?del=<?php echo $row['id'];?>" class="text-light">DELETE</a></button>
          </td>
          <!-- <td>
          <button class="btn btn-success"><a href="activate.php" class="text-light">ACTIVATE</a></button>
          <button class="btn btn-danger"><a href="deactivate.php" class="text-light">DEACTIVATE</a></button>
          </td> -->
          </tr>;
        </tr>

       <?php
        }
    }
    public function delete(){  
      $delete = new DBAbstract();
      $id = $_GET['del'];
      var_dump($id);
       $sql = $delete->deleteData($id);
      if($sql)
      {
            header("location:http://localhost/managementSystem/public/Admin");
      }
            echo "Not";

    }
}

