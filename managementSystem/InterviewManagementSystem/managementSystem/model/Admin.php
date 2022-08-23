<?php
namespace model;
class Admin extends Queries{
    private $userName;
    private $password;
    private $Email;
    private $RoleId;

public function setName($userName){
     $this->$userName = $userName;
}
public function getName(){
    return $userName;
}
public function setPassword($password){
    $this->$password = $password;

}
public function getPassword(){
    return $password;

}
public function setEmail($Email){
    $this->$password = $password;

}
public function getEmail(){
    return $password;

}
public function setRoleId($RoleId){
    $this->$RoleId = $RoleId;
}
public function getRoleId(){
    return $RoleId;

}
}