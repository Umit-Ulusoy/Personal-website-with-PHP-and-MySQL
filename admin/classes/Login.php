<?php

class Login
{

 public $username;
 public $password;

 private $conn;

 public function __CONSTRUCT($db)
 {
  $this->conn = $db;
 }

 public function login()
 {
  $query = $this->conn->prepare("SELECT * FROM managers WHERE Username=? AND Password=?");

  $query->bindParam(1, $this->username, PDO::PARAM_STR);
  $query->bindParam(2, $this->password, PDO::PARAM_STR);
  
  $query->execute();

  return $query;
 }
}