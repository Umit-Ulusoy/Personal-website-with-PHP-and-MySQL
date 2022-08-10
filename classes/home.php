<?php

class Home
{

 private $conn;

 public function __CONSTRUCT($db)
 {
  $this->conn = $db;
 }

 public function getHome()
 {
$home = $this->conn->prepare("SELECT * FROM home LIMIT 1");
$home->execute();

return $home;
 }
}