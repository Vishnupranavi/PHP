<?php
class Employee{
  public function index(){
    $this->model("Employee");
    $this->view("Employee");
    }
  public function insert(){
    $this->model("feedback");
     $this->view("FeedbackForm");
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
       if(file_exists("../model/".$model.".php"))
        {
            include "../model/".$model.".php";
            
            return $model = new $model();
        }
        return false;
    } 
    public function insertfeed(){
        $insertfeed = new feedback();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                "ques1" => $_POST["q1"],
                "ques2" => $_POST["q2"],
                "ques3" => $_POST["q3"],
                "ques4" => $_POST["q4"],
                "ques5" => $_POST["q5"],
                "ques6" => $_POST["q6"],
                "ques7" => $_POST["q7"],
                "ques8" => $_POST["q8"],
                "ques9" => $_POST["q9"],
                "ques10" => $_POST["q10"],
                "ques11" => $_POST["q11"]
            );
            $id=$_GET['id'];
            $json = json_encode($data);
            $insert = $insertfeed->insertData($id,$json,"id");
            if($insert){
                echo '<script>alert("YOUR FEEDBACK SUBMITTED SUCCESSFULLY")</script>';
            }
            else{
                echo "not";
            }
        }
    }
}
?>