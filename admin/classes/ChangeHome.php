<?php

class ChangeHome
{

 public $headline;
 public $content;

 private $conn;

 public function __CONSTRUCT($db)
 {
  $this->conn = $db;
 }

 public function changeHome()
 {
  $change = $this->conn->prepare("UPDATE home SET Headline=?, Content=? WHERE Id='1'");
  $change->bindParam('1', $this->headline, PDO::PARAM_STR);
  $change->bindParam('2', $this->content, PDO::PARAM_STR);
    $change->execute();

  return $change;
 }
}