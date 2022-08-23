<?php
class feedback extends DataBase{
public function insertData($json){

    $sql = "INSERT INTO feedback_form(schedule_id,JSON)VALUES(2,'$json')";
   $insert = mysqli_query($this->conn,$sql);
   return $insert;
}
}
//     var_dump(($_SERVER['REQUEST_METHOD'] == 'POST'));
//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             $data = array(
//                 "ques1" => $_POST["q1"],
//                 "ques2" => $_POST["q2"],
//                 "ques3" => $_POST["q3"],
//                 "ques4" => $_POST["q4"],
//                 "ques5" => $_POST["q5"],
//                 "ques6" => $_POST["q6"],
//                 "ques7" => $_POST["q7"],
//                  "ques8" => $_POST["q8"],
//                  "ques9" => $_POST["q9"],
//                  "ques10" => $_POST["q10"],
//                  "ques11" => $_POST["q11"]
//             );
//             $json = json_encode($data);

//             $sql = "INSERT INTO feedback_form(schedule_id,JSON)VALUES(2,'$json')";
//             if($sql == true){
//               echo "inserted";
//             }
//             else{
//               echo "not inserted";
//             }
//             echo $sql;
//             echo($json);
//     }           
// ?>
  
  <?php        
        //   $name = "result";
        //   $file_name = $name . '.j34thhhhhhhson';
        //   var_dump($file_name);
        //   if(file_put_contents($file_name, $jsonfile)){
        //         echo $file_name .' file created';
        //       }       
        //   else {
        //      echo 'not created';
        //     }

//  var_dump(isset($_REQUEST['submit']));
//  if(isset($_REQUEST['submit'])){
//     $data='';
//     $filename = "feedbackform.json";
//     var_dump($filename);
//     if(is_file($filename)){
//         $data = file_get_contents($filename);
//     }
//     $json_arr = json_decode($data,true);
//     $json_arr[] = array('q3' => $_REQUEST['q3'], 'q4' => $_REQUEST['q4'], 'q5' => $_REQUEST['q5']);
//     var_dump($json_arr);
//     file_put_contents($filename, json_encode($json_arr));
//     if(file_put_contents()){
//       echo "true";
//     }   
//     else{
//       echo "false";
//     }
//  }
// if(isset($_POST['submit'])){
   

//    $new_message = array(
//    "q3" => $_POST['q3'],
//    'q4' => $_POST['q4'],
//    'q5' => $_POST['q5']
//    );
// var_dump($new_message);
// $name = "feedback";
//      $file_name = $name . '.json';
//      var_dump($file_name);
//     if(file_put_contents(
//    $file_name ,$new_message)){
//             echo $file_name .' file created';
//           }       
//      else {
//        echo 'There is some error';
//      }
// }
?>