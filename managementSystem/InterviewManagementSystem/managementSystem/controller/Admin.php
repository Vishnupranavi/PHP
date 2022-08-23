<?php
class Admin 
{     
  public function index(){
    $this->model("DBAbstract");
    $this->view("Admin");
  }
  public function insert()
  {
    $this->model("DBAbstract");
    $this->view("Form");
  }
  public function delete()
  {
    $this->model("DBAbstract");
    $this->view("Admin");
  }
  public function update()
  {
    $this->model("DBAbstract");
    $this->view("UpdateFormAdmin");
  }
  public function display()
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
public function insertAdmin(){
  $insertQuery = new DBAbstract();
  $userName = $_POST['roleName'];
  $userEmail = $_POST['roleEmail'];
  $userPassword = $_POST['rolePassword'];
 $userRole= $_POST['roleId'];

 $insert= $insertQuery->insertData($userName,$userEmail,$userPassword,$userRole);

 if($insert){
   echo "inserted";
      header("location:http://localhost/managementSystem/public/Admin/index");
}
else{
   echo "not";
}
}
public function readAdmin(){
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
          <button class="btn btn-warning"><a href="update?id=<?php echo $row['id'];?>"class="text-light">UPDATE</a></button>
          <button class="btn btn-danger"><a href="delete?del=<?php echo $row['id'];?>" class="text-light">DELETE</a></button>
          </td>
          </tr>;
        </tr>

       <?php
        }
    }
public function updateAdmin(){  
      $updateQuery = new DBAbstract();
      $id=$_GET['id'];
      var_dump($id);
      $userName=$_POST['roleName'];
      var_dump($userName);
      $userPassword=$_POST['rolePassword'];
      $userEmail=$_POST['roleEmail'];
      $userRole=$_POST['roleId'];
      $sql=$updateQuery->updateData($id,$userName,$userEmail,$userPassword,$userRole,"id");
     if($sql){
         echo "Updated";
          header("location:http://localhost/managementSystem/public/Admin/index");
      }
      else{
         echo "not updated";
     }
 }
public function deleteAdmin(){ 
      $delete = new DBAbstract();
      $id = $_GET['del'];
      var_dump($id);
       $sql = $delete->deleteData($id);
      if($sql)
      {
		header("location:http://localhost/managementSystem/public/Admin/index");
      }
            echo "Not";

    }
}
?>
