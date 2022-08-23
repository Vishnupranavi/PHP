<?php
class JobDetailsForm{
  public function index(){
   $this->model("HR");
    $this->view("JobDetailsForm");

  }
   public function view($view){
   var_dump(file_exists("../view/".$view.".php"));
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

   public function Display(){
        $read = new HR();
        $sql=$read->displayJob();
       //var_dump($row=mysqli_fetch_array($sql));
        while($row=mysqli_fetch_array($sql))
        {
        ?>
          <tr>
          <td><?php echo $row['JobID'];?></td>
          <td><?php echo $row['Stack'];?></td>
          <td><?php echo $row['StartDate'];?></td>
          <td><?php echo $row['EndDate'];?></td>
        </td>
        </tr>
       <?php
        }
    }

   }