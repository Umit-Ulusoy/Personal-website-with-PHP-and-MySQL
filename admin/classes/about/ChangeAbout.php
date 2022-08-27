<?php

class ChangeAbout
{

 public $headline;
 public $content;

 private $conn;

 public function __CONSTRUCT($db)
 {

  $this->conn = $db;
 }

 public function changeAbout()
 {

  $changeAbout = $this->conn->prepare("UPDATE about SET Headline=?, Content=? WHERE Id='1'");

  $changeAbout->bindParam(1, $this->headline, PDO::PARAM_STR);
  $changeAbout->bindParam(2, $this->content, PDO::PARAM_STR);

  $changeAbout->execute();

  return $changeAbout;
 }

 
 
}