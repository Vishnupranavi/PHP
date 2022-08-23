<?php
class Feedback extends DBConnection{
public function insertData($id,$json){

    $sql = "UPDATE feedback_form SET JSON = '".$json."' WHERE schedule_id = $id";
   $insert = mysqli_query($this->conn,$sql);
   return $insert;
}
public function insertfeed(){
    $insertfeed = new Feedback();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = array(
            "question_1001" => $_POST["q1"],
            "question_1002" => $_POST["q2"],
            "question_1003" => $_POST["q3"],
            "question_1004" => $_POST["q4"],
            "question_1005" => $_POST["q5"],
            "question_1006" => $_POST["q6"],
            "question_1007" => $_POST["q7"],
            "question_1008" => $_POST["q8"],
            "question_1009" => $_POST["q9"],
            "question_1010" => $_POST["q10"],
            "question_1011" => $_POST["q11"]
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