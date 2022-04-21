<?php
class Newword{
    protected $link;
    private $username,$password;
    public function __contruct($username,$password){
        $this->username=$username;
        $this->password=$password;
        $this->connect();
    
    }
    private function connect()
    {
        $this->link = new PDO($this->username, $this->password);
    }
    public function __sleep(){
        return array('username','password');
    }
    public function __wakeup(){
        $this->connect();
    }

    public function __serialize(): array
    {
        return [
          'user' => $this->username,
          'pass' => $this->password,
        ];
    }
    public function __unserialize(array $data): void
    {
        $this->username = $data['username'];
        $this->password = $data['password'];

        $this->connect();
    }
    

}
?>