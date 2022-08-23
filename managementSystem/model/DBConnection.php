<?php
class DBConnection{
    private $servername = "localhost";
    private $username = "root";
    private $password = "Weakpass$12";
    private $db = "hrInterviewManagemet";

    public $conn;

    public function __construct()
    {
      $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db);

      if($this->conn)
      {
       // echo "connect";
      }
      else{
        echo "not";
      }
    }
}
?>
